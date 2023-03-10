@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">{{ __("Edit Supplier") }}</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				{{ __("Supplier Form") }}
			</div>
			<div class="panel-body">
				<form action="/supplier/{{ $supplier->id }}" method="post">
					{{ method_field('PATCH')}}
					{{ csrf_field() }}
					<div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
						<label>{{ __("Supplier Name") }}</label>
						<input value="{{ $supplier->name }}" class="form-control" type="text" name="name">
						@if($errors->has('name'))
						<span class="help-block">{{ $errors->first('name') }}</span>
						@endif
					</div>
					<div class="form-group has-feedback {{ $errors->has('address') ? 'has-error' : '' }}">
						<label>{{ __("Address") }}</label>
						<input value="{{ $supplier->address }}" class="form-control" type="text" name="address">
						@if($errors->has('address'))
						<span class="help-block">{{ $errors->first('address') }}</span>
						@endif
					</div>
					<div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
						<label>{{ __("E-mail") }}</label>
						<input value="{{ $supplier->email }}" class="form-control" type="email" name="email">
						@if($errors->has('email'))
						<span class="help-block">{{ $errors->first('email') }}</span>
						@endif
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">{{ __("Save") }}</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection