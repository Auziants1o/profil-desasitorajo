<?php $__env->startSection('title','Perangkat Desa'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-users"></i> Perangkat Desa</h1>
        <p>Mengenal para pelayan masyarakat di Desa Sitorajo</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>Perangkat Desa</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Aparatur <span>Pemerintahan Desa</span></h2>
        </div>
        
        <?php
            $kades = $perangkat->where('jabatan', 'Kepala Desa')->first();
            $sekdesBendahara = $perangkat->whereIn('jabatan', ['Sekretaris Desa', 'Bendahara']);
            $kaur = $perangkat->filter(function($p) { return str_contains($p->jabatan, 'Kepala Urusan'); });
            $kadus = $perangkat->filter(function($p) { return str_contains($p->jabatan, 'Kepala Dusun'); });
        ?>

        <?php if($kades): ?>
        <div style="display: flex; justify-content: center; margin-bottom: 40px;">
            <div class="card" style="text-align: center; padding: 30px 20px; width: 100%; max-width: 320px;">
                <img src="<?php echo e($kades->foto ? asset($kades->foto) : 'https://ui-avatars.com/api/?name='.urlencode($kades->nama).'&background=1a6b3a&color=fff&size=140'); ?>" alt="<?php echo e($kades->nama); ?>" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; object-position: top; margin-bottom: 20px; border: 4px solid var(--bg-light);">
                <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 5px; color: var(--text-dark);"><?php echo e($kades->nama); ?></h3>
                <div style="color: var(--primary); font-weight: 600; font-size: 15px; margin-bottom: 15px;"><?php echo e($kades->jabatan); ?></div>
                <?php if($kades->pendidikan): ?>
                <div style="font-size: 13px; color: var(--text-muted);">Pendidikan: <?php echo e($kades->pendidikan); ?></div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if($sekdesBendahara->count() > 0): ?>
        <div style="display: flex; justify-content: center; gap: 30px; margin-bottom: 40px; flex-wrap: wrap;">
            <?php $__currentLoopData = $sekdesBendahara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="text-align: center; padding: 30px 20px; width: 100%; max-width: 300px;">
                <img src="<?php echo e($p->foto ? asset($p->foto) : 'https://ui-avatars.com/api/?name='.urlencode($p->nama).'&background=1a6b3a&color=fff&size=120'); ?>" alt="<?php echo e($p->nama); ?>" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; object-position: top; margin-bottom: 20px; border: 4px solid var(--bg-light);">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 5px; color: var(--text-dark);"><?php echo e($p->nama); ?></h3>
                <div style="color: var(--primary); font-weight: 600; font-size: 14px; margin-bottom: 15px;"><?php echo e($p->jabatan); ?></div>
                <?php if($p->pendidikan): ?>
                <div style="font-size: 13px; color: var(--text-muted);">Pendidikan: <?php echo e($p->pendidikan); ?></div>
                <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

        <?php if($kaur->count() > 0): ?>
        <div style="display: flex; justify-content: center; gap: 30px; margin-bottom: 40px; flex-wrap: wrap;">
            <?php $__currentLoopData = $kaur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="text-align: center; padding: 30px 20px; width: 100%; max-width: 300px;">
                <img src="<?php echo e($p->foto ? asset($p->foto) : 'https://ui-avatars.com/api/?name='.urlencode($p->nama).'&background=1a6b3a&color=fff&size=120'); ?>" alt="<?php echo e($p->nama); ?>" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; object-position: top; margin-bottom: 20px; border: 4px solid var(--bg-light);">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 5px; color: var(--text-dark);"><?php echo e($p->nama); ?></h3>
                <div style="color: var(--primary); font-weight: 600; font-size: 14px; margin-bottom: 15px;"><?php echo e($p->jabatan); ?></div>
                <?php if($p->pendidikan): ?>
                <div style="font-size: 13px; color: var(--text-muted);">Pendidikan: <?php echo e($p->pendidikan); ?></div>
                <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

        <?php if($kadus->count() > 0): ?>
        <div style="display: flex; justify-content: center; gap: 30px; margin-bottom: 40px; flex-wrap: wrap;">
            <?php $__currentLoopData = $kadus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="text-align: center; padding: 30px 20px; width: 100%; max-width: 300px;">
                <img src="<?php echo e($p->foto ? asset($p->foto) : 'https://ui-avatars.com/api/?name='.urlencode($p->nama).'&background=1a6b3a&color=fff&size=120'); ?>" alt="<?php echo e($p->nama); ?>" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; object-position: top; margin-bottom: 20px; border: 4px solid var(--bg-light);">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 5px; color: var(--text-dark);"><?php echo e($p->nama); ?></h3>
                <div style="color: var(--primary); font-weight: 600; font-size: 14px; margin-bottom: 15px;"><?php echo e($p->jabatan); ?></div>
                <?php if($p->pendidikan): ?>
                <div style="font-size: 13px; color: var(--text-muted);">Pendidikan: <?php echo e($p->pendidikan); ?></div>
                <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        
        <?php if($perangkat->count() === 0): ?>
        <div style="text-align: center; padding: 50px; background: var(--bg-light); border-radius: 12px; color: var(--text-muted);">
            Belum ada data perangkat desa yang ditambahkan.
        </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/perangkat.blade.php ENDPATH**/ ?>