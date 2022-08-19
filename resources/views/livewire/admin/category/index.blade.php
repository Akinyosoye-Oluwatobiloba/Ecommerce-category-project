
<div>

@include('livewire.admin.brand.modal-form')



<div class="row">

    <div class="col-md-12">

        @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

    <div class="card">

          <div class="card-header">
    <h3>Category</h1>
    <a class="btn btn-primary float-end" href="{{route('category.create')}}">Add Category</a>

    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->image }}</td>
                    <td>{{ $category->status =='1'}}</td>
                    <td>
                        <a href="{{ url('/admin/category/'.$category->id.'/edit') }}" class="btn btn-success">Edit</a>
                        <a href="#" wire:click="deleteCategory({{ $category->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>

            {{ $categories->links() }}

        </div>

    </div>
    </div>

        </div>
    </div>
</div>

@push('script')

<script>
    window.addEventListener('close-modal', event=>{
        $('#deleteModal').modal('hide');
    });
</script>
@endpush
</div>
