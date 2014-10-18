@extends('_master')
@section('page_title')
	Welcome to Developers Best Friend Lorem Ipsum Page
@stop
@section('navigation')
<!--************************************************
	This is the breadcrumb navigation code to be
	included by the _master blade template.
	************************************************-->
	<a href="/">Home</a> ->Lorem Ipsum
@stop
@section('description')
<!--************************************************
	This is the description code to be
	included by the _master blade template.
	************************************************-->
<ul id="description"><li>This Lorem-Ipsum page allows the user to select the number of 
paragraphs to generate lorem ipsum content.</li>
</ul>
@stop
@section('content')
<!--************************************************
	This is the content code to be
	included by the _master blade template.  This
	section creates an HTML form for the user to 
	select the number of Lorem Ipsum paragraphs
	that they desire to be produced.
	************************************************-->
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