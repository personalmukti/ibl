window.addEventListener('scroll', function () {
    if (window.scrollY >= 56) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }

    // Pastikan tombol hamburger tetap ada bahkan saat navbar-scrolled aktif
    const navbarToggler = document.querySelector('.navbar-toggler');
    if (navbarToggler) {
        navbarToggler.classList.remove('navbar-scrolled');
    }
});
