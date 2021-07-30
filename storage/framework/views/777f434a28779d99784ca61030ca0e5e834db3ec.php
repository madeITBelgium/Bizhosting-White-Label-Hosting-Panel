 <?php $__env->slot('header'); ?> 
    <h2 class="h4 font-weight-bold">
        <?php echo e(__('Webhosting')); ?>

    </h2>
 <?php $__env->endSlot(); ?>

<div class="pb-5 pt-3">
    <div class="container">
        <div class="row mb-5">
            <div class="col col-md-6 d-flex justify-content-end">
                <a href="<?php echo e(route('hosting.create')); ?>" class="btn btn-primary">+ <?php echo e(__('Hosting')); ?></a>
            </div>
            <div class="col col-md-6 order-md-first">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" wire:model="search" placeholder="<?php echo e(__('Search ...')); ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col p-6 card">
                <div class="card-body">
                    <?php if($hostings->count()): ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Package')); ?></th>
                                    <th><?php echo e(__('Diskspace')); ?></th>
                                    <th><?php echo e(__('Price Excl VAT')); ?></th>
                                    <th><?php echo e(__('End At')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $hostings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hosting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><a href="<?php echo e(route('hosting.hosting.show', $hosting)); ?>"><?php echo e($hosting->domainname); ?></a></td>
                                    <td><?php echo e(config('hosting.hosting_packages.' . $hosting->package . '.name')); ?></td>
                                    <td><?php echo e(round($hosting->diskspace / 1000, 2)); ?>GB</td>
                                    <td>€<?php echo e(number_format($hosting->sell_price, 2, ",", "")); ?></td>
                                    <td><?php if($hosting->end_at !== null): ?> <?php echo e($hosting->end_at->format('d-m-Y')); ?> <?php endif; ?> </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <?php echo e($hostings->links()); ?>

                    <?php else: ?>
                        <p class="alert alert-warning">
                            <?php echo e(__('Je hebt nog geen webhosting, voeg nu een webhosting toe!')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/hosting/src/ServiceProvider/../../resources/views/livewire/hosting/index.blade.php ENDPATH**/ ?>