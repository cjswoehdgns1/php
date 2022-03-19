<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <title>Document</title>
</head>
<body>
    <input type='text' id='value1'>
    <input type='button' id='submit'>
</body>
</html>

<script>
    $mod = "post"
    if($mod=="get"){
        $("#submit").click(function(){
            $.get("response_get.php", 
                {
                value1: $("#value1").val()
                },
                function(data){
                console.log( "data: " + data );
                }
            );
            location.href="response_get.php?value1="+$("#value1").val();
        });
    }
    else{
        $("#submit").click(function(){
            $.post("response_post.php", 
                {
                value1: $("#value1").val()
                },
                function(data){
                console.log( "data: " + data );
                }
            );
            location.href="response_post.php"; // 해당 위치로 리디렉션될 때 value1의 값을 넘겨주는 법?
        });
    }

</script>