@extends('layouts.admin')

@section('content')

<div class="page-container">

    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-17 mb-0">Gallery</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="card-title mb-0 flex-grow-1">Upload Gallery Items</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#GalleryModal">
                        Add Items
                    </button>
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible d-flex align-items-center border-2 border border-success" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <div class="lh-1">{{ session('success') }}</div>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Preview</th>
                                    <th>Type</th>
                                    <th>Date Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($galleries as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title ?? 'N/A' }}</td>
                                    <td>
                                        @if($item->type === 'image')
                                            <img src="{{ asset('storage/' . $item->path) }}" style="width:100px; height:auto;">
                                        @else
                                            <video width="150" controls>
                                                <source src="{{ asset('storage/' . $item->path) }}" type="video/mp4">
                                            </video>
                                        @endif
                                    </td>
                                    <td>{{ ucfirst($item->type) }}</td>
                                    <td>{{ $item->created_at->format('d M Y') }}</td>
                                    <td class="text-muted">
                                        <!-- Edit button -->
                                        <a href="#" class="link-reset fs-20 p-1" data-bs-toggle="modal" data-bs-target="#EditingModal-{{ $item->id }}">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <!-- Delete button -->
                                        <a href="#" class="link-reset fs-20 p-1" data-bs-toggle="modal" data-bs-target="#DeleteModal-{{ $item->id }}">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="EditingModal-{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Gallery Item</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('galleries.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" name="title" class="form-control" value="{{ $item->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea name="description" class="form-control">{{ $item->description }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Replace File</label>
                                                        <input type="file" name="files[]" class="form-control" multiple>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="DeleteModal-{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content modal-filled bg-danger">
                                            <div class="modal-body text-center p-4">
                                                <i class="ti ti-circle-x h1" data-bs-dismiss="modal"></i>
                                                <h4 class="mt-2">Are you sure you want to delete this item?</h4>
                                                <form action="{{ route('galleries.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-light my-2">Yes, Delete</button>
                                                </form>
                                            </div>
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

    <!-- Add Gallery Modal -->
    <div class="modal fade" id="GalleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Gallery Items</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title (optional)</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description (optional)</label>
                            <textarea name="description" class="form-control" id="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="files" class="form-label">Upload Images/Videos</label>
                            <input type="file" name="files[]" class="form-control" id="files" multiple>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
