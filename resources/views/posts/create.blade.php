<x-app-layout>
    <h1>Crea un nuevo post en este formulario:</h1>

    <form action="{{route('posts.store')}}" method="POST">
        <!--csrf: genera un token para guardar los datos del form 
            con la ruta a la que pertenece-->
        @csrf
        <label>
            Título:
            <input type="text" name="title">
        </label>
        <br><br>
        <label>
            Slug:
            <input type="text" name="slug">
        </label>
        <br><br>
        <label>
            Categoría:
            <input type="text" name="category">
        </label>
        <br><br>
        <label>
            Contenido:
            <textarea name="content"></textarea>
        </label>
        <br><br>
        <button type="submit">Crear post</button>
    </form>
</x-app-layout>