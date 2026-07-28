<?php $__env->startSection('title','Galeri Foto'); ?>
<?php $__env->startSection('head'); ?>
<style>
    .galeri-grid-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }
    .galeri-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow);
        border: 1px solid var(--border);
        transition: transform 0.3s ease;
    }
    .galeri-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    .galeri-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }
    .galeri-info {
        padding: 16px;
        text-align: center;
    }
    .galeri-info h3 {
        font-size: 16px;
        font-weight: 600;
        color: var(--text-dark);
        margin: 0;
    }
    .galeri-info p {
        font-size: 13px;
        color: var(--text-muted);
        margin-top: 4px;
    }
    @media (max-width: 1024px) {
        .galeri-grid-3 { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 640px) {
        .galeri-grid-3 { grid-template-columns: 1fr; }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-images"></i> Galeri Foto</h1>
        <p>Kumpulan foto kegiatan dan panorama Desa Sitorajo</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>Galeri Foto</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="galeri-grid-3">
            <?php $__empty_1 = true; $__currentLoopData = $foto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="galeri-card">
                <img src="<?php echo e(asset($f->file)); ?>" alt="<?php echo e($f->judul); ?>">
                <div class="galeri-info">
                    <h3><?php echo e($f->judul); ?></h3>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div style="grid-column: 1 / -1; text-align: center; padding: 50px; background: var(--bg-light); border-radius: 12px; color: var(--text-muted);">
                Belum ada foto dalam galeri.
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/galeri-foto.blade.php ENDPATH**/ ?>