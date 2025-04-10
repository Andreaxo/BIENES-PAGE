<?php
$base_dir = __DIR__ . '/Base';
$static_url = '../assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/navbar-light.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page= 'light';
$fpage= 'foot';

// Optionally define the Hero block content
ob_start();
?>

        <!-- Start Hero -->
        <section class="relative table w-full py-32 lg:py-36 bg-[url('../../<?php echo $static_url; ?>/images/bg/01.jpg')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 text-center mt-10">
                    <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Blogs & News</h3>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="relative">
            <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->
        
        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-[30px]">
                    <div class="lg:col-span-8 md:order-1 order-2">
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px]">
                            
                            <!-- blog1 code  -->
                            <?php
                                include "$base_dir/Components/Pages/blog1.php";
                            ?>

                        </div><!--end grid-->
        
                        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                            <div class="md:col-span-12 text-center">
                                <nav>
                                    <ul class="inline-flex items-center -space-x-px">
                                        <li>
                                            <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                                <i class="uil uil-angle-left text-[20px]"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">2</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page" class="z-10 size-10 inline-flex justify-center items-center mx-1 rounded-full text-white bg-green-600 shadow-sm dark:shadow-gray-700">3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">4</a>
                                        </li>
                                        <li>
                                            <a href="#" class="size-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                                <i class="uil uil-angle-right text-[20px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div><!--end grid-->
                    </div><!--end col-->

                    <div class="lg:col-span-4 md:order-2 order-1">
                        <div class="sticky top-20">
                            <form>
                                <div>
                                    <label for="searchname" class="font-medium text-lg">Search Properties</label>
                                    <div class="relative mt-2">
                                        <i class="uil uil-search text-lg absolute top-[8px] start-3"></i>
                                        <input name="search" id="searchname" type="text" class="form-input border border-slate-100 dark:border-slate-800 ps-10" placeholder="Search">
                                    </div>
                                </div>
                            </form>

                            <h5 class="font-medium text-lg mt-[30px]">Recent post</h5>
                            <div class="flex items-center mt-4">
                                <img src="<?php echo $static_url; ?>/images/property/6.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                                <div class="ms-3">
                                    <a href="" class="font-medium hover:text-green-600">10 Things You About Real Estate</a>
                                    <p class="text-sm text-slate-400">2nd March 2023</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center mt-4">
                                <img src="<?php echo $static_url; ?>/images/property/7.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                                <div class="ms-3">
                                    <a href="" class="font-medium hover:text-green-600">Why We Love Real Estate</a>
                                    <p class="text-sm text-slate-400">2nd March 2023</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center mt-4">
                                <img src="<?php echo $static_url; ?>/images/property/8.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                                <div class="ms-3">
                                    <a href="" class="font-medium hover:text-green-600">110 Quick Tips About Real Estate</a>
                                    <p class="text-sm text-slate-400">2nd March 2023</p>
                                </div>
                            </div>

                            <h5 class="font-medium text-lg mt-[30px]">Social sites</h5>
                            <ul class="list-none mt-4">
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="facebook" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="instagram" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="twitter" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="linkedin" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="github" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="youtube" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-green-600 hover:text-white hover:bg-green-600"><i data-feather="gitlab" class="size-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>