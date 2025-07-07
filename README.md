# Student Information Admin Panel (PHP + XAMPP)

ระบบจัดการข้อมูลนักศึกษา พัฒนาด้วยภาษา PHP และฐานข้อมูล MySQL (ใช้งานผ่าน XAMPP)

## ✨ คุณสมบัติ

- เพิ่ม แก้ไข ลบ ข้อมูลนักศึกษา
- อัปโหลดและแสดงภาพโปรไฟล์
- ใช้งานร่วมกับ DataTables และ SweetAlert
- Responsive Dashboard ด้วย AdminLTE

---

## 🚀 วิธีใช้งาน

### 1. Clone โปรเจกต์

```bash
git clone https://github.com/Jin-nl/Student_INFO_Admin.git
```

### 2. วางโปรเจกต์ไว้ใน XAMPP

วางโฟลเดอร์นี้ไว้ใน:  
```
C:\xampp\htdocs\
```

จะได้ path ประมาณนี้:  
```
C:\xampp\htdocs\Student_INFO_Admin\
```

### 3. สร้างฐานข้อมูล

เปิด XAMPP แล้ว Start Apache และ MySQL  
เข้าไปที่ [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

สร้างฐานข้อมูลชื่อ:  
```
db_website
```

แล้ว Import ไฟล์จาก:  
```
/database/127_0_0_1.sql
```

### 4. เรียกใช้งานผ่านเบราว์เซอร์

```
http://localhost/Student_INFO_Admin/admin/student.php
```

---

## 📂 โครงสร้างโฟลเดอร์

- `admin/` – ไฟล์หลักของระบบ Admin
- `assets/` – CSS/JS/รูปภาพ
- `config/` – การเชื่อมต่อฐานข้อมูล
- `database/` – ไฟล์ SQL สำหรับ import
