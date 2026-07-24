<?php $__env->startSection('title','Data Penduduk'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-chart-pie"></i> Data Penduduk</h1>
        <p>Statistik kependudukan Desa Sitorajo</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>Data Penduduk</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Statistik <span>Kependudukan</span></h2>
            <p class="section-sub">Total Penduduk: <?php echo e(number_format($totalPenduduk)); ?> Jiwa</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
            <!-- Berdasarkan Jenis Kelamin -->
            <div class="card" style="padding: 24px;">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Berdasarkan Jenis Kelamin</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--bg-light); text-align: left;">
                            <th style="padding: 12px; border: 1px solid var(--border);">Keterangan</th>
                            <th style="padding: 12px; border: 1px solid var(--border); text-align: right;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $jenisKelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="padding: 12px; border: 1px solid var(--border);"><?php echo e($jk->nama); ?></td>
                            <td style="padding: 12px; border: 1px solid var(--border); text-align: right;"><?php echo e(number_format($jk->jumlah)); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <!-- Berdasarkan Agama -->
            <div class="card" style="padding: 24px;">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Berdasarkan Agama</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--bg-light); text-align: left;">
                            <th style="padding: 12px; border: 1px solid var(--border);">Keterangan</th>
                            <th style="padding: 12px; border: 1px solid var(--border); text-align: right;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="padding: 12px; border: 1px solid var(--border);"><?php echo e($a->nama); ?></td>
                            <td style="padding: 12px; border: 1px solid var(--border); text-align: right;"><?php echo e(number_format($a->jumlah)); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            
            <!-- Berdasarkan Pendidikan -->
            <div class="card" style="padding: 24px;">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Berdasarkan Pendidikan</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--bg-light); text-align: left;">
                            <th style="padding: 12px; border: 1px solid var(--border);">Keterangan</th>
                            <th style="padding: 12px; border: 1px solid var(--border); text-align: right;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="padding: 12px; border: 1px solid var(--border);"><?php echo e($p->nama); ?></td>
                            <td style="padding: 12px; border: 1px solid var(--border); text-align: right;"><?php echo e(number_format($p->jumlah)); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <!-- Berdasarkan Pekerjaan -->
            <div class="card" style="padding: 24px;">
                <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 20px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">Berdasarkan Pekerjaan</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: var(--bg-light); text-align: left;">
                            <th style="padding: 12px; border: 1px solid var(--border);">Keterangan</th>
                            <th style="padding: 12px; border: 1px solid var(--border); text-align: right;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pekerjaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="padding: 12px; border: 1px solid var(--border);"><?php echo e($pk->nama); ?></td>
                            <td style="padding: 12px; border: 1px solid var(--border); text-align: right;"><?php echo e(number_format($pk->jumlah)); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/data-penduduk.blade.php ENDPATH**/ ?>