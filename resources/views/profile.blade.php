@extends('layouts/app')




@section('main')


<div>
    <div class="md:grid md:grid-cols-3 md:gap-6 m-4">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  @if (session('status'))
      <div class="text-3xl text-left font-bold text-green-600 mt-20 mb-10">
          {{ session('status') }}
      </div>
  @endif



      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
          <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{route('update.action',$membre->id)}}" method="POST" enctype="multipart/form-data">
         @csrf
        
          <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Prénom</label>
                    <input type="text" name="prenom" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    value="{{$membre->prenom}}">
                  </div>
    
                  <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" name="name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    value="{{$membre->name}}">
                  </div>
    
                  <div class="col-span-6 sm:col-span-4">
                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                    <input type="text" name="email" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    value="{{$membre->email}}">
                  </div>
              <div>
                <label class="block text-sm font-medium text-gray-700"> Photo </label>
                <div class="mt-1 flex items-center">
                  <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                    <img class="" src="{{asset('storage/' . $membre->avatar)}}" alt="avatar">
                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                  </span>
                  <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <span class="">Change</span>
                    <input id="avatar" name="avatar" type="file">
                  </label></button>
                  </div>
              </div>
              <div class="mb-6">
                <label for="affiche">
                  Cover photo
                 </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <img class="lg:h-96 md:h-72 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="{{asset('storage/' . $membre->pcouverture)}}" alt="pcouverture">
                  <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600 mt-10">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="pcouverture" type="file" class="sr-only">
                    </label>
                    <p class="pl-1 text-black">or drag and drop</p>
                  </div>
                  <p class="text-xs text-black">
                    PNG, JPG, GIF up to 10MB
                  </p>
                
                
                
                </div>
              </div>
            </div>

            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" name="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
          </div>
        </form>
        <form method="get" action="/centreinteret/{{$membre->id}}/edit">
          @csrf
        <div>
          <div>
           <a href="/centreinteret/{{$membre->id}}/edit"> <p> Vos centres d'interets</p></a>
          </div>
          <div>
            @include('components.SliderInterets')
          </div>
        </div>
  
        </form>
      </div>
    </div>
  </div>

  @endsection