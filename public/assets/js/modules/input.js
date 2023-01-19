export function atualizationInput(id, type)
{
    let input = document.getElementById(`input[${id}]`);

    if(! input.value)
    {
        return input.value = 0;
    }

    if(type === '-' && input.value >= 1)
    {
        return input.value = input.value - 1;
    }
    
    if(type === '+')
    {
        return input.value = parseInt(input.value) +  parseInt(1);
    }

}

export function caculePrice()
{
    let id = document.getElementsByClassName('ids')
    let subtotal = 0;
    let price; let input;

    for (let i = 0; i < id.length; i++) {
        let count = id[i].value;
        price = window.document.getElementById(`price[${count}]`);
        input = window.document.getElementById(`input[${count}]`);
        subtotal += parseFloat(price.value) * parseFloat(input.value);
    }

    var p = window.document.getElementById('subtotal')
    p.innerHTML = "R$ " + subtotal.toString().replace('.', ',');

    var total = window.document.getElementById('total');
    total.innerHTML = 'R$ ' + (parseFloat(subtotal) + parseFloat(3)).toString().replace('.', ','); 
}