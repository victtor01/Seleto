import { remove } from './jquery.js';

let buttonRemovaLocation = window.document.getElementsByClassName('buttonDeleteLocation');

for(let but of buttonRemovaLocation)
{
    but.addEventListener('click', function(){
        remove('/user/location/remove', {Object: this.value}, true);
    })
}
