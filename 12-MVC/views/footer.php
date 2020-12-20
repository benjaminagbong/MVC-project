<style type="text/css">
  
  #loginAlert{
  display: none;
}
</style>

<footer class="footer mt-auto py-3 ">

	<p>&copy: My site 2020</p>
</footer>


<script src="jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModalTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="alert alert-danger " id="loginAlert"></div>
        
        <form >
        		<input type="hidden" name="LoginActive" id="LoginActive" value="1">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email </label>
			    <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Address" >
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="password"  placeholder="Password" > </div>		  
  
		</form>
      </div>
      <div class="modal-footer">
      	<a href="#" id="toggleLogin">Sign Up</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="LoginSiginupButton" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$("#toggleLogin").click(function () {
		// body...
		if ($("#LoginActive").val() == "1") {
			$("#LoginActive").val("0");
      $("#LoginModalTitle").html("Sign Up");
      $("#LoginSiginupButton").html("Sign Up");
      $("#toggleLogin").html("Login");
    }else{
      $("#LoginActive").val("1");
      $("#LoginModalTitle").html("Login");
      $("#LoginSiginupButton").html("Login");
      $("#toggleLogin").html("Sign Up");
    } 
	})
  $("#LoginSiginupButton").click(function(){
    
   $.ajax({
    type: "POST",
    url:"action.php?action=loginSignup",
    data: "email=" + $("#email").val() + "&password=" + $("#password").val() + "&LoginActive=" + $("#LoginActive").val(),
    success: function(result){
      if (result == "1"){
        window.location.assign("http://127.0.0.1/complete%20web%20developer/12-MVC/");

      }else{

        $("#loginAlert").html(result).show();

      }
    }

    
   })
  })
</script>
</body>
</html>