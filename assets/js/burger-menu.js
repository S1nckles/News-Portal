const menuIcon = document.querySelector('.menu-btn');
const sidePanel = document.querySelector('.menu__side-panel');

menuIcon.addEventListener('click', () => {
    const isOpen = sidePanel.style.left === '0px';
    sidePanel.style.left = isOpen ? '-250px' : '0px';

    menuIcon.classList.toggle('active');
});