<?php $__env->startSection('content'); ?>
<div class="container">

    <?php if(session('msg')): ?>
      <div class="alert alert-succes">
        <p> <?php echo e(session('msg')); ?></p>
      </div>
    <?php endif; ?>

    <div class="row">
      <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col md-4">
        <div class="thumbnails">
          <div class="caption"><?php echo e($project->judul); ?></div>
          <p><a href="/projects/<?php echo e($project->slug); ?>" class="btn btn-primary">Lihat Project</a></p>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>