

<?php $__env->startSection('konten'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
</div>

<?php if(session()->has('success')): ?>
<div class="alert alert-success" role="alert">
  <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<div class="table-responsive">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Excerpt</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($loop->iteration); ?></td>
              <td><?php echo e($post->title); ?></td>
              <td><?php echo e($post->excerpt); ?></td>
              <td>
                <a href="/dashboard/posts/<?php echo e($post->slug); ?>" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/post<?php echo e($post->id); ?>" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/posts" method="post">
                  <?php echo method_field('delete'); ?>
                  <?php echo csrf_field(); ?>
                  <button class="badge bg-danger"><span data-feather="x-circle"></button>
                </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\pbn\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>