<!DOCTYPE html>
<html lang="id" class="notranslate" translate="no">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="color-scheme" content="light only">
    <meta name="format-detection" content="telephone=no">
    <meta name="google" content="notranslate" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="https://www.dlalajo.cyou/storage/general/1666449779508.png">
    <title>The Wedding Of {{ $title }}</title>
    <meta name="title" content="The Wedding Of {{ $title }}">
    <meta name="description" content="Kepada Yth: {{ $guest->name }}, Klik Untuk Membuka Undangan">
    <meta itemprop="image" content="{{ url('themes/images/image.jpeg') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="The Wedding Of {{ $title }}">
    <meta property="og:description" content="Kepada Yth: {{ $guest->name }}, Klik Untuk Membuka Undangan">
    <meta property="og:image" content="{{ url('themes/images/image.jpeg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="The Wedding Of {{ $title }}">
    <meta name="twitter:description" content="Kepada Yth: {{ $guest->name }}, Klik Untuk Membuka Undangan">
    <meta name="twitter:site" content="{{ url()->current() }}">
    <meta name="twitter:image" content="{{ url('themes/images/image.jpeg') }}">

    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "Dlalajo E-Invitation",
        "image": "https://www.dlalajo.cyou/storage/general/logo-banner.png",
        "description": "Klik Untuk Membuka Undangan",
        "brand": {
          "@type": "Brand",
          "name": "Dlalajo"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.9",
          "reviewCount": "381"
        }
      }
    </script>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('themes/gold-black-silver/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/gold-black-silver/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/fill/style.css" />
    <link href="{{ asset('themes/gold-black-silver/css/themesv2.css') }}" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
      @import url('/fonts/laraboyok/style.css');

      :root {
        --inv-bg: #262626;
        --inv-base: #ffffff;
        --inv-accent: #dcc67a;
        --inv-border: #dcc67a;
        --font-base: "Lora", serif;
        --font-accent: 'Laraboyok', serif;
        --font-latin: "Kaushan Script", cursive;
        --menu-bg: #212020;
        --menu-inactive: #dcc67a;
        --menu-active: #dcc67a;
        --btn-color: #212020;
      }
    </style>
    <style>
      @import url('/fonts/brittany_signature/BrittanySignature.css');
      @import url('/fonts/photograph_signature/fonts.css');
      @import url('/fonts/heatwood/Heatwood.css');

      .font-brittany-signature {
        font-family: 'Brittany Signature';
        line-height: 1.6 !important;
      }

      .font-photograph-signature {
        font-family: 'Photograph Signature';
        line-height: 1.6 !important;
      }

      .font-heatwood {
        font-family: 'Heatwood';
        line-height: 3 !important;
      }
    </style>
    {{-- @livewireStyles --}}
  </head>
  <body>
    <main id="app">
      <div id="modalOverlay" class="modal-backdrop fade" style="display: none;"></div>
      <!-- Loader -->
      <div id="loader" class="loader-wrapper">
        <span class="loader">
          <span class="loader-inner"></span>
        </span>
      </div>
      <!-- music -->
      <audio id="music" loop autoplay>
        <source src="https://cdn.pixabay.com/audio/2021/10/19/audio_305c8d1ad0.mp3">
      </audio>
      <!-- end music -->
      <div id="workspace-container" class="position-fixed h-100 w-100" style="overflow: hidden">
        <div id="panZoom" class="position-fixed h-100 w-100" style="top: 0; right:0; bottom:0; left:0; transform-origin: 50% 50%;">
          <div class="h-100 w-100 d-flex align-items-center justify-content-center">
            <div class="canvas not-open  ">
              <!-- invitation -->
              <div id="dlalajoEinvitation" data-guest="{{ $guest->name }}" data-group="VIP">
                <div class="dlalajo_track">
                  <ul class="dlalajo_list">
                    <li class="dlalajo_slide dlalajo_cover">
                      <div class="container-mobile cover" style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="d-flex justify-content-center align-items-center" style="height:calc(100% + 60px);width:calc(100% + 60px);background-size:cover;margin:-30px;padding:30px;">
                          <div style="width:100%;">
                            <div class="text-center mb-5" style="line-height:1;">
                              <div class="editable mb-3 animate__animated animate__fadeInDown animate__slower" style="font-size:14px;letter-spacing:4px;">THE WEDDING OF</div>
                              <div class="editable color-accent animate__animated animate__zoomIn animate__slower font-latin mb-2" style="font-size:70px;">Asep</div>
                              <div class="editable animate__animated animate__zoomIn animate__slower mb-3" style="font-size:24px;">&amp;</div>
                              <div class="editable color-accent animate__animated animate__zoomIn animate__slower font-latin" style="font-size:70px;">Nuryanti</div>
                              <div class="editable mt-3 animate__animated animate__fadeInUp animate__slower" style="font-size:14px;letter-spacing:4px;">16 . 11 . 2024</div>
                            </div>
                            <div class="text-center mx-auto" style="max-width:300px;">
                              <div class="text-center mb-3 p-2 animate__animated animate__zoomIn animate__slower">
                                <div class="editable mb-1 animate__animated animate__fadeInUp animate__slower" style="font-size:14px;">Kepada Yth; <br />Bapak/Ibu/Saudara/i </div>
                                <div id="guestNameSlot" class="editable color-accent h5 font-weight-bold mb-1 animate__animated animate__fadeInUp animate__slower" style="font-size:16px;">{{ $guest->name }}</div>
                              </div>
                              <button class="btn-open-invitation btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow" style="font-size:14px;">Open Invitation</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center" style="height:100%;">
                          <div>
                            <div class="text-center animate__animated animate__fadeInUp animate__slower" style="max-width:250px;">
                              <div class="editable quotes mb-3" style="font-size:14.4px;line-height:2;">Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</div>
                              <div class="editable font-italic" style="font-size:14.4px;">Surah Ar-Rum : 21</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="d-flex justify-content-center flex-column align-items-center" style="height:100%;">
                          <div class="mb-4 text-center animate__animated animate__fadeInUp animate__slower">
                            <div class="px-3 editable color-accent font-latin" style="font-size:30px;background:-webkit-linear-gradient(top, rgb(152, 105, 35), rgb(243, 241, 185), rgb(152, 105, 35)) text;">Mempelai</div>
                          </div>
                          <div style="z-index:2;">
                            <div class="d-flex align-items-start justify-content-center mb-5">
                              <div class="image-editable animate__animated animate__fadeInLeft animate__slower" style="height:120px;width:120px;overflow:hidden;background-position:center;background-size:contain;display:flex;justify-content:center;align-items:center;flex:0 0 auto;border-radius:100%;">
                                <img src="{{ asset('themes/images/male.jpeg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="147961-gallery-1697018895.jpg" />
                              </div>
                              <div class="text-left pl-3 animate__animated animate__fadeInRight animate__slower">
                                <div class="editable font-weight-bold mb-2 font-latin" style="font-size:23px;">Asep Sunandar</div>
                                <div class="editable mb-2" style="line-height:1.3;font-size:14px;">Putra ke-6 dari <br />Bapak Saepudin <br />&amp; Ibu Yanah </div>
                                {{-- <a rel="nofollow" href="https://instagram.com/" class="btn btn-sm link btn-primary rounded-pill" style="line-height:1.3;font-size:14px;background-image:url('themes/images/instagram.webp');background-size:contain;background-repeat:no-repeat;padding-left:28px;background-position:left;">@instagram</a> --}}
                              </div>
                            </div>
                            <div class="d-flex align-items-start justify-content-center flex-row-reverse mb-3">
                              <div class="image-editable animate__animated animate__fadeInRight animate__slower" style="height:120px;width:120px;overflow:hidden;background-position:center;background-size:contain;display:flex;justify-content:center;align-items:center;flex:0 0 auto;border-radius:100%;">
                            <img src="{{ asset('themes/images/female.jpeg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="147961-gallery-1693902647.jpg" />
                              </div>
                              <div class="text-left pr-3 animate__animated animate__fadeInLeft animate__slower">
                                <div class="editable font-weight-bold mb-2 font-latin" style="font-size:23px;">Nuryanti</div>
                                <div class="editable mb-2" style="line-height:1.3;font-size:14px;">Putri ke-2 dari <br />Bpk Saryanto (Yanto) &amp; <br />Ibu Suhaemah (Eem) <br />
                                </div>
                                {{-- <a rel="nofollow" href="https://instagram.com/instagram" class="btn btn-sm link btn-primary rounded-pill" style="line-height:1.3;font-size:14px;background-image:url('/themes/images/instagram.webp');background-size:contain;background-repeat:no-repeat;padding-left:28px;background-position:left;">@instagram</a> --}}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="d-flex justify-content-center align-items-center" style="height:100%;">
                          <div style="width:100%;">
                            <div class="text-center mb-4 animate__animated animate__fadeInDown animate__slower">
                              <div class="color-accent h4 mb-2 editable font-latin" style="font-size:28.8px;background:-webkit-linear-gradient(top, rgb(152, 105, 35), rgb(243, 241, 185), rgb(152, 105, 35)) text;">Our Memories</div>
                            </div>
                            <div class="image-editable d-flex flex-wrap">
                            @foreach ($gallery as $img)
                                <div class="animate__animated animate__zoomIn animate__slower" style="width:33.333%;overflow:hidden;padding:4px;">
                                    <div class="light" style="overflow:hidden;width:100%;height:100px;">
                                        <img src="{{ $img }}" class="lightbox" style="width: 100%; height: 100%; object-fit: cover;" alt="147961-gallery-1693902522.jpg" />
                                    </div>
                                </div>
                            @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="d-flex justify-content-center align-items-center" style="height:100%;">
                          <div style="width:100%;">
                            <div class="text-center mb-3">
                              <div class="editable color-accent h4 mb-2 animate__animated animate__fadeInDown animate__slower font-latin" style="font-size:30px;background:-webkit-linear-gradient(top, rgb(152, 105, 35), rgb(243, 241, 185), rgb(152, 105, 35)) text;">Akad</div>
                              <div class="my-3 d-flex flex-row justify-content-center align-items-center animate__animated animate__zoomIn animate__slower">
                                <div class="editable" style="font-size:14.4px;width:100px;">Sabtu</div>
                                <div style="border-left:2px solid var(--inv-accent);border-right:2px solid var(--inv-accent);" class="px-3">
                                  <div class="editable" style="font-size:38px;line-height:1;">16</div>
                                  <div class="editable" style="font-size:14.4px;">2024</div>
                                </div>
                                <div class="editable" style="font-size:14.4px;width:100px;">November</div>
                              </div>
                              <div class="editable animate__animated animate__fadeInDown animate__slower" style="font-size:14.4px;">Pukul 09.00 WIB ~ 10.00 WIB</div>
                            </div>
                            <div class="text-center">
                              <div class="editable font-accent color-accent animate__animated animate__fadeInUp animate__slower" style="font-size:18px;">Lokasi Acara</div>
                              <div class="editable font-weight-bold animate__animated animate__fadeInUp animate__slower" style="font-size:14.4px;">Belakang Balai Desa</div>
                              <div class="editable mb-4 animate__animated animate__fadeInUp animate__slower" style="font-size:14.4px;">Kp. Tarikolot RT 01/RW 01, Desa. Tarikolot, Kec. Citeureup Kab. Bogor Jawa Barat</div>
                              <a href="https://maps.app.goo.gl/MkFCqLeKiV1GWHTa8" target="_blank" class="link btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slower" rel="noreferrer noopener">Link Google Maps</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center" style="height:100%;">
                          <div class="text-center mb-3">
                            <div class="color-accent animate__animated animate__fadeInDown animate__slower editable font-latin" style="font-size:28.8px;line-height:1.2;background:-webkit-linear-gradient(top, rgb(152, 105, 35), rgb(243, 241, 185), rgb(152, 105, 35)) text;">Resepsi</div>
                            <div class="animate__animated animate__fadeInDown animate__slower editable font-weight-bold font-accent" style="font-size:18px;">Sabtu, 16 November 2024</div>
                          </div>
                          <div class="mx-auto mb-3 countdown-wrapper d-flex flex-column animate__animated animate__fadeInUp animate__slower" data-datetime="2024-11-16T10:05" style="width:300px;max-width:100%;">
                            <div class="countdown text-center">
                              <div class="countdown-item day">
                                <div class="number">00</div>
                                <div class="text editable">Hari</div>
                              </div>
                              <div class="countdown-item hour">
                                <div class="number">00</div>
                                <div class="text editable">Jam</div>
                              </div>
                              <div class="countdown-item minute">
                                <div class="number">00</div>
                                <div class="text editable">Menit</div>
                              </div>
                              <div class="countdown-item second">
                                <div class="number">00</div>
                                <div class="text editable">Detik</div>
                              </div>
                            </div>
                            <button class="btn-countdown btn btn-sm btn-pilled btn-accent mt-2">Atur Tanggal</button>
                          </div>
                          <div class="text-center mb-4">
                            <div class="animate__animated animate__fadeInDown animate__slower editable font-latin" style="font-size:28.8px;line-height:1.2;">Belakang Balai Desa</div>
                            <div class="animate__animated animate__fadeInDown animate__slower editable font-weight-bold mb-2 font-accent mt-2" style="font-size:18px;">Kp. Tarikolot RT 01/RW 01, Desa. Tarikolot, Kec. Citeureup Kab. Bogor Jawa Barat</div>
                            <a href="https://maps.app.goo.gl/MkFCqLeKiV1GWHTa8" class="link btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" target="_blank" style="font-size:14px;" rel="noreferrer noopener">Buka Google Maps</a>
                        </div>
                          {{-- <div class="animate__animated animate__fadeInUp animate__slower text-center mb-3 p-2" style="width:270px;max-width:100%;border-radius:1rem;border:2px solid var(--inv-border);">
                            <div class="animate__animated animate__fadeInDown animate__slower editable font-latin" style="font-size:28.8px;line-height:1.2;">Dresscode</div>
                            <div class="animate__animated animate__fadeInDown animate__slower editable font-weight-bold font-accent" style="font-size:18px;">Blue, Navy</div>
                          </div>
                          <div class="mw-100 form-row align-items-center justify-content-center" style="width:220px;">
                            <div class="col d-flex justify-content-center">
                              <div class="image-editable animate__animated animate__zoomIn animate__slower rounded-circle" style="overflow:hidden;width:60px;height:60px;">
                                <img src="/themes/images/no-image.jpg" height="60" width="60" class="h-100 w-100" style="object-fit: cover;" alt="no-image.jpg" />
                              </div>
                            </div>
                            <div class="image-editable col d-flex justify-content-center">
                              <div class="animate__animated animate__zoomIn animate__slower rounded-circle" style="overflow:hidden;width:60px;height:60px;">
                                <img src="/themes/images/no-image.jpg" height="60" width="60" class="h-100 w-100" style="object-fit: cover;" alt="no-image.jpg" />
                              </div>
                            </div>
                            <div class="image-editable col d-flex justify-content-center">
                              <div class="animate__animated animate__zoomIn animate__slower rounded-circle" style="overflow:hidden;width:60px;height:60px;">
                                <img src="/themes/images/no-image.jpg" height="60" width="60" class="h-100 w-100" style="object-fit: cover;" alt="no-image.jpg" />
                              </div>
                            </div>
                          </div> --}}
                        </div>
                      </div>
                    </li>
                    {{-- <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center" style="height:100%;">
                          <div class="image-editable mb-4 mx-auto animate__animated animate__fadeInDown animate__slower" style="height:240px;width:190px;overflow:hidden;border:3px solid var(--inv-border);border-radius:250px 250px 0px 0px;padding:10px;">
                            <img src="{{ asset('themes/images/1.jpeg') }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 250px 250px 0px 0px;" alt="256738-gallery-I0fZ6XWHnu.jpg" />
                          </div>
                          <div style="width:100%;">
                            <div class="text-center color-accent h4 mb-4 editable animate__animated animate__fadeInDown animate__slow font-latin" style="font-size:21.6px;background:-webkit-linear-gradient(top, rgb(152, 105, 35), rgb(243, 241, 185), rgb(152, 105, 35)) text;">Reservasi</div>
                            <div>
                              <div class="text-center">
                                <div class="editable mb-4 animate__animated animate__fadeInUp animate__slower" style="font-size:12px;">Kirim ucapan untuk mempelai </div>
                                <button class="btn-rsvp btn btn-primary mx-auto rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow" style="gap:8px;"> Kirim Ucapan RSVP </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li> --}}
                    <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="d-flex justify-content-center align-items-center px-3" style="height:100%;">
                          <div style="width:100%;">
                            <div>
                              <div style="width:80%;margin:auto;border-radius:10px;overflow:hidden;margin-bottom:20px;padding-bottom:70%;position:relative;" class="animate__animated animate__fadeInDown animate__slow">
                                <iframe width="100%" height="100%" style="border:0;position:absolute;" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3964.225735616298!2d106.88593677499266!3d-6.493077193499004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMjknMzUuMSJTIDEwNsKwNTMnMTguNiJF!5e0!3m2!1sen!2sid!4v1727371850265!5m2!1sen!2sid" class="maps-embed" loading="lazy"></iframe>
                              </div>
                              <button class="btn-maps btn btn-sm btn-pilled btn-block btn-accent mt-1 mb-4">Edit Denah Lokasi</button>
                              <div class="text-center animate__animated animate__fadeInUp animate__slow">
                                <div class="editable color-accent font-latin" style="font-size:32px;background:-webkit-linear-gradient(top, rgb(152, 105, 35), rgb(243, 241, 185), rgb(152, 105, 35)) text;">Momen Venue</div>
                                <div class="editable mb-3" style="font-size:14.4px;">Kp. Tarikolot RT 01/RW 01, Desa. Tarikolot, Kec. Citeureup Kab. Bogor Jawa Barat</div>
                                <a href="https://maps.app.goo.gl/MkFCqLeKiV1GWHTa8" class="btn-maps-link btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow" target="_blank" rel="noreferrer noopener">Petunjuk Ke Lokasi</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    {{-- <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="d-flex justify-content-center align-items-center" style="height:100%;">
                          <div class="text-center" style="width:100%;">
                            <div class="editable color-accent h4 mb-4 animate__animated animate__fadeInDown animate__slower font-latin" style="font-size:28.8px;background:-webkit-linear-gradient(top, rgb(152, 105, 35), rgb(243, 241, 185), rgb(152, 105, 35)) text;">Instagram Filter</div>
                            <div class="editable animate__animated animate__fadeInDown animate__slower" style="font-size:14.4px;">Gunakan instagram filter berikut <br />untuk menambah kemeriahan acara </div>
                            <div class="d-flex px-3 justify-content-center mt-3">
                              <div class="image-editable animate__animated animate__fadeInDown animate__slower m-2" style="height:300px;width:200px;border-radius:10px;overflow:hidden;">
                                <img src="https://assets.satumomen.com/images/galleries/256738-gallery-I0fZ6XWHnu.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="256738-gallery-I0fZ6XWHnu.jpg" />
                              </div>
                            </div>
                            <a href="https://instagram.com/" target="_blank" class="link btn btn-primary rounded-pill my-3 animate__animated animate__fadeInUp animate__slow" rel="noreferrer noopener">Gunakan Filter</a>
                          </div>
                        </div>
                      </div>
                    </li> --}}
                    <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="px-3 h-100 w-100 d-flex flex-column justify-content-center align-items-center">
                          <div class="text-center">
                            <div class="color-accent h4 mb-2 editable animate__animated animate__fadeInDown animate__slower font-latin" style="font-size:28.8px;background:-webkit-linear-gradient(top, rgb(152, 105, 35), rgb(243, 241, 185), rgb(152, 105, 35)) text;">Wedding Gift</div>
                            <div class="editable mb-4 animate__animated animate__fadeInDown animate__slower" style="font-size:14.4px;">Terima kasih telah menambah semangat kegembiraan pernikahan kami dengan kehadiran dan hadiah indah Anda.</div>
                          </div>
                          <div class="p-3 text-left mb-3 animate__animated animate__zoomIn animate__slower" style="background:linear-gradient(113deg, rgba(217,217,217,1) 0%, rgba(255,255,255,1) 23%, rgba(229,229,229,1) 31%, rgba(253,253,253,1) 61%, rgba(186,186,186,1) 100%);border-radius:1rem;font-family:monospace;width:100%;max-width:320px;">
                            <div class="editable mb-2" style="color:#333333;">BANK BCA</div>
                            <div class="mb-3 d-flex align-items-center justify-content-between">
                              <div style="position:relative;width:70px;height:50px;border-radius:.5rem;overflow:hidden;background:linear-gradient(113deg, rgba(213,172,63,1) 0%, rgba(255,224,136,1) 50%, rgba(193,140,1,1) 100%);">
                                <div style="position:absolute;height:1px;background-color:#a17712;left:0;right:0;top:25%;border-radius:.5rem;"></div>
                                <div style="position:absolute;height:1px;background-color:#a17712;left:0;right:0;bottom:25%;border-radius:.5rem;"></div>
                                <div style="position:absolute;height:1px;background-color:#a17712;left:70%;right:0;bottom:50%;border-radius:.5rem;"></div>
                                <div style="position:absolute;height:1px;background-color:#a17712;left:0;right:70%;bottom:50%;border-radius:.5rem;"></div>
                                <div style="position:absolute;width:1px;background-color:#a17712;top:0;bottom:0;right:30%;border-radius:.5rem;"></div>
                                <div style="position:absolute;width:1px;background-color:#a17712;top:0;bottom:0;left:30%;border-radius:.5rem;"></div>
                              </div>
                              <div style="width:90px;height:50px;border-radius:.5rem;overflow:hidden;background-color:#ffffff;">
                                <img src="{{ asset('themes/images/logo-bca.webp') }}" style="height: 100%; width: 100%; object-fit: cover;" alt="logo-mandiri.webp" />
                              </div>
                            </div>
                            <div class="account-number editable font-weight-bold" style="color:#333333;font-size:18px;">5721232493</div>
                            <div class="editable" style="color:#333333;">Nuryanti</div>
                          </div>
                          <a class="btn btn-primary px-3 rounded-pill link animate__animated animate__fadeInUp animate__slower" href="https://wa.me/" target="_BLANK" rel="nofollow noreferrer noopener">Konfirmasi Bukti Trf</a>
                        </div>
                      </div>
                    </li>
                    {{-- <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="d-flex justify-content-center align-items-center" style="height:100%;">
                          <div>
                            <div class="text-center color-accent h4 mb-2 editable animate__animated animate__fadeInDown animate__slower font-latin" style="font-size:28.8px;background:-webkit-linear-gradient(top, rgb(152, 105, 35), rgb(243, 241, 185), rgb(152, 105, 35)) text;">Contact Person</div>
                            <div class="editable mb-4 text-center animate__animated animate__fadeInUp animate__slower" style="font-size:14.4px;">Hubungi Contact Person kami jika ada hal <br />yang ingin ditanyakan. </div>
                            <div class="text-center animate__animated animate__fadeInUp animate__slower mb-4">
                              <div class="image-editable animate__animated animate__fadeInUp animate__slower" style="height:100px;width:100px;margin:auto;border-radius:100%;overflow:hidden;margin-bottom:10px;">
                                <img src="https://assets.satumomen.com/images/galleries/256738-gallery-I0fZ6XWHnu.jpg" style="width: 100%;height: 100%;object-fit: cover;" alt="256738-gallery-I0fZ6XWHnu.jpg" />
                              </div>
                              <div class="editable color-accent h4 mb-2 animate__animated animate__fadeInUp animate__slower font-accent" style="font-size:21.6px;">Akbar</div>
                              <a class="link btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slower" href="https://wa.me/#" target="_blank" rel="noreferrer noopener">WA 0812-2345-6789</a>
                            </div>
                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                              <div class="image-editable animate__animated animate__fadeInUp animate__slower" style="height:100px;width:100px;margin:auto;border-radius:100%;overflow:hidden;margin-bottom:10px;">
                                <img src="https://assets.satumomen.com/images/galleries/256738-gallery-I0fZ6XWHnu.jpg" style="width: 100%;height: 100%;object-fit: cover;" alt="256738-gallery-I0fZ6XWHnu.jpg" />
                              </div>
                              <div class="editable color-accent h4 mb-2 animate__animated animate__fadeInUp animate__slower font-accent" style="font-size:21.6px;">Tiwi</div>
                              <a class="link btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slower" href="https://wa.me/#" target="_blank" rel="noreferrer noopener">WA 0812-3456-7890</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li> --}}
                    <li class="dlalajo_slide">
                      <div class="container-mobile " style="background-image: url({{ asset('themes/gold-black-silver/images/bg.webp') }});">
                        <div class="frame">
                          <img class="frame-tl w-100 animate__animated animate__fadeInDown animate__slower" src="{{ asset('themes/gold-black-silver/images/tm.webp') }}" alt="frame" style="animation-delay: 500ms">
                          <img class="frame-bl h-100 animate__animated animate__fadeInLeft animate__slow" src="{{ asset('themes/gold-black-silver/images/left.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-br h-100 animate__animated animate__fadeInRight animate__slow" src="{{ asset('themes/gold-black-silver/images/right.webp') }}" alt="frame" style="width: auto;">
                          <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slower" src="{{ asset('themes/gold-black-silver/images/bl.webp') }}" alt="frame">
                          <img class="frame-br animate__animated animate__fadeInBottomRight animate__slower" src="{{ asset('themes/gold-black-silver/images/br.webp') }}" alt="frame">
                        </div>
                        <div class="px-3 watermark d-flex flex-column align-items-center justify-content-center" style="height:100%;">
                          <div class="image-editable mb-2 mx-auto animate__animated animate__fadeInDown animate__slower" style="height:100px;width:100px;overflow:hidden;border-radius:100%;">
                            <img src="{{ asset('themes/gold-black-silver/images/logo.webp') }}" style="width: 100%;height: 100%;object-fit: cover;" alt="logo.webp" />
                          </div>
                          <div style="width:100%;">
                            <div class="text-center">
                              <div class="editable mb-3 animate__animated animate__fadeInDown animate__slower" style="font-size:14px;">Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do'a restu kepada kedua mempelai.</div>
                              <div class="editable font-italic animate__animated animate__fadeInDown animate__slow" style="font-size:14px;">Hormat Kami Yang Mengundang</div>
                              <div class="editable h4 color-accent animate__animated animate__fadeInDown animate__slow font-latin" style="font-size:30px;background:-webkit-linear-gradient(top, rgb(152, 105, 35), rgb(243, 241, 185), rgb(152, 105, 35)) text;">{{ $title }}</div>
                            </div>
                          </div>
                          <div class="watermark-placeholder text-center pb-5"></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div id="dMenu" class="dlalajo_menu">
                <ul class="dlalajo_menu_list">
                  <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.144 20.782v-3.067c0-.777.632-1.408 1.414-1.413h2.875c.786 0 1.423.633 1.423 1.413v3.058c0 .674.548 1.222 1.227 1.227h1.96a3.46 3.46 0 0 0 2.444-1 3.41 3.41 0 0 0 1.013-2.422V9.866c0-.735-.328-1.431-.895-1.902l-6.662-5.29a3.115 3.115 0 0 0-3.958.071L3.467 7.963A2.474 2.474 0 0 0 2.5 9.867v8.703C2.5 20.464 4.047 22 5.956 22h1.916c.327.002.641-.125.873-.354.232-.228.363-.54.363-.864h.036Z" fill="currentColor"></path>
                    </svg>
                    <span>Opening</span>
                  </li>
                  <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity=".4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83v10.33C3 20.26 4.77 22 7.81 22h8.381C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.08 6.65v.01a.78.78 0 0 0 0 1.56h2.989c.431 0 .781-.35.781-.791a.781.781 0 0 0-.781-.779H8.08Zm7.84 6.09H8.08a.78.78 0 0 1 0-1.561h7.84a.781.781 0 0 1 0 1.561Zm0 4.57H8.08c-.3.04-.59-.11-.75-.36a.795.795 0 0 1 .75-1.21h7.84c.399.04.7.38.7.79 0 .399-.301.74-.7.78Z" fill="currentColor" />
                    </svg>
                    <span>Quotes</span>
                  </li>
                  <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity=".4" d="M11.776 21.837a36.258 36.258 0 0 1-6.328-4.957 12.668 12.668 0 0 1-3.03-4.805C1.278 8.535 2.603 4.49 6.3 3.288A6.282 6.282 0 0 1 12.007 4.3a6.291 6.291 0 0 1 5.706-1.012c3.697 1.201 5.03 5.247 3.893 8.787a12.67 12.67 0 0 1-3.013 4.805 36.58 36.58 0 0 1-6.328 4.957l-.25.163-.24-.163Z" fill="currentColor" />
                      <path d="m12.01 22-.234-.163a36.316 36.316 0 0 1-6.337-4.957 12.667 12.667 0 0 1-3.048-4.805c-1.13-3.54.195-7.586 3.892-8.787a6.296 6.296 0 0 1 5.728 1.023V22ZM18.23 10a.719.719 0 0 1-.517-.278.818.818 0 0 1-.167-.592c.022-.702-.378-1.341-.994-1.59-.391-.107-.628-.53-.53-.948.093-.41.477-.666.864-.573a.384.384 0 0 1 .138.052c1.236.476 2.036 1.755 1.973 3.155a.808.808 0 0 1-.23.56.708.708 0 0 1-.537.213Z" fill="currentColor" />
                    </svg>
                    <span>Couple</span>
                  </li>
                  <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M22 14.702v1.384c0 .23-.01.461-.03.69-.28 3.16-2.475 5.224-5.641 5.224H7.67c-1.603 0-2.956-.52-3.928-1.464a4.593 4.593 0 0 1-.951-1.232c.33-.402.7-.842 1.062-1.283a98.56 98.56 0 0 0 1.573-1.925c.55-.682 2.004-2.476 4.018-1.634.41.17.771.41 1.102.621.812.542 1.152.702 1.723.391.632-.34 1.043-1.012 1.473-1.714.23-.372.461-.732.712-1.063 1.092-1.423 2.775-1.804 4.178-.962.702.42 1.303.952 1.864 1.493.12.12.24.231.35.341.15.15.652.652 1.153 1.133Z" fill="currentColor" />
                      <path opacity=".4" d="M16.339 2H7.67C4.275 2 2 4.376 2 7.914v8.172c0 1.232.28 2.326.792 3.218.33-.402.701-.842 1.062-1.284a95.981 95.981 0 0 0 1.573-1.924c.551-.682 2.004-2.476 4.018-1.634.41.17.771.41 1.102.621.812.542 1.152.702 1.723.39.632-.34 1.043-1.011 1.473-1.714.23-.37.461-.73.712-1.062 1.092-1.423 2.775-1.804 4.178-.962.702.42 1.303.952 1.864 1.493.12.12.24.231.35.342.151.149.652.65 1.153 1.133V7.914C22 4.376 19.726 2 16.339 2Z" fill="currentColor" />
                      <path d="M11.454 8.797a2.604 2.604 0 0 1-2.58 2.581c-1.408 0-2.58-1.173-2.58-2.581s1.172-2.582 2.58-2.582c1.407 0 2.58 1.174 2.58 2.582Z" fill="currentColor" />
                    </svg>
                    <span>Gallery</span>
                  </li>
                  <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3 16.87V9.257h18v7.674C21 20.07 19.024 22 15.863 22H8.127C4.996 22 3 20.03 3 16.87Zm4.96-2.46a.822.822 0 0 1-.85-.799c0-.46.355-.84.81-.861.444 0 .81.351.82.8a.822.822 0 0 1-.78.86Zm4.06 0a.822.822 0 0 1-.85-.799c0-.46.356-.84.81-.861.445 0 .81.351.82.8a.822.822 0 0 1-.78.86Zm4.03 3.68a.847.847 0 0 1-.82-.85.831.831 0 0 1 .81-.849h.01c.465 0 .84.38.84.849 0 .47-.375.85-.84.85Zm-4.88-.85c.02.46.395.821.85.8a.821.821 0 0 0 .78-.859.817.817 0 0 0-.82-.801.855.855 0 0 0-.81.86Zm-4.07 0c.02.46.395.821.85.8a.821.821 0 0 0 .78-.859.817.817 0 0 0-.82-.801.855.855 0 0 0-.81.86Zm8.14-3.639c0-.46.356-.83.81-.84.445 0 .8.359.82.8a.82.82 0 0 1-.79.849.814.814 0 0 1-.84-.799v-.01Z" fill="currentColor" />
                      <path opacity=".4" d="M3.003 9.257c.013-.587.063-1.752.156-2.127.474-2.11 2.084-3.45 4.386-3.64h8.911c2.282.2 3.912 1.55 4.386 3.64.092.365.142 1.539.155 2.127H3.003Z" fill="currentColor" />
                      <path d="M8.305 6.59c.435 0 .76-.329.76-.77V2.771A.748.748 0 0 0 8.306 2c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77ZM15.695 6.59c.425 0 .76-.329.76-.77V2.771a.754.754 0 0 0-.76-.771c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77Z" fill="currentColor" />
                    </svg>
                    <span>Akad</span>
                  </li>
                  <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3 16.87V9.257h18v7.674C21 20.07 19.024 22 15.863 22H8.127C4.996 22 3 20.03 3 16.87Zm4.96-2.46a.822.822 0 0 1-.85-.799c0-.46.355-.84.81-.861.444 0 .81.351.82.8a.822.822 0 0 1-.78.86Zm4.06 0a.822.822 0 0 1-.85-.799c0-.46.356-.84.81-.861.445 0 .81.351.82.8a.822.822 0 0 1-.78.86Zm4.03 3.68a.847.847 0 0 1-.82-.85.831.831 0 0 1 .81-.849h.01c.465 0 .84.38.84.849 0 .47-.375.85-.84.85Zm-4.88-.85c.02.46.395.821.85.8a.821.821 0 0 0 .78-.859.817.817 0 0 0-.82-.801.855.855 0 0 0-.81.86Zm-4.07 0c.02.46.395.821.85.8a.821.821 0 0 0 .78-.859.817.817 0 0 0-.82-.801.855.855 0 0 0-.81.86Zm8.14-3.639c0-.46.356-.83.81-.84.445 0 .8.359.82.8a.82.82 0 0 1-.79.849.814.814 0 0 1-.84-.799v-.01Z" fill="currentColor" />
                      <path opacity=".4" d="M3.003 9.257c.013-.587.063-1.752.156-2.127.474-2.11 2.084-3.45 4.386-3.64h8.911c2.282.2 3.912 1.55 4.386 3.64.092.365.142 1.539.155 2.127H3.003Z" fill="currentColor" />
                      <path d="M8.305 6.59c.435 0 .76-.329.76-.77V2.771A.748.748 0 0 0 8.306 2c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77ZM15.695 6.59c.425 0 .76-.329.76-.77V2.771a.754.754 0 0 0-.76-.771c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77Z" fill="currentColor" />
                    </svg>
                    <span>Acara</span>
                  </li>
                  {{-- <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity=".4" d="M12.02 2C6.21 2 2 6.74 2 12c0 1.68.49 3.41 1.35 4.99.16.26.18.59.07.9l-.67 2.24c-.15.54.31.94.82.78l2.02-.6c.55-.18.98.05 1.491.36 1.46.86 3.279 1.3 4.919 1.3 4.96 0 10-3.83 10-10C22 6.65 17.7 2 12.02 2Z" fill="currentColor" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M11.98 13.29c-.71-.01-1.28-.58-1.28-1.29 0-.7.58-1.28 1.28-1.27.71 0 1.28.57 1.28 1.28 0 .7-.57 1.28-1.28 1.28Zm-4.61 0c-.7 0-1.28-.58-1.28-1.28 0-.71.57-1.28 1.28-1.28.71 0 1.28.57 1.28 1.28 0 .7-.57 1.27-1.28 1.28Zm7.94-1.28c0 .7.57 1.28 1.28 1.28.71 0 1.28-.58 1.28-1.28 0-.71-.57-1.28-1.28-1.28-.71 0-1.28.57-1.28 1.28Z" fill="currentColor" />
                    </svg>
                    <span>RSVP</span>
                  </li> --}}
                  <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.532 2.937a6.89 6.89 0 0 1 7.034.058C17.71 4.327 19.012 6.705 19 9.26c-.05 2.54-1.447 4.929-3.193 6.775a18.727 18.727 0 0 1-3.358 2.82 1.173 1.173 0 0 1-.408.144.82.82 0 0 1-.39-.119 18.515 18.515 0 0 1-4.839-4.547A9.28 9.28 0 0 1 5 9.134c-.001-2.562 1.347-4.928 3.532-6.197Zm1.262 7.258a2.378 2.378 0 0 0 2.198 1.497 2.339 2.339 0 0 0 1.683-.701c.446-.454.696-1.07.694-1.713a2.423 2.423 0 0 0-1.462-2.243 2.346 2.346 0 0 0-2.594.52 2.455 2.455 0 0 0-.519 2.64Z" fill="currentColor" />
                      <ellipse opacity=".4" cx="12" cy="21" rx="5" ry="1" fill="currentColor" />
                    </svg>
                    <span>Maps</span>
                  </li>
                  {{-- <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity=".4" d="M21.33 7.443a1.383 1.383 0 0 0-1.372-.064l-1.482.748a1.618 1.618 0 0 0-.888 1.456v5.833c0 .622.34 1.179.888 1.457l1.48.747c.202.104.417.153.632.153.258 0 .514-.073.743-.216.419-.263.669-.718.669-1.218V8.662c0-.5-.25-.956-.67-1.22Z" fill="currentColor" />
                      <path d="M11.905 20H6.113C3.691 20 2 18.33 2 15.94V9.06C2 6.67 3.691 5 6.113 5h5.792c2.422 0 4.113 1.669 4.113 4.06v6.88c0 2.39-1.69 4.06-4.113 4.06Z" fill="currentColor" />
                    </svg>
                    <span>Filter</span>
                  </li> --}}
                  <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity=".4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83v10.33C3 20.26 4.77 22 7.81 22h8.381C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.08 6.65v.01a.78.78 0 0 0 0 1.56h2.989c.431 0 .781-.35.781-.791a.781.781 0 0 0-.781-.779H8.08Zm7.84 6.09H8.08a.78.78 0 0 1 0-1.561h7.84a.781.781 0 0 1 0 1.561Zm0 4.57H8.08c-.3.04-.59-.11-.75-.36a.795.795 0 0 1 .75-1.21h7.84c.399.04.7.38.7.79 0 .399-.301.74-.7.78Z" fill="currentColor" />
                    </svg>
                    <span>Gift</span>
                  </li>
                  {{-- <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity=".4" d="M12.02 2C6.21 2 2 6.74 2 12c0 1.68.49 3.41 1.35 4.99.16.26.18.59.07.9l-.67 2.24c-.15.54.31.94.82.78l2.02-.6c.55-.18.98.05 1.491.36 1.46.86 3.279 1.3 4.919 1.3 4.96 0 10-3.83 10-10C22 6.65 17.7 2 12.02 2Z" fill="currentColor" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M11.98 13.29c-.71-.01-1.28-.58-1.28-1.29 0-.7.58-1.28 1.28-1.27.71 0 1.28.57 1.28 1.28 0 .7-.57 1.28-1.28 1.28Zm-4.61 0c-.7 0-1.28-.58-1.28-1.28 0-.71.57-1.28 1.28-1.28.71 0 1.28.57 1.28 1.28 0 .7-.57 1.27-1.28 1.28Zm7.94-1.28c0 .7.57 1.28 1.28 1.28.71 0 1.28-.58 1.28-1.28 0-.71-.57-1.28-1.28-1.28-.71 0-1.28.57-1.28 1.28Z" fill="currentColor" />
                    </svg>
                    <span>Contact</span>
                  </li> --}}
                  <li class="dlalajo_menu_item">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity=".4" d="M16.34 2H7.67C4.28 2 2 4.38 2 7.92v8.17C2 19.62 4.28 22 7.67 22h8.67c3.39 0 5.66-2.38 5.66-5.91V7.92C22 4.38 19.73 2 16.34 2Z" fill="currentColor" />
                      <path d="M10.813 15.248a.872.872 0 0 1-.619-.256l-2.373-2.373a.874.874 0 1 1 1.237-1.238l1.755 1.755 4.128-4.128a.874.874 0 1 1 1.237 1.238l-4.746 4.746a.872.872 0 0 1-.619.256Z" fill="currentColor" />
                    </svg>
                    <span>Thanks</span>
                  </li>
                </ul>
              </div>
              <!-- end invitation -->
              <div class="floating-action d-flex align-items-end flex-column">
                {{-- <button id="btnQrModal" onclick="showModal(qrModal)" class="btn btn-float">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                    <rect x="40" y="40" width="80" height="80" rx="16"></rect>
                    <rect x="40" y="136" width="80" height="80" rx="16"></rect>
                    <rect x="136" y="40" width="80" height="80" rx="16"></rect>
                    <path d="M144,184a8,8,0,0,0,8-8V144a8,8,0,0,0-16,0v32A8,8,0,0,0,144,184Z"></path>
                    <path d="M208,152H184v-8a8,8,0,0,0-16,0v56H144a8,8,0,0,0,0,16h32a8,8,0,0,0,8-8V168h24a8,8,0,0,0,0-16Z"></path>
                    <path d="M208,184a8,8,0,0,0-8,8v16a8,8,0,0,0,16,0V192A8,8,0,0,0,208,184Z"></path>
                  </svg>
                </button> --}}
                <button id="btnMusic" onclick="playMusic()" class="btn btn-float">
                  <svg class="play" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M184,152V104a8,8,0,0,1,16,0v48a8,8,0,0,1-16,0Zm40-72a8,8,0,0,0-8,8v80a8,8,0,0,0,16,0V88A8,8,0,0,0,224,80ZM53.92,34.62A8,8,0,1,0,42.08,45.38L73.55,80H32A16,16,0,0,0,16,96v64a16,16,0,0,0,16,16H77.25l69.84,54.31A8,8,0,0,0,160,224V175.09l42.08,46.29a8,8,0,1,0,11.84-10.76Zm92.16,77.59A8,8,0,0,0,160,106.83V32a8,8,0,0,0-12.91-6.31l-39.85,31a8,8,0,0,0-1,11.7Z"></path>
                  </svg>
                  <svg class="pause" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M160,32V224a8,8,0,0,1-12.91,6.31L77.25,176H32a16,16,0,0,1-16-16V96A16,16,0,0,1,32,80H77.25l69.84-54.31A8,8,0,0,1,160,32Zm32,64a8,8,0,0,0-8,8v48a8,8,0,0,0,16,0V104A8,8,0,0,0,192,96Zm32-16a8,8,0,0,0-8,8v80a8,8,0,0,0,16,0V88A8,8,0,0,0,224,80Z"></path>
                  </svg>
                </button>
                <button id="btnAutoplay" class="btn btn-float ">
                  <svg class="play" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M128,24A104,104,0,1,0,232,128,104.13,104.13,0,0,0,128,24Zm36.44,110.66-48,32A8.05,8.05,0,0,1,112,168a8,8,0,0,1-8-8V96a8,8,0,0,1,12.44-6.66l48,32a8,8,0,0,1,0,13.32Z"></path>
                  </svg>
                  <svg class="pause" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M128,24A104,104,0,1,0,232,128,104.13,104.13,0,0,0,128,24ZM112,160a8,8,0,0,1-16,0V96a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V96a8,8,0,0,1,16,0Z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- lightbox -->
      <div id="lightboxWrapper" class="lightbox-wrapper">
        <div class="lightbox-list"></div>
        <a href="#" id="lightboxCloseBtn" class="btn-lightbox">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 0 1 1.414 0L10 8.586l4.293-4.293a1 1 0 1 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 0 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 0 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
        <div class="lightbox-navigation">
          <a href="#" id="lightboxPrevBtn" class="lightbox-arrow" data-index="0">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
            </svg>
          </a>
          <a href="#" id="lightboxNextBtn" class="lightbox-arrow" data-index="0">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
      <!-- end lightbox -->
      <!-- startQRModal -->
      <div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="qrModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" style="height:100%">
            <div style="width: 100%;aspect-ratio: 16/9; background-size:cover; background-position: center; background-image: url(/themes/images/no-image.jpg);"></div>
            <div class="text-center py-4 px-4">
              <div>
                <div class="mx-auto">
                  <?xml version="1.0" encoding="UTF-8"?>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="180" height="180" viewBox="0 0 180 180">
                    <rect x="0" y="0" width="180" height="180" fill="#ffffff" />
                    <g transform="scale(7.2)">
                      <g transform="translate(0,0)">
                        <path fill-rule="evenodd" d="M8 0L8 1L9 1L9 2L10 2L10 3L11 3L11 1L13 1L13 0L11 0L11 1L9 1L9 0ZM14 0L14 1L15 1L15 0ZM16 0L16 1L17 1L17 0ZM12 2L12 4L11 4L11 5L10 5L10 4L9 4L9 5L10 5L10 8L9 8L9 6L8 6L8 8L9 8L9 10L8 10L8 11L7 11L7 10L6 10L6 11L5 11L5 8L3 8L3 9L4 9L4 12L5 12L5 13L3 13L3 10L2 10L2 8L0 8L0 11L1 11L1 12L0 12L0 17L1 17L1 15L3 15L3 16L2 16L2 17L7 17L7 16L6 16L6 15L8 15L8 18L9 18L9 20L8 20L8 22L9 22L9 20L10 20L10 23L8 23L8 25L9 25L9 24L10 24L10 23L11 23L11 20L10 20L10 19L12 19L12 21L14 21L14 24L13 24L13 25L15 25L15 22L16 22L16 23L17 23L17 22L19 22L19 21L21 21L21 16L22 16L22 18L24 18L24 19L23 19L23 22L20 22L20 23L18 23L18 25L19 25L19 24L21 24L21 25L22 25L22 24L24 24L24 25L25 25L25 18L24 18L24 16L25 16L25 14L24 14L24 13L25 13L25 10L24 10L24 9L25 9L25 8L24 8L24 9L19 9L19 8L18 8L18 9L19 9L19 10L16 10L16 9L17 9L17 6L16 6L16 8L14 8L14 7L15 7L15 6L14 6L14 5L15 5L15 4L16 4L16 5L17 5L17 3L15 3L15 4L14 4L14 2ZM12 4L12 5L11 5L11 7L12 7L12 9L10 9L10 10L9 10L9 11L10 11L10 10L12 10L12 11L13 11L13 13L11 13L11 12L10 12L10 13L9 13L9 14L8 14L8 12L7 12L7 11L6 11L6 12L7 12L7 13L6 13L6 14L3 14L3 15L4 15L4 16L5 16L5 15L6 15L6 14L8 14L8 15L9 15L9 14L10 14L10 15L11 15L11 14L14 14L14 13L16 13L16 12L17 12L17 13L18 13L18 14L19 14L19 15L20 15L20 16L21 16L21 15L20 15L20 13L21 13L21 14L23 14L23 13L24 13L24 12L21 12L21 10L20 10L20 11L19 11L19 13L18 13L18 11L15 11L15 10L14 10L14 11L13 11L13 10L12 10L12 9L14 9L14 8L13 8L13 7L14 7L14 6L13 6L13 7L12 7L12 5L14 5L14 4ZM6 8L6 9L7 9L7 8ZM22 10L22 11L24 11L24 10ZM14 11L14 12L15 12L15 11ZM1 13L1 14L2 14L2 13ZM16 14L16 16L15 16L15 15L12 15L12 16L9 16L9 17L14 17L14 18L12 18L12 19L13 19L13 20L14 20L14 19L16 19L16 16L18 16L18 15L17 15L17 14ZM23 15L23 16L24 16L24 15ZM14 16L14 17L15 17L15 16ZM17 17L17 20L20 20L20 17ZM18 18L18 19L19 19L19 18ZM12 22L12 23L13 23L13 22ZM21 23L21 24L22 24L22 23ZM16 24L16 25L17 25L17 24ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM18 0L18 7L25 7L25 0ZM19 1L19 6L24 6L24 1ZM20 2L20 5L23 5L23 2ZM0 18L0 25L7 25L7 18ZM1 19L1 24L6 24L6 19ZM2 20L2 23L5 23L5 20Z" fill="#000000" />
                      </g>
                    </g>
                  </svg>
                  <div style="margin-top: 10px; text-align: center"></div>
                </div>
              </div>
              <hr style="margin-top: 1rem; margin-bottom: 1rem; border: 0; border-top: 2px dashed rgba(0,0,0,.1);">
              <div style="margin-bottom: 10px">
                <div style="color: #b2b2b2;">Nama</div>
                <div>{{ $guest->name }}</div>
              </div>
            </div>
            <button onclick="closeModal(qrModal)" type="button" class="btn btn-close">
              <svg xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <!-- endQRModal -->
      <!-- startRSVPModal -->
      <div class="modal fade" id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-4" style="height:100%">
            <div class="rsvp-form">
              <!---->
              <div class="mb-4">
                <div class="font-serif h4 text-center">RSVP</div>
              </div>
              <form action="" class="pt-2">
                @csrf
                @method('POST')
                <div>
                  <div class="form-group">
                    <input id="inputname" name="name" type="text" placeholder="Nama" required="required" class="form-control">
                    @error('name')
                    <div class="invalid-feedback d-block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <textarea id="inputcomment" name="comment" rows="3" placeholder="Komentar atau Ucapan" required="required" class="form-control"></textarea>
                    @error('comment')
                    <div class="invalid-feedback d-block">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary rounded-pill btn-block mt-4 mb-2">
                  <span>Kirim</span>
                </button>
              </form>
              <div class="comment border-top mt-4 py-4" id="wish-list">
                <div class="d-flex">
                    <div class="comment-item">
                        <div class="d-flex">
                            <img src="https://ui-avatars.com/api/?size=40&amp;background=random&amp;color=random&amp;name=Nama Tamuwewe" alt="Nama Tamuwewe" loading="lazy" class="avatar rounded-circle" style="height: 30px; width: 30px;">
                            <div class="ml-2 text-left">
                            <p class="mb-0 font-weight-bold">Nama Tamuwewe <span class="badge alert-info">Hadir</span>
                            </p>
                            <p class="mb-0">34</p>
                            <small>17 July 2024 at 16.34</small>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <button onclick="closeModal(rsvpModal)" type="button" class="btn btn-close">
              <svg xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <!-- endRSVPModal -->
    </main>
    <!-- illegal -->
    <div id="illegal" class="container-mobile" style="background: #ffffff; z-index: 9999; min-height: 100vh; display: flex; justify-content: center; align-items: center; display: none">
      <div class="modal-body modal-body d-flex flex-column align-items-center">
        <div class="mb-4 text-center">
          <svg width="90" height="90" fill="none">
            <path d="M36 28.024A18.05 18.05 0 0025.022 39M59.999 28.024A18.05 18.05 0 0170.975 39" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <ellipse cx="37.5" cy="43.5" rx="4.5" ry="7.5" fill="currentColor"></ellipse>
            <ellipse cx="58.5" cy="43.5" rx="4.5" ry="7.5" fill="currentColor"></ellipse>
            <path d="M24.673 75.42a9.003 9.003 0 008.879 5.563m-8.88-5.562A8.973 8.973 0 0124 72c0-7.97 9-18 9-18s9 10.03 9 18a9 9 0 01-8.448 8.983m-8.88-5.562C16.919 68.817 12 58.983 12 48c0-19.882 16.118-36 36-36s36 16.118 36 36-16.118 36-36 36a35.877 35.877 0 01-14.448-3.017" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M41.997 71.75A14.94 14.94 0 0148 70.5c2.399 0 4.658.56 6.661 1.556a3 3 0 003.999-4.066 12 12 0 00-10.662-6.49 11.955 11.955 0 00-7.974 3.032c1.11 2.37 1.917 4.876 1.972 7.217z" fill="currentColor"></path>
          </svg>
          <h2 class="mb-3">Jangan Bikin Aku Sedih</h2>
          <p>Kamu didapati mencoba menghapus watermark secara ilegal.</p>
        </div>
      </div>
    </div>
    <!-- end illegal -->
    <!-- not support modal -->
    <div class="modal fade" id="notSupport" tabindex="-1" role="dialog" aria-labelledby="notSupport" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: .8rem;">
          <div class="modal-body text-center justify-content-center align-items-center">
            <h2>Pemberitahuan</h2>
            <p>Browser yang kamu gunakan mungkin kurang kompatibel. Beberapa fungsi undangan ini mungkin tidak dapat berjalan dengan baik. Kami merekomendasikan Chrome. Klik tombol dibawah ini untuk mendownload.</p>
            <div class="d-flex justify-content-center">
              <a href="https://apps.apple.com/id/app/google-chrome/id535886823" class="btn p-1" target="_BLANK">
                <img src="/themes/images/btn_app_store.webp" alt="AppStore" height="40px">
              </a>
              <a href="https://play.google.com/store/apps/details?id=com.android.chrome&hl=in&gl=US" class="btn p-1" target="_BLANK">
                <img src="/themes/images/btn_play_store.webp" alt="PlayStore" height="40px">
              </a>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-outline-secondary btn-block rounded-pill" onclick="closeModal(notSupport)">Tetap Akses</button>
          </div>
        </div>
      </div>
    </div>
    <!-- not support modal -->
    <!-- start script -->
    {{-- <script src="{{ asset('themes/gold-black-silver/js/app.js') }}" type="text/javascript"></script> --}}
    <script src="{{ asset('themes/gold-black-silver/js/themesv2.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      var notSupport = document.getElementById('notSupport');

      function checkBrowser() {
        if (navigator.userAgent.indexOf("UCBrowser") != -1 || navigator.userAgent.indexOf("MiuiBrowser") != -1 || navigator.userAgent.indexOf("OppoBrowser") != -1) {
          showModal(notSupport);
          if (loader) {
            loader.style.display = "none";
          }
        }
      }
      checkBrowser()
    </script>
    <!-- end script -->
    <script src="{{ asset('themes/gold-black-silver/js/rocket-loader.min.js') }}" data-cf-settings="49"></script>
    {{-- @include('sweetalert::alert') --}}
    {{-- @livewireScripts --}}
  </body>
</html>
