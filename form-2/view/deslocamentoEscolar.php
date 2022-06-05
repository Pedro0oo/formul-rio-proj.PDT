<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href="../assents/index.css" rel="stylesheet" type="text/css">

    <title>Ficha Biográfica</title>
</head>
<style>
    body {
        overflow-x: hidden;
    }

    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;

    }

    input[type=number] {
        -moz-appearance: textfield;
        appearance: textfield;

    }

    small {
        font-size: 15px;
        font-weight: 400;
    }
</style>

<body>
    <section class="dados" style="margin-top: 20px;">
        <div class="container">
            <div class="text-center text-white mb-3 py-3 rounded-3 mb-5" id="saude"
                style="box-shadow: rgba(0, 0, 0, 0.1) 0px 15px 55px; background: #2E8B57; margin-top: 50px;">
                <h4 class="display-6 my-icon"><i class='bx bxs-bus-school' style="margin-right: 20px; font-size: 30x;" ></i>Vida Escolar</h4>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Sobre sua vida escolar</h6>
                            </div>
                            <div class="card-body card-block">
                                <form method="post" action="#">
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Cursou Educação Infantil?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Quanto tempo?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Estudou em escola Particular?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Quanto tempo?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Participou(a) de outras atividades?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Quais?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Repetiu algum ano?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Qual?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Dispoe de Local Adequado Para Estudo?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Onde?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Estuda quanto tempo em casa?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Apoximadamente (HH:MM) quanto tempo?</small>
                                            <span class="text-danger">*</span>
                                            <input type="time" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Dispensado da Pratica Atividade Física?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Por que?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Alguem Se Interessa por seu Estudo?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Quem?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Recebe apoio Especializado?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Qual?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Alguem o Ajuda a Estudar?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Quem?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Frequenta a Escola por que quer?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Motivo?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Frequenta o Curso pretendido?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Por que?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Gosta de Estudar nesta escola?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Motivo?</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Estudou nesta escola ano anterior?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-12">
                                            <small>Qual (Quais) são suas profissoes desejadas?</small>
                                            <span class="text-danger">*</span>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>

                                        <div class="row form-group py-2">
                                            <div class="col col-md-12">
                                                <small>De ideias ou Sugestoes para escola ou professores:</small>
                                                <span class="text-danger">*</span>
                                                <textarea class="form-control" placeholder="Deixe sua sugestão aqui"
                                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2"></label>
                                            </div>
                                            <div class="container-fluid py-3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h6>Sobre seu deslocamento até a escola:</h6>
                                                            </div>
                                                            <div class="card-body card-block">
                                                                <form method="post" action="#">
                                                                    <div class="row form-group py-2">
                                                                        <div class="col col-md-4">
                                                                            <small>Casa --> Escola</small>
                                                                            <span class="text-danger">*</span>
                                                                            <select class="form-control">
                                                                                <option default selected="Selecione">
                                                                                    Selecione</option>
                                                                                <option> A pé </option>
                                                                                <option> Carro </option>
                                                                                <option>Moto</option>
                                                                                <option>Trem</option>
                                                                                <option>Avião</option>
                                                                                <option>Navio</option>
                                                                                <option>Onibus</option>
                                                                                <option>Pau de arara</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col col-md-4">
                                                                            <small>Distancia</small>
                                                                            <span class="text-danger">*</span>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                        <div class="col col-md-4">
                                                                            <small>Tempo</small>
                                                                            <span class="text-danger">*</span>
                                                                            <input type="time" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group py-2">
                                                                        <div class="col col-md-4">
                                                                            <small>Escola --> Casa</small>
                                                                            <span class="text-danger">*</span>
                                                                            <select class="form-control">
                                                                                <option default selected="Selecione">
                                                                                    Selecione</option>
                                                                                <option> A pé </option>
                                                                                <option> Carro </option>
                                                                                <option>Moto</option>
                                                                                <option>Trem</option>
                                                                                <option>Avião</option>
                                                                                <option>Navio</option>
                                                                                <option>Onibus</option>
                                                                                <option>Pau de arara</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col col-md-4">
                                                                            <small>Distancia</small>
                                                                            <span class="text-danger">*</span>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                        <div class="col col-md-4">
                                                                            <small>Tempo</small>
                                                                            <span class="text-danger">*</span>
                                                                            <input type="time" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row py-3">
                                <div class="col">
                                <button type="button" class="btn btn-success" style="width: 100px; height: 50px; border-radius: 50px;">Enviar</button>
                                </div>
    </section>
</body>
<?php 
    include "sidebar.php"
    
?>
<?php 
    include "footer.php"
    
?>

</html>