<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="assets/css/adminstyle.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>
            <span class="logo_name">STATE</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="admin.html">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Home</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-user-circle"></i>
                        <span class="link-name"><P></P>Profil</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-calendar-alt"></i>
                        <span class="link-name">Event</span>
                    </a></li>
                <!-- <li><a href="anggota.php">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Anggota</span>
                        
                    </a></li> -->
                
                <!-- <li><a href="#">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Comment</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-share"></i>
                        <span class="link-name">Share</span>
                    </a></li> -->
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>
                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <!-- <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Rincian Anggota</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-user"></i>
                        <span class="text">Total Anggota</span>
                        <span class="number">300</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-calendar-alt"></i>
                        <span class="text">Event</span>
                        <span class="number">30</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text"></span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div> -->
            <?php
    include 'koneksi.php';
    $sql = "SELECT * FROM admin";
    $result = mysqli_query($conn, $sql);
    ?>
    
    <section class="dashboard">
        <div class="activity">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">Recent Activity</span>
            </div>
            <div class="data-row title-row">
                <span class="data-title">Name</span>
                <span class="data-title">Email</span>
                <span class="data-title">Joined</span>
                <span class="data-title">Type</span>
                <span class="data-title">Status</span>
            </div>
            <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="data-row">
                     <span class="data-list"><?php echo $row['username']; ?></span>
                     <span class="data-list"><?php echo $row['password']; ?></span>
                     <span class="data-list">-</span>
                     <span class="data-list">-</span>
                     <span class="data-list">-</span>
                </div>
            </div>
        <?php
        }
    } else {
        echo "Tidak Ada Data Anggota.";
    }
    ?>
        </div>
        </div>
    </section>
    <script src="assets/js/scirp.js"></script>
</body>

</html>