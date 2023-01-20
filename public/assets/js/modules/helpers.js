export function atualizationInput(id, type, max)
{
    let input = document.getElementById(`input[${id}]`);

    if(! input.value)
    {
        return input.value = 0;
    }
    
    if(parseInt(input.value) > parseInt(max))
    {
        return input.value = parseInt(max);
    }

    if(type === '-' && input.value >= 1)
    {
        return input.value = input.value - 1;
    }
    
    if(type === '+' && parseInt(input.value) < parseInt(max))
    {
        return input.value = parseInt(input.value) +  parseInt(1);
    }

    if(parseInt(input.value) == parseInt(max))
    {
        return input.value = parseInt(max);
    }

}

export function caculePrice()
{
    let id = document.getElementsByClassName('ids')
    let subtotal = 0;
    let price; let input;

    if(id.length == 0)
    {
        return;
    }

    for (let i = 0; i < id.length; i++) {
        let count = id[i].value;
        price = window.document.getElementById(`price[${count}]`);
        input = window.document.getElementById(`input[${count}]`);
        subtotal += parseFloat(price.value) * parseFloat(input.value);
    }

    var p = window.document.getElementById('subtotal')
    p.innerHTML = "R$ " + subtotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });;

    var total = window.document.getElementById('total');
    total.innerHTML = 'R$ ' + (parseFloat(subtotal) + parseFloat(3)).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });; 
}