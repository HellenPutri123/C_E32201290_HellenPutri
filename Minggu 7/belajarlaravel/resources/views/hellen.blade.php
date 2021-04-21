<!DOCTYPE html>
<html>
  <head>
    <title> Gambar </title>
    <style>
      html, body {
        background-color: #454545;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
      }
      .full-height {
        height: 100vh;
      }
      .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
        padding: 0 10px;
      }
      .position-ref {
        position: relative;
      }
      .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
      }
      .content {
        text-align: center;
      }
      img {
        max-width: 100%;
        height: auto;
      }

      div.polaroid {
        width: 320px;
        background-color: #C0C0C0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-bottom: 25px;
        border-radius: 10px;
      }

      div.container {
        text-align: center;
        padding: 10px 20px;
      }

      .m-b-md {
        margin-bottom: 30px;
      }
      .title {
        font-size: 30px;
        font-weight: bold;
        text-transform: uppercase;
        border-bottom: 2px solid;
        color: #C0C0C0;
      }
    </style>
  </head>

  <body>
    <div class="flex-center position-ref full-height">
      <div class="content">
        <div class="flex-center">
          <div class="polaroid">
            <img src="/img/Hellen.jpg" alt="FotoHellen" style="width:320px">
            <div class="container">
              <p>Hellen Putri Andini</p>
            </div>
          </div>
        </div>
        <div class="title m-b-md">
          Life has no remote, get up and change it yourself
        </div>
      </div>
    </div>
  </body>
</html>

