@extends('dashboard.master')

@section('content')
    
        <form action="{{route('estudios.store')}}" method="POST" enctype="multipart/form-data">
            @include('dashboard.estudios._form')
        </form>
@endsection      
