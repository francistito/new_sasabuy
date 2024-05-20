@extends('backend.layouts.master')

@section('title')
    {{  ('Tags') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('contents')
    <section class="tt-section pt-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card tt-page-header">
                        <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                            <div class="tt-page-title">
                                <h2 class="h5 mb-lg-0">{{  ('Tags') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 g-4">
                <!--left sidebar-->
                <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4" id="section-1">
                                <form class="app-search" action="{{ Request::fullUrl() }}" method="GET">
                                    <div class="card-header border-bottom-0">
                                        <div class="row justify-content-between g-3">
                                            <div class="col-auto flex-grow-1">
                                                <div class="tt-search-box">
                                                    <div class="input-group">
                                                        <span
                                                            class="position-absolute top-50 start-0 translate-middle-y ms-2">
                                                            <i data-feather="search"></i></span>
                                                        <input class="form-control rounded-start w-100" type="text"
                                                            id="search" name="search"
                                                            placeholder="{{  ('Search') }}"
                                                            @isset($searchKey)
                                            value="{{ $searchKey }}"
                                        @endisset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary">
                                                    <i data-feather="search" width="18"></i>
                                                    {{  ('Search') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <table class="table tt-footable border-top" data-use-parent-width="true">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="7%">{{  ('S/L') }}</th>
                                            <th>{{  ('Name') }}</th>
                                            <th data-breakpoints="xs sm" class="text-end">{{  ('Action') }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tags as $key => $tag)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $key + 1 + ($tags->currentPage() - 1) * $tags->perPage() }}</td>

                                                <td class="fw-semibold">
                                                    {{ $tag->name }}
                                                </td>

                                                <td class="text-end">
                                                    <div class="dropdown tt-tb-dropdown">
                                                        <button type="button" class="btn p-0" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end shadow">

                                                            @can('edit_tags')
                                                                <a class="dropdown-item"
                                                                    href="{{ route('admin.tags.edit', ['id' => $tag->id, 'lang_key' => env('DEFAULT_LANGUAGE')]) }}& ">
                                                                    <i data-feather="edit-3"
                                                                        class="me-2"></i>{{  ('Edit') }}
                                                                </a>
                                                            @endcan

                                                            @can('delete_tags')
                                                                <a href="#" class="dropdown-item confirm-delete"
                                                                    data-href="{{ route('admin.tags.delete', $tag->id) }}"
                                                                    title="{{  ('Delete') }}">
                                                                    <i data-feather="trash-2" class="me-2"></i>
                                                                    {{  ('Delete') }}
                                                                </a>
                                                            @endcan
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!--pagination start-->
                                <div class="d-flex align-items-center justify-content-between px-4 pb-4">
                                    <span>{{  ('Showing') }}
                                        {{ $tags->firstItem() }}-{{ $tags->lastItem() }} {{  ('of') }}
                                        {{ $tags->total() }} {{  ('results') }}</span>
                                    <nav>
                                        {{ $tags->appends(request()->input())->links() }}
                                    </nav>
                                </div>
                                <!--pagination end-->
                            </div>
                        </div>

                        @can('add_tags')
                            <form action="{{ route('admin.tags.store') }}" class="pb-650" method="POST">
                                @csrf
                                <!-- tag info start-->
                                <div class="card mb-4" id="section-2">
                                    <div class="card-body">
                                        <h5 class="mb-4">{{  ('Add New Tag') }}</h5>

                                        <div class="mb-4">
                                            <label for="name" class="form-label">{{  ('Tag Name') }}</label>
                                            <input class="form-control" type="text" id="name" name="name"
                                                placeholder="{{  ('Type tag name') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- tag info end-->

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button class="btn btn-primary" type="submit">
                                                <i data-feather="save" class="me-1"></i> {{  ('Save Tag') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endcan
                    </div>
                </div>

                <!--right sidebar-->
                <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                    <div class="card tt-sticky-sidebar">
                        <div class="card-body">
                            <h5 class="mb-4">{{  ('Tag Information') }}</h5>
                            <div class="tt-vertical-step">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#section-1" class="active">{{  ('All Tags') }}</a>
                                    </li>
                                    @can('add_tags')
                                        <li>
                                            <a href="#section-2">{{  ('Add New Tag') }}</a>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
