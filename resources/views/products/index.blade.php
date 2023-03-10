@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">{{ __("Products Management") }}</h1>
	</div>

	<div class="col-sm-4 form-group">
		<a class="btn btn-sm btn-primary" href="./product/create">{{ __("New Product") }}</a>
	</div>
</div>

@include('layouts.alert')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				{{ __("Products Data") }}
			</div>
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>						
						<tr>
							<th>{{ __("Product Name") }}</th>
							<th>{{ __("Units In Stock") }}</th>
							<th>{{ __("Units On Orders") }}</th>
							<th>{{ __("Units Received") }}</th>
							<th>{{ __("Minimum Required") }}</th>
							<th>{{ __("Price") }}</th>
							<th class="center">{{ __("Actions") }}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
						<tr class="odd gradeX">

							<td> {{ $product->name }} </td>

							<td class="center"> {{ $product->units_in_stock }} </td>

							<td class="center"> {{ $product->units_on_order }} </td>

							<td class="center"> {{ $product->units_received }} </td>

							<td class="center"> {{ $product->minimum_required }} </td>

							<td class="center"> {{ $product->price }} </td>

							<td class="center tooltip-demo">

								<a data-toggle="tooltip" data-placement="left" data-original-title="Edit data"  href="/product/{{ $product->id }}/edit" class="btn btn-primary btn-circle">
									<i class="fa fa-pencil"></i>
                            	</a>

                            	<form style="display: inline-block;" id="delete-form" action="/product/{{ $product->id }}" method="post" >
                            		<button data-toggle="tooltip" data-placement="right" data-original-title="Delete data" class="btn btn-danger btn-circle" type="submit"><i class="fa fa-times"></i></button>

                            		{{ method_field('delete') }}
                            		
                            		{{ csrf_field() }}
                            	</form>

							</td>

						</tr>
						@endforeach
					</tbody>
				</table>			
			</div>
		</div>
	</div>
</div>


@endsection