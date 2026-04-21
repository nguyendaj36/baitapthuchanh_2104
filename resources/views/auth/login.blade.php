<!DOCTYPE html>
<html>
<head><title>Đăng nhập</title></head>
<body style="text-align: center; margin-top: 50px;">
    <h2>Hệ thống đăng nhập</h2>
    @if(session('error')) <p style="color:red">{{ session('error') }}</p> @endif
    <br>
    <a href="{{ route('social.redirect', 'google') }}">
        <button style="padding: 10px 20px;">Đăng nhập bằng Google</button>
    </a>
    <br><br>
    <a href="{{ route('social.redirect', 'facebook') }}">
        <button style="padding: 10px 20px;">Đăng nhập bằng Facebook</button>
    </a>
</body>
</html>