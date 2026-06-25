@extends('layouts.sidebar')

@section('content')



    <!-- Statistics Cards -->
    <div class="row mt-4">

        <div class="col-md-3 mb-3">
            <div class="card shadow border-0 bg-primary text-white">
                <div class="card-body">
                    <h5>Total Jobs</h5>
                    <h2>job {{$jobs }}</h2>
                    <i class="bi bi-briefcase fs-1"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow border-0 bg-success text-white">
                <div class="card-body">
                    <h5>Total Users</h5>
                    <h2>user{{$users}}</h2>
                    <i class="bi bi-people fs-1"></i>
                </div>
            </div>
        </div>
 <div class="col-md-3 mb-3">
            <div class="card shadow border-0 bg-info text-white">
                <div class="card-body">
                    
                    <h2>category{{$categories}}</h2>
                    <i class="bi bi-tags fs-1"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow border-0 bg-warning text-dark">
                <div class="card-body">
                    <h5>Applications{{$application}}</h5>
                    <h2></h2>
                    <i class="bi bi-file-earmark-text fs-1"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card shadow border-0 bg-danger text-white">
                <div class="card-body">
                    <h5>Companies{{$companies}}</h5>
                    <h2></h2>
                    <i class="bi bi-building fs-1"></i>
                </div>
            </div>
        </div>

    </div>

    <!-- Recent Jobs -->
    <div class="card shadow mt-4">
        <div class="card-header bg-dark text-white">
            Recent Job Posts
        </div>

        <div class="card-body">
            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>Location</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Laravel Developer</td>
                        <td>ABC Tech</td>
                        <td>Kathmandu</td>
                        <td>
                            <span class="badge bg-success">
                                Active
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>UI/UX Designer</td>
                        <td>XYZ Pvt Ltd</td>
                        <td>Pokhara</td>
                        <td>
                            <span class="badge bg-warning">
                                Pending
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>React Developer</td>
                        <td>Code Nepal</td>
                        <td>Butwal</td>
                        <td>
                            <span class="badge bg-danger">
                                Closed
                            </span>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

</div>

@endsection