<x-app-layout>

    <body>
        <h1 class="text-4xl font-bold mb-2 text-white">Editar pelicula</h1>
        <form action="{{route('pelicula.store')}}" method="POST">
            @csrf
            <DIV>
           
                <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titulo</label>
                <input type="text" name="titulo" id="titulo" value="{{$pelicula->titulo}}" class="block w-medium mx-auto p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="artistas_principales" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">artistas principales</label>
                <input type="text" name="artistas_principales" value="{{$pelicula->artistas_principales}}" id="artistas_principales" class="block w-medium mx-auto p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="año" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">año</label>
                <input type="number" name="año" id="año"  value="{{$pelicula->año}}" class="block w-medium mx-auto p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="productora" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">productora</label>
                <input type="text" name="productora" id="productora" value="{{$pelicula->productora}}" class="block w-medium mx-auto p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="genero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">genero</label>
                <input type="text" name="genero" id="genero" value="{{$pelicula->genero}}" class="block w-medium mx-auto p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                

            </DIV>

            <div class="m-6">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
            </div>


        </form>
    </body>
</x-app-layout>