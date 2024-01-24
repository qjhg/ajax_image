<?php
include("connection.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="add-user">
        Add User
    </button>

    <!-- Modal -->
    <div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1 class="offset-4 mt-0">Sign Up</h1>
                    <form class="offset-2" id="add_form" enctype="multipart/form-data">
                        <div class="col-md-10">
                            <label for="validationCustom01" class="form-label"><strong>Name</strong></label>
                            <input type="text" class="form-control" id="validationCustom01" value="" name="name">

                        </div>
                        <div class="col-md-10">
                            <label for="validationCustom02" class="form-label"><strong>Email</strong></label>
                            <input type="email" class="form-control" id="validationCustom02" value="" name="email">
                        </div>
                        <div class="col-md-10">
                            <label for="validationCustomUsername" class="form-label"><strong>Password</strong></label>
                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="password">
                        </div>
                        <div class="col-md-10">
                            <label for="validationCustomUsername" class="form-label"><strong>Image</strong></label>
                            <input type="file" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="image">
                        </div>
                        <div class="col-md-10">
                            <label for="validationCustom03" class="form-label"><strong>City</strong></label>
                            <input type="text" class="form-control" id="validationCustom03" name="city">
                        </div><br>
                        <div class="col-12">
                            <button class="btn btn-primary" name="submit" id="formSubmit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <///////view data//////> -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Image</th>
                <th scope="col">City</th>
                <th scope="col">Action</th>


            </tr>
        </thead>
        <tbody>
            <?php
            $select = "SELECT * FROM `ajax_project_image`";
            $result = mysqli_query($connection, $select);
            while ($fetch = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $fetch['id'] ?></td>
                    <td><?php echo $fetch['name'] ?></td>
                    <td><?php echo $fetch['email'] ?></td>
                    <td><?php echo $fetch['password'] ?></td>
                    <td>
                   <img src="<?php echo './images/'.$fetch['image'] ?>" alt="" width="90px" height="80px" >
                      
                    </td>
                    <td><?php echo $fetch['city'] ?></td>
                    <td>
                        <button data-id=<?php echo $fetch['id']?> class="btn btn-danger" id="delete-id">Delete</button>
                        <button data-update=<?php echo $fetch['id']?> class="btn btn-primary" id="edit-id">Edit</button>

                    </td>

                </tr>

            <?php
            }

            ?>
        </tbody>
    </table>

                     <!-- <///////edit the table/////> -->

    <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1 class="offset-4 mt-0">Edit User</h1>
                    <form class="offset-2" id="update_form" enctype="multipart/form-data">
                        <div class="col-md-10">
                            <label for="validationCustom01" class="form-label"><strong>Name</strong></label>
                            <input type="text" class="form-control" id="edit_name" value="" name="name">

                        </div>
                        <div class="col-md-10">
                            <label for="validationCustom02" class="form-label"><strong>Email</strong></label>
                            <input type="email" class="form-control" id="edit_email" value="" name="email">
                        </div>
                       <input type="hidden" value="" name="id" id="edit_id">
                        <div class="col-md-10">
                            <label for="validationCustom03" class="form-label"><strong>City</strong></label>
                            <input type="text" class="form-control" id="edit_city" name="city">
                        </div><br>
                        <div class="col-12">
                            <button class="btn btn-primary" name="submit" id="update_id">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $(document).on("click", "#add-user", function() {
                $("#add-modal").modal('show');
            })
            $(document).on("click", "#formSubmit", function(e) {
                e.preventDefault();
                var data = new FormData(add_form)
                $.ajax({
                    url: "./registration.php",
                    method: "POST",
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        if (resp == 200) {
                            $("#add-modal").modal('hide');
                            window.location.reload();
                        } else {
                            alert("Something went wrong!");
                        }
                    },
                    error: function(error) {
                        alert(error)
                    },
                })
            })
            $(document).on("click","#delete-id",function(){
               var data=$(this).data("id");
               var delete_id=this;
               $.ajax({
                url:"./delete.php",
                method:"GET",
                data:{"data":data},
                success:function(resp){
                   if(resp==200){
                    $(delete_id).closest("tr").fadeOut();
                   }else{
                    alert("not delete the data");
                   }
                },
                error:function(error){
                    alert(error)
                }
               })
            })
            $(document).on("click","#edit-id",function(){
                var edit_data=$(this).data("update");
                $.ajax({
                    url:"./edit.php",
                    method:"GET",
                    data:{"edit_data":edit_data},
                    dataType:'json',
                    success:function(resp){
                    $("#edit-modal").modal('show')
                    $('#edit_name').val(resp.name);
                    $('#edit_email').val(resp.email);
                    $('#edit_city').val(resp.city);
                    $('#edit_id').val(resp.id);

                    },
                    error:function(error){
                        alert(error);
                    }
                })
            })
            $(document).on("click","#update_id",function(e){
                e.preventDefault();
               var update_form_data=new FormData(update_form)
               $.ajax({
                url:'./update.php',
                method:"POST",
                data:update_form_data,
                contentType:false,
                processData:false,
                success:function(resp){
                    if(resp==200){
                        $("#add-modal").modal('hide');
                        window.location.reload();
                    }else{
                        alert("data not updated")
                    }
                },
                error:function(error){
                    alert(error)
                },
               })
            })
        })
    </script>
</body>

</html>