import './style.css';
import '../public/vendor/fontawesome/all.min.js';
import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

// Register Plugin GSAP
gsap.registerPlugin(ScrollTrigger);

// 1. Inisialisasi Lenis (Smooth Scroll)
const lenis = new Lenis({
  duration: 1.8,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  orientation: 'vertical',
  gestureOrientation: 'vertical',
  smoothWheel: true,
  wheelMultiplier: 0.8,
  touchMultiplier: 1.5,
  lerp: 0.05
});

// Hubungkan Lenis dengan GSAP ScrollTrigger & Ticker
lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time) => {
  lenis.raf(time * 1000);
});

gsap.ticker.lagSmoothing(0);

// 2. Inisialisasi Alpine.js
window.Alpine = Alpine;
Alpine.start();

// 3. Expose ke global window
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;
window.lenis = lenis;

// 4. GSAP ScrollTrigger Animations
document.addEventListener("DOMContentLoaded", () => {
  // Helper function untuk atribut kustom
  const getDuration = (el) => parseFloat(el.dataset.duration) || 1;
  const getDelay = (el) => parseFloat(el.dataset.delay) || 0;

  const defaultScrollTrigger = (element) => ({
    trigger: element,
    start: "top 85%",
    toggleActions: "play none none none",
  });

  // 1. Fade Right
  gsap.utils.toArray('[data-gsap="fade-right"]').forEach((el) => {
    gsap.from(el, {
      x: 100,
      opacity: 0,
      duration: getDuration(el),
      delay: getDelay(el),
      ease: "power3.out",
      scrollTrigger: defaultScrollTrigger(el),
    });
  });

  // 2. Fade Left
  gsap.utils.toArray('[data-gsap="fade-left"]').forEach((el) => {
    gsap.from(el, {
      x: -100,
      opacity: 0,
      duration: getDuration(el),
      delay: getDelay(el),
      ease: "power3.out",
      scrollTrigger: defaultScrollTrigger(el),
    });
  });

  // 3. Fade Down
  gsap.utils.toArray('[data-gsap="fade-down"]').forEach((el) => {
    gsap.from(el, {
      y: -80,
      opacity: 0,
      duration: getDuration(el),
      delay: getDelay(el),
      ease: "power3.out",
      scrollTrigger: defaultScrollTrigger(el),
    });
  });

  // 4. Fade Up
  gsap.utils.toArray('[data-gsap="fade-up"]').forEach((el) => {
    gsap.from(el, {
      y: 80,
      opacity: 0,
      duration: getDuration(el),
      delay: getDelay(el),
      ease: "power3.out",
      scrollTrigger: defaultScrollTrigger(el),
    });
  });

  // 5. Zoom In
  gsap.utils.toArray('[data-gsap="zoom-in"]').forEach((el) => {
    gsap.from(el, {
      scale: 0.5,
      opacity: 0,
      duration: getDuration(el),
      delay: getDelay(el),
      ease: "back.out(1.7)",
      scrollTrigger: defaultScrollTrigger(el),
    });
  });

  // 6. Zoom Out
  gsap.utils.toArray('[data-gsap="zoom-out"]').forEach((el) => {
    gsap.from(el, {
      scale: 1.4,
      opacity: 0,
      duration: getDuration(el),
      delay: getDelay(el),
      ease: "power3.out",
      scrollTrigger: defaultScrollTrigger(el),
    });
  });

  // 7. Text Words Reveal
  gsap.utils.toArray('[data-gsap="text-words"]').forEach((el) => {
    const text = el.innerText.trim();
    const words = text.split(/\s+/);

    el.innerHTML = words
      .map(
        (word) =>
          `<span class="inline-block overflow-hidden pb-1"><span class="word inline-block">${word}</span></span>`
      )
      .join(" ");

    const targetWords = el.querySelectorAll(".word");

    gsap.from(targetWords, {
      y: "100%",
      opacity: 0,
      duration: getDuration(el),
      delay: getDelay(el),
      ease: "power4.out",
      stagger: parseFloat(el.dataset.stagger) || 0.08,
      scrollTrigger: defaultScrollTrigger(el),
    });
  });
});