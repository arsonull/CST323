;
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Job Postings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<?php $__env->startSection('content'); ?>
<body>
    <div>
        <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <form action="search" method="post" class="card card-sm">
                    	<?php echo e(csrf_field()); ?>

                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input name="posting_search" id="posting_search" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                            </div>
                            <!--end of col-->
                            <div class="col-auto">
                                <button class="btn btn-lg btn-success" type="submit">Search</button>
                            </div>
                            <!--end of col-->
                        </div>
                    </form>
                </div>
                <!--end of col-->
            </div>
        <div class="row">
        
        	<?php $__currentLoopData = $postings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<div class="col-sm-2">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo e($posting->getTitle()); ?></h5>
                    <a href="/TogetherPeopleStrong/view_posting/<?php echo e($posting->getId()); ?>" class="btn btn-primary">View</a>
                  </div>
                </div>
            </div>
        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>
    </div>
<?php $__env->stopSection(); ?>
</body>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\TogetherPeopleStrong\resources\views/viewPostings.blade.php ENDPATH**/ ?>