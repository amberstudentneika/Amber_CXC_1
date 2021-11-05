@extends('layouts.navbar')

@section('content')
    <div class=" mt-20 flex justify-items-center justify-center ">
    <form class="bg-white p-15 rounded-2xl " method="post" action="{{route('ViewStudentPayment')}}">
        @csrf
{{--    <label class=" text-center mb-2 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Select Student</label>--}}
    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="student_id">
        <option>Select a student</option>
        @forelse($data as $info)
        <option value="{{$info->id}}">{{$info->frst_nm." ".$info->last_nm}}</option>
        @empty
        <option>No Student Payment Record Found</option>
            @endforelse
    </select>
        <div class="mt-4 flex justify-items-center justify-center">
        <a href="{{url('/view/payment/student/'.$info->id)}}">
            <input class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" value="Go">
        </a>
        </div>
    </form>
    </div>
@endsection

{{--@section('paginate')--}}
{{--    <div class="w-1/4">--}}
{{--        {{$data->render()}}--}}
{{--    </div>--}}
{{--@endsection--}}
