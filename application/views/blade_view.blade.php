@extends('layouts/index')

@section('title','Bade Templating Engine in CodeIgniter')


@push('css')

@endpush


@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">Integrated Blade Templating Engine</div>
		<div class="panel-body">By - {{ $data['name'] }}</div>
		<div class="panel-body"><?=APPPATH?></div>
	</div>
@stop


@push('scripts')

@endpush
