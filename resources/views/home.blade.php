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
      {{-- style="
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
      " --}}
    >
      <div
        class="navbar navbar-light bg-transparant mx-auto my-3 p-2"
        style="width: 600px"
      >
        <button
          class="btn btn-light rounded-circle shadow"
          style="width: 40px; height: 40px"
        >
          <div>
            <i class="bi bi-bell"></i>
          </div>
        </button>
        <button
          class="btn btn-light rounded-circle shadow"
          style="width: 40px; height: 40px"
        >
          <div><i class="bi bi-three-dots"></i></div>
        </button>
      </div>

      <div class="mx-auto" style="width: 600px">
        <div class="profile-title text-center">5026231104</div>
        <div
          class="profile-description text-center"
          style="margin-left: 100px; margin-right: 100px"
        >
          RAFFI DEVA ANARGYA
        </div>
      </div>
      <!-- link container -->
      <div class="link-container mx-auto" style="width: 600px">
        <div>
          <a
            href="/pertama"
            target="_blank"
            class="btn btn-light btn-lg btn-block rounded-pill px-2 py-2 my-3 shadow"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Pertama
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="/template1"
            target="_blank"
            class="btn btn-light btn-lg btn-block  rounded-pill px-2 py-2 my-3 shadow"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Bootstrap Template
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="/layout"
            target="_blank"
            class="btn btn-light btn-lg btn-block  rounded-pill px-2 py-2 my-3 shadow"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Layout
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="/linktree"
            target="_blank"
            class="btn btn-light btn-lg btn-block  rounded-pill px-2 py-2 my-3 shadow"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                Linktree
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="/js1"
            target="_blank"
            class="btn btn-light btn-lg btn-block  rounded-pill px-2 py-2 my-3 shadow"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                JS 1
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="/js2"
            target="_blank"
            class="btn btn-light btn-lg btn-block  rounded-pill px-2 py-2 my-3 shadow"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                JS 2
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a
            href="/ets"
            target="_blank"
            class="btn btn-light btn-lg btn-block  rounded-pill px-2 py-2 my-3 shadow"
          >
            <div
              class="d-flex flex-row align-items-center justify-content-between"
            >
              <div
                class="rounded-circle overflow-hidden"
                style="width: 46px; height: 46px; flex-shrink: 0"
              ></div>
              <div class="textdsc align-item-center">
                ETS
              </div>
              <div>
                <i class="threedots bi bi-three-dots-vertical"></i>
              </div>
            </div>
          </a>
        </div>
    </div>
  </body>
</html>
