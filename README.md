# Đề tài 7: Thiết lập Hệ thống Monitoring, Logging & Alerting Toàn diện trên Microsoft Azure

## 1. Giới thiệu
Dự án xây dựng giải pháp giám sát tập trung cho hạ tầng Cloud và ứng dụng web (PHP/MySQL) trên Microsoft Azure. Thay vì sử dụng Azure Monitor, đồ án sử dụng hệ sinh thái mã nguồn mở:
- **Prometheus:** Thu thập Metrics (CPU, RAM, Disk).
- **Loki:** Thu thập và quản lý Logs (Truy cập, Lỗi).
- **Tempo:** Quản lý Traces.
- **Grafana Alloy:** Đóng vai trò Agent chạy trên máy chủ để gom dữ liệu đẩy về hệ thống trung tâm.
- **Grafana:** Dashboard hiển thị trực quan.

## 2. Cấu trúc thư mục
- `app/`: Chứa source code ứng dụng web PHP/MySQL và cấu hình Docker.
- `monitoring/`: Chứa cấu hình cụm công cụ giám sát (triển khai ở tuần 3, 4, 5, 6).

## 3. Tiêu chí nghiệm thu và Kịch bản kiểm thử (Tuần 8)
1. **Kiểm thử Tài nguyên (Metrics):**
   - Giả lập tải làm CPU của VM-App vượt ngưỡng 85% (dùng công cụ stress-ng).
   - **Kết quả mong đợi:** Prometheus ghi nhận Metrics, Alertmanager báo động qua Notification (Email/Telegram).
2. **Kiểm thử Tính khả dụng (UP/DOWN):**
   - Chủ động tắt container web hoặc Stop máy ảo (VM Down).
   - **Kết quả mong đợi:** Grafana Dashboard đổi trạng thái đỏ, cảnh báo "Instance Down".
3. **Kiểm thử Ghi nhận Lỗi (Logging):**
   - Cố tình truy cập đường dẫn sai để sinh lỗi HTTP 404 hoặc 500 trên web động.
   - **Kết quả mong đợi:** Grafana Alloy bắt được Error Log của Nginx/Apache và hiển thị ngay trên bảng Logs của Loki.
