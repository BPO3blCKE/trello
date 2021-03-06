@extends ('layouts.app')
@section('title', 'Boards detail')
@section('content')

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-outline-primary mb-5" data-toggle="modal"
                data-target="#exampleModalCenter">
            New Board
        </button>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="panel-group">
                <div class="col-md-3 panelspace">
                    <div class="panel panel-info">
                        <div class="panel-heading">Todo</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"><span class="glyphicon glyphicon-hand-right"></span> Todo
                                    Task 1 <span class="badge">12</span></li>
                                <li class="list-group-item"><span class="glyphicon glyphicon-hand-right"></span> Todo
                                    Task 2 <span class="badge">5</span></li>
                                <li class="list-group-item"><span class="glyphicon glyphicon-hand-right"></span> Todo
                                    Task 2 <span class="badge">3</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 panelspace">
                    <div class="panel panel-primary">
                        <div class="panel-heading">In Progress</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkb" name="checkbox[]" id="checkbox1"
                                               value="1"/>
                                        <label for="checkbox">
                                            List group item heading
                                        </label>
                                    </div>
                                    <div class="pull-right action-buttons">
                                        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkb" name="checkbox[]" id="checkbox2"
                                               value="2"/>
                                        <label for="checkbox2">
                                            List group item heading 1
                                        </label>
                                    </div>
                                    <div class="pull-right action-buttons">
                                        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkb" name="checkbox[]" id="checkbox3"
                                               value="3"/>
                                        <label for="checkbox3">
                                            List group item heading 2
                                        </label>
                                    </div>
                                    <div class="pull-right action-buttons">
                                        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkb" name="checkbox[]" id="checkbox4"
                                               value="4"/>
                                        <label for="checkbox4">
                                            List group item heading 3
                                        </label>
                                    </div>
                                    <div class="pull-right action-buttons">
                                        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkb" name="checkbox[]" id="checkbox5"
                                               value="50"/>
                                        <label for="checkbox5">
                                            List group item heading 4
                                        </label>
                                    </div>
                                    <div class="pull-right action-buttons">
                                        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 panelspace">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Overdue</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"><span class="glyphicon glyphicon-exclamation-sign"></span>
                                    New
                                </li>
                                <li class="list-group-item"><span class="glyphicon glyphicon-exclamation-sign"></span>
                                    Deleted
                                </li>
                                <li class="list-group-item"><span class="glyphicon glyphicon-exclamation-sign"></span>
                                    Warnings
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 panelspace">
                    <div class="panel panel-success">
                        <div class="panel-heading">Completed</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <label for="checkbox">
                                            List group item heading
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <label for="checkbox2">
                                            List group item heading 1
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <label for="checkbox3">
                                            List group item heading 2
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <label for="checkbox4">
                                            List group item heading 3
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="checkbox">
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <label for="checkbox5">
                                            List group item heading 4
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
        <!-- Modal -->
        <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close"
                                data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Add Task
                        </h4>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <label for="task_title">Task Title:</label>
                                <input type="text" class="form-control" placeholder="Enter task name" id="task_title"
                                       name="task_title">
                            </div>
                            <div class="form-group">
                                <label for="task_details">Task Details:</label>
                                <textarea class="form-control" placeholder="Enter task details" rows="5"
                                          id="task_details" name="task_details"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="due_date">Due Date:</label>
                                <input type="text" class="form-control" placeholder="dd/mm/yyyy" id="due_date"
                                       name="due_date">
                            </div>
                            <div class="form-group">
                                <label for="task_status">Task Status:</label>
                                <select class="form-control" id="task_status" name="task_status">
                                    <option value="Todo">Todo</option>
                                    <option value="In Progress">In Progress</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"
                                data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.container -->

    <button onclick="history.back()" class="btn btn-dark">Back</button>


@endsection