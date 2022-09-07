@include('Layouts.layout')


 @section('content')
 <div class=>

    @if(session('message')) 
     <div class="alert">
        {{session('message')}}
     </div>
    @endif
    <x-create-component></x-create-component>

   

 </div>
