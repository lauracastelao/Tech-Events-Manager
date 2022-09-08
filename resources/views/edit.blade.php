@include('Layouts.layout')


 @section('content')

    @if(session('message'))
     <div class="alert alert-success alert-dismissible">
        {{session('message')}}
     </div>
    @endif
   <x-edit-component :product="$product"></x-edit-component>


