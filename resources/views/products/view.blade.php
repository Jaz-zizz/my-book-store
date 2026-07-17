@extends('layouts.main', [
    'title' => $product['name'],
])

@section('content')

<main id="app-main-content">
    <div>
       <img src="{{ asset("images/products/{$product['code']}.jpg") }}"
         alt="Picture of {{ $product['name'] }}"
         class="app-cl-product-image">
    </div>
    
    <dl class="app-cmp-data-detail">
        <dt>Code</dt>
        <dd class="app-cl-product"><em>{{$product['code']}}</em></dd>
        
        <dt>Category</dt>
        <dd>
            @php
                // ดึงชื่อหมวดหมู่จริง (เช่น PHP, JavaScript) มาจากคลาส CategoryController
                $catName = App\Http\Controllers\CategoryController::CATEGORIES[$product['catCode']]['name'] ?? $product['catCode'];
            @endphp
            <a class="app-cl-category" href="{{ route('categories.view', ['category' => $product['catCode']]) }}">
                <em>{{ $catName }}</em>
            </a>
        </dd>
        
        <dt>Name</dt>
        <dd><em>{{$product['name']}}</em></dd>
    </dl> <pre>
{{ $product['description'] }}
</pre>

</main>
@endsection