<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Address</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/templete.css">
</head>

<body>


    <div class="container">

        <div class="row" id="topic">
            <center>
                <h1 id="h1topic">กรอกที่อยู่</h1>
            </center>
        </div>
        <div class="row">
            <div class="col">
                <center> <a class="btn btn-primary" href="/index">หน้าหลัก</a>
                    <a class="btn btn-warning" href="/show">ตรวจสอบที่อยู่</a>
                </center>

            </div>
        </div>
        <hr>

        <div class="card">
            <form action="address/save" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label>บ้านเลขที่</label>
                        <input type="text" class="form-control" name="numhome" placeholder="กรอกบ้านเลขที่">
                    </div>
                    <div class="form-group">
                        <label>หมู่ที่</label>
                        <input type="text" class="form-control" name="village" placeholder="กรอกหมู่ที่">
                    </div>
                    <div class="form-group">
                        <label>ตำบล</label>
                        <input type="text" class="form-control" name="sub_district" placeholder="กรอกตำบล">
                    </div>
                    <div class="form-group">
                        <label>อำเภอ</label>
                        <input type="text" class="form-control" name="district" placeholder="กรอกอำเภอ">
                    </div>
                    <div class="form-group">
                        <label>จังหวัด</label>
                        <input type="text" class="form-control" name="province" placeholder="กรอกจังหวัด">
                    </div>
                    <div class="form-group">
                        <label>รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" name="zipcode" placeholder="กรอกรหัสไปรษณีย์">
                    </div>
                </div>

                <center> <button type="submit" class="btn btn-primary">Submit</button></center>


            </form>
        </div>


        <!-- container  -->
    </div>
</body>

</html>