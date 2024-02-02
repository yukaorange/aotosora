import { gsap } from 'gsap';

/**
 * setVierPort
 * @//return,void
 */
export function setViewPort() {
  let vw = window.innerWidth;
  let documentWidth = document.documentElement.clientWidth;
  let scrollBarWidth = vw - documentWidth;
  let ajustWidth = vw - scrollBarWidth;

  document.documentElement.style.setProperty('--vw', `${ajustWidth}px`);

  window.addEventListener('resize', () => {
    vw = window.innerWidth;
    documentWidth = document.documentElement.clientWidth;
    scrollBarWidth = vw - documentWidth;
    ajustWidth = vw - scrollBarWidth;

    document.documentElement.style.setProperty('--vw', `${ajustWidth}px`);
  });
}

/**
 * @//return,void
 */
export function setHeaderHeight(headerSelector) {
  let header = document.querySelector(headerSelector);
  let headerHeight = header.offsetHeight;

  document.documentElement.style.setProperty('--header-height', `${headerHeight}px`);

  window.addEventListener('resize', () => {
    const headerHeight = header.offsetHeight;
    document.documentElement.style.setProperty('--header-height', `${headerHeight}px`);
  });
}

/**
 * drawerMenu
 */
export class DrawerMenu {
  constructor(
    buttonSelector,
    drawerNavSelector,
    drawerInnerDomSelector,
    drawerNavButtonSelector,
    closeButtonSelector
  ) {
    this.drawerButton = document.querySelector(buttonSelector);
    this.nav = document.querySelector(drawerNavSelector);
    this.navButtons = document.querySelectorAll(drawerNavButtonSelector);

    this.closeButton = document.querySelector(closeButtonSelector);

    this.drawerInner = document.querySelector(drawerInnerDomSelector);

    // Set initial ARIA attributes
    this.drawerButton.setAttribute('aria-expanded', 'false');
    this.nav.setAttribute('aria-hidden', 'true');
    this.closeButton.setAttribute('tabindex', '0');

    this.init();
  }

  init() {
    this.setupDrawerToggleButton();
    this.setupNavButtonActions();
    this.setupCloseOutsideClick();
    this.preventInnerPropagation();
    this.setupCloseButtonClick();
  }

  setupDrawerToggleButton() {
    this.drawerButton.addEventListener('click', () => {
      const isExpanded = this.drawerButton.getAttribute('aria-expanded') === 'true';
      this.drawerButton.setAttribute('aria-expanded', !isExpanded);
      this.nav.setAttribute('aria-hidden', isExpanded);

      this.drawerButton.classList.toggle('active');
      this.nav.classList.toggle('active');
    });
  }

  setupNavButtonActions() {
    this.navButtons.forEach((el) => {
      el.addEventListener('click', () => {
        if (
          this.drawerButton.classList.contains('active') ||
          this.nav.classList.contains('active')
        ) {
          // this.closeDrawer();
        }
      });
    });
  }

  setupCloseOutsideClick() {
    this.nav.addEventListener('click', (e) => {
      if (
        (e.target === this.nav && this.drawerButton.getAttribute('aria-expanded') === 'true') ||
        this.nav.getAttribute('aria-hidden') === 'false'
      ) {
        this.closeDrawer();
      }
    });
  }

  preventInnerPropagation() {
    this.drawerInner.addEventListener('click', (e) => {
      e.stopPropagation();
    });
  }

  setupCloseButtonClick() {
    this.closeButton.addEventListener('click', () => {
      this.closeDrawer();
    });
  }

  closeDrawer() {
    this.drawerButton.classList.remove('active');
    this.nav.classList.remove('active');
    this.drawerButton.setAttribute('aria-expanded', 'false');
    this.nav.setAttribute('aria-hidden', 'true');
  }
}

/**
 * headerBgChanger
 * @param {HTMLElement}header-header
 * @param {HTMLElement}trigger-trigger
 * @//return,void
 */
export function headerBgChanger(headerSelector, triggerSelector) {
  const headerDom = headerSelector;
  const triggerDom = triggerSelector;
  let headerHeight, triggerHeight;
  headerHeight = headerDom.offsetHeight;
  triggerHeight = triggerDom.offsetHeight + triggerDom.offsetTop;

  const headerBgChange = () => {
    if (window.scrollY + headerHeight > triggerHeight) {
      headerDom.classList.add('scrolled');
    } else {
      headerDom.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', headerBgChange);
  window.addEventListener('resize', () => {
    headerHeight = headerDom.offsetHeight;
    triggerHeight = triggerDom.offsetHeight;
  });
}

export class ScrollObserver {
  constructor(selector) {
    this.elements = document.querySelectorAll(selector);
    this.observer = null;

    this.init();
  }

  init() {
    let options = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1,
    };

    this.handleIntersect = (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          entry.target.addEventListener('animationend', () => {
            entry.target.classList.add('animated');
          });
          this.observer.unobserve(entry.target);
        }
      });
    };

    this.observer = new IntersectionObserver(this.handleIntersect, options);

    this.elements.forEach((element) => {
      this.observer.observe(element);
    });
  }
}

