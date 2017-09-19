@extends('app')

@section('main-content')


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Employee</div>
                        <div class="number count-to" data-from="0" data-to="100" data-speed="2000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Distributer</div>
                        <div class="number count-to" data-from="0" data-to="525" data-speed="1500" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
           {{--<a href="#">--}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">help</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Products</div>
                        <div class="number count-to" data-from="0" data-to="1024575" data-speed="2000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            {{--<a/>--}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Categories</div>
                        <div class="number count-to" data-from="0" data-to="25" data-speed="2000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->

        <!-- #END# CPU Usage -->
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Smart Distributer</h2>
                    </div>
                    <div class="body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
            <!-- #END# Answered Tickets -->
        </div>


    </div>
</section>
    @endsection