<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Listado de peliculas') }}
    </h2>
</x-slot>

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium">
              <tr>
                
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Titulo</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Artistas principales</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Año</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Productora </th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Genero</th>
                

              </tr>
            </thead>
            <tbody>
                @foreach ($peliculas as $pelicula)
                <tr class="border-b">

                    <td> {{$pelicula->titulo}}</td>
                    <td> {{$pelicula->artistas_principales}}</td>
                    <td> {{$pelicula->año}}</td>
                    <td> {{$pelicula->productora}}</td>
                    <td> {{$pelicula->genero}}</td>
                   
                    <td>

                                    <a href="{{route('pelicula.edit',$pelicula->id_pelicula)}}">Editar</a>                             
                                
                                <form action="{{route('pelicula.destroy',$pelicula->id_pelicula)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('pelicula.create')}}">Registrar pelicula</a>
</x-app-layout>
