<?php $__env->startSection('title','Sejarah Desa'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-scroll"></i> Sejarah Desa Sitorajo</h1>
        <p>Perjalanan panjang Desa Sitorajo dari masa ke masa</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>Sejarah Desa</span></div>
    </div>
</div>
<section class="section">
<div class="container" style="max-width:900px">
<div class="section-header">
    <div class="section-badge"><i class="fas fa-clock-rotate-left"></i> Sejarah</div>
<h2 class="section-title">Perjalanan <span>Desa Sitorajo Kari</span></h2>
</div>

<div style="display:grid;grid-template-columns:1fr 2fr;gap:48px;align-items:start;margin-bottom:48px">
<img src="<?php echo e(asset('images/sejarah/WhatsApp%20Image%202026-07-21%20at%2022.57.01.jpeg')); ?>" alt="Sejarah Desa" style="width:100%;border-radius:16px;box-shadow:var(--shadow-lg)">
<div>
<p style="font-size:16px;line-height:1.9;color:var(--text-muted);margin-bottom:16px">
Desa Sitorajo Kari resmi terbentuk pada tahun 1996 dan sejak saat itu berkembang menjadi salah satu desa yang berperan dalam mendukung pembangunan di Kecamatan Kuantan Tengah, Kabupaten Kuantan Singingi, Provinsi Riau.
</p>
<p style="font-size:16px;line-height:1.9;color:var(--text-muted)">
Sejak berdirinya, Desa Sitorajo Kari terus mengalami perkembangan dalam berbagai aspek, baik di bidang pemerintahan, pembangunan infrastruktur, maupun pemberdayaan masyarakat. Pemerintah desa bersama masyarakat senantiasa menjalin kerja sama untuk meningkatkan kualitas pelayanan publik serta mendorong pembangunan yang berkelanjutan.
</p>
</div>
</div>

<!-- TIMELINE -->
<h3 style="font-size:22px;font-weight:700;margin-bottom:32px;text-align:center">Linimasa Sejarah Desa</h3>
<div style="position:relative;padding-left:40px">
<div style="position:absolute;left:14px;top:0;bottom:0;width:2px;background:linear-gradient(to bottom, var(--primary), var(--primary-light))"></div>
<?php $__currentLoopData = [
    ['1996','Pembentukan Desa','Desa Sitorajo Kari resmi terbentuk dan secara administratif menjadi bagian dari Kecamatan Kuantan Tengah, Kabupaten Kuantan Singingi.','var(--primary)'],
    ['Perkembangan','Pembangunan & Pelayanan','Pemerintah desa bersama masyarakat senantiasa menjalin kerja sama untuk meningkatkan kualitas pelayanan publik dan infrastruktur desa.','var(--accent)'],
    ['Warisan Budaya','Tradisi Pacu Jalur','Desa Sitorajo Kari secara aktif melestarikan budaya Pacu Jalur sebagai warisan budaya khas Kuantan Singingi dan bentuk penguatan nilai gotong royong.','#73835a']
]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="position:relative;margin-bottom:32px;padding-left:24px">
    <div style="position:absolute;left:-26px;top:4px;width:14px;height:14px;border-radius:50%;background:<?php echo e($tl[3]); ?>;border:3px solid white;box-shadow:0 0 0 3px <?php echo e($tl[3]); ?>20"></div>
    <div class="card" style="padding:20px">
        <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:8px">
            <h4 style="font-size:16px;font-weight:700"><?php echo e($tl[1]); ?></h4>
            <span style="background:var(--bg-light);color:var(--primary);padding:3px 12px;border-radius:100px;font-size:12px;font-weight:700;white-space:nowrap"><?php echo e($tl[0]); ?></span>
        </div>
        <p style="font-size:14px;color:var(--text-muted);line-height:1.7"><?php echo e($tl[2]); ?></p>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/sejarah.blade.php ENDPATH**/ ?>