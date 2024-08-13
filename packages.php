<?php session_start(); ?>
<?php include('includes/header.php'); ?>  <!-- header section -->
<?php include('includes/navbar.php'); ?>  <!-- navbar section -->

<body class="packages-page bg-black max-lg:p-0">
    
    <div class="packages mt-20 lg:mt-36 text-white text-center tracking-widest" style="margin-left: 5%; margin-right: 5%;">
        <h1 class=" text-2xl lg:text-5xl font-bold tracking-widest">P A C K A G E S</h1><br>
        <div class="h-1 w-auto bg-gradient-to-r from-sky-500 to-blue-500"></div>
        <p class=" pt-12">Discover the perfect photography package to capture your special moments with Malcolm Lismore Photography. 
            Whether it's a small event, a full-day celebration, or a personalized portrait session, these tailored packages offer a range of options to suit your needs and create lasting memories.</p>

        <div class=" grid grid-rows-4 grid-cols-1 lg:grid-rows-1 lg:grid-cols-4 gap-6">
            <div class="essential-package mt-20 p-6 text-center border border-sky-500 shadow-sm shadow-white duration-500 hover:scale-110 cursor-pointer">
                <h2 class="tracking-widest text-gray-200">E S S E N T I A L</h2><br>
                <h1 class=" text-4xl text-sky-400">Price: £250</h1><br>
                <p class=" tracking-wide text-gray-400 text-left pl-5"> ⦾ Duration/2hours
                    <br>⦾ Small event or Photoshoot.
                    <br>⦾ 20 high-resolution edited images.
                    <br>⦾ Online gallery for viewing and downloading images.
                </p><br><br><br>
                <br><button class="px-8 py-2 border border-white hover:bg-sky-500">Select Now</button>
            </div>
            <div class="standard-package mt-20 p-6 text-center border bg-gray-200 border-sky-500 shadow-sm shadow-white duration-500 hover:scale-110 cursor-pointer">
                <h2 class="tracking-widest text-black">S T A N D A R D</h2><br>
                <h1 class=" text-4xl text-sky-400">Price: £450</h1><br>
                <p class=" tracking-wide text-black text-left pl-5"> ⦾ Duration/4hours
                    <br>⦾ half-day events or portrait sessions.
                    <br>⦾ 40 high-resolution edited images.
                    <br>⦾ Online gallery with password protection.
                    <br>⦾ 1 print (8x10) of your choice.
                </p><br><br>
                <button class="px-8 py-2 border border-sky-500 text-sky-500 hover:bg-sky-500 hover:text-white">Select Now</button>
            </div>
            <div class="premium-package mt-20 p-6 text-center border border-sky-500 shadow-sm shadow-white duration-500 hover:scale-110 cursor-pointer">
                <h2 class="tracking-widest text-gray-200">P R E M I U M</h2><br>
                <h1 class=" text-4xl text-sky-400">Price: £900</h1><br>
                <p class=" tracking-wide text-gray-400 text-left pl-5"> ⦾ Duration/8hours
                    <br>⦾ weddings, events, or extensive portrait sessions.
                    <br>⦾ 80 high-resolution edited images.
                    <br>⦾ Online gallery with password protection.
                    <br>⦾ 2 prints(8x10) plus USB
                </p><br><br>
                <button class="px-8 py-2 border border-white hover:bg-sky-500">Select Now</button>
            </div>
            <div class="ultimate-package mt-20 p-6 text-center border bg-gray-200 border-sky-500 shadow-sm shadow-white duration-500 hover:scale-110 cursor-pointer">
                <h2 class="tracking-widest text-black">U L T I M A T E</h2><br>
                <h1 class=" text-4xl text-sky-400">Price: £1500</h1><br>
                <p class=" tracking-wide text-black text-left pl-5"> ⦾ Full Day/additional as needed.
                    <br>⦾ Start to finish event coverage.
                    <br>⦾ 120 high-resolution edited images.
                    <br>⦾ Online gallery with password protection.
                    <br>⦾ 4 print(8x10), Custom Album with USB.
                </p><br><br>
                <button class="px-8 py-2 border border-sky-500 text-sky-500 hover:bg-sky-500 hover:text-white">Select Now</button>
            </div>
        </div>

        <p class=" p-4 lg:p-20 text-sm lg:text-lg">Each package is thoughtfully designed to provide you with exceptional service and stunning images that you can cherish forever. 
            Choose the package that best fits your vision, and let me help you preserve the moments that matter most.</p>
    </div>

    <!-- Bookings Section -->
    <div class="bookings bg-white mt-20 px-0 h-auto text-black">
        <h1 class=" text-2xl lg:text-5xl font-bold tracking-widest pt-12 text-center">B O O K I N G S</h1>
        <p class="pt-10 text-sm lg:text-lg text-center">Secure your special moments with ease. Book your photography session now and let’s create unforgettable memories together.</p>

        <form class="max-w-md mx-auto px-10 pt-12 pb-16" action="process_booking.php" method="POST" >
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="first_name" id="first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="first_name" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="last_name" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="last_name" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email_ad" id="email_ad" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="email_ad" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="event_type" id="event_type" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="event_type" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Event Type</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="date" name="preferred_date" id="preferred_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="preferred_date" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Preferred Date</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="time" name="preferred_time" id="preferred_time" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="preferred_time" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Preferred Time</label>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="location" id="location" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="location" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Location</label>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="underline_select" class="sr-only">Underline select</label>
                <select id="underline_select" name="underline_select" class="block py-2.5 px-0 w-full text-sm ansparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected>Choosen Package</option>
                    <option value="essential">Essential</option>
                    <option value="standard">Standard</option>
                    <option value="premium">Premium</option>
                    <option value="ultimate">Ultimate</option>
                </select>
            </div>
            
            <div class="relative z-0 w-full mb-5 group">
                <textarea name="details" id="details" rows="1" onfocus="this.rows=5" onblur="if(!this.value){this.rows=1}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></textarea>
                <label for="details" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Additional Details</label>
            </div>

            
            <button type="submit" class="py-4 px-5 text-sm font-medium text-center text-sky-500 bg-white hover:bg-sky-500 border hover:text-white border-sky-500 sm:w-fit duration-500 hover:scale-110 focus:ring-4 focus:outline-none focus:ring-primary-300 ">Request Booking</button>
        </form>

        <!-- Display the SweetAlert message -->
        <?php if (isset($_SESSION['message'])): ?>
            <script>
                Swal.fire({
                    position: "center",
                    icon: "<?= $_SESSION['msg_type'] ?>",
                    title: "<?= $_SESSION['message'] ?>",
                    showConfirmButton: false,
                    timer: 4500
                });
            </script>
            <?php
            // Unset session variables after displaying the message
            unset($_SESSION['message']);
            unset($_SESSION['msg_type']);
            ?>
        <?php endif; ?>

        <p class="text-sm text-center pb-20">Thank you for reaching out! We will contact you soon to discuss your photography needs and finalize the details.</p>


    </div>


<?php include('includes/footer.php'); ?> <!-- footer section -->
