<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, []); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="h4 font-weight-bold">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="card shadow bg-light">
                <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                    <div class="mx-3 my-3">
                        <div class="mb-4">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.application-logo','data' => ['style' => 'width: 317px;']]); ?>
<?php $component->withName('jet-application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['style' => 'width: 317px;']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> Hosting Admin
                        </div>
    
                        <div class="text-muted">
                            
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-6 pr-0">
                        <div class="card-body border-right border-bottom p-3 h-100">
                            <div class="bd-highlight mb-3">
                                <div class="pl-3">
                                    <div class="mb-2">
                                        <a href="<?php echo e(route('hosting.admin.domainname.index')); ?>" class="h5 font-weight-bolder text-decoration-none text-dark"><?php echo e(__('Domainnames')); ?></a>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td><?php echo e(__('New last 7days')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Domainname::where('start_at', '>=', now()->subDays(7))->count()); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('New last 30days')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Domainname::where('start_at', '>=', now()->subDays(30))->count()); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Ending next 30 days')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Domainname::where('real_end_at', '<=', now()->addDays(30))->count()); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Renewed last 30 days')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Domainname::where('real_end_at', '>=', now()->addMonths(11))->count()); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('No Team')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Domainname::whereNull('team_id')->count()); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Total')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Domainname::count()); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 pl-0">
                        <div class="card-body border-bottom p-3 h-100">
                            <div class="bd-highlight mb-3">
                                <div class="pl-3">
                                    <div class="mb-2">
                                        <a href="<?php echo e(route('hosting.admin.hosting.index')); ?>" class="h5 font-weight-bolder text-decoration-none text-dark"><?php echo e(__('Hostings')); ?></a>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td><?php echo e(__('New last 7days')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Hosting::where('start_at', '>=', now()->subDays(7))->count()); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('New last 30days')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Hosting::where('start_at', '>=', now()->subDays(30))->count()); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Ending next 30 days')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Hosting::where('real_end_at', '<=', now()->addDays(30))->count()); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Renewed last 30 days')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Hosting::where('real_end_at', '>=', now()->addMonths(11))->count()); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('No Team')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Hosting::whereNull('team_id')->count()); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Total')); ?></td>
                                            <td><?php echo e(\MadeITBelgium\Hosting\Models\Hosting::count()); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 pr-0">
                        <div class="card-body border-right p-3 h-100">
                            <div class="bd-highlight mb-3">
                                <div class="pl-3">
                                    <div class="mb-2">
                                        <a href="<?php echo e(route('hosting.admin.domainname.index')); ?>" class="h5 font-weight-bolder text-decoration-none text-dark"><?php echo e(__('Billing')); ?></a>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td><?php echo e(__('New last 7days')); ?></td>
                                            <td>€<?php echo e(number_format(\MadeITBelgium\Hosting\Models\Invoice::where('invoice_date', '>=', now()->subDays(7))->sum('excl_amount'), 2, ",", ".")); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('New last 30days')); ?></td>
                                            <td>€<?php echo e(number_format(\MadeITBelgium\Hosting\Models\Invoice::where('invoice_date', '>=', now()->subDays(30))->sum('excl_amount'), 2, ",", ".")); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Yearly cost')); ?></td>
                                            <td>€<?php echo e(number_format(\MadeITBelgium\Hosting\Models\Hosting::sum('buy_price') * 12 + \MadeITBelgium\Hosting\Models\Domainname::sum('buy_price'), 2, ",", ".")); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__('Yearly revenue')); ?></td>
                                            <td>€<?php echo e(number_format(\MadeITBelgium\Hosting\Models\Hosting::sum('sell_price') * 12 + \MadeITBelgium\Hosting\Models\Domainname::whereNull('hosting_id')->sum('sell_price'), 2, ",", ".")); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 pl-0">
                        <div class="card-body p-3 h-100">
                            <div class="bd-highlight mb-3">
                                <div class="pl-3">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
 <?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/admin.blade.php ENDPATH**/ ?>