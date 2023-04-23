@extends("maket.skelet")
@section("content")
@section("title")
edit
@endsection
<div class="row">
    <div class="col-lg-6">
        <div class="card">
           <h2>Edit data!</h2>
            <div class="card-body">
                <div class="input-states">
                    <form class="form-horizontal">
                        <div class="form-group has-warning">
                            <div class="row">
                                <label class="col-sm-3 control-label">Edit task! </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <div class="row">
                                <label class="col-sm-3 control-label">Edit deadline</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success btn-flat m-b-10 m-l-5">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection