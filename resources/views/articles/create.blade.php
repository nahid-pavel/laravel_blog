<h1> Welcome to Home Page </h1>

{!! Form::open(array('action' => 'ArticlesController@store'))  !!} 

   <div class="form-group">
    {!! Form::label('Title') !!}<br />
    {!! Form::text('title', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Description') !!}<br />
    {!! Form::textarea('description', null, 
        array('required', 
              'class'=>'form-control', 
              )) !!}
</div>



<div class="form-group">
    {!! Form::submit('Create Article', 
      array('class'=>'btn btn-primary')) !!}
</div>
 

{!! Form::close() !!}
