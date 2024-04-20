<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vehicles</title>
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
              <a href="index2.php" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-400 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Home</a>
            </li>
            <li>
              <a href="vehicles2.html" class="block py-2 pl-3 pr-4 text-white bg-red-700 rounded lg:bg-transparent lg:text-black lg:hover:text-red-400 lg:p-0 dark:text-red-600" aria-current="page">Vehicles</a>
            </li>
            <li>
              <a href="reservations2.php" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-400 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Reservations</a>
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
      <!-- <div class="flex flex-col justify-center">
        <div class="relative">
          <img class="hidden sm:block w-full" src="https://i.ibb.co/HxXSY0j/jason-wang-Nx-Awry-Abt-Iw-unsplash-1-1.png"
            alt="vehicleimage" />
          <img class="sm:hidden w-full" src="https://i.ibb.co/B6qwqPT/jason-wang-Nx-Awry-Abt-Iw-unsplash-1.png"
            alt="vehicleimage" />
          <div class="absolute sm:bottom-8 bottom-4 pr-10 sm:pr-0 left-4 sm:left-8 flex justify-start items-start">x
            <p class="text-3xl sm:text-4xl font-semibold leading-9 text-white">Range Comfort vehicleimages</p>
          </div>
        </div>
      </div> -->
      <div class="mt-10 grid lg:grid-cols-2 gap-x-8 gap-y-8 items-center">
        <a href="vehicle/mercedesg632.php">
          <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-blue-900 dark:hover:bg-blue-700 sm:p-28 py-36 px-10 flex justify-center items-center">
            <img class="group-hover:opacity-100 transition duration-500" src="img/mercedes/MERCEDESpng.webp" alt="vehicleimage-2" />
            <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
              <div>
                <p class="group-hover:opacity-100 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white">
                  -- Mercedes AMG G63 -- 200$ per day</p>
              </div>

            </div>

            <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg" alt="add">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
              </button>
            </div>
          </div>
        </a>

        <a href="vehicle/audittrs2.php">
          <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-blue-900 dark:hover:bg-blue-700 sm:p-28 py-36 px-10 flex justify-center items-center">
            <img class="group-hover:opacity-100 transition duration-500" src="img/audi/AUDIpng.webp" alt="vehicleimage-3" />
            <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
              <div>
                <p class="group-hover:opacity-100 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white">
                  -- Audi TT RS -- 100$ per day</p>
              </div>

            </div>

            <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg" alt="add">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                <img class="hidden dark:block" src="
                  https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
              </button>
            </div>
          </div>
        </a>

        <a href="vehicle/bmw228i2.php">
          <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-blue-900 dark:hover:bg-blue-700 sm:p-28 py-36 px-10 flex justify-center items-center">
            <img class="group-hover:opacity-100 transition duration-500" src="img/bmw/BMWpng.webp" alt="vehicleimage-4" />
            <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
              <div>
                <p class="group-hover:opacity-100 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white">
                  -- BMW 228i -- 110$ per day</p>
              </div>

            </div>

            <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg" alt="add">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
              </button>
            </div>
          </div>
        </a>

        <a href="vehicle/fordf1502.php">
          <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-blue-900 dark:hover:bg-blue-700 sm:p-28 py-36 px-10 flex justify-center items-center">
            <img class="group-hover:opacity-100 transition duration-500" src="img/ford/FORDpng.webp" alt="vehicleimage-5" />
            <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
              <div>
                <p class="group-hover:opacity-100 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white">
                  -- Ford F-150 Raptor -- 160$ per day</p>
              </div>

            </div>

            <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg" alt="add">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
              </button>
            </div>

          </div>
        </a>


        <a href="vehicle/nissanqashqai2.php">
          <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-blue-900 dark:hover:bg-blue-700 sm:p-28 py-36 px-10 flex justify-center items-center">
            <img class="group-hover:opacity-100 transition duration-500" src="img/nissan/NISSANpng.webp" alt="vehicleimage-6" />
            <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
              <div>
                <p class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white">
                  -- Nissan Qashqai -- 80$ per day</p>
              </div>

            </div>

            <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg" alt="add">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                <img class="hidden dark:block" src="
            https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
              </button>
            </div>
          </div>
        </a>

        <a href="vehicle/kiaev6gt2.php">
          <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-blue-900 dark:hover:bg-blue-700 sm:p-28 py-36 px-10 flex justify-center items-center">
            <img class="group-hover:opacity-100 transition duration-500" src="img/kia/KIApng.webp" alt="vehicleimage-7" />
            <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
              <div>
                <p class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white">
                  -- Kia Ev6 GT -- 140$ per day</p>
              </div>

            </div>

            <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg

                  " alt="add">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                <img class="hidden dark:block" src="
                  https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
              </button>
            </div>
          </div>
        </a>

        <a href="vehicle/renaultclio2.php">
          <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-blue-900 dark:hover:bg-blue-700 sm:p-28 py-36 px-10 flex justify-center items-center">
            <img class="group-hover:opacity-100 transition duration-500" src="img/renault/RENAULTpng.webp" alt="vehicleimage-2" />
            <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
              <div>
                <p class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white">
                  -- Renault Clio -- 70$ per day</p>
              </div>

            </div>

            <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg" alt="add">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
              </button>
            </div>
          </div>
        </a>

        <a href="vehicle/tesla2.php">
          <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-blue-900 dark:hover:bg-blue-700 sm:p-28 py-36 px-10 flex justify-center items-center">
            <img class="group-hover:opacity-100 transition duration-500" src="img/tesla/TESLApng.webp" alt="vehicleimage-2" />
            <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
              <div>
                <p class="group-hover:opacity-100 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white">
                  -- Tesla Model 3 -- 50$ per day</p>
              </div>

            </div>

            <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg" alt="add">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
              </button>
            </div>
          </div>
        </a>

        <a href="vehicle/toyotacorolla2.php">
          <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-blue-900 dark:hover:bg-blue-700 sm:p-28 py-36 px-10 flex justify-center items-center">
            <img class="group-hover:opacity-100 transition duration-500" src="img/toyota/TOYOTApng.webp" alt="vehicleimage-2" />
            <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
              <div>
                <p class="group-hover:opacity-100 transition duration-500 text-xl font-semibold leading-5 text-gray-600 dark:text-white">
                  -- Toyota Corolla -- 60$ per day</p>
              </div>

            </div>

            <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg" alt="add">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
              </button>
              <button>
                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
              </button>
            </div>
          </div>
        </a>


      </div>
      <div class="flex justify-end items-end mt-12">
        <div class="flex flex-row items-center justify-center space-x-8">
          <button class="text-base leading-none text-gray-800 dark:text-white border-b-2 border-transparent focus:outline-none focus:border-gray-800">
            <p>1</p>
          </button>
          <button class="text-base leading-none text-gray-800 dark:text-white border-b-2 border-transparent focus:outline-none focus:border-gray-800">
            <p>2</p>
          </button>
          <button class="text-base leading-none text-gray-800 dark:text-white border-b-2 border-transparent focus:outline-none focus:border-gray-800">
            <p>3</p>
          </button>
          <button class="flex justify-center items-center">
            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg4.svg" alt="next">
            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg4dark.svg" alt="next">
          </button>
        </div>
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