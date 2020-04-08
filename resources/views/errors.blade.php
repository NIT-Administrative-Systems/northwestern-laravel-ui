@if ($errors->any())
<div class="alert alert-danger {{ isset($form_error_class) ? $form_error_class : ''}}">
    <i class="fa fa-exclamation float-left pr-3" style="font-size: 48pt;" aria-hidden="true"></i>
    <p style="font-size: 16pt"><strong>Oops</strong>, there was an issue with that.</p>
	<ul class="ml-5">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
