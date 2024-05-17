@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
<section class="section section-boutique intro-section">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="display-title btm-mr text-center parallax" data-rellax-speed="-2">
              <h1 class="display-1"><span class="line-detail"></span> Boutique</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="full-image-wrap boutique-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-8">
                    <p>Todas las amenidades de nuestras habitaciones fueron seleccionadas para superar tus expectativas y darte una magnífica experiencia de descaso con un toque de auténtico lujo mexicano.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pickup-badge parallax" data-rellax-speed="-2">
        <p class="pickup-badge-title">Servicio de Pickup</p>
        <p class="mb-0">Hotel - Aeropuerto - Hotel</p>
    </div>

    <p class="special-welcome decorative parallax" data-rellax-speed="-1">Permítenos consentirte con nuestra hospitalidad para una estancia excepcional.</p>
</section>

<section class="section section-boutique-info position-relative offset-mr-top">
    <div class="container">
        <div class="decorative-root root-detail">
          <svg xmlns="http://www.w3.org/2000/svg" width="410" height="861" viewBox="0 0 410 861" fill="none">
            <path d="M180.43 860.98C181.36 860.88 182.06 860.22 182.17 858.99C182.55 854.97 181.65 852.45 177.58 846.03C175.3 842.43 171.47 834.07 169.11 827.49C166.75 820.91 163.25 811.58 161.34 806.76C159.43 801.94 157.44 792.65 156.9 786.08C156.31 778.79 154.45 770.72 152.11 765.45C148.68 757.7 148.29 754.8 148.57 737.54C148.76 725.83 148.16 716.48 147.02 713.67C144.94 708.5 146.28 690.95 148.86 689.35C150.7 688.21 152.87 691.14 154.29 696.73C155.84 702.81 175.14 742.22 183.4 756.14C190.36 767.87 194.97 771.45 196.76 766.51C197.16 765.41 192.93 755.79 187.34 745.08C177.59 726.38 175.53 720.66 178.57 720.66C179.34 720.66 181.85 723.1 184.1 726.04C186.35 728.99 190.52 732.57 193.42 734.01C196.32 735.45 201.71 738.89 205.38 741.63C212.01 746.58 217.04 746.94 217.04 742.48C217.04 740.32 201.02 728.63 198.05 728.63C197.23 728.63 194.04 725.73 190.97 722.15C187.33 717.9 183.12 714.96 178.76 713.68C172.48 711.83 171.77 710.95 166.45 699.03C163.34 692.07 159.12 680.27 157.08 672.82L153.39 659.26L156.53 637.73C160.14 613.19 162.94 600.13 166.7 590.08C168.14 586.23 170 577.67 170.84 571.04C174.06 545.65 184.5 519.96 202.69 492.59C217.85 469.79 229.59 448.69 233.94 436.47C240.07 419.24 245.36 412.08 266.29 392.46C276.71 382.7 288.73 370.28 293 364.85C310.87 342.17 323.5 331.86 349.47 318.75C354.64 316.14 361.23 311.95 364.12 309.43C379.46 296.05 399.58 283.76 413.01 279.53C420.59 277.14 432.87 272.5 440.32 269.21C447.78 265.92 461.05 261.31 469.82 258.99C478.59 256.67 492.23 252.63 500.12 249.97C508.01 247.31 523.44 242.39 534.41 239.06C545.37 235.73 565.21 229.34 578.52 224.86C594.33 219.53 605.38 216.69 610.42 216.69C620.89 216.67 630.1 213.96 634.89 209.46C640.26 204.43 646.35 202.33 655.52 202.33C661.62 202.33 664.38 201.36 669.18 197.54C677.65 190.8 685.63 188.93 706.66 188.67C716.75 188.55 726.95 187.93 729.34 187.27C731.83 186.59 737.14 186.97 741.8 188.17C751.23 190.58 755.31 189.02 755.31 183.03C755.31 177.26 744.24 172.55 726.01 170.57C716.9 169.58 709.43 167.87 706.87 166.18C704.56 164.66 698.84 161.33 694.11 158.8C684.83 153.83 683.94 153.85 658.82 159.6C651.29 161.32 643 161.55 620.54 160.65C607.55 160.13 606.48 160.4 595.02 166.13C588.44 169.42 581.91 172.92 580.52 173.9C578.99 174.98 575.68 175.21 572.15 174.55C567.13 173.61 566.32 172.87 566.32 169.17C566.32 166.8 568.53 160.22 571.2 154.57C574.15 148.33 575.87 142.38 575.59 139.42C575.14 134.83 574.69 134.54 567.67 134.09C556.71 133.38 544.97 140.53 526.01 159.51C508.77 176.76 493.77 186.16 470.49 194.4C461.67 197.52 455.51 200.94 450.75 205.32C446.53 209.21 441.74 212.02 438.49 212.5C424.56 214.55 392.91 218.36 389.95 218.33C388.12 218.31 383.71 220.97 380.13 224.26C376.55 227.55 371.25 231.09 368.32 232.08C365.39 233.07 359.08 235.41 354.27 237.26C341.63 242.14 309.29 242.15 299.8 237.31C296.26 235.5 288.25 232.71 281.96 231.08C267.21 227.27 265.7 226.65 255.89 220.41C247.89 215.32 240.99 208.26 240.99 205.16C240.99 204.32 239.7 201.71 238.1 199.38C234.27 193.82 228.65 179.42 226.79 170.42C225.97 166.47 223.74 156.43 221.86 148.09C218.02 131.11 217.2 96.2801 220.27 81.9001C221.21 77.5101 222.41 71.1402 222.96 67.7001C223.79 62.5402 226.34 59.1101 237.41 48.2101C250.18 35.6401 252.89 30.5901 247.88 28.9201C246.84 28.5801 243.1 30.9602 239.51 34.2002C235.92 37.4501 232.5 39.6502 231.93 39.0802C231.37 38.5202 232.15 31.5202 233.67 23.5802C236.64 8.13014 235.86 4.54012 229.58 4.54012C225.66 4.54011 224.51 7.81013 220.31 30.9101C218.39 41.4501 214.8 54.6402 212.29 60.3601C207.36 71.5701 205.2 79.2201 203.57 91.0601C203 95.2301 201.92 98.6401 201.18 98.6401C199.68 98.6401 189.99 82.5501 187.72 76.3101C186.09 71.8201 181.38 64.5501 173.27 53.9801C168.48 47.7401 154.3 20.7401 147.45 4.8401C145.72 0.810066 144.34 -0.329887 141.67 0.0501173C136.04 0.850105 136.63 5.19013 144.51 20.6801C148.82 29.1601 151.36 35.8501 150.54 36.6801C149.72 37.5001 146.14 36.1201 142.02 33.3901C128.31 24.3101 112.61 21.1501 112.61 27.4601C112.61 29.6801 114.93 31.1201 121.78 33.2401C126.81 34.8001 134.71 38.4401 139.32 41.3101C161.05 54.8201 164.85 58.0301 171.76 68.7201C175.6 74.6501 179.44 79.4801 180.33 79.4801C181.23 79.4801 181.97 80.6201 181.97 82.0202C181.97 83.4202 182.96 86.4701 184.16 88.8001C191.52 103.03 197.79 120.07 197.87 126.03C197.9 128.39 198.62 130.74 199.46 131.26C200.3 131.78 200.9 134.16 200.81 136.54C200.58 142.77 204.02 163.47 206.54 171.08C207.72 174.65 209.17 180.31 209.78 183.69L210.88 189.87L204 188.57C200.22 187.86 194.97 187.35 192.34 187.47C187.09 187.71 179.02 185.69 171.61 182.29C168.98 181.08 164.31 179.73 161.24 179.25C157.43 178.65 153.13 175.87 147.68 170.58C137.38 160.56 125.28 145.57 121.76 138.48C118.97 132.86 114.33 130.55 111.54 133.35C109.53 135.36 119.06 151.51 129.33 163.5C133.71 168.61 137.3 173.59 137.3 174.56C137.32 175.74 131.58 176.37 120.16 176.5C82.3001 176.93 48.1901 184.5 57.6601 190.36C58.5801 190.93 71.0101 189.86 85.3201 187.97C120.04 183.37 140.77 184.25 164.41 191.41C167.48 192.34 171.07 194.02 172.38 195.15C173.7 196.28 182.84 199.88 192.72 203.12C212.85 209.72 218.62 213.14 233.59 227.34C239.32 232.77 246.34 238.45 249.24 240C258.08 244.71 285.98 256.59 293.6 258.89C305.82 262.58 325.84 264.9 336.41 263.82C345.51 262.89 346.42 263.08 345.93 265.61C345.6 267.32 339.78 271.24 331.08 275.63C312.03 285.23 299.03 293.89 295.7 299.2C294.2 301.59 289.66 307.84 285.63 313.11C281.6 318.37 276.96 324.85 275.31 327.46C270.68 334.82 258.6 347.24 249.44 354.02C244.87 357.41 237.34 363.98 232.69 368.62C228.05 373.27 219.1 380.47 212.81 384.67C206.52 388.87 200.99 393.24 200.55 394.39C199.72 396.56 177.85 403.81 166.81 405.55C163.3 406.11 154.33 407.91 146.88 409.59C133.34 412.64 118.97 415.78 98.6401 420.11C89.1601 422.13 87.2601 422.14 83.2401 420.06C80.7201 418.76 72.3201 415.52 64.5501 412.88C56.7801 410.25 42.8601 405.19 33.6501 401.62C15.8101 394.71 6.84013 393.3 2.70011 396.74C-1.71987 400.41 -0.499899 403.79 4.84013 402.72C9.11015 401.87 26.7701 406.7 36.0401 411.29C37.7901 412.16 48.1601 415.91 59.0701 419.61C69.9801 423.32 79.0801 427.06 79.3001 427.93C79.7701 429.81 64.0301 440.28 54.1301 444.63C50.3301 446.3 41.8201 448.82 35.2401 450.26C17.4001 454.16 15.3101 454.92 15.3101 457.49C15.3101 459.35 17.64 459.82 26.4701 459.73C38.94 459.61 56.2901 454.68 65.8901 448.52C69.1601 446.42 72.6401 444.68 73.6101 444.68C74.5901 444.68 77.2101 443.25 79.4401 441.49C81.6701 439.74 84.8001 438.3 86.3701 438.3C87.9401 438.3 91.3001 436.55 93.8501 434.41C98.0201 430.91 102.89 429.26 125.9 423.7C136.26 421.19 137.65 423.86 129.99 431.67C120.12 441.73 109.59 454.63 107.01 459.83C105.71 462.46 102.65 467.84 100.23 471.74C97.8101 475.64 95.8401 480.08 95.8401 481.61C95.8401 486.93 99.4701 486.73 104.01 481.21C106.47 478.22 110.6 473.27 113.13 470.2C115.66 467.13 118.63 462.82 119.76 460.63C124.56 451.33 141.42 433.49 149.46 429.13C151.53 428.01 159.89 426.46 168.05 425.69C180.67 424.5 184.79 423.27 195.81 417.72C202.94 414.13 209.19 411.19 209.72 411.19C212.16 411.19 210.13 418.1 204.49 428.88C201.09 435.39 197.76 442.49 197.11 444.68C194.97 451.89 183.95 474.11 179.72 479.72C177.44 482.74 175.58 486.07 175.58 487.15C175.58 488.23 173.91 491.15 171.84 493.63C169.78 496.11 167.66 499.91 167.16 502.1C164.8 512.31 160.31 522.59 155.65 528.41C152.84 531.92 148.71 538.38 146.48 542.76C144.25 547.15 137.85 556.38 132.28 563.29C126.71 570.2 120.37 578.45 118.18 581.63C111.95 590.66 101.66 600.97 98.8401 600.97C97.4401 600.97 93.1101 602.34 89.2701 604.01C85.4301 605.68 78.2501 607.89 73.3201 608.89C67.9501 609.98 60.5301 613.2 54.7301 616.96C43.4 624.32 42.46 625.47 45.6601 628.12C47.63 629.76 49.69 629.12 57.2201 624.48C62.2501 621.38 69.5701 617.96 73.5201 616.9C77.4701 615.85 83.8101 613.95 87.6201 612.66C91.4301 611.37 94.8601 610.57 95.2001 610.91C95.5401 611.25 92.6001 618.84 88.6701 627.76C84.7501 636.68 80.8301 646.68 80.0001 649.99C78.4001 656.33 76.0801 664.77 74.2701 670.72C73.4801 673.32 73.9101 674.56 75.9601 675.35C79.3501 676.65 84.64 670.93 84.78 665.78C84.83 663.9 88.0101 656.24 91.8101 648.79C95.6101 641.33 101.28 629.93 104.47 623.42C110.98 610.11 117.27 601.87 132.93 586.14C138.85 580.19 143.69 574.63 143.69 573.78C143.69 572.93 144.83 572.24 146.18 572.24C149.12 572.24 149.01 573.11 141.25 612.11C139.77 619.57 137.95 632.48 137.21 640.82C135.43 661.01 132.85 687.24 131.53 699.03C130.86 705.03 131.53 717.53 133.32 732.52L136.21 756.44L129.43 776.38C125.71 787.34 122.09 797.03 121.41 797.91C120.73 798.79 119.31 802.38 118.27 805.88C117.23 809.39 114.9 815.7 113.04 819.88C110.34 825.95 110.06 827.88 111.65 829.45C114.44 832.2 116.43 829.2 129.09 803.13C134.94 791.08 140.6 781.22 141.7 781.2C142.8 781.19 143.69 782.05 143.69 783.14C143.69 784.24 145.73 790.16 148.23 796.3C150.72 802.44 153.2 810.63 153.71 814.49C154.22 818.35 156.02 823.42 157.75 825.75C159.48 828.08 162.54 833.89 164.53 838.66C166.52 843.43 169.36 848.77 170.86 850.52C172.36 852.27 174.43 855.32 175.45 857.3C176.68 859.79 178.88 861.14 180.43 860.98ZM251.59 385.57C251.49 385.55 251.4 385.53 251.34 385.47C250.17 384.3 262.72 366.53 272.42 355.62C277.58 349.81 283.78 342.46 286.17 339.27C288.57 336.08 293.17 331.6 296.44 329.35C302.99 324.83 314.33 319.71 314.33 321.28C314.33 321.83 309.13 327.43 302.77 333.69C296.41 339.95 289.22 347.75 286.77 351.03C276.79 364.4 254.71 385.98 251.59 385.57ZM469.64 238.7C469.21 238.75 468.82 238.73 468.49 238.7C467.84 238.63 467.44 238.38 467.44 238C467.44 237.24 474.8 233.2 483.79 229.03C497.38 222.72 501.69 221.45 509.36 221.45C516.12 221.47 520.74 220.36 526.65 217.36C535.69 212.78 556.75 209.92 556.75 213.27C556.75 215.75 552.49 217.47 534.42 222.19C526.09 224.37 514.68 227.95 509.05 230.16C503.43 232.37 493.38 234.87 486.72 235.74C480.06 236.61 472.99 237.83 471.02 238.38C470.54 238.54 470.07 238.65 469.64 238.7ZM586.79 206.76C579.47 207.96 580.88 204.81 583.62 203.7C586.08 202.62 590.05 202.34 591.54 202.36C593.86 202.38 594.5 203.68 592.44 205.01C590.88 206.03 589.11 206.38 586.79 206.76Z" fill="#0A0A0A"/>
          </svg>
        </div>

        <div class="row">
            <div class="col-md-4 offset-md-1">
                <p class="text-alt-color h5 mb-4"><strong>Espacios diseñados para un perfecto descanso.</strong></p>
                <p>Toma un descanso y recupera energía a través del relajante murmullo de agua, del contacto con nuestras raíces mexicanas y la calidez del momento en familia, pareja o amigos.</p>
                <p>Las habitaciones, cuidadosamente restauradas con una perfecta acústica, combinan historia, elegancia y modernas comodidades, están equipadas con aire acondicionado, conexión Wi-Fi gratuito, TV por cable, conector para dispositivos y minibar. Se ofrece servicio a las habitaciones las 24 horas.</p>
              </div>

            <div class="col-md-6 offset-md-1">
              <br>
              <br>
              <br>
              <div class="offset-mr-top">
                  <ul class="list-unstyled list-attributes mb-5">
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> 2 Master Suites</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> 7 Grand Class King</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> 19 Grand Class Doble Queen</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> 1 Villa Catrina</li>
                  </ul>

                  <h4 class="display-3 mb-0 mt-4">Check-in: 3:00 PM</h4>
                  <h4 class="display-3">Check-out: 12:00 PM</h4>
              </div>
            </div>
        </div>
    </div>
</section>

@php
    $gallery_ms_101 = [
        ['title' => 'Cama King Size', 'img' => 'gallery_1.jpg'],
        ['title' => 'Sala Smart TV 65"', 'img' => 'gallery_2.jpg'],
        ['title' => 'Escritorio con iluminación', 'img' => 'gallery_3.jpg'],
        ['title' => 'Baño completo', 'img' => 'gallery_4.jpg'],
        ['title' => 'Tina personal con sales de baño.', 'img' => 'gallery_5.jpg'],
        ['title' => 'Terraza con sala', 'img' => 'gallery_6.jpg'],
    ];

    $gallery_ms_201 = [
        ['title' => 'Cama King Size', 'img' => 'gallery_1.jpg'],
        ['title' => 'Terraza de descanso ', 'img' => 'gallery_2.jpg'],
        ['title' => 'Déjate llevar por la comodidad ', 'img' => 'gallery_3.jpg'],
        ['title' => 'Cómoda Sala de TV ', 'img' => 'gallery_4.jpg'],
        ['title' => 'Amenidades de lujo', 'img' => 'gallery_5.jpg'],
        ['title' => 'Habitación para un magnífico descanso', 'img' => 'gallery_6.jpg'],
    ];

    $gallery_gck = [
        ['title' => 'Cama King Size', 'img' => 'gallery_1.jpg'],
        ['title' => 'Cuidamos todos los detalles del confort', 'img' => 'gallery_2.jpg'],
        ['title' => 'Smart TV 55" con SKY', 'img' => 'gallery_3.jpg'],
        ['title' => 'Escritorio de trabajo', 'img' => 'gallery_4.jpg'],
        ['title' => 'Amenidades de lujo', 'img' => 'gallery_5.jpg'],
        ['title' => 'Terraza con sala / Balcón', 'img' => 'gallery_6.jpg'],
    ];

    $gallery_gcdq = [
        ['title' => 'Cómodas camas gemelas Quee Size', 'img' => 'gallery_1.jpg'],
        ['title' => 'Amenidades de lujo', 'img' => 'gallery_2.jpg'],
        ['title' => 'Mini Bar a tu servicio ', 'img' => 'gallery_3.jpg'],
        ['title' => 'Cuidamos cada detalle del confort.', 'img' => 'gallery_4.jpg'],
        ['title' => 'Smart TV de 55"', 'img' => 'gallery_5.jpg'],
        ['title' => 'Cómoda terraza o balcón', 'img' => 'gallery_6.jpg'],
    ];

    $gallery_vc = [
        ['title' => 'Residencia totalmente privada', 'img' => 'gallery_1.jpg'],
        ['title' => 'Habitación Doble Queen Size', 'img' => 'gallery_2.jpg'],
        ['title' => 'Sala de TV y Comedor ', 'img' => 'gallery_3.jpg'],
        ['title' => 'Alberca con camastros privados', 'img' => 'gallery_4.jpg'],
        ['title' => 'Terraza con asador', 'img' => 'gallery_5.jpg'],
        ['title' => 'Habitación King Size ', 'img' => 'gallery_6.jpg'],
    ];
@endphp
<section class="section std-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="wide">Habitaciones</p>

                <div class="room-collapse">
                    <button class="btn-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#masterSuite101" aria-expanded="false" aria-controls="masterSuite101">
                        Master Suite <span>101</span>
                    </button>
                    
                    <div class="collapse" id="masterSuite101">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="owl-carousel gallery-carousel">
                              @foreach($gallery_ms_101 as $g_img)
                              <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/rooms/master-suite-101/' . $g_img['img']) }}" alt="">
                                      <p>{{ $g_img['title'] }}</p>
                                  </div>
                              </div>
                              @endforeach
                          </div>
                        </div>
                        </div>

                        <div class="row align-items-center mt-5 position-relative">
                            <a href="{{ route('boutique.detail', 'master-suite-101') }}" class="btn btn-primary">Conoce más</a>

                            <div class="col-md-5">
                                <p class="text-alt-color h5 mb-4"><strong>Lujo en cada detalle</strong></p>
                                <p>Habitación decorada con un hermoso estilo tradicional mexicano con aire acondicionado. Encontrarás una cómoda cama King Size y un escritorio de trabajo. Sala de TV con pantalla de 65” con sistema SKY, espacioso closet, baño completo con tina y sales de baño. Amenidades de lujo: pantuflas, bata, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor de mano, caja de seguridad, café de cápsula de cortesía y minibar.  Cuenta con una pequeña sala de estar en terraza para disfrutar de la vista del área de la alberca del hotel.</p>
                            </div>

                            <div class="col-md-2 offset-md-2">
                                <ul class="list-unstyled list-attributes">
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Cama King Size</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Tina Personal</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Terraza con Cómoda Sala</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="room-collapse">
                  <button class="btn-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#masterSuite201" aria-expanded="false" aria-controls="masterSuite201">
                      Master Suite <span>201</span>
                  </button>
                  
                  <div class="collapse" id="masterSuite201">
                      <div class="row">
                          <div class="col-md-12">
                            <div class="owl-carousel gallery-carousel">
                              @foreach($gallery_ms_201 as $g_img)
                              <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/rooms/master-suite-201/' . $g_img['img']) }}" alt="">
                                      <p>{{ $g_img['title'] }}</p>
                                  </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                      </div>
                      <div class="row align-items-center mt-5 position-relative">
                          <a href="{{ route('boutique.detail', 'master-suite-201') }}" class="btn btn-primary">Conoce más</a>

                          <div class="col-md-5">
                              <p class="text-alt-color h5 mb-4"><strong>Una expresión del México contemporáneo.</strong></p>
                              <p>Habitación decorada con un hermoso estilo contemporáneo mexicano con aire acondicionado. Encontrarás una cómoda cama King Size y un escritorio de trabajo. Sala de televisión con pantalla de 55" con sistema SKY, espacioso closet, baño completo con tina y sales de baño. Amenidades de lujo: pantuflas, bata, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor de mano, caja de seguridad, café de cápsula de cortesía y minibar.  Cuenta con una pequeña sala de estar en terraza para disfrutar de la vista del área de la alberca del hotel.</p>
                          </div>

                          <div class="col-md-2 offset-md-2">
                              <ul class="list-unstyled list-attributes">
                                  <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Cama King Size</li>
                                  <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Tina Personal</li>
                                  <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Terraza con Cómoda Sala</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>

                <div class="room-collapse">
                    <button class="btn-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#GranClassKing" aria-expanded="false" aria-controls="GranClassKing">
                      Gran Class <span>King</span>
                    </button>
                    
                    <div class="collapse" id="GranClassKing">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="owl-carousel gallery-carousel">
                                @foreach($gallery_gck as $g_img)
                                <div class="item">
                                    <div class="gallery-card">
                                        <img src="{{ asset('img/rooms/gran-class-king/' . $g_img['img']) }}" alt="">
                                        <p>{{ $g_img['title'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                              </div>
                            </div>
                        </div>

                        <div class="row align-items-center mt-5 position-relative">
                            <a href="{{ route('boutique.detail', 'gran-class-king') }}" class="btn btn-primary">Conoce más</a>

                            <div class="col-md-5">
                                <p class="text-alt-color h5 mb-4"><strong>Diseñada para un magnífico descanso</strong></p>
                                <p>Habitación decorada con un hermoso estilo tradicional mexicano con aire acondicionado. Encontrarás una cómoda cama King Size, un escritorio de trabajo en el caso de que lo necesites. Pantalla de 55" con sistema SKY, espacioso closet, baño completo con Regadera tipo lluvia. Amenidades de lujo: pantuflas, bata, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor vertical de mano, secadore de cabello, caja de seguridad electrónica, Nespresso y café de cápsula de cortesía, Teléfono con línea directa, Internet inalámbrico, Sistema de llaves electrónicas y servicio de minibar.  Algunas habitaciones cuentan con balcón o una pequeña sala de estar en terraza para disfrutar de la vista a las áreas verdes del hotel.</p>
                            </div>

                            <div class="col-md-2 offset-md-2">
                                <ul class="list-unstyled list-attributes">
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Cama King Size</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Balcón o Terraza</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Puedes agregar cuna</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="room-collapse">
                    <button class="btn-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#GranClassQueen" aria-expanded="false" aria-controls="GranClassQueen">
                        Gran Class <span>Double Queen</span>
                    </button>
                    
                    <div class="collapse" id="GranClassQueen">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="owl-carousel gallery-carousel">
                                @foreach($gallery_gcdq as $g_img)
                                <div class="item">
                                    <div class="gallery-card">
                                        <img src="{{ asset('img/rooms/gran-class-double-queen/' . $g_img['img']) }}" alt="">
                                        <p>{{ $g_img['title'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                              </div>
                            </div>
                        </div>

                        <div class="row align-items-center mt-5 position-relative">
                            <a href="{{ route('boutique.detail', 'gran-class-double-queen') }}" class="btn btn-primary">Conoce más</a>

                            <div class="col-md-5">
                                <p class="text-alt-color h5 mb-4"><strong>El lujo también se comparte en familia</strong></p>
                                <p>Habitación decorada con un hermoso estilo mexicano con aire acondicionado. Encontrarás dos cómodas camas Queen Size, un escritorio de trabajo, Pantalla de 55" con sistema SKY,  closet, baño completo con Regadera tipo lluvia. Amenidades de lujo: pantuflas, bata, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor de mano, secadora de cabello, caja de seguridad electrónica, Nespresso y café de cápsula de cortesía. Teléfono con línea directa, Internet inalámbrico, Sistema de llaves electrónicas y servicio de minibar. Algunas habitaciones cuentan con blacón o con una pequeña sala de estar en terraza con vista a la alberca del hotel o hacia jardines y lago, de acuerdo a su configuración. Algunas de estas habitaciones cuentan con sofá cama adicional.</p>
                            </div>

                            <div class="col-md-2 offset-md-2">
                                <ul class="list-unstyled list-attributes">
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Balcón o Terraza</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Puedes agregar cuna</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Puedes tener sofá cama</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="room-collapse">
                  <button class="btn-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#VillaCatrina" aria-expanded="false" aria-controls="VillaCatrina">
                      Villa Catrina <span>Residencia Privada</span>
                  </button>
                  
                  <div class="collapse" id="VillaCatrina">
                      <div class="row">
                          <div class="col-md-12">
                            <div class="owl-carousel gallery-carousel">
                              @foreach($gallery_vc as $g_img)
                                <div class="item">
                                    <div class="gallery-card">
                                        <img src="{{ asset('img/rooms/villa-catrina/' . $g_img['img']) }}" alt="">
                                        <p>{{ $g_img['title'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                          </div>
                      </div>

                      <div class="row align-items-center mt-5 position-relative">
                          <a href="{{ route('boutique.detail', 'villa-catrina') }}" class="btn btn-primary">Conoce más</a>
                          
                          <div class="col-md-5">
                              <p class="text-alt-color h5 mb-4"><strong>El corazón del lujo mexicano.</strong></p>
                              <p>Hermosa casa de campo decorada con un hermoso estilo tradicional mexicano totalmente privada. Encontrarás dos recámaras una con cama King Size y baño completo y otra con dos cómodas camas Queen Size con sus mesas lámparas de noche y baño completo. Cuenta con sala de estar con aire acondicionado, antalla de 55 pulgadas con sistema SKY, comedor completo para 6 personas, wc para invitados, cocineta completa con Nespresso con café de cápsula de cortesía y servicio de minibar. Las habitaciones cuentan con espacio de closets, baño completo con regadera tipo lluvia y exclusivas amenidades de lujo: pantuflas, bata de baño, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor vertical de mano, secadora de cabello, caja de seguridad electrónica. La villa cuenta también con teléfono con línea directa, Internet inalámbrico, Sistema de llaves electrónicas. Cuenta con una amplia terraza con sala de estar, comedor completo con parrilla, alberca y solario con camastros rodeados de un hermoso jardín totalmente privado.</p>
                          </div>

                          <div class="col-md-2 offset-md-2">
                              <ul class="list-unstyled list-attributes">
                                  <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Villa Privada</li>
                                  <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Terraza con asador</li>
                                  <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Alberca privada con camastros</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>

<div class="section">
    @include('layouts.utilities.scroll_text')
    @include('layouts.utilities.cta_video')
</div>
@endsection

@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.gallery-carousel').owlCarousel({
    loop:true,
    nav:true,
    responsive:{
        0:{
            items:2,
            margin:15,
        },
        600:{
            items:2,
            margin:15,
        },
        1000:{
            items:4,
            margin:30,
        }
    }
  });
</script>
@endpush
