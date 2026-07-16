@extends('layouts.main')

@section('content')
<h2>Categories List</h2>
<table>
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
                <a href="{{ route('categories.view', ['category' => $category['code']]) }}">
                    {{ $category['code'] }}
                </a>
            </td>
            <td>{{ $category['name'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection