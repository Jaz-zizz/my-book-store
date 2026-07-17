@extends('layouts.main', ['title' => 'Products'])


@section('content')
    <main id="app-main-content">
        <table class="app-cmp-data-list">
            <caption>Product List</caption>
            <colgroup></colgroup>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Code</th>
                    <th>Category</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th>{{ $loop->iteration }}</th>

                        <td>
                            <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
                                alt="Picture of {{ $product['name'] }}" class="app-cl-product-image">
                        </td>

                        <td>
                            <a class="app-cl-product-code"
                                href="{{ route('products.view', ['product' => $product['code']]) }}">
                                <em>{{ $product['code'] }}</em>
                            </a>
                        </td>

                        <td>
                            @php
                                $catName =
                                    App\Http\Controllers\CategoryController::CATEGORIES[$product['catCode']]['name'] ??
                                    $product['catCode'];
                            @endphp
                            <a class="app-cl-category"
                                href="{{ route('categories.view', ['category' => $product['catCode']]) }}">
                                <em>{{ $catName }}</em>
                            </a>
                        </td>

                        <td>{{ $product['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
