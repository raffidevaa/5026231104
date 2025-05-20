<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
    />
    <style>
      .full-bg {
        background: url("https://source.unsplash.com/random/1920x1080")
          no-repeat center center;
        background-size: cover;
        height: 100vh; /* Full height of the viewport */
        width: 100%;
      }
      @import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap");
      .navbar > .btn:hover {
        background-color: #407f95 !important;
      }
      .profile-title {
        font-family: "Inter", sans-serif;
        font-weight: 700;
        font-size: 20px;
      }
      .profile-description {
        font-family: "Inter", sans-serif;
        font-weight: 400;
        font-size: 16px;
      }
      .icon {
        transition: transform 0.2s;
      }
      .icon:hover {
        -ms-transform: scale(1.2);
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
      }
      .link-container {
        font-family: "Inter", sans-serif;
        font-size: 16px;
        .btn:hover {
          background-color: white !important;
          .textdsc {
            color: #0b2590 !important;
          }
          .threedots {
            color: #0b2590 !important;
          }
        }
      }
      .btn {
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <div
      class="main full-bg p-1 h-100 w-100"
      style="
        background: linear-gradient(
          to bottom,
          #4ba8c0,
          #4193b9,
          #3880b2,
          #2e6cab,
          #1c489d,
          #0b2590
        );
        background-attachment: fixed;
      "
    >
      <div
        class="navbar navbar-light bg-transparant mx-auto my-3 p-2"
        style="width: 600px"
      >
        <button
          class="btn rounded-circle"
          style="background-color: #387084; width: 40px; height: 40px"
        >
          <div>
            <i class="bi bi-bell text-white"></i>
          </div>
        </button>
        <button
          class="btn rounded-circle"
          style="background-color: #387084; width: 40px; height: 40px"
        >
          <div><i class="bi bi-three-dots text-white"></i></div>
        </button>
      </div>

      <div class="mx-auto" style="width: 600px">
        <div class="profile-picture text-center">
          <img
            class="profile-picture mb-3"
            style="width: 96px; height: 96px"
            src="./img-linktree/linktree-profile-picture.webp"
            alt=""
          />
        </div>
        <div class="profile-title text-white text-center">@harisenincom</div>
        <div
          class="profile-description text-white text-center"
          style="margin-left: 100px; margin-right: 100px"
        >
          Explore karir kamu bersama harisenin dan bergabung bersama 5.117
          alumni lainnya
        </div>
      </div>
      <!-- icon sosmed -->
      <div
        class="icon-socmed d-flex flex-row justify-content-center mx-auto"
        style="width: 600px; padding: 24px"
      >
        <a
          href="https://www.instagram.com/harisenin.official"
          class="icon mx-2"
        >
          <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path
              d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z"
            ></path>
            <path
              d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z"
            ></path>
            <path
              d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z"
            ></path>
          </svg>
        </a>
        <a href="https://x.com/harisenincom" class="icon mx-2">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path
              d="m2.538 3 7.425 9.928L2 21h1.5l7.033-7.067L16 21h5.232l-7.662-9.995 6.955-7.514h-1.5L13 10 7.77 3H2.538Zm1.994 1h2.645l12.087 16h-2.525L4.532 4Z"
            ></path>
          </svg>
        </a>
        <a
          href="https://www.linkedin.com/company/harisenin-com"
          class="icon mx-2"
        >
          <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path
              d="M4.425,1.671A2.738,2.738,0,0,0,1.5,4.4,2.71,2.71,0,0,0,4.369,7.128H4.4a2.734,2.734,0,1,0,.028-5.457ZM4.4,6.128H4.369a1.736,1.736,0,1,1,.056-3.457A1.737,1.737,0,1,1,4.4,6.128Z"
            ></path>
            <path
              d="M6.541,8.431H2.253a.5.5,0,0,0-.5.5v12.9a.5.5,0,0,0,.5.5H6.541a.5.5,0,0,0,.5-.5V8.931A.5.5,0,0,0,6.541,8.431Zm-.5,12.9H2.753V9.431H6.041Z"
            ></path>
            <path
              d="M17.064,8.128A4.691,4.691,0,0,0,13.7,9.362V8.931a.5.5,0,0,0-.5-.5H8.914a.5.5,0,0,0-.5.523c.053,1.183,0,12.756,0,12.873a.5.5,0,0,0,.5.5H13.2a.5.5,0,0,0,.5-.5v-7.2a2.749,2.749,0,0,1,.1-.86,1.869,1.869,0,0,1,1.737-1.254c.413,0,1.671,0,1.671,2.417v6.9a.5.5,0,0,0,.5.5H22a.5.5,0,0,0,.5-.5v-7.4C22.5,10.485,20.467,8.128,17.064,8.128Zm4.436,13.2H18.213v-6.4c0-2.973-1.673-3.417-2.671-3.417a2.83,2.83,0,0,0-2.664,1.878,3.253,3.253,0,0,0-.177,1.236v6.7H9.416c.009-2.058.04-9.654.009-11.9H12.7v1.328a.5.5,0,0,0,.92.272,3.769,3.769,0,0,1,3.443-1.9c2.819,0,4.436,1.934,4.436,5.305Z"
            ></path>
          </svg>
        </a>
        <a href="https://www.tiktok.com/@harisenincom" class="icon mx-2">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path
              d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z"
            ></path>
          </svg>
        </a>
        <a href="https://www.facebook.com/harisenincom#" class="icon mx-2">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path
              d="M23,12A11,11,0,1,0,10.279,22.865h0a11.08,11.08,0,0,0,3.436,0h0A10.952,10.952,0,0,0,23,12ZM10.859,21.935v-6.9a.5.5,0,0,0-.5-.5H8.193V12.5h2.166a.5.5,0,0,0,.5-.5V9.686c0-2.278,1.264-3.585,3.459-3.585a15.392,15.392,0,0,1,1.858.137V7.89h-.824l-.019,0a2,2,0,0,0-2.181,1.735,1.8,1.8,0,0,0-.011.4V12a.5.5,0,0,0,.5.5H15.97l-.312,2.035H13.641a.5.5,0,0,0-.5.5v6.9A10.124,10.124,0,0,1,10.859,21.935Zm3.282-.166V15.535h1.946a.5.5,0,0,0,.5-.425l.465-3.035a.5.5,0,0,0-.494-.575H14.141V10.016a1.267,1.267,0,0,1,.308-.821,1.218,1.218,0,0,1,.9-.3h1.324a.5.5,0,0,0,.5-.5V5.806a.5.5,0,0,0-.42-.494A16.661,16.661,0,0,0,14.325,5.1c-2.754,0-4.466,1.757-4.466,4.585V11.5H7.693a.5.5,0,0,0-.5.5v3.035a.5.5,0,0,0,.5.5H9.859v6.234a10,10,0,1,1,4.282,0Z"
            ></path>
          </svg>
        </a>
        <a
          href="https://www.youtube.com/channel/UCjzbRwULkasMnjTinnzngwg"
          class="icon mx-2"
        >
          <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path
              d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z"
            ></path>
          </svg>
        </a>
        <a
          href="https://api.whatsapp.com/send?phone=6281312117711"
          class="icon mx-2"
        >
          <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path
              d="M18.8,14.634a1.361,1.361,0,0,0-.645-.477l-.165-.081c-.018-.009-1.845-.917-2.208-1.049a.983.983,0,0,0-1.3.349c-.177.266-.721.914-.918,1.2a.409.409,0,0,1-.125-.049c-.058-.028-.137-.063-.233-.105a7.636,7.636,0,0,1-2.2-1.387,12.737,12.737,0,0,1-1.683-2.008.766.766,0,0,1,.086-.093c.1-.1.223-.248.342-.392l.159-.191a2.247,2.247,0,0,0,.338-.538l.044-.09a1.064,1.064,0,0,0-.026-1c-.057-.116-.35-.835-.616-1.481L9.31,6.408a1.123,1.123,0,0,0-1.146-.849c-.192-.01-.412-.012-.63-.012a1.724,1.724,0,0,0-1.269.62A3.989,3.989,0,0,0,5.087,9.074a6.653,6.653,0,0,0,1.435,3.631,14.178,14.178,0,0,0,5.546,4.857,18.659,18.659,0,0,0,1.846.682,4.476,4.476,0,0,0,1.373.208,5.741,5.741,0,0,0,.84-.065,3.729,3.729,0,0,0,2.526-1.826,2.85,2.85,0,0,0,.142-1.927Zm-1.084,1.59A2.852,2.852,0,0,1,15.978,17.4a3.837,3.837,0,0,1-1.762-.107,17.989,17.989,0,0,1-1.752-.647,13.168,13.168,0,0,1-5.122-4.512l-.071-.1A5.548,5.548,0,0,1,6.087,9.074a3.06,3.06,0,0,1,.974-2.295.654.654,0,0,1,.473-.232c.2,0,.4,0,.579.011h0l.133-.01a.685.685,0,0,1,.139.244l.341.827c.279.68.592,1.438.647,1.548.04.079.033.091.026.1l-.048.1a1.323,1.323,0,0,1-.2.327L8.98,9.9c-.1.117-.19.234-.275.318a.957.957,0,0,0-.217,1.249,9.938,9.938,0,0,0,1.854,2.307,8.645,8.645,0,0,0,2.464,1.558c.076.034.138.06.184.083a.969.969,0,0,0,1.282-.2,9.857,9.857,0,0,0,.993-1.306,1,1,0,0,1,.17.051c.229.084,1.6.75,2.1,1l.177.087c.067.032.144.069.2.1A3.126,3.126,0,0,1,17.711,16.224Z"
            ></path>
            <path
              d="M12,1A11,11,0,0,0,2.792,18.014l-.974,3.711a.5.5,0,0,0,.61.61l3.779-.991A11,11,0,1,0,12,1Zm0,21a9.961,9.961,0,0,1-5.437-1.614.493.493,0,0,0-.4-.064L3,21.151l.814-3.1a.5.5,0,0,0-.071-.41A10,10,0,1,1,12,22Z"
            ></path>
          </svg>
        </a>
        <a href="https://t.me/harisenincom" class="icon mx-2">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="white">
            <path
              d="M11 0a11 11 0 1011 11A11.012 11.012 0 0011 0zm0 21a10 10 0 1110-10 10.011 10.011 0 01-10 10zm4.464-15.366a2.405 2.405 0 00-.821.155c-.114.047-2.402.985-3.101 1.29L4.489 9.984c-.827.323-1.284.801-1.342 1.416a1.414 1.414 0 00.677 1.298l.097.06.108.038c.044.015 1.091.373 2.01.649a3.527 3.527 0 001.01.156 2.31 2.31 0 001.203-.296l.07-.047-.001.044a1.617 1.617 0 00.602 1.219c.67.566 2.133 1.523 2.836 1.982.15.099.257.168.296.195a3.755 3.755 0 001.939.752 1.71 1.71 0 00.39-.044 1.859 1.859 0 001.34-1.665l.755-4.736.198-1.295c.193-1.254.304-1.98.327-2.31a1.626 1.626 0 00-.388-1.289 1.534 1.534 0 00-1.152-.477zm.027 5.214l-.759 4.765s-.06.698-.576.82a.707.707 0 01-.162.017 2.892 2.892 0 01-1.356-.564c-.121-.091-2.276-1.457-3.065-2.124a.575.575 0 01.03-.972 115.996 115.996 0 003.187-3.034c.236-.236.472-.676.196-.676a2.37 2.37 0 00-.985.494l-4.279 2.883a1.353 1.353 0 01-.673.144 2.514 2.514 0 01-.723-.114c-.91-.273-1.972-.637-1.972-.637s-.729-.456.515-.941l7.071-2.913c.698-.304 3.065-1.275 3.065-1.275a1.44 1.44 0 01.46-.087c.286 0 .592.128.542.694-.03.425-.273 1.912-.516 3.52z"
            ></path>
          </svg>
        </a>
      </div>
      <!-- link container -->
      <div class="link-container mx-auto" style="width: 600px">
        <!-- WEBINAR SECTION -->
        <div
          class="link-container-title text-center text-white font-weight-bold mt-4"
        >
          WEBINAR GRATIS 🤩
        </div>
        <div>
          <a
            href="https://promo.harisenin.com/bookil/micrososft-excel"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Bootcamp Kilat: Full Stack Web Developer
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://promo.harisenin.com/bookil/micrososft-excel"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Bootcamp Kilat: Microsoft Excel
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://promo.harisenin.com/bookil/human-resources"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Bootcamp Kilat: Human Resources
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://promo.harisenin.com/bookil/virtual-assistant"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Bootcamp Kilat: Virtual Assistant
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <!-- CONTENT PILIHAN MINSE SECTION -->
        <div
          class="link-container-title text-center text-white font-weight-bold mt-4"
        >
          CONTENT PILIHAN MINSE! 🚀
        </div>
        <div
          class="card relative mt-3 overflow-hidden border-0"
          style="width: 600px; border-radius: 25px"
        >
          <a href="https://www.youtube.com/watch?v=Tz0uBCqYViI" target="_blank">
            <img
              class="card-img"
              src="./img-linktree/img-linktree-hariseninco.webp"
              alt="Harisenin Video"
              style="
                width: 100%;
                height: auto;
                object-fit: cover;
                display: block;
              "
            />
            <div
              class="card-img-overlay text-white text-sm font-medium"
              style="
                margin-top: 150px;
                background: linear-gradient(to bottom, #fffefe00, #000000);
              "
            >
              <div style="margin-top: 100px">
                Ini Cara Gue Lebih Produktif Kerja Lewat 70% Of Rules | Work
                Management
              </div>
            </div>
          </a>
        </div>
        <!-- PREPARE YOUR CAREER SECTION -->
        <div
          class="link-container-title text-center text-white font-weight-bold my-3"
        >
          PREPARE YOUR CAREER WITH HARISENIN
        </div>
        <div>
          <a
            href="https://www.youtube.com/watch?v=BTY5xL3cPRA"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              >
                <img
                  src="./img-linktree/img-pill-1.webp"
                  alt=""
                  style="
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                  "
                />
              </div>
              <div class="textdsc align-item-center">
                Belajar Digital Marketing untuk Pemula!
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://www.youtube.com/watch?v=a4uAFDhbZmA"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              >
                <img
                  src="./img-linktree/img-pill-2.webp"
                  alt=""
                  style="
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                  "
                />
              </div>
              <div class="textdsc align-item-center">
                Audit dan Accounting, Apa Bedanya? Pahami Etikanya!
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://www.youtube.com/watch?v=CRdJ2XQ8Lwg"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              >
                <img
                  src="./img-linktree/img-pill-3.webp"
                  alt=""
                  style="
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                  "
                />
              </div>
              <div class="textdsc align-item-center">
                Belajar dari Nol Cara Jadi HR Profesional Meski Tanpa
                Pengalaman!
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://www.youtube.com/watch?v=ErOFOXyyGH4&t=3s"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              >
                <img
                  src="./img-linktree/img-pill-4.webp"
                  alt=""
                  style="
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                  "
                />
              </div>
              <div class="textdsc align-item-center">
                Step By Step Memulai Karir Sebagai Web Developer!
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://www.youtube.com/watch?v=5UFhwdpbhGk"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              >
                <img
                  src="./img-linktree/img-pill-5.webp"
                  alt=""
                  style="
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                  "
                />
              </div>
              <div class="textdsc align-item-center">
                Cara Membuat CV Yang Menarik dan ATS Friendly (Update 2024).
                GRATIS TEMPLATE!
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://www.youtube.com/watch?v=ugI-8I8uMe0&t=1s"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              >
                <img
                  src="./img-linktree/img-pill-6.webp"
                  alt=""
                  style="
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                  "
                />
              </div>
              <div class="textdsc align-item-center">
                Tips Melamar Kerja untuk Kamu yang Freshgraduate! (GRATIS
                TEMPLATE CV & COVER LETTER!)
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <!-- JOIN WITH US SECTION -->
        <div
          class="link-container-title text-center text-white font-weight-bold my-3"
        >
          JOIN WITH US!!✨
        </div>
        <div>
          <a
            href="https://bio.link/risecommunity"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Gabung Komunitas Harisenin
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://www.harisenin.com/school/bootcamp"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Intip Harisenin Bootcamp Yuk
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://www.harisenin.com/learning"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Video Course Harisenin
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://docs.google.com/forms/d/e/1FAIpQLSdHBPfCnS3wOW0gwqX1T9I4eP7y64CPivxAnUTry7LhLWPkVQ/viewform?pli=1"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Kolaborasi Bareng Harisenin Yuk!
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://glints.com/id/en/companies/harisenincom/0c0d0296-5b77-4605-93e8-2369e491ac8f"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Kerja di Harisenin yuk!
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="https://tipssukses.harisenin.com/"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-3"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">Blog Harisenincom</div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <!-- Join on hariseninco on linktree -->
        <div class="mx-auto my-4" style="width: 265px">
          <div>
            <a
              href="#"
              target="_blank"
              class="btn btn-lg btn-block border-white text-dark rounded-pill px-1 py-2 my-3"
              style="background-color: #c4cbe5"
            >
              <div
                class="d-flex flex-row align-items-center justify-content-center"
              >
                <div>
                  <svg style="height: 24px; width: 24px">
                    <path
                      d="M13.5108 5.85343L17.5158 1.73642L19.8404 4.11701L15.6393 8.12199H21.5488V11.4268H15.6113L19.8404 15.5345L17.5158 17.8684L11.7744 12.099L6.03299 17.8684L3.70842 15.5438L7.93745 11.4361H2V8.12199H7.90944L3.70842 4.11701L6.03299 1.73642L10.038 5.85343V0H13.5108V5.85343ZM10.038 16.16H13.5108V24.0019H10.038V16.16Z"
                      fill="#000000"
                      class="cz-color-0"
                      style="height: 15.36px; width: 16px"
                    ></path>
                  </svg>
                </div>
                <div class="align-item-center font-weight-bolder">
                  Join hariseninco on Linktree
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
