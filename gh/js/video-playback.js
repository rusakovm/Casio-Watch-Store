(() => {
  const video = document.querySelector('#anchor1 video.header__video');
  if (!video) return;
  video.muted = true;
  video.defaultMuted = true;
  video.loop = true;
  video.playsInline = true;
  const start = () => {
    if (document.hidden) return;
    const promise = video.play();
    if (promise && typeof promise.catch === 'function') {
      promise.catch(error => console.warn('Hero video playback blocked:', error));
    }
  };
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', start, {once:true});
  else start();
  video.addEventListener('loadeddata', start, {once:true});
  document.addEventListener('visibilitychange', start);
  window.addEventListener('pageshow', start);
})();
