@extends('bands.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add bands </h2>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-success btn-sm" title="Add new Bands">
                            Add new
                        </a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>genre</th>         
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection