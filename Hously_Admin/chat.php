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
            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Chatbox</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><a href="index.php">Hously</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                    <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Chat</li>
                </ul>
            </div>

            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-2">
                <div class="xl:col-span-3 lg:col-span-5 md:col-span-5">
                    <div class="rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="text-center p-6 border-b border-gray-100 dark:border-gray-800">
                            <img src="<?php echo $static_url; ?>/images/client/07.jpg" class="size-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                            <h5 class="mt-3 font-medium text-xl mb-0">Calvin Carlo</h5>
                            <p class="text-slate-400 mb-0">Property Dealer</p>
                        </div>

                        <div class="p-2 max-h-[482px]" data-simplebar>
                            
                            <!-- chatbox code  -->
                            <?php
                                include "$base_dir/Components/Chat/chatbox.php";
                            ?>

                        </div>
                    </div>
                </div>

                <div class="xl:col-span-9 lg:col-span-7 md:col-span-7">
                    <div class="rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="flex justify-between items-center border-b border-gray-100 dark:border-gray-800 p-4">
                            <div class="flex">
                                <img src="<?php echo $static_url; ?>/images/client/01.jpg" class="size-11 rounded-full shadow dark:shadow-gray-700" alt="">
                                <div class="overflow-hidden ms-3">
                                    <a href="#" class="block font-semibold text-truncate">Cristino Murfy</a>
                                    <span class="text-slate-400 flex items-center text-sm"><span class="bg-green-600 text-white text-[10px] font-bold rounded-full size-2 me-1"></span> Online</span>
                                </div>
                            </div>

                            <div class="dropdown relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                    <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-green-600/5 hover:bg-green-600 border-green-600/10 hover:border-green-600 text-green-600 hover:text-white rounded-md"><i class="mdi mdi-dots-vertical"></i></span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <ul class="py-2 text-start">
                                        <li>
                                            <a href="" class="block py-1.5 px-4 hover:text-green-600"><i class="mdi mdi-account-outline"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="" class="block py-1.5 px-4 hover:text-green-600"><i class="mdi mdi-cog-outline"></i> Profile Settings</a>
                                        </li>
                                        <li>
                                            <a href="" class="block py-1.5 px-4 hover:text-green-600"><i class="mdi mdi-trash-can-outline"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <ul class="p-4 list-none mb-0 max-h-[548px]" data-simplebar>
                            <li>
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative">
                                            <img src="<?php echo $static_url; ?>/images/client/01.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="ms-2 max-w-lg">
                                            <p class="bg-white dark:bg-slate-900 text-slate-400 text-[16px] shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">Hey Calvin</p>
                                            <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>59 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="text-end">
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative order-2">
                                            <img src="<?php echo $static_url; ?>/images/client/07.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="me-2 max-w-lg">
                                            <p class="bg-white dark:bg-slate-900 text-slate-400 text-[16px] shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">Hello Cristino</p>
                                            <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>45 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="text-end">
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative order-2">
                                            <img src="<?php echo $static_url; ?>/images/client/07.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="me-2 max-w-lg">
                                            <p class="bg-white dark:bg-slate-900 text-slate-400 text-[16px] shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">How can i help you?</p>
                                            <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>44 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative">
                                            <img src="<?php echo $static_url; ?>/images/client/01.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="ms-2 max-w-lg">
                                            <p class="bg-white dark:bg-slate-900 text-slate-400 text-[16px] shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">Nice to meet you</p>
                                            <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>42 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative">
                                            <img src="<?php echo $static_url; ?>/images/client/01.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="ms-2 max-w-lg">
                                            <p class="bg-white dark:bg-slate-900 text-slate-400 text-[16px] shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">Hope you are doing fine?</p>
                                            <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>40 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="text-end">
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative order-2">
                                            <img src="<?php echo $static_url; ?>/images/client/07.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="me-2 max-w-lg">
                                            <p class="bg-white dark:bg-slate-900 text-slate-400 text-[16px] shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">I'm good thanks for asking</p>
                                            <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>38 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative">
                                            <img src="<?php echo $static_url; ?>/images/client/01.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="ms-2 max-w-lg">
                                            <p class="bg-white dark:bg-slate-900 text-slate-400 text-[16px] shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">I am intrested to know more about your prices and services you offer</p>
                                            <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>35 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="text-end">
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative order-2">
                                            <img src="<?php echo $static_url; ?>/images/client/07.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="me-2 max-w-lg">
                                            <p class="bg-white dark:bg-slate-900 text-slate-400 text-[16px] shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">Sure please check below link to find more useful information <a href="https://shreethemes.in/hously/" target="_blank" class="text-green-600">https://shreethemes.in/hously/</a></p>
                                            <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>29 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative">
                                            <img src="<?php echo $static_url; ?>/images/client/01.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="ms-2 max-w-lg">
                                            <p class="bg-white dark:bg-slate-900 text-slate-400 text-[16px] shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">Thank you 😊</p>
                                            <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>26 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="text-end">
                                <div class="inline-block">
                                    <div class="flex mb-3">
                                        <div class="relative order-2">
                                            <img src="<?php echo $static_url; ?>/images/client/07.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 end-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="me-2 max-w-lg">
                                            <p class="bg-white dark:bg-slate-900 text-slate-400 text-[16px] shadow dark:shadow-gray-700 px-3 py-2 rounded mb-1">Welcome</p>
                                            <span class="text-slate-400 text-sm"><i class="mdi mdi-clock-outline me-1"></i>15 min ago</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inline-block">
                                    <div class="flex items-center mb-3">
                                        <div class="relative">
                                            <img src="<?php echo $static_url; ?>/images/client/01.jpg" class="size-9 min-w-[36px] rounded-full shadow dark:shadow-gray-700" alt="">
                                            <span class="absolute top-0.5 start-0.5 flex items-center justify-center bg-green-600 text-white text-[10px] font-bold rounded-full size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-green-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                        </div>
                                            
                                        <div class="ms-2 max-w-lg">
                                            <p class="text-slate-400 text-sm rounded mb-1">Cristino is typing
                                                <span class="animate-typing ms-1">
                                                    <span class="dot inline-block size-1 bg-slate-400 -mr-px opacity-60 rounded-full"></span>
                                                    <span class="dot inline-block size-1 bg-slate-400 -mr-px opacity-60 rounded-full"></span>
                                                    <span class="dot inline-block size-1 bg-slate-400 -mr-px opacity-60 rounded-full"></span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="p-2 border-t border-gray-100 dark:border-gray-800">
                            <div class="flex ">
                                <input type="text" class="form-input w-full py-2 px-3 h-9 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Enter Message...">

                                <div class="min-w-[125px] text-end">
                                    <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md"><i class="mdi mdi-send"></i></a>
                                    <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md"><i class="mdi mdi-emoticon-happy-outline"></i></a>
                                    <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md"><i class="mdi mdi-paperclip"></i></a>
                                </div>
                            </div>
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