<!DOCTYPE html>
 <meta name="description" content="{{ (isset($meta_desc)) ? $meta_desc : ''}}">
	<meta name="keywords" content="{{ (isset($keywords)) ? $keywords : ''}}">

@extends('owner.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Панель управления</div>

                <div class="panel-body">
                   Владелец
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
