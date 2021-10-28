@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
            <div class="container">
                <div class="row row-mar ">
                    <div class="col-12 col-md-9">
                        <div class="h-100 AMB-background AMB-reward AMB-content">
                            <img style="width: 100%;" src=" {{ url('/images/banner-stockegypt.png') }}">
                            <h1 class="AMB-contact-title-gradient">หวยหุ้นอียิปต์</h1>
                            <h2 class="AMB-contact-title">หวยหุ้นอียิปต์ กติกาการเเทง AMBLOTTO</h2>
                            <ul>
                            <li>เปิดรับเเทงออนไลน์ทุกวัน จันทร์ – ศุกร์ (ปิดรับเเทงตามวันหยุดของตลาดหุ้น)</li>
                            <li>เปิดรับเเทงตั้งเเต่ 05:00 น. (ตามเวลาประเทศไทย)</li>
                            <li>ปิดรับเเทงรอบสุดท้าย เวลา 18:00 น.</li>
                            <li>ระบบทำการคืนโพยเเละเครดิตให้ในกรณีที่ตลาดหุ้นไม่มีความเคลื่อนไหวใดๆ ภายใน 1 ชั่วโมง
                            ถือว่าไม่มีการออกผลรางวัล</li>
                            </ul>
                            <h2 class="AMB-contact-title">วิธีการดูผลหวยหุ้นอียิปต์</h2>
                            <ul>
                            <li>ใช้ผลปิดตลาดของหุ้นชื่อ EGX 30	</li>
                            <li>ออกผลรางวัล จะนำเลขหลักหน่วยเเละจุดทศนิยมของค่า Value ออกรางวัล 3 ตัวบน เเละ นำจุดทศนิยมของค่า Change ออกรางวัล 2 ตัวล่าง</li>
                            </ul>
                            </div>
                    </div>


                    <div class="mt-2 d-block d-md-none"></div>
                    @include('layouts.right-menu')
                </div>
            </div>
        </div>
    </div>
@endsection
