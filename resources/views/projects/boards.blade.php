@extends ('layouts.app')
@section('title', 'Boards')
@section('content')
    <div class="btn-group" role="group" aria-label="Basic example"><!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark mb-5" data-toggle="modal" data-target="#exampleModalCenter">
            New Board
        </button>
        <a class="btn btn-outline-dark mb-5" data-toggle="modal" href="#betaModal">Invite to a ptoject</a>
    </div>
    <div class="modal fade" id="betaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send invite to partner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">New Board</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Board Name</label>
                            <input type="text" class="form-control" id="title" aria-describedby="emailHelp"
                                   placeholder="Board name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="10" id="description"
                                      placeholder="Enter board description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-columns">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Board</div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <a href="{{ route('boards-detail') }}" class="btn btn-dark">Select a board</a>
                <a class="btn btn-dark" href="/edit_board">Edit</a>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Board</div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <a href="{{ route('boards-detail') }}" class="btn btn-dark">Select a board</a>
                <a class="btn btn-dark" href="/edit_board">Edit</a>
            </div>
        </div>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Board</div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <a href="{{ route('boards-detail') }}" class="btn btn-dark">Select a board</a>
                <a class="btn btn-dark" href="/edit_board">Edit</a>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Board</div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <a href="{{ route('boards-detail') }}" class="btn btn-dark">Select a board</a>
                <a class="btn btn-dark" href="/edit_board">Edit</a>
            </div>
        </div>
        <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Board</div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <a href="{{ route('boards-detail') }}" class="btn btn-dark">Select a board</a>
                <a class="btn btn-dark" href="/edit_board">Edit</a>
            </div>
        </div>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Board</div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <a href="{{ route('boards-detail') }}" class="btn btn-dark">Select a board</a>
                <a class="btn btn-dark" href="/edit_board">Edit</a>
            </div>
        </div>
        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Board</div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <a href="{{ route('boards-detail') }}" class="btn btn-dark">Select a board</a>
                <a class="btn btn-dark" href="/edit_board">Edit</a>
            </div>
        </div>
    </div>
    <button onclick="history.back()" class="btn btn-outline-dark">Back</button>

@endsection