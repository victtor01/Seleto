import { setflesh } from './flesh.js'

export function insert(route, object, message = false)
{
    $.post(`${route}`, {object : object}, function(res) { 

        sessionStorage.id = object.id;

        if(message === false)
        {
            return;
        }

        setflesh( 'message' , 'adicionado ao pedido com sucesso!');
        
    })
}

export function remove(route, object, message = false)
{
    $.post(`${route}`, {object: object}, function(res) { 

        console.log(res);

        if(message === false)
        {
            return;
        }

        setflesh('message', 'Localização excluida com sucesso!');
    })
}

