@extends('base')

@section('title')
edit----page layout
@endsection
@section('content')
<section class="text-white-400 bg-gray-900 body-font relative"> 
	<h1 class="text-center relative pt-10 text-6xl">Edit Restaurant</h1>
<div class="container w-full px-5 py-24 flex items-center justify-center">

<form method="post" action="/edit" class="lg:w-2/6 shadow-md rounded px-8 pt-6 pb-8 mb-4">
	@csrf
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Id:
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-white-700 leading-tight focus:outline-none focus:shadow-outline" type="hidden" value="{{$data->id}}" name="name">
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
      Name:
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-white-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" value="{{$data->name}}" name="name">
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
      Email:
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-white-700 leading-tight focus:outline-none focus:shadow-outline" type="email" id="email" value="{{$data->email}}" name="email">
  </div>
  <div class="mb-6">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
      Address:
    </label>
    <input type="textarea" class="shadow appearance-none border rounded w-full py-2 px-3 text-white-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" value="{{$data->addr}}">
  </div>
  <div class="flex items-center justify-between">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
      Submit
    </button>
  </div>
</form>	
</div>
</section>
@endsection