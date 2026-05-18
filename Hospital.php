<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare - Find Hospitals</title>
    <link rel="stylesheet" href="styles/Hospital.css">

</head>
<body>

<!-- NAVBAR INCLUDE ONLY -->
<?php include("navbar.php"); ?>

<?php

/* =========================
   SEARCH + FILTER
========================= */

$search = mysqli_real_escape_string($conn, $_GET['search'] ?? '');
$city = mysqli_real_escape_string($conn, $_GET['city'] ?? '');

/* =========================
   QUERY
========================= */

$query = "SELECT * FROM hospitals WHERE 1=1";

if($search != ''){

    $query .= " AND (
        name LIKE '%$search%'
        OR specialties LIKE '%$search%'
    )";

}

if($city != ''){

    $query .= " AND city='$city'";

}

$result = mysqli_query($conn, $query);

?>

<section class="hero">

    <div class="container hero-wrap">

        <div>

            <h1>Find Best Hospitals</h1>

            <p>
                Search hospitals by city and specialization.
            </p>

            <form class="search-box"
                  method="GET"
                  action="">

                <input type="text"
                       name="search"
                       placeholder="Search hospital or specialty..."
                       value="<?php echo htmlspecialchars($search); ?>">

                <select name="city">

                    <option value="">All Cities</option>

                    <option value="Karachi"
                    <?php if($city=="Karachi") echo "selected"; ?>>
                    Karachi
                    </option>

                    <option value="Lahore"
                    <?php if($city=="Lahore") echo "selected"; ?>>
                    Lahore
                    </option>

                    <option value="Islamabad"
                    <?php if($city=="Islamabad") echo "selected"; ?>>
                    Islamabad
                    </option>

                </select>

                <button type="submit" class="btn">
                    Search
                </button>

            </form>

        </div>

        <div>

            <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=1200"
                 alt="Hospital">

        </div>

    </div>

</section>

<section class="section container">

    <div class="layout">

        <!-- FILTER -->

        <div class="filter">

            <h3>Filter Results</h3>

            <br>

            <form method="GET" action="">

                <label>Select City</label>

                <select name="city">

                    <option value="">All Cities</option>

                    <option value="Karachi">Karachi</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Islamabad">Islamabad</option>

                </select>

                <br><br>

                <button type="submit"
                        class="btn"
                        style="width:100%">

                    Apply Filter

                </button>

            </form>

        </div>

        <!-- HOSPITALS -->

        <div>

            <h2 class="title">
                Available Hospitals
            </h2>

            <?php if(mysqli_num_rows($result) > 0){ ?>

                <?php while($row = mysqli_fetch_assoc($result)){ ?>

                    <div class="hospital-item">

                        <img src="<?php echo $row['image_url']; ?>"
                             alt="Hospital Image">

                        <div>

                            <h3>
                                <?php echo $row['name']; ?>
                            </h3>

                            <p>
                                ⭐ <?php echo $row['rating']; ?>
                                |
                                <?php echo $row['city']; ?>
                            </p>

                            <?php

                            $specs = explode(',', $row['specialties']);

                            foreach($specs as $s){

                                echo "<span class='badge'>"
                                . trim($s) .
                                "</span>";

                            }

                            ?>

                            <br><br>

                            <button class="btn">
                                Book Appointment
                            </button>

                        </div>

                    </div>

                <?php } ?>

            <?php } else { ?>

                <h3>No hospitals found.</h3>

            <?php } ?>

        </div>

    </div>

</section>
<?php include ("Footer.php"); ?>
</body>
</html>