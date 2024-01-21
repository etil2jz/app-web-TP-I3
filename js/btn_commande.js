document.addEventListener('DOMContentLoaded', function () {
    const nomInput = document.querySelector("#nom");
    const prenomInput = document.querySelector("#prenom");
    const quantiteInput = document.querySelector("#quantite");
    const check_vendredi = document.querySelector("#vendredi");
    const check_samedi = document.querySelector("#samedi");
    const check_dimanche = document.querySelector("#dimanche");
    const validerBtn = document.querySelector("#validerBtn");
    const resume_commande = document.querySelector("#resume_commande");
    const commentaireInput = document.querySelector("#commentaire")

    const check_inputs = () => {
        const nomVal = nomInput.value.trim();
        const prenomVal = prenomInput.value.trim();
        const vendrediChecked = check_vendredi.checked;
        const samediChecked = check_samedi.checked;
        const dimancheChecked = check_dimanche.checked;

        //validerBtn.style.display = nomVal !== '' && prenomVal !== '' && (vendrediChecked || samediChecked || dimancheChecked) ? 'block' : 'none';
        if (nomVal !== '' && prenomVal !== '' && (vendrediChecked || samediChecked || dimancheChecked)) {
            validerBtn.style.display = 'block';
            afficher_resume();
        } else {
            validerBtn.style.display = 'none';
            resume_commande.innerHTML = '';
        }
    };

    const afficher_resume = () => {
        const nomVal = nomInput.value.trim();
        const prenomVal = prenomInput.value.trim();
        const quantiteVal = quantiteInput.value.trim();
        const typePasseVal = document.querySelector("select[name='type_passe']").value;
        const joursVal = Array.from(document.querySelectorAll("input[name='jours[]']:checked")).map(checkbox => checkbox.value).join(', ');
        const commentaireVal = document.querySelector("#commentaire").value.trim();

        const resume_texte =
            '<h2>Résumé de la commande</h2>' +
            '<p><strong>Nom :</strong> ' + nomVal + '</p>' +
            '<p><strong>Prénom :</strong> ' + prenomVal + '</p>' +
            '<p><strong>Quantité de places :</strong> ' + quantiteVal + '</p>' +
            '<p><strong>Type de passe :</strong> ' + typePasseVal + '</p>' +
            '<p><strong>Jour(s) à réserver :</strong> ' + joursVal + '</p>' +
            '<p><strong>Commentaire :</strong> ' + commentaireVal + '</p>';

        resume_commande.innerHTML = resume_texte;
    };

    nomInput.addEventListener('input', check_inputs, afficher_resume);
    prenomInput.addEventListener('input', check_inputs, afficher_resume);
    quantiteInput.addEventListener('input', check_inputs, afficher_resume);
    check_vendredi.addEventListener('change', check_inputs, afficher_resume);
    check_samedi.addEventListener('change', check_inputs, afficher_resume);
    check_dimanche.addEventListener('change', check_inputs, afficher_resume);
    commentaireInput.addEventListener('input', check_inputs, afficher_resume);
    document.querySelector("select[name='type_passe']").addEventListener('change', check_inputs, afficher_resume);

    // J'ai passé une heure de ma vie à chercher pourquoi le formulaire ne s'envoyait pas,
    // pour au final (re)découvrir ce bout de code juste en dessous. Plus jamais.
    /*
    const form = document.querySelector("#form_reservation");
    form.addEventListener('submit', function (event) {
        event.preventDefault();

    });
    */
});
