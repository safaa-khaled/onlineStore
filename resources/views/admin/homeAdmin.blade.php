@extends('admin.layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Home</div>

                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-3"> Manage Orders</div>
                        <div class="col-md-3"> <a href="{{route('order.all')}}" class="btn btn-info">Orders</a></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"> Manage Products</div>
                        <div class="col-md-3"> <a href="{{route('product.all')}}" class="btn btn-info">Products</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection