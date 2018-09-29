<?php $__env->startSection('content'); ?>
<div class="container">

    <?php if(count($errors) > 0): ?>
      <div class="alert alert-danger">
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li> <?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>

    <form method="POST" action="/projects/<?php echo e($project->id); ?>">

      <div class="form-group row">
          <label for="judul" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Judul Proyek')); ?></label>

          <div class="col-md-6">
              <input id="judul" type="text" class="form-control<?php echo e($errors->has('judul') ? ' is-invalid' : ''); ?>" name="judul"
                  value="<?php echo e(old('judul') ? old('judul') : $project->judul); ?>" required>

              <?php if($errors->has('judul')): ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($errors->first('judul')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>
      </div>


      <div class="form-group row">
          <label for="dibuat" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tanggal dibuat')); ?></label>

          <div class="col-md-6">
              <input id="dibuat" type="datetime" class="form-control<?php echo e($errors->has('dibuat') ? ' is-invalid' : ''); ?>" name="dibuat"
                  value="<?php echo e(old('dibuat') ? old('dibuat') : $project->dibuat); ?>" required>

              <?php if($errors->has('dibuat')): ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($errors->first('dibuat')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="ditutup" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tanggal ditutup')); ?></label>

          <div class="col-md-6">
              <input id="ditutup" type="datetime" class="form-control<?php echo e($errors->has('ditutup') ? ' is-invalid' : ''); ?>" name="ditutup"
                  value="<?php echo e(old('ditutup') ? old('ditutup') : $project->ditutup); ?>" required>

              <?php if($errors->has('ditutup')): ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($errors->first('ditutup')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="deskripsi" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Deskripsi Project')); ?></label>

          <div class="col-md-6">
              <textarea rows="4" cols="50" style="resize:none" id="deskripsi" type="text" class="form-control<?php echo e($errors->has('deskripsi') ? ' is-invalid' : ''); ?>" name="deskripsi"
                  value="<?php echo e(old('deskripsi') ? old('deskripsi') : $project->deskripsi); ?>" required></textarea>
              <?php if($errors->has('deskripsi')): ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($errors->first('deskripsi')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="jumlah_uang" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Jumlah Uang yang Dibutuhkan')); ?></label>

          <div class="col-md-6">
              <input id="jumlah_uang" type="number" class="form-control<?php echo e($errors->has('jumlah_uang') ? ' is-invalid' : ''); ?>" name="jumlah_uang"
                  value="<?php echo e(old('jumlah_uang') ? old('jumlah_uang') : $project->jumlah_uang); ?>" required>

              <?php if($errors->has('jumlah_uang')): ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($errors->first('jumlah_uang')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="slot" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Banyak Slot')); ?></label>

          <div class="col-md-6">
              <input id="slot" type="number" class="form-control<?php echo e($errors->has('slot') ? ' is-invalid' : ''); ?>" name="slot"
                  value="<?php echo e(old('slot') ? old('slot') : $project->slot); ?>" required>

              <?php if($errors->has('slot')): ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($errors->first('slot')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>
      </div>

      <div class="form-group row">
          <label for="slot" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Submit Gambar')); ?></label>

          <div class="col-md-6">
              <input id="featured_image" type="file" class="form-control<?php echo e($errors->has('featured_image') ? ' is-invalid' : ''); ?>" name="featured_image"
                value="<?php echo e(old('featured_image') ? old('featured_image') : $project->featured_image); ?>" required>

              <?php if($errors->has('featured_image')): ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($errors->first('featured_image')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>
      </div>

      <?php echo e(csrf_field()); ?>

      <input type="hidden" name="_method" value="PUT">

      <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                  <?php echo e(__('Edit Project')); ?>

              </button>

              <a class="btn btn-light" href="/projects">
                  <?php echo e(__('Kembali')); ?>

              </a>
          </div>
      </div>

    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>