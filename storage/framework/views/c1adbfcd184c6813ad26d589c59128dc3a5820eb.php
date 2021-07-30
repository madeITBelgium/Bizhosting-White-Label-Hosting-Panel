<?php $__env->startComponent('mail::message'); ?>
<?php echo e(__('Hi,')); ?>


<?php echo e(__('A new invoice has been created for the purchased services.')); ?>


<?php if($invoice->status < 2): ?>
*<?php echo e(__('You can easily pay the invoice online via the button below.')); ?>*
<?php else: ?>
*<?php echo e(__('The invoice was paid online.')); ?>*
<?php endif; ?>

<?php $__env->startComponent('mail::button', ['url' => route('hosting.billing.detail', $invoice->id)]); ?>
<?php echo e(__('View Invoice')); ?>

<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

# <?php echo e(__('Invoice Details')); ?>

**<?php echo e(__('Invoice Date')); ?>:** <?php echo e($invoice->invoice_date); ?>  
**<?php echo e(__('Invoice Number')); ?>:** <?php echo e($invoice->invoice_number); ?>  
**<?php echo e(__('Invoice Amount')); ?>:** €<?php echo e(number_format($invoice->incl_amount, 2, ",", " ")); ?>


<?php $__env->startComponent('mail::table'); ?>
| Description   | Amount        |
|:------------- |:-------------:|
<?php $__currentLoopData = $invoice->invoiceItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
| <?php echo e($item->description); ?>     | €<?php echo e(number_format($item->incl_amount, 2, ",", " ")); ?>      |
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if (isset($__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906)): ?>
<?php $component = $__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906; ?>
<?php unset($__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


<?php echo e(__('Thanks,')); ?><br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?><?php /**PATH /var/www/html/hosting/src/ServiceProvider/../../resources/views/email/sent-invoice.blade.php ENDPATH**/ ?>