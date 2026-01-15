@extends('layouts.admin')

@section('content')

<div class="page-container">
    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-17 mb-0">Menus</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="card-title mb-0 flex-grow-1">List of Menus</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MenuModal">
                        Add Menu
                    </button>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Date Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menus as $menu)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $menu->name }}</td>
                                        <td>{{ $menu->category->name }}</td>
                                        <td>{{ Str::limit($menu->description, 50) }}</td>
                                        <td>${{ $menu->price }}</td>
                                        <td>{{ $menu->created_at->format('d M Y') }}</td>
                                        <td>
                                            <!-- Edit -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#EditMenuModal-{{ $menu->id }}">
                                                <i class="ti ti-pencil"></i>
                                            </a>
                                            <!-- Delete -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#DeleteMenuModal-{{ $menu->id }}">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="EditMenuModal-{{ $menu->id }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5>Edit Menu</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('menus.update', $menu->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label>Name</label>
                                                            <input type="text" name="name" class="form-control" value="{{ $menu->name }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Category</label>
                                                            <select name="category_id" class="form-control">
                                                                @foreach($categories as $category)
                                                                    <option value="{{ $category->id }}" {{ $menu->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Description</label>
                                                            <textarea name="description" class="form-control">{{ $menu->description }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Price</label>
                                                            <input type="number" step="0.01" name="price" class="form-control" value="{{ $menu->price }}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="DeleteMenuModal-{{ $menu->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content bg-danger text-center p-3">
                                                <h5>Are you sure?</h5>
                                                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-light mt-2">Yes, Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Menu Modal -->
    <div class="modal fade" id="MenuModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('menus.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Price</label>
                            <input type="number" step="0.01" name="price" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
