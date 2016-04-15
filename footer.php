
	</div><!--end container-fluid-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
function getTime(){
        $.ajax({
           type: "POST",
           url: "date-time.php",
           success: function(msg){
             $("#date-time").empty().append(msg);
           }
         });
    };

$(document).ready(function(){
    getTime(); 
    setInterval(getTime, 1000); // Get time each second
});
    </script>
  </body>
</html>