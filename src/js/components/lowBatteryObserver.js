export function videoPlayObserver(videoDom, imageDom) {
  const video = document.querySelector(videoDom);
  video
    .play()
    .then(() => {
      console.log('movie play success');
      document.querySelector(imageDom).style.display = 'none';
    })
    .catch((error) => {
      console.log('movie play error', error);
      document.querySelector(videoDom).style.display = 'none';
      document.querySelector(imageDom).style.display = 'block';
    });

}
