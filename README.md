# BÁO CÁO BÀI TẬP: XÂY DỰNG CHỨC NĂNG ĐĂNG NHẬP GOOGLE & FACEBOOK

Dự án này là một ứng dụng web được xây dựng trên framework Laravel, tích hợp chức năng đăng nhập thông qua bên thứ ba (Google và Facebook) sử dụng thư viện Laravel Socialite. Hệ thống đảm bảo các yêu cầu về quản lý phiên đăng nhập, lưu trữ thông tin người dùng và tùy chỉnh giao diện cá nhân hóa theo yêu cầu.

## Sinh viên thực hiện:
- Họ tên: Nguyễn Trọng Đại
- Lớp: D18CNPM2
- Mã sinh viên: 23810310120

## 1. Yêu cầu hệ thống
- Hệ điều hành: Windows 10/11
- Môi trường: XAMPP (PHP 8.2.12)
- Framework: Laravel 11.x
- Thư viện: Laravel Socialite
- Cơ sở dữ liệu: MySQL (MariaDB)

## 2. Hướng dẫn cài đặt chi tiết

1. Tải mã nguồn:
   Clone dự án từ GitHub hoặc giải nén thư mục dự án vào `E:\xampp\htdocs\`.

2. Cài đặt thư viện:
   Mở terminal tại thư mục dự án và chạy lệnh:
       composer install

3. Cấu hình file môi trường (.env):
   Tạo file `.env` từ file `.env.example`.
   Thiết lập kết nối Database:
       DB_CONNECTION=mysql
       DB_HOST=127.0.0.1
       DB_PORT=3306
       DB_DATABASE=social_login_app
       DB_USERNAME=root
       DB_PASSWORD=

4. Khởi tạo dữ liệu:
   Chạy các lệnh sau trong terminal:
       php artisan key:generate
       php artisan migrate

## 3. Cấu hình Google & Facebook OAuth

### 3.1. Google OAuth (Google Cloud Console)
- Truy cập: Google Cloud Console
- Tạo dự án mới và thiết lập OAuth consent screen.
- Tạo Credentials > OAuth client ID loại "Web application".
- Authorized redirect URI: http://localhost:8000/auth/google/callback
- Cập nhật vào file .env:
       GOOGLE_CLIENT_ID=your_id
       GOOGLE_CLIENT_SECRET=your_secret
       GOOGLE_REDIRECT_URI="${APP_URL}/auth/google/callback"

### 3.2. Facebook OAuth (Meta for Developers)
- Truy cập: Meta for Developers
- Tạo ứng dụng và thiết lập sản phẩm Facebook Login.
- Tại mục Use cases > Authentication, cấp quyền `email`.
- Hệ thống tự động chấp nhận `localhost` ở chế độ Development.
- Cập nhật vào file .env:
       FACEBOOK_CLIENT_ID=your_id
       FACEBOOK_CLIENT_SECRET=your_secret
       FACEBOOK_REDIRECT_URI="${APP_URL}/auth/facebook/callback"

## 4. Các chức năng chính
- Đăng nhập Google: Sử dụng OAuth 2.0 để lấy tên, email và avatar.
- Đăng nhập Facebook: Xác thực người dùng và đồng bộ dữ liệu vào database.
- Xử lý logic:
  + Nếu email đã tồn tại: Hệ thống tự động đăng nhập vào tài khoản cũ.
  + Nếu email mới: Hệ thống tự động tạo bản ghi mới với `student_id` mặc định.
- Quản lý phiên: Có chức năng Đăng xuất (Logout) an toàn.
- Cá nhân hóa: Hiển thị Họ tên sinh viên và Mã sinh viên ngay trên Dashboard sau khi đăng nhập.

## 5. Cấu trúc mã nguồn quan trọng
- app/Http/Controllers/Auth/SocialLoginController.php : Xử lý điều hướng và nhận dữ liệu từ Social Providers.
- database/migrations/..._create_users_table.php : Thêm các trường student_id, provider_id, avatar.
- resources/views/auth/login.blade.php : Giao diện nút đăng nhập.
- resources/views/dashboard.blade.php : Giao diện hiển thị thông tin cá nhân sinh viên.

## 6. Demo
- Link Video Demo: [Chèn link video của bạn tại đây]
- Mô tả video: Quá trình đăng nhập bằng cả 2 nền tảng, hiển thị Dashboard thành công và kiểm tra dữ liệu trong phpMyAdmin.
