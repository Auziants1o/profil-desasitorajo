<?php $__env->startSection('title','Visi & Misi'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-bullseye"></i> Visi & Misi</h1>
        <p>Arah dan tujuan pembangunan Desa Sitorajo</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>Visi & Misi</span></div>
    </div>
</div>
<section class="section">
<div class="container" style="max-width:900px">
<!-- VISI -->
<div style="background:linear-gradient(135deg,var(--primary-dark),var(--primary));border-radius:20px;padding:48px;text-align:center;margin-bottom:48px;color:white">
    <i class="fas fa-eye" style="font-size:48px;margin-bottom:20px;opacity:0.8"></i>
    <h2 style="font-size:14px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,0.7);margin-bottom:12px">VISI DESA SITORAJO</h2>
    <p style="font-size:22px;font-weight:700;line-height:1.7;color:white">
    "Terwujudnya Desa Sitorajo yang Maju, Mandiri, Sejahtera, dan Berdaya Saing Berlandaskan Nilai-Nilai Budaya dan Kebersamaan"
    </p>
</div>

<!-- MISI -->
<div class="section-badge" style="margin-bottom:20px"><i class="fas fa-list-check"></i> Misi</div>
<h2 style="font-size:28px;font-weight:800;margin-bottom:32px">Misi Desa Sitorajo</h2>
<div style="display:flex;flex-direction:column;gap:16px">
<?php $__currentLoopData = [
['1','Meningkatkan kualitas sumber daya manusia melalui pendidikan, kesehatan, dan pelatihan keterampilan.','fas fa-graduation-cap'],
['2','Mengembangkan potensi ekonomi desa berbasis pertanian, perkebunan, dan UMKM lokal.','fas fa-chart-line'],
['3','Memperkuat infrastruktur desa yang merata dan berkelanjutan untuk kesejahteraan warga.','fas fa-road'],
['4','Melestarikan budaya, adat istiadat, dan kearifan lokal sebagai identitas desa.','fas fa-masks-theater'],
['5','Mewujudkan tata kelola pemerintahan yang transparan, akuntabel, dan partisipatif.','fas fa-scale-balanced'],
['6','Meningkatkan kualitas lingkungan hidup yang bersih, sehat, dan hijau.','fas fa-leaf'],
]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="display:flex;align-items:flex-start;gap:20px;padding:20px;background:var(--bg-light);border-radius:14px;border:1px solid var(--border)">
<div style="width:48px;height:48px;border-radius:12px;background:var(--primary);color:white;display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0"><i class="<?php echo e($m[2]); ?>"></i></div>
<div><div style="font-size:11px;font-weight:700;color:var(--primary);margin-bottom:6px">MISI <?php echo e($m[0]); ?></div><p style="font-size:15px;color:var(--text-dark);line-height:1.7"><?php echo e($m[1]); ?></p></div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- MOTTO -->
<div style="background:var(--accent);border-radius:16px;padding:32px;text-align:center;margin-top:40px">
<div style="font-size:13px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:10px">Motto Desa</div>
<div style="font-size:26px;font-weight:800;color:var(--primary-dark)">"[Isi Motto Desa Anda di Sini]"</div>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/visi-misi.blade.php ENDPATH**/ ?>