<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Address</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/show.css">
    <link rel="stylesheet" href="/css/templete.css">
</head>

<body>


    <div class="container">

        <div class="row" id="topic">
            <center>
                <h1 id="h1topic">ตรวจสอบที่อยู่</h1>
            </center>
        </div>
        <div class="row">
            <div class="col">
                <center> <a class="btn btn-primary" href="/index">หน้าหลัก</a>
                    <a class="btn btn-success" href="/form">กรอกที่อยู่</a>
                </center>

            </div>
        </div>

        <!-- table data  -->
        <div class="mt-3" style="background-color:lightgrey;">
            <table class="table table-bordered" id="users-list">
                <thead>
                    <tr class="titledata">
                        <th>ลำดับ</th>
                        <th>บ้านเลขที่</th>
                        <th>หมู่ที่</th>
                        <th>ตำบล</th>
                        <th>อำเภอ</th>
                        <th>จังหวัด</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($Address): ?>
                    <?php foreach($Address as $row): ?>
                    <tr class="contentdata">
                        <td><?php echo $row['address_id']; ?></td>
                        <td><?php echo $row['numhome']; ?></td>
                        <td><?php echo $row['sub_district']; ?></td>
                        <td><?php echo $row['district']; ?></td>
                        <td><?php echo $row['province']; ?></td>
                        <td><?php echo $row['zipcode']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>

            </table>

        </div>


        <!-- สำหรับลูกเล่น -->

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
        </script>


        <script>
        $(document).ready(function() {
            $('#users-list').DataTable();
        });
        </script>

        <!-- สำหรับลูกเล่น & filter -->
        <!-- container  -->
    </div>
</body>

</html>