<div class="form-group">
	
	{!! Form::label('title','Naslov:') !!}
	{!! Form::text('title',null,["class" =>"form-control"]) !!}

</div>

<div class="form-group">
	
	{!! Form::label('body','Text:') !!}
	{!! Form::textarea('body',null,["class" =>"form-control"]) !!}

</div>



<div class="form-group">
	{!! Form::label('','Select image to upload:') !!}
	{!! Form::file('image',null,["class" =>"form-control"]) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText,['class'=>'btn btn-yellow form-control']) !!}
</div>
