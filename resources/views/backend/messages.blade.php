@extends('layouts.admin')

@section('content')

<div class="page-container">

    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-17 mb-0">Messages</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Date Sent</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($messages as $msg)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $msg->name }}</td>
                                        <td>{{ $msg->email }}</td>
                                        <td>{{ $msg->phone ?? 'N/A' }}</td>
                                        <td>{{ $msg->message }}</td>
                                        <td>{{ $msg->created_at->format('d M Y H:i') }}</td>
                                        <td class="text-muted">
                                            <a href="#" class="link-reset fs-20 p-1" data-bs-toggle="modal" data-bs-target="#DeleteModal-{{ $msg->id }}">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="DeleteModal-{{ $msg->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content modal-filled bg-danger">
                                                <div class="modal-body p-4 text-center">
                                                    <i class="ti ti-circle-x h1" data-bs-dismiss="modal"></i>
                                                    <h4 class="mt-2">Are you sure you want to delete this message?</h4>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-light my-2">Yes, Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No messages yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection
