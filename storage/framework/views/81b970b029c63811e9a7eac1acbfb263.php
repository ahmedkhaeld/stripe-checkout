<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>
    </head>
    <body class="antialiased">
        <div style="display: flex; gap: 3rem;">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex: 1">
                    <img src="<?php echo e($product->image); ?>" style="max-width: 100%">
                    <h5><?php echo e($product->name); ?></h5>
                    <p>$<?php echo e($product->price); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <p>
        <form action="<?php echo e(route('checkout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button>Checkout</button>
        </form>
        </p>
    </body>
</html>
<?php /**PATH /var/www/html/resources/views/product/index.blade.php ENDPATH**/ ?>