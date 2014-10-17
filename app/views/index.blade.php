@extends('_master')
@section('page_title')
	Welcome to Developers Best Friend Homepage
@stop
@section('navigation')
<a href="/">Home</a>
@stop
@section('description')
<ul id=description>
	<li>This site helps developers by providing two types of test input.  One is the lorem-ipsum text generator.  It allows the user to select the number of paragraphs
of lorem-ipsum text they need to use for their application.</li>
	<li>The second type of test input is that of random users.  Most applications and databases utilize users for access and manipulation.  This application allows a
user to select a random number of users to be generated.</li>
</ul>
@stop
@section('content')
<a href="/lorem">Lorem-Ipsum Generator</a><br />
<a href="/random_user">Random User Generator</a>
@stop