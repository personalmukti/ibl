const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            if (window.scrollY >= 56) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });