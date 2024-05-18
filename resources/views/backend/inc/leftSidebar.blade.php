<aside class="tt-sidebar bg-light-subtle" id="sidebar">
    <div class="tt-brand">
        <a href="https://grostore.themetags.com/admin" class="tt-brand-link">
            <img src="https://grostore.themetags.com/public/uploads/media/yqqPV512Gk5DMpvCj2UllKrCl52bam3yD6QvfiPP.png"
                 class="tt-brand-favicon ms-1" alt="favicon">
            <img src="https://grostore.themetags.com/public/uploads/media/LOa3BqX3ydhVC0V1fwYEyvEpM5N9NaoA0E7u3EQs.png"
                 class="tt-brand-logo ms-2" alt="logo">
        </a>
        <a href="javascript:void(0);" class="tt-toggle-sidebar">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                       stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                       class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></span>
        </a>
    </div>

    <div class="tt-sidebar-nav pb-9 pt-4" data-simplebar="init">
        <div class="simplebar-wrapper tt-menu-item-active" style="margin: -24px 0px -64px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask show">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper tt-menu-item-active" tabindex="0" role="region"
                         aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content show" style="padding: 24px 0px 64px;">

                            <ul class="tt-side-nav">
                                <li class="side-nav-item nav-item tt-sidebar-user">
                                    <div class="side-nav-link bg-secondary-subtle mx-2 rounded-3 px-2">
                                        <div class="tt-user-avatar lh-1">
                                            <div class="avatar avatar-md status-online">
                                                <img class="rounded-circle"
                                                     src="https://grostore.themetags.com/public/uploads/media/dtkoInw3SD3IF3Q2I1jFtEDiE96mDD46RHB9RdxN.jpg"
                                                     alt="avatar">
                                            </div>
                                        </div>
                                        <div class="tt-nav-link-text ms-2">
                                            <h6 class="mb-0 lh-1 tt-line-clamp tt-clamp-1">Harshit</h6>
                                            <span class="text-muted fs-sm">Super Admin</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <nav class="navbar navbar-vertical navbar-expand-lg">
                                <div class="collapse navbar-collapse tt-menu-item-active" id="navbarVerticalCollapse">
                                    <div class="w-100 show" id="leftside-menu-container">
                                        <ul class="tt-side-nav searchMenu">

                                            <!-- dashboard -->
                                            <li class="side-nav-item nav-item tt-menu-item-active">
                                                <a href="{{url('/dashboard')}}"
                                                   class="side-nav-link active">
                                                    <span class="tt-nav-link-icon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-pie-chart"><path
                                                                d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path
                                                                d="M22 12A10 10 0 0 0 12 2v10z"></path></svg></span>
                                                    <span class="tt-nav-link-text">Dashboard</span>
                                                </a>
                                            </li>

                                            <!-- products -->

                                            <li class="side-nav-item nav-item ">
                                                <a data-bs-toggle="collapse" href="#sidebarProducts"
                                                   aria-expanded="false" aria-controls="sidebarProducts"
                                                   class="side-nav-link tt-menu-toggle collapsed">
                                                    <span class="tt-nav-link-icon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-shopping-bag"><path
                                                                d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line
                                                                x1="3" y1="6" x2="21" y2="6"></line><path
                                                                d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                    <span class="tt-nav-link-text">Products</span>
                                                </a>

                                                <div class="collapse" id="sidebarProducts" style="">
                                                    <ul class="side-nav-second-level">

                                                        <li class="">
                                                            <a href="{{route('product.index')}}"
                                                               class="">All Products</a>
                                                        </li>

                                                        <li class="">
                                                            <a href="{{route('product.categories.index')}}"
                                                               class="">All Categories</a>
                                                        </li>

{{--                                                        <li class="">--}}
{{--                                                            <a href="{{route('')}}"--}}
{{--                                                               class="">All Variations</a>--}}
{{--                                                        </li>--}}

                                                        <li class="">
                                                            <a href="{{route('product.brands.index')}}"
                                                               class="">All Brands</a>
                                                        </li>

                                                        <li class="">
                                                            <a href="{{route('product.units.index')}}"
                                                               class="">All Units</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>



                                            <!-- orders -->
                                            <li class="side-nav-item nav-item ">
                                                <a href="https://grostore.themetags.com/admin/orders"
                                                   class="side-nav-link ">
                                                    <span class="tt-nav-link-icon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-shopping-cart"><circle cx="9" cy="21"
                                                                                                          r="1"></circle><circle
                                                                cx="20" cy="21" r="1"></circle><path
                                                                d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></span>
                                                    <span class="tt-nav-link-text">
                    <span>Orders</span>


                                            <small class="badge bg-danger">New</small>
                                    </span>
                                                </a>
                                            </li>

                                            <!-- stock -->
                                            <li class="side-nav-item nav-item ">
                                                <a data-bs-toggle="collapse" href="#manageStock" aria-expanded=""
                                                   aria-controls="manageStock" class="side-nav-link tt-menu-toggle">
                                                    <span class="tt-nav-link-icon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-database"><ellipse
                                                                cx="12" cy="5" rx="9" ry="3"></ellipse><path
                                                                d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path
                                                                d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg></span>
                                                    <span class="tt-nav-link-text">Stocks</span>
                                                </a>
                                                <div class="collapse " id="manageStock">
                                                    <ul class="side-nav-second-level">

                                                        <li class="">
                                                            <a href="https://grostore.themetags.com/admin/stocks/add"
                                                               class="">Add Stock</a>
                                                        </li>

                                                        <li class="">
                                                            <a href="https://grostore.themetags.com/admin/stocks/locations">All
                                                                Locations</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>



                                            <!-- Users -->
                                            <li class="side-nav-title side-nav-item nav-item mt-3">
                                                <span class="tt-nav-title-text">Users</span>
                                            </li>

                                            <!-- customers -->
                                            <li class="side-nav-item nav-item">
                                                <a href="https://grostore.themetags.com/admin/customers"
                                                   class="side-nav-link">
                                                    <span class="tt-nav-link-icon"> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-users"><path
                                                                d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                                cx="9" cy="7" r="4"></circle><path
                                                                d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                                d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span>
                                                    <span class="tt-nav-link-text">Customers</span>
                                                </a>
                                            </li>


                                            <!-- tags -->
                                            <li class="side-nav-item nav-item ">
                                                <a href="https://grostore.themetags.com/admin/tags"
                                                   class="side-nav-link">
                                                    <span class="tt-nav-link-icon"> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-tag"><path
                                                                d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line
                                                                x1="7" y1="7" x2="7.01" y2="7"></line></svg></span>
                                                    <span class="tt-nav-link-text">Tags</span>
                                                </a>
                                            </li>



                                            <!-- Reports -->
                                            <li class="side-nav-title side-nav-item nav-item mt-3">
                                                <span class="tt-nav-title-text">Reports</span>
                                            </li>






                                            <!-- Settings -->
                                            <li class="side-nav-title side-nav-item nav-item mt-3">
                                                <span class="tt-nav-title-text">Settings</span>
                                            </li>


                                            <!-- affiliateSystem -->


                                            <!-- Roles & Permission -->
                                            <li class="side-nav-item nav-item ">
                                                <a href="{{route('admin.roles.index')}}"
                                                   class="side-nav-link">
                                                    <span class="tt-nav-link-icon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-unlock"><rect
                                                                x="3" y="11" width="18" height="11" rx="2"
                                                                ry="2"></rect><path d="M7 11V7a5 5 0 0 1 9.9-1"></path></svg></span>
                                                    <span class="tt-nav-link-text">Roles &amp; Permissions</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1665px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                 style="height: 477px; transform: translate3d(0px, 8px, 0px); display: block;"></div>
        </div>
    </div>
</aside>
