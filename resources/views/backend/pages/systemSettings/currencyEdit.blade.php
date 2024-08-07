@extends('backend.layouts.master')

@section('title')
    {{  ('Update Currency') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('contents')
    <section class="tt-section pt-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card tt-page-header">
                        <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                            <div class="tt-page-title">
                                <h2 class="h5 mb-lg-0">{{  ('Update Currency') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 g-4">

                <!--left sidebar-->
                <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
                    <form action="{{ route('admin.currencies.update') }}" method="POST" id="section-1">
                        @csrf
                        <input type="hidden" name="id" value="{{ $currency->id }}">
                        <!--currency info start-->
                        <div class="card mb-4" id="section-2">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('Basic Information') }}</h5>

                                <div class="mb-4">
                                    <label for="name" class="form-label">{{  ('Currency Name') }}</label>
                                    <input type="text" name="name" id="name"
                                        placeholder="{{  ('Type currency name') }}" class="form-control" required
                                        value="{{ $currency->name }}">
                                </div>

                                <div class="mb-4">
                                    <label for="symbol" class="form-label">{{  ('Currency Symbol') }}</label>
                                    <input type="text" name="symbol" id="symbol"
                                        placeholder="{{  ('Type symbol') }}" class="form-control" required
                                        value="{{ $currency->symbol }}">
                                </div>

                                @if ($currency->code != 'usd')
                                    <div class="mb-4">
                                        <label for="code" class="form-label">{{  ('Currency Code') }}</label>
                                        <input type="text" name="code" id="code"
                                            placeholder="{{  ('Type code') }}" class="form-control" required
                                            value="{{ $currency->code }}">
                                    </div>
                                @else
                                    <input type="hidden" name="code" value="usd">
                                @endif

                                <div class="mb-4">
                                    <label for="rate" class="form-label">{{  ('Rate') }} <small>(
                                            {{  ('1 USD = ?') }} )</small></label>
                                    <input type="number" step="0.001" min="0" name="rate" id="rate"
                                        placeholder="{{  ('Rate') }}" class="form-control" required
                                        value="{{ $currency->rate }}">
                                </div>

                                <div class="mb-4">
                                    <label for="symbol" class="form-label">{{  ('Alignment') }}</label>
                                    <select id="alignment" class="form-control text-uppercase select2" name="alignment"
                                        data-toggle="select2">
                                        <option value="0" {{ $currency->alignment == 0 ? 'selected' : '' }}>
                                            {{  ('[symbol][amount]') }}
                                        </option>
                                        <option value="1" {{ $currency->alignment == 1 ? 'selected' : '' }}>
                                            {{  ('[amount][symbol]') }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--currency info end-->
                        <!-- submit button -->
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <button class="btn btn-primary" type="submit">
                                        <i data-feather="save" class="me-1"></i> {{  ('Save Changes') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- submit button end -->

                    </form>
                </div>

                <!--right sidebar-->
                <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                    <div class="card tt-sticky-sidebar d-none d-xl-block">
                        <div class="card-body">
                            <h5 class="mb-4">{{  ('Currency Information') }}</h5>
                            <div class="tt-vertical-step">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#section-1" class="active">{{  ('Basic Information') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
