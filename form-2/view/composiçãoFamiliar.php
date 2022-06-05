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
<?php 
    include "sidebar.php"
    
?>

<body>
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
    <section class="dados" style="margin-top: 20px;">
        <div class="container">
            <div class="text-center text-white mb-3 py-3 rounded-3 mb-5" id="saude" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 15px 55px; background: #2E8B57; margin-top: 50px;">
            <h4 class="display-6 my-icon"><i class='bx bx-home' style="margin-right: 20px; font-size: 30x;" ></i>Adicione membros da Família</h4>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h6>Cadastre membros da família</h6>
                        </div>
                    <div class="card-body card-block">
                        <form method="post" action="#">
                            <div class="row form-group">
                                <div class="col col-md-6">
                                    <small>Nome do Familiar</small>
                                    <span class="text-danger">*</span>
                                    <input type="text" class="form-control" placeholder="Nome do Familiar">
                                </div>
                                <div class="col col-md-5">
                                    <small">Parentesco</small>
                                    <span class="text-danger">*</span>
                                    <select class="form-control" placeholder="">
                                        <option default selected="selected">Selecione</option>
                                        <option>Mãe</option>
                                        <option>Pai</option>
                                        <option>Avó</option>
                                        <option>Avô</option>
                                        <option>Tio</option>
                                        <option>Tia</option>
                                        <option>Padastro</option>
                                        <option>Madastra</option>
                                        <option>Irmã</option>
                                        <option>Irmão</option>
                                        <option>Outro</option>

                                        <option></option>
                                    </select>
                                </div>
                                <div class="row form-group py-2 ">
                                <div class="col col-md-6">
                                    <small>Profissão</small>
                                    <span class="text-danger">*</span>
                                    <input type="text" class="form-control" placeholder="Profissão">
                                </div>
                                <div class="col col-md-5">
                                    <small">Parentesco</small>
                                    <span class="text-danger">*</span>
                                    <select class="form-control" placeholder="">
                                        <option default selected="selected">Vinculo atual</option>
                                        <option>Contratado</option>
                                        <option>Efetivo</option>
                                        <option>Aposentado</option>
                                        <option>Autonomo</option>
                                        <option>Desempregado</option>
                                        <option>Domestico</option>
                                        <option>Estudande</option>
                                        <option>Outros</option>

                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group py-2">
                                <div class="col col-md-5">
                                        <small>Naturalidade - Estado</small>
                                        <span class="text-danger">*</span>
                                        <select class="form-control" id="estados" placeholder="">
                                            <option default selected>Selecione</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                            <option value="EX">Estrangeiro</option>
                                    </select>
                                </div>
                                <div class="col col-md-4">
                                    <small>Cidade</small>
                                    <span class="text-danger">*</span>
                                    <input type="text" class="form-control" placeholder="Cidade em que mora">
                                </div> 
                                <div class="col col-md-3">
                                    <small>CEP</small>
                                    <span class="text-danger">*</span>
                                    <input type="text" class="form-control" placeholder="CEP">
                                </div>                    
                            </div>
                            <div class="row form-group py-2">
                                <div class="col col-md-6">
                                    <small>Endereço</small>
                                    <span class="text-danger">*</span>
                                    <input class="form-control" type="number" placeholder="Endereço">
                                </div>
                                <div class="col col-md-6">
                                    <small>Bairro</small>
                                    <span class="text-danger">*</span>
                                    <input type="number" class="form-control" placeholder="Bairro">
                                </div>
                            </div>
                            <div class="row form-group py-2">
                                <div class="col col-md-6">
                                    <small>Telefone 1</small>
                                    <span class="text-danger">*</span>
                                    <input class="form-control" type="number" placeholder="Telefone 1">
                                </div>
                                <div class="col col-md-6">
                                    <small>Telefone 2</small>
                                    <span class="text-danger">*</span>
                                    <input type="number" class="form-control" placeholder="Telefone 2">
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col">
                                <button type="button" class="btn btn-success" style="width: 100px; height: 50px; border-radius: 50px;">Enviar</button>
                                </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</section>

</body>
<?php 
    include "footer.php"
    
?>
<script src="../assents/js/estados.js"></script>
</html>