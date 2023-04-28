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
    <title>Document</title>

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            font-family: 'Poppins', sans-serif;
        }

        .text-center {
            color: #fff;
            text-transform: uppercase;
            font-size: 23px;
            margin: -50px 0 80px 0;
            display: block;
            text-align: center;
        }

        .input-container {
            position: relative;
            margin-bottom: 25px;
        }

        .input-container label {
            position: absolute;
            top: 0px;
            left: 0px;
            font-size: 16px;
            color: #fff;
            pointer-event: none;
            transition: all 0.5s ease-in-out;
        }

        .input-container input {
            border: 0;
            border-bottom: 1px solid #555;
            background: transparent;
            width: 100%;
            padding: 8px 0 5px 0;
            font-size: 16px;
            color: #fff;
        }

        .input-container input:focus {
            border: none;
            outline: none;
            border-bottom: 1px solid #e74c3c;
        }



        .input-container input:focus~label,
        .input-container input:valid~label {
            top: -12px;
            font-size: 12px;
        }
        .wave-group {
  position: relative;
}

.wave-group .input {
  font-size: 16px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 100%;
  border: none;
  border-bottom: 1px solid #515151;
  background: transparent;
}

.wave-group .input:focus {
  outline: none;
}

.wave-group .label {
  color: #999;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  display: flex;
}

.wave-group .label-char {
  transition: 0.2s ease all;
  transition-delay: calc(var(--index) * .05s);
}

.wave-group .input:focus ~ label .label-char,
.wave-group .input:valid ~ label .label-char {
  transform: translateY(-20px);
  font-size: 14px;
  color: #5264AE;
}


.container {
  display: flex;
  flex-direction: column;
  gap: 7px;
  position: relative;
}

.container .label {
  font-size: 15px;
  padding-left: 10px;
  position: absolute;
  top: 13px;
  transition: 0.3s;
  pointer-events: none;
}

.input {
  width: 200px;
  height: 45px;
  border: none;
  outline: none;
  padding: 0px 7px;
  border-radius: 6px;
  color: #fff;
  font-size: 15px;
  background-color: transparent;
  box-shadow: 3px 3px 10px #33333e,
  -1px -1px 6px #262632;
}

.input:focus {
  border: 2px solid transparent;
  color: #fff;
  box-shadow: 3px 3px 10px rgba(0,0,0,1),
  -1px -1px 6px rgba(255, 255, 255, 0.4),
  inset 3px 3px 10px rgba(0,0,0,1),
  inset -1px -1px 6px rgba(255, 255, 255, 0.4);
}

.container .input:valid ~ .label,
.container .input:focus ~ .label {
  transition: 0.3s;
  padding-left: 2px;
  transform: translateY(-18px);
}

.container .input:valid,
.container .input:focus {
  box-shadow: 3px 3px 10px rgba(0,0,0,1),
  -1px -1px 6px rgba(255, 255, 255, 0.4),
  inset 3px 3px 10px rgba(0,0,0,1),
  inset -1px -1px 6px rgba(255, 255, 255, 0.4);
}

button {
  margin: 12px;
  height: 50px;
  width: 120px;
  border-radius: 10px;
  background: #008189;
  justify-content: center;
  align-items: center;
  box-shadow: -2px -2px 12px #008189, 5px 5px 15px #222, inset 5px 5px 10px #008189, inset -5px -5px 10px #005b62;
  border: none;
  font-size: 16px;
  color: rgb(161, 161, 161);
  transition: 500ms;
}

button:hover {
  box-shadow: -5px -5px 15px #444, 5px 5px 15px #222, inset 5px 5px 10px #222, inset -5px -5px 10px #444;
  color: #d6d6d6;
  transition: 500ms;
}


    </style>
</head>

<body style="background-color: #262632;">

    <center>
        <img style="width: 340px" src="../assets/img/logo.png" alt="" />
        <h2 class="text-white ">Login Form</h2>
        <br>
        <div class="container px-5">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
            </div>
            @endif
            <form action="/login" method="POST">
                @csrf
                <div class="wave-group">
                    <input style="color:white;" required="" type="text" name="username" class="input">
                    <span class="bar"></span>
                    <label class="label">
                      <span class="label-char" style="--index: 0">U</span>
                      <span class="label-char" style="--index: 1">s</span>
                      <span class="label-char" style="--index: 2">e</span>
                      <span class="label-char" style="--index: 3">r</span>
                      <span class="label-char" style="--index: 4">n</span>
                      <span class="label-char" style="--index: 5">a</span>
                      <span class="label-char" style="--index: 6">m</span>
                      <span class="label-char" style="--index: 7">e</span>
                    </label>
                  </div>
                  <br>
                  <br>
                <div class="wave-group">
                    <input style="color:white" required="" type="text" name="password" class="input">
                    <span class="bar"></span>
                    <label class="label">
                      <span class="label-char" style="--index: 0">P</span>
                      <span class="label-char" style="--index: 1">a</span>
                      <span class="label-char" style="--index: 2">s</span>
                      <span class="label-char" style="--index: 3">s</span>
                      <span class="label-char" style="--index: 4">w</span>
                      <span class="label-char" style="--index: 5">o</span>
                      <span class="label-char" style="--index: 6">r</span>
                      <span class="label-char" style="--index: 7">d</span>
                    </label>
                  </div>
                  <br>
                {{-- <input type="submit" id="submit" name="submit" style="border-radius:15px;" value="Login"> --}}
                <button type="submit" name="submit" style="border: none; border-radius:50px; color: white; width:calc(6rem + ((1vw - 7.68px) * 0.6944)); height:calc(2.5rem + ((1vw - 7.68px) * 0.6944)); ">Login</button>
            </form>

        </div>

    </center>

</body>

</html>
