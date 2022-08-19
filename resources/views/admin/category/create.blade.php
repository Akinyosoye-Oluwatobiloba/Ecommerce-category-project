                @extends('layouts.admin')



                @section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h3>Add Category</h1>
                <a class="btn btn-primary btn-sm text-white float-end" href="{{route('category')}}">Back</a>


                    <div class="card-body">
                        <form action="{{route('category')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6 mb-3"></div>
                                <label >Name</label>
                                <input type="text" name="name" class="form-control">
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Slug</label>
                                <input type="text" name="slug" class="form-control">
                                @error('slug')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                            <label >Description</label>
                            <textarea  name="description" rows="3" class="form-control"></textarea>
                            @error('description')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                        <div class="col-md-6 mb-3">
                        <label >Status</label><br>
                        <input type="checkbox" name="status">

                    </div>
                     <div class="col-md-12">
                        <h4>SEO TAGS</h4>
                     </div>

                    <div class="col-md-6 mb-3">
                    <label >Meta Title</label>
                    <input type="text" name="meta_title" class="form-control">
                    @error('Meta Title')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                    <div class="col-md-12 mb-3">
                    <label >Meta Keyword</label>
                    <textarea  name="meta_keyword" rows="3" class="form-control"></textarea>
                    @error('Meta Keyword')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                    <label >Meta Description</label>
                    <textarea  name="meta_description" rows="3" class="form-control"></textarea>
                    @error('Meta Description')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-end">Save</button>
                            </div>
                        </form>
             </div>
          </div>
        </div>

     </div>
</div>

                @endsection
