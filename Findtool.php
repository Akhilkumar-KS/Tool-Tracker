<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <title>
       Find Tool 
    </title>
    <style>
        body {
            height: 100vh;
        }

        nav {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 20px 0 rgba(0, 0, 0, 0.19);
            height: 50px;
        }

        input[type=date] {
            width: 180px;
            margin-left: auto;
        }



        .form-control {
            height: 36px;
        }

        .container {
            padding-top: 30px;
        }

        .border {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .row {
            margin-top: 8px;
            height: 40px;
        }

        .section-heading {
            padding: 0px 5px 0px 5px;
            font-weight: bold;
            position: absolute;
            background-color: white;
            margin-top: -22px;
        }

        .itemTotal {
            font-size: large;
            height: 100%;
        }

        .itemTotal .contents {
            margin-top: 5px;
        }

        .itemTotal .text {
            display: inline;
            font-weight: bold;
        }

        .itemTotal #itemTotal {
            display: inline;
        }


        .table {
            white-space: nowrap
        }


        .itemTable {
            border-radius: 5px;
            overflow-x: scroll;
            overflow-y: scroll;
            height: 250px;
            background-color: rgba(0, 123, 255, 0.18);
            margin-bottom: 20px;
        }

        .end {
            display: flex;
            justify-content: space-between;
        }

        .endCenter {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body>
    
    <?php
    
    

        include "navbar.php"
    ?>

    <div class="container">
        <div class="container">
            <h1><B>Find Tool</B></h1><br> 
          <form  action="findtools.php" method="POST" id="form" enctype="multipart/form-data">
             <div class="form-group">
                <label for="sel1">Available Tools (select one):</label>
                    <select class="form-control" id="tool" name="tool">
                        <option>Chisel</option>
                        <option>File</option>
                        <option> Hammer</option>
                        <option> Plier</option>
                        <option> Saw</option>
                        <option>Screwdriver</option>
                        <option> Spiritlevel</option>
                        <option> Tapemeasure</option>
                        <option>Utilityknife</option>
                        <option>Wrench</option>

                    </select>
            </div>
            
                <!-- <div class="fallback">
                    <input name="file" type="file" id="image" multiple /></div>  -->
                    <div class="form-group">
                        <label>Upload image :</label>
                        <div class="custom-file">
                          <input type="file" name="fileToUpload" class="custom-file-input form-control" id="fileToUpload">
                          <label class="custom-file-label" for="customFile">Choose image</label>
                        </div>
                      </div>
                     
            
             <br>
           <!-- <div><button type="submit" form="form" name="submit" class=" btn btn-block btn-dark">Find Tool</button> </div> -->
           <div><button type="button" form="form" name="submit" class=" btn btn-block btn-dark" onclick="upload()">Find Tool</button> </div>
        </div>
    </form>
                
</body>

</html>
<script>
    function upload() {


    var fd = new FormData();

    var files = $('#fileToUpload')[0].files;
    
    // Check file selected or not
    if(files.length > 0 ){
       fd.append('fileToUpload',files[0]);
       fd.append('tool',$('#tool').val());

       $.ajax({
          url: 'findtools.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(data){


            if (data == "done") {
                    Swal.fire(
                        'Success!',
                        'Tool Founded',
                        'success'
                    ).then((result) => {
                        window.location.replace("findtool.php");
                    });
                }
                else {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Tool Not found'
                    });
                }


            //  if(response != 0){
            //     $("#img").attr("src",response); 
            //     $(".preview img").show(); // Display image element
            //  }else{
            //     alert('file not uploaded');
            //  }
          },
       });
    }else{
       alert("Please select a file.");
    }


    }



    $("#form").submit(function (e) {    

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url = form.attr('action');

        // var formData = new FormData();
        // formData.append("userfile", fileInputElement.files[0]);

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            contentType: false,
              processData: false,
              enctype: 'multipart/form-data',
            success: function (data) {
                if (data == "done") {
                    Swal.fire(
                        'Success!',
                        'Tool Founded',
                        'success'
                    ).then((result) => {
                        window.location.replace("findtool.php");
                    });
                }
                else {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Tool Not found'
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


