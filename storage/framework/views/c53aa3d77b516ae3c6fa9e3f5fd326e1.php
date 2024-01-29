<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo e($todo); ?>

    <h2>Muokkaa todo</h2>
<!-- Tee todo lisäämistä varten lomake -->



<form method="post" action="<?php echo e(route('UpdateTodo', ['todo' => $todo->id])); ?>">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-sm-2">
            <label class="form-label">Todo nimi</label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="todo-nimi" value="<?php echo e($todo->nimi); ?>" 
            <?php $__errorArgs = ['todo-nimi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="bg-danger">Täytä kenttä</span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <label class="form-label">Todo selite</label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="todo-selite" value="<?php echo e($todo->selite); ?>" 
            <?php $__errorArgs = ['todo-selite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="bg-danger">Täytä kenttä</span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <label class="form-label">Todo Status</label>
        </div>
        
        <div class="col-sm-4">
        <div>
            <input type="radio" class="form-check-input" name="todo-status" value="idea" <?php echo e(($todo->status == 'Idea') ? 'checked':''); ?>>Idea<br>
        </div>

        <div>

            <input type="radio" class="form-check-input" name="todo-status" value="aloitettu" <?php echo e(($todo->status == 'Aloitettu') ? 'checked':''); ?>>Aloitettu<br>
        </div>

        <div>

            <input type="radio" class="form-check-input" name="todo-status" value="kesken" <?php echo e(($todo->status == 'Kesken' ? 'checked'):''); ?>>Kesken<br>
        </div>

        <div>

            <input type="radio" class="form-check-input" name="todo-status" value="valmis" <?php echo e(($todo->status == 'Valmis' ? 'checked'):''); ?>>Valmis<br>
        </div>

            
            <div>

            <?php $__errorArgs = ['todo-status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="bg-danger">Täytä kenttä</span>
            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-4">
        <input type="submit" value="Lisää todo">
        <input type="reset" value="Tyhjennä lomake">
        </div>
    </div>

</form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Ristomatti\oma_projekti\resources\views/todo/todoEdit.blade.php ENDPATH**/ ?>