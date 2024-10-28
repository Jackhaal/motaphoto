document.addEventListener('DOMContentLoaded', function() {
    let modal = null;

    function openModal(e) {
        e.preventDefault(); // Empêche le comportement par défaut du lien

        const href = e.target.getAttribute('href');
        console.log("Lien cliqué :", href); // Vérification du lien cliqué

        if (!href.startsWith('#')) {
            console.error('Le lien ne pointe pas vers une modale.');
            return;
        }

        // Sélectionner la modale à partir de l'ID dans href
        modal = document.querySelector(href);
        console.log("Modale sélectionnée :", modal); // Vérification de la modale

        if (modal === null) {
            console.error('Modale introuvable pour le sélecteur : ' + href);
            return;
        }

        // Afficher la modale
        modal.style.display = 'flex'; // Utilisation de flex pour centrer la modale
        modal.setAttribute('aria-hidden', 'false'); // Retire aria-hidden pour l'accessibilité
        modal.setAttribute('aria-modal', 'true'); // Définit aria-modal pour indiquer que la modale est active

        // Ajouter les écouteurs d'événements pour fermer la modale
        modal.addEventListener('click', closeModal);
        modal.querySelector('.js-modal-stop').addEventListener('click', stopPropagation);

        const closeButton = modal.querySelector('.close');
        if (closeButton) {
            closeButton.addEventListener('click', closeModal); // Gère le bouton de fermeture
        } else {
            console.error("Bouton de fermeture introuvable dans la modale.");
        }
    }

    function closeModal(e) {
        if (modal === null) return;
        e.preventDefault();

        modal.setAttribute('aria-hidden', 'true');
        modal.setAttribute('aria-modal', 'false');
        modal.removeEventListener('click', closeModal);
        modal.querySelector('.js-modal-stop').removeEventListener('click', stopPropagation);
        modal.style.display = 'none'; // Cache la modale
        modal = null;
    }

    const stopPropagation = function(e) {
        e.stopPropagation();
    }

    // Ajout d'écouteurs d'événements sur tous les éléments avec la classe js-modal
    document.querySelectorAll('.js-modal').forEach(a => {
        a.addEventListener('click', openModal);
    });

    // Fermer la modale avec la touche Escape
    window.addEventListener('keydown', function(e) {
        if (e.key === "Escape" || e.key === "Esc") {
            closeModal(e);
        }
    });
});
