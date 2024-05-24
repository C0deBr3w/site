<?php $texto = ""; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="assets/img/codebrew_20240520_193254_0000 (1).png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeBrew</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .bg-image {
            width: 100%;
            max-height: 100vh;
            object-fit: cover;
        }

        .full-height {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .text-content {
            position: relative;
            z-index: 1;
            background: rgba(0, 0, 0, 1.0);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        .bg-dark {
            background-color: #111 !important;
        }

        @media (max-width: 1000px) {
            .bg-image {
                max-height: 30vh;
            }
        }
    </style>
</head>

<body>
    <main>
        <div class="container-fluid full-height bg-dark">
            <div class="row">
                <!-- Texto na esquerda -->
                <div class="col-md-6 d-flex align-items-center justify-content-center bg-dark text-content">
                    <div class="text-light">

                        <h1>Seja <span style="color: #2a1cc9;">Bem-Vindo</span></h1>
                        <p>Nosso site está em desenvolvimento! Mas em breve poderemos construir diversos projetos juntos.<br>
                        <p class="text-center">2024-<script>
                                document.write(new Date().getFullYear());
                            </script> <span style="color: #2a1cc9;">CodeBrew</span>. Todos os Direitos Reservados.
                        </p>

                    </div>
                </div>
                <!-- Imagem na direita -->
                <div class="col-md-6 p-0 d-flex align-items-center justify-content-center">
                    <img src="assets/img/codebrew_20240520_193339_0000 (1).png" alt="Background Image" class="bg-image">
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
