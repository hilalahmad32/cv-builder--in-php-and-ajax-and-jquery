<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Cv Builder</title>
</head>

<body>
    <!-- <div class="loader">
        <img src="images/1488.gif" alt="">
    </div> -->
<div class="container my-4">
    <div class="flex-end">
        <a href="php/logout.php"><button class="btn btn-danger">Logout</button></a>
    </div>
</div>
    <div class="container">
        <div class="header-wreapper">

            <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-12">
                    <form action="">
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <label for="">Enter Company Name</label>
                                <input type="text" name="c_name" id="c_name" class="form-control form-control-lg">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Enter Creative Name</label>
                                <input type="text" name="cr_name" id="cr_name" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <label for="">Enter Profile</label>
                                <input type="file" name="profile" id="profile" class="form-control form-control-lg">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Enter Name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <label for="">Enter DOB</label>
                                <input type="text" name="dob" id="dob" class="form-control form-control-lg">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Enter Job</label>
                                <input type="text" name="job" id="job" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <label for="">Enter Email</label>
                                <input type="text" name="email" id="email" class="form-control form-control-lg">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Enter Skype</label>
                                <input type="text" name="skype" id="skype" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="formg-group">
                            <label for="">Enter Skype</label>
                            <textarea name="about" id="about" cols="30" rows="10" class="form-control form-control-lg"></textarea>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <label for="">Enter Contact Number</label>
                                <input type="text" name="contact" id="contact" class="form-control form-control-lg">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Enter Full Address</label>
                                <input type="text" name="address" id="address" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="formg-group">
                            <label for="">Enter Language</label>
                            <input type="text" name="lang" id="lang" class="form-control form-control-lg">
                        </div>
                        <div class="formg-group">
                            <label for="">Enter Education</label>
                            <textarea name="edu" id="edu" cols="30" rows="10" class="form-control form-control-lg"></textarea>
                        </div>
                        <div class="formg-group">
                            <label for="">Enter Experiance</label>
                            <textarea name="exp" id="exp" cols="30" rows="10" class="form-control form-control-lg"></textarea>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-4">
                                <label for="">Photoshop Skill</label>
                                <input type="number" value="0" name="photoshop" id="photoshop" class="form-control form-control-lg">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Figma Skill</label>
                                <input type="number" value="0" name="figma" id="figma" class="form-control form-control-lg">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Adobe Xd</label>
                                <input type="number" value="0" name="xd" id="xd" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-4">
                                <label for="">Javascirpt</label>
                                <input type="number" value="0" name="js" id="js" class="form-control form-control-lg">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Laravel</label>
                                <input type="number" value="0" name="lv" id="lv" class="form-control form-control-lg">
                            </div>
                            <div class="col-sm-4">
                                <label for="">React</label>
                                <input type="number" value="0" name="re" id="re" class="form-control form-control-lg">
                            </div>
                        </div>

                        <div class="download">
                            <button class="btns" id="download">
                                Download Cv
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-8 col-md-8 col-sm-12">
                    <div class="container" id="content">
                        <div class="row">
                            <div class="col-md-3 text-center col-md-12">
                                <div class="profile">
                                    <div class="profile-name">
                                        <span class="name" id="c_names">Compnay Name</span> <br>
                                        <span class="job" id="cr_names">Creative Desinger</span>
                                    </div>
                                    <div class="profile-image">
                                        <img src="images/profile.jpg" id="profiles" class="image" alt="">
                                    </div>
                                    <div class="profile-information">
                                        <ul>
                                            <li>Name : <span class="info" id="names"> Hilal
                                                    ahmad</span></li>


                                            <li>BirthDay : <span class="info" id="dobs">
                                                    06-June-2004</span></li>


                                            <li>Job : <span class="info" id="jobs"> Frelancer</span></li>
                                            <li>Email : <span class="info" id="emails">
                                                    ahilal205@gmail.com</span></li>


                                            <li>Skype : <span class="info" id="skypes">
                                                    ahilal205@gmail.com</span></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-8 col-md-12 cv-content mt-5">
                                <div class="">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h1 class="heading">About me</h1>
                                            <p class="para" id="abouts">
                                                Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit. Officiis repellat
                                                sequi
                                                blanditiis saepe expedita, voluptas
                                                voluptatem illum error distinctio
                                                architecto
                                                voluptatum optio sed nemo quam cum unde
                                                id,
                                                dolores ducimus.
                                                Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit. Officiis repellat
                                                sequi
                                                blanditiis saepe expedita, voluptas
                                                voluptatem illum error distinctio
                                                architecto
                                                voluptatum optio sed nemo quam cum unde
                                                id,
                                                dolores ducimus.
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact">
                                                <h1 class="heading">contact</h1>
                                                <ul>
                                                    <li>Mobile : <span class="info" id="contacts">+939857094845</span></li>
                                                    <li>Address : <span class="info" id="addresss">full
                                                            address</span></li>
                                                </ul>
                                            </div>
                                            <div class="lang">
                                                <h1 class="heading">Language</h1>
                                                <ul>
                                                    <li id="langs">English,Urdu,Chines</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="cv-info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h1 class="heading">Education</h1>
                                            <p class="paras" id="edus">
                                                Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Laboriosam ab ducimus
                                                porro itaque veritatis unde aut corporis
                                                soluta ex reprehenderit officiis quia
                                                autem aliquam quod exercitationem
                                                cupiditate, veniam consequatur maiores!
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h1 class="heading">Experiance</h1>
                                            <p class="paras" id="exps">
                                                Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Laboriosam ab ducimus
                                                porro itaque veritatis unde aut corporis
                                                soluta ex reprehenderit officiis quia
                                                autem aliquam quod exercitationem
                                                cupiditate, veniam consequatur maiores!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="cv-skill">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="design-skill mt-4">
                                                <h1 class="heading">Design skill</h1>
                                                <h4>Photoshop</h4>
                                                <div class="progress">
                                                    <div class="progress-bar
                                        progress-bar-striped
                                        progress-bar-animated bg-info" id="photoshops" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 15%"></div>
                                                </div>
                                                <h4 class="mt-5">Figma</h4>

                                                <div class="progress">
                                                    <div class="progress-bar
                                        progress-bar-striped
                                        progress-bar-animated
                                        bg-success" role="progressbar" id="figmas" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                </div>
                                                <h4 class="mt-5">Adobe Xd</h4>

                                                <div class="progress">
                                                    <div class="progress-bar
                                        progress-bar-striped
                                        progress-bar-animated" id="xds" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="coding-skill mt-4">
                                                <h1 class="heading">coding skill</h1>
                                                <h4>Javascirpt</h4>

                                                <div class="progress">
                                                    <div class="progress-bar
                                        progress-bar-striped
                                        progress-bar-animated bg-info" id="jss" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                                <h4 class="mt-5">Laravel</h4>

                                                <div class="progress">
                                                    <div class="progress-bar
                                        progress-bar-striped
                                        progress-bar-animated
                                        bg-success" role="progressbar" id="lvs" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                </div>
                                                <h4 class="mt-5">React</h4>

                                                <div class="progress">
                                                    <div class="progress-bar
                                        progress-bar-striped
                                        progress-bar-animated" id="res" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/action.js"></script>
    <script src="js/html2canvas.min.js"></script>

</body>

</html>