import MicroModal from 'micromodal';

export function modalInit() {
  MicroModal.init({
    disableScroll: true,
    awaitOpenAnimation: true,
    awaitCloseAnimation: true,
  });
  console.log('modalInit');
}
