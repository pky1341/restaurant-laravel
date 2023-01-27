@extends('base')

@section('title')
List--|-|--Page
@endsection

@section('content')
<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Restaurant Management</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</p>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      @if(Session::get('status'))
       <div class="relative p-4 rounded-md bg-green-300 text-white font-bold">
  <span class="absolute top-0 right-0 p-2">
    <button class="text-white font-bold" id="rem">
      ×
    </button>
  </span>
  <p> {{Session::get('status')}} </p>
</div>
      @endif
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">Id</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Name</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Email</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Address</th>
            <th class="w-10 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tr rounded-br "><span class="mr-3">operation</span></th>
          </tr>
        </thead>
        <tbody>
        	@foreach($data as $item)
          <tr>
            <td class="px-4 py-3"> {{$item->id}} </td>
            <td class="px-4 py-3"> {{$item->name}} </td>
            <td class="px-4 py-3"> {{$item->email}} </td>
            <td class="px-4 py-3 ">{{$item->addr}}</td>
            <td class="w-10 text-center">
              <a href="/delete/{{$item->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
              <a href="/edit/{{$item->id}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
            </td>
          </tr>
          @endforeach 
        </tbody>
      </table>
    </div>  
  </div>
</section>
<script type="text/javascript">
  const closeButton = document.querySelector('#rem');

closeButton.addEventListener('click', function() {
  this.parentElement.parentElement.remove();
});

</script>
@endsection