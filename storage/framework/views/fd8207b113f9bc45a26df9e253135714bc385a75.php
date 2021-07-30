<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="h4 font-weight-bold">
            <?php echo e(__('Team Settings')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('teams.update-team-name-form', ['team' => $team])->html();
} elseif ($_instance->childHasBeenRendered('4l87EzX')) {
    $componentId = $_instance->getRenderedChildComponentId('4l87EzX');
    $componentTag = $_instance->getRenderedChildComponentTagName('4l87EzX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4l87EzX');
} else {
    $response = \Livewire\Livewire::mount('teams.update-team-name-form', ['team' => $team]);
    $html = $response->html();
    $_instance->logRenderedChild('4l87EzX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('teams.team-member-manager', ['team' => $team])->html();
} elseif ($_instance->childHasBeenRendered('Jn2yYS3')) {
    $componentId = $_instance->getRenderedChildComponentId('Jn2yYS3');
    $componentTag = $_instance->getRenderedChildComponentTagName('Jn2yYS3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Jn2yYS3');
} else {
    $response = \Livewire\Livewire::mount('teams.team-member-manager', ['team' => $team]);
    $html = $response->html();
    $_instance->logRenderedChild('Jn2yYS3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php if(Gate::check('delete', $team) && ! $team->personal_team): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-border','data' => []]); ?>
<?php $component->withName('jet-section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            <div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('teams.delete-team-form', ['team' => $team])->html();
} elseif ($_instance->childHasBeenRendered('dZbtyEI')) {
    $componentId = $_instance->getRenderedChildComponentId('dZbtyEI');
    $componentTag = $_instance->getRenderedChildComponentTagName('dZbtyEI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dZbtyEI');
} else {
    $response = \Livewire\Livewire::mount('teams.delete-team-form', ['team' => $team]);
    $html = $response->html();
    $_instance->logRenderedChild('dZbtyEI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        <?php endif; ?>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/teams/show.blade.php ENDPATH**/ ?>