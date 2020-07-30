@extends('welcome');
@section('content')
<div class="container">

            <form class="form" method="post" action="/api/country/create">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="iso">ISO</label>
                            <input type="text" class="form-control" name="iso" />
                        </div>
                        <div class="col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="dname">D Name</label>
                            <input type="text" class="form-control" name="dname" />
                        </div>
                        <div class="col-md-6">
                            <label for="iso3">ISO 3</label>
                            <input type="text" class="form-control" name="iso3" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="position">Position</label>
                            <input type="number" class="form-control" name="position" />
                        </div>
                        <div class="col-md-6">
                            <label for="numcode">Num Code</label>
                            <input type="number" class="form-control" name="numcode" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="phonecode">Phone Code</label>
                            <input type="number" class="form-control" name="phonecode" />
                        </div>
                        <div class="col-md-6">
                            <label for="created">Created</label>
                            <input type="number" class="form-control" name="created" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="registerby">Register By</label>
                            <input type="number" class="form-control" name="register_by" />
                        </div>
                        <div class="col-md-6">
                            <label for="modified">Modified</label>
                            <input type="number" class="form-control" name="modified" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="modifiedby">Modified By </label>
                            <input type="number" class="form-control" name="modified_by" />
                        </div>
                        <div class="col-md-6">
                            <label for="recorddeleted">Record Deleted?</label>
                            <input type="number" class="form-control" name="record_deleted" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row" style="text-align: center">
                        <button class="btn btn-primary">Create Country</button>
                    </div>
                </div>
            </form>
</div>
@endsection
