<ul class="tt-side-nav">

    <!-- dashboard -->
    <li class="side-nav-item nav-item">
        <a href="{{ url('') }}" class="side-nav-link">
            <span class="tt-nav-link-icon"><i data-feather="pie-chart"></i></span>
            <span class="tt-nav-link-text">{{  ('Dashboard') }}</span>
        </a>
    </li>

    <!-- products -->
    @php
        $productsActiveRoutes = ['brands.index', 'brands.edit', 'units.index', 'units.edit', 'variations.index', 'variations.edit', 'variationValues.index', 'variationValues.edit', 'taxes.index', 'taxes.edit', 'categories.index', 'categories.create', 'categories.edit', 'products.index', 'products.create', 'products.edit'];
    @endphp

    @canany(['products', 'categories', 'variations', 'brands', 'units', 'taxes'])
    @endcan
    <li class=" nav-parent nav-expanded">
        <a data-bs-toggle="collapse" href="#sidebarProducts" aria-expanded="{{ areActiveRoutes($productsActiveRoutes, 'true') }}" aria-controls="sidebarProducts"
           class="side-nav-link tt-menu-toggle">
            <span class="tt-nav-link-icon"><i data-feather="shopping-bag"></i></span>
            <span class="tt-nav-link-text">{{  ('Products') }}</span>
        </a>

        <div class="collapse {{ areActiveRoutes($productsActiveRoutes, 'show') }}" id="sidebarProducts">
            <ul class="side-nav-second-level">


                @can('variations')
                    <li
                        class="{{ areActiveRoutes(
                                ['variations.index', 'variations.edit', 'variationValues.index', 'variationValues.edit'],
                                'tt-menu-item-active'  ) }}">
                        <a href="{{ route('variations.index') }}"
                           class="{{ areActiveRoutes([
                                    'variations.index',
                                    'variations.edit',
                                    'variationValues.index',
                                    'variationValues.edit',
                                ]) }}">{{  ('All Variations') }}</a>
                    </li>
                @endcan



                @can('units')
                    <li class="{{ areActiveRoutes(['units.index', 'units.edit'], 'tt-menu-item-active') }}">
                        <a href="{{ route('units.index') }}"
                           class="{{ areActiveRoutes(['units.index']) }}">{{  ('All Units') }}</a>
                    </li>
                @endcan

                @can('taxes')
                    <li class="{{ areActiveRoutes(['taxes.index', 'taxes.edit'], 'tt-menu-item-active') }}">
                        <a href="{{ route('taxes.index') }}"
                           class="{{ areActiveRoutes(['taxes.index']) }}">{{  ('All Taxes') }}</a>
                    </li>
                @endcan
            </ul>
        </div>
    </li>

    {{--                @can('products')--}}
    <li class="{{ areActiveRoutes(['product.index', 'product.create', 'product.edit'], 'tt-menu-item-active') }}">
        <a href="{{ route('product.index') }}"
           class="{{ areActiveRoutes(['products.index', 'products.create', 'products.edit']) }}">{{  ('All Products') }}</a>
    </li>
    {{--                @endcan--}}

    {{--                @can('categories')--}}
    <li
        class="{{ areActiveRoutes(['product.categories.index', 'product.categories.create', 'product.categories.edit'], 'tt-menu-item-active') }}">
        <a href="{{ route('product.categories.index') }}"
           class="{{ areActiveRoutes(['product.categories.index', 'product.categories.create', 'product.categories.edit']) }}">{{  ('All Categories') }}</a>
    </li>
    {{--                @endcan--}}
    {{--                @can('brands')--}}
    <li class="{{ areActiveRoutes(['product.brands.index', 'product.brands.edit'], 'tt-menu-item-active') }}">
        <a href="{{ route('product.brands.index') }}"
           class="{{ areActiveRoutes(['product.brands.index', 'product.brands.edit']) }}">{{  ('All Brands') }}</a>
    </li>
    {{--                @endcan--}}



    <!-- orders -->
    @can('orders')
        <li
            class="side-nav-item nav-item {{ areActiveRoutes(['orders.index', 'orders.show'], 'tt-menu-item-active') }}">
            <a href="{{ route('orders.index') }}"
                class="side-nav-link {{ areActiveRoutes(['orders.index', 'orders.show']) }}">
                <span class="tt-nav-link-icon"><i data-feather="shopping-cart"></i></span>
                <span class="tt-nav-link-text">
                    <span>{{  ('Orders') }}</span>

                    @php
                        $newOrdersCount = \App\Models\Order::isPlaced()->count();
                    @endphp

                    @if ($newOrdersCount > 0)
                        <small class="badge bg-danger">{{  ('New') }}</small>
                    @endif
                </span>
            </a>
        </li>
    @endcan

    <!-- stock -->
    @php
        $stockActiveRoutes = ['stocks.create', 'locations.index', 'locations.create', 'locations.edit'];
    @endphp
    @canany(['add_stock', 'show_locations'])
        <li class="side-nav-item nav-item {{ areActiveRoutes($stockActiveRoutes, 'tt-menu-item-active') }}">
            <a data-bs-toggle="collapse" href="#manageStock"
                aria-expanded="{{ areActiveRoutes($stockActiveRoutes, 'true') }}" aria-controls="manageStock"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="database"></i></span>
                <span class="tt-nav-link-text">{{  ('Stocks') }}</span>
            </a>
            <div class="collapse {{ areActiveRoutes($stockActiveRoutes, 'show') }}" id="manageStock">
                <ul class="side-nav-second-level">

                    @can('add_stock')
                        <li class="{{ areActiveRoutes(['stocks.create'], 'tt-menu-item-active') }}">
                            <a href="{{ route('stocks.create') }}"
                                class="{{ areActiveRoutes(['stocks.create']) }}">{{  ('Add Stock') }}</a>
                        </li>
                    @endcan

                    @can('show_locations')
                        <li
                            class="{{ areActiveRoutes(['locations.index', 'locations.create', 'locations.edit'], 'tt-menu-item-active') }}">
                            <a href="{{ route('locations.index') }}">{{  ('All Locations') }}</a>
                        </li>
                    @endcan
                </ul>
            </div>
        </li>
    @endcan

    <!-- Users -->
    <li class="side-nav-title side-nav-item nav-item">
        <span class="tt-nav-title-text">{{  ('Users') }}</span>
    </li>

    <!-- customers -->
    @can('customers')
        <li class="side-nav-item nav-item">
            <a href="{{ route('customers.index') }}" class="side-nav-link">
                <span class="tt-nav-link-icon"> <i data-feather="users"></i></span>
                <span class="tt-nav-link-text">{{  ('Customers') }}</span>
            </a>
        </li>
    @endcan


    <!-- Contents -->
    <li class="side-nav-title side-nav-item nav-item">
        <span class="tt-nav-title-text">{{  ('Contents') }}</span>
    </li>

    <!-- tags -->
    @php
        $tagsActiveRoutes = ['tags.index', 'tags.edit'];
    @endphp
    @can('tags')
        <li class="side-nav-item nav-item {{ areActiveRoutes($tagsActiveRoutes, 'tt-menu-item-active') }}">
            <a href="{{ route('tags.index') }}" class="side-nav-link">
                <span class="tt-nav-link-icon"> <i data-feather="tag"></i></span>
                <span class="tt-nav-link-text">{{  ('Tags') }}</span>
            </a>
        </li>
    @endcan



    <!-- Blog Systems -->
    @php
        $blogActiveRoutes = ['blogs.index', 'blogs.create', 'blogs.edit', 'blogCategories.index', 'blogCategories.edit'];
    @endphp
    @canany(['blogs', 'blog_categories'])
        <li class="side-nav-item nav-item {{ areActiveRoutes($blogActiveRoutes, 'tt-menu-item-active') }}">
            <a data-bs-toggle="collapse" href="#blogSystem"
                aria-expanded="{{ areActiveRoutes($blogActiveRoutes, 'true') }}" aria-controls="blogSystem"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="file-text"></i></span>
                <span class="tt-nav-link-text">{{  ('Blogs') }}</span>
            </a>
            <div class="collapse {{ areActiveRoutes($blogActiveRoutes, 'show') }}" id="blogSystem">
                <ul class="side-nav-second-level">
                    @can('blogs')
                        <li
                            class="{{ areActiveRoutes(['blogs.index', 'blogs.create', 'blogs.edit'], 'tt-menu-item-active') }}">
                            <a href="{{ route('blogs.index') }}"
                                class="{{ areActiveRoutes(['blogs.index', 'blogs.create', 'blogs.edit']) }}">{{  ('All Blogs') }}</a>
                        </li>
                    @endcan

                    @can('blog_categories')
                        <li
                            class="{{ areActiveRoutes(['blogCategories.index', 'blogCategories.edit'], 'tt-menu-item-active') }}">
                            <a href="{{ route('blogCategories.index') }}">{{  ('Categories') }}</a>
                        </li>
                    @endcan
                </ul>
            </div>
        </li>
    @endcan


    <!-- Fulfillment -->
    <li class="side-nav-title side-nav-item nav-item">
        <span class="tt-nav-title-text">{{  ('Fulfillment') }}</span>
    </li>

    <!-- Reports -->
    <li class="side-nav-title side-nav-item nav-item">
        <span class="tt-nav-title-text">{{  ('Reports') }}</span>
    </li>

    <!-- reports -->
    @php
        $reportActiveRoutes = ['reports.orders', 'reports.sales', 'reports.categorySales', 'reports.salesAmount', 'reports.deliveryStatus'];
    @endphp

    @canany(['order_reports', 'product_sale_reports', 'category_sale_reports', 'sales_amount_reports',
        'delivery_status_reports'])
        <li class="side-nav-item nav-item {{ areActiveRoutes($reportActiveRoutes, 'tt-menu-item-active') }}">
            <a data-bs-toggle="collapse" href="#reports"
                aria-expanded="{{ areActiveRoutes($reportActiveRoutes, 'true') }}" aria-controls="reports"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="bar-chart"></i></span>
                <span class="tt-nav-link-text">{{  ('Reports') }}</span>
            </a>
            <div class="collapse {{ areActiveRoutes($reportActiveRoutes, 'show') }}" id="reports">
                <ul class="side-nav-second-level">

                    @can('order_reports')
                        <li class="{{ areActiveRoutes(['reports.orders'], 'tt-menu-item-active') }}">
                            <a href="{{ route('reports.orders') }}"
                                class="{{ areActiveRoutes(['reports.orders']) }}">{{  ('Orders Report') }}</a>
                        </li>
                    @endcan

                    @can('product_sale_reports')
                        <li class="{{ areActiveRoutes(['reports.sales'], 'tt-menu-item-active') }}">
                            <a href="{{ route('reports.sales') }}"
                                class="{{ areActiveRoutes(['reports.sales']) }}">{{  ('Product Sales') }}</a>
                        </li>
                    @endcan

                    @can('category_sale_reports')
                        <li class="{{ areActiveRoutes(['reports.categorySales'], 'tt-menu-item-active') }}">
                            <a href="{{ route('reports.categorySales') }}"
                                class="{{ areActiveRoutes(['reports.categorySales']) }}">{{  ('Category Wise Sales') }}</a>
                        </li>
                    @endcan

                    @can('sales_amount_reports')
                        <li class="{{ areActiveRoutes(['reports.salesAmount'], 'tt-menu-item-active') }}">
                            <a href="{{ route('reports.salesAmount') }}"
                                class="{{ areActiveRoutes(['reports.salesAmount']) }}">{{  ('Sales Amount Report') }}</a>
                        </li>
                    @endcan

                    @can('delivery_status_reports')
                        <li class="{{ areActiveRoutes(['reports.deliveryStatus'], 'tt-menu-item-active') }}">
                            <a href="{{ route('reports.deliveryStatus') }}"
                                class="{{ areActiveRoutes(['reports.deliveryStatus']) }}">{{  ('Delivery Status Report') }}</a>
                        </li>
                    @endcan
                </ul>
            </div>
        </li>
    @endcan



    <!-- Settings -->
    <li class="side-nav-title side-nav-item nav-item">
        <span class="tt-nav-title-text">{{  ('Settings') }}</span>
    </li>


    <!-- Roles & Permission -->
    @php
        $rolesActiveRoutes = ['roles.index', 'roles.create', 'roles.edit'];
    @endphp
    @can('roles_and_permissions')
        <li class="side-nav-item nav-item {{ areActiveRoutes($rolesActiveRoutes, 'tt-menu-item-active') }}">
            <a href="{{ route('roles.index') }}" class="side-nav-link">
                <span class="tt-nav-link-icon"><i data-feather="unlock"></i></span>
                <span class="tt-nav-link-text">{{  ('Roles & Permissions') }}</span>
            </a>
        </li>
    @endcan


    <!-- system settings -->
    @php
        $settingsActiveRoutes = ['generalSettings', 'orderSettings', 'timeslot.edit', 'languages.index', 'languages.edit', 'currencies.index', 'currencies.edit', 'languages.localizations', 'smtpSettings.index'];
    @endphp

    @canany(['smtp_settings', 'general_settings', 'currency_settings', 'language_settings'])
        <li class="side-nav-item nav-item {{ areActiveRoutes($settingsActiveRoutes, 'tt-menu-item-active') }}">
            <a data-bs-toggle="collapse" href="#systemSetting"
                aria-expanded="{{ areActiveRoutes($settingsActiveRoutes, 'true') }}" aria-controls="systemSetting"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="settings"></i></span>
                <span class="tt-nav-link-text">{{  ('System Settings') }}</span>
            </a>
            <div class="collapse {{ areActiveRoutes($settingsActiveRoutes, 'show') }}" id="systemSetting">
                <ul class="side-nav-second-level">

                    @can('order_settings')
                        <li
                            class="{{ areActiveRoutes(['orderSettings', 'timeslot.edit'], 'tt-menu-item-active') }}">
                            <a href="{{ route('orderSettings') }}"
                                class="{{ areActiveRoutes(['generalSettings']) }}">{{  ('Order Settings') }}</a>
                        </li>
                    @endcan

                    <li class="d-none {{ areActiveRoutes(['smtpSettings.index'], 'tt-menu-item-active') }}">
                        <a href="{{ route('smtpSettings.index') }}"
                            class="{{ areActiveRoutes(['smtpSettings.index']) }}">{{  ('Admin Store') }}</a>
                    </li>

                    @can('smtp_settings')
                        <li class="{{ areActiveRoutes(['smtpSettings.index'], 'tt-menu-item-active') }}">
                            <a href="{{ route('smtpSettings.index') }}"
                                class="{{ areActiveRoutes(['smtpSettings.index']) }}">{{  ('SMTP Settings') }}</a>
                        </li>
                    @endcan

                    @can('general_settings')
                        <li class="{{ areActiveRoutes(['generalSettings'], 'tt-menu-item-active') }}">
                            <a href="{{ route('generalSettings') }}"
                                class="{{ areActiveRoutes(['generalSettings']) }}">{{  ('General Settings') }}</a>
                        </li>
                    @endcan

                    @can('payment_settings')
                        <li class="{{ areActiveRoutes(['settings.paymentMethods'], 'tt-menu-item-active') }}">
                            <a href="{{ route('settings.paymentMethods') }}"
                                class="{{ areActiveRoutes(['settings.paymentMethods']) }}">{{  ('Payment Methods') }}</a>
                        </li>
                    @endcan

                    <li class="d-none {{ areActiveRoutes(['settings.socialLogin'], 'tt-menu-item-active') }}">
                        <a href="{{ route('settings.socialLogin') }}"
                            class="{{ areActiveRoutes(['settings.socialLogin']) }}">{{  ('Social Media Login') }}</a>
                    </li>

                    @can('language_settings')
                        <li
                            class="{{ areActiveRoutes(
                                ['languages.index', 'languages.edit', 'languages.localizations'],
                                'tt-menu-item-active'
                            ) }}">
                            <a href="{{ route('languages.index') }}"
                                class="{{ areActiveRoutes(['languages.index', 'languages.edit', 'languages.localizations']) }}">{{  ('Multilingual Settings') }}</a>
                        </li>
                    @endcan

                    @can('currency_settings')
                        <li
                            class="{{ areActiveRoutes(
                                ['currencies.index', 'currencies.edit', 'currencies.localizations'],
                                'tt-menu-item-active'
                            ) }}">
                            <a href="{{ route('currencies.index') }}"
                                class="{{ areActiveRoutes(['currencies.index', 'currencies.edit', 'currencies.localizations']) }}">{{  ('Multi Currency Settings') }}</a>
                        </li>
                    @endcan
                </ul>
            </div>
        </li>
    @endcan
</ul>
