@extends('layouts.admin')

@section('content')

<div class="page-container">

    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-17 mb-0">Facilities</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="card-title mb-0 flex-grow-1">List of Facilities</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FacilityModal">
                        Add Facility
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
                                    <th>Name</th>
                                    <th>Main Image</th>
                                    <th>Date Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($facilities as $facility)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $facility->name }}</td>
                                        <td>
                                            @if($facility->image)
                                                <img src="{{ asset('storage/'.$facility->image) }}" alt="{{ $facility->name }}" style="width: 100px; height: auto;">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $facility->created_at->format('d M Y') }}</td>
                                        <td class="text-muted">
                                            <a href="#" class="link-reset fs-20 p-1" data-bs-toggle="modal" data-bs-target="#EditingModal-{{ $facility->id }}"> 
                                                <i class="ti ti-pencil"></i>
                                            </a>
                                            <a href="#" class="link-reset fs-20 p-1" data-bs-toggle="modal" data-bs-target="#DeleteModal-{{ $facility->id }}"> 
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="EditingModal-{{ $facility->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Facility</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('ourfacility.update', $facility->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="mb-3">
                                                            <label for="name-{{ $facility->id }}" class="form-label">Facility Name</label>
                                                            <input type="text" name="name" class="form-control" id="name-{{ $facility->id }}" value="{{ $facility->name }}">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="description-{{ $facility->id }}" class="form-label">Description</label>
                                                            <textarea name="description" class="form-control" id="description-{{ $facility->id }}" rows="3">{{ $facility->description }}</textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="message-{{ $facility->id }}" class="form-label">Message</label>
                                                            <textarea name="message" class="form-control" id="message-{{ $facility->id }}" rows="3">{{ $facility->message }}</textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="image-{{ $facility->id }}" class="form-label">Main Image</label>
                                                            <div class="mb-2">
                                                                @if($facility->image)
                                                                    <img src="{{ asset('storage/'.$facility->image) }}" alt="Preview" style="max-width: 100%; height: auto; border: 1px solid #ddd; padding: 5px; border-radius: 5px;">
                                                                @endif
                                                            </div>
                                                            <input type="file" name="image" class="form-control" id="image-{{ $facility->id }}">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="gallery-{{ $facility->id }}" class="form-label">Gallery Images</label>
                                                            <input type="file" name="gallery[]" class="form-control" id="gallery-{{ $facility->id }}" multiple>
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
                                    <div class="modal fade" id="DeleteModal-{{ $facility->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content modal-filled bg-danger">
                                                <div class="modal-body p-4 text-center">
                                                    <i class="ti ti-circle-x h1" data-bs-dismiss="modal"></i>
                                                    <h4 class="mt-2">Are you sure you want to delete this facility?</h4>
                                                    <form action="{{ route('ourfacility.destroy', $facility->id) }}" method="POST">
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

    <!-- Add Facility Modal -->
    <div class="modal fade" id="FacilityModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Facility</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ourfacility.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="facilityName" class="form-label">Facility Name</label>
                            <input type="text" name="name" class="form-control" id="facilityName" placeholder="Enter facility name">
                        </div>

                        <div class="mb-3">
                            <label for="facilityDescription" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="facilityDescription" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="facilityMessage" class="form-label">Message</label>
                            <textarea name="message" class="form-control" id="facilityMessage" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="facilityImage" class="form-label">Main Image</label>
                            <input type="file" name="image" class="form-control" id="facilityImage">
                        </div>

                        <div class="mb-3">
                            <label for="facilityGallery" class="form-label">Gallery Images</label>
                            <input type="file" name="gallery[]" class="form-control" id="facilityGallery" multiple>
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

@endsection
