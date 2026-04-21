# Ứng dụng Đăng nhập Google và Facebook - Laravel

Dự án này thực hiện chức năng đăng nhập nhanh thông qua bên thứ ba sử dụng thư viện Laravel Socialite.

## 1. Hướng dẫn cài đặt
1. Clone dự án: `git clone [link-github-cua-ban]`
2. Cài đặt thư viện: `composer install`
3. Cấu hình file `.env` (Kết nối Database và khai báo Google/Facebook Keys).
4. Tạo Key ứng dụng: `php artisan key:generate`
5. Chạy Migration: `php artisan migrate`
6. Khởi chạy: `php artisan serve`

## 2. Cách cấu hình OAuth
### Google OAuth
- Truy cập Google Cloud Console, tạo dự án và tạo OAuth Client ID.
- Thêm Redirect URI: `http://localhost:8000/auth/google/callback`
### Facebook OAuth
- Truy cập Meta for Developers, tạo ứng dụng và thiết lập Facebook Login.
- Thêm Redirect URI: `http://localhost:8000/auth/facebook/callback`
