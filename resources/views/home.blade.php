@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div class="container">
        <div class="row justify-content-center">
            <div class="container p-50">
                @if ($covidStats)
                    <div class="row">
                        <div class="col-12">
                            <h5>Last Updated Time: <span
                                    style="color: rgb(91, 91, 91)">{{ $covidStats->update_date_time }}</span></h5>
                        </div>
                    </div>
                    <br><br>
                    <div class="row" style="padding-top:20px;">
                        <div class="col-3">
                            <div class="card primary bg-primary">
                                <div class="card-body">
                                    <div>
                                        <i class="bi bi-people-fill fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ $covidStats->local_active_cases }}</h5>
                                    <p class="card-text">Active Cases</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-secondary">
                                <div class="card-body">
                                    <div>
                                        <i class="bi bi-hospital-fill fs-2"></i>
                                    </div>
                                    <h5 class="card-title">
                                        {{ $covidStats->local_total_number_of_individuals_in_hospitals }} </h5>
                                    <p class="card-text">Total Hospitalized</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-success">
                                <div class="card-body">
                                    <div>
                                        <i class="bi bi-hospital-fill fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ $covidStats->local_new_cases }}</h5>
                                    <p class="card-text">New Cases</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-warning">
                                <div class="card-body">
                                    <div>
                                        <i class="bi bi-bandaid-fill fs-2"></i></i>
                                    </div>
                                    <h5 class="card-title">{{ $covidStats->local_recovered }}</h5>
                                    <p class="card-text">Total Recovered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top:20px;">
                        <div class="col-3">
                            <div class="card bg-danger">
                                <div class="card-body">
                                    <div>
                                        <i class="bi bi-hospital-fill fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ $covidStats->local_new_deaths }}</h5>
                                    <p class="card-text">Total New Deaths</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-info">
                                <div class="card-body">
                                    <div>
                                        <i class="bi bi-hospital-fill fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ $covidStats->local_deaths }}</h5>
                                    <p class="card-text">Total Deaths</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-warning">
                                <div class="card-body">
                                    <div>
                                        <i class="bi bi-hospital-fill fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ $covidStats->local_total_cases }}</h5>
                                    <p class="card-text">Total Cases</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
