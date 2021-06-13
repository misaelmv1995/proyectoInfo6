@extends('dashboard.master')

@section('content')
    
        <form method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input readonly type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $category->title }}">
            </div>
            <div class="form-group">
                <label for="UrlClean">URL Clean:   </label>
                <input readonly type="text" class="form-control" id="url_clean" name="url_clean" placeholder="URL Clean" value="{{ $category->url_clean }}">
            </div>
        </form>
@endsection      
