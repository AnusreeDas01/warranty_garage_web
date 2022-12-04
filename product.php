<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Product</title>
    <link rel="stylesheet" href="Style2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="index.html">Warranty Garage</a>
            <div class="search_box">
                <input type="text" placeholder="Search W-M-S">
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            </div>
        </div>

        <div class="header-icons">
            <i class="fas fa-bell">
            </i>
            <div class="account">
                <img src="Img1.jpeg" alt="">
                <!-- <h4>Anusree</h4> -->
                <h4><a href="Logout.php">Logout</a></h4>
            </div>
        </div>
    </header>
    <div class="container">
        <nav>
            <div class="side_navbar">
                <span>Main Menu</span>
                <a href="dashboard.html" class="active">Dashboard</a>
                <a href="profile.html">Profile</a>
                <a href="addnew.html">Add New Items</a>
                <a href="product.html">My Product</a>
            </div>
        </nav>

        <div class="main-body">
            <h2>Product</h2>
            <div class="promo_card">
                <h1>Warranty Garage</h1>
            </div>

            <div class="history_lists">
                <div class="list1">
                    <div class="row">
                        <h4>History</h4>
                        <a href="#">See all</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Product Name</th>
                                <th>Serial ID</th>
                                <th>Purchase Date</th>
                                <th>Expiry Date</th>
                                <th>Invoice</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "project";
                                
                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                                }
                                $ss=1;
                                $sql = "SELECT * FROM addnew";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                    echo '<tr><td>'.$ss.'</td><td>'.$row['category'].'</td><td>'.$row['product'].'</td>
                                    <td>'.$row['serial_id'].'</td>
                                    <td>'.$row['purchase_date'].'</td>
                                    <td>'.$row['expiry_date'].'</td>
                                    <td>'.$row['bill'].'</td>
                                    <td>'.$row['remark'].'</td><tr>';
                                    $ss=$ss+1;
                                  }
                                } else {
                                  echo "0 results";
                                }
                                $conn->close();


                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>



        <div class="sidebar">
            <h4>Terms & Conditions</h4>
            <p>In a contract of sale, parties may make certain statements about the stipulation or the course of trade.
                These stipulations in the contract of sale are made with reference to the subject matter of the sale.
                These stipulations may either be a condition or in the form of a warranty.</p>
        </div>
    </div>
</body>

</html>