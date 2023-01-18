let hidden = true;

export function showmodal(modal)
{
    var Modal = window.document.getElementById(`${modal}`);

    Modal.style.cssText = hidden ? 'display: flex; bottom: 0;' : 'bottom: -100%;';

    hidden = !hidden ? true : false

    return;
}
