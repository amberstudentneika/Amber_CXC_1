@extends('layouts.navbar')

@section('content')
    <div class=" mt-20 flex justify-items-center justify-center ">
    <form method="post" action="{{route('AddPayment')}}" class="w-full max-w-sm">
        @csrf


{{--<input type="hidden" name="subj_id" value="{{$subj_data->id}}">--}}
<input type="hidden" name="stud_id" value="{{$stud_data}}">

{{--        <div class="md:flex md:items-center mb-6">--}}
{{--            <div class="md:w-1/3">--}}
{{--                <label  class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">--}}
{{--              Subject--}}
{{--                </label>--}}
{{--            </div>--}}
{{--            <div class="md:w-2/3">--}}
{{--                <input readonly name="subj_nm" value="{{$subj_data->subject_nm}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Jane">--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Amount Paid
                </label>
            </div>
            <div class="md:w-2/3">
                <input name="amt_paid" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" >
            </div>
        </div>

{{--        <div class="md:flex md:items-center mb-6">--}}
{{--            <div class="md:w-1/3">--}}
{{--                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">--}}
{{--                    Date Paid--}}
{{--                </label>--}}
{{--            </div>--}}
{{--            <div class="md:w-2/3">--}}
{{--                <input name="date_paid" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="date">--}}
{{--            </div>--}}
{{--        </div>--}}





        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button type="submit" class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                    Submit
                </button>
                <button type="reset" class="shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                    Clear
                </button>
            </div>
        </div>
    </form>



    {{--        <div class="md:flex md:items-center mb-6">--}}
    {{--            <div class="md:w-1/3">--}}
    {{--                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">--}}
    {{--                    Password--}}
    {{--                </label>--}}
    {{--            </div>--}}
    {{--            <div class="md:w-2/3">--}}
    {{--                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="******************">--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="md:flex md:items-center mb-6">--}}
    {{--            <div class="md:w-1/3"></div>--}}
    {{--            <label class="md:w-2/3 block text-gray-500 font-bold">--}}
    {{--                <input class="mr-2 leading-tight" type="checkbox">--}}
    {{--                <span class="text-sm">--}}
    {{--        Send me your newsletter!--}}
    {{--      </span>--}}
    {{--            </label>--}}
    {{--        </div>--}}
    {{--        <div class="md:flex md:items-center">--}}
    {{--            <div class="md:w-1/3"></div>--}}
    {{--            <div class="md:w-2/3">--}}
    {{--                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">--}}
    {{--                    Sign Up--}}
    {{--                </button>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    </div>
@endsection
