export function insert(route, object)
{
    $.post(`${route}`, {object : object}, function(res) { 
        console.log( JSON.parse( res ));
    })
}

