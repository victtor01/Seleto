import { showmodal } from './login.js';

let button = document.querySelector('#button-opcoes');
button.addEventListener('click', () => {
    showmodal('opcoes');
});