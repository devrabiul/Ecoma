@extends('admin.layouts.dashboard')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h4 class="m-0">Banners</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Banners</li>
        </ol>
        </div><!-- /.col -->
    </div>
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{route('admin.banners.insert')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="category_id">Category Promotion</label>
                            <select class="form-control form-control-sm" name="category_id" id="category_id">
                                <option selected>-- Select Category</option>
                                @foreach ($all_categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="thumbnail">Thumbnail</label>
                            <input type="file" class="form-control-file" name="thumbnail" id="thumbnail">
                            @error('thumbnail')
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
                                <th>Promotion</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_banner as $banner)

                            <tr>
                                <td>1</td>
                                <td>
                                    <img class="img-fluid" src="{{asset('uploads/banners')}}/{{$banner->thumbnail}}" alt="{{$banner->thumbnail}}" style="width: 50px;">
                                </td>
                                <td>{{$banner->rel_to_category->category_name}}</td>
                                <td>
                                    @if ($banner->status == 0)
                                        <a href="{{route('admin.banners.status', $banner->id)}}" class="text-danger">
                                            <i class="fas fa-toggle-off fa-2x"></i>
                                        </a>
                                    @else
                                        <a href="{{route('admin.banners.status', $banner->id)}}" class="text-success">
                                            <i class="fas fa-toggle-on fa-2x"></i>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <a class="text-info m-2" href="#"><i class="fas fa-edit"></i></a>
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

<script>



</script>

@endsection
