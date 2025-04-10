<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Hously_Admin/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
$navlink_content = ob_get_clean(); // Capture the navlink content

// Optionally define the Hero block content
ob_start();
?>

        
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="flex justify-between items-center">
                <div>
                    <h5 class="text-xl font-semibold">Hello, Calvin</h5>
                    <h6 class="text-slate-400">Welcome back!</h6>
                </div>
            </div>

            <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
                
                <!-- total-properties code  -->
                <?php
                    include "$base_dir/Components/Dashboard/total-properties.php";
                ?>

            </div>

            <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-8">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                            <h6 class="text-lg font-semibold">Revenue Analytics</h6>
                            
                            <div class="position-relative">                                            
                                <select class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                    <option value="Y" selected>Yearly</option>
                                    <option value="M">Monthly</option>
                                    <option value="W">Weekly</option>
                                    <option value="T">Today</option>
                                </select>
                            </div>
                        </div>
                        <div id="mainchart" class="apex-chart px-4 pb-6"></div>
                    </div>
                </div>
            
                <div class="lg:col-span-4">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                            <h6 class="text-lg font-semibold">Sales Data</h6>

                            <div class="position-relative">                                            
                                <select class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                    <option value="Y" selected>Yearly</option>
                                    <option value="M">Monthly</option>
                                    <option value="W">Weekly</option>
                                    <option value="T">Today</option>
                                </select>
                            </div>
                        </div>

                        <div class="p-6">
                            
                            <!-- sales-data code  -->
                            <?php
                                include "$base_dir/Components/Dashboard/sales-data.php";
                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="xl:col-span-3 lg:col-span-6 order-1">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                            <h6 class="text-lg font-semibold">Area Map</h6>

                            <span class="text-slate-400">Last update 5 days ago</span>
                        </div>

                        <div class="p-6">
                            <div id="map" class="w-full h-[236px]"></div>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-6 lg:col-span-12 xl:order-2 order-3">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                            <h6 class="text-lg font-semibold">Recent Transections</h6>
                            
                            <a href="" class="btn btn-link font-normal text-slate-400 hover:text-green-600 after:bg-green-600 transition duration-500">View orders <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>

                        <div class="relative overflow-x-auto block w-full xl:max-h-[284px] max-h-[350px]" data-simplebar>
                            <table class="w-full text-start">
                                <thead class="text-base">
                                    <tr>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3"></th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[140px]">Date</th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[120px]">Name</th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3">Price</th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[40px]">Type</th>
                                        <th class="text-end font-semibold text-[15px] px-4 py-3 min-w-[70px]">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <!-- recent-transections code  -->
                                    <?php
                                        include "$base_dir/Components/Dashboard/recent-transections.php";
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="xl:col-span-3 lg:col-span-6 xl:order-3 order-2">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                            <h6 class="text-lg font-semibold">Top Properties</h6>

                            <a href="" class="btn btn-link font-normal text-slate-400 hover:text-green-600 after:bg-green-600 transition duration-500">See More <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>

                        <div class="relative overflow-x-auto block w-full max-h-[284px] p-6" data-simplebar>
                            
                            <!-- top-properties code  -->
                            <?php
                                include "$base_dir/Components/Dashboard/top-properties.php";
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div><!--end container-->


<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?> 