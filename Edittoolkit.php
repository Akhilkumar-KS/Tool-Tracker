

<head>
  <title>Edit Toolkit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../../icon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>


  <style>
    /* .container {
      margin-top: .navbar {
        width: 100% !important;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        z-index: 1;
      } */
      .container {
            padding-top: 30px;
            right: 60px
        }

      .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: gray;
      }

      .dropdown-menu {
        overflow-Y: scroll;
        height: 200px;
      }

      .dataTables_wrapper {
        overflow-x: scroll !important;
      }

      .swal2-confirm{
        background-color:#343a40!important;
      }
  </style>
</head>


<body>
  
  <?php
    include "navbar.php"
  ?>
  

<div class="container">
<br><h1><b>Edit Toolkit</b></h1><br><br>
<table id="customers" class="table table-hover ">
  <thead>
  <!-- <tr> -->
  <tr class="table-warning">
    <th>ID</th>
    <th>Name</th>
    <th>Tools Available</th>
    <th>Update</th>
  </tr>
    </thead>

  <?php
include "connect.php";
session_start();
$userid= $_SESSION["id"];
$sql = "SELECT id,toolkitname FROM toolkit where userid=$userid";
$result = mysqli_query($link, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    $toolkitid=$row["id"];
    $toolkitname=$row["toolkitname"];
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["toolkitname"].'</td>';
    {
      echo '<td>';
      echo '<button type="button" class=" btn btn- btn-secondary " data-toggle="modal" data-target="#myModal'.$toolkitid.'">';
      echo 'Edit';
      echo '</button>';
      include "modal.php";
      echo '</td>';
    }
    echo '<td>';
    echo("<a class=' btn btn- btn-secondary' href='edit.php?id=$toolkitid;'>Reupload   </a>  ");
    //echo("<a class=' btn btn- btn-secondary' href='delete.php?id=$toolkitid;'>Delete   </a>  ");
    echo("<button class='btn btn- btn-danger' onclick='del($toolkitid)'>Delete</button>");
    echo '</td>';
    echo '</tr>';

  }
} else {
  echo "0 results";
}

mysqli_close($link);
?>
</table></div>
</Body>
</html>
<script>
    function del(toolkitid) {

        $.ajax({
            type: "GET",
            url: "delete.php",
            data: {"toolkitid":toolkitid}, // serializes the form's elements.
            success: function (data) {
                if (data == "done") {
                    Swal.fire(
                        'Success!',
                        'Record deleted successfully',
                        'success'
                    ).then((result) => {
                        window.location.reload();
                    });
                }
                else {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Error deleting record: '
                    });
                }
            },
            error: function (data) {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                });
            }
        });


    }

    function delt(toolid) {

            $.ajax({
                type: "GET",
                url: "deletetool.php",
                data: {"toolid":toolid}, // serializes the form's elements.
                success: function (data) {
                    if (data == "done") {
                        Swal.fire(
                            'Success!',
                            'Record deleted successfully',
                            'success'
                        ).then((result) => {
                            window.location.reload();
                        });
                    }
                    else {
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Error deleting record: '
                        });
                    }
                },
                error: function (data) {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    });
                }
            });


}
$("#form").submit(function (e) {

e.preventDefault(); // avoid to execute the actual submit of the form.

var form = $(this);
var url = form.attr('action');

$.ajax({
    type: "GET",
    url: url,
    data: form.serialize(), // serializes the form's elements.
    success: function (data) {
        if (data == "done") {
            Swal.fire(
                'Success!',
                'Tool added successfully',
                'success'
            ).then((result) => {
                window.location.replace("Edittoolkit.php");
            });
        }
        else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Tool not added'
            });
        }
    },
    error: function (data) {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
        });
    }
});


});
</script>  



            
            



            
    