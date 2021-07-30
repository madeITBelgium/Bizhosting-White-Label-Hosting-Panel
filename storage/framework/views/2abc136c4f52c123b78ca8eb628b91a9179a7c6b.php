<div>
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
                                <h3 class="text-center">Zeer voordelig, vanaf €<?php echo e(number_format(\MadeITBelgium\Hosting\Models\Topleveldomain::min('sell_price'), 2, ",", ".")); ?></h3>
                                <p>Domeinnamen zijn maar 1 jaar geldig, je moet het dus elk jaar opnieuw verlengen. Door onze voordelige prijzen doe je dat met plezier, een kleine investering die zeer veel kan opbrengen. Dat vanaf €<?php echo e(number_format(\MadeITBelgium\Hosting\Models\Topleveldomain::min('sell_price') * 1.21, 2, ",", ".")); ?> incl. BTW per jaar.</p> 
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <h2 class="text-center mb-2">Controleer of je domeinnaam nog vrij is.</h2>
                <div class="input-group mb-3">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => ''.e($errors->has('domainname') ? 'is-invalid' : '').'','placeholder' => ''.e(__('Domainname ex.: example.com')).'','wire:model.defer' => 'domainname']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => ''.e($errors->has('domainname') ? 'is-invalid' : '').'','placeholder' => ''.e(__('Domainname ex.: example.com')).'','wire:model.defer' => 'domainname']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="button" wire:click="checkDomainname()">Controleer</button>
                    </div>
                </div>

                <?php if($domainnameCheck !== null): ?>
                    <div class="d-flex justify-content-between p-3 bg-info text-white h5">
                        <div><?php echo e($domainname); ?></div>
                        <div>
                            <?php if($tld !== null): ?>
                                €<?php echo e(number_format($tld->sell_price * 1.21, 2, ",", ".")); ?>

                            <?php endif; ?>
                        </div>
                        <div><?php echo e($domainnameCheck == 'available' ? __('Available') : __('Taken')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <?php $__currentLoopData = \MadeITBelgium\Hosting\Models\Topleveldomain::orderBy('name', 'ASC')->get()->chunk(ceil(\MadeITBelgium\Hosting\Models\Topleveldomain::count() / 3)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tlds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col col-md-4">
                    <div class="card">
                        <table class="card-table table">
                            <?php $__currentLoopData = $tlds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tld): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($tld->name); ?></th>
                                <th class="text-right">€ <?php echo e(number_format($tld->sell_price * 1.21, 2, ',', '')); ?></th>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/domainname.blade.php ENDPATH**/ ?>