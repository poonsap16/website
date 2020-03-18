@extends('layouts.app')

@section('content')
<div class="containner p-4" id="home">

    <div class="row">

        <div class="col-6">
            <div class="bd-example" align="center">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    </ol>

                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/r1.jpg" class="d-block w-75" alt="1">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/r2.jpg" class="d-block w-75" alt="2">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/r3.jpg" class="d-block w-75" alt="3">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/r4.jpg" class="d-block w-75" alt="4">
                        <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
                        </div>
                    </div>                    
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-6">

            <!-- <h4>โรคข้อและรูมาติสซั่ม</h4> -->

                        <h4 style="color:darkgreen">วิสัยทัศน์</h4>
                        <p>เป็นผู้นำทางอายุรศาสตร์โรคข้อและรูมาติสซั่มระดับสากล</p>

                        <h4 style="color:darkgreen">พันธกิจ</h4>
                        <p>เป็นองค์กรชั้นเลิศทางอายุรศาสตร์โรคข้อและรูมาติสซั่ม<br>
                        ในการผลิตอายุรแพทย์โรคข้อและรูมาติสซั่มที่สมบูรณ์แบบ<br>
                        สร้างองค์ความรู้และบริการที่ได้มาตรฐานระดับนานาชาติ</p>
        </div>

    </div>

</div>

<div class="container" id="about">

  <div class="row">
    <div class="col-sm-12 col-md-12">
    <br><br>
        <div class="p-4">
        <h4 class="text-center">เกี่ยวกับเรา</h4>
        </div>
    <hr>  
    <br> 

    <div>

                <p>สาขาวิชาโรคข้อและรูมาติสซั่ม เริ่มก่อตั้งเป็นสาขาโรคข้อละรูมาติสซั่ม
                ภาควิชาอายุรศาสตร์ทั่วไปเมื่อปีพ.ศ. 2520 และได้รับภาระงานด้านการดูแลผู้ป่วย
                งานวิจัยและงานการเรียนการสอนทั้งระดับแพทยศาสตร์บัณฑิตและระดับหลังปริญญา
                โดยใน พ.ศ. 2535 ได้เปิดหลักสูตรฝึกอบรมแพทย์เฉพาะทาง สาขาอายุรศาสตร์โรคข้อและรูมาติสซั่มขึ้น
                ตลอดเวลาสาขาวิชาโรคข้อและรูมาติสซั่ม  ได้มีการพัฒนาทั้งทางด้านการเรียนการสอนและการให้บริการต่อสังคม
                มีการพัฒนาและบริหารจัดการงานต่าง ๆ เพื่อพัฒนาสาขา ในแต่ละปีสาขาวิชาโรคข้อและรูมาติสซั่มจะมีงานบริการตรวจรักษา
                และให้ความรู้ต่อประชาชน งานวิจัย งานด้านการจัดการศึกษา การบริการด้านวิชาการทั้งภายในและภายนอกคณะ ฯลฯ
                </p> 
    </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="text-center">
                  <a href="/edu">
                  <img src="images/edu/edu4.png" class="rounded" width="175" hight="185"></img>
                  </a>
                  <p>งานการเรียนการสอน</p>
                </div>
            </div>
            
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="text-center">
                  <a href="/service">
                  <img src="images/edu/service2.png" class="rounded" width="175" hight="185"></img>
                  </a>
                  <p>งานบริการทางการแพทย์</p>
                </div>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="text-center">
                  <a href="/research">
                  <img src="images/edu/research2.png" class="rounded" width="175" hight="185"></img>
                  </a>
                  <p>งานวิจัย</p>
                </div>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="text-center">
                  <a href="/service2">
                  <img src="images/edu/conference1.png" class="rounded" width="175" hight="185"></img>
                  </a>
                  <p>งานบริการวิชาการ</p>
                </div>
            </div>
            
        </div>

</div>

<div class="container" id="staff">

    <div class="row">
        <div class="col-sm-12 col-md-12">
        <br><br>
        <div class="p-4">
                <h4 class="h-bold text-center">บุคลากร</h4>
    </div>
    <hr>  

<div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                  <a href="teacher">
                  <img src="images/hr/doctor3.png" class="rounded" width="175" hight="185"></img>
                  </a>
                  <p>แพทย์ประจำสาขาวิชา</p>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                  <a href="staff">
                  <img src="images/hr/human3.png" class="rounded" width="175" hight="185"></img>
                  </a>
                  <p>เจ้าหน้าที่สายสนับสนุน</p>
          </div>
      </div>
</div>
<br>

<div class="container" id="news">
    <div class="row">
        <div class="col-sm-12 col-md-12">
        <br><br>
            <div class="p-4">
                <h4 class="h-bold text-center">ข่าวสาร</h4>
            </div>
            <hr>
        </div><br>
                
        <div class="col-sm-6 ">
        <h5 style="color:green" class="text-center">ข่าวประชาสัมพันธ์</h5><br>
        <i class="fas fa-bars"></i> โครงการดูแลผู้ป่วย <br>
        </div>
        <div class="col-sm-6">
        <h5 style="color:green" class="text-center">ปฎิทินกิจกรรม</h5><br>
        <i class="fas fa-file"></i> ประชุมวิชาการโรคข้อฯ<br>
        </div>

    </div>
</div>
<br>


@endsection

