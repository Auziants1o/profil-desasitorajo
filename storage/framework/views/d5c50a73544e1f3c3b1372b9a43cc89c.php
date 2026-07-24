<?php $__env->startSection('title','Kebudayaan'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-masks-theater"></i> Kebudayaan Desa Sitorajo Kari</h1>
        <p>Warisan budaya dan tradisi kebanggaan masyarakat Desa Sitorajo Kari</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>Kebudayaan</span></div>
    </div>
</div>

<section class="section">
<div class="container">
    <div class="section-header">
        <div class="section-badge"><i class="fas fa-palette"></i> Budaya Lokal</div>
        <h2 class="section-title">Warisan <span>Budaya & Tradisi</span></h2>
        <p class="section-sub">Kekayaan budaya yang menjadi identitas dan kebanggaan masyarakat Desa Sitorajo Kari</p>
    </div>

    <!-- PACU JALUR - FEATURE SECTION -->
    <div class="card" style="overflow:hidden; margin-bottom: 48px;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0; min-height: 400px;">
            <!-- Gambar -->
            <div style="position: relative; overflow: hidden;">
                <img src="<?php echo e(asset('images/kebudayaan/Pacu-Jalur-Kuansing-Event-Kebudayaan.jpg')); ?>"
                     alt="Pacu Jalur"
                     style="width:100%; height:100%; object-fit:cover; object-position: right center; min-height:400px;">
                <div style="position:absolute;inset:0;background:linear-gradient(to right, transparent 60%, rgba(115,131,90,0.3))"></div>
                <!-- Badge -->
                <div style="position:absolute;top:20px;left:20px;background:var(--accent);color:white;padding:6px 16px;border-radius:100px;font-size:12px;font-weight:700;">
                    <i class="fas fa-star"></i> Kebudayaan Unggulan
                </div>
            </div>

            <!-- Konten -->
            <div style="padding: 48px 40px; display: flex; flex-direction: column; justify-content: center;">
                <div style="width:50px;height:50px;border-radius:14px;background:#fef3c7;color:#d97706;display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px;">
                    <i class="fas fa-water"></i>
                </div>
                <h3 style="font-size:28px;font-weight:800;margin-bottom:16px;color:var(--text-dark);">
                    Pacu Jalur
                </h3>
                <p style="font-size:15px;line-height:1.9;color:var(--text-muted);margin-bottom:20px;">
                    Pacu Jalur merupakan warisan budaya khas Kabupaten Kuantan Singingi yang menjadi kebanggaan masyarakat Desa Sitorajo Kari. Tradisi ini masih terus dilestarikan oleh masyarakat sebagai bentuk pelestarian budaya serta penguatan nilai-nilai kebersamaan dan gotong royong.
                </p>
                <p style="font-size:15px;line-height:1.9;color:var(--text-muted);">
                    Pacu Jalur adalah perlombaan dayung perahu tradisional yang diselenggarakan di Sungai Kuantan. Setiap perahu (jalur) didayung oleh puluhan orang secara bersama-sama, mencerminkan semangat kebersamaan dan persatuan yang mengakar kuat dalam kehidupan masyarakat Kuantan Singingi.
                </p>
                <div style="margin-top: 28px; display: flex; gap: 16px; flex-wrap: wrap;">
                    <div style="background: var(--bg-light); padding: 12px 20px; border-radius: 10px; border: 1px solid var(--border); text-align: center;">
                        <div style="font-size: 20px; font-weight: 800; color: var(--primary);">Ratusan</div>
                        <div style="font-size: 12px; color: var(--text-muted);">Peserta per Jalur</div>
                    </div>
                    <div style="background: var(--bg-light); padding: 12px 20px; border-radius: 10px; border: 1px solid var(--border); text-align: center;">
                        <div style="font-size: 20px; font-weight: 800; color: var(--primary);">Tahunan</div>
                        <div style="font-size: 12px; color: var(--text-muted);">Diselenggarakan</div>
                    </div>
                    <div style="background: var(--bg-light); padding: 12px 20px; border-radius: 10px; border: 1px solid var(--border); text-align: center;">
                        <div style="font-size: 20px; font-weight: 800; color: var(--primary);">Warisan</div>
                        <div style="font-size: 12px; color: var(--text-muted);">Budaya Lokal</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nilai-nilai Budaya -->
    <h3 style="font-size:22px;font-weight:700;margin-bottom:28px;text-align:center;">Nilai-Nilai yang Terkandung</h3>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
        <?php $__currentLoopData = [
            ['fas fa-hands-helping','#d1fae5','#059669','Gotong Royong','Semangat kebersamaan dan saling membantu yang menjadi fondasi kuat kehidupan masyarakat Desa Sitorajo Kari.'],
            ['fas fa-people-group','#dbeafe','#2563eb','Persatuan','Pacu Jalur menjadi simbol persatuan — puluhan orang mendayung dengan satu irama dan satu tujuan yang sama.'],
            ['fas fa-leaf','#fef3c7','#d97706','Pelestarian Budaya','Tradisi ini diwariskan dari generasi ke generasi sebagai identitas dan kebanggaan masyarakat Kuantan Singingi.'],
        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="padding: 28px; text-align: center;">
            <div style="width:56px;height:56px;border-radius:16px;background:<?php echo e($n[1]); ?>;color:<?php echo e($n[2]); ?>;display:flex;align-items:center;justify-content:center;font-size:24px;margin: 0 auto 16px;">
                <i class="<?php echo e($n[0]); ?>"></i>
            </div>
            <h4 style="font-size:15px;font-weight:700;margin-bottom:10px;"><?php echo e($n[3]); ?></h4>
            <p style="font-size:13px;color:var(--text-muted);line-height:1.7;"><?php echo e($n[4]); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/kebudayaan.blade.php ENDPATH**/ ?>