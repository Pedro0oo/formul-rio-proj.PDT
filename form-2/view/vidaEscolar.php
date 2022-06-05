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
        body{
            overflow-x: hidden;
        }
        input[type=number]::-webkit-inner-spin-button { 
    -webkit-appearance: none;
    
    }
    input[type=number] { 
    -moz-appearance: textfield;
    appearance: textfield;

    }

    small{
        font-size: 15px;
        font-weight: 400;
    }
    </style>
<body>
    <section class="dados" style="margin-top: 20px;">
        <div class="container">
            <div class="text-center text-white mb-3 py-3 rounded-3 mb-5" id="saude"
                style="box-shadow: rgba(0, 0, 0, 0.1) 0px 15px 55px; background: #2E8B57; margin-top: 50px;">
                <h4 class="display-6 my-icon"><i class='bx bxs-school' style="margin-right: 20px; font-size: 30x;"></i>Estado Escolar</h4>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Selecione uma diciplina e responda</h6>
                                <select onclick="selected(this.value)" class="form-control" id="SelectMaterias">
                                    <option selected>Selecione</option>
                                    <option>Espanhol</option>
                                    <option>Portugues</option>
                                    <option>Matemática</option>
                                    <option>Quimica</option>
                                    <option>Física</option>
                                    <option>Sociologia</option>
                                    <option>Filosofia</option>
                                    <option>Geografia</option>
                                    <option>História</option>
                                    <option>Biologia</option>
                                </select>
                            </div>
                            <div class="card-body card-block" style="display: none">
                                <form method="post" action="#">
                                    <div class="row form-group py-2">
                                        <div class="col col-md-6">
                                            <small>Média Final Anterior</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col col-md-6">
                                            <small>Nota da Recuperação Final</small>
                                            <span class="text-danger">*</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group py-2">
                                        <div class="col col-md-4">
                                            <small>Recebeu apoio pedagógico aula exta?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-4">
                                            <small>É uma matéria favorita?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
                                        </div>
                                        <div class="col col-md-4">
                                            <small>Possui mais dificuldade?</small>
                                            <span class="text-danger">*</span>
                                            <select class="form-control">
                                                <option default selected="Selecione">Selecione</option>
                                                <option> Sim </option>
                                                <option> Não </option>
                                            </select>
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
<script>

    function selected(value){
        var display = document.getElementsByClassName('card-body card-block');

        if(value != "Selecione") {

            display[0].style.display = 'block' ;
        }

        else {

            display[0].style.display = 'none';

        }
    }
    
</script>
</html>