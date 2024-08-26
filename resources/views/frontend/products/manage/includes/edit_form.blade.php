<form action="{{ route('product.update') }}" method="POST" class="pb-650" id="product-form"  enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{ $product->id }}">
    <input type="hidden" name="vendor" value="{{1 }}">

    <!--basic information start-->
    <div class="card mb-4" id="section-1">
        <div class="card-body">
            <h5 class="mb-4">{{  ('Basic Information') }}</h5>

            <div class="mb-4">
                <label for="name" class="form-label">{{  ('Product Name') }}</label>
                <input class="form-control" type="text" id="name" value="{{$product->name}}" placeholder="{{  ('Type your product name') }}" name="name" required>
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

                {!! Form::textarea('description', $product->description, ['class' => 'form-control', 'rows' => '10', 'autocomplete' => 'off', 'id' => 'description', 'aria-describedby' => 'contentHelp', ]) !!}

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


                </div>
            </div>
            <div class="mb-4">
                <img class="mw-100 size-60px mx-auto border p-1 lazyloaded" src="{{url(other_images($product))}}"
                     data-src="{{url(other_images($product))}}"
                     onerror="this.onerror=null;this.src='{{url(other_images($product))}}';"
                     loading="lazy">
            </div>
        </div>
    </div>
    <!--product image and gallery end-->

    <!--product category start-->
{{--    <div class="card mb-4" id="section-3">--}}
{{--        <div class="card-body">--}}
{{--            <h5 class="mb-4">{{  ('Product Categories') }}</h5>--}}

{{--        </div>--}}
{{--    </div>--}}
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
                            {{ Form::select('category_ids',$categories->pluck('name','id'),null,['class'=>'form-control select2', 'required', 'id' => 'iscompany','placeholder' => 'Select categories', 'autocomplete' => 'off','required']) }}

{{--                            <select class="select2 form-control"--}}
{{--                                    data-placeholder="{{  ('Select categories') }}" name="category_ids[]"--}}
{{--                                    required >--}}
{{--                                @foreach ($categories as $category)--}}
{{--                                    <option value="{{ $category->id }}">--}}
{{--                                        {{ $category->collectLocalization('name') }}</option>--}}
{{--                                    @foreach ($category->childrenCategories as $childCategory)--}}
{{--                                        @include('backend.pages.products.products.subCategory', [--}}
{{--                                            'subCategory' => $childCategory,--}}
{{--                                        ])--}}
{{--                                    @endforeach--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="price" class="form-label">{{  ('Price') }}</label>
                            <input type="number" min="0" step="0.0001" id="price"
                                   name="price" placeholder="{{  ('Product price') }}"
                                   class="form-control" required value="{{$product->max_price}}">
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



    <input name="is_published" value="0" style="display: none">


    <!-- submit button -->
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <button class="btn btn-primary" type="submit" >
                    <i data-feather="save" class="me-1"></i><span style="color: white">{{  ('Update Product') }}</span>
                </button>
            </div>
        </div>
    </div>
    <!-- submit button end -->

</form>


