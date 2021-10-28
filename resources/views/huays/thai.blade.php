

@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
    <div class="container">
        <div class="row row-mar ">
            <div class="col-12 col-md-9">
                <div class="h-100 AMB-background AMB-reward AMB-content">
                    <img style="width: 100%;"  src=" {{ url('/images/banner-thai.png') }}">

                    <h1 class="AMB-contact-title-gradient">หวยรัฐบาล</h1>
                    <h2 class="AMB-contact-title">หวยรัฐบาล กติกาการเเทง AMBLOTTO</h2>
                    <p class="indent">
                    เปิดรับเเทงออนไลน์ สามารถเเทงได้ก่อนวันหวยออก 10 วัน และแทงได้ 24 ชั่วโมง
                    หลังจากที่เปิด ระบบปิดรับเเทงเวลา 15:25 น. เลขดัง เเละ เลขอั้น	<br>
                    **เลขดัง คือ เลขที่มีการสั่งซื้อเข้ามาเป็นจำนวนมาก จึงมีการลดอัตราจ่ายลงมาจากอัตราจ่ายปกติ
                    ของเลขตัวนั้นๆ <br>
                    **เลขอั้น คือ เลขที่มีการสั่งซื้อเข้ามาเป็นจำนวนมากทำให้เจ้ามือปิดรับเลขตัวนั้นๆ
                    </p>
                    <p class="indent">
                    AMBLOTTO เปิดรับเเทงทุกตัวเลข ไม่มีเลขปิด ไม่ว่าจะเลขดังหรือเลขอั้น ทุกท่านก็สามารถ
                    เเทงหวยได้ทุกตัวเลข เพียงเเต่ เลขดังหรือเลขอั้น อาจจะมีการปรับราคาจ่ายลงเฉพาะตัวเลขนั้น
                    หากมีเลขดังหรือเลขอั้นทางทีมงานจะขึ้นเลขดังกล่าวไว้ที่หน้าแทงเพื่อเเจ้งทุกท่านให้ทราบ
                    เลขดังหรือเลขอั้น ให้ท่านโปรดตรวจสอบราคาจ่ายของตัวเลขก่อนส่งโพยทุกครั้ง ส่วนท่านที่เเทงเข้ามาก่อนจะมีการปรับราคา ก็จะได้ราคาจ่ายเต็มตามที่สั่งซื้อเข้ามาปกติ ส่วนท่านที่เเทง
                    เลขอั้นหวยรัฐบาลเข้ามาก่อนวันที่ 15 หรือ ก่อนประกาศเลขอั้น ทางทีมงานอาจจะมีการยกเลิก
                    ในบางกรณี (บางกรณีเช่น เลขดังจริงๆ เลขที่เจ้ามือปิดรับทุกเจ้าไม่มีเจ้ามือไหนรับ) ขอให้ท่าน
                    เช็คโพยที่ท่านเเทงเลขอั้นเข้ามา หากมีการโดนยกเลิกสถานะจะเเจ้งเตือนให้ทราบ เเละ ทำการติดต่อท่านเพื่อเเจ้งให้ทราบ เเต่หากโพยยังอยู่เเสดงว่าสถานะ “รับเเทง”
                    </p>
                    </div>
            </div>
            <div class="mt-2 d-block d-md-none"></div>
            @include('layouts.right-menu')
        </div>
    </div>
    </div>
    </div>
@endsection




