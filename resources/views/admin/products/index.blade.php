@extends('admin.layouts.dashboard')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h4 class="m-0">Products</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
        </ol>
        </div><!-- /.col -->
    </div>
@endsection


@section('content')

@endsection

@section('footer_script')

@endsection
