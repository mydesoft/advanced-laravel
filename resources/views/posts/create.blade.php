@extends('Layouts.master')
@section('title', 'Channels')

@section('content')
	<div style="margin-top: 70px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card shadow-lg p-4 mb-5 bg-body rounded">
						<div class="card-body">

							<div class="row mt-4">
								<div class="col-md-6 offset-md-3">

									<select class="form-select">
										
										@foreach($channels as $channel)
											<option class="list-group-item">{{$channel->name}}</option>
										@endforeach	
									</select>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection