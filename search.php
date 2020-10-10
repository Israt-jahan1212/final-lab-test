<?php include("header.php"); ?>


<?php require_once 'db.php'; ?>
<form class="form-inline my-2 my-lg-0"action="" method="post">
                <input class="form-control mr-sm-2" type="text" name ="bookinfo" placeholder="Title/ISBN/Author name">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" >Search Book</button>
            </form>
             <button type="button" class="btn btn-primary|secondary|success|danger|warning|info|light|dark btn-lg|btn-sm"><a href="book.php">All Books</a></button>
<?php
          if(isset($_POST['search'])){
            $srch=$_POST['bookinfo'];
            $sql = "SELECT * FROM tbl_book_info  WHERE  title=('$srch')  OR (ISBN='$srch' OR  author_name='$srch')";
            $info=mysqli_query($conn,$sql);
            if($info){
            $fetch_info = mysqli_fetch_assoc($info);
            
        ?>
        

        <div class=" d-flex justify-content-center"><p class="pt-5 font-weight-bolder userfont">Book Information</p>
                                  

    <table class="table table-bordered text-center mt-5">
     
      <tbody>
      
        <tr>
          <td class="py-5">Book Name</td>
          <td class="py-5"><?php echo $fetch_info['subject'];?></td>
        </tr>
        <tr>
          <td class="py-5">Publisher Name</td>
          <td class="py-5"><?php echo $fetch_info['title'];?></td>
        </tr>
        <tr>
          <td class="py-5">Publisher Name</td>
          <td class="py-5"><?php echo $fetch_info['publisher_name'];?></td>
        </tr>
        <tr>
          <td class="py-5">Author Name</td>
          <td class="py-5"><?php echo $fetch_info['author_name'];?></td>
        </tr>
        <tr>
          <td class="py-5">ISBN</td>
          <td class="py-5"><?php echo $fetch_info['ISBN'];?></td>
        </tr>
        <tr>
          <td class="py-5">Edition</td>
          <td class="py-5"><?php echo$fetch_info['edition_num'];?></td>
        </tr>
        
      </tbody>
      <?php
      ?>
    </table>
            <?php 
            }
            else{  ?>
    <p class="text-center">NO Order Found!</p>
   <?php } 
   }
   ?>
   <?php include("footer.php"); ?>
