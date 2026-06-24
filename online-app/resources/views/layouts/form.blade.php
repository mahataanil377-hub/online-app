<form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" class="form-control" placeholder="Job Title">

    <input type="file" name="image" class="form-control mt-2">

    <button class="btn btn-primary mt-3">Save</button>
</form>