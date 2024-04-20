<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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
                        out</a>
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


    <div class="min-w-screen min-h-screen bg-white flex items-center justify-center px-5 pb-10 pt-16">
        <form action="thanks.php" method="post">
            <div class="w-full mx-auto rounded-lg bg-gray-300 border border-gray-700 shadow-lg p-5 text-gray-700" style="max-width: 600px">
                <div class="w-full pt-1 pb-5">
                    <div class="bg-blue-900 text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                        <img src="img/carslogo.webp" class="h-5 mt-1 sm:h-11" alt="Logo">
                        <i class="mdi mdi-credit-card-outline text-3xl"></i>
                    </div>
                </div>

                <div class="mb-10">
                    <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                        Secure Payment
                    </h1>
                    <!-- <h1 class="text-center font-bold text-xl uppercase">Secure payment info</h1> -->
                </div>
                <div class="mb-3 flex -mx-2">
                    <div class="px-2">
                        <label for="type1" class="flex items-center cursor-pointer">
                            <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type1" checked>
                            <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-8 ml-3">
                        </label>
                    </div>
                    <div class="px-2">
                        <label for="type2" class="flex items-center cursor-pointer">
                            <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type2">
                            <img src="https://www.sketchappsources.com/resources/source-image/PayPalCard.png" class="h-8 ml-3">
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="font-bold text-sm mb-2 ml-1 text-black">Name on card</label>
                    <div>
                        <input class="w-full bg-blue-900 px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 text-white transition-colors" placeholder="John Smith" type="text" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="font-bold text-sm mb-2 ml-1 text-black">Card number</label>
                    <div>
                        <input class="w-full bg-blue-900 px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 text-white transition-colors" placeholder="0000 0000 0000 0000" type="text" />
                    </div>
                </div>
                <div class="mb-3 -mx-2 flex items-end">
                    <div class="px-2 w-1/2">
                        <label class="font-bold text-sm mb-2 ml-1 text-black">Expiration date</label>
                        <div>
                            <select class="form-select text-white bg-blue-900 w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-900 transition-colors cursor-pointer">
                                <option value="01">01 - January</option>
                                <option value="02">02 - February</option>
                                <option value="03">03 - March</option>
                                <option value="04">04 - April</option>
                                <option value="05">05 - May</option>
                                <option value="06">06 - June</option>
                                <option value="07">07 - July</option>
                                <option value="08">08 - August</option>
                                <option value="09">09 - September</option>
                                <option value="10">10 - October</option>
                                <option value="11">11 - November</option>
                                <option value="12">12 - December</option>
                            </select>
                        </div>
                    </div>
                    <div class="px-2 w-1/2">
                        <select class="form-select text-white bg-blue-900 w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-900 transition-colors cursor-pointer ">

                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2020">2030</option>
                            <option value="2023">2031</option>
                        </select>
                    </div>
                </div>
                <div class="mb-10">
                    <label class="font-bold text-sm mb-2 ml-1 text-black">Security code</label>
                    <div>
                        <input class="w-32 px-3 py-2 mb-1 bg-blue-900 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 text-white transition-colors" placeholder="000" type="text" />
                    </div>
                </div>



                <input type="submit" value="PAY NOW" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-blue-900 dark:focus:ring-primary-800 cursor-pointer">
                </input>
            </div>
        </form>
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

    <script src="js/main.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>