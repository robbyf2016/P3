@extends('_master')
@section('page_title')
	Welcome to Developers Best Friend Random User Page
@stop
@section('navigation')
<!--************************************************
	This is the breadcrumb navigation code to be
	included by the _master blade template.
	************************************************-->
	<a href="/">Home</a> ->Random User Generator
@stop
@section('description')
<!--************************************************
	This is the description code to be
	included by the _master blade template.
	************************************************-->
<ul id="description"><li>This Random User Generation page allows the user to select the number of 
random users to generate along with other user information generation options.</li>
</ul>
@stop
@section('content')
<!--************************************************
	This is the content code to be
	included by the _master blade template.  This
	section displays the various options for the
	random user(s) to be generated and then displays
	the results.
	************************************************-->
	{{ Form::open(array('url' => 'random_user')) }}
		<fieldset id="options">
			<legend>Random User Options</legend>
			Number of Users:  {{ Form::select('users_num', array(
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
    		which locale (default US-English):  {{Form::select('locale', array(
    			'en_US'		=>	'English (US)',
    			'fr_FR'		=> 	'French',
    			'de_DE'		=> 	'German',
    			'it_IT'		=> 	'Italian',
    			'ja_JP'		=> 	'Japanese',
    			'pt_BR'		=> 	'Portuguese (Brazilian)',
    			'ru_RU'		=>	'Russian',
    			'es_ES'		=>	'Spanish'
    			), 'en_EN')}}<br />
    		with Image:  {{Form::checkbox('image','true')}}<br />
    		with physical address: {{Form::checkbox('address','true')}}<br />
    		with email address:  {{Form::checkbox('email','true')}}<br />
    		with username and password:  {{Form::checkbox('unamepass','true')}}<br />
    		with MAC and IP address:  {{Form::checkbox('macip','true')}}<br />
    		with Company Name:  {{Form::checkbox('company','true')}}<br />
    		with Credit Card information:  {{Form::checkbox('credit','true')}}<br />
			{{ Form::submit('Submit') }}
		</fieldset>
	{{ Form::close() }}
@if(isset($selection))
	@for ($i=0; $i < $selection['users_num']; $i++){
		<?php $faker = Faker\Factory::create($selection['locale']);
				echo Pre::render($faker->name, 'Name - ');
		?>
		@if(isset($selection['image']))
		<?php 
			$faker->addProvider(new Faker\Provider\Image($faker));
			echo Pre::render($faker->imageUrl($width = 640, $height = 480), 'URL Image Location - ');
		?>
		@endif
		@if(isset($selection['address']))
		<?php echo Pre::render($faker->address,'Address - ');
		?>
		@endif
		@if(isset($selection['email']))
		<?php 
			$faker->addProvider(new Faker\Provider\Internet($faker));
			echo Pre::render($faker->email,'Email Address - ');
		?>
		@endif
		@if(isset($selection['unamepass']))
		<?php 
			$faker->addProvider(new Faker\Provider\Internet($faker));
			echo Pre::render($faker->userName,'UserName - ');
			echo Pre::render($faker->password,'Password - ');
		?>
		@endif
		@if(isset($selection['macip']))
		<?php 
			$faker->addProvider(new Faker\Provider\Internet($faker));
			echo Pre::render($faker->ipv4,'IP Address - ');
			echo Pre::render($faker->macAddress,'MAC Address - ');
		?>
		@endif
		@if(isset($selection['company']))
		<?php 
			echo Pre::render($faker->company,'Company Name - ');
		?>
		@endif
		@if(isset($selection['credit']))
		<?php 
			$faker->addProvider(new Faker\Provider\Payment($faker));
			echo Pre::render($faker->creditCardType,'Credit Card Type - ');
			echo Pre::render($faker->creditCardNumber,'Credit Card Number - ');
			echo Pre::render($faker->creditCardExpirationDateString,'Credit Card Expiration - ');
		?>
		@endif
	}	
	@endfor
@endif	
@stop