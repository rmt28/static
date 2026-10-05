<?php
// Ambil informasi Git Global
$gitUser  = shell_exec('git config --global user.name');
$gitEmail = shell_exec('git config --global user.email');

// Uji koneksi SSH ke GitHub
$sshTest  = shell_exec('ssh -T git@github.com 2>&1');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git & Environment Tester</title>
    <style>
        body { font-family: system-ui, sans-serif; background: #0e1117; color: #f8fafc; padding: 20px; }
        .card { background: #161b22; border: 1px solid #30363d; border-radius: 8px; padding: 20px; max-width: 600px; margin: 0 auto; }
        h2 { margin-top: 0; color: #c5a059; border-bottom: 1px solid #30363d; padding-bottom: 10px; }
        .item { margin-bottom: 15px; }
        .label { color: #64748b; font-size: 14px; display: block; margin-bottom: 4px; }
        .value { background: #0d1117; padding: 8px 12px; border-radius: 4px; font-family: monospace; border: 1px solid #21262d; }
        .status { color: #4ade80; font-weight: bold; }
    </style>
</head>
<body>

<div class="card">
    <h2>Git & Environment Status</h2>

    <div class="item">
        <span class="label">PHP Version</span>
        <div class="value"><?php echo phpversion(); ?></div>
    </div>

    <div class="item">
        <span class="label">Git Global User</span>
        <div class="value"><?php echo $gitUser ? trim($gitUser) : 'Belum dikonfigurasi'; ?></div>
    </div>

    <div class="item">
        <span class="label">Git Global Email</span>
        <div class="value"><?php echo $gitEmail ? trim($gitEmail) : 'Belum dikonfigurasi'; ?></div>
    </div>

    <div class="item">
        <span class="label">Uji Koneksi SSH (GitHub)</span>
        <div class="value" style="white-space: pre-wrap;"><?php echo $sshTest ? trim($sshTest) : 'Tidak dapat menjalankan perintah SSH'; ?></div>
    </div>
</div>

</body>
</html>