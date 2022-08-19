

<div>
{{-- @extends('layouts.admin') --}}

@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-md-12">

            @if(session('message'))x
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">

                <div class="card-header">

                    <h3>Brands List</h3>
                    <a class="btn btn-primary" btn-sm data-bs-toggle="modal" data-bs-target="#addBrandModal" float-end" href="#">Add Brands</a>

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
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" wire:click=" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>
</div>
</div>

</div>
</div>
@include('livewire.admin.brand.modal-form')
@push('script')

<script>
    window.addEventListener('close-modal', event=>{
        $('#addBrandModal').modal('hide');
    });
</script>
@endpush
@endsection
