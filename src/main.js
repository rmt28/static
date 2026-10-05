import './style.css';
import '../public/vendor/fontawesome/all.min.js';
import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger);

const root = document.documentElement;
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

// 1. Lenis (Smooth Scroll)
const lenis = new Lenis({
  duration: 1.8,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  orientation: 'vertical',
  gestureOrientation: 'vertical',
  smoothWheel: true,
  wheelMultiplier: 0.8,
  touchMultiplier: 1.5,
  lerp: 0.05,
});

lenis.on('scroll', ScrollTrigger.update);
gsap.ticker.add((time) => lenis.raf(time * 1000));
gsap.ticker.lagSmoothing(0);

// 2. Alpine.js
window.Alpine = Alpine;
Alpine.start();

// 3. Expose ke global
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;
window.lenis = lenis;

// 4. Helpers
// Elemen animasi disembunyikan lewat CSS inline di <head> (class .js).
// Di sini kita HANYA memakai fromTo/autoAlpha supaya state akhirnya selalu terlihat.
const getDuration = (el) => parseFloat(el.dataset.duration) || 1;
const getDelay = (el) => parseFloat(el.dataset.delay) || 0;
const isRendered = (el) => el.getClientRects().length > 0; // false jika di dalam display:none
const reveal = (targets) => gsap.set(targets, { autoAlpha: 1 });

const scrollTriggerFor = (el) => ({
  trigger: el,
  start: 'top 85%',
  toggleActions: 'play none none none',
});

const PRESETS = {
  'fade-right': { from: { x: 100 }, ease: 'power3.out' },
  'fade-left': { from: { x: -100 }, ease: 'power3.out' },
  'fade-down': { from: { y: -80 }, ease: 'power3.out' },
  'fade-up': { from: { y: 80 }, ease: 'power3.out' },
  'zoom-in': { from: { scale: 0.5 }, ease: 'back.out(1.7)' },
  'zoom-out': { from: { scale: 1.4 }, ease: 'power3.out' },
};

function animateWords(el) {
  const words = el.textContent.trim().split(/\s+/);
  el.setAttribute('aria-label', words.join(' '));
  el.textContent = '';

  const targets = words.map((word, i) => {
    const wrap = document.createElement('span');
    wrap.className = 'inline-block overflow-hidden pb-1';
    wrap.setAttribute('aria-hidden', 'true');

    const inner = document.createElement('span');
    inner.className = 'word inline-block';
    inner.textContent = word;

    wrap.append(inner);
    el.append(wrap);
    if (i < words.length - 1) el.append(' ');
    return inner;
  });

  gsap.fromTo(
    targets,
    { yPercent: 100, autoAlpha: 0 },
    {
      yPercent: 0,
      autoAlpha: 1,
      duration: getDuration(el),
      delay: getDelay(el),
      ease: 'power4.out',
      stagger: parseFloat(el.dataset.stagger) || 0.08,
      scrollTrigger: scrollTriggerFor(el),
    }
  );
  reveal(el); // wadah baru ditampilkan setelah kata-kata sudah di posisi awal
}

function initScrollAnimations() {
  document.querySelectorAll('[data-gsap]').forEach((el) => {
    // Reduced motion / elemen di panel tersembunyi (mis. tab 1150 MT): langsung tampil
    if (prefersReducedMotion || !isRendered(el)) return reveal(el);

    const type = el.dataset.gsap;
    if (type === 'text-words') return animateWords(el);

    const preset = PRESETS[type];
    if (!preset) return reveal(el);

    const to = Object.fromEntries(
      Object.keys(preset.from).map((k) => [k, k === 'scale' ? 1 : 0])
    );

    gsap.fromTo(
      el,
      { ...preset.from, autoAlpha: 0 },
      {
        ...to,
        autoAlpha: 1,
        duration: getDuration(el),
        delay: getDelay(el),
        ease: preset.ease,
        scrollTrigger: scrollTriggerFor(el),
      }
    );
  });
}

function initHero() {
  const label = gsap.utils.toArray('.gsap-hero-label');
  const subtitle = gsap.utils.toArray('.gsap-hero-subtitle');
  const chars = gsap.utils.toArray('.hero-char');
  if (!label.length && !subtitle.length && !chars.length) return;

  if (prefersReducedMotion) return reveal([...label, ...subtitle, ...chars]);

  const tl = gsap.timeline();

  if (label.length) {
    tl.fromTo(
      label,
      { autoAlpha: 0, scale: 0.8 },
      { autoAlpha: 1, scale: 1, duration: 0.6, ease: 'back.out(1.7)' },
      0
    );
  }

  if (chars.length) {
    tl.fromTo(
      chars,
      {
        autoAlpha: 0,
        x: (i) => (i % 2 === 0 ? -8 : 8),
        y: (i) => (i % 2 === 0 ? -24 : 24),
      },
      { autoAlpha: 1, x: 0, y: 0, duration: 0.7, ease: 'power2.out', stagger: 0.03 },
      0.1
    );
  }

  if (subtitle.length) {
    tl.fromTo(
      subtitle,
      { autoAlpha: 0, y: 30, scale: 0.95 },
      { autoAlpha: 1, y: 0, scale: 1, duration: 0.8, ease: 'power2.out' },
      0.9
    );
  }
}

// 5. Boot: tunggu font siap (maks 1.5 dtk) -> baru tampilkan halaman & mulai animasi
const fontsReady = Promise.race([
  document.fonts
    ? Promise.all([
        document.fonts.load('1em Outfit'),
        document.fonts.load('700 1em "Space Grotesk"'),
      ]).catch(() => {})
    : Promise.resolve(),
  new Promise((resolve) => setTimeout(resolve, 1500)),
]);

fontsReady.then(() => {
  root.classList.add('ready');
  initHero();
  initScrollAnimations();
  ScrollTrigger.refresh();
});

window.addEventListener('load', () => ScrollTrigger.refresh());