document.addEventListener("DOMContentLoaded", function () {
  const searchForm = document.querySelector('.nav__search');
  const input = searchForm.querySelector('.search-input');
  const btn = searchForm.querySelector('.search-btn');

  let expanded = false;

  btn.addEventListener('click', function (e) {
    if (!expanded) {
      e.preventDefault();
      input.classList.add('active');
      input.focus();
      expanded = true;
    } else if (!input.value.trim()) {
      e.preventDefault();
    }
  });
});
