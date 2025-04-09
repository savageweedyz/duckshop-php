<?php
session_start();
?><?php
include './admin/condb.php';
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>สมัครสมาชิก</title>
<link href="https://www.ggkeystore.com/css/theme.pack.css?20220624" rel="stylesheet" media="all">
</head>
<body style="background-color: #2E4053;">
<div class="container">
<form action="Register_check.php" method="POST">
<div id="app"><section class="container py-4 my-0"><div class="row">
<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
<div class="card border-0 box-shadow"><div class="card-body">
<h2 class="h4 mb-1">สมัครสมาชิก</h2> 
<hr>
<hr> 
<h3 class="font-size-base mt-3 mb-2"></h3> <form method="POST" action="https://www.ggkeystore.com/register" onsubmit="if (!window.__cfRLUnblockHandlers) return false; jQuery('[type=submit]', this).prop('disabled', true)" class="mt-3">
<input type="hidden" name="_token" value="sT1YUwu3pUvryiI5x1ZSyIbvZ35E8Lavl1fFgPQF"> 
<div class="row"><div class="col-sm-12"><div class="form-group">
<label for="reg-fn">ชื่อ</label>
<input type="text" class="form-control" maxlength="20" name="username" placeholder="First Name" required> <p>
<div class="row"><div class="col-sm-12"><div class="form-group">
<label for="reg-fn">นามสกุล</label>
<input type="text" class="form-control" maxlength="20" name="surname" placeholder="Surname" required> <p>
<div class="row"><div class="col-sm-12"><div class="form-group">
<label for="reg-fn">ที่อยู่</label>
<input type="text" class="form-control" maxlength="20" name="address" placeholder="Your Address" required> <p>
<div class="row"><div class="col-sm-12"><div class="form-group">
<label for="reg-fn">เบอร์โทร</label>
<input type="text" class="form-control" maxlength="20" name="telephone" placeholder="Telelphone" required> <p>
<div class="row"><div class="col-sm-12"><div class="form-group">
<label for="reg-fn">ชื่อผู้ใช้</label>
<input type="text" class="form-control" maxlength="20" name="username" placeholder="Username" required> <p>
<div class="row"><div class="col-sm-12"><div class="form-group">
<label for="reg-fn">รหัสผ่าน</label>
<input type="password" class="form-control" maxlength="20" name="password" placeholder="Your Password" required> <p>

<div class="d-flex justify-content-between pt-4"><a href="login.php" class="btn btn-secondary">
เข้าสู่ระบบ</a> 
<button type="submit" class="btn btn-primary" name="submit">SignUp</button>
</button></div></form></div></div></div></div></section></div>


</script>
<script async="" type="text/javascript">
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-56858QW');
</script>


</body></html>