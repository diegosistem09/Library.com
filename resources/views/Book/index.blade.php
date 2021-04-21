pagina para listar los librossss



@foreach($book as $datos_autor)
        <tr>
            <td>{{$datos_autor->title}}</td><br>
            <td>{{$datos_autor->ISBS}}</td><br>
            <td>{{$datos_autor->author}}</td><br>
            <td>
                editar
                |
                <form method="post" action="{{url('/book/delete/'.$datos_autor->id)}}">
                @csrf                
                {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Delete">
                </form>         
            
            
            
            
            
            
            </td>
        </tr>        
    @endforeach