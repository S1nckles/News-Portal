const searchIcon = document.querySelector('.search-btn');
const searchInput = document.querySelector('.search-input');

searchIcon.addEventListener('click', () => {
  searchInput.classList.toggle('active');
});