@extends('layouts.app')

@section('main')
    <div class="flex flex-row gap-4 m-5 ">


        <div class="w-1/2">
            <H1 class="text-7xl"> Quels sont vos centres d'interets ?</H1>
        </div>


        <div class="flex-col w-1/2  ">
           
            <form action="{{route('centreinteret.update', $user->id)}}" method="post" name="formCinteret">
                @csrf
                <h3>Selectionnez vos centres d'intérets</h3>
                <select name="centreinterets[]" multiple
                    class=" h-96  appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline ">


                    @foreach ($cinterets as $cinteret)
                        <option 
                            @foreach ($user->centreinterets as $cint)
                             @if ($cint->id === $cinteret->id) selected @endif
                             @endforeach
                             value="{{ $cinteret->id }}">
                             {{ $cinteret->label }}
                        </option>
                    @endforeach



                </select>

                <div>
                    <button class="btn btn-success m-3"> <i class="fa-solid fa-pen"></i> &nbsp Mettre à jour mes centres
                        d'interets</button>
                </div>
            </form>

        </div>





    </div>
@endsection
