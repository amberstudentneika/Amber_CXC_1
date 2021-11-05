@extends('layouts.navbar')

@section('content')










    <div class="bg-blue-600 mx-auto p-16" style="max-width: 800px;">
        <div class="flex items-center justify-between mb-8 px-3">
            <div>
                <span class="text-2xl">Quotation #</span>{{rand(100,1000)}}<br />
{{--                <span>Date</span>:  {{$data->date_paid}}<br />--}}
            </div>
            <div class="text-right">
                <img src="https://www.stenvdb.be/assets/img/email-signature.png" />
            </div>
        </div>

        <div class="flex justify-between mb-8 px-3">
            <div>
                @forelse($stds as $std)
              {{$std->frst_nm." ".$std->last_nm}}
                @empty
                no name
                @endforelse
            </div>
            <div class="text-right">
                Amber App One<br />
                StressFree Street<br />
                77 City<br />
                AAO@gmail.com
            </div>
        </div>

        <div class="border border-t-2 border-gray-200 mb-8 px-3"></div>

        <div class="mb-8 px-3">
            <p>This statement shows a report of your transactions.</p>
        </div>

        <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
            <div>SELECTED SUBJECTS</div>
            <div class="text-right font-medium"></div>
        </div>

        @forelse($subjects as $data)
        <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
            <div>{{$data->subject->subject_nm}}</div>
            <div class="text-right font-medium"></div>
        </div>
        @empty
        <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
            <div>Empty</div>
            <div class="text-right font-medium">n/a</div>
        </div>
        @endforelse
        <div class="flex justify-between items-center mb-2 px-3">
            <div class="text-2xl leading-none"><span class="">Total</span>:</div>
            <div class="text-2xl text-right font-medium">{{"$".$tran}}</div>
        </div>
    </div>


{{--___________________________________________________________________________________--}}
    <div class="bg-green-700 mx-auto p-16" style="max-width: 800px;">
        <div class="flex items-center justify-between mb-8 px-3">
            <div>
                <span class="text-2xl">Invoice #</span>{{rand(100,1000)}}<br />
{{--                <span>Date</span>:  {{$data->date_paid}}<br />--}}
            </div>
            <div class="text-right">
                <img src="https://www.stenvdb.be/assets/img/email-signature.png" />
            </div>
        </div>

        <div class="flex justify-between mb-8 px-3">
            <div>
                @forelse($stds as $std)
              {{$std->frst_nm." ".$std->last_nm}}
                @empty
                no name
                @endforelse
            </div>
            <div class="text-right">
                Amber App One<br />
                StressFree Street<br />
                77 City<br />
                AAO@gmail.com
            </div>
        </div>

        <div class="border border-t-2 border-gray-200 mb-8 px-3"></div>

        <div class="mb-8 px-3">
            <p>This statement shows a report of your transactions.</p>
        </div>

        <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
            <div>PAYMENT</div>
            <div class="text-right font-medium"></div>
        </div>

        @forelse($info as $data)
        <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
            <div>Date:</div>
            <div class="text-right font-medium"> {{$data->date_paid}}</div>
        </div>

        <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
            <div>Amount Paid</div>
            <div class="text-right font-medium">{{$data->amount_paid}}</div>
        </div>

        <div class="flex justify-between items-center mb-2 px-3">
            <div class="text-2xl leading-none"><span class="">Total Balances</span>:</div>
            <div class="text-2xl text-right font-medium">{{"$".$data->balance_amt}} </div>
        </div>
            <div class="border border-t-2 border-gray-200 mb-8 px-3"></div>
        @empty
            <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
                <div>Empty</div>
                <div class="text-right font-medium"></div>
            </div>
            <div class="border border-t-2 w-full border-gray-200 mb-8 px-3"></div>
        @endforelse
{{--        <div class="flex mb-8 justify-end px-3">--}}
{{--            <div class="text-right w-1/2 px-0 leading-tight">--}}
{{--                <small class="text-xs">Nullam auctor, tellus sit amet eleifend interdum, quam nisl luctus quam, a tincidunt nisi eros ac dui. Curabitur leo ipsum, bibendum sit amet suscipit sed, gravida non lectus. Nunc porttitor lacus sapien, nec congue quam cursus nec. Quisque vel vehicula ipsum. Donec condimentum dolor est, ut interdum augue blandit luctus. </small>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="mb-10 px-3">--}}
{{--            <span>To be paid before</span>  Februari 1st 2019 on <b class="underline font-bold">BE71 0961 2345 6769</b> specifying the invoice #--}}
{{--        </div>--}}

        <div class="mb-8 text-4xl text-center px-3">
            <span>Thank you!</span>
        </div>

{{--        <div class="text-center text-sm px-3">--}}
{{--            hello@yourdomain.com ∖ www.yourdomain.com--}}
{{--        </div>--}}
    </div>






    {{--    <!-- component -->--}}
{{--    <h1 class="text-center">Report</h1>--}}
{{--    <div class="flex justify-center justify-items-center">--}}

{{--    <table class="mt-5 border-collapse block md:table">--}}
{{--        <thead class="block md:table-header-group">--}}
{{--        <tr class="border text-center border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">--}}
{{--            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 block md:table-cell">Subject</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody class=" text-center block md:table-row-group">--}}
{{--        @forelse($subjects as $data)--}}
{{--            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">--}}
{{--                <td class="p-2 md:border md:border-grey-500 block md:table-cell">{{$data->subject->subject_nm}}</td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">--}}
{{--                <td  colspan="8" class=" text-center p-2 md:border md:border-grey-500 block md:table-cell">No records to show</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--    </div>--}}


{{--    <div class="flex justify-center justify-items-center">--}}
{{--    <h1>Payments</h1>--}}
{{--    <table class="mt-2 border-collapse block md:table">--}}
{{--        <thead class="block md:table-header-group">--}}
{{--        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">--}}
{{--            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Subject</th>--}}
{{--            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500  block md:table-cell">Amount Paid</th>--}}
{{--            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 block md:table-cell">Balance Amount</th>--}}
{{--            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500  block md:table-cell">Date Paid</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody class="text-center block md:table-row-group">--}}
{{--        @forelse($info as $data)--}}
{{--            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">--}}
{{--                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$data->subject_id}}</td>--}}
{{--                <td class="p-2 md:border md:border-grey-500  block md:table-cell">{{$data->amount_paid}}</td>--}}
{{--                <td class="p-2 md:border md:border-grey-500  block md:table-cell">{{$data->balance_amt}}</td>--}}
{{--                <td class="p-2 md:border md:border-grey-500  block md:table-cell">{{$data->date_paid}}</td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">--}}
{{--                <td  colspan="8" class=" text-center p-2 md:border md:border-grey-500 text-left block md:table-cell">No records to show</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--    </div>--}}
@endsection

{{--@section('paginate')--}}
{{--    <div class="w-1/4">--}}
{{--        {{$data->render()}}--}}
{{--    </div>--}}
{{--@endsection--}}
