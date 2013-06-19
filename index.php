<?php
//    if (isset($_REQUEST['author']))
//    {
//        var_dump($_REQUEST);
//    }
//?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title></title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script>
        $("#quick_reply").submit(function (){
            alert("hello");
        });
        function Validate()
        {
            var form = $("#commentform");
            var comment = form.find("textarea[name=message]").val();
            //kapowCheck
            content = $("#comment").val();
            metaCAPTCHA.execute( content);
            return false;
        }

<!--    </script>-->


</head>
<body>

<form id="commentform" method="POST" name="commentform"
      action="process.php" enctype="multipart/form-data" onsubmit="Validate(); return false;" >
	<strong> Simple Form </strong>
	<p>
		<input id="author" type="text" name="author" value="John">
	</p>
	<br>
	<p>
		<input id="email" type="text" name="email" value="tester@test.com">
	</p>
	<br>

	<p>
		<textarea id="comment" type="text" name="comment" value="This is awesome world!"></textarea>
	</p>
	<p>
		<input id="submit" type="submit" value="Submit">
	</p>
	<p style="color :#0085CC    ">    This demo shows that client will randomly  receive different types of captcha for each submission</p> 

	<br>
</form>
    <?php
    include_once "metacaptcha/metacaptcha_lib.php"; //Link to metacaptcha_lib.php
    $formID="commentform";
    $lib_path = "metacaptcha/metacaptcha.php";
    echo initialize_metacaptcha($lib_path, $formID);
    ?>

</body>
</html>
