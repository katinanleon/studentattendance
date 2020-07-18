<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylez.css">
  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#btnsubmit').click(function() {
      $.ajax({
        type: "POST",
        url: 'register1.php',
        data: {
          email: $("#email").val(),
          name: $("#name").val(),
          password: $("#password").val()
        }
      });
      window.location.replace('conn.php');
    });
  });
  </script>
</head>
<body class="container-fluid">
<!-- Debut de la première page  16- 111--> 

  <a href="index.php">Home</a>

  <div class="row " style="height: 50px"></div> <!-- entete-->

  <div class="row bg-default" style="height: 50px"></div> <!-- espace-->

  <div class="container">
    <div class="row">

            <div class="col-3"></div>
                
            <div class="col"> <!-- block formulaire-->
                   

                   <section>
                    <form class="border p-2 mt-1 border-dark justify-content-center">
                      <div class=" row ">
                          <div class="col mb-3">
                              <label for="email" class="form-label text-bold text-dark">Email</label>
                              <input type="email" name="email" id="email" class="form-control" placeholder="votre email"  required>
                          </div>
                         
                    
                        
                        
                      </div>
                      <div class="col mb-3">
                        <label for="name" class="form-label text-bold text-warning">Name </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="votre nom" required>
                      </div>
                      <div class="row ">
                          <div class="col mb-3">
                              <label for="password" class="label-control text-warning"> password</label>
                              <input type="password" name="password" id="password" class="form-control" placeholder="*************"  required>        
                          </div>
                         
                      </div>
                       <div class="col mb-3 ">
                           
                           <button type="submit" name="valider" class=" btn-block btn btn-primary"> Connexion </button>
                       </div>
                       
                  </form>
                   </section>

              </div> 

              <div class="col-3"></div>
        
         </div>  

         <div class="row bg-default" style="height: 50px"></div> 

    </div>

  
    

    <!-- Fin de la première page-->

    
    
      
    </div>

    






<!-- JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>