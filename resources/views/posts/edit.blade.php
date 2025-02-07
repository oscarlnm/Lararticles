<x-app-layout>
    <h1>Editar post desde aquí:</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">
        <!--csrf: genera un token para guardar los datos del form 
            con la ruta a la que pertenece-->
        @csrf
        @method('PUT')
        <label>
            Título:
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br><br>
        <label>
            Slug:
            <input type="text" name="slug" value="{{$post->slug}}">
        </label>
        <br><br>
        <label>
            Categoría:
            <input type="text" name="category" value="{{$post->category}}">
        </label>
        <br><br>
        <label>
            Contenido:
            <textarea name="content">{{$post->content}}</textarea>
        </label>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
</x-app-layout>