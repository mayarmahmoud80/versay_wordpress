function loadPartial(selector, url, method) {
  const $target = $(selector);
  if (!$target.length || $target.children().length > 0) return;

  $.get(url, function (data) {
    if (method === 'prepend') {
      $target.prepend(data);
    } else {
      $target.html(data);
    }
  });
}

$(function () {
  if (!$('link[href="assets/css/style.css"]').length) {
    $.get('assets/components/head.html', function (data) {
      $('head').append(data);
    });
  }

  loadPartial('aside', 'assets/components/aside.html', 'prepend');
  loadPartial('header', 'assets/components/header.html', 'html');
  loadPartial('footer', 'assets/components/footer.html', 'prepend');

  if (window.AOS && !window.__aosInitialized) {
    AOS.init({ duration: 1000, once: true });
    window.__aosInitialized = true;
  }
});
