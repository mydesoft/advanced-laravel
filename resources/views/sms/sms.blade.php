@extends('Layouts.master')
@section('title', 'Home')

@section('content')
	<div style="margin-top: 50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card shadow-lg p-4 mb-5 bg-body rounded">
						<div class="card-body">
							<h4 class="text-center">Send SMS to User</h4>

							<div class="row mt-4">
								<div class="col-md-6 offset-md-3">

									<form method="POST" action="">
										@csrf
										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" name="phone" class="form-control">
										</div>

										<div class="form-group mb-2">
											<label>Message</label>
											<textarea name="message" class="form-control"></textarea>
										</div>

										<button class="btn btn-info">Send</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection w