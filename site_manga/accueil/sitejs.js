window.addEventListener('DOMContentLoaded', event => {

    // Fonction de réduction de la barre de navigation
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return; // Si la barre de navigation (#mainNav) n'est pas trouvée, on arrête la fonction
        }
        if (window.scrollY === 0) {
            // Retire la classe 'navbar-shrink' lorsque la page est en haut
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            // Ajoute la classe 'navbar-shrink' pour rétrécir la barre lors du défilement
            navbarCollapsible.classList.add('navbar-shrink')
        }
    };

    // Appelle la fonction pour rétrécir la barre de navigation au chargement de la page
    navbarShrink();

    // Rétrécit la barre de navigation lorsque l'utilisateur fait défiler la page
    document.addEventListener('scroll', navbarShrink);

    // Active le scrollspy de Bootstrap sur la barre de navigation principale pour un suivi de section
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%', // Ajustement pour activer le scrollspy un peu avant d'atteindre la section
        });
    }

    // Ferme la barre de navigation responsive lorsque l'utilisateur clique sur un élément du menu
    const navbarToggler = document.body.querySelector('.navbar-toggler'); // Bouton pour afficher/cacher le menu
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link') // Tous les liens du menu responsive
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            // Ferme le menu responsive si le bouton toggler est visible
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});
