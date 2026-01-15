@extends('layouts.admin')

@section('content')

<div class="page-container">

    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-17 mb-0">Slideshows Table</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="card-title mb-0 flex-grow-1">List of Slideshows</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CategoryModal">
                        Add Slideshow
                    </button>
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible d-flex align-items-center border-2 border border-success" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <i class="ti ti-progress-check fs-20 me-1"></i>
                        <div class="lh-1"><strong>Success - </strong>{{ session('success') }}</div>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Date Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($slideshows as $slideshow)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $slideshow->name }}</td>
                                        <td>{{ $slideshow->description }}</td>
                                        <td>
                                            @if($slideshow->image)
                                                <img src="{{ asset('storage/'.$slideshow->image) }}" alt="{{ $slideshow->name }}" style="width: 100px; height: auto;">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $slideshow->created_at->format('d M Y') }}</td>
                                        <td class="text-muted">
                                            <a href="#" class="link-reset fs-20 p-1" data-bs-toggle="modal" data-bs-target="#EditingModal-{{ $slideshow->id }}"> 
                                                <i class="ti ti-pencil"></i>
                                            </a>
                                            <a href="#" class="link-reset fs-20 p-1" data-bs-toggle="modal" data-bs-target="#DeleteModal-{{ $slideshow->id }}"> 
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="EditingModal-{{ $slideshow->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Slideshow</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('slideshow.update', $slideshow->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="mb-3">
                                                            <label for="name-{{ $slideshow->id }}" class="form-label">Slideshow Name</label>
                                                            <input type="text" name="name" class="form-control" id="name-{{ $slideshow->id }}" value="{{ $slideshow->name }}">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="description-{{ $slideshow->id }}" class="form-label">Description</label>
                                                            <textarea name="description" class="form-control" id="description-{{ $slideshow->id }}" rows="3">{{ $slideshow->description }}</textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="image-{{ $slideshow->id }}" class="form-label">Upload Image</label>
                                                            <div class="mb-2">
                                                                @if($slideshow->image)
                                                                    <img src="{{ asset('storage/'.$slideshow->image) }}" alt="Preview" style="max-width: 100%; height: auto; border: 1px solid #ddd; padding: 5px; border-radius: 5px;">
                                                                @endif
                                                            </div>
                                                            <input type="file" name="image" class="form-control" id="image-{{ $slideshow->id }}">
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
                                    <div class="modal fade" id="DeleteModal-{{ $slideshow->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content modal-filled bg-danger">
                                                <div class="modal-body p-4 text-center">
                                                    <i class="ti ti-circle-x h1" data-bs-dismiss="modal"></i>
                                                    <h4 class="mt-2">Are you sure you want to delete this slideshow?</h4>
                                                    <form action="{{ route('slideshow.destroy', $slideshow->id) }}" method="POST">
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

    <!-- Add Slideshow Modal -->
    <div class="modal fade" id="CategoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Slideshow</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('slideshow.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Slideshow Name</label>
                            <input type="text" name="name" class="form-control" id="categoryName" placeholder="Enter slideshow name">
                        </div>
                        <div class="mb-3">
                            <label for="categoryDescription" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="categoryDescription" rows="3" placeholder="Enter slideshow description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="categoryImage" class="form-label">Upload Image</label>
                            <div class="mb-2">
                                <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto; border: 1px solid #ddd; padding: 5px; border-radius: 5px;">
                            </div>
                            <input type="file" name="image" class="form-control" id="categoryImage" accept="image/*" onchange="previewImage(event)">
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

</div>

<script>
function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('imagePreview');
    if(input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

@endsection
