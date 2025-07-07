# Student Information Admin Panel (PHP + XAMPP)

ระบบจัดการข้อมูลนักศึกษา พัฒนาด้วยภาษา PHP และฐานข้อมูล MySQL (ใช้งานผ่าน XAMPP)

## 🔧 คุณสมบัติ

- เพิ่ม แก้ไข ลบ ข้อมูลนักศึกษา
- อัปโหลดและแสดงภาพโปรไฟล์
- ใช้งานร่วมกับ DataTables และ SweetAlert
- Responsive Dashboard ด้วย AdminLTE

---

## 🚀 วิธีใช้งาน

### 1. Clone โปรเจกต์
```bash
git clone https://github.com/Jin-nl/Student_INFO_Admin.git

### 2. วางโปรเจกต์ไว้ใน XAMPP
วางโฟลเดอร์นี้ไว้ใน:
C:\xampp\htdocs\
จะได้ path ประมาณนี้:

C:\xampp\htdocs\Student_INFO_Admin\

### 3. สร้างฐานข้อมูล
-เปิด XAMPP แล้ว Start Apache และ MySQL
-ไปที่ http://localhost/phpmyadmin
-สร้างฐานข้อมูลชื่อ: db_website
-Import ไฟล์ SQL:
-ไปที่แท็บ Import
-เลือกไฟล์ database/127_0_0_1.sql
-คลิก Go

### 4. เข้าสู่ระบบจัดการ
เปิดเบราว์เซอร์และเข้าที่:http://localhost/Student_INFO_Admin/admin/student.php