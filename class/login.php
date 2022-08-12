<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/elem-logo.ico">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/font.css" type="text/css" rel="stylesheet"/>
    <title>Elementary 63 | Login</title>
</head>
<body>
    <!-- Header -->
    <div class="footer" style="background-color: #0055a3; height: 100px;">
        <img src="images/elem-logo.ico" style="width:90px; float: left; margin: 5px 10px;">
        <h2 style="padding-top: 30px; color: white; float: left; margin: 0px 20px;">คณะศึกษาศาสตร์ สาขาการประถมศึกษา รหัส 63</h2>
        <div align="right" style="padding-top: 50px; padding-right: 10px;">
            <a href="https://sis.pn.psu.ac.th" target="_blank"><img src="images/sis-1.png" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></a>
            <a href="https://sims.pn.psu.ac.th" target="_blank"><img src="images/sis-pn.png" style="width: 40px; height: 40px; border-radius: 50%;" alt=""></a>
        </div>
    </div>
    <div style="padding-top: 15px; padding-bottom: 5px; background-color: #cfe2f3;"><h3>PSU - ELEMENTARY 63</h3></div>
    <!-- /Header -->
    <!-- Login Box -->
    <div class="container-fluid" style="width: 400px; margin-top: 50px; border-color: #0055a3; border-radius: 10px; border-style: solid; border-width: 2px;">
        <div class="row" style="padding-top: 10px; background-color: #0055a3; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <h5 style="color: white;">ระบบตรวจสอบรายชื่อติดต่อ</h5>
        </div>
        <div class="row" style="padding-top: 10px;">
            <div class="col-4" style="text-align: right; padding-top: 13px;">
                <h5>ชื่อผู้ใช้</h5>
                <h5 style="padding-top: 20px;">รหัสผ่าน</h5>
            </div>
            <div class="col" style="padding-top: 5px; margin-right: 30px;">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="รหัสนักศึกษา">
                <div style="padding-top: 15px;"></div>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="หมายเลขโทรศัพท์">
            </div>
        </div>
        <div class="row" style="padding-top: 20px; padding-bottom: 20px; padding-right: 30px;">
            <div class="col">
                <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-success">เข้าสู่ระบบ</button>
                <div style="padding-right: 10px;"></div>
                <button type="button" class="btn btn-danger" onclick="javascript:window.history.back();">ย้อนกลับ</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Login Box -->
    <!-- Footer -->
    <div class="footer" style="background-color: #0055a3; height: 50px; position: absolute; bottom: 0; width: 100%;">
        <p style="padding-top: 12px; color: white;">ออกแบบและสร้างสรรค์ โดย นายอักร็อม ละมูลอ | Copyright © 2020-2022 All rights reserved.</p>
    </div>
    <!-- /Footer -->
</body>

    <!-- JS code -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
    </script>
    <!--JS below-->
    
    <!--modal-->
    <script>
        $(document).ready(function() {
          $("#myModal").modal();
        });
    </script>

</html>