@extends('dashboard.master')

@section('content')
    
        <form action="{{route('estudios.store')}}" method="POST">
            @include('dashboard.estudios._form')
        </form>

        <form action="" method="post" enctype=“multipart/form-data”>
            @csrf
            <input type="file" name="file" id="image">
            <button type="submit">Enviar</button>
            #Se valida con mime types
            #Que se valide dentro de la funcion
        </form>
@endsection      
