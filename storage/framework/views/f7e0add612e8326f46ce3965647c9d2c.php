<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — Desa Sitorajo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Poppins', sans-serif; background: #f0fdf4; display: flex; align-items: center; justify-content: center; min-height: 100vh; color: #1a2e1d; }
        .login-box { width: 100%; max-width: 420px; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(26,107,58,0.1); }
        .logo { width: 60px; height: 60px; background: linear-gradient(135deg, #1a6b3a, #2d8a4e); color: white; display: flex; align-items: center; justify-content: center; font-size: 30px; border-radius: 16px; margin: 0 auto 20px; }
        h1 { font-size: 24px; font-weight: 700; text-align: center; margin-bottom: 5px; }
        p { text-align: center; color: #6b7c6e; font-size: 14px; margin-bottom: 30px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px; }
        input { width: 100%; padding: 12px 16px; border: 1.5px solid #d1e7d8; border-radius: 10px; font-size: 14px; font-family: inherit; transition: all 0.3s; }
        input:focus { outline: none; border-color: #1a6b3a; box-shadow: 0 0 0 3px rgba(26,107,58,0.1); }
        .btn { display: block; width: 100%; background: #1a6b3a; color: white; padding: 14px; border: none; border-radius: 10px; font-size: 15px; font-weight: 600; cursor: pointer; transition: all 0.3s; }
        .btn:hover { background: #0f3d21; }
        .error-msg { background: #fee2e2; color: #991b1b; padding: 12px; border-radius: 8px; font-size: 13px; margin-bottom: 20px; text-align: center; border: 1px solid #fca5a5; }
        .back-link { display: block; text-align: center; margin-top: 20px; font-size: 13px; color: #1a6b3a; text-decoration: none; font-weight: 500; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="logo"><i class="fas fa-leaf"></i></div>
        <h1>Admin Desa</h1>
        <p>Silakan masuk ke panel pengurus desa</p>

        <?php if($errors->any()): ?>
        <div class="error-msg">
            <?php echo e($errors->first()); ?>

        </div>
        <?php endif; ?>

        <form action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" value="<?php echo e(old('email')); ?>" required placeholder="admin@sitorajo.com">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required placeholder="••••••••">
            </div>
            <button type="submit" class="btn">Masuk Sistem</button>
        </form>

        <a href="<?php echo e(route('beranda')); ?>" class="back-link"><i class="fas fa-arrow-left"></i> Kembali ke Beranda</a>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\profil-desasitorajo\resources\views/auth/login.blade.php ENDPATH**/ ?>