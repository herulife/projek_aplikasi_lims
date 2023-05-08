<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT.ATMOS LABORATORIUM INDONESIA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        body {
            background: #1c6461;
            background: -webkit-linear-gradient(to right, #78e4ff, #41d8ec);
            background: linear-gradient(to right, #3cb2c2, #56df94);
            font-family: Arial, sans-serif;
        }

        /* Footer styling */
        footer {
            background-color: #333333;
            color: white;
            text-align: center;
            padding: 2%;
            /* position: absolute; */
            bottom: 0%;
            width: 100%;

        }


        /* New styles for container */
        .container-sm {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 120px);
        }

        /* New styles for the title */
        .title {
            margin-bottom: 20px;
            color: #333333;
            font-size: 30px;
            font-weight: bold;
            text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }

        /* New styles for the login button */
        .btn {
            font-size: 18px;
            padding: 5px 18px;
            width: 150px;
            background-color: #ec4856;
            border: none;
            transition: background-color 0.3s ease-in-out;
            text-shadow: 0px 1px 1px rgba(14, 13, 13, 0.014);
        }

        .btn:hover {
            background-color: #b60009;
        }

        /* New styles for the logo */
        .logo {
            max-width: 130px;
        }
    </style>
</head>

<body>
    <div class="container">
        <p class="text-center mt-10">Selamat Datang di Aplikasi LIMS</p>
    </div>
    <div class="container-sm">
        <img src="asset/logo-atmos.png" alt="" class="logo">
        <br>
        <h1 class="text-center">PT.ATMOS LABORATORIUM INDONESIA</h1>
        <div class="d-grid gap-2 col-10 col-md-6 mx-auto">
            <a href="http://127.0.0.1/atmos/public/admin/login" class="text-decoration-none">
                <button type="button" class="btn btn-danger d-block mx-auto mt-3">Login</button>
            </a>
        </div>
    </div>
    <!-- Footer -->

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    <p>&copy; 2023 PT.ATMOS LABORATORIUM INDONESIA</p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
