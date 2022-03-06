<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Formulário de Contato</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .campoObrigatorio {
            color: red;
            font-size: 12px;
        }

        .erroInput {
            border: 1px solid red;
        }

        .campoPreenchido {
            border: 1px solid green;
        }
    </style>
</head>

<body>

    <div class="container">
        <header class="row text-center">
            <div class="d-none">
                <ul id="atalhos">
                    <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
                    <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-3 col-md-2 col-lg-2">
                <img src="logo_triangulo.png" alt="Logotipo da empresa com dois triângulos colorido sobrepostos">
            </div>

            <div class="col-12 col-sm-9 col-md-10 col-lg-10">
                <h1>Empresa XPTO</h1>
            </div>
        </header>

        <section>
            <div class="row">
                <div class="d-none">

                    <h2 id="menu">Menu</h2>
                </div>
                <div class="d-block">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row tituloFormulario">
                <div class="col-md-12 text-center">
                    <h3>Formulário de Contato</h3>
                </div>
            </div>


            <form name="formContato" id="formContato" action="#" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Nome *</label>
                            <input type="text" name="nome" class="form-control form-control-sm" id="nome"
                                placeholder="Digite seu nome">
                            <div class="campoObrigatorio"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input type="email" name="email" class="form-control form-control-sm" id="email"
                                placeholder="Digite seu email">
                            <div class="campoObrigatorio"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="mensagem">Mensagem *</label>
                            <textarea name="mensagem" class="form-control form-control-sm" id="mensagem" rows="5"
                                placeholder="Deixe aqui sua mensagem"></textarea>
                            <div class="campoObrigatorio"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" onclick="validar()" class="btn btn-primary my-1">Enviar</button>
                    </div>
                </div>

            </form>
        </section>

        <footer>
            <div class="row text-center">
                <div class="col-12">Copyright © 2022</div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <noscript>Atualize seu navegador</noscript>


    <script>
        $(document).ready(function () {

            var erro = 0;
            $("#formContato").on("submit", function () {

                if ($("#formContato #nome").val() == "") {
                    $("#formContato #nome").next().html("O campo Nome é obrigatório!");
                    $("#formContato #nome").addClass("erroInput");

                    erro++;
                }

                if ($("#formContato #email").val() == "") {
                    $("#formContato #email").next().html("O campo E-mail é obrigatório!");
                    $("#formContato #email").addClass("erroInput");

                    erro++;
                }

                if ($("#formContato #mensagem").val() == "") {
                    $("#formContato #mensagem").next().html("O campo Mensagem é obrigatório!");
                    $("#formContato #mensagem").removeClass("campoPreenchido").addClass("erroInput");

                    erro++;
                }

                if (erro > 0) {
                    return false;
                }
            });

            $("#formContato .form-control").on("keyup", function () {
                if ($(this).val() != "") {
                    $(this).next().html("");
                    $(this).removeClass("erroInput").addClass("campoPreenchido");
                }
            });

        })
    </script>

</body>

</html>
