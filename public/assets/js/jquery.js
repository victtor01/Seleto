import { setflesh } from './flesh.js'

export function insert(route, object, message = false)
{
    $.post(`${route}`, {object : object}, function(res) { 

        if(object.id == sessionStorage.id)
        {
            return;
        }

        if(message === false)
        {
            return;
        }

        setflesh( 'message' , 'adicionado ao pedido com sucesso!');
        sessionStorage.id = object.id;
        
    })
}

export function remove(route, object, message = false)
{
    $.post(`${route}`, {object: object}, function(res) { 
        if(message === false)
        {
            return;
        }

        console.log(res);

        setflesh('message', 'Localização excluida com sucesso!');
    })
}

