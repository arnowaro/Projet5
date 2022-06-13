<div>
    <div class="flex-col bg-white shadow mt-6  rounded-lg p-2">
        <h3 class="text-gray-600 text-sm font-semibold mb-4">Interessé(e) par</h3>
        @foreach ($user->centreinterets as $cinteret)
          
        <div class="flex bg-white shadow mt-6  rounded-lg p-2">
        <img src="{{$cinteret->ciphoto}}" alt="Just a flower" class=" w-16  object-cover  h-16 rounded-xl">
        <div class="flex flex-col justify-center w-full px-2 py-1">
            <div class="flex justify-between items-center ">
                <div class="flex flex-col">
                    <h2 class="text-sm font-medium">{{$cinteret->label}}</h2>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-blue-400 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                </svg>
            </div>
            <div class="flex pt-2  text-sm text-gray-400">
                <div class="flex items-center mr-auto">
                 
                </div>
                <div class="flex items-center font-medium text-gray-900 ">
                 
                </div>
            </div>
        </div>
        </div>
        @endforeach
    </div>
  </div>