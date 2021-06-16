@extends('dashboard.master')

@section('content')
    
        <form method="POST">
            @csrf
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input readonly type="text" class="form-control" id="tipo" name="tipo" placeholder="tipo" value="{{$estudio->tipo }}">
            </div>           

            <div class="form-group">
                <label for="fecha_estudio">Fecha de estudio:</label>
                <input readonly type="date"  id="fecha_estudio" name="fecha_estudio" value="{{$estudio->fecha_estudio}}" >
            </div>
            
            <div class="form-group">
                <label for="asistio">Asistio:</label>
                <input readonly type="date"  id="asistio" name="asistio" value="{{$estudio->asistio}}" >
            </div>

            <div class="form-group">
                <label for="fecha_entrega">Fecha de entrega:</label>
                <input readonly type="date"  id="fecha_entrega" name="fecha_entrega" value="{{$estudio->fecha_entrega}}">
            </div>
            
            <div class="form-group">
                <label for="fecha_proximo_estudio">Fecha de proximo estudio:</label>
                <input readonly type="date"  id="fecha_proximo_estudio" name="fecha_proximo_estudio" value="{{$estudio->fecha_proximo_estudio}}">
            </div>
            
            <div class="form-group">
                <label for="fecha_revision_estudio">Fecha de revision:</label>
                <input readonly type="date"  id="fecha_revision_estudio" name="fecha_revision_estudio" value="{{ $estudio->fecha_revision_estudio}}">
            </div>
            <div class="container">
                <label for="resultado">Resultado:</label>
                <br>
                @if ($estudio->resultado)
                    <embed src="{{asset($estudio->resultado)}}" style="width:800px; height:800px;" frameborder="0">    
                @endif
            </div>
        </form>
@endsection      
