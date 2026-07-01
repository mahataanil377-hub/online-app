@extends('layouts.sidebar')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')

<div class="container-fluid mt-4">

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">
                <i class="bi bi-chat-left-text-fill"></i> Message List
            </h4>

            <a href="#" class="btn btn-light btn-sm">
                + New Message
            </a>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th width="140">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($messages as $message)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $message->name }}</td>

                            <td>{{ $message->phone }}</td>

                            <td>{{ $message->email }}</td>

                            <td>{{ Str::limit($message->message, 50) }}</td>

                            <td>{{ $message->created_at->format('d M Y') }}</td>

                            <td>

                                <a href="{{ route('messages.show',$message->id) }}"
                                   class="btn btn-info btn-sm">
                                    View
                                </a>

                                <form action="{{ route('messages.destroy',$message->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete this message?')">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="text-center">
                                No Messages Found
                            </td>
                        </tr>

                    @endforelse

                    </tbody>

                </table>
            {{ $messages->links() }}
            </div>

        </div>

    </div>

</div>

@endsection