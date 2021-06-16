<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dogeller</title>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{url('css/videochat.css')}}" />
    <!-- <link rel="stylesheet" href="{{url('css/bootstrap.min.cs')}}s"> -->
    <!-- <link rel="stylesheet" href="{{url('css/style.css')}}"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
  </head>
  <body>
    <div class="container">
      <header class="header">
        <div class="logo-container">

          <h1 class="logo-text">
            <span class="logo-highlight">VideoChat</span>
          </h1>
        </div>
      </header>
      <div class="content-container">
        <div class="active-users-panel" id="active-user-container">
          <h3 class="panel-title">Active Users:</h3>
        </div>
        <div class="video-chat-container contact-top padding-tb aside-bg padding-b">
          <h2 class="talk-info" id="talking-with-info">
            Select active user on the left menu.
          </h2>
          <h2 class="talk-info" style="float: right;">
            <a href="{{route('members')}}">End VideoCall</a>
          </h2>
          <div class="video-container">
            <video autoplay class="remote-video" id="remote-video"></video>
            <video autoplay muted class="local-video" id="local-video"></video>
          </div>
        </div>
      </div>
    </div>
    <script src="{{url('js/videochat.js')}}"></script>
  </body>
</html>
