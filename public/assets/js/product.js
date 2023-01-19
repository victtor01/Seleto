import { atualizationInput, caculePrice } from './modules/input.js'
import { insert } from './jquery.js'

let removeButtonProduct = window.document.getElementsByClassName("buttonRemoveProduct");
let addButtonProduct = window.document.getElementsByClassName("addButtonProduct");
var value;

for (let but of removeButtonProduct) 
{
    but.addEventListener('click', function(){
        value = atualizationInput(`${this.value}`, '-');
        insert('/insert/order' , {id : this.value, quantidade : value});
        caculePrice();
    })
}

for(let but of addButtonProduct)
{
    but.addEventListener('click', function(){
        value = atualizationInput(`${this.value}`, '+');
        insert('/insert/order' , {id : this.value, quantidade : value}, true);
        caculePrice();
    })
}
