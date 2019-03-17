<?php
session_start();
if(!isset($_SESSION['user']))  {
    header('location:index.php');
}
?>


<!DOCTYPE html>
<html>
      <head>
        <title>Eduversity Education Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            

    </head>
    <?php include_once './includes/global_css.php'; ?>
    <body>


        <!-- header -->
        <header>
            <?php include_once './includes/header2.php'; ?>
        </header>
        <!-- //header -->
        
        <!-- inner banner -->
        <?php include_once './includes/inner_banner.php'; ?>
        <!-- inner banner -->

        <!-- breadcrumbs -->
        <?php include_once './includes/breadcrumbs.php'; ?>	
        <!-- //breadcrumbs -->
        <!-- contact -->
        <?php include_once './includes/contact2.php'; ?>	
        <!-- //contact -->
        
        <div class="container">
            

            <table class="table  table-bordered table-hover">

                <thead class="thead-dark">

                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>description</th>
                        <th>opt</th>
                        <th width="100px">Action</th>

                    </tr>
                </thead>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "form";

// Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT first_name,last_name,email_id,phone_no,description,opt,id FROM contact";
                $result = mysqli_query($conn, $sql);    
                     

             
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                
                <tr id="<?php echo $row['id'] ?>">
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email_id'] ?></td>
                <td><?php echo $row['phone_no'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['opt'] ?></td>
                <td><button class="btn btn-danger btn-sm remove">Delete</button></td>
            </tr>


        <?php } ?>


    </table>
</div> <!-- container / end -->


        </div>



        <!-- footer -->	
        <footer>
            <?php include_once './includes/footer.php'; ?>
        </footer>
        <!-- footer -->
        <!-- Login modal -->
        <?php include_once './includes/login.php'; ?>
        <!-- //Login modal -->

        <!-- Register modal -->
        <?php include_once './includes/register.php'; ?>
        <!-- //Register modal -->

        <!-- Gloabl JS Start -->
        <?php include_once './includes/global_js.php'; ?>
        <!-- Gloabl JS End -->

        <!--bootstrap table-->

        

    </body>
           <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: '/delete.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });


</script>

</html>