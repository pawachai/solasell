<?php
$eltct = $_POST['electricity'];
$select = $_POST['range'];
if($eltct <> ""  && $select <> ""){
$electricity = $eltct * $select / 100;
$cclt = $electricity / 303;
$end = $cclt * 450;
$jirateep = $end / 1000;
$cclt1 = $cclt * 18000;
$cclt2 = $cclt1 / $electricity;
$year = $cclt2 / 12;
$select2 = 100 - $select;
$sel = $cclt * (1 * 2);
}else{
echo "
<script>
alert('กรุณากรอกข้อมูลให้ครบถ้วน');
window.location = './';
</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <!-- font -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ราคาโดยประมาณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/headerphone.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/caru.css">
</head>

<body>
    <div class="topbar">
        <div class="logoo"><img src="img/Logo.jpg" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="row">
                <!-- logo navbar -->
                <div class="col-4">
                    <div class="logo"><img src="img/Logo.jpg" alt="">
                        <h5 style="font-family: 'Limelight', cursive; color: rgb(0, 0, 0);">Solar Energy</h5>
                    </div>
                </div>
                <!-- logo navbar -->
                <!-- ตารางการทำงาน -->
                <div class="col-8">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <i class="fas fa-user-clock" style="font-size: 30px; margin-top: 1rem;"></i>
                                <p>เวลาทำการ <br> จันทร์-ศุกร์ 9:00-17:30</p>
                            </div>
                            <div class="col">
                                <i class="fa fa-mobile" aria-hidden="true"
                                    style="font-size: 30px; margin-top: 1rem;"></i>
                                <p>ติดต่อเรา <br> 064-936-2546
                                </p>
                            </div>
                            <div class="col">
                                <i class="fa fa-envelope" aria-hidden="true"
                                    style="font-size: 30px; margin-top: 1rem;"></i>
                                <p>EMAIL <br> EMAIL:info@cmssuperheroes.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ตารางการทำงาน -->
            </div>
        </div>
    </div>
    <!-- nacbar -->
    <nav class="navbar navbar-expand-lg NavB-color sticky-top" id="sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="clum" style="width: 200px; display: flex;">
                    <h1 style="color: rgb(255, 217, 0);"><span id="element"></span></h1>
                    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
                    <script>
                    var typed = new Typed("#element", {
                        strings: ["Welcome", "SB solar."],
                        typeSpeed: 50,
                        loop: true,
                        strings: [
                            "<spna style='color: #fff'>Welcome.</spna>",
                            "SB solar.",
                        ],
                    });
                    </script>
                </div>
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">เกี่ยวกับโซลาร์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="work.php">ผลงานของเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">สอบถามหรือปรึกษา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="install.php">การติดตั้งบนอาคารและโรงงาน</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nacbar -->
    <div class="textcaru1">
        <div class="imgcaru">
            <img src="img/about.jpg" alt="">
        </div>
        <div class="textcaru">
            <h1>ผลคำนวณราคาระบบโซลาร์ของคุณ</h1>
        </div>
    </div>
    <div class="filecaru">
        <h3><i class="fas fa-coins"></i> ค่าไฟของท่าน : <span style="color: darkgoldenrod;"><?php echo $eltct ?></span>
            บาท กลางวัน<span style="color: darkgoldenrod;"><?php echo $select ?></span>% <span
                style="color: darkgoldenrod;">กลางคืน<?php echo $select2 ?></span> %</h3>
        <div class="width"></div>
        <h3><i class="fas fa-coins"></i> แนะนำระบบโซลาร์ ใช้โดยประมาณ : <span
                style="color: darkgoldenrod;"><?php echo number_format($jirateep, 1) ?></span>
            kW.
        </h3>
        <p>(คำนวณขนาดระบบโซลาร์รูฟท๊อปตามความต้องการทางพลังงานขั้นตํ่าจากค่าไฟต่อเดือน)</p>
        <h3><i class="fas fa-coins"></i> ที่ต้องใช้แผงโซลาร์ขนาด 450W. จำนวน : <span
                style="color: darkgoldenrod;"><?php echo number_format($cclt)?></span> เเผ่น</h3>
        <p>(คำนวณโดยประมาณ ขึ้นอยู่กับพื้นที่ของท่าน)</p>
        <h3><i class="fas fa-coins"></i> พื้นที่ที่ต้องใช้ติดตั้ง : <span
                style="color: darkgoldenrod;"><?php echo number_format($sel) ?></span>
            ตารางเมตร </h3>
        <p>(พื้นที่ในการติดตั้งระบบโซลาร์รูฟท๊อปของคุณโดยคำนวณจากจำนวนและขนาดแผง)</p>
        <h3><i class="fas fa-coins"></i> งบประมาณในการลงทุนโดยประมาณ : <span style="color: darkgoldenrod;">
                <?php echo number_format($cclt1)?></span> บาท</h3>
        <p>(ราคาระบบเบื้องต้นโดยประมาณ)</p>
        <h3><i class="fas fa-coins"></i> ระยะเวลาคืนทุน : <span style="color: darkgoldenrod;">60</span> เดือน
            หรือ
            <?php //echo number_format($cclt2)?>
            <span style="color: darkgoldenrod;"><?php echo number_format($year)?></span> ปี
        </h3>
        <p>(ระยะเวลาโดยประมาณที่จะคืนทุนให้กับท่าน)</p>
        <button class="btn btn-danger mb-3"><a href="index.php"
                style="text-decoration: none; color:#fff;">ย้อนกลับ</a></button>
    </div>
    <div class="romgrup">
        <div class="gruptext">
            <h1>แบบฟอร์มติดต่อขอใบเสนอราคา</h1>
            <div class="textgrup">
                <form action="line-notify.php" method="post">
                    <form>
                        <div class="sd">
                            <label for="exampleInputEmail1" class="col-sm-2 col-form-label"
                                style="color: darkgoldenrod; font-weight: bold;">name:</label>
                            <input type="text" name="firstname" class="form-control dH" id="exampleInputEmail1"
                                placeholder="ชื่อของคุณ" />
                        </div>
                        <div class="sd">
                            <label for="exampleInputPassword1" class="col-sm-2 col-form-label"
                                style="color: darkgoldenrod; font-weight: bold;">Line id:</label>
                            <input type="text" name="lastname" class="form-control dH" id="exampleInputPassword1"
                                placeholder="Lineid" />
                        </div>
                        <div class="sd">
                            <label for="exampleInputPassword1" class="col-sm-2 col-form-label"
                                style="color: darkgoldenrod; font-weight: bold;">Email:</label>
                            <input type="email" name="email" class="form-control dH" id="exampleInputPassword1"
                                placeholder="Email ของคุณ" />
                        </div>
                        <div class="sd">
                            <label for="exampleInputPassword1" class="col-sm-2 col-form-label"
                                style="color: darkgoldenrod; font-weight: bold;">Phone:</label>
                            <input type="number" pattern="/^-?\d+\.?\d*$/"
                                onKeyPress="if(this.value.length==10) return false;" name="phone" class="form-control"
                                id="exampleInputPassword1" class="form-control dH" placeholder="เบอร์โทรศัพท์" />
                        </div>
                        <div class="sd">
                            <label for="exampleInputPassword1" class="col-sm-2 col-form-label"
                                style="color: darkgoldenrod; font-weight: bold;">Electricity:</label>
                            <input type="text" name="electricity" class="form-control" id="exampleInputPassword1"
                                class="form-control dH" placeholder="ค่าไฟต่อเดือน" />
                        </div>
                        <div class="sd">
                            <label for="exampleInputPassword1" class="col-sm-2 col-form-label"
                                style="color: darkgoldenrod; font-weight: bold;">detail:</label>
                            <div class="sd-1">
                                <textarea class="form-control dH" name="more" id="" id="" cols="20" rows="10"
                                    placeholder="รายละเอียดเพิ่มเติม"></textarea>
                                <div class="d-grid">
                                    <button type="submit" name="submit" class="p-2 mt-2 b-dark">
                                        <i class="fas fa-calculator"></i>Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer1">
            <ul>
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="about.php">เกี่ยวกับโซลาร์</a></li>
                <li><a href="work.php">ผลงานของเรา</a></li>
                <li><a href="contact.php">สอบถามหรือปรึกษา</a></li>
                <li><a href="install.php">การติดตั้งบนอาคารและโรงงาน</a></li>
            </ul>
            <ul class="l">
                <i class="fab fa-facebook"></i>
                <i class="fas fa-map-marked-alt"></i>
                <i class="fab fa-line"></i>
                <i class="fas fa-phone-square-alt"></i>
            </ul>
            <p class="text-muted mb-0 py-2">© 2021 All rights desige by <a href="">pawachai.com</a> reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <?php
?>
</body>

</html>