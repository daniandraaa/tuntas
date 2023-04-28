<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Poppins&display=swap"
            rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/img/tuntas.png" class="favicon">
    <link rel="icon" href="../assets/img/tuntas.png" class="favicon">
    <title>Tuntas siswa</title>
</head>

<body style="background-color: #333353;">
    <nav class="navbar px-5" style="background-color: #262632; position:fixed; width:100%;">
        <div class="container-fluid">

            <img class="img-fluid" style="width:calc(6rem + ((1vw - 7.68px) * 0.6944));" src="../assets/img/tuntas.png"
                alt="" />
            <form class="d-flex" role="search">
                <a href="/berandaguru" class="text-decoration-none">
                    <h3
                        style="color: #CD7ED1; width: fit-content; font-size: calc(1.2rem + ((1vw - 7.68px) * 0.6944)); margin-right: 15px">
                        home</h3>
                </a>
                    <a href="/logout" class="text-decoration-none">
                        <h3 style="color: #00FFA3; width: fit-content; font-size: calc(1.2rem + ((1vw - 7.68px) * 0.6944))">logout</h3>
                    </a>
            </form>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="pembungkus px-2">
        <div class="container bg-white mt-2 px-5"
            style="border-radius: 50px; align-items: center; justify-content: space-between; display:flex; flex-direction: row">
            <div class="column">
                <h1 style="font-size: calc(1.5rem + ((1vw - 7.68px) * 0.6944)); font-weight: bold">SMK TELKOM MAKASSAR
                </h1>
                <h4 style="font-size: calc(0.5rem + ((1vw - 7.68px) * 0.6944)); font-weight: bold">Tahun ajaran
                    2022/2024</h4>
            </div>
            <img src="../assets/img/beranda.png" style="width: calc(8rem + ((1vw - 7.68px) * 0.6944));">
        </div>

        @foreach ($kelass->where('grade', '12') as $kelas)
        <a href="/detailsiswa" class="text-decoration-none">
            <div class="container px-5" id="belumtuntas" style="background-color: #008189; border-radius: 50px; margin-top: 15px; align-items: center; justify-content: center; text-align: center ">
                    <h1 style="color: white; height: calc(9rem + ((1vw - 7.68px) * 0.6944)); align-items: center; justify-content: center; display: flex">{{ $kelas->nama_kelas }}</h1>
            </div>
        </a>
        @endforeach
        <img src="../assets/img/beranda 2.png" class="img-fluid" style="position: absolute; width:100%;">

    </div>
</body>

</html>
