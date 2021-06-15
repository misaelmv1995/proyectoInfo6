@extends('dashboard.master')

@section('content')
    
        <form action="{{route('estudios.update', $estudio->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('dashboard.estudios._form')
        </form>
@endsection      
