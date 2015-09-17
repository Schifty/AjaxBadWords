<head>
<meta charset="utf-8">
<html>
<title>A simple text bad word cleaner</title>
<!--load the jquery librray from google, keep it on top to load it first as its need to load other things-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!--load our script for the form we made-->
<script type="text/javascript" src="js/cleanText.js"></script>
</head>

<body>

<form id="badword" method="post"> 
<textarea name="bio" ></textarea>
<br>
<input type="submit" />
</form>
<p id="result">result</p>


</body>
</html>