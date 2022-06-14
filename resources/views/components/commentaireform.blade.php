 {{-- 
    <span class="absolute inset-y-0 right-0 flex items-center pr-6">
        <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
             <svg class="w-6 h-6 transition ease-out duration-300 hover:text-blue-500 text-gray-400"
             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
             d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
            </path>
             </svg>
             
            </button>
     </span>
     <input type="search"
     class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue"
     style="border-radius: 25px" placeholder="Post a comment..." autocomplete="off">
     <div>
    </div> --}}
     <div
      class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
      <img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer" alt="User avatar"
          src="{{asset('storage/' . Auth::user()->avatar)}}">
 <form action="/comment" method="POST" enctype="multipart/form-data" class="w-full">
     @csrf
     <input type="search"
         class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue"
         style="border-radius: 25px" placeholder="Ajouter un commentaire..." autocomplete="off" name="comments">

     <input type="hidden" name="posts_id" value="{{ $post->id }}">
     <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
     <input type="submit" class="sr-only" value="valider">
 </form>
 </div>
