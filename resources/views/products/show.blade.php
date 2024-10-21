@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">{{ $product->name }}</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit Product</a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
            </div>
        </div>
    </div>
@endsection

