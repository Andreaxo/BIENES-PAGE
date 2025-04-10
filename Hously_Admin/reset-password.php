<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hously_Admin/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean(); // Capture the navlink content

// Optionally define the Hero block content
ob_start();
?>


    <section class="h-screen flex items-center justify-center relative overflow-hidden bg-[url('../../<?php echo $static_url; ?>/images/01.jpg')] bg-no-repeat bg-left-bottom bg-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
        <div class="container">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
                <div class="relative overflow-hidden bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                    <div class="p-6">
                        <a href="">
                            <img src="<?php echo $static_url; ?>/images/logo-dark.png" class="mx-auto block dark:hidden" alt="">
                            <img src="<?php echo $static_url; ?>/images/logo-light.png" class="mx-auto dark:block hidden" alt="">
                        </a>
                        <h5 class="my-6 text-xl font-semibold">Reset Your Password</h5>
                        <div class="grid grid-cols-1">
                            <p class="text-slate-400 mb-6">Please enter your email address. You will receive a link to create a new password via email.</p>
                            <form class="text-start">
                                <div class="grid grid-cols-1">
                                    <div class="mb-4">
                                        <label class="font-medium" for="LoginEmail">Email Address:</label>
                                        <input id="LoginEmail" type="email" class="form-input mt-3" placeholder="name@example.com">
                                    </div>

                                    <div class="mb-4">
                                        <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Send</a>
                                    </div>

                                    <div class="text-center">
                                        <span class="text-slate-400 me-2">Remember your password ? </span><a href="login.php" class="text-black dark:text-white font-medium">Sign in</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 text-center">
                        <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Hously. Designed by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--end section -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/no-sidebar.php";
?>       