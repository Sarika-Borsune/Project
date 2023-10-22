<?php

include('_config.php');


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $usercontact = $_POST['usercontact'];
    $useremail = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];

    $img1 = $_POST['Img1'];
    $img2 = $_POST['Img2'];
    $img3 = $_POST['Img3'];
    $img4 = $_POST['Img4'];
    $img5 = $_POST['Img5'];




    if ($img1 != '' || $img2 != '' || $img3 != '' || $img4 != '' || $img5 != '') {
        $sql = "SELECT * FROM `users` WHERE `_useremail` = '$useremail' OR `_usercontact` = '$usercontact'";
        $query = mysqli_query($con, $sql);
        if ($query) {
            $count = mysqli_num_rows($query);
            if ($count > 0) {
                echo "<script>alert('User Already Exists')</script>";
            } else {
                $sql = "INSERT INTO `users`(`_username`, `_useremail`, `_usercontact`, `_userpassword`, `_img1`, `_img2`, `_img3`, `_img4`, `_img5`) VALUES ('$username','$useremail', '$usercontact','$userpassword' ,'$img1'  ,'$img2' ,'$img3' ,'$img4' ,'$img5' )";

                $query = mysqli_query($con, $sql);
                if ($query) {
                   echo "<script>
                   alert('Registration Successful ! You May Login Now..');
                   window.location.href='_login.php';
                   </script>";
                   
                   
                }
                
            }
        }
    } else {
        echo "<script>alert('Select 5 Images')</script>";
    }
    

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>GPA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <!--<link rel="shortcut icon" href="images/favicon.png" />-->
</head>

<style>
    .imgSelect {
        width: 70px;
        height: 70px;
        margin: 0 10px;
        border-radius: 3px;
        cursor: pointer;
        transition: 0.3s;
    }

    .imgSelect.active {
        filter: blur(70px);
        transition: 0.3s;
        transform: scale(0.8);
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.2);
    }
</style>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-8 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                            <center><a class="navbar-brand" href="#myPage" style="font-size:20px; color:#C94B4B";><b>Graphical Password Autentication<b></a></center>
                                <p><center><b> Sign Up to your Account..</b></center>
                                
                            
                                <!--<img src="images/lock5.jpg" height="60px" alt="logo">-->
                                
                                
                                
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-bold" style="float: right;">Select Only 5 Images</h6>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" method="POST" action="">


                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" id="username"
                                                name="username" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-lg" id="usercontact"
                                                name="usercontact" placeholder="Contact" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-lg" id="useremail"
                                                name="useremail" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg"
                                                id="userpassword" name="userpassword" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" style="display: none;">
                                        <div class="form-group">
                                            <input type="text" class="form-control imgdb form-control-lg" name="Img1"
                                                placeholder="Img-1">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control imgdb form-control-lg" name="Img2"
                                                placeholder="Img-2">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control imgdb form-control-lg" name="Img3"
                                                placeholder="Img-3">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control imgdb form-control-lg" name="Img4"
                                                placeholder="Img-4">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control imgdb form-control-lg" name="Img5"
                                                placeholder="Img-5">
                                        </div>
                                    </div>

                                    <div class="col-lg">
                                        <div class="row" id="imgBody">




                                        </div>


                                    </div>

                                </div>

                                <div class="mt-3">
                                    <input type="submit" value="Sign Up" name="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        href="index.html" id="signInBtn">
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="./_login.php" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>

    
    <script>

        let imgArray = [
            {
                imgurl: "https://images.pexels.com/photos/1059161/pexels-photo-1059161.jpeg?auto=compress&cs=tinysrgb&w=600",
                imgId : 1,
            },
            {
                imgurl: "https://images.pexels.com/photos/4814924/pexels-photo-4814924.jpeg?auto=compress&cs=tinysrgb&w=600",
                imgId : 2,
            },
            {
                imgurl: "https://images.pexels.com/photos/12604597/pexels-photo-12604597.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load",
                imgId : 3,
            },
            {
                imgurl: "https://images.pexels.com/photos/10765221/pexels-photo-10765221.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load",
                imgId : 4,
            },
            {
                imgurl: "https://images.pexels.com/photos/6102583/pexels-photo-6102583.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load",
                imgId : 5,
            },
            {
                imgurl: "https://images.pexels.com/photos/3410286/pexels-photo-3410286.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load",
                imgId : 6,
            },
            {
                imgurl: "https://images.unsplash.com/photo-1596491365022-9a23584889b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60",
                imgId : 7,
            },
            {
                imgurl: "https://images.pexels.com/photos/732548/pexels-photo-732548.jpeg?auto=compress&cs=tinysrgb&w=600",
                imgId : 8,
            },
            {
                imgurl: "https://images.pexels.com/photos/405202/pexels-photo-405202.jpeg?auto=compress&cs=tinysrgb&w=600",
                imgId : 9,
            },
            {
                imgurl: "https://images.pexels.com/photos/14365681/pexels-photo-14365681.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load",
                imgId : 10,
            },
            {
                imgurl: "https://images.pexels.com/photos/1068875/pexels-photo-1068875.jpeg?auto=compress&cs=tinysrgb&w=600",
                imgId : 11,
            },
            {
                imgurl: "https://images.pexels.com/photos/213207/pexels-photo-213207.jpeg?auto=compress&cs=tinysrgb&w=600",
                imgId : 12,
            },
            {
                imgurl: "https://images.pexels.com/photos/948358/pexels-photo-948358.jpeg?auto=compress&cs=tinysrgb&w=600",
                imgId : 13,
            },
            {
                imgurl: "https://images.pexels.com/photos/982021/pexels-photo-982021.jpeg?auto=compress&cs=tinysrgb&w=600",
                imgId : 14,
            },
            {
                imgurl: "https://images.pexels.com/photos/194101/pexels-photo-194101.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                imgId : 15,
            },
            {
                imgurl: "https://images.pexels.com/photos/923548/pexels-photo-923548.jpeg?auto=compress&cs=tinysrgb&w=600",
                imgId : 16,
            },
            {
                imgurl: "https://images.pexels.com/photos/4430317/pexels-photo-4430317.jpeg?auto=compress&cs=tinysrgb&w=600",
                imgId : 17,
            },
            {
                imgurl: "https://images.pexels.com/photos/942772/pexels-photo-942772.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                imgId : 18,
            },
            {
                imgurl: "https://images.unsplash.com/photo-1670100053465-aacb32bf96ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzMnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
                imgId : 19,
            },
            {
                imgurl: "https://images.unsplash.com/photo-1669995128301-eb4422cc1672?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzNHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
                imgId : 20,
            },
            {
                imgurl: "https://images.unsplash.com/photo-1557180295-76eee20ae8aa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80",
                imgId : 21,
            },
            {
                imgurl: "https://images.unsplash.com/photo-1669862643738-62132527f7b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0MHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
                imgId : 22,
            },
            {
                imgurl: "https://images.unsplash.com/photo-1670132898415-926edddb82d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1NHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
                imgId : 23,
            },
            {
                imgurl: "https://images.unsplash.com/photo-1670105790509-9461e1e711bb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzOHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
                imgId : 24,
            },
            {
                imgurl: "https://images.unsplash.com/photo-1657299143549-73fb118d68aa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHw1Nnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60",
                imgId : 25,
            },
        ]

        let imgBody = document.querySelector('#imgBody');




        function shuffleArray(array) {
            for (var i = array.length - 1; i > 0; i--) {

                // Generate random number
                var j = Math.floor(Math.random() * (i + 1));

                var temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }

            return array;
        }


        let newImgArray = shuffleArray(imgArray);

        newImgArray.map((curEle) => {

            let eleDiv = document.createElement("div");
            eleDiv.classList.add('form-group');

            let imgDiv = document.createElement("img");

            imgDiv.src = `${curEle.imgurl}`;
            imgDiv.classList.add('imgSelect');
            imgDiv.id = `${curEle.imgId}`;


            eleDiv.append(imgDiv);

            imgBody.append(eleDiv);

        })




        let allImage = document.querySelectorAll('.imgSelect');

        let inputArray = [];

        allImage.forEach((item) => {

            item.addEventListener('click', (e) => {
                e.target.classList.toggle('active');
                let id = e.target.id;

                let present = inputArray.indexOf(id)

                if (present > -1) {
                    inputArray.splice(present, 1)
                } else {
                    inputArray.push(id);
                }

            })

        })

        let signInBtn = document.getElementById('signInBtn');
        let allImgDb = document.querySelectorAll('.imgdb');

        signInBtn.addEventListener('click', (e) => {
            // e.preventDefault();
            if (inputArray.length > 5) {
                alert("Select Only 5 Images")
            } else if (inputArray.length < 5) {
                alert("Select 5 Images")
            } else {

                for (let i = 0; i < inputArray.length; i++) {
                    allImgDb[i].value = inputArray[i];
                }

            }
            

        })





    </script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>