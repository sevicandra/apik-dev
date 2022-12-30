@extends('layout.main')
@section('content')
<div class="col-md-6">
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="fileupload" class="form-label">Email address</label>
            <input type="file" class="form-control" id="fileupload" aria-describedby="fileuploadhelp" name='file'>
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection