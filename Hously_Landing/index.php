<?php
$base_dir = __DIR__ . '/Base';
$static_url = '../assets'; // Asegúrate de que esta ruta sea correcta para tu servidor

// Include the common navlink content
ob_start();
include "$base_dir/navbar-dark.php"; // Este archivo contiene el contenido compartido de navlink
$navlink_content = ob_get_clean(); // Captura el contenido del navlink
$page = 'dark';
$fpage = 'foot';

// Define el contenido del bloque Hero
ob_start();
?>

        <!-- Hero Start -->
        <section class="relative mt-20">
            <div class="container-fluid md:mx-4 mx-2">
                <div class="relative pt-40 pb-52 table w-full rounded-2xl shadow-md overflow-hidden" id="home">
                    <div class="absolute inset-0 bg-black/60"></div>

                    <div class="container relative">
                        <div class="grid grid-cols-1">
                            <div class="md:text-start text-center">
                                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Te ayudamos a encontrar <br> tu <span class="text-green-600">increible</span> hogar</h1>
                                <p class="text-white/70 text-xl max-w-xl">¡Una gran plataforma, para rentar tus propiedades y encontrar tu hogar para habitar!</p>
                            </div>
                        </div><!--end grid-->
                    </div><!--end container-->
                </div>
            </div><!--end Container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Start -->
        <section class="relative md:pb-24 pb-16">
            <div class="container relative">
                <div class="grid grid-cols-1 justify-center">
                    <div class="relative -mt-32">
                        <div class="grid grid-cols-1">
                            <ul class="inline-block sm:w-fit w-full flex-wrap justify-center text-center p-4 bg-white dark:bg-slate-900 rounded-t-xl border-b dark:border-gray-800" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                                <li role="presentation" class="inline-block">
                                    <button class="px-6 py-2 text-base font-medium rounded-md w-full hover:text-green-600 transition-all duration-500 ease-in-out" id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab" aria-controls="buy-home" aria-selected="true">Rentar</button>
                                </li>

                            </ul>

                            <div id="StarterContent" class="p-6 bg-white dark:bg-slate-900 rounded-ss-none rounded-se-none md:rounded-se-xl rounded-xl shadow-md dark:shadow-gray-700">
                                <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                                    <form action="#">
                                        <div class="registration-form text-dark text-start">
                                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                                <div>
                                                    <label class="form-label font-medium text-slate-900 dark:text-white">Buscar : <span class="text-red-600">*</span></label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-search icons"></i>
                                                        <input name="name" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Busca con alguna palabra clave">
                                                    </div>
                                                </div>
                                                

                                                <div>
                                                    <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Selecciona una categoría:</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-estate icons"></i>
                                                        <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-buy" aria-label="Default select example">
                                                            <option>Casas</option>
                                                            <option>Apartamentos</option>
                                                            <option>Apartaestudios</option>
                                                            <option>Fincas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <div>
                                                    <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Precio Minimo:</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-buy" aria-label="Default select example">
                                                            <option>Precio Minimo</option>
                                                            <option>600.000</option>
                                                            <option>700.000</option>
                                                            <option>750.000</option>
                                                            <option>800.000</option>
                                                            <option>850.000</option>
                                                            <option>900.000</option>
                                                            <option>950.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <div>
                                                    <label for="buy-max-price" class="form-label font-medium text-slate-900 dark:text-white">Precio Maximo:</label>
                                                    <div class="filter-search-form relative mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price-buy" aria-label="Default select example">
                                                            <option>Precio Maximo</option>
                                                            <option>600.000</option>
                                                            <option>700.000</option>
                                                            <option>750.000</option>
                                                            <option>800.000</option>
                                                            <option>850.000</option>
                                                            <option>900.000</option>
                                                            <option>950.000</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="lg:mt-6">
                                                    <input type="submit" id="search-buy" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                                                </div>
                                            </div><!--end grid-->
                                        </div><!--end container-->
                                    </form>
                                </div>

                                <div class="hidden" id="sell-home" role="tabpanel" aria-labelledby="sell-home-tab">
                                    <form action="#">
                                        <div class="registration-form text-dark ltr:text-start rtl:text-end">
                                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                                <div>
                                                    <label class="form-label font-medium text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-search icons"></i>
                                                        <input name="name" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Selecciona la categoría:</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-estate icons"></i>
                                                        <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-sell" aria-label="Default select example">
                                                            <option>Casas</option>
                                                            <option>Apartamentos</option>
                                                            <option>Apartaestudios</option>
                                                            <option>Fincas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <div>
                                                    <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Precio Minimo:</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-sell" aria-label="Default select example">
                                                        <option>Precio Minimo</option>
                                                            <option>600.000</option>
                                                            <option>700.000</option>
                                                            <option>750.000</option>
                                                            <option>800.000</option>
                                                            <option>850.000</option>
                                                            <option>900.000</option>
                                                            <option>950.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <div>
                                                    <label for="buy-max-price" class="form-label font-medium text-slate-900 dark:text-white">Precio Maximo :</label>
                                                    <div class="filter-search-form relative mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price-sell" aria-label="Default select example">
                                                        <option>Precio Maximo</option>
                                                            <option>600.000</option>
                                                            <option>700.000</option>
                                                            <option>750.000</option>
                                                            <option>800.000</option>
                                                            <option>850.000</option>
                                                            <option>900.000</option>
                                                            <option>950.000</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="lg:mt-6">
                                                    <input type="submit" id="search-sell" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                                                </div>
                                            </div><!--end grid-->
                                        </div><!--end container-->
                                    </form>
                                </div>

                                <div class="hidden" id="rent-home" role="tabpanel" aria-labelledby="rent-home-tab">
                                    <form action="#">
                                        <div class="registration-form text-dark ltr:text-start rtl:text-end">
                                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                                <div>
                                                    <label class="form-label font-medium text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-search icons"></i>
                                                        <input name="name" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Selecciona una categoría:</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-estate icons"></i>
                                                        <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-rent" aria-label="Default select example">
                                                        <option>Casas</option>
                                                            <option>Apartamentos</option>
                                                            <option>Apartaestudios</option>
                                                            <option>Fincas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <div>
                                                    <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Precio Minimo :</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-rent" aria-label="Default select example">
                                                        <option>Precio Minimo</option>
                                                            <option>600.000</option>
                                                            <option>700.000</option>
                                                            <option>750.000</option>
                                                            <option>800.000</option>
                                                            <option>850.000</option>
                                                            <option>900.000</option>
                                                            <option>950.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <div>
                                                    <label for="buy-max-price" class="form-label font-medium text-slate-900 dark:text-white">Precio Maximo :</label>
                                                    <div class="filter-search-form relative mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price-rent" aria-label="Default select example">
                                                        <option>Precio Maximo</option>
                                                            <option>600.000</option>
                                                            <option>700.000</option>
                                                            <option>750.000</option>
                                                            <option>800.000</option>
                                                            <option>850.000</option>
                                                            <option>900.000</option>
                                                            <option>950.000</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="lg:mt-6">
                                                    <input type="submit" id="search-rent" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                                                </div>
                                            </div><!--end grid-->
                                        </div><!--end container-->
                                    </form>
                                </div>
                            </div>
                        </div><!--end grid-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                
                <!-- control code  -->
                <?php
                    include "$base_dir/Components/Home/control.php";
                ?>

            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">¿Cómo funciona?</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">¡Afiliate! y empieza a comisionar por propiedades, como por personas.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    
                    <!-- features code  -->
                    <?php
                        include "$base_dir/Components/Home/features.php";
                    ?>

                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Propiedades Destacadas</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Nuestras propiedades de los propiedades, con mejores reseñas y mejores arrendadores</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    
                    <!-- properties code  -->
                    <?php
                        include "$base_dir/Components/Home/properties.php";
                    ?>

                </div><!--en grid-->
            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">¿Qué dicen nuestros referidos?</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Es el mejor servicio para arrendar, y conseguir hogar, junto con todos los beneficios del mercado</p>
                </div><!--end grid-->

                <div class="flex justify-center relative mt-16">
                    <div class="relative lg:w-1/3 md:w-1/2 w-full">
                        <div class="absolute -top-20 md:-start-24 -start-0">
                            <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                        </div>

                        <div class="absolute bottom-28 md:-end-24 -end-0">
                            <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                        </div>

                        <div class="tiny-single-item">
                            
                            <!-- reviews code  -->
                            <?php
                                include "$base_dir/Components/Home/reviews.php";
                            ?>

                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                
                <!-- get-in-touch code  -->
                <?php
                    include "$base_dir/Components/Home/get-in-touch.php";
                ?>

            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>
        

        <script>
    easy_background("#home",
        {
            slide: ["<?php echo $static_url; ?>/images/bg/01.jpg", "<?php echo $static_url; ?>/images/bg/02.jpg", "<?php echo $static_url; ?>/images/bg/03.jpg"],
            delay: [4000, 4000, 4000]
        }
    );
</script>