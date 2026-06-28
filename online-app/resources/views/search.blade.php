@extends('layouts.sidebar')

@section('content')

<div class="container mt-4">

    <h3>Search Results</h3>

    @if($jobs->count() > 0)

        @foreach($jobs as $job)

            <div class="card mb-3">
                <div class="card-body">
                    <h5>{{ $job->title }}</h5>

                    @if(isset($job->location))
                        <p>{{ $job->location }}</p>
                    @endif
                </div>
            </div>

        @endforeach

    @else

        <div class="alert alert-warning">
            No jobs found.
        </div>

    @endif

</div>

@endsection