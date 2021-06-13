@csrf
<div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{ old('title',$estudio->title) }}">
</div>
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
    <label for="UrlClean">URL Clean:</label>
    <input type="text" class="form-control @error('url_clean') is-invalid @enderror" id="url_clean" name="url_clean" placeholder="URL Clean" value="{{ old('url_clean', $estudio->url_clean) }}">
</div>
@error('url_clean')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<button type="submit" class="btn btn-primary">Enviar</button>