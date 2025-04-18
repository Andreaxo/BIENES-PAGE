<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hously_Admin/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean(); // Capture the navlink content

// Optionally define the Hero block content
ob_start();
?>
        
    <!-- Start Hero -->
    <section class="relative h-screen flex justify-center items-center bg-slate-50 dark:bg-slate-800">
        <div class="container">
            <div class="md:flex justify-center">
                <div class="lg:w-2/5">
                    <div class="relative overflow-hidden rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800">
                        <div class="px-6 py-12 bg-green-600 text-center">
                            <i class="mdi mdi-check-circle-outline text-white text-8xl"></i>
                            <h5 class="text-white text-xl tracking-wide uppercase font-semibold mt-2">Success</h5>
                        </div>

                        <div class="px-6 py-12 text-center">
                            <p class="text-black font-semibold text-xl dark:text-white">Congratulations! 🎉</p> 
                            <p class="text-slate-400 mt-4">Your account has been successfully created. <br> Enjoy your journey. Thank you</p>
                            
                            <div class="mt-6">
                                <a href="index.php" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-greenbg-green-700 text-white rounded-md">Continue</a>
                            </div>
                        </div>

                        <div class="text-center p-6 border-t border-gray-100 dark:border-gray-700">
                            <p class="mb-0 text-slate-400 font-medium">© <script>document.write(new Date().getFullYear())</script> Hously. Design & Develop with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/no-sidebar.php";
?>  