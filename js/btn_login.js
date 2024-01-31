document.addEventListener('DOMContentLoaded', function () {
    const loginInput = document.querySelector("#login");
    const mdpInput = document.querySelector("#mdp");
    const validerBtn = document.querySelector("#validerBtn");

    const check_inputs = () => {
        const loginVal = loginInput.value.trim();
        const mdpVal = mdpInput.value.trim();

        if (loginVal !== '' && mdpVal !== '') {
            validerBtn.style.display = 'block';
        } else {
            validerBtn.style.display = 'none';
        }
    };

    loginInput.addEventListener('input', check_inputs);
    mdpInput.addEventListener('input', check_inputs);
});
