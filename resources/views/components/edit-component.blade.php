<div>
   <div class="text-center mt-24">
      <div class="cuqui flex items-center justify-center mb-8">
         <img src="https://seeklogo.com/images/B/baby-yoda-logo-624AE4E7B3-seeklogo.com.png" alt="cardimage" class="cardimage" width="200">
       </div>
       <h2 class="text-4xl text-white mb-8 tracking-tight">
          Editar Evento
       </h2>

     </div>
     <div class="flex justify-center my-2  mx-4 md:mx-0">


    <form action="{{route('products.update',['id'=>$product->id])}}" enctype="multipart/form-data" method="post"  class="w-full max-w-xl bg-white rounded-lg shadow-md p-6" ">
       @csrf
       @method('PUT')
       <div class="flex flex-wrap -mx-3 mb-6">
         <div class="w-full md:w-full px-3 mb-6">
           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Título</label>
           <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="title" type='text' value="{{$product->date ?? old('date')}}">
         </div>
         <div class="w-full md:w-full px-3 mb-6">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Fecha<i class="fas fa-dolly-flatbed-empty    "></i></label>
          <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="date" type='text' value="{{$product->date ?? old('date')}}">
         </div>
         <div class="w-full md:w-full px-3 mb-6">
           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Hora</label>
           <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="time" type='text-area' value="{{$product->time ?? old('time')}}">
         </div>
         <div class="w-full md:w-full px-3 mb-6">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Limite de Participantes</label>
          <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="max_participants" type='text' value="{{$product->max_participants ?? old('max_participants')}}">
         </div>
         <div class="w-full md:w-full px-3 mb-6">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Descripción</label>
          <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="description" type='text' value="{{$product->description ?? old('description')}}>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'> Imagen</label>
          <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="image" type='file' value="{{$product->image ?? old('image')}}">
          <img src="/images/{{ $product->image }}" width="200px">
         </div>
     </div>
        <div class="flex items-center justify-evenly">
         <button class="inline-flex items-center  py-2 bg-indigo-400 border border-transparent rounded-md font-semibold px-4 text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" >Modificar</button>
         <button class="inline-flex items-center  py-2 bg-indigo-400 border border-transparent rounded-md font-semibold px-4 text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"><a href="{{ url('/') }}">Cancelar</a></button>
        </div>


   </form>
   </div>
  </div>
</div>
