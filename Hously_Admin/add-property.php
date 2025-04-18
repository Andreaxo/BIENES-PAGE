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
                <h5 class="text-lg font-semibold">Add Property</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><a href="index.php">Hously</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                    <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">Add Property</li>
                </ul>
            </div>

            <div class="container relative">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                    <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                        <div>
                            <p class="font-medium mb-4">Upload your property image here, Please click "Upload Image" Button.</p>
                            <div class="preview-box flex justify-center rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-gray-50 dark:bg-slate-800 text-slate-400 p-2 text-center small w-auto max-h-60">Supports JPG, PNG and MP4 videos. Max file size : 10MB.</div>
                            <input type="file" id="input-file" name="input-file" accept="image/*" onchange={handleChange()} hidden>
                            <label class="btn-upload btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-6 cursor-pointer" for="input-file">Upload Image</label>
                        </div>
                    </div>

                    <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                        <form class="">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12">
                                    <label for="name" class="font-medium">Title:</label>
                                    <input name="name" id="name" type="text" class="form-input mt-2" placeholder="Property Title :">
                                </div>

                                <div class="md:col-span-4 col-span-12">
                                    <label for="name" class="font-medium">Square ft:</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-arrow-expand-all absolute top-2 start-4 text-green-600"></i>
                                        <input name="number" id="sqf" type="number" class="form-input ps-11" placeholder="Size (sqf) :">
                                    </div>
                                </div>

                                <div class="md:col-span-4 col-span-12">
                                    <label for="name" class="font-medium">Beds:</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-bed absolute top-2 start-4 text-green-600"></i>
                                        <input name="number" id="beds" type="number" class="form-input ps-11" placeholder="Total Beds :">
                                    </div>
                                </div>

                                <div class="md:col-span-4 col-span-12">
                                    <label for="name" class="font-medium">Baths:</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-shower absolute top-2 start-4 text-green-600"></i>
                                        <input name="number" id="baths" type="number" class="form-input ps-11" placeholder="Baths :">
                                    </div>
                                </div>

                                <div class="col-span-12">
                                    <label for="name" class="font-medium">Price:</label>
                                    <div class="form-icon relative mt-2">
                                        <i class="mdi mdi-currency-usd absolute top-2 start-4 text-green-600"></i>
                                        <input name="number" id="price" type="number" class="form-input ps-11" placeholder="Price :">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Add Property</button>
                        </form>
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

<script>
    const handleChange = () => {
        const fileUploader = document.querySelector('#input-file');
        const getFile = fileUploader.files
        if (getFile.length !== 0) {
            const uploadedFile = getFile[0];
            readFile(uploadedFile);
        }
    }

    const readFile = (uploadedFile) => {
        if (uploadedFile) {
            const reader = new FileReader();
            reader.onload = () => {
            const parent = document.querySelector('.preview-box');
            parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
            };
            
            reader.readAsDataURL(uploadedFile);
        }
    };
</script>
<!-- JAVASCRIPTS -->
    