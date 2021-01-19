@extends('ig_projects.layout')

@section('content')
    <div class="content mt-3">
        <form action="{{ route('ig_projects.store') }}" method="post" class="form-horizontal">
            @csrf

            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        <div class="card-header">
                            <strong>Create Project</strong>
                        </div>
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="title" class=" form-control-label">Title</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" id="title" name="title"
                                                                    placeholder="Enter project title..."
                                                                    class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="description"
                                                                 class=" form-control-label">Description</label>
                                </div>
                                <div class="col-12 col-md-9"><textarea name="description" id="description"
                                                                       rows="3"
                                                                       placeholder="Enter project description..."
                                                                       class="form-control" ></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="start" class=" form-control-label">Start
                                        at</label></div>
                                <div class="col-12 col-md-9"><input type="datetime-local" id="start"
                                                                    name="start"
                                                                    placeholder="Enter project start time..."
                                                                    class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="end" class=" form-control-label">End at</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="datetime-local" id="end"
                                                                    name="end"
                                                                    placeholder="Enter project end time..."
                                                                    class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="link" class=" form-control-label">Link</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="link"
                                                                    name="link"
                                                                    placeholder="Enter the link..."
                                                                    class="form-control"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm" style="background-color: #6b9478">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                        </div>
                    </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </form>
    </div><!-- /#right-panel -->
@endsection
