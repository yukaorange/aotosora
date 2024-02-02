//modules
import { Loading } from './components/loading';
import { DrawerMenu, setViewPort, setHeaderHeight, ScrollObserver } from './components/common';
import { loadedAnimation } from './components/loadedAnimation';
import { slideShowMask } from './components/slideshow';
import { videoPlayObserver } from './components/lowBatteryObserver';
import { modalInit } from './components/modal';
// import { SwiperManager } from './components/slider';
import { topLoadedAnimation } from './components/topLoadedAnimation';
import 'splitting/dist/splitting.css';
import 'splitting/dist/splitting-cells.css';
import Splitting from 'splitting';
import Lenis from '@studio-freight/lenis';

function init() {
  const lenis = new Lenis({
    wrapper: document.querySelector('.js-scroller'),
    content: document.querySelector('.js-scroller__content'),
  });
  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);

  setViewPort();
  setHeaderHeight('.header');

  const drawerMenu = new DrawerMenu(
    '.drawer-button',
    '.drawer-nav',
    '.drawer-nav__inner',
    '.drawer-nav a',
    '.drawer-close'
  );

  if (document.querySelector('.js-videoPlayObserver')) {
    videoPlayObserver('.js-common-movie__video', '.js-common-movie__movieAltImage');
  }

  if (document.querySelector('.js-reveal')) {
    Splitting({
      target: '[data-reveal]',
      by: 'chars',
      key: null,
    });
    const reveal = new ScrollObserver('.js-reveal');
  }

  if (document.querySelector('.js-fadein')) {
    const fadein = new ScrollObserver('.js-fadein');
  }

  if (document.querySelector('.js-modal')) {
    modalInit();
  }

  if (document.querySelector('.js-fadeup')) {
    //※ observe fnav only
    const fadeup = new ScrollObserver('.fnav .js-fadeup,.fnav');
    Splitting({
      target: '[data-fadeup]',
      by: 'words',
      key: null,
    });
  }

  if (document.querySelector('[data-splitting]')) {
    Splitting({
      target: '[data-splitting]',
      by: 'chars',
      key: null,
    });
  }
  if (document.querySelector('[data-splitting-lines]')) {
    Splitting({
      target: '[data-splitting-lines]',
      by: 'lines',
      key: null,
    });
  }

  // if (document.querySelector('.js-swiper-intro')) {
  //   console.log('swiper');
  //   const slideSelectorList = ['.js-swiper-intro'];
  //   const breakpoint = 780;
  //   const swiperSp = new SwiperManager(slideSelectorList, breakpoint);
  // }

  if (document.querySelector('.js-slideShowMask')) {
    slideShowMask('.js-slideShowMask .js-slide');
  }
}

window.addEventListener('load', async () => {
  let isFirstAccess = true;
  try {
    isFirstAccess = !sessionStorage.getItem('visited');
  } catch (e) {
    console.error('sessionStorage is not accessible: ', e);
  }

  if (isFirstAccess) {
    try {
      sessionStorage.setItem('visited', 'true');
      document.body.classList.add('firstAccess');
    } catch (e) {
      console.error('sessionStorage is not accessible: ', e);
    }
  } else {
    document.body.classList.remove('firstAccess');
  }

  init();

  if (document.querySelector('.js-topAnim')) {
    const top = document.querySelector('.js-topAnim');
    console.log(top);
    const loading = new Loading(
      document.querySelectorAll('#loading'),
      document.querySelector('#log'),
      document.querySelector('#progress'),
      document.querySelector('#counter')
    );
    await loading.init();
    topLoadedAnimation();
  } else {
    const loading = new Loading(
      document.querySelectorAll('#loading'),
      document.querySelector('#log'),
      document.querySelector('#progress'),
      document.querySelector('#counter')
    );
    await loading.init();
    loadedAnimation();
  }
});
