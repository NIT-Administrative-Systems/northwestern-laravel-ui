@if ($errors->any())
<div class="alert alert-danger {{ isset($form_error_class) ? $form_error_class : ''}}">
	<div class="d-flex align-items-center">
		<i class="fa fa-exclamation me-3" style="font-size: 48pt;" aria-hidden="true"></i>
		<p class="mb-0" style="font-size: 16pt"><strong>Oops</strong>, there was an issue with that.</p>
	</div>
	<ul class="ml-5">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
