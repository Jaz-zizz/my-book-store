@extends('layouts.main', [
    'title' => $category['name'],
    'titleClass' => ['app-cl-category'],
])



@section('content')
    <main id="app-main-content">

        <table class="app-cmp-data-list">
            <caption>
                Products List for
                <span class="app-cl-category">
                    {{ $category['name'] }}
                </span>
            </caption>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Code</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('images/products/' . $product['code'] . '.jpg') }}"
                                class="app-cl-product-image" alt="{{ $product['name'] }}">
                        </td>
                        <td>
                            <a class="app-cl-product-code" href="{{ route('products.view', ['product' => $product['code']]) }}">
                                <em>{{ $product['code'] }}</em>
                            </a>
                        </td>
                        <td>{{ $product['name'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No products found in this category.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>


    </main>
@endsection
