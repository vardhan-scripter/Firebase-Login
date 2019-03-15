<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="profile-style.css">
    <title>Profile</title>
</head>
<body>
    <?php session_start();
          $row = $_SESSION['row'];
     ?>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="profile-img">
                        <img src="<?php echo $row['image'] ?>" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            <?php echo $row['fullname']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <br><br>
                        <h2>
                            <?php echo $row['fullname']; ?>
                        </h2><br>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="index.php" class="logout-link">Logout</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>UserName</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $_SESSION['username']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $row['password']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>RollNo</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $row['rollno']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Course</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $row['course']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Branch</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $row['branch']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Age</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $row['age']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>           
    </div>
</body>
</html>