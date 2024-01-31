document.addEventListener('DOMContentLoaded', function () {
    const loginInput = document.querySelector("#login");
    const nomInput = document.querySelector("#nom");
    const prenomInput = document.querySelector("#prenom");
    const mdpInput = document.querySelector("#mdp");
    const validerBtn = document.querySelector("#validerBtn");

    const check_inputs = () => {
        const loginVal = loginInput.value.trim();
        const nomVal = nomInput.value.trim();
        const prenomVal = prenomInput.value.trim();
        const mdpVal = mdpInput.value.trim();

        if (loginVal !== '' && nomVal !== '' && prenomVal !== '' && mdpVal !== '') {
            validerBtn.style.display = 'block';
        } else {
            validerBtn.style.display = 'none';
        }
    };

    loginInput.addEventListener('input', check_inputs);
    nomInput.addEventListener('input', check_inputs);
    prenomInput.addEventListener('input', check_inputs);
    mdpInput.addEventListener('input', check_inputs);
});
