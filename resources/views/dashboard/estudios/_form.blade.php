@csrf
<div class="form-group">
    <label for="tipo">Tipo:</label>
    <input type="text" class="form-control @error('tipo') is-invalid @enderror" id="tipo" name="tipo" placeholder="tipo" value="{{ old('tipo',$estudio->tipo) }}">
</div>
@error('tipo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="fecha_estudio">Fecha de estudio:</label>
    <input type="date"  id="fecha_estudio" name="fecha_estudio" value="{{ old('fecha_estudio',$estudio->fecha_estudio)}}" >
</div>

<div class="form-group">
    <label for="asistio">Asistio: </label>
    <select name="asistio" id="asistio" >
        <option value="no">No</option>
        <option value="si">Si</option>
    </select>

<div class="form-group">
    <label for="fecha_entrega">Fecha de entrega:</label>
    <input type="date"  id="fecha_estudio" name="fecha_estudio" value="{{ old('fecha_entrega',$estudio->fecha_entrega)}}">
</div>

<div class="form-group">
    <label for="fecha_proximo_estudio">Fecha de proximo estudio:</label>
    <input type="date"  id="fecha_proximo_estudio" name="fecha_proximo_estudio" value="{{ old('fecha_proximo_estudio',$estudio->fecha_proximo_estudio)}}">
</div>

<div class="form-group">
    <label for="fecha_revision_estudio">Fecha de revision:</label>
    <input type="date"  id="fecha_revision_estudio" name="fecha_revision_estudio" value="{{ old('fecha_revision_estudio',$estudio->fecha_revision_estudio)}}">
</div>
<div class="form-group">
    <label for="resultado">Elegir archivo:</label>
    <input type="file" class="@error('resultado') is-invalid @enderror" id="resultado" name="resultado" value="{{ old('resultado',$estudio->resultado)}}    ">
</div>
@error('resultado')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<button type="submit" class="btn btn-primary">Enviar</button>