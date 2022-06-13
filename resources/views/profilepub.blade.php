@extends('layouts.app')

@section('main')
<body class="bg-orange-100" >
    

<main class="grid grid-cols-1 lg:grid-cols-2 gap-6 my-12 mx-12 w-2xl container px-2 mx-auto">

  <aside class="">
  
      <div class="bg-white shadow rounded-lg p-10">
          <div class="flex flex-col gap-1 text-center items-center">
              <img class="h-32 w-32 bg-white p-2 rounded-full shadow mb-4" src="{{asset('storage/' . $user->avatar)}}" alt="">
              <p class="font-semibold">{{$user->name}}</p>
              <div class="text-sm leading-normal text-gray-400 flex justify-center items-center">
              
              </div>
          </div>
          <div class="flex justify-center items-center gap-2 my-3">
              <div class="font-semibold text-center mx-4">
                  <p class="text-black">102</p>
                  <span class="text-gray-400">Publications</span>
              </div>
              <div class="font-semibold text-center mx-4">
                  <p class="text-black">102</p>
                  <span class="text-gray-400">Amies</span>
              </div>
              <div class="font-semibold text-center mx-4">
                  <p class="text-black">102</p>
                  <span class="text-gray-400">Commentaires</span>
              </div>
          </div>
      </div>

      <div class="bg-white shadow mt-6  rounded-lg p-6">
          <h3 class="text-gray-600 text-sm font-semibold mb-4">Amies</h3>
          <ul class="flex items-center justify-center space-x-2">
              <!-- Story #1 -->
              <li class="flex flex-col items-center space-y-2">
                  <!-- Ring -->
                  <a class="block bg-white p-1 rounded-full" href="#">
                      <img class="w-16 rounded-full" src="https://images.unsplash.com/photo-1638612913771-8f00622b96fb?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=200&amp;h=200&amp;q=80">
                  </a>
                  <!-- Username -->
                  <span class="text-xs text-gray-500">
                      Sage
                  </span>
              </li>

              <!-- Story #1 -->
              <li class="flex flex-col items-center space-y-2">
                  <!-- Ring -->
                  <a class="block bg-white p-1 rounded-full" href="#">
                      <img class="w-16 rounded-full" src="https://images.unsplash.com/photo-1638649602320-450b717fa622?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=200&amp;h=200&amp;q=80">
                  </a>
   

                  <!-- Username -->
                  <span class="text-xs text-gray-500">
                      Jett
                  </span>
              </li>

              <!-- Story #2 -->
              <li class="flex flex-col items-center space-y-2">
                  <!-- Ring -->
                  <a class="block bg-white p-1 rounded-full" href="#">
                      <!-- Thumbnail -->
                      <img class="w-16 rounded-full" src="https://images.unsplash.com/photo-1638708644743-2502f38000a0?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=200&amp;h=200&amp;q=80">
                  </a>

                  <!-- Username -->
                  <span class="text-xs text-gray-500">
                      Sky
                  </span>
              </li>

              <!-- Story #3 -->
              <li class="flex flex-col items-center space-y-2">
                  <!-- Ring -->
                  <a class="block bg-white p-1 rounded-full" href="#">
                      <!-- Thumbnail -->
                      <img class="w-16 rounded-full" src="https://images.unsplash.com/photo-1638691899851-0e955bceba1f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=200&amp;h=200&amp;q=80">
                  </a>
      
                  <!-- Username -->
                  <span class="text-xs text-gray-500">
                      Olivia
                  </span>
              </li>

              <!-- Story #4 -->
              <li class="flex flex-col items-center space-y-2">
                  <!-- Ring -->
                  <a class="block bg-white p-1 rounded-full" href="#">
                      <img class="w-16 rounded-full" src="https://images.unsplash.com/photo-1638612913771-8f00622b96fb?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=200&amp;h=200&amp;q=80">
                  </a>
      

                  <!-- Username -->
                  <span class="text-xs text-gray-500">
                      Julia
                  </span>
              </li>
              <!-- Story #1 -->
              <li class="flex flex-col items-center space-y-2">
                  <!-- Ring -->
                  <a class="block bg-white p-1 rounded-full" href="#">
                      <!-- Thumbnail -->
                      <img class="w-16 rounded-full" src="https://images.unsplash.com/photo-1638649602320-450b717fa622?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=200&amp;h=200&amp;q=80">
                  </a>
              

                  <!-- Username -->
                  <span class="text-xs text-gray-500">
                      Hendrick
                  </span>
              </li>

          </ul>
      </div>
     
@include('components.centreinteret')

  </aside>

  <article class="">

      <form class="bg-white shadow rounded-lg mb-6 p-4">
          <textarea name="message" placeholder="Type something..." class="w-full rounded-lg p-2 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400"></textarea>
          <footer class="flex justify-between mt-2">
              <div class="flex gap-2">
                  <span class="flex items-center transition ease-out duration-300 hover:bg-blue-500 hover:text-white bg-blue-100 w-8 h-8 px-2 rounded-full text-blue-400 cursor-pointer">
                      <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                  </span>
                  <span class="flex items-center transition ease-out duration-300 hover:bg-blue-500 hover:text-white bg-blue-100 w-8 h-8 px-2 rounded-full text-blue-400 cursor-pointer">
                      <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                  </span>
                  <span class="flex items-center transition ease-out duration-300 hover:bg-blue-500 hover:text-white bg-blue-100 w-8 h-8 px-2 rounded-full text-blue-400 cursor-pointer">
                      <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                  </span>
              </div>
              <button class="flex items-center py-2 px-4 rounded-lg text-sm bg-blue-600 text-white shadow-lg">Send 
                  <svg class="ml-1" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
              </button>
          </footer>
      </form>
@include('components.posts_user')
     
      

  </article>
  
</main>
</body>

@endsection
