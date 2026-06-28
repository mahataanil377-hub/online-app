@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">
                <i class="bi bi-envelope-fill"></i> Message Details
            </h4>

            <a href="{{ route('messages.index') }}" class="btn btn-light btn-sm">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="180">Name</th>
                    <td>{{ $message->name }}</td>
                </tr>

                <tr>
                    <th>Phone</th>
                    <td>{{ $message->phone }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $message->email }}</td>
                </tr>

                <tr>
                    <th>Message</th>
                    <td>{{ $message->message }}</td>
                </tr>

                <tr>
                    <th>Received At</th>
                    <td>{{ $message->created_at->format('d M Y h:i A') }}</td>
                </tr>

            </table>

            <div class="mt-3">

                <a href="{{ route('messages.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back
                </a>

                <form action="{{ route('messages.destroy',$message->id) }}"
                      method="POST"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger"
                            onclick="return confirm('Delete this message?')">
                        <i class="bi bi-trash"></i> Delete
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection