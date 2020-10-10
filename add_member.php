<?php include("header.php"); ?>
<?php
require_once 'db.php';

if(isset($_POST["add"])){
    $mem_id = $_POST['mem_id'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $major = $_POST['major'];
    $expired = $_POST['expired'];
    if($pass1 != $pass2){
        echo "password do no match";
    }
    if(empty($mem_id) || empty($pass1) || empty($pass2) || empty($name) || empty($email) || empty($major) || empty($expired)){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> Field incomplte!</strong>
    </div>';
		}
else{
  $sql = "INSERT INTO tbl_new_member (mem_id,pass,confirm_pass,name,email,major,expired) 
  VALUES ('$mem_id','$pass1','$pass2','$name','$email','$major','$expired')";
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
<form action="" method="POST">
              <input type="hidden">
           <div class="form-group">
             <label for="firstname">Member ID</label>
             <input type="text"
               class="form-control" name="mem_id" id="mem_id"  placeholder="Member Id" autocomplete="off">
           </div>
           <div class="form-group">
               <label for="address">Password</label>
               <input type="password"
               class="form-control" name="pass1" id="pass1"  placeholder="password" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="address">Confirm password</label>
               <input type="password"
               class="form-control" name="pass2" id="pass2"  placeholder="confirm password" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="address">Name</label>
               <input type="text"
               class="form-control" name="name" id="name"  placeholder="name" autocomplete="off">
            </div>
           <div class="form-group">
             <label for="ContactNo">Email</label>
             <input type="email"
               class="form-control" name="email" id="email"  placeholder="email" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="Age">major</label>
             <input type="text"
               class="form-control" name="major" id="major"  placeholder="major" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="Age">Expired</label>
             <input type="date"
               class="form-control" name="expired" id="expired"  placeholder="expired" autocomplete="off">
           </div>
           
            
           <button type="submit" name="add" class="btn btn-primary" >Submit</button>
           </form>
<?php include("footer.php"); ?>
