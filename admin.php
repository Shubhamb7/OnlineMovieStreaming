<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>NeonFlix-Admin</title>
   <link rel="stylesheet" href="css/user.css" type="text/css">
   <link rel="stylesheet" href="css/admin.css" type="text/css">  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
 </head>
 <body>
   <header>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
           <span class="navbar-text">NeonFlix</span>

           <ul class="navbar-nav">
             <li class="nav-item"> <a href="homepage.php" class="nav-link"> Home </a> </li>
             <li class="nav-item"> <a href="backend/logout.php" class="nav-link"> Logout</a> </li>

           </ul>

       </nav>

       <div class="container">

         <div class="jumbotron">
           <h1> Enter the Movie details</h1>
           <p> <b></b> </p> <br>

           <form class="" action="backend/admin_control.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Movie Name" name="mname" value="" required><br>
             <input type="text" class="form-control" placeholder="Year of Release" name="release" value="">
             <br>
             <input type="text" class="form-control" placeholder="Genre" name="genre" value="">
             <br>
               <input type="number" class="form-control" placeholder="Score (1-5)" name="score" min="1" max="5">
             <br>
             <input type="number" class="form-control" placeholder="Runtime in minutes" name="rtime" value="">
             <br>
             <input type="text" class="form-control" placeholder="Description..." name="desc" value="">
             <br>
             <label for=""><b>Switch between: Upload automatically video/image or adding video/image names and upload files manually</b></label>
             <br>
             <br>
             <input type="checkbox" id="toggle_checkbox">
             <label for="toggle_checkbox" id="bt"></label>
	         <br>
             <br>
             <div class="row" id="upload1">
 			 
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Upload Image : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="100000">
                              <input type="file" name="image" value="">
                          </div>
                     </td>
                   </tr>
                 </table>
               </div>
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Upload Video : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="30000000">
                              <input type="file" name="video" value="">
                          </div>
                     </td>
                   </tr>
                 </table>
               </div>
             </div>
			 
			 <div class="row" id="upload2">
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Image name: </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="100000">
                              <input type="text" name="image_txt" value="">
                          </div>
                     </td>
                   </tr>
                 </table>
               </div>
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Video name: </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="300000000">

                              <input type="text" name="video_txt" value="">
                          </div>
                     </td>
                   </tr>
                 </table>
               </div>
             </div> 
			 <br>
             <div class="signupbutton">
               <input type="submit" class ="btn btn-success btn-lg" name="upload" value="Submit" >
             </div>


           </form>

        </div>

         </div>

       </div>

   </div>

 </header>
 <footer class="page-footer font-small blue">

   <div class="footer-copyright text-center py-3">© 2018 Copyright:
     <a href="">shubhamb756@gmail.com</a>
   </div>

 </footer>
   </body>
 </html>
