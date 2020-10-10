<?php include("header.php"); ?>
<?php require_once 'db.php'; ?>
<?php
if (isset($_POST["delete"])){
    $sql2 = "DELETE FROM tbl_book_info WHERE ISBN=".$_POST['isbn'];
    $result2 = mysqli_query($conn,$sql2);
    if($result2){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Deleted Successfully!</strong>
    </div>';
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>Error!</strong>
</div>';
    }
}
    
    ?>
<?php
$sql = "SELECT * FROM tbl_book_info";
$result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
?>
 
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Subject</th>
                <th>title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>add</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                echo '<form action="" method="POST">';
                echo '<tr>';
                echo '<input type="hidden" value='.$row['ISBN'].' name="isbn">';
                echo '<td>'.$row['subject'].'</td>';
                echo '<td>'.$row['title'].'</td>';
                echo '<td>'.$row['author_name'].'</td>';
                echo '<td>'.$row['publisher_name'].'</td>';
                echo "<td><a href='book_insert.php?id=".$row['ISBN']." 'class='btn btn-info'>Add</a></td>";
                echo '<td><input type = "submit" name="delete" value = "DELETE" class = "btn btn-danger"/></td>';


                echo '</tr>';

            }
            echo "</form>";
             ?>
            
        </tbody>
    </table>
    <?php
 }
 else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>no record found!</strong>
</div>';
 }
    ?>
    <?php include("footer.php"); ?>