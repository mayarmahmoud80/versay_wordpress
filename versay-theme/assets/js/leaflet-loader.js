window.ensureLeaflet = (function () {
  let loading = null;

  function loadStylesheet(href) {
    return new Promise((resolve, reject) => {
      if (document.querySelector('link[href="' + href + '"]')) {
        resolve();
        return;
      }
      const link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = href;
      link.onload = () => resolve();
      link.onerror = reject;
      document.head.appendChild(link);
    });
  }

  function loadScript(src) {
    return new Promise((resolve, reject) => {
      if (window.L) {
        resolve();
        return;
      }
      const existing = document.querySelector('script[src="' + src + '"]');
      if (existing) {
        existing.addEventListener('load', () => resolve());
        existing.addEventListener('error', reject);
        return;
      }
      const script = document.createElement('script');
      script.src = src;
      script.onload = () => resolve();
      script.onerror = reject;
      document.body.appendChild(script);
    });
  }

  return async function ensureLeaflet() {
    if (window.L) return;
    if (!loading) {
      loading = Promise.all([
        loadStylesheet('https://unpkg.com/leaflet@1.9.4/dist/leaflet.css'),
        loadScript('https://unpkg.com/leaflet@1.9.4/dist/leaflet.js')
      ]);
    }
    await loading;
  };
})();
