<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--favicon icon-->
    <link rel="shortcut icon" href="{{ assert('backend/assets/img/favicon.png') }}">

    <!--title-->
    <title>
        @yield('title')
    </title>

    <!--build:css-->
    @include('backend.inc.styles')
    <!-- end build -->
</head>

<body>
    <!--preloader start-->
{{--    <div id="preloader" class="bg-light-subtle">--}}
{{--        <div class="preloader-wrap">--}}
{{--            <img src="{{ assert(('navbar_logo')) }}" class="img-fluid">--}}
{{--            <div class="loading-bar"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--preloader end-->

    <!--sidebar section start-->
    @if (!Route::is('admin.pos.index'))
    @endif
    <!--sidebar section end-->

    <!--main content wrapper start-->
    <main class="tt-main-wrapper bg-secondary-subtle"
        @if (!Route::is('admin.pos.index')) id="content" @else  id="pos-content" @endif>
        @include('backend.inc.leftSidebar')

        <!--header section start-->
        @include('backend.inc.navbar')
        <!--header section end-->

        <!-- Start Content-->
        @yield('contents')
        <!-- container -->

        <!--footer section start-->
        @if (!Route::is('admin.pos.index'))
            @include('backend.inc.footer')
        @endif
        <!--footer section end-->

        <!-- media-manager -->
{{--        @include('backend.inc.media-manager.media-manager')--}}

    </main>
    <!--main content wrapper end-->

    <!-- delete modal -->
{{--    @include('backend.inc.deleteModal')--}}

{{--    <!--build:js-->--}}
{{--    @include('backend.inc.scripts')--}}
    <!--endbuild-->

    <!-- scripts from different pages -->
    @yield('scripts')
    <!-- bundle -->
    <script src="{{ asset('backend/assets/js/vendors/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/footable.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/flatpickr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/apex-scripts.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    <!-- localizations & others -->
    <script>
        'use strict';

        var TT = TT || {};
        TT.localize = {
            no_data_found: '{{ localize('No data found') }}',
            selected_file: '{{ localize('Selected File') }}',
            selected_files: '{{ localize('Selected Files') }}',
            file_added: '{{ localize('File added') }}',
            files_added: '{{ localize('Files added') }}',
            no_file_chosen: '{{ localize('No file chosen') }}',
        };
        TT.baseUrl = '{{ \Request::root() }}';

        // on click delete confirmation -- outside footable
        function confirmDelete(thisLink) {
            var url = $(thisLink).data("href");
            $("#delete-modal").modal("show");
            $("#delete-link").attr("href", url);
        }

        // feather icon refresh
        function initFeather() {
            feather.replace();
        }
        initFeather();
    </script>

    <!-- media-manager scripts -->
{{--    @include('backend.inc.media-manager.uppyScripts')--}}

    <script>
        "use strict"
        $(function() {

            // footable js
            $(function() {
                $("table.tt-footable").footable({
                    on: {
                        "ready.ft.table": function(e, ft) {
                            initTooltip();
                            deleteConfirmation();
                        },
                    },
                });
            });

            //    tooltip
            function initTooltip() {
                $('[data-bs-toggle="tooltip"]').tooltip();
            }
            initTooltip();

            // delete confirmation
            function deleteConfirmation() {
                $(".confirm-delete").click(function(e) {
                    e.preventDefault();
                    var url = $(this).data("href");
                    $("#delete-modal").modal("show");
                    $("#delete-link").attr("href", url);
                });
            }

            //    select2 js
            $(".select2").select2();
            $(".select2Max3").select2({
                maximumSelectionLength: 3
            });

            // modal select2
            function modalSelect2(parent = '.modalParentSelect2') {
                $('.modalSelect2').select2({
                    dropdownParent: $(parent)
                });
            }
            modalSelect2();

            //    flatpickr
            $(".date-picker").each(function(el) {
                var $this = $(this);
                var options = {
                    dateFormat: 'm/d/Y'
                };

                var date = $this.data("date");
                if (date) {
                    options.defaultDate = date;
                }

                $this.flatpickr(options);
            });



            $(".date-range-picker").each(function(el) {
                var $this = $(this);
                var options = {
                    mode: "range",
                    showMonths: 2,
                    dateFormat: 'm/d/Y'
                };

                var start = $this.data("startdate");
                var end = $this.data("enddate");

                if (start && end) {
                    options.defaultDate = [start, end];
                }

                $this.flatpickr(options);
            });

            // summernote
            $(".editor").each(function(el) {
                var $this = $(this);
                var buttons = $this.data("buttons");
                var minHeight = $this.data("min-height");
                var placeholder = $this.attr("placeholder");
                var format = $this.data("format");

                buttons = !buttons ? [
                        ["font", ["bold", "underline", "italic", "clear"]],
                        ['fontname', ['fontname']],
                        ["para", ["ul", "ol", "paragraph"]],
                        ["style", ["style"]],
                        ['fontsize', ['fontsize']],
                        ["color", ["color"]],
                        ["insert", ["link", "picture", "video"]],
                        ["view", ["undo", "redo"]],
                    ] :
                    buttons;
                placeholder = !placeholder ? "" : placeholder;
                minHeight = !minHeight ? 150 : minHeight;
                format = typeof format == "undefined" ? false : format;

                $this.summernote({
                    toolbar: buttons,
                    placeholder: placeholder,
                    height: minHeight,
                    codeviewFilter: false,
                    codeviewIframeFilter: true,
                    disableDragAndDrop: true,
                    callbacks: {

                    },
                });

                var nativeHtmlBuilderFunc = $this.summernote(
                    "module",
                    "videoDialog"
                ).createVideoNode;

                $this.summernote("module", "videoDialog").createVideoNode = function(url) {
                    var wrap = $(
                        '<div class="embed-responsive embed-responsive-16by9"></div>'
                    );
                    var html = nativeHtmlBuilderFunc(url);
                    html = $(html).addClass("embed-responsive-item");
                    return wrap.append(html)[0];
                };
            });

            // add more
            $('[data-toggle="add-more"]').each(function() {
                var $this = $(this);
                var content = $this.data("content");
                var target = $this.data("target");

                $this.on("click", function(e) {
                    e.preventDefault();
                    $(target).append(content);
                    $('.select2').select2();
                });
            });

            // remove parent
            $(document).on(
                "click",
                '[data-toggle="remove-parent"]',
                function() {
                    var $this = $(this);
                    var parent = $this.data("parent");
                    $this.closest(parent).remove();
                }
            );

            // language flag select2
            $(".country-flag-select").select2({
                templateResult: countryCodeFlag,
                templateSelection: countryCodeFlag,
                escapeMarkup: function(m) {
                    return m;
                },
            });

            function countryCodeFlag(state) {
                var flagName = $(state.element).data("flag");
                if (!flagName) return state.text;
                return (
                    "<div class='d-flex align-items-center'><img class='flag me-2' src='" + flagName +
                    "' height='14' />" + state.text + "</div>"
                );
            }
        })
    </script>


    <!-- required scripts -->
    <script>
        "use strict";

        // change language
        {{--function changeLocaleLanguage(e) {--}}
        {{--    var locale = e.dataset.flag;--}}
        {{--    $.post("{{ route('backend.changeLanguage') }}", {--}}
        {{--        _token: '{{ csrf_token() }}',--}}
        {{--        locale: locale--}}
        {{--    }, function(data) {--}}
        {{--        location.reload();--}}
        {{--    });--}}
        {{--}--}}


        {{--// change currency--}}
        {{--function changeLocaleCurrency(e) {--}}
        {{--    var currency_code = e.dataset.currency;--}}
        {{--    $.post("{{ route('backend.changeCurrency') }}", {--}}
        {{--        _token: '{{ csrf_token() }}',--}}
        {{--        currency_code: currency_code--}}
        {{--    }, function(data) {--}}
        {{--        location.reload();--}}
        {{--    });--}}
        {{--}--}}

        {{--// change location--}}
        {{--function changeLocation(e) {--}}
        {{--    var text = '{{ localize('If you change the location your cart will be cleared. Do you want to proceed?') }}'--}}
        {{--    var confirm = window.confirm(text);--}}
        {{--    if (confirm) {--}}
        {{--        var location_id = e.dataset.location;--}}
        {{--        $.post("{{ route('backend.changeLocation') }}", {--}}
        {{--            _token: '{{ csrf_token() }}',--}}
        {{--            location_id: location_id--}}
        {{--        }, function(data) {--}}
        {{--            location.reload();--}}
        {{--        });--}}
        {{--    }--}}
        {{--}--}}

        {{--// localize data--}}
        {{--function localizeData(langKey) {--}}
        {{--    window.location = '{{ url()->current() }}?lang_key=' + langKey + '&localize';--}}
        {{--}--}}

        {{--// ajax toast--}}
        {{--function notifyMe(level, message) {--}}
        {{--    if (level == 'danger') {--}}
        {{--        level = 'error';--}}
        {{--    }--}}
        {{--    toastr.options = {--}}
        {{--        closeButton: true,--}}
        {{--        newestOnTop: false,--}}
        {{--        progressBar: true,--}}
        {{--        positionClass: "toast-top-center",--}}
        {{--        preventDuplicates: false,--}}
        {{--        onclick: null,--}}
        {{--        showDuration: "3000",--}}
        {{--        hideDuration: "1000",--}}
        {{--        timeOut: "5000",--}}
        {{--        extendedTimeOut: "1000",--}}
        {{--        showEasing: "swing",--}}
        {{--        hideEasing: "linear",--}}
        {{--        showMethod: "fadeIn",--}}
        {{--        hideMethod: "fadeOut",--}}
        {{--    };--}}
        {{--    toastr[level](message);--}}
        {{--}--}}

        {{--//laravel flash toast messages--}}
        {{--@foreach (session('flash_notification', collect())->toArray() as $message)--}}
        {{--    notifyMe("{{ $message['level'] }}", "{{ $message['message'] }}");--}}
        {{--@endforeach--}}
    </script>

</body>

</html>
