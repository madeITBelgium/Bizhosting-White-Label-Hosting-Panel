<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!-- Page Header-->
    <div class="container-fluid">
        <div class="row bg-primary text-white">
            <div class="col-12 pt-5 mt-5 mb-5 text-center">
                <h1>
                    Domeinnamen <?php echo e(config('app.name')); ?>

                </h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-sm-4">
                        <div>
                            <i class="fas fa-euro-sign fa-4x d-block mx-auto"></i>
                            <div class="mt-2">
                                <h3 class="text-center">Zeer voordelig, vanaf €<?php echo e(number_format(\MadeITBelgium\Hosting\Models\Topleveldomain::min('sell_price'), 2, ",", "")); ?></h3>
                                <p>Domeinnamen zijn maar 1 jaar geldig, je moet het dus elk jaar opnieuw verlengen. Door onze voordelige prijzen doe je dat met plezier, een kleine investering die zeer veel kan opbrengen. Dat vanaf €<?php echo e(number_format(\MadeITBelgium\Hosting\Models\Topleveldomain::min('sell_price'), 2, ",", "")); ?> incl. BTW per jaar.</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <i class="fas fa-list-ol fa-4x d-block mx-auto"></i>
                            <div class="mt-2">
                                <h3 class="text-center"><?php echo e(\MadeITBelgium\Hosting\Models\Topleveldomain::count()); ?> aantal mogelijkheden</h3>
                                <p>Door de komst van nieuwe TLDs bieden we u bijna het grootste aantal verschillende extensies aan. Bij ons kan je de zelfde naam registeren met 543 extenties!</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <i class="fas fa-server fa-4x d-block mx-auto"></i>
                            <div class="mt-2">
                                <h3 class="text-center">Gratis DNS service</h3>
                                <p>Met een domeinnaam alleen ben je niets, een domeinnaam kan je gebruiken voor je website of doorsturen naar een bestaande website. Bij Made I.T. hosting geniet je van een gratis DNS service voor het opzetten van je domeinnaam.</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/domainname.blade.php ENDPATH**/ ?>