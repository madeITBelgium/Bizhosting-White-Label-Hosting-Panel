<?php $__env->startComponent('mail::message'); ?>
<?php echo e(__('Hi,')); ?>


<?php echo e(__('A new domainname has been registered. You will find all the necessary details via this email.')); ?>



# <?php echo e(__('Domainname Details')); ?>

**<?php echo e(__('Domainname')); ?>:** <?php echo e($domainname->domainname); ?>  
**<?php echo e(__('Expected renewal')); ?>:** <?php echo e($domainname->end_at); ?>


*<?php echo e(__('You can manage the nameservers on our website.')); ?>*

<?php $__env->startComponent('mail::button', ['url' => route('hosting.domainname.show', $domainname->id)]); ?>
<?php echo e(__('View Details')); ?>

<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php echo e(__('Thanks,')); ?><br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?><?php /**PATH /var/www/html/hosting/src/ServiceProvider/../../resources/views/email/sent-domainname.blade.php ENDPATH**/ ?>