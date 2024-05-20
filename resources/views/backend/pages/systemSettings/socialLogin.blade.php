@extends('backend.layouts.master')

@section('title')
    {{  ('Social login configuration') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('contents')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{  ('Social Media Configuration') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- row -->
        <div class="row g-4">
            {{-- google --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mt-1 mb-2 ">
                            <div>{{  ('Google Login') }}</div>
                        </h5>
                        <form action="{{ route('admin.envKey.update') }}" method="POST">
                            @csrf
                            <div class="row justify-content-between">


                                <div class="col-12">
                                    <input type="hidden" name="types[]" value="GOOGLE_CLIENT_ID">
                                    <label for="code" class="form-label">{{  ('Google Client ID') }}</label>

                                    <input type="text" class="form-control" name="GOOGLE_CLIENT_ID"
                                        value="{{ env('GOOGLE_CLIENT_ID') }}"
                                        placeholder="{{  ('Google Client ID') }}">
                                </div>

                                <div class="col-12">
                                    <input type="hidden" name="types[]" value="GOOGLE_CLIENT_SECRET">
                                    <label for="code" class="form-label">{{  ('GOOGLE CLIENT SECRET') }}</label>

                                    <input type="text" class="form-control" name="GOOGLE_CLIENT_SECRET"
                                        value="{{ env('GOOGLE_CLIENT_SECRET') }}"
                                        placeholder="{{  ('GOOGLE CLIENT SECRET') }}">
                                </div>


                                <div class="d-flex align-items-center mt-2">
                                    <h6 class="badge badge-primary-lighten font-12">{{  ('Is Active?') }}</h6>
                                    <div class="ms-2 d-flex">
                                        <input type="checkbox" id="google_login" data-switch="bool" name="google_login"
                                            onchange="updateSettings(this, 'google_login')"
                                            @if (getSetting('google_login') == '1') checked @endif />
                                        <label for="google_login" data-on-label="{{  ('Yes') }}"
                                            data-off-label="{{  ('No') }}"></label>
                                    </div>
                                </div>

                                <div class="col-12 text-end">
                                    <div class="mt-3">
                                        <button class="btn btn-primary">{{  ('Save Configuration') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- facebook --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mt-1 mb-2 ">
                            <div>{{  ('Facebook Login') }}</div>
                        </h5>
                        <form action="{{ route('admin.envKey.update') }}" method="POST">
                            @csrf
                            <div class="row justify-content-between">
                                <div class="col-12">
                                    <input type="hidden" name="types[]" value="FACEBOOK_APP_ID">
                                    <label for="code" class="form-label">{{  ('Facebook App ID') }}</label>

                                    <input type="text" class="form-control" name="FACEBOOK_APP_ID"
                                        value="{{ env('FACEBOOK_APP_ID') }}"
                                        placeholder="{{  ('Facebook app ID') }}">
                                </div>

                                <div class="col-12">
                                    <input type="hidden" name="types[]" value="FACEBOOK_APP_SECRET">
                                    <label for="code" class="form-label">{{  ('Facebook App Secret') }}</label>

                                    <input type="text" class="form-control" name="FACEBOOK_APP_SECRET"
                                        value="{{ env('FACEBOOK_APP_SECRET') }}"
                                        placeholder="{{  ('Facebook App Secret') }}">
                                </div>


                                <div class="d-flex align-items-center mt-2">
                                    <h6 class="badge badge-primary-lighten font-12">{{  ('Is Active?') }}</h6>
                                    <div class="ms-2 d-flex">
                                        <input type="checkbox" id="facebook_login" data-switch="bool" name="facebook_login"
                                            onchange="updateSettings(this, 'facebook_login')"
                                            @if (getSetting('facebook_login') == 1) checked @endif />
                                        <label for="facebook_login" data-on-label="{{  ('Yes') }}"
                                            data-off-label="{{  ('No') }}"></label>
                                    </div>
                                </div>

                                <div class="col-12 text-end">
                                    <div class="mt-3">
                                        <button class="btn btn-primary">{{  ('Save Configuration') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div> <!-- container -->
@endsection

@section('scripts')
    <script type="text/javascript">
        "use strict"

        // update settings
        function updateSettings(el, entity) {
            if ($(el).is(':checked')) {
                var value = 1;
            } else {
                var value = 0;
            }
            $.post('{{ route('admin.settings.activation') }}', {
                _token: '{{ csrf_token() }}',
                entity: entity,
                value: value
            }, function(data) {
                if (data == 1) {
                    notifyMe('success', '{{  ('Settings updated successfully') }}');
                } else {
                    notifyMe('danger', '{{  ('Something went wrong') }}');
                }
            });
        }
    </script>
@endsection
