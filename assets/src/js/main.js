import "../css/main.scss";

import * as mouse_trail from "./mouse_trail.js";
document.addEventListener("DOMContentLoaded", (event) => {
  mouse_trail.init();
});

// Intro animation: wait for fonts and portrait, then let the initial state
// paint once (double rAF) so the transitions always play from the start
const portrait = document.querySelector(".face img");
Promise.all([
  document.fonts.load('bold 1em "Playfair Display"'),
  document.fonts.load('1em "Roboto"'),
  portrait ? portrait.decode().catch(() => {}) : null,
])
  .catch(() => {})
  .then(() => {
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        document.body.classList.add("fontsLoaded");

        // The "Bonjour !" arc is an SVG animation: CSS `d` transitions don't work in Safari
        const arc = document.querySelector(".image animate");
        if (arc) setTimeout(() => arc.beginElement(), 700);
      });
    });
  });

// Skills badges appear one after the other when the stack scrolls into view
const stack = document.querySelector(".stack");
if (
  stack &&
  "IntersectionObserver" in window &&
  !window.matchMedia("(prefers-reduced-motion: reduce)").matches
) {
  stack.querySelectorAll("dd").forEach((badge, index) => {
    badge.style.setProperty("--reveal-index", index);
  });
  stack.classList.add("reveal");

  const observer = new IntersectionObserver(
    (entries) => {
      if (entries.some((entry) => entry.isIntersecting)) {
        stack.classList.add("is-visible");
        observer.disconnect();
      }
    },
    { threshold: 0.3 },
  );
  observer.observe(stack);
}

// Scroll to
const scrollto_links = document.querySelectorAll(".scrollto");
let i;
if (scrollto_links && scrollto_links.length) {
  for (i = 0; i < scrollto_links.length; ++i) {
    scrollto_links[i].addEventListener(
      "click",
      function (e) {
        e.preventDefault();
        let target = document.querySelector(
          e.currentTarget.getAttribute("href"),
        );
        if (target) {
          target.scrollIntoView({
            behavior: "smooth",
          });
        }
      },
      true,
    );
  }
}

// Theme toggle
const btn = document.querySelector(".btn-toggle-theme");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

btn.addEventListener("click", function () {
  if (document.body.classList.contains("light-mode")) {
  }

  if (prefersDarkScheme.matches) {
    if (
      document.body.classList.contains("light-mode") ||
      document.body.classList.contains("dark-mode")
    ) {
      if (document.body.classList.contains("light-mode")) {
        document.body.classList.remove("light-mode");
        document.body.classList.add("dark-mode");
      } else {
        document.body.classList.remove("dark-mode");
        document.body.classList.add("light-mode");
      }
    } else {
      document.body.classList.add("light-mode");
    }
  } else {
    if (
      document.body.classList.contains("light-mode") ||
      document.body.classList.contains("dark-mode")
    ) {
      if (document.body.classList.contains("dark-mode")) {
        document.body.classList.remove("dark-mode");
        document.body.classList.add("light-mode");
      } else {
        document.body.classList.remove("light-mode");
        document.body.classList.add("dark-mode");
      }
    } else {
      document.body.classList.add("dark-mode");
    }
  }
  var theme = document.body.classList.contains("light-mode") ? "light" : "dark";
  document.cookie = "theme=" + theme;
});
