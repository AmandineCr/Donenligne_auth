@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4> Vous pouvez faire un Don !</h4>
                        <td>
                            {{--<a href="/users/{{$user->id}}">Show details</a>--}}
                        </td>
                        <td>
                            <a class="btn btn-outline-info" href="/users/infos/edit">
                                edit
                            </a>
                        </td>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
