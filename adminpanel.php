<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN PANEL</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="img/carslogo.webp" />




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
        <a href="adminpanel.php" class="flex items-center">
          <img src="img/carslogo.webp" class="h-6 mr-3 sm:h-24" alt="Landwind Logo">
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
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2" style="opacity: 0; display:none">
          <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
            <li>
              <a href="index2.php" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-400 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Home</a>
            </li>
            <li>
              <a href="vehicles2.php" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-400 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Vehicles</a>
            </li>
            <li>
              <a href="reservations2.php" class="block py-2 pl-3 pr-4 text-white bg-red-700 rounded lg:bg-transparent lg:text-black lg:hover:text-red-400 lg:p-0 dark:text-red-600" aria-current="page">Reservations</a>
            </li>
            <li>
              <a href="contact2.php" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-400 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <div class="mx-auto container px-6 xl:px-0 py-12">
    <div class="flex flex-col">

      <div id="nores" class="flex items-start justify-center pt-20 h-screen bg-gray-100" style="height: 100vh;">
        <div class="text-center">
          <h1 class="text-2xl font-bold mb-4">There are no reservations!</h1>

        </div>
      </div>
      <div class="mt-10 grid lg:grid-cols-2 gap-x-8 gap-y-8 items-center">


        <?php
        session_start();
        include("dbconnect.php");

        // $query = "SELECT customerID, resID, carID, pickupLocation, dropLocation, pickupDate, dropDate FROM Reservations";
        $query = "SELECT Customers.customerName, Customers.customerLastName, Reservations.customerID, Reservations.resID, Reservations.carID, Reservations.pickupLocation, 
                        Reservations.dropLocation, Reservations.pickupDate, Reservations.dropDate
                  FROM Reservations JOIN Customers ON Reservations.customerID = Customers.customerID;";
        
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if (mysqli_num_rows($result) > 0) {
          echo "
          <script>
            document.getElementById('nores').style.display = 'none';
          </script>";
          while ($row = mysqli_fetch_assoc($result)) {
            $customerName1 = $row['customerName'];
            $customerLastName1 = $row['customerLastName'];
            $customerID = $row['customerID'];
            $resID = $row['resID'];
            $carID = $row['carID'];
            $pickupLocation = $row['pickupLocation'];
            $dropLocation = $row['dropLocation'];
            $pickupDate = $row['pickupDate'];
            $dropDate = $row['dropDate'];

            //session resID and carID
            $_SESSION['resID'] = $resID;
            $_SESSION['carID'] = $carID;



            $query2 = "SELECT carBrand, carModel FROM Cars WHERE carID = {$_SESSION['carID']}";
            $result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));

            while ($row2 = mysqli_fetch_assoc($result2)) {
              $carName = $row2['carBrand'] . ' ' . $row2['carModel'];

              $query3 = "SELECT filepath FROM Images WHERE carID = $carID AND filepath LIKE '%png.webp%'";
              $result3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
              while ($row3 = mysqli_fetch_assoc($result3)) {
                $carImage = $row3['filepath'];
              }

              // $_SESSION['carName'] = $carName;

            }

            

            echo "
  <div class='group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-purple-900 dark:hover:bg-blue-700 sm:p-28 py-36 px-10 flex justify-center items-center' id='cancelButton' data-resid='$resID'>
    <img class='group-hover:opacity-100 transition duration-500' src='$carImage' alt='car-image' />
    <div class='absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2'>
      <div>
      <p class='group-hover:opacity-100 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white mb-2'>
          $customerName1 $customerLastName1
        </p>  
      <p class='group-hover:opacity-100 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white mb-2'>
          $carName
        </p>
        <p class='group-hover:opacity-100 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white mb-2'>
          $pickupLocation / $dropLocation 
        </p>
        <p class='group-hover:opacity-100 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white mb-2'>
          $pickupDate / $dropDate
        </p>
      </div>
    </div>
    <div class='flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500'>
      <button>
        <img class='dark:hidden' src='https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg' alt='add'>
        <img class='hidden dark:block' src='https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg' alt='add'>
      </button>
      <button>
        <img class='dark:hidden' src='https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg' alt='view'>
        <img class='hidden dark:block' src='https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg' alt='view'>
      </button>
      <button>
        <img class='dark:hidden' src='https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg' alt='like'>
        <img class='hidden dark:block' src='https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg' alt='like' />
      </button>
    </div>
  </div>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script>
    $('#cancelButton').click(function() {
      var confirmation = confirm('Are you sure to cancel the reservation as admin?');
      if (confirmation) {
        $.ajax({
          url: 'cancelresadmin.php',
          type: 'POST',
          data: {
            resID: $(this).data('resid')
          },
          success: function(response) {
            window.location.href = 'admininfo.php';
          },
          error: function() {
            alert('There was an error cancelling the reservation');
          }
        });
      }
    });
  </script>
";
        }
        } else {
          echo "
          <script>
            document.getElementById('nores').style.display = 'flex';
          </script>";
        }


        mysqli_close($conn);
        ?>

      </div>
    </div>
  </div>


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
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>