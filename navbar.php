<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg py-3">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand fw-bold" href="index.php">
      <img src="images/download.png" alt="Logo" width="55" class="rounded">
    </a>

    <!-- Mobile Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarContent">

        <!-- SEARCH FORM (FIXED) -->
        <form class="d-flex mx-3"
              role="search"
              style="max-width: 600px;width: 400px;"
              action="search.php"
              method="GET">

            <input class="form-control me-2"
                   type="search"
                   name="search"
                   placeholder="Search Doctor or Hospital"
                   required>

            <button class="btn btn-light fw-bold" type="submit">
                Search
            </button>

        </form>

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link fw-semibold text-white" href="Doctors.php">DOCTORS</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold text-white" href="Hospital.php">HOSPITALS</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold text-white" href="Specialities.php">SPECIALITIES</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold text-white" href="HealthBlog.php">HEALTH BLOG</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold text-white" href="Surgeries.php">SURGERIES</a>
        </li>

      </ul>

      <!-- Login Button -->
      <a href="Login.php" class="btn btn-warning fw-bold px-4">
        LOGIN
      </a>

    </div>
  </div>
</nav>
<!-- Navbar End -->