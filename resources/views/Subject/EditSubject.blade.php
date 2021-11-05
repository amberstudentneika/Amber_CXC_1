@extends('layouts.navbar')

@section('content')
    <div class=" mt-20 flex justify-items-center justify-center ">
    <form method="post" action="{{route('UpdateSubject')}}" class="w-full max-w-sm">
        @csrf
        <input name="id" value="{{$info->id}}" type="hidden">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Subject Name
                </label>
            </div>
            <div class="md:w-2/3">
                <input name="sub" value="{{$info->subject_nm}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="English">
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Cost
                </label>
            </div>
            <div class="md:w-2/3">
                <input name="amt"  value="{{$info->cost_amt}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="1000">
            </div>
        </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button type="submit" class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                            Submit
                        </button>
                        <a  href="{{ url()->previous() }}"> <button type="button" class="shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                            Back
                            </button></a>
                    </div>
                </div>
    </form>


        </div>

@endsection
