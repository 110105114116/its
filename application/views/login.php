<!DOCTYPE html>
<html lang="en" dir="ltr" >
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>img/logo-mini.png" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css" />
        <title>SIGN IN | INFORMATION TECHNOLOGY SYSTEM</title>
    </head>

    <body class="DEFAULT_THEME ">
        <main>
            <div class="flex flex-col w-full overflow-hidden relative min-h-screen radial-gradient items-center justify-center g-0 px-4">
                <div class="justify-center items-center w-full card lg:flex max-w-md ">
                    <div class=" w-full card-body">
                        <p class="mb-4 text-gray-400 text-3xl text-center font-semibold">Sign in</p>
                        <?php  echo $this->session->flashdata('msgerr'); ?>
                        <form method="post" action="<?php echo base_url(); ?>login/validLogin">
                            <div class="mb-4">
                                <label for="forUsername" class="block text-sm mb-2 text-gray-400">Username</label>
                                <input 
                                    type="text" 
                                    name="username"
                                    id="forUsername" 
                                    class="py-3 px-4 block w-full border-gray-200 rounded-sm 
                                            text-sm focus:border-blue-600 focus:ring-0 " 
                                    aria-describedby="hs-input-helper-text"
                                    required
                                    autocomplete="off">
                            </div>
                            
                            <div class="mb-6">
                                <label for="forPassword" class="block text-sm  mb-2 text-gray-400">Password</label>
                                <input 
                                    type="password" 
                                    name="password"
                                    id="forPassword"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-sm 
                                            text-sm focus:border-blue-600 focus:ring-0 " 
                                    aria-describedby="hs-input-helper-text"
                                    required>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="flex"></div>
                                <a href="<?php echo base_url(); ?>login/forget" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Forgot Password ?</a>
                            </div>
                                <div class="grid my-6">
                                    <button 
                                        type="submit"
                                        class="btn py-[10px] text-base text-white font-medium hover:bg-blue-700"
                                    >Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/simplebar/dist/simplebar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/@preline/dropdown/index.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/@preline/overlay/index.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    </body>
</html>