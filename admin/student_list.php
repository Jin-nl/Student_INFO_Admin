<?php
$queryproduct = $condb->prepare("SELECT * FROM students_info");
$queryproduct->execute();
$rsproduct = $queryproduct->fetchAll();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>จัดการข้อมูลนักศึกษา
            <a href="student.php?act=add" class="btn btn-primary">+ข้อมูล</a>
          </h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                  <tr class="table-info">
                    <th width="5%" class="text-center">NO.</th>
                    <th width="10%" class="text-center">ภาพ</th>
                    <th width="10%" class="text-center">ชื่อ</th>
                    <th width="10%" class="text-center">นามสกุล</th>
                    <th width="10%" class="text-center">รหัสนักศึกษา</th>
                    <th width="10%" class="text-center">เบอร์โทรศัพท์</th>
                    <th width="15%" class="text-center">อีเมล</th>
                    <th width="5%" class="text-center">แก้ไข</th>
                    <th width="5%" class="text-center">ลบ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1; //start number
                  foreach ($rsproduct as $row) { ?>
                    <tr>
                      <td align="center"> <?php echo $i++ ?> </td>
                      <td align="center">
                        <img src="../assets/ST_Image/<?=$row['ST_Image'];?>" width="70px">
                      </td>
                      <td> <?php echo $row['ST_Firstname']; ?> </td>
                      <td> <?php echo $row['ST_Lastname']; ?> </td>
                      <td> <?php echo $row['ST_ID']; ?> </td>
                      <td> <?php echo $row['ST_Phone']; ?> </td>
                      <td> <?php echo $row['ST_Email']; ?> </td>

                      <td align="center">
                        <a href="student.php?id=<?= $row['id']; ?>&act=edit" class="btn btn-warning btn-sm">แก้ไข</a>
                      </td>
                      <td align="center">
                        <a href="student.php?id=<?= $row['id']; ?>&act=delete" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล??');">ลบ</a>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->