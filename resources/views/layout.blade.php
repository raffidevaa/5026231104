<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylesheet.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="main">
      <div class="sidebar">
        <div class="arrow-expand-icon">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-chevron-double-left"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"
            />
            <path
              fill-rule="evenodd"
              d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"
            />
          </svg>
        </div>
        <div class="user-panel">
          <div class="pull-left image">
            <img src="user-sidebar.png" />
          </div>
          <div class="pull-left info">
            <p>User</p>
            <p>user@mail.com</p>
          </div>
        </div>
        <div class="list-all-sidebar">
          <ul class="list-sidebar bg-defoult">
            <li>
              <ul class="sub-menu collapse" id="dashboard">
                <li>
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-calendar-check"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"
                      />
                      <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"
                      />
                    </svg>
                    Helperlog</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-search"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
                      />
                    </svg>
                    Helperfind</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-chat-left-text"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                      />
                      <path
                        d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"
                      />
                    </svg>
                    Helperassist</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div>
          <a href="#" class="logout-button"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-box-arrow-in-left"
              viewBox="0 0 16 12"
            >
              <path
                fill-rule="evenodd"
                d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z"
              />
              <path
                fill-rule="evenodd"
                d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z"
              />
            </svg>
            Log Out</a
          >
        </div>
      </div>

      <div class="main-content">
        <h2>Helperlog Dashboard</h2>

        <div class="container">
          <div class="row mbr-justify-content-left">
            <div class="col-lg-6 mbr-col-md-10">
              <div class="wrap">
                <!-- Kolom 1: Gambar -->
                <div class="ico-wrap">
                  <img src="user-sidebar.png" class="img-small" />
                </div>
                <!-- Kolom 2: Profil User -->
                <div class="text-wrap">
                  <h2
                    class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"
                  >
                    Intan Permata
                  </h2>
                  <p
                    class="mbr-fonts-style font-italic text1 mbr-text display-6"
                  >
                    Baby Sitter
                  </p>
                  <p class="mbr-fonts-style text1 mbr-text display-6">
                    Masa Kontrak: 12 bulan
                  </p>
                </div>
                <!-- Kolom 3: Rating -->
                <div class="rating-wrap">
                  <div class="unrated">★★★★★</div>
                  <h6>Beri Penilaian untuk Intan</h6>
                </div>
              </div>
              <div class="wrap">
                <!-- Kolom 1: Gambar -->
                <div class="ico-wrap">
                  <img src="user2.png" class="img-small" />
                </div>
                <!-- Kolom 2: Profil User -->
                <div class="text-wrap">
                  <h2
                    class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"
                  >
                    Budi Dorami
                  </h2>
                  <p
                    class="mbr-fonts-style font-italic text1 mbr-text display-6"
                  >
                    Satpam
                  </p>
                  <p class="mbr-fonts-style text1 mbr-text display-6">
                    Masa Kontrak: 6 bulan
                  </p>
                </div>
                <div class="rating-num">4.3</div>
                <!-- Kolom 3: Rating -->
                <div class="rating-wrap">
                  <div class="rating2">★★★★<span class="unrated">★</span></div>
                  <h6>Sudah Diberi Penilaian</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
