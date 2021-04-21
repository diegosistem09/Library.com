@extends('layouts.app')

@section('content')
<div class="container">


@foreach($book as $datos_autor)
        <tr>
            <td>{{$datos_autor->title}}</td><br>
            <td>{{$datos_autor->ISBS}}</td><br>
            <td>{{$datos_autor->author}}</td>
            <br>Datos id-> {{$datos_autor->id}}
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

    @endsection