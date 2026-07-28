<?php $__env->startSection('title','Galeri Video'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-film"></i> Galeri Video</h1>
        <p>Video dokumentasi dan profil Desa Sitorajo</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>Galeri Video</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
            <?php $__empty_1 = true; $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="card" style="padding: 15px;">
                <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 10px; margin-bottom: 15px;">
                    <iframe src="<?php echo e($v->file); ?>" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3 style="font-size: 16px; font-weight: 700; margin-bottom: 5px;"><?php echo e($v->judul); ?></h3>
                <p style="font-size: 13px; color: var(--text-muted);"><?php echo e($v->deskripsi); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div style="grid-column: 1 / -1; text-align: center; padding: 50px; background: var(--bg-light); border-radius: 12px; color: var(--text-muted);">
                Belum ada video dalam galeri.
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/galeri-video.blade.php ENDPATH**/ ?>