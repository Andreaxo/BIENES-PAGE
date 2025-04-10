<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hously_Admin/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean(); // Capture the navlink content

// Optionally define the Hero block content
ob_start();
?>

    <!-- Start -->
    <section class="relative h-screen flex items-center justify-center text-center bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="title-heading text-center my-auto">
                    <div class="size-24 bg-green-600/5 text-green-600 rounded-md flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i data-feather="thumbs-up" class="size-10"></i>
                    </div>
                    <h1 class="mt-6 mb-8 md:text-5xl text-3xl font-bold">Thank You</h1>
                    <p class="text-slate-400 max-w-xl mx-auto">We are a huge marketplace dedicated to connecting great artists of all Hously with their fans and unique token collectors!</p>
                    
                    <div class="mt-6">
                        <a href="index.php" class="btn bg-green-600/5 hover:bg-green-600 border-green-600/10 hover:border-green-600 text-green-600 hover:text-white rounded-md">Back to Home</a>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/no-sidebar.php";
?>  