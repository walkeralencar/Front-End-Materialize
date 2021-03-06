<?php $pageTitle = 'Error'; ?>
@extends('layouts.default')

@section('css')
    @parent
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin:      0;
            padding:     0;
            width:       100%;
            height:      100%;
            color:       #B0BEC5;
            display:     table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            vertical-align: middle;
            padding-top: 50px;
            text-align: center;
        }

        .content {
            text-align: center;
            display:    inline-block;
        }

        .title {
            font-size:     96px;
        }

        .sub-title {
            font-size: 35px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
    </style>
@stop

<div class="container">
    <div class="content">
        <div class="title">Error {{ $error }}</div>
        <div class="sub-title">{{ $subTitle }}</div>
        <div class="quote">
            @if (Session::has('errorMessage'))
                Error Message: {{ Session::get('errorMessage') }}
                <br />
            @endif
        </div>
        <div class="quote">
            {!! HTML::linkRoute('home', 'Go Back to the Home Page', [], ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>