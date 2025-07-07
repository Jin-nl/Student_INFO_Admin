# 🎓 Student Information Admin Panel (PHP + XAMPP)

ระบบจัดการข้อมูลนักศึกษา พัฒนาโดยใช้ PHP และฐานข้อมูล MySQL (รันผ่าน XAMPP)

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

วางโฟลเดอร์ไว้ที่:
```
C:\xampp\htdocs\
```

จะได้ path:
```
C:\xampp\htdocs\Student_INFO_Admin\
```

### 3. สร้างฐานข้อมูล

1. เปิด XAMPP แล้ว Start Apache และ MySQL
2. ไปที่ [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
3. สร้างฐานข้อมูลใหม่ชื่อ: `db_website`
4. ไปที่แท็บ **Import**
5. เลือกไฟล์ `database/127_0_0_1.sql`
6. กด **Go**

### 4. เริ่มใช้งานระบบ

เปิดเบราว์เซอร์แล้วเข้า:
```
http://localhost/Student_INFO_Admin/admin/student.php
```

---
