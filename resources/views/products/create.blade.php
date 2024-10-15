@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Product</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" step="0.01" name="amount" id="amount" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div><br>
            <div class="form-group">
                <label for="image">Image (optional)</label>
                <input type="file" name="image" id="image" class="form-control">
            </div><br>
            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
@endsection
