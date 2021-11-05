@extends('layouts.navbar')

@section('content')
    <!-- component -->
    <div class="mt-20">
    <table class="min-w-full border-collapse block md:table">
        <thead class="block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Student</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Subject Choice</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Subject Cost</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Year of Exam</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Action</th>
        </tr>
        </thead>
        <tbody class="block md:table-row-group">
        @forelse($data as $info)
        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$info->student->frst_nm." ".$info->student->last_nm}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$info->subject->subject_nm}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$info->subject->cost_amt}}</td>
            <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">{{$info->status}}</td>
            <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell">{{$info->year_of_exam}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
{{--                <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>--}}
               <a href="{{url('/approve/subjectchoice/'.$info->id)}}"> <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">Approve</button> </a>
               <a href="{{url('/deny/subjectchoice/'.$info->id)}}"> <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Deny</button> </a>
               <a href="{{url('/edit/subjectchoice/'.$info->id)}}"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button> </a>
{{--                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>--}}
            </td>
        </tr>
        @empty
        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
            <td  colspan="8" class=" text-center p-2 md:border md:border-grey-500 text-left block md:table-cell">No records to show</td>
        </tr>
        @endforelse
        </tbody>
    </table>
    </div>
@endsection

@section('paginate')
    <div class="w-1/4">
        {{$data->render()}}
    </div>
@endsection
