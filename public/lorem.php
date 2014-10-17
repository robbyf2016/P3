<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<form action="lorem.php" method="get"><!--Using GET so the user can bookmark settings for reuseability and no sensitive info-->
            	<fieldset id="pw_fields">
                	<legend>Password Generator Options:</legend>
                    	<ol>
                        	<li>
                            	<label>Select number of words: </label><!--How many words to use for the password-->
                                <select name="number_of_words">
                                	<option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </li>
                            <li>
                            	<label>Include a number: <!--Option to include a number-->
                                <input type="checkbox" name="include_number" value="yes" checked="checked" /></label>
                            </li>
                            <li>
                            	<label>Include a special symbol (e.g., ! @ # $ % ): <!--Option to include a special character-->
                                <input type="checkbox" name="include_symbol" value="yes" checked="checked" /></label>
                            </li>
                            <li>
                            	<input type="submit" value="Generate Password" /><!--Execute logic.php-->
                            </li>
                        </ol>
                    <fieldset id="password_result"><!--Display generated password-->
                     <legend>The newly generated password is:</legend>
                        <p id="pw"><?php echo $password ?></p>
               		</fieldset>                  
               </fieldset>
            </form>
            
</body>
</html>