@extends("maket.skelet")

@section("content")

<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Hello, <span>Welcome Here</span></h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Form-Basic</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
<!-- /# row -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-title">
            <h4>ADD TASK</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="post" action="{{route('create')}}">
                    @csrf
                    <div class="form-group">
                        <p class="text-muted m-b-15 f-s-12">Input Task</p>
                        <input type="text" class="form-control input-default " placeholder="task" name="task">
                    </div>
                    <div class="form-group">
                        <p class="text-muted m-b-15 f-s-12">Deadline</p>
                        <input type="date" class="form-control input-flat" placeholder="Input Flat" name="deadline">
                    </div>
                    <div class="button-list">
                        <input type="submit" class="btn btn-primary btn-block m-b-10" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection