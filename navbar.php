<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADVENTOURS</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <img src ="/ADVENTOUR - ADMIN/assets/imgs/logo.png" class ="logo" height="200px" width="400px">
                    </a>
                </li>

                <li>
                    <a href="/ADVENTOUR - ADMIN/dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/ADVENTOUR - ADMIN/pages/user/userprofile.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="/ADVENTOUR - ADMIN/pages/contents/touristatrraction.php">
                        <span class="icon">
                            <ion-icon name="create"></ion-icon>
                        </span>
                        <span class="title">Contents</span>
                    </a>
                </li>

                <li>
                    <a href="/ADVENTOUR - ADMIN/pages/bookings/tour.php">
                        <span class="icon">
                            <ion-icon name="book"></ion-icon>
                        </span>
                        <span class="title">Bookings</span>
                    </a>
                </li>

                <li>
                    <a href="/ADVENTOUR - ADMIN/pages/notification/pushnotification.php">
                        <span class="icon">
                            <ion-icon name="notifications-outline"></ion-icon>
                        </span>
                        <span class="title">Notification</span>
                    </a>
                </li>

                <li>
                    <a href="/ADVENTOUR - ADMIN/pages/analytics/analytics.php">
                        <span class="icon">
                            <ion-icon name="analytics"></ion-icon>
                        </span>
                        <span class="title">Analytics & Reporting</span>
                    </a>
                </li>

                <li>
                    <a href="partnership.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Business Partnerships</span>
                    </a>
                </li>

                <li>
                    <a href="settings.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="feedback.php">
                        <span class="icon">
                            <i class="fa-light fa-bullhorn"></i>
                        </span>
                        <span class="title">Feedback & Survey</span>
                    </a>
                </li>

                <li>
                    <a href="help.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="page-header">  
                    <div class="pagetitle">
                    <div class="submenu">
                        <?php if (isset($pageTitle) && $pageTitle === "DASHBOARD"): ?>
                            <p>DASHBOARD</p>
                        <?php elseif (isset($pageTitle) && $pageTitle === "USER MANAGEMENT"): ?>
                            <p>USER MANAGEMENT / <span id="subpageTitle">User Profile</span></p>
                            <div class="submenu">
                                <div class="vertical-navbar">
                                    <ul>
                                        <li><a href="#" onclick="changeSubpageTitle('User Profile')">User Profile</a></li>
                                        <li><a href="#" onclick="changeSubpageTitle('Authentication')">Authentication</a></li>
                                        <li><a href="#" onclick="changeSubpageTitle('User Data')">User Data</a></li>
                                        <li><a href="#" onclick="changeSubpageTitle('User Support')">User Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        <!-- <?php else: ?> -->
                            <!-- <p><?php echo isset($pageTitle) ? $pageTitle : "DASHBOARD"; ?></p> -->
                        <!-- <?php endif; ?> -->
                        <!-- Repeat the above structure for other page titles and subpages -->
                    </div>
                    </div>
                    <div class="profile">
                    <i class="fa-solid fa-user" style="color: white;"></i><p>ADMINISTRATOR</p><i class="fa-solid fa-caret-down" style="color: white;"></i>
                    <div class="profile-menu">
                        <ul>
                            <li>My Profile</li>
                            <li>Settings</li>
                            <li>Logout</li>
                        </ul>
                    </div>
                    </div>
                </div>

            </div>

           
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function changeSubpageTitle(subpageTitle) {
            $('#subpageTitle').text(subpageTitle);
        }
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>