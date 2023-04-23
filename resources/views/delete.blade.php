

@extends("maket.skelet")
@section("content")
@section("title")
delete task
@endsection

<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Warning!</h4>
                <div class="card-content">
                    <div class="alert alert-success">
                      <h4 class="alert-heading">Delete task.</h4>
                      <p>Siz ushbu taskni haqiqattan ham o'chirishni istaysizmi?</p>
                      <hr>
                      <p class="mb-0" >
                        <button type="button" class="btn btn-warning m-b-10 m-l-5">Yo'q</button>
                        <button type="button" class="btn btn-success m-b-10 m-l-5">Ha</button>

                      </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
