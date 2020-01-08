@extends('layouts.app')
@section('content')
<form action="{{route('posts.update', ['post' => $post->id])}}" method="POST"  enctype="multipart/form-data">
 
    @csrf
 @method("PUT")
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="title" value="{{$post->title}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" value="{{$post->description}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Conteúdo</label>
        <textarea type="text" name="content" id="" cols="30" rows="10"  class="form-control">{{$post->content}}</textarea>
    </div>
    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" value="{{$post->slug}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Foto de Capa</label>
        <input type="file" name="thumb" class="form-control" >
 
    </div>
    <div class="form-group">
        <label>Categorias</label>
        <div class="form-group">
            @foreach($categories  as $c)
                <div class="col-2 checkbox">
                    <input type="checkbox"name="categories[]" value="{{$c->id}}"
                    @if($post->categories->contains($c)) checked @endif 
>{{$c->name}}
                </div>
            @endforeach
        </div>
    </div>
    <button class="btn btn-lg btn-success">Atualizar Postagem</button>
<br/>
    
</form>
<form action="{{route('posts.destroy', ['post' => $post->id])}}" method="POST">
        @csrf
        @method("DELETE")
        <button class="btn btn-lg btn-danger">Deletar Postagem</button>
</form>
@endsection