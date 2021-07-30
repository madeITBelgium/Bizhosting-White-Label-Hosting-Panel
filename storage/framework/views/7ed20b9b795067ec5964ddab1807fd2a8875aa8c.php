 <?php $__env->slot('header'); ?> 
    <h2 class="h4 font-weight-bold">
        <?php echo e(__('Domainname')); ?>

    </h2>
 <?php $__env->endSlot(); ?>

<div class="pb-5 pt-3">
    <div class="container">
        <div class="row mb-5">
            <div class="col col-md-6 d-flex justify-content-end">
                <button class="btn btn-primary mr-3" wire:click="$toggle('checkDomainname')"><?php echo e(__('Check')); ?></button>
                <a href="<?php echo e(route('hosting.create')); ?>" class="btn btn-primary">+ <?php echo e(__('Domainname')); ?></a>
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
                    <?php if($domainnames->count()): ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('ID')); ?></th>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('End At')); ?></th>
                                    <th><?php echo e(__('Created')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $domainnames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><a href="<?php echo e(route('hosting.domainname.show', $item)); ?>"><?php echo e($item->id); ?></a></td>
                                    <td><a href="<?php echo e(route('hosting.domainname.show', $item)); ?>"><?php echo e($item->domainname); ?></a></td>
                                    <td><?php echo e(optional($item->end_at)->format('d-m-Y H:i')); ?></td>
                                    <td><?php echo e($item->created_at->format('d-m-Y H:i')); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <?php echo e($domainnames->links()); ?>

                    <?php else: ?>
                        <p class="alert alert-warning">
                            <?php echo e(__('Je hebt nog geen domeinnaam, voeg nu een domeinnaam toe!')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dialog-modal','data' => ['wire:model' => 'checkDomainname']]); ?>
<?php $component->withName('jet-dialog-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'checkDomainname']); ?>
         <?php $__env->slot('title'); ?> 
            <?php echo e(__('Check domainname')); ?>

         <?php $__env->endSlot(); ?>

         <?php $__env->slot('content'); ?> 
            <div class="alert alert-success" role="alert" x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('<?php echo e($_instance->id); ?>').on('available', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 5000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;">
                De domeinnaam <?php echo e($this->domainname); ?> is vrij.
            </div>
            <div class="alert alert-warning" role="alert" x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('<?php echo e($_instance->id); ?>').on('notavailable', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 5000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;">
                De domeinnaam <?php echo e($this->domainname); ?> is NIET vrij.
            </div>
            <div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'domainname','value' => ''.e(__('Domainname')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'domainname','value' => ''.e(__('Domainname')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => ''.e($errors->has('domainname') ? 'is-invalid' : '').'','placeholder' => ''.e(__('Domainname')).'','wire:model.defer' => 'domainname']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => ''.e($errors->has('domainname') ? 'is-invalid' : '').'','placeholder' => ''.e(__('Domainname')).'','wire:model.defer' => 'domainname']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'domainname']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'domainname']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('footer'); ?> 
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.secondary-button','data' => ['wire:click' => '$toggle(\'checkDomainname\')','wire:loading.attr' => 'disabled']]); ?>
<?php $component->withName('jet-secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:click' => '$toggle(\'checkDomainname\')','wire:loading.attr' => 'disabled']); ?>
                <?php echo e(__('Close')); ?>

             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['wire:click' => 'doDomainnameCheck','wire:loading.attr' => 'disabled']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:click' => 'doDomainnameCheck','wire:loading.attr' => 'disabled']); ?>
                <?php echo e(__('Check')); ?>

             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div><?php /**PATH /var/www/html/hosting/src/ServiceProvider/../../resources/views/livewire/domainname/index.blade.php ENDPATH**/ ?>