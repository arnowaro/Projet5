<div class="bg-white shadow mt-6  rounded-lg p-6">
    <h3 class="text-gray-600 text-sm font-semibold mb-4">Amies</h3>
    <ul class="flex items-center justify-center space-x-2">
        <!-- Story #1 -->
        @foreach ($amis as $ami )
            
        <li class="flex flex-col items-center space-y-2">
            <!-- Ring -->
            <a class="block bg-white p-1 rounded-full" href="#">
                <img class="w-16 rounded-full" src="{{ asset('storage/' . $ami->avatar) }}">
            </a>
            <!-- Username -->
            <span class="text-xs text-gray-500">
                {{ $ami->name }}
            </span>
        </li>
        
        @endforeach
       

    </ul>
</div>