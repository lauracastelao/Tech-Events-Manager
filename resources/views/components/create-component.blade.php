<div>
   <div class="text-center">

      <div class="cuqui flex items-center justify-center mb-8
      ">
       </div>
       <h2 class="text-4xl text-white mb-8 tracking-tight">
          Añadir Evento
       </h2>

     </div>
     <div class="flex justify-center my-2  mx-4 md:mx-0">
     <form action = "{{route('products.store')}}" method="post" enctype="multipart/form-data" class="w-full max-w-xl bg-white rounded-lg shadow-md p-6">
       @csrf
       @method('POST')


      <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Título</label>
            <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="title" type='text'>
          </div>
          <div class="w-full md:w-full px-3 mb-6">
           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Fecha<i class="fas fa-dolly-flatbed-empty    "></i></label>
           <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="date" type='text'>
          </div>
          <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Hora</label>
            <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="time" type='text-area'>
          </div>
          <div class="w-full md:w-full px-3 mb-6">
           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Limite de Participantes</label>
           <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="max_participants" type='text'>
          </div>
          <div class="w-full md:w-full px-3 mb-6">
           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Descripción</label>
           <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="description" type='text'>
          </div>
          <div class="w-full md:w-full px-3 mb-6">
           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'> Imagen</label>
           <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="image" type='file'>
          </div>
      </div>
         <div class="flex items-center justify-evenly">
          <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-indigo-500 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" >Enviar</button>
          <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"><a href="{{ url('/') }}">Cancel</a></button>
         </div>

    </form>
    </div>
   </div>
</div>
