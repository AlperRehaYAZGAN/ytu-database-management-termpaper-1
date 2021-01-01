@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">{{ $header }}</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('flash::message')
                <div class="clearfix"></div>

            </div>
        </div>


        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="clearfix"></div>

                <div class="text-center">
                    <img src="{{ asset('img/' . (isset($img_name) ? $img_name : '')) }}"  width="640px" alt=""/>
                </div>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
