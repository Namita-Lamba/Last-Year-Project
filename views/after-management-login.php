<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Attaching our own style_1 css -->
    <link rel="stylesheet" href="style_1.css">
    <link rel="stylesheet" href="style_2.css">
    

    <!-- font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       
    <title>Document</title>
    
</head>
<body>
    <h1>profile photo</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="profile-pic_after-management-login">
                    <img src="images/BlockChain2_612x408.jpg" id="photo_after-management-login">
                    <input type="file" id="file">
                    <label for="file" id="uploadBtn_after-management-login">Choose Photo</label>
                </div>
                    <script src="app.js"></script>
            </div>
                    
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label><b>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Teacher Id</label>
                    <input type="text" name="teacher id" class="form-control">
                </div>
                <div class="form-group">
                    <label>Current Location</label>
                    <input type="text" name="current location" class="form-control">
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="form-group mx-4 container row col-lg-9">
                    <label>Current Location</label>
                    <input type="text" name="current location" class="form-control">
                </div>

                <div class="form-group mx-4 container row col-lg-9">
                    <label>Current Location</label>
                    <input type="text" name="current location" class="form-control">
    </div> -->

    <!-- Dynamic fields -->
   
    <div class="form-group col-lg-6 col-md-6 col-12 mx-4">
        <label>Working Experience</label>
    </div>
    
    <div class="container_exp mx-5">
        <table class="_table">
            <thead>
                <tr>
                    <th>Duration</th>
                    <th>School</th>
                    <th>Address</th>
                    <th width="50px">
                        <div class="action_container">
                            <button class="success" onclick="create_tr('table_body')">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody id="table_body">
                <tr>
                    <td>
                        <input type="text" class="form_control" placeholder="DD/MM/YY - DD/MM/YY">
                    </td>
                    <td>
                        <input type="text" class="form_control" placeholder="+88177x-xxxxxx">
                    </td>
                    <td>
                        <textarea class="form_control" placeholder="Enter Your Address" name="" id="" cols="30" rows="2"></textarea>
                    </td>
                    <td>
                        <div class="action_container">
                            <button class="danger" onclick="remove_tr(this)">
                                <i class="fa fa-close"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- <div class="container_working mx-4">
        <div class="wrap_working">
            <h2>dynamic field</h2>
            <a href="#" class="add_working ">&plus;</a>
        </div>

        <div class="inp-group">

        </div>
    </div>
     -->
    <!-- <script src="app.js"></script> -->
    
               
</body>
</html> 