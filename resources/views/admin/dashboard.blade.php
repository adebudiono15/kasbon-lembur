@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">@yield('title')</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                {{-- <div class="col-md-6">
                    <div class="card full-height">
                        <div class="card-body">
                            <div class="card-title">Total income & spend statistics</div>
                            <div class="row py-3">
                                <div class="col-md-4 d-flex flex-column justify-content-around">
                                    <div>
                                        <h6 class="fw-bold text-uppercase text-success op-8">Total Income</h6>
                                        <h3 class="fw-bold">$9.782</h3>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold text-uppercase text-danger op-8">Total Spend</h6>
                                        <h3 class="fw-bold">$1,248</h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div id="chart-container">
                                        <canvas id="totalIncomeChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection