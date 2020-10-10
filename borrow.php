<?php include("header.php"); ?>
<?php 
require_once 'db.php';

$bq = "SELECT * FROM tbl_book_info";
$r1 = mysqli_query($conn,$bq);
$fetch = mysqli_fetch_assoc($r1);
$isbn = $fetch['ISBN'];
$ncopy = $fetch['num_copies'];
$b_id= $fetch['id'];
$mq = "SELECT mem_id FROM tbl_book_info";
$r2 = mysqli_query($conn,$mq);
$m_id = $r2;


if(isset($_POST["borrow"])){

   
    $mem_id = $_POST['mem_id'];
    $book_id = $_POST['book_id'];
    $copies = $_POST['copies'];
    $crnt_date = $_POST['current_date'];
    $rtn_date = $_POST['return_date'];
if($book_id != $b_id){
    echo "<h1>You do not have book account </h1>";
}
$sql = "UPDATE  tbl_book_info SET num_copies=$ncopy-$copies WHERE id=".$_POST['id'];
$result = mysqli_query($conn,$sql);
if($result){
    echo "successfully borrow";
}
$sql2 = "INSERT INTO tbl_borrow_book (mem_id,book_id,crnt_date,rtrn_date) VALUES ('$mem_id','$book_id','$crnt_date','$rtn_date')";
$result2 = mysqli_query($conn,$sql2);
if($result2){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>Successfull!</strong>
</div>';

}


}

?>
<?php
$sql3 = "SELECT * FROM tbl_book_info ";
$result3 = mysqli_query($conn,$sql3);
if(mysqli_num_rows($result3)<0){
    echo " No Informatoin found";
}
$row = mysqli_fetch_assoc($result3);
 ?>
<form action="" method="POST">
           <div class="form-group">
           <input type="hidden" value=<?php echo $row["id"]; ?> name="id"> 

             <label for="memberid">Member ID</label>
             <input type="text"
               class="form-control" name="mem_id" id="mem_id"  placeholder="Name" autocomplete="off">
           </div>
           <div class="form-group">
               <label for="book_id">Book ID</label>
               <input type="textarea"
               class="form-control" name="book_id" id="book_id"  placeholder="book_id" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="address">Num of copies</label>
               <input type="text"
               class="form-control" name="copies" id="copies"  placeholder="copies" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="address">Current Date</label>
               <input type="date"
               class="form-control" name="current_date" id="Curent date"  placeholder="current date" autocomplete="off">
            </div>
           <div class="form-group">
             <label for="ContactNo">Return Date</label>
             <input type="date"
               class="form-control" name="return date" id="return date"  placeholder="return date" autocomplete="off">
           </div>
          
           <button type="submit" name="borrow" class="btn btn-primary" >Submit</button>
           </form>

<?php include("footer.php"); ?>
