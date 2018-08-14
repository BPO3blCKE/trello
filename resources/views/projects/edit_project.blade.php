@extends ('layouts.app')
@section('title', 'Edit Project')
@section('content')
    <div class="row mb-3">
        <div class="col-md-8 offset-md-2">
            <button onclick="history.back()" class="btn-dark btn btn-sm">Back</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp"
                           placeholder="Enter project name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="10" id="description"
                              placeholder="Enter project description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
@endsection