@extends('_master')
@section('page_title')
	Welcome to Developers Best Friend Lorem Ipsum Result Page
@stop
@section('description')
Lorem Ipsum Results:<br />
@stop
@section('content')
{{$generator = new Badcow\LoremIpsum\Generator();}}
{{$paragraphs = $generator->getParagraphs($para_num);}}
@stop