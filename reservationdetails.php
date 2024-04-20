<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation Details</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="img/carslogo.webp" />
  <!-- <script src="../js/main.js"></script> -->
</head>

<body>
  <div class="loader">
    <div class="lds-roller">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <header>
    <?php
    include("dbconnect.php");
    session_start();
    $sql = "SELECT customerName, customerLastName FROM Customers WHERE customerID = {$_SESSION['customerId']}"; // Assuming you want data for a specific customer ID

    $result = $conn->query($sql);

    // Check if there is a result
    if ($result->num_rows > 0) {
      // Output data of each row
      while ($row = $result->fetch_assoc()) {
        $customerName = $row["customerName"];
        $customerLastName = $row["customerLastName"];
      }
    } else {
      echo "No data found in the database.";
    }

    // Close the connection
    $conn->close();
    ?>

    <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-300">
      <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <a href="index2.php" class="flex items-center">
          <img src="img/carslogo.webp" class="h-6 mr-3 sm:h-24" alt="Logo">
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>
        <div class="flex items-center lg:order-2">
          <div class="hidden mt-2 mr-4 sm:inline-block">
            <span></span>
          </div>
          <a href="login.html" class="flex items-center text-white bg-red-700 lg:mr-3 focus:ring-4 focus:ring-red-300 pointer-events-none font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-blue-900 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 mr-1">

              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14a4 4 0 100-8 4 4 0 000 8z">
              </path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 20s-1.5-2-4-2-4 2-4 2">
              </path>
            </svg>
            <?php echo $customerName . ' ' . $customerLastName; ?>
          </a>
          <a href="unsetID.php" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-red-600 dark:hover:bg-blue-900 focus:outline-none dark:focus:ring-red-800">Sign
            Out</a>
          <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="true">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
          <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
            <li>
              <a href="index2.php" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-600 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Home</a>
            </li>
            <li>
              <a href="vehicles2.php" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-600 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Vehicles</a>
            </li>
            <li>
              <a href="reservations2.php" class="block py-2 pl-3 pr-4 text-white bg-red-700 rounded lg:bg-transparent lg:text-black lg:hover:text-red-600 lg:p-0 dark:text-red-600" aria-current="page">Reservations</a>
            </li>
            <li>
              <a href="contact2.php" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-600 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <?php
  include("dbconnect.php");
  session_start();
  $resID = $_GET['id'];
  $queryy = "SELECT carID FROM Reservations WHERE resID = $resID";
  $resultt = mysqli_query($conn, $queryy) or die(mysqli_error($conn));


  while ($roww = mysqli_fetch_assoc($resultt)) {
    $carID = $roww['carID'];
  }


  $query2 = "SELECT carBrand, carModel FROM Cars WHERE carID = $carID";
  $result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));

  while ($row2 = mysqli_fetch_assoc($result2)) {
    $carBrand = $row2['carBrand'];
    $carNameDetail = $row2['carBrand'] . ' ' . $row2['carModel'];
  }
  $query3 = "SELECT filepath FROM Images WHERE carID = $carID AND filepath LIKE '%$carBrand%'AND NOT filepath LIKE '%png%'";
  

  $result3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
  $carImages = array();
  while ($row3 = mysqli_fetch_assoc($result3)) {
    $carImages[] = $row3['filepath'];
  }

  


  echo "
          <section class='vehicle-sec'>
          <h1 class='font-bold text-4xl'>$carNameDetail</h1>
          <!-- AŞAĞIDAKİ DİV -->
          <div class='lg:flex flex-row flex-wrap md:flex-nowrap gap-4 justify-between mt-3'>
            <!--<div class='vehicle-images basis-1/2 w-full'>
              <img class='block' style='min-height: 100%;min-width: 100%;' src='../img/mercedes/mercedesg63.jpg' alt=''>
            </div>-->
            <!-- AŞAĞIDAKI DİV -->";
  echo "<div id='indicators-carousel' class='relative basis-1/2 w-full md:mb-4' data-carousel='static'>";
  echo  "<!-- Carousel wrapper -->
              <div class='relative h-56 overflow-hidden rounded-lg md:h-96 '>";
  foreach ($carImages as $index => $carImage) {
    echo "
                            <div class='hidden duration-700 ease-in-out' data-carousel-item>
                                <img src='$carImage'
                                    class='absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2' alt='...'>
                            </div>";
  }


  echo "</div>";
  echo "<!-- Slider indicators -->
  <div class='absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2'>
    <button type='button' class='w-3 h-3 rounded-full' aria-current='true' aria-label='Slide 1'
      data-carousel-slide-to='0'></button>
    <button type='button' class='w-3 h-3 rounded-full' aria-current='false' aria-label='Slide 2'
      data-carousel-slide-to='1'></button>
    <button type='button' class='w-3 h-3 rounded-full' aria-current='false' aria-label='Slide 3'
      data-carousel-slide-to='2'></button>
    <button type='button' class='w-3 h-3 rounded-full' aria-current='false' aria-label='Slide 4'
      data-carousel-slide-to='3'></button>
    <button type='button' class='w-3 h-3 rounded-full' aria-current='false' aria-label='Slide 5'
      data-carousel-slide-to='4'></button>
  </div>
  <!-- Slider controls -->
  <button type='button'
    class='absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none'
    data-carousel-prev>
    <span
      class='inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none'>
      <svg class='w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180' aria-hidden='true'
        xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 6 10'>
        <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'
          d='M5 1 1 5l4 4' />
      </svg>
      <span class='sr-only'>Previous</span>
    </span>
  </button>
  <button type='button'
    class='absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none'
    data-carousel-next>
    <span
      class='inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none'>
      <svg class='w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180' aria-hidden='true'
        xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 6 10'>
        <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'
          d='m1 9 4-4-4-4' />
      </svg>
      <span class='sr-only'>Next</span>
    </span>
  </button>
  </div>
  <div class='flex flex-wrap gap-4 basis-2/5 w-full mt-5 lg:mt-0'>
  
    <button id='cancelButton'
      class='w-full relative inline-flex items-center justify-center px-10 py-4 overflow-hidden font-mono font-medium tracking-tighter text-white bg-gray-800 rounded-lg group'>
      <span
        class='absolute w-0 h-0 transition-all duration-1000 ease-out bg-red-600 rounded-full group-hover:w-screen group-hover:h-screen'></span>
      <span
        class='absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700'></span>
      <span class='relative'>Cancel Reservation</span>
    </button>
  
    <a href='#info-container'
      class='w-full relative inline-flex items-center justify-center px-10 py-4 overflow-hidden font-mono font-medium tracking-tighter text-white bg-gray-800 rounded-lg group'>
      <span
        class='absolute w-0 h-0 transition-all duration-1000 ease-out bg-blue-900 rounded-full group-hover:w-screen group-hover:h-screen'></span>
      <span
        class='absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700'></span>
      <span class='relative'>Review</span>
    </a>
  
    
  </div>
  </div>
  ";


  $resID = $_GET['id'];

  mysqli_close($conn);
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $('#cancelButton').click(function() {
      var confirmation = confirm("Are you sure?");
      if (confirmation) {
        $.ajax({
          url: 'cancelres.php', // The PHP script that will delete the reservation
          type: 'POST',
          data: {
            resID: '<?php echo $resID; ?>'
          },
          success: function(response) {


            window.location.href = 'info.php';
          },
          error: function() {
            alert("There was an error cancelling the reservation");
          }
        });
      }
    });
  </script>
  <?php
  session_start();
  include("dbconnect.php");


  $sqlres = "SELECT pickupLocation, dropLocation, pickupDate, dropDate, carID, totalPrice FROM Reservations WHERE resID = $resID"; // Assuming you want data for a specific customer ID

  $resultres = $conn->query($sqlres);

  // Check if there is a result
  if ($resultres->num_rows > 0) {
    // Output data of each row
    while ($rowres = $resultres->fetch_assoc()) {
      $pickupLocation = $rowres["pickupLocation"];
      $dropLocation = $rowres["dropLocation"];
      $pickupDate = $rowres["pickupDate"];
      $dropDate = $rowres["dropDate"];
      $carID = $rowres["carID"];
      $totalPrice = $rowres["totalPrice"];
    }
  } else {
    echo "No data found in the database.";
  }

  $sqlcar = "SELECT carColor FROM Cars WHERE carID = $carID";
  $resultcar = $conn->query($sqlcar);
  if ($resultcar->num_rows > 0) {
    // Output data of each row
    while ($rowcar = $resultcar->fetch_assoc()) {
      $carColor = $rowcar["carColor"];
    }
  } else {
    echo "No data found in the database.";
  }



  $conn->close();
  ?>




  <div class="resreview-container w-full">
    <div class="info-container lg:flex flex-col">
      <p class="text-xl font-bold mb-5">Reservation Details</p>
      <p class="text-xl">&bull; <strong>Pickup Location : </strong><?php echo $pickupLocation; ?></p>
      <p class="text-xl">&bull; <strong>Drop Location : </strong><?php echo $dropLocation; ?></p>
      <p class="text-xl">&bull; <strong>Pickup Date : </strong><?php echo $pickupDate; ?></p>
      <p class="text-xl">&bull; <strong>Drop Date : </strong><?php echo $dropDate; ?></p>
      <p class="text-xl">&bull; <strong>Car Color : </strong><?php echo $carColor; ?></p>
      <p class="text-xl">&bull; <strong>Total Price : </strong><?php echo $totalPrice; ?></p>

    </div>
  </div>



  <div id="resreview-container" class="resreview-container w-full">
    <div id="info-container" class="info-container lg:flex flex-col">
      <p class="text-xl font-bold mb-5">Review</p>
      <div class="flex items-center mb-4">
        <label for="rating" class="mr-2">Rating:</label>
        <div class="flex items-center">
          <input type="radio" id="star5" name="rating" value="5" class="hidden" />
          <label for="star5" class="text-2xl text-gray-500 cursor-pointer">&#9733;</label>
          <input type="radio" id="star4" name="rating" value="4" class="hidden" />
          <label for="star4" class="text-2xl text-gray-500 cursor-pointer">&#9733;</label>
          <input type="radio" id="star3" name="rating" value="3" class="hidden" />
          <label for="star3" class="text-2xl text-gray-500 cursor-pointer">&#9733;</label>
          <input type="radio" id="star2" name="rating" value="2" class="hidden" />
          <label for="star2" class="text-2xl text-gray-500 cursor-pointer">&#9733;</label>
          <input type="radio" id="star1" name="rating" value="1" class="hidden" />
          <label for="star1" class="text-2xl text-gray-500 cursor-pointer">&#9733;</label>
        </div>
      </div>
      <div class="mb-4">
        <label for="description" class="block mb-2">Description:</label>
        <textarea id="description" name="description" rows="3" class="w-full px-3 py-2 border rounded-lg"></textarea>
      </div>
      <button type="submit" onclick="validateReview()" class="bg-blue-900 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
        Submit Review
      </button>
    </div>
  </div>
  </section>
  <footer class="bg-blue-900">
    <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
      <nav class="-mx-5 -my-2 flex flex-wrap justify-center">
        <div class="px-5 py-2">
          <a href="#" class="text-base text-gray-400 hover:text-gray-100">
            About
          </a>
        </div>

        <div class="px-5 py-2">
          <a href="#" class="text-base text-gray-400 hover:text-gray-100">
            Blog
          </a>
        </div>

        <div class="px-5 py-2">
          <a href="#" class="text-base text-gray-400 hover:text-gray-100">
            Careers
          </a>
        </div>

        <div class="px-5 py-2">
          <a href="#" class="text-base text-gray-400 hover:text-gray-100">
            Contact Us
          </a>
        </div>
      </nav>

      <p class="mt-8 text-center text-base text-gray-400">
        &copy; 2023 ARABAM. All rights reserved.
      </p>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@material/ripple@6.0.0/dist/mdc.ripple.min.js"></script>
  <script>
    $(document).ready(function() {
      // Initialize Material Design ripple effect
      mdc.ripple.MDCRipple.attachTo(document.querySelector('.cursor-pointer'));
    });
  </script>

  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




</body>

</html>