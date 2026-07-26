<?php $__env->startSection('title','Peta Lokasi'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-map-location-dot"></i> Peta Lokasi</h1>
        <p>Lokasi geografis Desa Sitorajo</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>Peta Lokasi</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="card" style="padding: 10px; border-radius: 16px;">
            <div style="width: 100%; border-radius: 10px; overflow: hidden;">
                <img src="<?php echo e(asset('images/peta-potensi-desa.jpg')); ?>" alt="Peta Potensi Desa Sitorajo" style="width: 100%; height: auto; border-radius: 10px; display: block;">
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/peta.blade.php ENDPATH**/ ?>