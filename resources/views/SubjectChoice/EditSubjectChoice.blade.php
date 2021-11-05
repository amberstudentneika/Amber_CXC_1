@extends('layouts.navbar')

@section('content')
    <div class=" mt-20 flex justify-items-center justify-center ">
    <form method="post" action="{{route('UpdateSubjectChoice')}}" class="w-full max-w-sm">
        @csrf
        <input name="id" value="{{$data->id}}" type="hidden">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Student
                </label>
            </div>

            <div class="md:w-2/3">
                <select name="stud_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option value="">Select student</option>
                    @foreach($students as $student)
                        <option value="{{$student->id}}">{{$student->frst_nm." ".$student->last_nm}} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Subject
                </label>
            </div>
            <div class="md:w-2/3">
                <select name="sub_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option value="">Select subject</option>
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->subject_nm}} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Year of Exam
                </label>
            </div>
            <div class="md:w-2/3">
                <input name="yoe" value="{{$data->year_of_exam}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="date">
            </div>
        </div>

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Status
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="stat" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option value="{{$data->status}}" selected>{{$data->status}}</option>
                                <option value="approved">Approved</option>
                                <option value="denied">Denied</option>
                        </select>
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
