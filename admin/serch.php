
<!DOCTYPE HTML>
<html>
<head>
<title>Admin || panel</title>

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>
 
</head>
<body>

   <input type="text" id="search_text" class="form-control" name="search_text" placeholder="Serch"> 

<div id="result">Hello Bangladesh</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#search_text').keyup(function(){
                var txt=$(this).val();
                if(txt != '')
                {
                      $.ajax({
                        url:"fetch.php",
                        method:"post",
                        data:{search:txt},
                        dataType:"text",
                        success:function(data)
                        {
                            $('#result').html(data);
                        }
                    });

                }else
                {
                    $('#result').html('');
                   
                }
 
        });
    });

</script>
