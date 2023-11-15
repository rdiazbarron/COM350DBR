<x-app-layout>

    <body>
        <h1 class="text-4xl font-bold mb-2 text-white">Actualizar libro</h1>
        <form action="{{route('libro.update',$libro->id_libro)}}" method="POST">
            @csrf
            @method('PUT')
            <DIV>
           
                <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titulo</label>
                <input type="text" name="titulo" value="{{$libro->titulo}}" id="titulo" class="block w-medium mx-auto p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="autor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">autor</label>
                <input type="text" name="autor" id="autor" value="{{$libro->autor}}class="block w-medium mx-auto p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="editorialid" value="{{$libro->editorial_id}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Editorial</label>
                
                <select
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="editorial_id" id="editorial_id">
                    @foreach ($editoriales as $editorial)
                    <option value="{{ $editorial->id_editorial }}" @if($editorial->id_editorial == $libro->editorial_id) selected @endif>{{ $editorial->descripcion }}</option>                    
                    @endforeach

                </select>

                <label for="edicion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">edicion</label>
                <input type="number" name="edicion" id="edicion" value="{{$libro->edicion}}"class="block w-medium mx-auto p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="pais" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">pais</label>
                <input type="text" name="pais" id="pais" value="{{$libro->pais}}" class="block w-medium mx-auto p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <label for="precio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">precio</label>
                <input type="number" name="precio" id="precio" value="{{$libro->precio}}" class="block w-medium mx-auto p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                

            </DIV>

            <div class="m-6">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registar</button>
            </div>


        </form>
    </body>
</x-app-layout>