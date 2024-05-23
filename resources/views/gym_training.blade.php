@extends('layouts.app')
@section('content')
    <div class="content-wrapper pb-4">
        <div class="container pt-5">
            <div class="row">
                <h1 class="text-center pb-5">Gym Training Package</h1>
                    @foreach ($packages as $package)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $package->name }}</h5>
                                <p class="card-text">{{ $package->description }}</p>
                                <p class="card-text">Number of Session: {{ $package->sessions_number }}</p>
                                <p class="card-text">Price: ${{ $package->price }}</p>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection