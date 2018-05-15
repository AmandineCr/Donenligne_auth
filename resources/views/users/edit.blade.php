@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <p>
                            Vous pouvez faire un Don !
                            modifier les informations de votre account

                            <form action="/users/{{Auth::user()->id}}" method="post">
                                {{method_field('PUT')}}
                                {{csrf_field()}}
                                <td class="form-group">
                                    <input type="text" name="addfirstname" class="form-control"
                                           value="{{Auth::user()->firstname}}">
                                </td>
                                <td class="form-group">
                                    <input type="text" name="addlastname" class="form-control"
                                           value="{{Auth::user()->lastname}}">
                                </td>
                                <td class="form-group">
                                    <input type="text" name="addemail" class="form-control" value="{{Auth::user()->email}}">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-outline-warning">edit</button>
                                </td>
                            </form>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection