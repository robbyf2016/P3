@extends('_master')
@section('page_title')
	Welcome to Developers Best Friend Lorem Ipsum Page
@stop
@section('navigation')
	<a href="/">Home</a> ->Lorem Ipsum
@stop
@section('description')
<ul id="description"><li>This Lorem-Ipsum page allows the user to select the different 
options to generate lorem ipsum content.</li>
</ul>
@stop
@section('content')
	{{ Form::open(array('url' => 'lorem')) }}
		<fieldset>
			<legend>Lorem Ipsum Options</legend>
			Number of Paragraphs  {{ Form::select('para_num', array(
        		'1'     => '1',
        		'2'     => '2',
        		'3'     => '3',
				'4'     => '4',
				'5'     => '5',
				'6'     => '6',
				'7'     => '7',
				'8'     => '8',
				'9'     => '9',
				'10'    => '10'
    		), '1') }}<br />
			{{ Form::submit('Submit') }}
		</fieldset>
	{{ Form::close() }}
@if(isset($paragraphs))
	@foreach ($paragraphs as $val){
		<p>{{$val;}}</p>
	}
	@endforeach	
@endif	
@stop