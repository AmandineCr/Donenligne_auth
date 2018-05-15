@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <H3>Vos données ont été mise à jour</H3>
                        {{"Prenom : ".Auth::user()->firstname.", Nom : ".Auth::user()->lastname.", Email : ".Auth::user()->email }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection