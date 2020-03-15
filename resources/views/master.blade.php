@extends('layouts.app')

@section('content')  
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="/css/pangweb.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
{{-- Search --}}
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> --}}
</head>
<body>
        
        <h3 style="margin-top: 20px;" align="center" class="uk-navbar-h3">Movie review</h3>
        <hr style="margin-top: 30px;" >
        {{-- <form method="get" action=""> --}}
            {{-- <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                    <div  style="margin-top: 30px;" class="searchbar">
                        <input  class="search_input" type="text" id="myInput" onkeyup="myFunction()"  placeholder="Search...">
                        <a  href="#" class="search_icon"><i  onkeyup="myFunction()" style="margin-top: 25px;" class="fa fa-search"></i></a>
                    </div>
                </div>
            </div> --}}
        {{-- </form> --}}
            
       
        {{--  Zore or one  --}}
        {{-- style="margin-left: 15px;" --}}
        <table  id="search-bar">
        <div  style="margin-top: 80px;" class="row mb-2">
            <div   class="col-md-6"> 
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="/Details1"><strong id="name" class="d-inline-block mb-2 text-primary">BRAVEHEART (1995)</strong></a>
                        <h5 class="mb-0">วีรบุรุษหัวใจมหากาฬ (1995)</h5>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto">เมื่อเจ้าสาวที่เป็นความลับของเขาถูกประหารสำหรับการโจมตีทหารอังกฤษที่พยายามข่มขืนเธอวิลเลียมวอลเลซเริ่มการประท้วงต่อต้านกษัตริย์เอ็ดเวิร์ดที่ 1 แห่งอังกฤษ.</p>
                        <a href="/Details1" class="stretched-link">Continue reading</a>
                        </div>
                        <a href="/Details1"><img  width="194" width="auto" src="https://m.media-amazon.com/images/M/MV5BMzkzMmU0YTYtOWM3My00YzBmLWI0YzctOGYyNTkwMWE5MTJkXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,677,1000_AL_.jpg" alt=""></a>
                </div>
            </div>
            {{-- Two or one --}}
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="/Details2"><strong class="d-inline-block mb-2 text-primary">1917 (2019)</strong></a>
                        <h5 class="mb-0">1917 (2019)</h5>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto">
                            6 เมษายน 1917 ในฐานะที่เป็นหน่วยทหารที่รวมตัวกัน เพื่อทำสงครามลึกลงไปในดินแดนของศัตรู ทหารสองคนได้รับมอบหมายให้แข่งกับเวลาและส่งข้อความที่จะหยุดยั้งทหารกี่กอง 1,600 คนจากการเดินเข้าสู่กับดักแห่งความตาย.</p>
                        <a href="/Details2" class="stretched-link">Continue reading</a>
                        </div>
                        <a href="/Details2"><img  width="181" width="auto" src="https://m.media-amazon.com/images/M/MV5BOTdmNTFjNDEtNzg0My00ZjkxLTg1ZDAtZTdkMDc2ZmFiNWQ1XkEyXkFqcGdeQXVyNTAzNzgwNTg@._V1_SY1000_CR0,0,631,1000_AL_.jpg" alt=""></a>
                </div>
            </div>
            {{-- Three --}}
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="/Details3"><strong class="d-inline-block mb-2 text-primary">Joker (2019)</strong></a>
                        <h5 class="mb-0">Joker (2019)</h5>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto">ในเมือง Gotham City Arthur Arthur Fleck นักแสดงตลกที่มีปัญหาทางจิตใจถูกละเลยและถูกสังคมทำร้าย จากนั้นเขาก็ลงมือก่อกวนการปฏิวัติและอาชญากรรมเลือด เส้นทางนี้นำเขาแบบตัวต่อตัวกับ Joker.</p>
                        <a href="/Details3" class="stretched-link">Continue reading</a>
                        </div>
                        <a href="/Details3"><img  width="181" width="auto" src="https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SY1000_CR0,0,674,1000_AL_.jpg" alt=""></a>
                </div>
            </div>

            {{-- Four --}}
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="/Details4"><strong class="d-inline-block mb-2 text-primary">Le Mans '66 (2019)</strong></a>
                        <h5 class="mb-0">สงครามฟอร์ดถล่มเฟอร์รารี่ (2019)</h5>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto">Carroll Shelby นักออกแบบรถยนต์ชาวอเมริกันและคนขับ Ken Miles ต่อสู้กับการแทรกแซงขององค์กรและกฎหมายของฟิสิกส์ในการสร้างรถแข่งที่ปฏิวัติวงการสำหรับ Ford เพื่อเอาชนะ Ferrari ที่ 24 Hours of Le Mans ในปี 1966.</p>
                        <a href="/Details4" class="stretched-link">Continue reading</a>
                        </div>
                        <a href="/Details4"><img  width="181" width="auto" src="https://m.media-amazon.com/images/M/MV5BM2UwMDVmMDItM2I2Yi00NGZmLTk4ZTUtY2JjNTQ3OGQ5ZjM2XkEyXkFqcGdeQXVyMTA1OTYzOTUx._V1_SY1000_CR0,0,675,1000_AL_.jpg" alt=""></a>
                </div>
            </div>
            {{-- five --}}
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="/Details5"><strong class="d-inline-block mb-2 text-primary">Avengers: Endgame (2019)</strong></a>
                        <h5 class="mb-0">Avengers: Endgame (2019)</h5>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto">หลังจากเหตุการณ์ทำลายล้างของ Avengers: Infinity War (2018) จักรวาลอยู่ในซากปรักหักพัง ด้วยความช่วยเหลือของพันธมิตรที่เหลืออยู่เวนเจอร์สรวมตัวกันอีกครั้งเพื่อย้อนกลับการกระทำของธานอสและคืนความสมดุลให้กับจักรวาล.</p>
                        <a href="/Details5" class="stretched-link">Continue reading</a>
                        </div>
                        <a href="/Details5"><img  width="181" width="auto" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg" alt=""></a>
                </div>
            </div>
            {{-- 6 --}}
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="/Details6"><strong class="d-inline-block mb-2 text-primary">Parasite (2019)</strong></a>
                        <h5 class="mb-0">ปรสิต (2019)</h5>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto">
                            ครอบครัวที่ยากจนคิมเดินทางไปสู่การเป็นผู้รับใช้ของตระกูลที่ร่ำรวยอุทยาน แต่ชีวิตที่เรียบง่ายของพวกเขาจะซับซ้อนเมื่อการหลอกลวงถูกคุกคามด้วยการสัมผัส.</p>
                        <a href="/Details6" class="stretched-link">Continue reading</a>
                        </div>
                        <a href="/Details6"><img  width="181" width="auto" src="https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_SY1000_CR0,0,674,1000_AL_.jpg" alt=""></a>
                </div>
            </div>
             {{-- 7 --}}
             <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="/Details7"><strong class="d-inline-block mb-2 text-primary">The Dark Knight (2008)</strong></a>
                        <h5 class="mb-0">อัศวินรัตติกาล (2008)</h5>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto">
                            เมื่อภัยคุกคามที่เรียกว่า Joker สร้างความหายนะและความโกลาหลให้กับชาว Gotham แบทแมนต้องยอมรับการทดสอบทางจิตวิทยาและทางร่างกายที่ยิ่งใหญ่ที่สุดอย่างหนึ่งของความสามารถของเขาในการต่อสู้กับความอยุติธรรม.</p>
                        <a href="/Details7" class="stretched-link">Continue reading</a>
                        </div>
                        <a href="/Details7"><img  width="181" width="auto" src="https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SY1000_CR0,0,675,1000_AL_.jpg" alt=""></a>
                </div>
            </div>

             {{-- 8 --}}
             {{-- Forrest Gump --}}
             {{-- ฟอร์เรสท์ กัมพ์ อัจฉริยะปัญญานิ่ม  --}}
             <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="/Details8"><strong class="d-inline-block mb-2 text-primary">Forrest Gump (1994)</strong></a>
                        <h5 class="mb-0">ฟอร์เรสท์ กัมพ์ อัจฉริยะปัญญานิ่ม (1994)</h5>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto">
                            ประธานาธิบดีของเคนเนดีและจอห์นสันเหตุการณ์ของเวียดนาม วอเตอร์เกตและเหตุการณ์ทางประวัติศาสตร์อื่น ๆ ที่เผยให้เห็นผ่านมุมมองของชายชาวอลาบามาที่มี IQ เท่ากับ 75 ซึ่งมีเพียงความปรารถนาเดียวเท่านั้นที่จะกลับมารวมตัวอีกครั้ง</p>
                        <a href="/Details8" class="stretched-link">Continue reading</a>
                        </div>
                        <a href="/Details8"><img  width="181" width="auto" src="https://m.media-amazon.com/images/M/MV5BNWIwODRlZTUtY2U3ZS00Yzg1LWJhNzYtMmZiYmEyNmU1NjMzXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg" alt=""></a>
                </div>
            </div>
             {{-- 9 --}}
             {{-- Fury --}}
             {{-- วันปฐพีเดือด --}}
             <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="/Details9"><strong class="d-inline-block mb-2 text-primary">Fury (2014)</strong></a>
                        <h5 class="mb-0">วันปฐพีเดือด (2014)</h5>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto">
                            ผู้บัญชาการรถถัง Grizzled ทำการตัดสินใจที่ยากลำบากในขณะที่เขาและลูกเรือต่อสู้กันในเยอรมนีเมื่อเดือนเมษายน 2488.</p>
                        <a href="/Details9" class="stretched-link">Continue reading</a>
                        </div>
                        <a href="/Details9"><img  width="181" width="auto" src="https://m.media-amazon.com/images/M/MV5BMjA4MDU0NTUyN15BMl5BanBnXkFtZTgwMzQxMzY4MjE@._V1_SY1000_CR0,0,674,1000_AL_.jpg" alt=""></a>
                </div>
            </div>

             {{-- 10 --}}
             {{-- Saving Private Ryan --}}
             {{-- เซฟวิ่ง ไพรเวท ไรอัน  --}}
             <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="/Details10"><strong class="d-inline-block mb-2 text-primary">Saving Private Ryan (1998)</strong></a> 
                        <h5 class="mb-0">ฝ่าสมรภูมินรก (2019)</h5>
                        {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                        <p class="card-text mb-auto">
                            หลังการยึดครอง นอร์มัง ( the Normandy ) ดีกลุ่มทหารของสหรัฐฯออกไปตามแนวข้าศึกเพื่อเรียกพลร่มซึ่งพี่น้องถูกสังหารในการปฏิบัติงาน.</p>
                        <a href="/Details10" class="stretched-link">Continue reading</a>
                        </div>
                        <a href="/Details10"><img  width="181" width="auto" src="https://m.media-amazon.com/images/M/MV5BZjhkMDM4MWItZTVjOC00ZDRhLThmYTAtM2I5NzBmNmNlMzI1XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_SY1000_CR0,0,679,1000_AL_.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </table>

    <hr>
        <form  action="">
            <div  class="form-group" align="center" > 
                <strong> </strong>  <a href=""><img  width="auto" width="auto" src="" alt=""> </a>
                {{-- <a href="https://www.facebook.com/profile.php?id=100003826876358" class="fa fa-facebook" ></a> --}}
                <a href="https://www.instagram.com/ton__nn/?hl=th"><strong class="fa fa-instagram"></strong></a>
                <a href="https://www.youtube.com/channel/UCvVpd0PoTBFXLnvfVr1s7bg?view_as=subscriber" ><strong class="fa fa-youtube"></strong> </a>
                <a href="https://www.imdb.com"> <strong class="fa fa-imdb" ></strong> </a>
                <a href="#"> <strong class="fa fa-google"></strong> </a>
                <footer> Copyright © 2020  Movie review</footer>
            </div> 
        </form>

</body>
</html>

<script>
    function myFunction() {
    var input, filter, table, h5, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("search-bar");
    h5 = table.getElementsByTagName("h5");
    for (i = 0; i < h5.length; i++) {
        td = h5[i].getElementsByTagName("h5")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                h5[i].style.display = "";
            } else {
                h5[i].style.display = "none";
            }
        }
    }
}
</script>
{{-- <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script> --}}
@endsection