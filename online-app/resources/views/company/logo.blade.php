@extends('layouts.sidebar')

@section('content')

<div class="container mt-4 text-center">

    <h3>{{ $company->name }} Logo</h3>

    <div class="card p-4 shadow mt-3">

        @if($company->logo)
            <img src="{{ Storage::url($company->logo) }}" style="max-width:300px;">
        @else
            <p>No Logo Available</p>
        @endif

    </div>

    <a href="{{ route('company.index') }}" class="btn btn-secondary mt-3">
        Back
    </a>

</div>

@endsection