
<div class="flex flex-col gap-2">


<div class="carousel carousel-center w-full p-4  shadow-2xl space-x-4 bg-stone-800 rounded-box mb-8">
   {{-- ici laravel n'a pas aimer que j'appelle ma variable $user donc je reprend membre comme cela a été déclaré initialement --}}
  @foreach ($membre->centreinterets as $cinteret )
     
   <div class="carousel-item flex flex-col">
     <img src="{{$cinteret->ciphoto}}" class="rounded-box w-56 h-full" />
     <p class="text-blue-600"> {{$cinteret->label}}</p>
    </div> 
    @endforeach
   
</div>

  <div> <a href="/centreinteret/{{$membre->id}}/edit"> <button class="btn btn-success">  <i class="fa-solid fa-pen"></i> &nbsp Mettre à jour mes centres d'interets</button></a> </div>

</div>