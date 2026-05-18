<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar with Grid</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .navbar-grid {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            width: 100%;
        }

        .nav-center {
            display: flex;
            justify-content: center;
        }

        .search-box {
            position: relative;
            width: 550px;
            max-width: 90vw;
        }

        .search-box input {
            padding-left: 35px;
            border-radius: 20px;
        }

        .search-box i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: gray;
        }

        /* Mobile */
        @media (max-width: 992px) {
            .navbar-grid {
                display: block;
            }

            .nav-center {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-light bg-light px-3">
        <div class="navbar-grid">

            <!-- Left (Logo) -->
            <div>
                <a class="navbar-brand" href="dashboard.php">
                    CARE Admin Panel
                </a>
            </div>


            <div>
                <ul class="navbar-nav flex-row gap-5 align-items-center">
                    
                    <li class="nav-item ">
                        <a class="nav-link p-0" href="dashboard.php">Dashboard</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link p-0" href="doctors.php">Manage Doctors</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link p-0" href="specialization.php">Manage Specialization</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link p-0" href="blog.php">Manage Health Blog</a>
                    </li>

                </ul>
            </div>

            <!-- Logout Button -->
            <a class="btn btn-outline-danger btn-sm ms-2" href="login.php">Logout</a>
            
        </div>
    </nav>

</body>

</html>