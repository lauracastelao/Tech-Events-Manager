<div>
    <div class="text-center mt-24">
        <div class="flex items-center justify-center">
        </div>
        <h2 class="text-4xl tracking-tight">
           Create Event
        </h2>

      </span>
      </div>
      <div class="flex justify-center my-2 mx-4 md:mx-0">
      <form action = "{{'store'}}" method="post" class="w-full max-w-xl bg-white rounded-lg shadow-md p-6">
        @csrf
        @method('POST')
        <div class="flex flex-wrap -mx-3 mb-6">
           <div class="w-full md:w-full px-3 mb-6">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event Title</label>
              <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='text'  required>
           </div>
           <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event Image</label>
            <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='text'  required>
         </div>
           <div class="w-full md:w-full px-3 mb-6">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event date</label>
              <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='text-area' required>
           </div>
           <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Event description</label>
            <input class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='text' required>
         </div>


           </div>
           <div class="w-full md:w-full px-3 mb-6">
              <button type="submit" class="appearance-none block w-full bg-blue-600 text-gray-100 font-bold border border-gray-200 rounded-lg py-3 px-3 leading-tight hover:bg-blue-500 focus:outline-none focus:bg-white focus:border-gray-500">Send</button>
              <a href="{{ url('/') }}"></a>
           </div>

              </div>
           </div>
        </div>
      </form>
      </div>
</div>
