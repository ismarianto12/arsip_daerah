@extends('layouts.template')
@section('title', '::Halaman Dashboard::')

@section('content')
    <div class="row gutter-xs">
        <div class="col-xs-6 col-md-3">
            <div class="card">
                <div class="card-values">
                    <div class="p-x">
                        <small>Visitors</small>
                        <h3 class="card-title fw-l">185,118</h3>
                    </div>
                </div>
                <div class="card-chart">
                    <canvas data-chart="line" data-animation="false"
                        data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]'
                        data-values='[{"colorStop1": "#cbdff1", "colorStop2": "#ffffff", "y0": 0, "y1": 36, "borderColor": "#1c90fb", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]'
                        data-scales='{"yAxes": [{ "ticks": {"max": 31072}}]}'
                        data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="card">
                <div class="card-values">
                    <div class="p-x">
                        <small>New visitors</small>
                        <h3 class="card-title fw-l">68,494</h3>
                    </div>
                </div>
                <div class="card-chart">
                    <canvas data-chart="line" data-animation="false"
                        data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]'
                        data-values='[{"colorStop1": "#cbdff1", "colorStop2": "#ffffff", "y0": 0, "y1": 36,"borderColor": "#1c90fb", "data": [8796, 11317, 8678, 9452, 8453, 11853, 9945]}]'
                        data-scales='{"yAxes": [{ "ticks": {"max": 12853}}]}'
                        data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="card">
                <div class="card-values">
                    <div class="p-x">
                        <small>Pageviews</small>
                        <h3 class="card-title fw-l">925,590</h3>
                    </div>
                </div>
                <div class="card-chart">
                    <canvas data-chart="line" data-animation="false"
                        data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]'
                        data-values='[{"colorStop1": "#cbdff1", "colorStop2": "#ffffff", "y0": 0, "y1": 36,"borderColor": "#1c90fb", "data": [116196, 145160, 124419, 147004, 134740, 120846, 137225]}]'
                        data-scales='{"yAxes": [{ "ticks": {"max": 157004}}]}'
                        data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="card">
                <div class="card-values">
                    <div class="p-x">
                        <small>Average duration</small>
                        <h3 class="card-title fw-l">00:07:56</h3>
                    </div>
                </div>
                <div class="card-chart">
                    <canvas data-chart="line" data-animation="false"
                        data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]'
                        data-values='[{"colorStop1": "#cbdff1", "colorStop2": "#ffffff", "y0": 0, "y1": 36,"borderColor": "#1c90fb", "data": [13590442, 12362934, 13639564, 13055677, 12915203, 11009940, 11542408]}]'
                        data-scales='{"yAxes": [{ "ticks": {"max": 14662531}}]}'
                        data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="50"></canvas>
                </div>
            </div>
        </div>
    </div>


    @include('include')

@endsection
