@extends('admin.layouts.dashboard')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h4 class="m-0">Category</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
        </ol>
        </div><!-- /.col -->
    </div>
@endsection


@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{route('admin.category.insert')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="category_name">Category Name</label>
                            <input type="text" class="form-control form-control-sm" name="category_name" id="category_name" placeholder="Category Name">
                            @error('category_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="category_image">Thumbnail</label>
                            <input type="file" class="form-control-file" name="category_image" id="category_image">
                            @error('category_image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-sm btn-success">Insert</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Thumbnail</th>
                                <th>Name</th>
                                <th>Create At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_categories as $category)

                            <tr>
                                <td>1</td>
                                <td>
                                    <img class="img-fluid" src="{{asset('uploads/category')}}/{{$category->category_image}}" alt="{{$category->category_image}}" style="width: 40px;border-radius:50%">
                                </td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->created_at->diffForHumans()}}</td>
                                <td>
                                    <a class="text-info m-2" href="{{url('/admin/category')}}/{{$category->category_slug}}/edit"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger m-2" href="#"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer_script')

@endsection
