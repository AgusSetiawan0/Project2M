<?php $__env->startSection('content'); ?>
<div class="container">

    
    <div class="table-responsive">


      <table class="table table-striped" border="solid">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id User</td>
            <th scope="col">Nama User</td>
            <th scope="col">Email User</td>
            <th scope="col">Nomor Telepon User</td>
            <th scope="col">Saldo</td>
            <th scope="col">Akun di buat pada taggal</td>
            <th scope="col">Akun di edit pada tanggal</td>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->phone); ?></td>
                <td><?php echo e($user->saldo); ?></td>
                <td><?php echo e($user->created_at); ?></td>
                <td><?php echo e($user->updated_at); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>


    </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>