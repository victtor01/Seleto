import { atualizationInput } from './modules/Product.js'
import { insert } from './jquery.js'
 
let removeButtonProduct = window.document.getElementsByClassName("buttonRemoveProduct");
let addButtonProduct = window.document.getElementsByClassName("addButtonProduct");
var value;

for (let but of removeButtonProduct) 
{
    but.addEventListener('click', function(){
        value = atualizationInput(`${this.value}`, '-');
        insert('/insert/order' , {id : this.value, quantidade : value});
    })
}

for(let but of addButtonProduct)
{
    but.addEventListener('click', function(){
        value = atualizationInput(`${this.value}`, '+');
        insert('/insert/order' , {id : this.value, quantidade : value});
    })
}