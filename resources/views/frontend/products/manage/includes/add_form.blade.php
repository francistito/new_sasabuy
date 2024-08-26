<form action="{{ route('product.store') }}" method="POST" class="pb-650" id="product-form"  enctype="multipart/form-data">
    @csrf
    <!--basic information start-->

    <input type="hidden" name="vendor" value="{{1 }}">

    <div class="card mb-4" id="section-1">
        <div class="card-body">
            <h5 class="mb-4">{{  ('Basic Information') }}</h5>

            <div class="mb-4">
                <label for="name" class="form-label">{{  ('Product Name') }}</label>
                <input class="form-control" type="text" id="name"
                       placeholder="{{  ('Type your product name') }}" name="name" required>
                <span class="fs-sm text-muted">
                                        {{  ('Product name is required and recommended to be unique.') }}
                                    </span>
            </div>
{{--            <div class="mb-4">--}}
{{--                <label for="short_description"--}}
{{--                       class="form-label">{{  ('Short Description') }}</label>--}}
{{--                <textarea class="form-control" id="short_description"--}}
{{--                          placeholder="{{  ('Type your product short description') }}" rows="5" name="short_description"></textarea>--}}
{{--            </div>--}}
            <div class="mb-4">
                <label for="description" class="form-label">{{  ('Description') }}</label>
                {{--                                    <textarea id="description" class="editor"  name="description"></textarea>--}}

                {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '10', 'autocomplete' => 'off', 'id' => 'description', 'aria-describedby' => 'contentHelp', ]) !!}

            </div>

        </div>
    </div>
    <!--basic information end-->

    <!--product image and gallery start-->
    <div class="card mb-4" id="section-2">
        <div class="card-body">
            <h5 class="mb-4">{{  ('Images') }}</h5>
            <div class="mb-4">
                <label class="form-label">{{  ('Thumbnail') }} (592x592)</label>
                <div class="tt-image-drop rounded">
                    <span class="fw-semibold">{{  ('Choose Product Thumbnail') }}</span>
                    <!-- choose media -->

                    <input type="file" name="product_thumbnail">
                    {{--                                        <div class="tt-product-thumb show-selected-files mt-3">--}}
                    {{--                                            <div class="avatar avatar-xl cursor-pointer choose-media"--}}
                    {{--                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"--}}
                    {{--                                                onclick="showMediaManager(this)" data-selection="single">--}}
                    {{--                                                <input type="hidden" name="image">--}}
                    {{--                                                <div class="no-avatar rounded-circle">--}}
                    {{--                                                    <span><i data-feather="plus"></i></span>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    <!-- choose media -->
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label">{{  ('Gallery') }}</label>
                <div class="tt-image-drop rounded">
                    <span class="fw-semibold">{{  ('Choose Gallery Images') }}</span>

                    <!-- choose media -->

                    <input type="file" name="other_images">

                    {{--                                        <div class="tt-product-thumb show-selected-files mt-3">--}}
                    {{--                                            <div class="avatar avatar-xl cursor-pointer choose-media"--}}
                    {{--                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"--}}
                    {{--                                                onclick="showMediaManager(this)" data-selection="multiple">--}}
                    {{--                                                <input type="hidden" name="images">--}}
                    {{--                                                <div class="no-avatar rounded-circle">--}}
                    {{--                                                    <span><i data-feather="plus"></i></span>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    <!-- choose media -->
                </div>
            </div>
        </div>
    </div>
    <!--product image and gallery end-->

    <!--product category start-->
    <div class="card mb-4" id="section-3">
        <div class="card-body">
            <h5 class="mb-4">{{  ('Product Categories') }}</h5>

        </div>
    </div>
    <!--product category end-->

{{--    <!--product tags start-->--}}
{{--    <div class="card mb-4" id="section-tags">--}}
{{--        <div class="card-body">--}}
{{--            <h5 class="mb-4">{{  ('Product Tags') }}</h5>--}}
{{--            <div class="mb-4">--}}
{{--                <select class="form-control select2" name="tag_ids[]" data-toggle="select2" multiple--}}
{{--                        data-placeholder="{{  ('Select tags..') }}">--}}
{{--                    @foreach ($tags as $tag)--}}
{{--                        <option value="{{ $tag->id }}">--}}
{{--                            {{ $tag->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--product tags end-->--}}

    <!--product brand and unit start-->
{{--    <div class="row" id="section-4">--}}
{{--        <div class="col-lg-6">--}}
{{--            <div class="card mb-4">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="mb-4">{{  ('Product Brand') }}</h5>--}}
{{--                    <div class="tt-select-brand">--}}
{{--                        <select class="select2 form-control" id="selectBrand" name="brand_id">--}}
{{--                            <option value="">{{  ('Select Brand') }}</option>--}}
{{--                            @foreach ($brands as $brand)--}}
{{--                                <option value="{{ $brand->id }}">--}}
{{--                                    {{ $brand->collectLocalization('name') }}--}}
{{--                                </option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6">--}}
{{--            <div class="card mb-4">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="mb-4">{{  ('Product Unit') }}</h5>--}}
{{--                    <div class="tt-select-brand">--}}
{{--                        <select class="select2 form-control" id="selectUnit" name="unit_id">--}}
{{--                            <option value="">{{  ('Select Unit') }}</option>--}}
{{--                            @foreach ($units as $unit)--}}
{{--                                <option value="{{ $unit->id }}">--}}
{{--                                    {{ $unit->collectLocalization('name') }}--}}
{{--                                </option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--product brand and unit end-->

    <!--product price sku and stock start-->
    <div class="card mb-4" id="section-5">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="mb-4">{{  ('Categories & Prices') }}</h5>
                <div class="form-check form-switch">
{{--                    <label class="form-check-label fw-medium text-primary"--}}
{{--                           for="is_variant">{{  ('Has Variations?') }}</label>--}}
{{--                    <input type="checkbox" class="form-check-input" id="is_variant"--}}
{{--                           onchange="isVariantProduct(this)" name="is_variant">--}}
                </div>
            </div>

            <!-- without variation start-->
            <div class="noVariation">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <label for="price" class="form-label">{{  ('Categories') }}</label>

                            <select class="select2 form-control"
                                    data-placeholder="{{  ('Select categories') }}" name="category_ids[]"
                                    required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->collectLocalization('name') }}</option>
                                    @foreach ($category->childrenCategories as $childCategory)
                                        @include('backend.pages.products.products.subCategory', [
                                            'subCategory' => $childCategory,
                                        ])
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">{{  ('Price') }}</label>
                            <input type="number" min="0" step="0.0001" id="price"
                                   name="price" placeholder="{{  ('Product price') }}"
                                   class="form-control" required>
                        </div>
                    </div>
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="stock" class="form-label">{{  ('Stock') }} <small--}}
{{--                                    class="text-warning">({{  ('Default Location') }})</small></label>--}}
{{--                            <input type="number" id="stock"--}}
{{--                                   placeholder="{{  ('Stock qty') }}" name="stock"--}}
{{--                                   class="form-control" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="sku" class="form-label">{{  ('SKU') }}</label>--}}
{{--                            <input type="text" id="sku"--}}
{{--                                   placeholder="{{  ('Product sku') }}" name="sku"--}}
{{--                                   class="form-control" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="code" class="form-label">{{  ('Code') }}</label>--}}
{{--                            <input type="text" id="code"--}}
{{--                                   placeholder="{{  ('Product code') }}" name="code"--}}
{{--                                   class="form-control" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!-- without variation start end-->


        </div>
        <!--for variation row end-->
    </div>
    <!--product price sku and stock end-->

    <!--product discount start-->
{{--    <div class="card mb-4" id="section-6">--}}
{{--        <div class="card-body">--}}
{{--            <h5 class="mb-4">{{  ('Product Discount') }}</h5>--}}

{{--            <div class="row g-3">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="mb-3">--}}
{{--                        <label class="form-label">{{  ('Date Range') }}</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <input class="form-control date-range-picker date-range" type="text"--}}
{{--                                   placeholder="{{  ('Start date - End date') }}"--}}
{{--                                   name="date_range">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3">--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="discount_value"--}}
{{--                               class="form-label">{{  ('Discount Amount') }}</label>--}}
{{--                        <input class="form-control" type="number"--}}
{{--                               placeholder="{{  ('Type discount amount') }}" id="discount_value"--}}
{{--                               value="0" step="0.001" name="discount_value">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3">--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="discount_type"--}}
{{--                               class="form-label">{{  ('Percent or Fixed') }}</label>--}}
{{--                        <select class="select2 form-control" id="discount_type" name="discount_type">--}}
{{--                            <option value="percent">{{  ('Percent %') }}</option>--}}
{{--                            <option value="flat">{{  ('Fixed') }}</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--product discount end-->



    <!--product tax start-->
{{--    <div class="card mb-4" id="section-8">--}}
{{--        <div class="card-body">--}}
{{--            <h5 class="mb-4">{{  ('Product Taxes') }} ({{  ('Default 0%') }})</h5>--}}
{{--            <div class="row g-3">--}}
{{--                @foreach ($taxes as $tax)--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="mb-0">--}}
{{--                            <label class="form-label">{{ $tax->name }}</label>--}}
{{--                            <input type="hidden" value="{{ $tax->id }}" name="tax_ids[]">--}}
{{--                            <input type="number" lang="en" min="0" value="0"--}}
{{--                                   step="0.01" placeholder="{{  ('Tax') }}" name="taxes[]"--}}
{{--                                   class="form-control" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="mb-0">--}}
{{--                            <label class="form-label">{{  ('Percent or Fixed') }}</label>--}}
{{--                            <select class="select2 form-control" name="tax_types[]">--}}
{{--                                <option value="percent">{{  ('Percent') }} % </option>--}}
{{--                                <option value="flat">{{  ('Fiexed') }}</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--product tax end-->

    <input name="is_published" value="0" style="display: none">

    <!--product sell target & status start-->
{{--    <div class="row g-3" id="section-9">--}}
{{--        <div class="col-lg-6">--}}
{{--            <div class="card mb-4">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="mb-4">{{  ('Sell Target') }}</h5>--}}
{{--                    <div class="tt-select-brand">--}}
{{--                        <input type="number" min="0" name="sell_target" class="form-control"--}}
{{--                               placeholder="{{  ('Type your sell target') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6">--}}
{{--            <div class="card mb-4">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="mb-4">{{  ('Product Status') }}</h5>--}}
{{--                    --}}
{{--                    <input name="is_published" value="0" style="display: none">--}}
{{--                    <div class="tt-select-brand">--}}
{{--                        <select class="select2 form-control" id="is_published" name="is_published">--}}
{{--                            <option value="1">{{  ('Published') }}</option>--}}
{{--                            <option value="0">{{  ('Unpublished') }}</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--product sell target & status end-->

    <!--seo meta description start-->
    {{--                        <div class="card mb-4" id="section-10">--}}
    {{--                            <div class="card-body">--}}
    {{--                                <h5 class="mb-4">{{  ('SEO Meta Configuration') }}</h5>--}}

    {{--                                <div class="mb-4">--}}
    {{--                                    <label for="meta_title" class="form-label">{{  ('Meta Title') }}</label>--}}
    {{--                                    <input type="text" name="meta_title" id="meta_title"--}}
    {{--                                        placeholder="{{  ('Type meta title') }}" class="form-control">--}}
    {{--                                    <span class="fs-sm text-muted">--}}
    {{--                                        {{  ('Set a meta tag title. Recommended to be simple and unique.') }}--}}
    {{--                                    </span>--}}
    {{--                                </div>--}}

    {{--                                <div class="mb-4">--}}
    {{--                                    <label for="meta_description"--}}
    {{--                                        class="form-label">{{  ('Meta Description') }}</label>--}}
    {{--                                    <textarea class="form-control" name="meta_description" id="meta_description" rows="4"--}}
    {{--                                        placeholder="{{  ('Type your meta description') }}"></textarea>--}}
    {{--                                </div>--}}
    {{--                                <div class="mb-4">--}}
    {{--                                    <label class="form-label">{{  ('Meta Image') }}</label>--}}
    {{--                                    <div class="tt-image-drop rounded">--}}
    {{--                                        <span class="fw-semibold">{{  ('Choose Meta Image') }}</span>--}}
    {{--                                        <!-- choose media -->--}}
    {{--                                        <div class="tt-product-thumb show-selected-files mt-3">--}}
    {{--                                            <div class="avatar avatar-xl cursor-pointer choose-media"--}}
    {{--                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"--}}
    {{--                                                onclick="showMediaManager(this)" data-selection="single">--}}
    {{--                                                <input type="hidden" name="meta_image">--}}
    {{--                                                <div class="no-avatar rounded-circle">--}}
    {{--                                                    <span><i data-feather="plus"></i></span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- choose media -->--}}
    {{--                                    </div>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    <!--seo meta description end-->

    <!-- submit button -->
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <button class="btn btn-primary" type="submit" style="color: white ">
                    <i data-feather="save" class="me-1"></i> {{  ('Save Product') }}
                </button>
            </div>
        </div>
    </div>
    <!-- submit button end -->

</form>


