<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hously_Admin/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean(); // Capture the navlink content

// Optionally define the Hero block content
ob_start();
?>

    <section class="h-screen flex items-center justify-center relative overflow-hidden bg-[url('../../<?php echo $static_url; ?>/images/01.jpg')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
        <div class="container relative">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
                <div class="p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                    <div class="text-center">
                        <img src="<?php echo $static_url; ?>/images/client/07.jpg" class="mx-auto size-20 rounded-full shadow dark:shadow-gray-800" alt="">
                        <h5 class="mb-6 mt-4 text-xl font-semibold">Calvin Carlo</h5>
                    </div>
                    <form action="profile.php">
                        <div class="grid grid-cols-1">
                            <div class="mb-4 text-start">
                                    <label class="font-semibold" for="LoginPassword">Password:</label>
                                <input id="LoginPassword" type="password" class="form-input mt-3 rounded-md" required="" placeholder="Password:">
                            </div>

                            <div class="flex justify-between mb-4">
                                <div class="inline-flex items-center mb-0">
                                    <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-green-600 focus:border-green-300 focus:ring focus:ring-offset-0 focus:ring-green-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="RememberMe">
                                    <label class="form-checkbox-label text-slate-400" for="RememberMe">Remember me</label>
                                </div>
                                <p class="text-slate-400 mb-0"><a href="reset-password.php" class="text-slate-400">Forgot password ?</a></p>
                            </div>

                            <div class="mb-4">
                                <input type="submit" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md w-full" value="Login / Sign in">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!--end section -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/no-sidebar.php";
?>   