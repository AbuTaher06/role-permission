@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Details') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>name:</h5>
                            <p>{{ $product->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Details:</h5>
                            <p>{{ $product->details }}</p>
                        </div>
                    </div>

                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
