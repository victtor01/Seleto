import { showmodal } from "./modules/login";

let button = document.querySelector('#button-opcoes');
let closeTheOptions = document.getElementById('closeTheOptions');

closeTheOptions.addEventListener('click', () => {
    showmodal('opcoes');
})

button.addEventListener('click', () => {
    showmodal('opcoes');
});