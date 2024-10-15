@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p><strong>Amount:</strong> ${{ $product->amount }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 300px;">
        @endif
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
    </div>
@endsection
