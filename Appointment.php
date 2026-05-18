<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Doctors Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f4f7fc;
      font-family: Arial, sans-serif;
    }

    .sidebar {
      height: 100vh;
      background: #0d6efd;
      color: white;
      padding: 20px;
      position: fixed;
      width: 250px;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 10px;
      text-decoration: none;
      margin: 5px 0;
      border-radius: 5px;
    }

    .sidebar a:hover {
      background: rgba(255,255,255,0.2);
    }

    .content {
      margin-left: 270px;
      padding: 20px;
    }

    .card-custom {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<!-- Sidebar -->
<div class="sidebar">
  <h3>Doctor Panel</h3>
  <a href="Doctors.php">View Doctors</a>
  <a href="Doctors.php">Appointments</a>
  <a href="Doctors.php">Update Availability</a>
</div>

<!-- Content -->
<div class="content">

  <!-- View Doctors -->
  <section id="viewDoctors">
    <h2 class="mb-3">Doctors List</h2>
    <div class="card card-custom p-3">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Speciality</th>
            <th>Contact</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <!-- PHP Example -->
          <!--
          <?php
          $sql = "SELECT * FROM doctors";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)) {
          ?>
          -->
          <tr>
            <td>1</td>
            <td>Dr. Ali</td>
            <td>Cardiologist</td>
            <td>0300-1234567</td>
            <td><span class="badge bg-success">Available</span></td>
          </tr>
          <!-- <?php } ?> -->
        </tbody>
      </table>
    </div>
  </section>

  <hr class="my-5">

  <!-- Appointments -->
  <section id="appointments">
    <h2 class="mb-3">Appointments</h2>
    <div class="card card-custom p-3">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Patient</th>
            <th>Doctor</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ahmed</td>
            <td>Dr. Ali</td>
            <td>2026-05-14</td>
            <td>10:00 AM</td>
            <td><span class="badge bg-warning">Pending</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <hr class="my-5">

  <!-- Availability -->
  <section id="availability">
    <h2 class="mb-3">Update Availability</h2>

    <div class="card card-custom p-3">
      <form method="POST" action="update_availability.php">

        <div class="mb-3">
          <label class="form-label">Doctor ID</label>
          <input type="number" name="doctor_id" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select name="status" class="form-control">
            <option value="available">Available</option>
            <option value="unavailable">Unavailable</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </section>

</div>

</body>
</html>
