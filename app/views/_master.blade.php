<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>@yield('title','CSCIE-15 P3 - Developers Best Friend - Robby Fussell')</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

		<body>
        
        	<div id="container">
            	<div id="header">
        			<img class="header_image" src="images/harvard_shield.png" alt="Harvard Shield" />
                    <h1 id="head_title">CSCIE-15 P3 by Robby Fussell</h1>
                </div>
                <div id="navigation">
                    @yield('navigation')
                </div>
                
                <div id="content">
                	<h2>@yield('page_title')</h2>
                    @yield('description')
					@yield('content')
            	</div>
               
                <div id="footer">
                	<p>W3C Validated
					<img src="images/HTML5.png" width="31" height="31" alt="HTML 5">
					<img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" width="88" height="31"/>
    				</p>
                </div>
            </div>

		</body>

		
</html>