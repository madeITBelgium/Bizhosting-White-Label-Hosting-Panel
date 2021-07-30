<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
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
<?php endif; ?>
                        </div>
    
                        <div class="text-muted">
                            
                        </div>
                    </div>
                </div>
                <?php if(count($domainnames) === 0 && count($hostings) === 0 && count($invoices) === 0): ?>
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="card-body border-right border-bottom p-3 h-100">
                                <div class="bd-highlight mb-3">
                                    <div class="text-center">
                                        <?php echo e(__('This is your hosting dashboard where you can find all the details of your domain names, web hostings or servers.')); ?>

                                        <div class="text-center mt-5">
                                            <a href="<?php echo e(route('hosting.create')); ?>" class="btn btn-success btn-lg"><?php echo e(__('Add your first domainname or webhosting')); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row g-0">
                        <div class="col-md-6 pr-0">
                            <div class="card-body border-right border-bottom p-3 h-100">
                                <div class="bd-highlight mb-3">
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="<?php echo e(route('hosting.domainname.index')); ?>" class="h5 font-weight-bolder text-decoration-none text-dark"><?php echo e(__('Domainnames')); ?></a>
                                        </div>
                                        <?php if(count($domainnames) === 0): ?>
                                            <div class="alert alert-info"><?php echo e(__('No domainname found.')); ?></div>
                                        <?php else: ?>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo e(__('Name')); ?></th>
                                                        <th><?php echo e(__('End At')); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $domainnames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><a href="<?php echo e(route('hosting.domainname.show', $item)); ?>"><?php echo e($item->domainname); ?></a></td>
                                                        <td><?php echo e(optional($item->end_at)->format('d-m-Y H:i')); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-6 pl-0">
                            <div class="card-body border-bottom p-3 h-100">
                                <div class="bd-highlight mb-3">
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="<?php echo e(route('hosting.hosting.index')); ?>" class="h5 font-weight-bolder text-decoration-none text-dark"><?php echo e(__('Hostings')); ?></a>
                                        </div>
                                        <?php if(count($hostings) === 0): ?>
                                            <div class="alert alert-info"><?php echo e(__('No hosting found.')); ?></div>
                                        <?php else: ?>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo e(__('Name')); ?></th>
                                                        <th><?php echo e(__('Package')); ?></th>
                                                        <th><?php echo e(__('End At')); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $hostings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><a href="<?php echo e(route('hosting.hosting.show', $item)); ?>"><?php echo e($item->domainname); ?></a></td>
                                                        <td><?php echo e(config('hosting.hosting_packages.' . $item->package . '.name')); ?></td>
                                                        <td><?php echo e(optional($item->end_at)->format('d-m-Y H:i')); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-6 pr-0">
                            <div class="card-body border-right p-3 h-100">
                                <div class="bd-highlight mb-3">
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <a href="<?php echo e(route('hosting.billing')); ?>" class="h5 font-weight-bolder text-decoration-none text-dark"><?php echo e(__('Billing')); ?></a>
                                        </div>
                                        <?php if(count($invoices) > 0): ?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th><?php echo e(__('Number')); ?></th>
                                                    <th><?php echo e(__('Date')); ?></th>
                                                    <th><?php echo e(__('Amount')); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><a href="<?php echo e(route('hosting.billing')); ?>"><?php echo e($item->invoice_number); ?></a></td>
                                                    <td><?php echo e(optional($item->invoice_date)->format('d-m-Y')); ?></td>
                                                    <td><?php echo e($item->excl_amount); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                        <?php else: ?>
                                            <div class="alert alert-info"><?php echo e(__('No invoices found.')); ?></div>
                                        <?php endif; ?>
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
                <?php endif; ?>
            </div>
        </div>
    </div>    
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/dashboard.blade.php ENDPATH**/ ?>