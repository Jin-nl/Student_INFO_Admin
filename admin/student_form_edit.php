<?php
//คิวรี่รายละเอียดสินค้า single row
$stmtProductDetail = $condb->prepare("SELECT * FROM students_info WHERE id=:id");
//bindParam
$stmtProductDetail->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$stmtProductDetail->execute();
$rowProduct = $stmtProductDetail->fetch(PDO::FETCH_ASSOC);

//   echo '<pre>';
//   print_r($rowProduct);    
//exit;
// echo $stmtProductDetail->rowCount();
// exit;

//สร้างเงื่อนไขตรวจสอบการคิวรี่

if($stmtProductDetail->rowCount() == 0) { //คิวรีี่ผิดพลาด
    echo '<script>
                            setTimeout(function() {
                              swal({
                                  title: "เกิดข้อผิดพลาด",
                                  type: "error"
                              }, function() {
                                  window.location = "student.php"; //หน้าที่ต้องการให้กระโดดไป
                              });
                            }, 1000);
                        </script>';
    exit;
}
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> ฟอร์มแก้ไขข้อมูลนักศึกษา </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <div class="card card-primary">
                            <!-- form start -->
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="card-body">

                                    
 
                                    <div class="form-group row">
                                        <label class="col-sm-2">ชื่อนักศึกษา</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="ST_Firstname" class="form-control" required placeholder="ชื่อนักศึกษา" value="<?php echo $rowProduct['ST_Firstname'];?>">
                                        </div>
                                    </div>  

                                    <div class="form-group row">
                                        <label class="col-sm-2">นามสกุลนักศึกษา</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="ST_Lastname" class="form-control" required placeholder="นามสกุลนักศึกษา" value="<?php echo $rowProduct['ST_Lastname'];?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2">รหัสนักศึกษา</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="ST_ID" class="form-control" required placeholder="รหัสนักศึกษา" value="<?php echo $rowProduct['ST_ID'];?>">
                                        </div>
                                    </div>  

                                    <div class="form-group row">
                                        <label class="col-sm-2">เบอร์โทรนักศึกษา</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="ST_Phone" class="form-control" required placeholder="เบอร์โทรนักศึกษา" value="<?php echo $rowProduct['ST_Phone'];?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2">อีเมลนักศึกษา</label>
                                        <div class="col-sm-7">
                                            <input type="email" name="ST_Email" class="form-control" required placeholder="อีเมลนักศึกษา" value="<?php echo $rowProduct['ST_Email'];?>">
                                        </div>
                                    </div>
  
                                    <div class="form-group row">
                                        <label class="col-sm-2">ภาพโปรไฟล์</label>
                                        <div class="col-sm-4">
                                            ภาพเก่า <br> 
                                            <img src="../assets/ST_Image/<?php echo $rowProduct['ST_Image'];?>" width="200px">
                                            <br> <br>
                                            เลือกภาพใหม่
                                            <br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="ST_Image" class="custom-file-input"  id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-4">
                                            <input type="hidden" name="id" value="<?php echo $rowProduct['id'];?>">
                                            <input type="hidden" name="oldImg" value="<?php echo $rowProduct['ST_Image'];?>">
                                            <button type="submit" name="btn" class="btn btn-primary"> บันทึก </button>
                                            <a href="product.php" class="btn btn-danger">ยกเลิก</a>
                                        </div>
                                    </div>

                                </div> <!-- /.card-body -->

                            </form>
                            <?php
                            // echo '<pre>';
                            // print_r($_POST);
                            // echo '<hr>';
                            // print_r($_FILES);
                            // exit;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
//เช็ค input ที่ส่งมาจากฟอร์ม
// echo '<pre>';
// print_r($_POST);
// exit;

if(isset($_POST['ST_Firstname']) && isset($_POST['ST_Lastname'])  &&  isset($_POST['ST_ID']) && isset($_POST['ST_Phone']) && isset($_POST['ST_Email']) && isset($_POST['oldImg']) ) {

    //echo 'ถูกเงื่อนไข ส่งข้อมูลมาได้';

          //trigger exception in a "try" block
          try {


    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $id = $_POST['id'];
    $ST_Firstname = $_POST['ST_Firstname'];
    $ST_Lastname = $_POST['ST_Lastname'];
    $ST_ID = $_POST['ST_ID'];
    $ST_Phone = $_POST['ST_Phone'];
    $ST_Email = $_POST['ST_Email'];
    $oldImg = $_POST['oldImg'];
    $upload = $_FILES['ST_Image']['name'];

    //สร้างเงื่อนไขตรวจสอบการอัพโหลดไฟล์
    if($upload == ''){
        //echo 'ไม่มีการอัพโหลดไฟล์'; 
        //sql update without upload file
    $stmtUpdateProduct = $condb->prepare("UPDATE students_info SET
             ST_Firstname=:ST_Firstname,
             ST_Lastname=:ST_Lastname,
             ST_ID=:ST_ID,
             ST_Phone=:ST_Phone,
             ST_Email=:ST_Email
            WHERE id=:id
    ");

  //bindParam
    $stmtUpdateProduct->bindParam(':ST_Firstname', $ST_Firstname, PDO::PARAM_STR);
    $stmtUpdateProduct->bindParam(':ST_Lastname', $ST_Lastname, PDO::PARAM_STR);
    $stmtUpdateProduct->bindParam(':ST_ID', $ST_ID, PDO::PARAM_STR);
    $stmtUpdateProduct->bindParam(':ST_Phone', $ST_Phone, PDO::PARAM_STR);
    $stmtUpdateProduct->bindParam(':ST_Email', $ST_Email, PDO::PARAM_STR);
    $stmtUpdateProduct->bindParam(':id', $id, PDO::PARAM_INT);

  $result = $stmtUpdateProduct->execute();
  if ($result) {
    echo '<script>
                setTimeout(function() {
                  swal({
                      title: "ปรับปรุงข้อมูลสำเร็จ",
                      type: "success"
                  }, function() {
                      window.location = "student.php"; //หน้าที่ต้องการให้กระโดดไป
                  });
                }, 1000);
            </script>';
} //if


}else{ 
       // echo 'มีการอัพโหลดไฟล์ใหม่';
        //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ใหม่
    $date1 = date("Ymd_His");
    //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
    $numrand = (mt_rand());
    $ST_Image = (isset($_POST['ST_Image']) ? $_POST['ST_Image'] : '');
   
    //ตัดขื่อเอาเฉพาะนามสกุล
   $typefile = strrchr($_FILES['ST_Image']['name'], ".");

//    echo $typefile;
//    exit;

        //สร้างเงื่อนไขตรวจสอบนามสกุลของไฟล์ที่อัพโหลดเข้ามา
        if ($typefile =='.jpg' || $typefile  =='.jpeg' || $typefile  =='.png') {
            //echo 'อัพโหลดไฟล์ไม่ถูกต้อง';
            //exit;
            
            //ลบภาพเก่า 
            unlink('../assets/ST_Image/'.$oldImg);

            //โฟลเดอร์ที่เก็บไฟล์
            $path = "../assets/ST_Image/";
            //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
            $newname = $numrand . $date1 . $typefile;
            $path_copy = $path . $newname;
            //คัดลอกไฟล์ไปยังโฟลเดอร์
            move_uploaded_file($_FILES['ST_Image']['tmp_name'], $path_copy);

            //sql update with upload file 
            $stmtUpdateProduct = $condb->prepare("UPDATE students_info SET
            ST_Firstname=:ST_Firstname,
            ST_Lastname=:ST_Lastname,
            ST_ID=:ST_ID,
            ST_Phone=:ST_Phone,
            ST_Email=:ST_Email,
            ST_Image='$newname'
            WHERE id=:id
            ");
            //bindParam
            $stmtUpdateProduct->bindParam(':ST_Firstname', $ST_Firstname, PDO::PARAM_STR);
            $stmtUpdateProduct->bindParam(':ST_Lastname', $ST_Lastname, PDO::PARAM_STR);
            $stmtUpdateProduct->bindParam(':ST_ID', $ST_ID, PDO::PARAM_STR);
            $stmtUpdateProduct->bindParam(':ST_Phone', $ST_Phone, PDO::PARAM_STR);
            $stmtUpdateProduct->bindParam(':ST_Email', $ST_Email, PDO::PARAM_STR);
            $stmtUpdateProduct->bindParam(':id', $id, PDO::PARAM_INT);

  $result = $stmtUpdateProduct->execute();
  if ($result) {
    echo '<script>
                setTimeout(function() {
                  swal({
                      title: "ปรับปรุงข้อมูลสำเร็จ",
                      type: "success"
                  }, function() {
                      window.location = "student.php"; //หน้าที่ต้องการให้กระโดดไป
                  });
                }, 1000);
            </script>';
} //if
        
    }else{ //อัพโหลดไฟล์ไม่ถุกต้อง
        echo '<script>
                setTimeout(function() {
                swal({
                    title: "คุณอัพโหลดไฟล์ไม่ถูกต้อง",
                    type: "error"
                }, function() {
                    window.location = "student.php?id='.$id.'&act=edit";
                });
                }, 1000);
            </script>';
            //exit;
        } //else upload file
    } //else not upload file

} //try
//catch exception
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    exit;
    echo '<script>
         setTimeout(function() {
          swal({
              title: "เกิดข้อผิดพลาด",
              type: "error"
          }, function() {
              window.location = "student.php"; //หน้าที่ต้องการให้กระโดดไป
          });
        }, 1000);
    </script>';
  } //catch
} //isset
?>