import { atualizationInput, caculePrice } from './modules/helpers.js'
import { insert } from './jquery.js'

let removeButtonProduct = window.document.getElementsByClassName("buttonRemoveProduct");
let addButtonProduct = window.document.getElementsByClassName("addButtonProduct");

var value; var max;

for (let but of removeButtonProduct) 
{
    but.addEventListener('click', function(){
        max = window.document.getElementById(`number-max[${this.value}]`).innerHTML;
        value = atualizationInput(`${this.value}`, '-', max);
        insert('/insert/order' , {id : this.value, quantidade : value});
        caculePrice();
    })
}

for(let but of addButtonProduct)
{
    but.addEventListener('click', function(){
        max = window.document.getElementById(`number-max[${this.value}]`).innerHTML;
        value = atualizationInput(`${this.value}`, '+' , max);
        insert('/insert/order' , {id : this.value, quantidade : value}, true);
        caculePrice();
    })
}
