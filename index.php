<?php
//    if (isset($_REQUEST['author']))
//    {
//        var_dump($_REQUEST);
//    }
//?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script>

        function Validate()
        {
            var form = $("#commentform");
            var author = form.find("input[name=author]").val();
            var comment = form.find("textarea[name=message]").val();
            var email = form.find("input[name=email]").val();
            //kapowCheck
            content = $("#comment").val();
            metaCAPTCHA.execute( content);
            return false;
        }

    </script>


</head>
<body>

<form id="commentform" method="POST" name="commentform"
      action="process.php" enctype="multipart/form-data" onsubmit="Validate(); return false;">
	<big><strong> Simple Form </strong></big>
	<p>
		<input id="author" type="text" name="author" value="John">
	</p>
	<br>
	<p>
		<input id="email" type="text" name="email" value="tester@test.com">
	</p>
	<br>

	<p>
		<input id="comment" type="text" name="comment" value="This is awesome world!">
	</p>
	<p>
		<input id="submit" type="submit" value="Submit">
	</p>
	<p style="color :#0085CC    ">    This demo shows that client will randomly  receive different types of captcha for each submission</p> 

	<br>
</form>
    <?php
    include_once "metacaptcha/metacaptcha_lib.php"; //Link to metacaptcha_lib.php
    $processUrl="metacaptcha.php";      //Link to metacaptcha.php created in step 5
    $formID="commentform";
    echo initialize_metacaptcha($processUrl, $formID);
    ?>

</body>
</html>
