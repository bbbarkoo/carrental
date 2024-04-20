<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home </title>
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
          <a href="login.html"
            class="flex items-center text-white bg-red-700 lg:mr-3 focus:ring-4 focus:ring-red-300 pointer-events-none font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-blue-900 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              class="h-5 w-5 mr-1">

              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14a4 4 0 100-8 4 4 0 000 8z">
              </path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 20s-1.5-2-4-2-4 2-4 2">
              </path>
            </svg>
            <?php echo $customerName . ' ' . $customerLastName; ?>
          </a>

          <a href="unsetID.php"
            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-red-600 dark:hover:bg-blue-900 focus:outline-none dark:focus:ring-red-800">Sign
            Out</a>
          <button data-collapse-toggle="mobile-menu-2" type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mobile-menu-2" aria-expanded="true">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
          <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
            <li>
              <a href="index2.php"
                class="block py-2 pl-3 pr-4 text-white bg-red-700 rounded lg:bg-transparent lg:text-black lg:hover:text-red-600 lg:p-0 dark:text-red-600"
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="vehicles2.php"
                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-600 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Vehicles</a>
            </li>
            <li>
              <a href="reservations2.php"
                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-600 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Reservations</a>
            </li>
            <li>
              <a href="contact2.php"
                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-700 lg:p-0 dark:text-black lg:dark:hover:text-red-600 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>
  <!--<section class="vehicle-sec">
        <h1 class="font-bold text-4xl">MERCEDES AMG G63</h1>
        <div class="lg:flex flex-row flex-wrap justify-center grow">-->
  <!--<div class="vehicle-images basis-1/2 w-full">
            <img class="block" style="min-height: 100%;min-width: 100%;" src="../img/mercedes/mercedesg63.jpg" alt="">
          </div>-->




  <section class="bgground homecenter">
    <div class="lg:flex flex-row flex-wrap justify-center grow">
      <div class="homelogoimg basis-1/2 w-full mt-10">
        <img class="block" style="min-height: 100%;min-width: 100%;" src="img/redcar2.webp" alt="">
      </div>

      <div class="text-center lg:flex flex-col basis-1/2 flex-wrap justify-center w-full text-lg">
        <h1 class="font-bold text-4xl w-full">Best Prices For <br> <span class="text-red-700">Car Rental </span></h1>
        <p class="lg:w-1/2 lg:self-center"><strong>Our mission is for everyone to have fast and affordable
            transportation.</strong></p>
      </div>

    </div>
  </section>
  <section class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-base text-red-600 font-semibold tracking-wide uppercase">Our Services</h2>
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
          We offer a wide range of services to meet your car rental needs
        </p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
          Lorem ipsum dolor sit amet consect adipiscing elit. Suspendisse varius enim in eros elementum tristique.
        </p>
      </div>

      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                <!-- Heroicon name: globe-alt -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Economy Cars
              </dt>
              <dd class="mt-2 text-base text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque,
                iste dolor cupiditate blanditiis ratione.
              </dd>
            </div>
          </div>

          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-600 text-white">
                <!-- Heroicon name: scale -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Luxury Cars
              </dt>
              <dd class="mt-2 text-base text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque,
                iste dolor cupiditate blanditiis ratione.
              </dd>
            </div>
          </div>

          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-600 text-white">
                <!-- Heroicon name: lightning-bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Sports Cars
              </dt>
              <dd class="mt-2 text-base text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque,
                iste dolor cupiditate blanditiis ratione.
              </dd>
            </div>
          </div>

          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-600 text-white">
                <!-- Heroicon name: annotation -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.712 4.33a9.027 9.027 0 011.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 00-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 010 9.424m-4.138-5.976a3.736 3.736 0 00-.88-1.388 3.737 3.737 0 00-1.388-.88m2.268 2.268a3.765 3.765 0 010 2.528m-2.268-4.796a3.765 3.765 0 00-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 01-1.388.88m2.268-2.268l4.138 3.448m0 0a9.027 9.027 0 01-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0l-3.448-4.138m3.448 4.138a9.014 9.014 0 01-9.424 0m5.976-4.138a3.765 3.765 0 01-2.528 0m0 0a3.736 3.736 0 01-1.388-.88 3.737 3.737 0 01-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 01-1.652-1.306 9.027 9.027 0 01-1.306-1.652m0 0l4.138-3.448M4.33 16.712a9.014 9.014 0 010-9.424m4.138 5.976a3.765 3.765 0 010-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 011.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 00-1.652 1.306A9.025 9.025 0 004.33 7.288" />
                </svg>

              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                SUVs
              </dt>
              <dd class="mt-2 text-base text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque,
                iste dolor cupiditate blanditiis ratione.
              </dd>
            </div>
          </div>
        </dl>
      </div>

      <div class="mt-10">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
          <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              About Us
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, excepturi voluptatum. Quasi exercitationem
              cumque ipsam accusantium, maiores laboriosam, architecto, quae voluptas doloremque quibusdam nemo.
              Quisquam, quae? Quasi, quae. Voluptas, quae.
            </p>
          </div>
          <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
              <div class="sm:flex sm:items-center sm:justify-between sm:px-4 sm:py-3">
                <dt class="text-sm font-medium text-gray-500">
                  Founded
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  2021
                </dd>
              </div>

              <div class="sm:flex sm:items-center sm:justify-between sm:px-4 sm:py-3">
                <dt class="text-sm font-medium text-gray-500">
                  Headquarters
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  Ankara, Türkiye
                </dd>
              </div>

              <div class="sm:flex sm:items-center sm:justify-between sm:px-4 sm:py-3">
                <dt class="text-sm font-medium text-gray-500">
                  Employees
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  50-100
                </dd>
              </div>

              <div class="sm:flex sm:items-center sm:justify-between sm:px-4 sm:py-3">
                <dt class="text-sm font-medium text-gray-500">
                  Industry
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  Car Rental
                </dd>
              </div>
            </dl>
          </div>
        </div>
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

  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>