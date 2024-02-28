<?php
      session_start();
      
     $SESSIONUsername= $_SESSION['Username'];
      

      if(empty($SESSIONUsername)){
       header("Location:../frontpage.php");
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        #sidebar {
            background-color: #343a40;
            color: red;
        }

        #content {
            transition: margin-left 0.5s;
            padding: 16px;
        }

        @media (max-width: 767px) {
            #sidebar {
                margin-left: -250px;
            }

            #content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="nav-item dropdown>
        <a class= "nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="Avatar.png" alt="Logo" width="30" height="30" class="d-inline-block align-top">
            <?php
            echo $SESSIONUsername;
            ?>
        </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Settings</a>
            </div>
        </li>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
            </ul>
        </div>
        </nav>

        <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Schedual</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <!-- Add more menu items as needed -->
                    </ul>
                </div>
            </nav>    

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                </div>
                <a class="dropdown-item" href="../logout.php">Logout</a>
            </li>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Products</h5>
                        <p class="card-text">50</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Customers</h5>
                        <p class="card-text">100</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

    <!-- User Profile Section -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="Avatar.png" alt="User Avatar" class="img-fluid rounded-circle mb-3">
                        <h4 class="card-title"></h4>
                        <p class="card-text">@.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User Information</h4>
                        <div id="userData"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery (required for Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script >
    document.addEventListener('DOMContentLoaded', () => {
    // Simulated user data
    const userData = [
        { label: 'Age', value: '21' },
        { label: 'Location', value: 'City, Country' },
        { label: 'Occupation', value: 'Web Developer' },
        // Add more data as needed
    ];

    // Display user data dynamically
    const userDataContainer = document.getElementById('userData');
    userData.forEach(item => {
        userDataContainer.innerHTML += `<p><strong>${item.label}:</strong> ${item.value}</p>`;
    });
});

    </script>
</body>
</html>