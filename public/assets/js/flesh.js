var interval;
export function setflesh(id, message)
{
    if(interval)
    {
        return;
    }

    var section = window.document.getElementById(`${id}`);

    section.style.cssText = 
    'display: flex; top: 1rem;';

    section.innerText = message;

    setTimeout(() => {
        section.style.cssText = 
        'top: -100%;';
        interval = false
    }, 1600)

    interval = true;

}


