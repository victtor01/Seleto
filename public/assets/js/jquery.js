import { setflesh } from './flesh.js'

export function insert(route, object, message = false)
{
    $.post(`${route}`, {object : object}, function(res) { 
        if(message === true) {
            setflesh( 'message' , 'adicionado ao pedido com sucesso!');
        }
    })
}
