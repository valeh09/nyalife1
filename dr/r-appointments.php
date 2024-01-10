<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine</title>
</head>

<!-- MATERIAL ICONS FROM GOOGLE --> <!-- MATERIAL ICONS FROM GOOGLE -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link -->

<link rel="stylesheet" href="css/chat.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<body>

    <!-- NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Dr's dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="r-index.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="r-handle-patient.php">
                        <span class="material-symbols-outlined">recent_patient</span>
                        <span class="title">Handle Patient</span>
                    </a>
                </li>

                

                <li>
                    <a href="r-chat.php">
                        <span class="material-symbols-outlined">forum</span>
                        <span class="title">Chat</span>
                    </a>
                </li>

                <li>
                    <a href="database/logout.php">
                        <span class="material-symbols-outlined">logout</span>
                        <span class="title">Log out</span>
                    </a>
                </li>

                
            </ul>
        </div>
    </div>

    <!---------------------------------MAIN--------------------------------------------------->

    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <span class="material-symbols-outlined">menu</span>
                        
            </div>

            <div class="search">
                <label for="search">
                    
                    <input type="search" name="search" id="search" value="Search here">
                </label>
            </div>
            
            <!-- <div class="user">
                <img src="" alt="" >
            </div> -->

        </div>
        <!-- CARDS CARDS CARDS CARDS CARDS CARDS -->

        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1</div>
                    <div class="cardName">Recent appointments</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">11</div>
                    <div class="cardName">Cancelled appointments</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">11</div>
                    <div class="cardName">Chat</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>
              

        </div>

        <!-- ORDER DETAILS LIST -->
        <div class="details">

            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Patients</h2>
                    <button type="button" class="btn"><a href="http://" style="text-decoration: none;">View all</a></button>
                </div>
    
                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>
        
                    <tbody>
                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status delivered">delivered</span></td>
                        </tr>
        
                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
        
                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status inProgress">In progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- NEW CUSTOMERS -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Medicines</h2>
                </div>

                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>
                </table>
            </div>

            
    
        </div>

        <?php

          
                    
                
                          echo "<h1 style='color:red;text-align:center;'>Add medicine to the pharmacy</h1>
        

                                <div class='contain'>
                                <div class='head'>
                                <h2 style='color:blue;text-align:center;'></h2>
                                </div>
                               <form action='trans.php' class='form' id = 'form' method = 'POST'>
                                 <div class='form-control'>
                                    <label for='med_name' >Name of medicine</label>
                                     <input type='text' name='med_name' id='med_name' required>
                                     
                                     <label for='price' >Price</label>
                                     <input type='number' name='price' id='price' required>
                                     
                                     <label for='bottle_ltrs' >Bottle size in ml</label>
                                     <input type='number' name='bottle_ltrs' id='bottle_ltrs' required>
                                     
                                     <label for='quantity' >Quantity</label>
                                     <input type='number' name='quantity' id='quantity' required>
                                     
                                      </div>

                                     <button> Submit</button>
                                      </form>
                                </div>";

                            
                     



                     ?>


        
    </div>
</body>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->

<script src="js/main.js"></script>
</html>