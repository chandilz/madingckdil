<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
        .footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

    .running-text {
        overflow: hidden;
        white-space: nowrap;
        animation: marquee 20s linear infinite;
    }

    @keyframes marquee {
        0%   { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
        </style>

    <title>Mading</title>

    
</head>
<body>
    <!-- Navbar section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mading 0.1a</a>
          <a class="btn btn-primary" href="#" role="button">LOGIN</a>
          </div>
        </div>
      </nav>

      <!-- main section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Video Section -->
                <div class="mb-4">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <!-- List Agenda Section -->
                <div class="mb-4">
                    <h2>Agenda</h2>
                    <ul class="list-group">
                        <li class="list-group-item text-center">Agenda 1</li>
                        <li class="list-group-item text-center">Agenda 2</li>
                        <li class="list-group-item text-center">Agenda 3</li>
                        <li class="list-group-item text-center">Agenda 4</li>
                        <h4> NOTE! BUAT AGENDA dan VIDE SPACE BETWEEN KANAN DAN KIRI</h4>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- container section -->
    <div class="container">
        <h1>ISI DARI CONTENT BLANK! buat footer stay di bawah</h1>
    </div>

    <!-- footer section -->
    <div class="footer">
        <div class="container">
            <div class="running-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo saepe ea voluptas animi ratione ipsa quos explicabo nam nemo unde sit quidem ducimus iusto consectetur, est, molestiae eum eius aliquid!
            </div>
        </div>
    </div>

    <!-- Sholat section -->
    <div class="row text-center justify-content-between">
        <div class="col bg-primary">
            <div class="waktu-sholat">
                <h3>Fajr</h3>
                <p>04:30 AM</p>
            </div>
        </div>
        <div class="col bg-danger">
            <div class="waktu-sholat">
                <h3>Dhuhr</h3>
                <p>12:15 PM</p>
            </div>
        </div>
        <div class="col bg-primary">
            <div class="waktu-sholat">
                <h3>Asr</h3>
                <p>03:45 PM</p>
            </div>
        </div>
        <div class="col bg-danger">
            <div class="waktu-sholat">
                <h3>Maghrib</h3>
                <p>06:30 PM</p>
            </div>
        </div>
        <div class="col bg-primary">
            <div class="waktu-sholat">
                <h3>Isha</h3>
                <p>08:15 PM</p>
            </div>
        </div>
    </div>

</body>
</html>