@extends('layouts.main')

@section('content')
<style>
table, th, td {
border: 1px solid black;   /* เพิ่มเส้นขอบทึบสีดำขนาด 1px รอบทุกช่อง */
table {
    border-collapse: collapse; 
}
}</style>
<h2>Products List for {{ $category['name'] }}</h2>
<table>
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
                <img src="{{ asset('images/products/'.$product['code'].'.jpg') }}" class="app-cl-product-image" alt="{{ $product['name'] }}">
            </td>
            <td>
                <a href="{{ route('products.view', ['product' => $product['code']]) }}">
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
@endsection