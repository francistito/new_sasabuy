@extends('backend.layouts.master')

@section('title')
    {{  ('Orders Report') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('contents')
    <section class="tt-section pt-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card tt-page-header">
                        <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                            <div class="tt-page-title">
                                <h2 class="h5 mb-lg-0">{{  ('Orders Report') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-12">
                    <div class="card mb-4" id="section-1">
                        <form class="app-search" action="{{ Request::fullUrl() }}" method="GET">
                            <div class="card-header border-bottom-0">
                                <div class="row justify-content-between g-3">

                                    <div class="col-auto">
                                        <div class="input-group">
                                            @php
                                                $start_date = date('m/d/Y', strtotime('7 days ago'));
                                                $end_date = date('m/d/Y', strtotime('today'));
                                                if (isset($date_var)) {
                                                    $start_date = date('m/d/Y', strtotime($date_var[0]));
                                                    $end_date = date('m/d/Y', strtotime($date_var[1]));
                                                }
                                            @endphp

                                            <input class="form-control date-range-picker date-range" type="text"
                                                placeholder="{{  ('Start date - End date') }}" name="date_range"
                                                data-startdate="'{{ $start_date }}'" data-enddate="'{{ $end_date }}'">
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <select class="form-select select2" name="payment_status"
                                            data-minimum-results-for-search="Infinity" id="payment_status">
                                            <option value="">{{  ('Payment Status') }}</option>
                                            <option value="{{ paidPaymentStatus() }}"
                                                @if (isset($paymentStatus) && $paymentStatus == paidPaymentStatus()) selected @endif>
                                                {{  ('Paid') }}</option>
                                            <option value="{{ unpaidPaymentStatus() }}"
                                                @if (isset($paymentStatus) && $paymentStatus == unpaidPaymentStatus()) selected @endif>
                                                {{  ('Unpaid') }}</option>
                                        </select>
                                    </div>

                                    <div class="col-auto">
                                        <select class="form-select select2" name="delivery_status"
                                            data-minimum-results-for-search="Infinity" id="update_delivery_status">
                                            <option value="">{{  ('Delivery Status') }}</option>
                                            <option value="order_placed" @if (isset($deliveryStatus) && $deliveryStatus == orderPlacedStatus()) selected @endif>
                                                {{  ('Order Placed') }}</option>
                                            <option value="pending" @if (isset($deliveryStatus) && $deliveryStatus == orderPendingStatus()) selected @endif>
                                                {{  ('Pending') }}
                                            <option value="processing" @if (isset($deliveryStatus) && $deliveryStatus == orderProcessingStatus()) selected @endif>
                                                {{  ('Processing') }}
                                            <option value="delivered" @if (isset($deliveryStatus) && $deliveryStatus == orderDeliveredStatus()) selected @endif>
                                                {{  ('Delivered') }}
                                            <option value="cancelled" @if (isset($deliveryStatus) && $deliveryStatus == orderCancelledStatus()) selected @endif>
                                                {{  ('Cancelled') }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-secondary">
                                            <i data-feather="search" width="18"></i>
                                            {{  ('Search') }}
                                        </button>
                                    </div>
                                    <div class="col-auto flex-grow-1"></div>
                                    <div class="col-auto text-end">
                                        <span class="fs-sm">
                                            {{  ('Total Amount') }}
                                        </span>
                                        <div class="fw-bold text-accent">
                                            {{ formatPrice($totalAmount) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <table class="table tt-footable border-top align-middle" data-use-parent-width="true">
                            <thead>
                                <tr>
                                    <th class="text-center">{{  ('S/L') }}
                                    </th>
                                    <th>{{  ('Placed On') }}</th>
                                    <th data-breakpoints="xs">{{  ('Items') }}</th>
                                    <th data-breakpoints="xs">{{  ('Payment Status') }}</th>
                                    <th data-breakpoints="xs">{{  ('Delivery Status') }}</th>
                                    <th data-breakpoints="xs" class="text-end">{{  ('Amount') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key => $order)
                                    <tr>
                                        <td class="text-center">
                                            {{ $key + 1 + ($orders->currentPage() - 1) * $orders->perPage() }}</td>

                                        <td>
                                            <span class="fs-sm">{{ date('d M, Y', strtotime($order->created_at)) }}</span>
                                        </td>



                                        <td class="tt-tb-price">
                                            <span class="fw-bold">
                                                {{ $order->orderItems()->count() }}
                                            </span>
                                        </td>

                                        <td>
                                            @if ($order->payment_status == unpaidPaymentStatus())
                                                <span class="badge bg-soft-danger rounded-pill text-capitalize">
                                                    {{ $order->payment_status }}
                                                </span>
                                            @else
                                                <span class="badge bg-soft-primary rounded-pill text-capitalize">
                                                    {{ $order->payment_status }}
                                                </span>
                                            @endif
                                        </td>


                                        <td>
                                            @if ($order->delivery_status == orderDeliveredStatus())
                                                <span class="badge bg-soft-primary rounded-pill text-capitalize">
                                                    {{ $order->delivery_status }}
                                                </span>
                                            @elseif($order->delivery_status == orderCancelledStatus())
                                                <span class="badge bg-soft-danger rounded-pill text-capitalize">
                                                    {{  (Str::title(Str::replace('_', ' ', $order->delivery_status))) }}
                                                </span>
                                            @else
                                                <span class="badge bg-soft-info rounded-pill text-capitalize">
                                                    {{  (Str::title(Str::replace('_', ' ', $order->delivery_status))) }}
                                                </span>
                                            @endif
                                        </td>


                                        <td class="text-end">
                                            <span
                                                class="fw-bold">{{ formatPrice($order->orderGroup->grand_total_amount) }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--pagination start-->
                        <div class="d-flex align-items-center justify-content-between px-4 pb-4">
                            <span>{{  ('Showing') }}
                                {{ $orders->firstItem() }}-{{ $orders->lastItem() }} {{  ('of') }}
                                {{ $orders->total() }} {{  ('results') }}</span>
                            <nav>
                                {{ $orders->appends(request()->input())->links() }}
                            </nav>
                        </div>
                        <!--pagination end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
