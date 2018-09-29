<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!</br>
                    
                    <?php if(auth()->user()->isAdmin()): ?>
                    <a href="<?php echo e(url('/admin')); ?>">Ke Page Admin</a></br>
                    <a href="<?php echo e(url('/topups/approval')); ?>">Approve User Top Up</a>
                    <?php else: ?>
                    <a href="<?php echo e(url('/saldos')); ?>">Top UP</a></br>
                    <a href="<?php echo e(url('/topups')); ?>">Isi Saldo</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>