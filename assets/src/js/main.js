import "../css/main.scss";

import * as mouse_trail from "./mouse_trail.js";
document.addEventListener("DOMContentLoaded", (event) => {
  mouse_trail.init();
});

document.fonts.onloadingdone = function (fontFaceSetEvent) {
  document.body.classList += " fontsLoaded";
};

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
