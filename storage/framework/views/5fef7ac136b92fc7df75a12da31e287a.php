<?php $__env->startSection('title','Struktur Organisasi'); ?>
<?php $__env->startSection('extra-css'); ?>
<style>
.org-node {
    transition: all 0.3s ease;
}
.org-node:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(26,107,58,0.2) !important;
    z-index: 10;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-hero">
    <div class="container">
        <h1><i class="fas fa-sitemap"></i> Struktur Organisasi</h1>
        <p>Bagan struktur organisasi pemerintahan Desa Sitorajo</p>
        <div class="breadcrumb"><a href="<?php echo e(route('beranda')); ?>">Beranda</a><i class="fas fa-chevron-right"></i><span>Struktur Organisasi</span></div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Bagan <span>Struktur Organisasi</span></h2>
        </div>
        
        <div class="card" style="padding: 40px 20px; text-align: center; background: #fafafa; overflow-x: auto;">
            <div style="min-width: 1000px; display: inline-block;">
                <!-- KEPALA DESA -->
                <div style="display: flex; justify-content: center; margin-bottom: 30px;">
                    <div class="org-node" style="background: var(--primary); color: white; padding: 15px 30px; border-radius: 12px; box-shadow: var(--shadow); width: 220px;">
                        <div style="font-size: 13px; font-weight: 700; margin-bottom: 5px;">KEPALA DESA</div>
                        <div style="font-size: 15px; font-weight: 800; color: var(--accent);">Ropis Indra, S.Pd.I</div>
                    </div>
                </div>
                
                <div style="width: 2px; height: 30px; background: var(--primary); margin: 0 auto;"></div>
                
                <!-- SEKDES & BENDAHARA -->
                <div style="display: flex; justify-content: center; gap: 80px; position: relative;">
                    <div style="position: absolute; top: 0; width: 300px; height: 2px; background: var(--primary);"></div>
                    <div style="position: absolute; top: 0; left: calc(50% - 150px); width: 2px; height: 30px; background: var(--primary);"></div>
                    <div style="position: absolute; top: 0; right: calc(50% - 150px); width: 2px; height: 30px; background: var(--primary);"></div>

                    <div class="org-node" style="background: var(--bg-white); border: 2px solid var(--primary); padding: 15px 20px; border-radius: 10px; box-shadow: var(--shadow); width: 220px; margin-top: 30px; z-index: 1;">
                        <div style="font-size: 13px; font-weight: 700; color: var(--primary-dark); margin-bottom: 5px;">SEKRETARIS DESA</div>
                        <div style="font-size: 14px; font-weight: 700;">Indra Franata</div>
                    </div>
                    <div class="org-node" style="background: var(--bg-white); border: 2px solid var(--primary); padding: 15px 20px; border-radius: 10px; box-shadow: var(--shadow); width: 220px; margin-top: 30px; z-index: 1;">
                        <div style="font-size: 13px; font-weight: 700; color: var(--primary-dark); margin-bottom: 5px;">BENDAHARA</div>
                        <div style="font-size: 14px; font-weight: 700;">Dede Aptrian Todi, S.IP</div>
                    </div>
                </div>

                <div style="width: 2px; height: 30px; background: var(--primary); margin: 0 auto;"></div>
                <div style="width: 90%; height: 2px; background: var(--primary); margin: 0 auto;"></div>
                
                <!-- KAUR & KASIE & KADUS -->
                <div style="display: flex; justify-content: space-between; padding-top: 30px; gap: 15px; position: relative;">
                    <?php $__currentLoopData = [
                        ['KAUR PEMERINTAHAN', 'Siska Oktalia', false],
                        ['KAUR PEMBANGUNAN', 'Adis Saputra, S.IP', false],
                        ['KAUR UMUM', 'Astri Andrina, SE', false],
                        ['KADUS BUNAI JAYA', 'Randi Desra, S.Pd', true, 'RW 01', 'Ardison', 'RT 01', 'Samroni', 'RT 02', 'Adi M. Takim'],
                        ['KADUS TENGAH', 'Uswandi', true, 'RW 02', 'Sukrialis', 'RT 01', 'Asmadi', 'RT 02', 'Masjon Latief'],
                        ['KADUS SEI. KEMBAR', 'Erwandi', true, 'RW 03', 'Erpisar', 'RT 01', 'Asri', 'RT 02', 'Jasdiwar']
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div style="position: absolute; top: 0; left: calc(<?php echo e(($idx * 16.666) + 8.333); ?>%); width: 2px; height: 30px; background: var(--primary);"></div>
                        
                        <div style="margin-top: 30px; position: relative; width: 145px; display: flex; flex-direction: column;">
                            <!-- Kotak Kadus / Kaur -->
                            <div class="org-node" style="background: var(--bg-white); border: 1px solid var(--border); padding: 15px 10px; border-radius: 8px; box-shadow: var(--shadow);">
                                <div style="font-weight: 700; color: var(--primary-dark); font-size: 11px; margin-bottom: 8px; line-height: 1.4;"><?php echo e($st[0]); ?></div>
                                <div style="font-weight: 700; font-size: 12px;"><?php echo e($st[1]); ?></div>
                            </div>
                            
                            <?php if($st[2]): ?>
                                <!-- Garis turun ke RW -->
                                <div style="margin: 0 auto; width: 2px; height: 20px; background: var(--primary);"></div>
                                <!-- Kotak RW -->
                                <div class="org-node" style="background: #fef9c3; border: 1px solid #ca8a04; padding: 10px 8px; border-radius: 6px; box-shadow: var(--shadow);">
                                    <div style="font-weight: 700; font-size: 10px; color: #a16207; margin-bottom: 3px;"><?php echo e($st[3]); ?></div>
                                    <div style="font-weight: 700; font-size: 11px; color: #422006;"><?php echo e($st[4]); ?></div>
                                </div>

                                <!-- Garis bercabang ke RT -->
                                <div style="margin: 0 auto; width: 2px; height: 15px; background: var(--primary);"></div>
                                <div style="position: relative; height: 15px;">
                                    <div style="position: absolute; top: 0; left: 25%; right: 25%; height: 2px; background: var(--primary);"></div>
                                    <div style="position: absolute; top: 0; left: 25%; width: 2px; height: 15px; background: var(--primary);"></div>
                                    <div style="position: absolute; top: 0; right: 25%; width: 2px; height: 15px; background: var(--primary);"></div>
                                </div>

                                <!-- Kotak RT -->
                                <div style="display: flex; justify-content: space-between; gap: 6px;">
                                    <div class="org-node" style="background: #dbeafe; border: 1px solid #2563eb; padding: 8px 4px; border-radius: 6px; flex: 1;">
                                        <div style="font-weight: 700; font-size: 9px; color: #1e40af; margin-bottom: 3px;"><?php echo e($st[5]); ?></div>
                                        <div style="font-weight: 700; font-size: 10px; color: #172554;"><?php echo e($st[6]); ?></div>
                                    </div>
                                    <div class="org-node" style="background: #dbeafe; border: 1px solid #2563eb; padding: 8px 4px; border-radius: 6px; flex: 1;">
                                        <div style="font-weight: 700; font-size: 9px; color: #1e40af; margin-bottom: 3px;"><?php echo e($st[7]); ?></div>
                                        <div style="font-weight: 700; font-size: 10px; color: #172554;"><?php echo e($st[8]); ?></div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div style="height: 60px;"></div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/struktur.blade.php ENDPATH**/ ?>