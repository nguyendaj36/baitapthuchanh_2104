<!DOCTYPE html>
<html>
<head><title>Trang chủ</title></head>
<body style="padding: 30px;">
    <h2>Thông tin tài khoản</h2>
    <div style="border: 1px solid #333; padding: 20px; max-width: 500px; border-radius: 10px; background-color: #f9f9f9;">
        <h3>Thông tin cá nhân sinh viên</h3>
        
        @if(auth()->user()->avatar)
            <img src="{{ auth()->user()->avatar }}" alt="Avatar" style="width: 100px; border-radius: 50%; margin-bottom: 10px;">
        @endif
        
        <p><strong>Họ tên sinh viên:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Mã sinh viên:</strong> {{ auth()->user()->student_id ?? '21120xxxx' }}</p>
        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
    </div>
    <br>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Đăng xuất</button>
    </form>
</body>
</html>