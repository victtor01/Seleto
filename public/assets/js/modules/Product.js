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