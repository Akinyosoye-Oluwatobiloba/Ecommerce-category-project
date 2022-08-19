@extends('layouts.admin')



@section('content')
<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-header">
<h3>Edit Category
<a class="btn btn-primary btn-sm text-white float-end" href="{{route('category')}}">Back</a>
</h3>

    <div class="card-body">
        <form action="{{url('/admin/category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="col-md-6 mb-3"></div>
                <label >name</label>    
                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label >slug</label>
                <input type="text" name="slug" value="{{ $category->slug }}" class="form-control">
                @error('slug')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-12 mb-3">
            <label >description</label>
            <textarea  name="description" rows="3"  class="form-control">{{ $category->description }}</textarea>
            @error('description')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <img src="{{ asset('/uploads/category/.'.$category->image) }}" width="60px" height="60px">
        @error('image')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

        <div class="col-md-6 mb-3">
        <label >status</label><br>
        <input type="checkbox" name="status" {{ $category->status == 1? 'checked': 'not checked' }} >

    </div>
     <div class="col-md-12">
        <h4>SEO TAGS</h4>
     </div>

    <div class="col-md-6 mb-3">
    <label >Meta Title</label>
    <input type="text" name="meta_title" class="form-control" value = "{{ $category->meta_title }}" >
    @error('Meta Title')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

    <div class="col-md-12 mb-3">
    <label >Meta Keyword</label>
    <textarea  name="meta_keyword" rows="3" class="form-control"  >{{ $category->description }}</textarea>
    @error('Meta Keyword')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>

    <div class="col-md-12 mb-3">
    <label >Meta Description</label>
    <textarea  name="meta_description" rows="3" class="form-control" >{{ $category->description }}</textarea>
    @error('Meta Description')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    <div class="col-md-12 mb-3">
        <button type="submit" class="btn btn-primary float-end">Update</button>
            </div>
        </form>
</div>
</div>
</div>

</div>
</div>

@endsection
