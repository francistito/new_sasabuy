
@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])


@push('after-styles')

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin: 10px 0;
        }

        .sidebar-menu a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .sidebar-menu a:hover {
            background-color: #575757;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .dashboard-section {
            margin-bottom: 40px;
        }

        h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .profile-info p {
            margin: 10px 0;
        }

        .order-table, .product-table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-table th, .order-table td,
        .product-table th, .product-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .order-table th, .product-table th {
            background-color: #f4f4f4;
        }

        .order-table tbody tr:nth-child(even), .product-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .product-form {
            margin-bottom: 20px;
        }

        .product-form h3 {
            margin-bottom: 10px;
        }

        .product-form form {
            display: flex;
            flex-direction: column;
        }

        .product-form label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .product-form input, .product-form textarea {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        .product-form button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .product-form button:hover {
            background-color: #575757;
        }

        .product-list {
            margin-top: 20px;
        }

        .product-list h3 {
            margin-bottom: 10px;
        }

        .product-table img {
            max-width: 50px;
        }

        .product-table button {
            padding: 5px 10px;
            margin-right: 5px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .product-table button:hover {
            background-color: #575757;
        }
    </style>
@endpush
@section('content')



    <!-- End Slider Section -->
    <div class="container">
        <!-- Banner -->

        <div class="dashboard-container">

            @include('frontend.includes.dashbiard.aside')


            <main class="main-content">
                <section id="manage-products" class="dashboard-section">
                    <h2>Manage Products</h2>
                    <div class="tabs">
                        <button class="tab-button active" data-tab="add-product">Add New Product</button>
                        <button class="tab-button" data-tab="existing-products">Existing Products</button>
                    </div>
                    <div id="add-product" class="tab-content active">
                        <div class="product-form">
                            <h3>Add New Product</h3>
                            <form id="productForm">
                                <label for="productName">Product Name:</label>
                                <input type="text" id="productName" name="productName" required>

                                <label for="productPrice">Product Price:</label>
                                <input type="text" id="productPrice" name="productPrice" required>

                                <label for="productDescription">Product Description:</label>
                                <textarea id="productDescription" name="productDescription" required></textarea>

                                <label for="productImage">Product Image:</label>
                                <input type="file" id="productImage" name="productImage" required>

                                <button type="submit">Add Product</button>
                            </form>
                        </div>
                    </div>
                    <div id="existing-products" class="tab-content">
                        <div class="product-list">
                            <h3>Existing Products</h3>
                            <table class="product-table">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Sample Product</td>
                                    <td>$10.00</td>
                                    <td>This is a sample product.</td>
                                    <td><img src="sample-image.jpg" alt="Sample Product" width="50"></td>
                                    <td>
                                        <button>Edit</button>
                                        <button>Delete</button>
                                    </td>
                                </tr>
                                <!-- More product rows can go here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!-- End Banner -->
        <!-- Deals-and-tabs -->

        <!-- End Deals-and-tabs -->
    </div>

    <div class="container">

        <!-- End Recently viewed -->
        <!-- Brand Carousel -->
        {{--        @include('frontend.includes.home_section.list_of_brands')--}}
        <!-- End Brand Carousel -->
    </div>

    @push('after-scripts')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabButtons = document.querySelectorAll('.tab-button');
                const tabContents = document.querySelectorAll('.tab-content');

                tabButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const tab = button.getAttribute('data-tab');

                        tabButtons.forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');

                        tabContents.forEach(content => {
                            content.classList.remove('active');
                            if (content.getAttribute('id') === tab) {
                                content.classList.add('active');
                            }
                        });
                    });
                });
            });
        </script>
    @endpush
@endsection
