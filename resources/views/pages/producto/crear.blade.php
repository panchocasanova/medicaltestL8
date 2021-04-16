@extends('layouts.default')

@section('title', 'Crear Nuevo Producto')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Library</a></li>
		<li class="breadcrumb-item active"><a href="javascript:;">Data</a></li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Crear Nuevo producto <small>header small text goes here...</small></h1>
	<!-- end page-header -->

	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Crear Nuevo Producto</h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<div class="panel-body">
			<form>
				<div class="form-group">
				  <label for="exampleFormControlInput1">Email address</label>
				  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="form-group">
				  <label for="exampleFormControlSelect1">Example select</label>
				  <select class="form-control" id="exampleFormControlSelect1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				  </select>
				</div>
				<div class="form-group">
				  <label for="exampleFormControlSelect2">Example multiple select</label>
				  <select multiple class="form-control" id="exampleFormControlSelect2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				  </select>
				</div>
				<div class="form-group">
				  <label for="exampleFormControlTextarea1">Example textarea</label>
				  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>
			  </form>
		</div>
	</div>
	<!-- end panel -->
@endsection