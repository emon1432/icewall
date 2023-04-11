@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Completed Request List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div id="listContainer" class="intro-y col-span-12 ">
            <div class="intro-y col-span-12 ">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr class="text-center">
                            <th>NAME</th>
                            <th>PHONE</th>
                            <th>ADDRESS</th>
                            <th>TYPE</th>
                            <th>WEIGHT</th>
                            <th>PRICE</th>
                            <th>IMAGES</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($completedRequests as $completedRequest)
                            <tr class="intro-x text-center font-medium whitespace-nowrap">
                                <td>{{ $completedRequest->name }}</td>
                                <td>{{ $completedRequest->phone }}</td>
                                <td>{{ $completedRequest->address }}</td>
                                <td>{{ $completedRequest->product_category_id }}</td>
                                <td>{{ $completedRequest->product_weight }}</td>
                                <td>{{ $completedRequest->total_price }}</td>
                                <td class="flex items-center justify-center">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="{{ $completedRequest->name }}" class="rounded-full"
                                            src="{{ asset('backend/images/sell-request') }}/{{ $completedRequest->image ?? 'avatar.png' }}">
                                    </div>
                                </td>
                                <td class="bg-dark">completed</td>
                                <td class="table-report__action w-56">
                                    <div class="flex  items-center">
                                        <button class="flex items-center mr-3" data-tw-toggle="modal"
                                            data-tw-target="#edit-seller-modal-{{ $completedRequest->id }}">
                                            <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection