<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      min-height: 100vh;
      display: flex;
    }

    .sidebar {
      width: 250px;
      background-color: #343a40;
      color: white;
      min-height: 100vh;
      position: fixed;
    }

    .sidebar a {
      color: white;
      display: block;
      padding: 15px;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .main-content {
      margin-left: 250px;
      width: 100%;
      background-color: #f8f9fa;
      min-height: 100vh;
    }

    .top-navbar {
      background-color: #fff;
      border-bottom: 1px solid #ddd;
    }

    .content {
      padding: 20px;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column">
    <h4 class="text-center py-3 border-bottom">My Dashboard</h4>
    <a href="#"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
    <a href="#"><i class="fas fa-users me-2"></i>Users</a>
    <a href="#"><i class="fas fa-plug me-2"></i>Devices</a>
    <a href="#"><i class="fas fa-file-alt me-2"></i>Reports</a>
    <a href="#"><i class="fas fa-cog me-2"></i>Settings</a>
    <a href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg top-navbar shadow-sm px-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome, Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavDropdown">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="topNavDropdown">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="content">
      <h2>Dashboard Overview</h2>
      <p>This is your dashboard content area. You can display charts, stats, or anything here.</p>

      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
              <p class="card-text">125</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Active Devices</h5>
              <p class="card-text">43</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Pending Requests</h5>
              <p class="card-text">6</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
