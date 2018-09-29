<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
      <div class="m-b-md">
        <a class="btn btn-primary" href="/projects/create">
            <?php echo e(__('Buat Project Baru')); ?>

        </a> </br></br>
        <a class="btn btn-primary" href="/users">
            <?php echo e(__('Lihat user')); ?>

        </a>
      </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>