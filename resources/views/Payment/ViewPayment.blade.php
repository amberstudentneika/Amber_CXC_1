@extends('layouts.navbar')

@section('content')
    <!-- component -->
    <table class=" border-collapse block md:table">
        <thead class="block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Subject</th>
{{--            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Cost</th>--}}
{{--            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Action</th>--}}
        </tr>
        </thead>
        <tbody class="block md:table-row-group">
        <?php $a=0; ?>

        @forelse($data as $info)
            <?php $a = $a + $info->cost_amt ?>
        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$info->subject_nm}}</td>
        </tr>
        @empty
        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
            <td  colspan="8" class=" text-center p-2 md:border md:border-grey-500 text-left block md:table-cell">No records to show</td>
        </tr>
        @endforelse
        <tr>
        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">Amount Due: {{$a}}</td>
        </tr>
        <tr>
            @foreach($balance as $bal)
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">Balance: {{$bal->balance_amt}} </td>
            @endforeach
        </tr>
        <tr>
        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
{{--          <a href="{{url('/payment/'.$stud_id.'/'.$info->id)}}"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Make Payment</button> </a>--}}
          <a href="{{url('/payment/'.$stud_id)}}"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Make Payment</button> </a>
        </td>
        </tr>
        </tbody>
    </table>

@endsection
