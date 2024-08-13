<?php include('includes/header.php'); ?>  <!-- header section -->
<?php include('includes/navbar.php'); ?>  <!-- navbar section -->

<body class="bg-[url('assets/images/cover.jpg')] bg-cover bg-no-repeat bg-center bg-fixed ">
    
<!-- <body class="bg-gray-900"> -->
    <div class="container mx-auto mt-36 px-4 py-8" >
        <h1 class="text-3xl font-bold text-center lg:text-6xl mb-8 text-white tracking-widest pb-20">G A L L E R Y</h1>
        <p></p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
            <?php
            $dir = 'assets/images/gallery';
            $images = array_diff(scandir($dir), array('..', '.'));

            $columns = 4; // Number of columns
            $chunks = array_chunk($images, ceil(count($images) / $columns));

            foreach ($chunks as $chunk) {
                echo '<div class="grid gap-4">';
                foreach ($chunk as $image) {
                    echo '
                    <div>
                        <img class="h-auto max-w-full rounded-lg hover:scale-105 duration-100 cursor-pointer" src="' . $dir . '/' . $image . '" alt="' . $image . '">
                    </div>
                    ';
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>

<?php include('includes/footer.php'); ?> <!-- footer section -->

