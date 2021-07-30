 <?php $__env->slot('header'); ?> 
    <h2 class="h4 font-weight-bold">
        <?php echo e(__('Invoice')); ?> #<?php echo e($invoice->invoice_number); ?>

    </h2>
 <?php $__env->endSlot(); ?>

<div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.action-section','data' => ['class' => 'mt-3']]); ?>
<?php $component->withName('jet-action-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mt-3']); ?>
         <?php $__env->slot('title'); ?> 
            <?php echo e(__('Invoice Details')); ?>

         <?php $__env->endSlot(); ?>
    
         <?php $__env->slot('description'); ?> 
            <?php echo e(__('View the general invoice details')); ?>

         <?php $__env->endSlot(); ?>
    
         <?php $__env->slot('content'); ?> 
            <div class="test-sm text-muted">
                <div class="row">
                    <div class="col-6">
                        <strong><?php echo e(__('Invoice Number')); ?></strong> <?php echo e($invoice->invoice_number); ?><br>
                        <strong><?php echo e(__('Invoice Date')); ?></strong> <?php echo e($invoice->invoice_date); ?><br>
                    </div>
                    <div class="col-6">
                        <strong><?php echo e(__('Invoice recipient')); ?></strong><br>
                        <strong><?php echo e($invoice->name); ?></strong><br>
                        <?php echo e($invoice->street); ?><br>
                        <?php echo e($invoice->postcode); ?> <?php echo e($invoice->city); ?><br>
                        <?php echo e($invoice->country); ?><br>
                        <?php echo e($invoice->vatnr); ?>

                    </div>
                </div>
            </div>
         <?php $__env->endSlot(); ?>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.action-section','data' => ['class' => 'mt-3']]); ?>
<?php $component->withName('jet-action-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mt-3']); ?>
         <?php $__env->slot('title'); ?> 
            <?php echo e(__('Invoice Items')); ?>

         <?php $__env->endSlot(); ?>
    
         <?php $__env->slot('description'); ?> 
            <?php echo e(__('An overview of the items charged.')); ?>

         <?php $__env->endSlot(); ?>
    
         <?php $__env->slot('content'); ?> 
            <table class="table">
                <tr>
                    <th><?php echo e(__('Description')); ?></th>
                    <th><?php echo e(__('Excl. VAT')); ?></th>
                    <th><?php echo e(__('VAT')); ?></th>
                    <th><?php echo e(__('Incl. VAT')); ?></th>
                </tr>
                <?php $__currentLoopData = $invoice->invoiceItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->description); ?></td>
                        <td>€<?php echo e(number_format($item->excl_amount, 2, ".", " ")); ?></td>
                        <td>€<?php echo e(number_format($item->vat_amount, 2, ".", " ")); ?></td>
                        <td>€<?php echo e(number_format($item->incl_amount, 2, ".", " ")); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e(__('Total')); ?></th>
                    <th>€<?php echo e(number_format($invoice->excl_amount, 2, ".", " ")); ?></th>
                    <th>€<?php echo e(number_format($invoice->vat_amount, 2, ".", " ")); ?></th>
                    <th>€<?php echo e(number_format($invoice->incl_amount, 2, ".", " ")); ?></th>
                </tr>
            </table>
         <?php $__env->endSlot(); ?>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <?php if($invoice->status < 2): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.action-section','data' => ['class' => 'mt-3']]); ?>
<?php $component->withName('jet-action-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mt-3']); ?>
             <?php $__env->slot('title'); ?> 
                <?php echo e(__('Payment')); ?>

             <?php $__env->endSlot(); ?>
        
             <?php $__env->slot('description'); ?> 
                <?php echo e(__('Complete the invoice payment.')); ?>

             <?php $__env->endSlot(); ?>
        
             <?php $__env->slot('content'); ?> 
                <div class="test-sm text-muted">
                    <?php echo e(__('You can easily pay the invoice online.')); ?>

                </div>
        
                <div class="mt-3 d-flex align-items-baseline">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['wire:click' => 'startPayment','wire:loading.attr' => 'disabled']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:click' => 'startPayment','wire:loading.attr' => 'disabled']); ?>
                        <?php echo e(__('Betaling starten')); ?>

                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
             <?php $__env->endSlot(); ?>
         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php endif; ?>
</div><?php /**PATH /var/www/html/hosting/src/ServiceProvider/../../resources/views/livewire/billing-detail.blade.php ENDPATH**/ ?>