 </div>
    </div>
    
    
<script>


    // ==============================
    // Standard Dialogs

      $(".confirm").on( 'click', function () {

        alertify.confirm("Are you sure want to delete?", function (e) {
            if (e) {
               
                window.location.href=$(".confirm").attr('href');
            } else {
                alertify.error("You've clicked Cancel");
            }
        });
        return false;
    });
	
	 $(".confirm2").on( 'click', function () {

        alertify.confirm("Are you sure want to confirm action?", function (e) {
            if (e) {
               
                window.location.href=$(".confirm2").attr('href');
            } else {
                alertify.error("You've clicked Cancel");
            }
        });
        return false;
    });

</script>
</body>
</html>