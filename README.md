# Code Nexus - Nền tảng thuê sách trực tuyến

**Code Nexus** là một nền tảng web thân thiện với người dùng, cho phép những người yêu sách có thể thuê sách trực tuyến một cách dễ dàng. Người dùng có thể khám phá một bộ sưu tập sách phong phú, quản lý việc thuê sách và nhận các gợi ý dựa trên sở thích của họ. Trang web được xây dựng bằng PHP và MySQL để đảm bảo hiệu suất và quản lý dữ liệu mượt mà.

## Tính năng

- **Danh mục sách**: Duyệt qua nhiều sách được phân loại theo ngôn ngữ, thể loại, và nhiều yếu tố khác.
- **Tài khoản người dùng**: Đăng ký, đăng nhập và quản lý lịch sử thuê sách và sở thích cá nhân.
- **Thuê sách dễ dàng**: Chỉ với vài cú nhấp chuột để thuê sách, theo dõi thời gian thuê và gia hạn thuê sách.
- **Thông báo**: Nhận thông báo qua email về thời hạn sắp hết hoặc đã quá hạn thuê sách.
- **Thiết kế đáp ứng**: Tối ưu hóa cho cả thiết bị di động và máy tính để bàn bằng Bootstrap.

## Công nghệ sử dụng

- **Backend**: PHP (với Composer để quản lý các thư viện phụ thuộc)
- **Cơ sở dữ liệu**: MySQL để lưu trữ dữ liệu một cách an toàn và hiệu quả
- **Frontend**: HTML, CSS, JavaScript và Bootstrap 4 để đảm bảo thiết kế đáp ứng
- **Web Scraping**: Scrapy để thu thập và cập nhật dữ liệu sách
- **Quản lý phiên bản**: Git

## Cấu trúc dự án

Dưới đây là cấu trúc thư mục của dự án:

```bash
code-nexus/
│
├── admin/                 # Quản lý dành cho admin
├── app/                   # Thư mục ứng dụng chính
├── demo-FE/               # Demo Frontend
├── img/                   # Hình ảnh (logo, banner, v.v.)
├── public/                # Các file công khai (CSS, JS, hình ảnh, v.v.)
│   ├── css/               # Tệp stylesheet
│   ├── js/                # Tệp JavaScript
│   └── index.php          # Điểm bắt đầu chính cho ứng dụng web
│
├── sql/                   # Các file cơ sở dữ liệu (SQL)
│   └── migrations.sql     # File migration SQL
│
├── vendor/                # Các thư viện phụ thuộc được quản lý bởi Composer
│
├── composer.json          # Tệp cấu hình Composer
├── composer.lock          # Tệp khóa của Composer
├── README.md              # Tài liệu dự án
└── LICENSE                # Tệp giấy phép
```
