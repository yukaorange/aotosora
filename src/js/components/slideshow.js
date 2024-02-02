// export function base_slideShowMask(slide) {
//   setInterval(() => {
//     const slides = [...document.querySelectorAll(slide)];
//     const activeSlide = document.querySelector(`${slide}.active`);
//     const beforeSlide = document.querySelector(`${slide}.before`);
//     const activeSlideIndex = [...slides].indexOf(activeSlide);
//     const nextSlideIndex = activeSlideIndex + 1;
//     const nextSlide = slides[nextSlideIndex];

//     beforeSlide.classList.remove('before');
//     activeSlide.classList.remove('active');

//     if (nextSlide) {
//       activeSlide.classList.add('before');
//       nextSlide.classList.add('active');
//     } else {
//       activeSlide.classList.add('before');
//       slides[0].classList.add('active');
//     }
//   }, 4000);
// }

export function slideShowMask(slide) {
  let activeSlideIndex = 0;
  const slides = [...document.querySelectorAll(slide)];
  let intervalId;

  slides[activeSlideIndex].classList.add('active');

  const slideShow = () => {
    slides.forEach((slide) => slide.classList.remove('before'));

    const activeSlide = slides[activeSlideIndex];
    const nextSlideIndex = (activeSlideIndex + 1) % slides.length;
    const nextSlide = slides[nextSlideIndex];

    if (activeSlide) {
      activeSlide.classList.remove('active');
      activeSlide.classList.add('before');
    }

    if (nextSlide) {
      nextSlide.classList.remove('before');
      nextSlide.classList.add('active');
    }

    activeSlideIndex = nextSlideIndex;
  };

  intervalId = setInterval(slideShow, 5000);

  window.addEventListener('blur', () => {
    clearInterval(intervalId);
  });

  window.addEventListener('focus', () => {
    intervalId = setInterval(slideShow, 5000);
  });
}
