<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Making a shoutbox with PHP, MySQL and jQuery - Codeforest, web development blog</title>

<link rel="stylesheet" type="text/css" href="default.css" />

</head>

<body>

<div id="page">

    <div class="block rounded">
        <h1>Making a shoutbox with PHP, MySQL and jQuery</h1>
    </div>
    
    <div class="block_main rounded">
        <h2>Shoutbox</h2>
        
        <form method="post" action="shout.php">
            Name: <input type="text" id="name" name="name" />
            Message: <input type="text" id="message" name="message" class="message" /><input type="submit" id="submit" value="Submit" />
        </form>
        
        <div id="shout">
            
        </div>
    </div>

<div class="footer block_footer rounded">
      <a href="http://www.codeforest.net">By Codeforest</a>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    
    //populating shoutbox the first time
    refresh_shoutbox();
    // recurring refresh every 15 seconds
    setInterval("refresh_shoutbox()", 15000);

    $("#submit").click(function() {
        // getting the values that user typed
        var name    = $("#name").val();
        var message = $("#message").val();
        // forming the queryString
        var data            = 'name='+ name +'&message='+ message;

        // ajax call
        $.ajax({
            type: "POST",
            url: "shout.php",
            data: data,
            success: function(html){ // this happen after we get result
                $("#shout").slideToggle(500, function(){
                    $(this).html(html).slideToggle(500);
                    $("#message").val("");
                });
          }
        });    
        return false;
    });
});

function refresh_shoutbox() {
    var data = 'refresh=1';
    
    $.ajax({
            type: "POST",
            url: "shout.php",
            data: data,
            success: function(html){ // this happen after we get result
                $("#index.2").php(html);
            }
        });
}


</script>
</body>
</html>