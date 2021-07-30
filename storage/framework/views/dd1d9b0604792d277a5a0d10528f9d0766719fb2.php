 <?php $__env->slot('header'); ?> 
    <h2 class="h4 font-weight-bold">
        <?php echo e(__('Domainname')); ?>

    </h2>
 <?php $__env->endSlot(); ?>

<div class="pb-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col p-6 card">
                <div class="card-body">
                    <?php if($invoices->count()): ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('Number')); ?></th>
                                    <th><?php echo e(__('Date')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th><?php echo e(__('Amount Incl. VAT')); ?></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->invoice_number); ?></td>
                                    <td><?php echo e($item->invoice_date->format('d/m/Y')); ?></td>
                                    <td><?php echo e($item->status_str); ?></td>
                                    <td>€<?php echo e(number_format($item->incl_amount, 2, ",", " ")); ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Controls">
                                            <a href="<?php echo e(route('hosting.billing.detail', $item->id)); ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                            <?php if(!empty($item->invoice_pdf)): ?>
                                                <a href="<?php echo e($item->invoice_pdf); ?>" target="_blank" class="btn btn-success btn-sm"><i class="fas fa-download"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <?php echo e($invoices->links()); ?>

                    <?php else: ?>
                        <p class="alert alert-info">
                            <?php echo e(__('Je hebt nog geen facturen.')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/hosting/src/ServiceProvider/../../resources/views/livewire/billing.blade.php ENDPATH**/ ?>