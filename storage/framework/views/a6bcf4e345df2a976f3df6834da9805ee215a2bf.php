<?php $__env->startComponent('mail::message'); ?>
<?php echo e(__('Hi,')); ?>


<?php echo e(__('A new web hosting has been activated. You will find all the necessary details via this email.')); ?>



# <?php echo e(__('Hosting Details')); ?>

**<?php echo e(__('Domainname')); ?>:** <?php echo e($hosting->domainname); ?>  
**<?php echo e(__('Server IP')); ?>:** http://193.58.112.106  
**<?php echo e(__('SSH/FTP Username')); ?>:** <?php echo e($hosting->username); ?>  
**<?php echo e(__('SSH/FTP Password')); ?>:** <?php echo e($hosting->password); ?>  
**<?php echo e(__('Documentroot')); ?>:** /home/<?php echo e($hosting->username); ?>/web/<?php echo e($hosting->domainname); ?>/<?php echo e($hosting->docroot); ?>

**<?php echo e(__('Package')); ?>:** <?php echo e(config('hosting.hosting_packages.' . $hosting->package .'.name')); ?>  
**<?php echo e(__('Expected renewal')); ?>:** <?php echo e($hosting->end_at); ?>


*<?php echo e(__('You can manage DNS settings, email accounts, databases or cron jobs on our website.')); ?>*

<?php $__env->startComponent('mail::button', ['url' => route('hosting.hosting.show', $hosting->id)]); ?>
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
<?php echo $__env->renderComponent(); ?><?php /**PATH /var/www/html/hosting/src/ServiceProvider/../../resources/views/email/sent-hosting.blade.php ENDPATH**/ ?>