import { remove } from './jquery.js';

let buttonRemoveLocation = window.document.getElementsByClassName('buttonDeleteLocation');

for(let but of buttonRemoveLocation)
{
    but.addEventListener('click', function(){
        
        let confirm = window.confirm('Tem certeza que deseja excluir permanentemente essa localização?');

        if(!confirm)
        {
            return;
        }

        remove('/user/address/remove', {id: this.value}, true)
        let div = document.getElementById(`divAddress[${this.value}]`);
        div.style.cssText = 'opacity: 0; margin-left: 100%; height: 0px; margin: 0; overflow: hidden;';

    })
}
