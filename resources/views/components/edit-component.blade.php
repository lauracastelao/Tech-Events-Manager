<div>
    <div class="text-center mt-24">
        <div class="flex items-center justify-center">
        </div>
        <h2 class="text-4xl tracking-tight">
           Edit Event
        </h2>
        </span>
      </div>
  
      
    <form action="{{route('products.update',['id'=>$product->id])}}" method="post" class="mb-4" class="w-full ">
       @csrf
       @method('PUT') 
        <div class="flex  items-center justify-center my-2 mx-4 md:mx-0 flex-wrap -mx-3 mb-6">
           <div class="w-full md:w-full px-3 mb-6">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='title'>Event Title</label>
              <input class="appearance-none " name="title" type='text' value="{{$product->title ?? old('title')}}">
           </div>
           <div class="w md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='date'>Event Date</label>
            <input class="appearance-none "  name="date" type='text' value="{{$product->date ?? old('date')}}">
           </div>
           <div class="w-full md:w-full px-3 mb-6">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event Time</label>
              <input class="appearance-none " name="time" type='text' value="{{$product->time ?? old('time')}}">
           </div>
           <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event Participants</label>
            <input class="appearance-none " name="max_participants" type='text' value="{{$product->max_participants ?? old('max_participants')}}">
           <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event Description</label>
            <input class="appearance-none " name="description" type='text' value="{{$product->description ?? old('description')}}">
           </div>
           <div class="w-full md:w-full px-3 mb-6">
            <label class="block " for='Password'>Event Image</label>
            <input class="appearance-none " name="image" type='text' value="{{$product->image ?? old('image')}}">
           </div>                  
         </div>
      <div class="w-full md:w-full px-3 mb-6">
         <button class="btn" >Modify</button>
         <button class="btn"><a href="{{ url('/') }}">Cancel</a></button>
      </div>  
   </form>
   
</div>