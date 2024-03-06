    
    
    
    <?php $__env->startSection('admin','Doctors'); ?>

    <?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Doctors</h1>
        <a href="<?php echo e(route('doctors.create')); ?>" class="btn btn-sm btn-outline-primary" >Create</a>
    </div>
    <?php if(Session::get('status')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?php echo e(Session::get('status')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <?php if($doctors && count($doctors)): ?>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>speciality</th>
                    <th>Image</th>
                    <th></th>
                </tr>
        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($doctor->id); ?></td>
                    <td><?php echo e($doctor->name); ?></td>
                    <td><?php echo e($doctor->phone); ?></td>   
                    <td><?php echo e($doctor->speciality); ?></td>   
                    <td>
                        <img src="<?php echo e(asset('storage/doctors/' .$doctor->image)); ?>"alt="<?php echo e($doctor->name); ?>" style="height:90px"/>
                    </td>  
                    <td>
                        <a href="<?php echo e(route('doctors.edit', ['doctor' => $doctor->id])); ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <form action="<?php echo e(route('doctors.destroy', ['doctor' => $doctor->id])); ?>" class="d-inline" method="POST">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>     
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </table>
        </div>
    <?php else: ?>
        <p>0 Doctors!</p>
    <?php endif; ?>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/doctors/index.blade.php ENDPATH**/ ?>