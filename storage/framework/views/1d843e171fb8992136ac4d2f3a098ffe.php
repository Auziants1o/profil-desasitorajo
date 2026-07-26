<?php $__env->startSection('title','UMKM Desa'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-store"></i> UMKM Desa Sitorajo</h1>
        <p>Mendukung ekonomi lokal melalui Usaha Mikro, Kecil, dan Menengah</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>UMKM</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; flex-wrap: wrap; gap: 20px;">
            <div class="section-header" style="margin-bottom: 0; text-align: left;">
                <h2 class="section-title">Produk <span>Lokal</span></h2>
            </div>
            
            <form action="<?php echo e(route('umkm')); ?>" method="GET" style="display: flex; gap: 10px;">
                <select name="jenis" style="padding: 10px 15px; border-radius: 8px; border: 1px solid var(--border); outline: none; font-family: 'Poppins';">
                    <option value="">Semua Jenis Usaha</option>
                    <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($j); ?>" <?php echo e(request('jenis') == $j ? 'selected' : ''); ?>><?php echo e($j); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Filter</button>
            </form>
        </div>

        <div class="umkm-grid">
            <?php $__empty_1 = true; $__currentLoopData = $umkm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="umkm-card">
                <img src="<?php echo e($u->foto ?: 'https://picsum.photos/seed/umkm'.$u->id.'/400/300'); ?>" alt="<?php echo e($u->nama_usaha); ?>">
                <div class="uc-body">
                    <span class="uc-badge"><?php echo e($u->jenis_usaha); ?></span>
                    <h4 style="font-size: 16px;"><?php echo e($u->nama_usaha); ?></h4>
                    <p style="color: var(--text-muted); font-size: 13px; line-height: 1.5; margin-bottom: 15px;"><?php echo e(Str::limit($u->deskripsi, 80)); ?></p>
                    
                    <div style="border-top: 1px solid var(--border); padding-top: 12px; font-size: 12px;">
                        <div style="margin-bottom: 5px; color: var(--primary); font-weight: 600;"><i class="fas fa-user" style="width: 20px;"></i> <?php echo e($u->pemilik); ?></div>
                        <?php if($u->kontak): ?>
                        <div style="margin-bottom: 5px; color: var(--text-muted);"><i class="fab fa-whatsapp" style="width: 20px; color: #25D366;"></i> <?php echo e($u->kontak); ?></div>
                        <?php endif; ?>
                        <?php if($u->alamat): ?>
                        <div style="color: var(--text-muted);"><i class="fas fa-map-marker-alt" style="width: 20px;"></i> <?php echo e($u->alamat); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div style="grid-column: 1 / -1; text-align: center; padding: 50px; background: var(--bg-light); border-radius: 12px; color: var(--text-muted);">
                Belum ada data UMKM yang ditambahkan atau tidak sesuai filter.
            </div>
            <?php endif; ?>
        </div>
        
        <div style="margin-top: 40px; display: flex; justify-content: center;">
            <?php echo e($umkm->links()); ?>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/umkm.blade.php ENDPATH**/ ?>