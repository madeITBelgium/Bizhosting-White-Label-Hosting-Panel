<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/"><?php echo e(config('app.name')); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-lg-5">
                        <li class="nav-item"><a class="nav-link" href="/"><?php echo e(__('Home')); ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home.webhosting')); ?>"><?php echo e(__('Webhosting')); ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home.domainname')); ?>"><?php echo e(__('Domainname')); ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home.features')); ?>"><?php echo e(__('Features')); ?></a></li>
                    </ul>
                    <a class="btn btn-outline-success" href="/login"><?php echo e(__('Login')); ?></a>
                    <a class="btn btn-success ml-lg-4" href="/register"><?php echo e(__('Create account')); ?> <i class="ml-2 mt-1" data-feather="arrow-right"></i></a>
                </div>
            </div>
        </nav>
        
        <div class="flex-grow">

            <?php echo e($slot); ?>

        
        </div>
        <hr class="m-0" />
        <footer class="footer pt-5 pb-5 mt-auto bg-white footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-brand h3"><?php echo e(config('app.name')); ?></div>
                        
                        <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        
                        <div class="icon-list-social mb-5">
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-instagram"></i></a>
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-facebook"></i></a>
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-github"></i></a>
                            <a class="icon-list-social-link" href="#!"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="ml-auto col-lg-5 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs h5 mb-4"><?php echo e(__('General')); ?></div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="<?php echo e(route('home.webhosting')); ?>"><?php echo e(__('Webhosting')); ?></a></li>
                                    <li class="mb-2"><a href="<?php echo e(route('home.domainname')); ?>"><?php echo e(__('Domainname')); ?></a></li>
                                    <li class="mb-2"><a href="<?php echo e(route('home.faq')); ?>"><?php echo e(__('F.A.Q.')); ?></a></li>
                                    <li class="mb-2"><a href="<?php echo e(route('home.features')); ?>"><?php echo e(__('Features')); ?></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs h5 mb-4"><?php echo e(__('About us')); ?></div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="https://www.bizhosting.be"><?php echo e(__('Website')); ?></a></li>
                                    <li class="mb-2"><a href="<?php echo e(route('home.contact')); ?>"><?php echo e(__('Contact')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-5" />
                <div class="row align-items-center">
                    <div class="col-md-6 small"><?php echo e(__('Copyright')); ?> &#xA9; <?php echo e(date('Y')); ?> • <?php echo e(config('app.name')); ?></div>
                    <div class="col-md-6 text-md-right small">
                        <a href="/privacy-policy"><?php echo e(__('Privacy Policy')); ?></a>
                        &#xB7;
                        <a href="/terms-of-service"><?php echo e(__('Terms & Conditions')); ?></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>


        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html><?php /**PATH /var/www/html/resources/views/layouts/guest.blade.php ENDPATH**/ ?>