<div>
    <div class="text-center mt-24">
        <div class="flex items-center justify-center">
        </div>
        <h2 class="text-4xl tracking-tight">
           Create Event
        </h2>
        </span>
      </div>
  
      
    <form action="{{route('products.store')}}" method="POST" class="mb-4" class="w-full max-w-xl bg-white rounded-lg shadow-md p-6">
       @csrf
       {{-- @method('POST') --}}
        <div class="flex  items-center justify-center my-2 mx-4 md:mx-0 flex-wrap -mx-3 mb-6">
           <div class="w-full md:w-full px-3 mb-6">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='title'>Event Title</label>
              <input class="appearance-none block full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="title" type='text'>
           </div>
           <div class="w md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='date'>Event Date</label>
            <input class="appearance-none block full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none"  name="date" type='text'>
           </div>
           <div class="w-full md:w-full px-3 mb-6">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event Time</label>
              <input class="appearance-none block full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="time" type='text'>
           </div>
           <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event Participants</label>
            <input class="appearance-none block full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="max_participants" type='text'>
           <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event Description</label>
            <input class="appearance-none block full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="description" type='text'>
           </div>
           <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event Image</label>
            <input class="appearance-none block full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" name="image" type='text'>
           </div>   
           <div class="w-full md:w-full px-3 mb-6">
              <button class="btn" >Send</button>
              
           </div>   
                
       
    
      </div>
   </form>
   <button class="btn"><a href="{{ url('/') }}">Cancel</a></button>
</div>