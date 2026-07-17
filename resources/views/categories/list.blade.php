@extends('layouts.main', ['title' => 'Categories'])

@section('content')
<main id="app-main-content">
    <caption>Categories List</caption>
    <table class="app-cmp-data-list">
    <thead>
        <tr>
            <th>No.</th>
            <th>Code</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td> <!-- ใช้ $loop->iteration เพื่อนับลำดับเริ่มจาก 1[cite: 2] -->
            <td>
                <a class="app-cl-category" href="{{ route('categories.view', ['category' => $category['code']]) }}">
                    {{ $category['code'] }}
                </a>
            </td>
            <td class="app-cl-category">{{ $category['name'] }}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</main>


@endsection