<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MediCare - Find Hospitals</title>
    <link rel="stylesheet" href="style.css">
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f4f8ff;
    color: #1e293b;
    line-height: 1.6;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

a {
    text-decoration: none;
    transition: 0.3s;
}

ul {
    list-style: none;
}

.btn {
    background: #1677ff;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn:hover {
    background: #005ae2;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(22, 119, 255, 0.3);
}

header {
    background: #fff;
    padding: 15px 0;
    box-shadow: 0 2px 8px rgba(0,0,0,.06);
    position: sticky;
    top: 0;
    z-index: 1000;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 28px;
    font-weight: 800;
    color: #1677ff;
    letter-spacing: -1px;
}

nav ul {
    display: flex;
    gap: 30px;
}

nav ul a {
    color: #475569;
    font-weight: 500;
}

nav ul a:hover {
    color: #1677ff;
}

.hero {
    background: linear-gradient(135deg, #eaf3ff 0%, #ffffff 100%);
    padding: 80px 0;
}

.hero-wrap {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
}

.hero h1 {
    font-size: 48px;
    line-height: 1.2;
    margin-bottom: 20px;
    color: #0f172a;
}

.hero img {
    width: 100%;
    border-radius: 30px;
    box-shadow: 20px 20px 60px rgba(0,0,0,0.1);
}

.search-box {
    background: white;
    padding: 15px;
    border-radius: 20px;
    display: flex;
    gap: 10px;
    margin-top: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.search-box input, 
.search-box select {
    padding: 12px;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    flex: 1;
    outline: none;
}

.section {
    padding: 60px 0;
}

.title {
    font-size: 32px;
    margin-bottom: 30px;
    font-weight: 700;
}

.layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 40px;
}

/* Filter Sidebar */
.filter {
    background: white;
    padding: 25px;
    border-radius: 20px;
    height: fit-content;
    box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    position: sticky;
    top: 100px;
}

.filter h3 {
    margin-bottom: 20px;
    font-size: 20px;
}

.filter label {
    display: block;
    margin: 15px 0 8px;
    font-weight: 500;
    font-size: 14px;
}

.filter select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

/* Hospital Cards */
.hospital-item {
    display: flex;
    gap: 25px;
    background: white;
    padding: 20px;
    border-radius: 20px;
    margin-bottom: 25px;
    transition: 0.3s;
    border: 1px solid transparent;
}

.hospital-item:hover {
    border-color: #1677ff;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}

.hospital-item img {
    width: 240px;
    height: 160px;
    object-fit: cover;
    border-radius: 15px;
}

.badge {
    background: #f0f7ff;
    color: #1677ff;
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 600;
    margin: 10px 5px 0 0;
    display: inline-block;
}

footer {
    background: #fff;
    padding: 60px 0;
    margin-top: 80px;
    border-top: 1px solid #eee;
}

.features {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.feature {
    background: #f8fafc;
    padding: 25px;
    border-radius: 20px;
    text-align: center;
}

@media (max-width: 992px) {
    .hero-wrap, .layout {
        grid-template-columns: 1fr;
    }
    
    .hero {
        text-align: center;
        padding: 40px 0;
    }
    
    .search-box {
        flex-direction: column;
    }
    
    .features {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .hospital-item {
        flex-direction: column;
    }
    
    .hospital-item img {
        width: 100%;
        height: 200px;
    }
}

@media (max-width: 600px) {
    nav ul {
        display: none; /* Mobile menu hide */
    }
    
    .features {
        grid-template-columns: 1fr;
    }
    
    .hero h1 {
        font-size: 32px;
    }
}
    </style>
</head>
<body>

<header>
    <div class="container">
        <nav>
            <div class="logo">MediCare</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Hospital_specialities.php">Hospitals</a></li>
                <li><a href="#">Doctors</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero">
    <div class="container hero-wrap">
        <div>
            <h1>Find Best Hospitals</h1>
            <form class="search-box" method="GET" action="Hospital_specialities.php">
                <input type="text" name="search" placeholder="Search hospital..." value="<?php echo $_GET['search'] ?? ''; ?>">
                <select name="city">
                    <option value="">All Cities</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Lahore">Lahore</option>
                </select>
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
        <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3" alt="hospital">
    </div>
</section>

<section class="section container">
    <div class="layout">
        <div class="filter">
            <h3>Filter Results</h3>
            <form method="GET" action="Hospital_specialities.php">
                <label>City</label>
                <select name="city">
                    <option value="">All Cities</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Lahore">Lahore</option>
                </select>
                <br><br>
                <button type="submit" class="btn" style="width:100%">Apply Filter</button>
            </form>
        </div>

        <div>
            <h2 class="title">Available Hospitals</h2>
            <?php
            $search = $_GET['search'] ?? '';
            $city = $_GET['city'] ?? '';

            $query = "SELECT * FROM hospitals WHERE 1=1";
            
            if ($search != '') {
                $query .= " AND (name LIKE '%$search%' OR specialties LIKE '%$search%')";
            }
            if ($city != '') {
                $query .= " AND city = '$city'";
            }

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="hospital-item">
                        <img src="<?php echo $row['image_url']; ?>">
                        <div>
                            <h3><?php echo $row['name']; ?></h3>
                            <p>⭐ <?php echo $row['rating']; ?> | <?php echo $row['city']; ?></p>
                            <?php 
                            $specs = explode(',', $row['specialties']);
                            foreach($specs as $s) {
                                echo "<span class='badge'>".trim($s)."</span>";
                            }
                            ?>
                            <br><br>
                            <button class="btn">Book Appointment</button>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<h3>No hospitals found matching your criteria.</h3>";
            }
            ?>
        </div>
    </div>
</section>

</body>
</html>