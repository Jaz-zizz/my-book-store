@extends('layouts.main')

@section('title', 'Products')

@section('content')
<style>
table {
border-collapse: collapse;
}
table, th, td {
border: 1px solid black;
}
.app-cl-product-image {
width: 64px;
}
</style>
<main>
<table>
    <caption>Product List</caption>
    <colgroup></colgroup>
    <thead>
        <th>No.</th>
        <th>Image</th>
        <th>Code</th>
        <th>Category</th>
        <th>Name</th>
    </thead>
    <tbody>
        @foreach ($products as $product)
         <tr>
            <th>{{$loop -> iteration}}</th>
        <td>
        <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
         alt="Picture of {{ $product['name'] }}"
         class="app-cl-product-image">
        </td>
           <td>
    <a href="{{ route('products.view', ['product' => $product['code']]) }}">
        <em>{{$product['code']}}</em>
    </a>
</td>
            <td>{{$product['catCode']}}</td>
            <td>{{$product['name']}}</td>
         </tr>
        @endforeach
    </tbody>

</table>
</main>
@endsection