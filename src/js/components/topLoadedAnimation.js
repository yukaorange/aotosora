import gsap from 'gsap';

export function topLoadedAnimation() {
  const chars = document.querySelectorAll('.js-topAnim__headline span.char');
  const tl = gsap.timeline();
  tl.set(chars, { opacity: 0 });

  tl.call(() => {
    document.body.classList.add('loaded');
  }).to(
    chars,
    { delay: 0.5, opacity: 1, duration: 2, stagger: 0.1, ease: 'power2.inOut' },
    '+=0.2'
  );
}
