const COUNT = 20;
const SPRING = 0.06;
const FRICTION = 0.85;
const THICKNESS = 30;
const REST_DISTANCE = 0.5;
const COLOR = "#ffffff";

function init() {
  const desktop = window.matchMedia("(min-width: 992px)");
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");

  const canvas = document.createElement("canvas");
  canvas.setAttribute("aria-hidden", "true");
  const ctx = canvas.getContext("2d");
  if (!ctx) return;
  document.body.appendChild(canvas);

  const points = [];
  for (let i = 0; i < COUNT; i++) points.push({ x: 0, y: 0 });
  const mouse = { x: 0, y: 0 };
  const velocity = { x: 0, y: 0 };

  let enabled = false;
  let started = false;
  let running = false;

  function resize() {
    const dpr = Math.min(window.devicePixelRatio || 1, 2);
    canvas.width = window.innerWidth * dpr;
    canvas.height = window.innerHeight * dpr;
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
  }

  function updateEnabled() {
    enabled = desktop.matches && !reducedMotion.matches;
    if (!enabled) {
      started = false;
      ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);
    }
  }

  function onPointerMove(e) {
    if (!enabled) return;
    mouse.x = e.clientX;
    mouse.y = e.clientY;

    // First move: start the line on the cursor instead of the corner
    if (!started) {
      started = true;
      points.forEach((p) => {
        p.x = mouse.x;
        p.y = mouse.y;
      });
    }
    if (!running) {
      running = true;
      requestAnimationFrame(update);
    }
  }

  function draw() {
    ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);

    // Build both edges of the ribbon, thicker in the middle, thin at both ends
    const left = [];
    const right = [];
    for (let i = 0; i < COUNT; i++) {
      const prev = points[Math.max(i - 1, 0)];
      const next = points[Math.min(i + 1, COUNT - 1)];
      const dx = next.x - prev.x;
      const dy = next.y - prev.y;
      const length = Math.hypot(dx, dy);
      if (!length) continue;

      const taper = 1 - Math.pow(Math.abs(i / (COUNT - 1) - 0.5) * 2, 2);
      const half = (THICKNESS / 2) * taper * Math.min(length / 10, 1);
      const nx = (-dy / length) * half;
      const ny = (dx / length) * half;
      left.push([points[i].x + nx, points[i].y + ny]);
      right.push([points[i].x - nx, points[i].y - ny]);
    }
    if (left.length < 2) return;

    ctx.beginPath();
    ctx.moveTo(left[0][0], left[0][1]);
    left.forEach(([x, y]) => ctx.lineTo(x, y));
    right.reverse().forEach(([x, y]) => ctx.lineTo(x, y));
    ctx.closePath();
    ctx.fillStyle = COLOR;
    ctx.fill();
  }

  function update() {
    if (!enabled) {
      running = false;
      return;
    }

    // The head springs to the mouse, the rest of the points follow the one in front
    velocity.x = (velocity.x + (mouse.x - points[0].x) * SPRING) * FRICTION;
    velocity.y = (velocity.y + (mouse.y - points[0].y) * SPRING) * FRICTION;
    points[0].x += velocity.x;
    points[0].y += velocity.y;
    for (let i = COUNT - 1; i > 0; i--) {
      points[i].x += (points[i - 1].x - points[i].x) * 0.9;
      points[i].y += (points[i - 1].y - points[i].y) * 0.9;
    }

    draw();

    // Stop the loop once the whole line has caught up with the cursor
    const tail = points[COUNT - 1];
    if (
      Math.hypot(mouse.x - tail.x, mouse.y - tail.y) < REST_DISTANCE &&
      Math.hypot(velocity.x, velocity.y) < REST_DISTANCE
    ) {
      ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);
      running = false;
      return;
    }
    requestAnimationFrame(update);
  }

  resize();
  updateEnabled();

  window.addEventListener("resize", resize);
  window.addEventListener("pointermove", onPointerMove, { passive: true });
  desktop.addEventListener("change", updateEnabled);
  reducedMotion.addEventListener("change", updateEnabled);
}

export { init };
