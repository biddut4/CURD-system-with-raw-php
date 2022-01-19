let popup = document.querySelector('.d_del');
let alert = document.querySelector('.alert_box');
let close = document.querySelector('.a_close');

popup.addEventListener('click', () => {
    alert.classList.add('active');
});

close.addEventListener('click', () => {
    alert.classList.remove('active');
});