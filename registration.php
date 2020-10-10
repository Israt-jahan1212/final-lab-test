<?php include("header.php"); ?>

<?php
require_once 'db.php';

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    if(empty($name) || empty($address) || empty($street) || empty($city) || empty($contact) || empty($age) || empty($email)){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> Field incomplte!</strong>
    </div>';
		}
else{
  $sql = "INSERT INTO tbl_reg (name,address,street,city,contact_no,age,email) VALUES ('$name','$address',' $street','$city','$contact','$age','$email')";
 $result = mysqli_query($conn,$sql);
 if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>Successfull!</strong>
</div>';
 }
}

}
 ?>
<!doctype html>
<html lang="en">
  
  <body>
   <div class="container">
       <div class="col-md-3"></div>
       <div class="col-md-6">
           <form action="" method="POST">
              <input type="hidden">
           <div class="form-group">
             <label for="firstname">Name</label>
             <input type="text"
               class="form-control" name="name" id="name"  placeholder="Name" autocomplete="off">
           </div>
           <div class="form-group">
               <label for="address">Address</label>
               <input type="textarea"
               class="form-control" name="address" id="address"  placeholder="address" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="address">Street</label>
               <input type="text"
               class="form-control" name="street" id="street"  placeholder="street" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="address">City</label>
               <input type="text"
               class="form-control" name="city" id="city"  placeholder="city" autocomplete="off">
            </div>
           <div class="form-group">
             <label for="ContactNo">Phone No</label>
             <input type="text"
               class="form-control" name="contact" id="contact"  placeholder="Contact No" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="Age">Age</label>
             <input type="text"
               class="form-control" name="age" id="age"  placeholder="age" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="Email">Email</label>
             <input type="email"
               class="form-control" name="email" id="email"  placeholder="email" autocomplete="off">
           </div>
           <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
           </form>
         </div>
         <div class="col-md-3"></div> 
   </div>
    
  </body>
</html>
<?php include("footer.php"); ?>