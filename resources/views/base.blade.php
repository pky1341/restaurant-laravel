<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>@yield('title')</title>
</head>
<body>
  <div class="container-2xl">
    <!-- start navbar -->
     <div class="flex items-center justify-between bg-gray-800 p-4">
  <div class="flex items-center">
    <img src="http://pradeep6969.pythonanywhere.com/static/images/handshake-man-woman-after-signing-business-contract-closeup.jpg" alt="Logo" class="h-8 w-8 rounded-full">
    <div class="text-white font-semibold ml-2">Restaurant</div>
  </div>
  <div class="flex items-center justify-between w-full md:w-1/2 lg:w-1/3">
    <div class="relative rounded-md shadow-sm">
      <input type="search" class="form-input py-2 px-3 block w-full leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue-300" placeholder="Search">
      <div class="absolute inset-y-0 right-0 flex items-center pr-3  cursor-pointer">
        <svg class="h-5 w-5 text-gray-400 " fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
        </svg>
      </div>
    </div>
  </div>
  <div class="hidden md:flex">
    <a href="/" class="px-3 py-2 font-semibold text-white bg-gray-700 rounded-full hover:bg-gray-800 mr-4 ">Home</a>
    <a href="/list" class="px-3 py-2 font-semibold text-white bg-gray-700 rounded-full hover:bg-gray-800">List</a>
    <a href="/add" class="px-3 py-2 font-semibold text-white bg-gray-700 rounded-full hover:bg-gray-800 ml-4">Add</a>
  </div>
  <div class="flex items-center">
    <a href="/signup" class="px-3 py-2 font-semibold text-white bg-gray-700 rounded-full hover:bg-gray-800 mr-4">Sign Up</a>
    <button class="px-3 py-2 font-semibold text-white bg-gray-700 rounded-full hover:bg-gray-800">Log In</button>
  </div>
</div>
    <!-- end navbar -->
  @yield('content')
  <!-- start footer -->
   <footer class="bg-gray-800 py-4">
  <div class="container mx-auto flex items-center justify-between flex-wrap">
    <div class="text-gray-300 text-sm font-semibold tracking-wide uppercase py-2">
      Follow Us:
    </div>
    <div class="text-gray-300 text-sm font-semibold tracking-wide uppercase py-2">
      <a href="#" class="mr-3 text-gray-400 hover:text-white">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="mr-3 text-gray-400 hover:text-white">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#" class="mr-3 text-gray-400 hover:text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a href="#" class="mr-3 text-gray-400 hover:text-white">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
  </div>
</footer>

  <!-- end footer -->
  </div>
</body>
</html>