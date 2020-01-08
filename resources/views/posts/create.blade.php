@extends('layouts.app')

@section('title', 'Dashboard') 
@section('content')


<form action="{{route('posts.store')}}" method="post"  enctype="multipart/form-data">
 @csrf
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="title" value="{{old('title')}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" value="{{old('description')}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Conteúdo</label>
        <textarea type="text" name="content" id="" cols="30" rows="10"  class="form-control">{{old('content')}}</textarea>
    </div>
    <tr>    <tr>
        <tr>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" value="{{old('slug')}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Foto de Capa</label>
        <input type="file" name="thumb" class="form-control">
       
    </div>
    <div class="form-group">
        <label>Categorias</label>
        <div class="form-group">
            @foreach($categories  as $c)
                <div class="col-2 checkbox">
                    <input type="checkbox"name="categories[]" value="{{$c->id}}">
                    <label>
                        {{$c->name}}
                    </label>

                </div>
            @endforeach
        </div>
    </div>
    <button class="btn btn-lg btn-success">Criar Postagem</button>
</form>
@endsection