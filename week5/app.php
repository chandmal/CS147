<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
        <link rel="stylesheet" href="my.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.js">
        </script>
        <script src="my.js">
        </script>
    </head>
    <body>
        <!-- Login -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>
                    Login
                </h3>
            </div>
            <div data-role="content">
                <h2>
                    Test Login Page: CS147
                </h2>
		<form name="form1" method="post" action="check.php" data-ajax="false">
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="myusername">
                            Username
                        </label>
                        <input name="username" placeholder="ex. test" value="" type="text" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <label for="textinput2">
                            Password
                        </label>
                        <input name="password" placeholder="ex. test" value="" type="password" />
                    </fieldset>
                </div>
                <input type="submit" data-theme="b" value="Submit" name="Submit" />
		</form>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>