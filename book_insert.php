<?php include("header.php"); ?>
<?php require_once 'db.php'; ?>
<?php

if(isset($_POST["submit"])){
    $subject = $_POST['subject'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $isbn = $_POST['isbn'];
    $copyright = $_POST['copyright'];
    $edition_no = $_POST['edition_num'];
    $page_num = $_POST['page_num'];
    $copies_no = $_POST['num_copies'];
    $library_name = $_POST['library_name'];
    $shelf_no = $_POST['shelf_no'];
    if(empty($subject) || empty($title) || empty($author) || empty($publisher) || empty($isbn) || empty($copyright) || 
    empty($edition_no) || empty($page_num) || empty($copies_no) || empty($library_name) || empty($shelf_no)){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
          </button>
          <strong> Field incomplte!</strong>
      </div>';
      }
    else {
$sql = "INSERT INTO tbl_book_info (subject,title,author_name,publisher_name,ISBN,book_copyright,edition_num,page_num,num_copies,library_name,shelf_no) 
VALUES ('$subject','$title',' $author','$publisher','$$isbn','$copyright','$edition_no','$page_num','$copies_no','$library_name','$shelf_no')";
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
 else{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
  </button>
  <strong> Error!</strong>
</div>';
    }
  }

}
 ?>
<div class="container">
       <div class="col-md-3"></div>
       <div class="col-md-6">
           <form action="" method="POST">
              <input type="hidden">
           <div class="form-group">
             <label for="firstname">The Subject of Book</label>
             <input type="text"
               class="form-control" name="subject" id="subject"  placeholder="The Subject of Book" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="firstname">The Book Title</label>
             <input type="text"
               class="form-control" name="title" id="title"  placeholder="title of book" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="firstname">The name of author</label>
             <input type="text"
               class="form-control" name="author" id="author"  placeholder="Name of author" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="firstname">The name of publisher</label>
             <input type="text"
               class="form-control" name="publisher" id="publisher"  placeholder="Publisher" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="firstname">ISBN</label>
             <input type="text"
               class="form-control" name="isbn" id="isbn"  placeholder="isbn" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="firstname">Copyright For the book</label>
             <input type="text"
               class="form-control" name="copyright" id="copyright"  placeholder="Copyright" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="firstname">Edition Number</label>
             <input type="text"
               class="form-control" name="edition_num" id="edition_num"  placeholder="Edidition Number" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="firstname">Number Of pages</label>
             <input type="text"
               class="form-control" name="page_num" id="page_num"  placeholder="Number of pages" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="firstname">Number Of Copies</label>
             <input type="text"
               class="form-control" name="num_copies" id="num_copies"  placeholder="isbn" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="firstname">Library name</label>
             <input type="text"
               class="form-control" name="library_name" id="library_name"  placeholder="Library name" autocomplete="off">
           </div>
           <div class="form-group">
             <label for="firstname">Shelf No</label>
             <input type="text"
               class="form-control" name="shelf_no" id="shelf_no"  placeholder="Shelf_no" autocomplete="off">
           </div>
           <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
           </form>
         </div>
         <div class="col-md-3"></div> 
   </div>
<?php include("footer.php"); ?>