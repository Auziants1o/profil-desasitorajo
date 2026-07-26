<?php $__env->startSection('title','Potensi Desa'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-mountain-sun"></i> Potensi Desa</h1>
        <p>Kekayaan alam dan potensi ekonomi Desa Sitorajo</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>Potensi Desa</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Kekayaan & <span>Potensi</span></h2>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr; gap: 40px; max-width: 900px; margin: 0 auto;">
            
            <div class="card" style="display: flex; flex-direction: row; overflow: hidden; background: white;">
                <div style="flex: 1;">
                    <img src="https://images.unsplash.com/photo-1595844730298-b960fad97351?w=600&q=80" alt="Pertanian" style="width: 100%; height: 100%; object-fit: cover; min-height: 250px;">
                </div>
                <div style="flex: 1.5; padding: 30px;">
                    <h3 style="font-size: 22px; font-weight: 700; color: var(--primary); margin-bottom: 15px;"><i class="fas fa-seedling"></i> Potensi Pertanian</h3>
                    <p style="color: var(--text-muted); line-height: 1.8;">Lahan pertanian yang subur menjadi tumpuan utama perekonomian sebagian besar masyarakat Desa Sitorajo. Komoditas unggulan berupa padi, jagung, dan sayur-mayur terus dikembangkan dengan metode yang lebih modern untuk meningkatkan hasil panen.</p>
                </div>
            </div>

            <div class="card" style="display: flex; flex-direction: row-reverse; overflow: hidden; background: white;">
                <div style="flex: 1;">
                    <img src="https://images.unsplash.com/photo-1505934333218-8fe9d9c240bb?w=600&q=80" alt="Pariwisata" style="width: 100%; height: 100%; object-fit: cover; min-height: 250px;">
                </div>
                <div style="flex: 1.5; padding: 30px;">
                    <h3 style="font-size: 22px; font-weight: 700; color: var(--primary); margin-bottom: 15px;"><i class="fas fa-tree"></i> Potensi Pariwisata</h3>
                    <p style="color: var(--text-muted); line-height: 1.8;">Desa Sitorajo dikelilingi oleh panorama alam yang menawan. Sungai yang mengalir jernih, perbukitan hijau, serta udara yang masih asri sangat potensial untuk dikembangkan menjadi destinasi wisata alam dan ekowisata berbasis masyarakat.</p>
                </div>
            </div>

            <div class="card" style="display: flex; flex-direction: row; overflow: hidden; background: white;">
                <div style="flex: 1;">
                    <img src="https://images.unsplash.com/photo-1616782298759-994df22be1a4?w=600&q=80" alt="Peternakan" style="width: 100%; height: 100%; object-fit: cover; min-height: 250px;">
                </div>
                <div style="flex: 1.5; padding: 30px;">
                    <h3 style="font-size: 22px; font-weight: 700; color: var(--primary); margin-bottom: 15px;"><i class="fas fa-cow"></i> Potensi Peternakan</h3>
                    <p style="color: var(--text-muted); line-height: 1.8;">Selain bertani, sebagian warga juga beternak sapi, kambing, dan unggas. Ketersediaan pakan alami yang melimpah dari sisa pertanian mendukung pengembangan sektor peternakan secara terintegrasi.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/potensi.blade.php ENDPATH**/ ?>