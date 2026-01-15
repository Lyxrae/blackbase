@extends('layouts.admin')

@section('content')

<div class="page-container">

    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-17 mb-0">Services Table</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="card-title mb-0 flex-grow-1">List of Services</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ServiceModal">
                        Add Service
                    </button>
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible d-flex align-items-center border-2 border border-success" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <i class="ti ti-progress-check fs-20 me-1"></i>
                        <div><strong>Success - </strong>{{ session('success') }}</div>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Message</th>
                                    <th>Main Image</th>
                                    <th>Gallery</th>
                                    <th>Date Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ Str::limit($service->description, 40) }}</td>
                                        <td>{{ Str::limit($service->message, 40) }}</td>

                                        <!-- Main Image -->
                                        <td>
                                            @if($service->image)
                                                <img src="{{ asset('storage/'.$service->image) }}"
                                                     style="width: 100px; height:auto;">
                                            @else N/A @endif
                                        </td>

                                        <!-- Gallery -->
                                        <td>
                                            @if($service->gallery)
                                                @foreach($service->gallery as $img)
                                                    <img src="{{ asset('storage/'.$img) }}" 
                                                         style="width: 50px; height:auto; margin:2px;">
                                                @endforeach
                                            @else N/A @endif
                                        </td>

                                        <td>{{ $service->created_at->format('d M Y') }}</td>

                                        <td class="text-muted">
                                            <a href="#" class="link-reset fs-20 p-1" 
                                               data-bs-toggle="modal" data-bs-target="#EditModal-{{ $service->id }}">
                                                <i class="ti ti-pencil"></i>
                                            </a>
                                            <a href="#" class="link-reset fs-20 p-1" 
                                               data-bs-toggle="modal" data-bs-target="#DeleteModal-{{ $service->id }}">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Service Modal -->
                                    <div class="modal fade" id="EditModal-{{ $service->id }}" data-bs-backdrop="static" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Service</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{ route('services.update', $service->id) }}" 
                                                          method="POST" enctype="multipart/form-data">

                                                        @csrf
                                                        @method('PUT')

                                                        <div class="mb-3">
                                                            <label>Name</label>
                                                            <input type="text" name="name" class="form-control" 
                                                                   value="{{ $service->name }}">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Description</label>
                                                            <textarea name="description" rows="3" class="form-control">{{ $service->description }}</textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Message</label>
                                                            <textarea name="message" rows="3" class="form-control">{{ $service->message }}</textarea>
                                                        </div>

                                                        <!-- Main Image -->
                                                        <div class="mb-3">
                                                            <label>Main Image</label>
                                                            <div class="mb-2">
                                                                @if($service->image)
                                                                    <img src="{{ asset('storage/'.$service->image) }}" 
                                                                         style="max-width:50%; border:1px solid #ddd;">
                                                                @endif
                                                            </div>
                                                            <input type="file" name="image" class="form-control">
                                                        </div>

                                                        <!-- Gallery -->
                                                        <div class="mb-3">
                                                            <label>Gallery Images</label>
                                                            <div class="d-flex flex-wrap mb-2">
                                                                @if($service->gallery)
                                                                    @foreach($service->gallery as $img)
                                                                        <img src="{{ asset('storage/'.$img) }}"
                                                                             style="width:60px; margin:3px; border:1px solid #ddd;">
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                            <input type="file" name="gallery[]" class="form-control" multiple>
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
                                    <div class="modal fade" id="DeleteModal-{{ $service->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content modal-filled bg-danger">
                                                <div class="modal-body p-4 text-center">
                                                    <h4 class="mt-2">Delete this service?</h4>
                                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-light my-2">Yes, Delete</button>
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

    <!-- Add Service Modal -->
    <div class="modal fade" id="ServiceModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Add Service</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Message</label>
                            <textarea name="message" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Main Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*" onchange="previewMain(event)">
                            <img id="mainPreview" style="display:none; max-width:50%; border:1px solid #ddd; margin-top:5px;">
                        </div>

                        <div class="mb-3">
                            <label>Gallery Images</label>
                            <input type="file" name="gallery[]" class="form-control" multiple accept="image/*" onchange="previewGallery(event)">
                            <div id="galleryPreview" class="d-flex flex-wrap mt-2"></div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</div>

<script>
function previewMain(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('mainPreview');
    const reader = new FileReader();
    reader.onload = e => {
        preview.src = e.target.result;
        preview.style.display = 'block';
    };
    reader.readAsDataURL(file);
}

function previewGallery(event) {
    const files = event.target.files;
    const container = document.getElementById('galleryPreview');
    container.innerHTML = "";
    [...files].forEach(file => {
        const reader = new FileReader();
        reader.onload = e => {
            let img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = "70px";
            img.style.margin = "3px";
            img.style.border = "1px solid #ddd";
            container.appendChild(img);
        };
        reader.readAsDataURL(file);
    });
}
</script>

@endsection
