<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Listado de libros') }}
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
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Autor</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Editorial</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Edicion</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Pais</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Precio</th>
                

              </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                <tr class="border-b">
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $libro->titulo }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $libro->autor }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $libro->editorial_id}}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $libro->edicion }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $libro->pais }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $libro->precio }}</td>
                    
                    
                    
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('libro.create')}}">Registrar Libro</a>
</x-app-layout>
