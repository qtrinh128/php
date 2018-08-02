<?php require 'layout/header_guest.php'; ?>
<div class="container">
    <h3 class="text-center">Trang đăng nhập</h3>
    <div class="row">
        <div class="col-sm-4">
            <form action="?controller=Login&action=checkLogin" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Email</label>
                    <input type="password" class="form-control" name="pwd" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-check-input"> Nhớ mật khẩu
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>
<?php require 'layout/footer_guest.php'; ?>