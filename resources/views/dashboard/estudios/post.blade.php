@extends('dashboard.master')

@section('content')
    
        <form action="{{route('estudios.store')}}" method="POST">
            @include('dashboard.estudios._form')
        </form>
@endsection      
