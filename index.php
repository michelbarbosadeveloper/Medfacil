<?php include('header.php'); ?>

<div class="container-fluid vh-100 d-flex flex-column">
    <header class="container-fluid pt-5 bg-light d-flex justify-content-between align-items-center">
        <h1 class="title text-primary mb-3 ">Canal Saúde Integrada</h1>
        <div>
            <img src="../imagens/logo_hori_med.svg" alt="Logo da Medfacil" class="logo_medfacil img-fluid">
        </div>
        <img src="../imagens/Emergency.gif" alt="Uma ambulância" class="Medicine_Car img-fluid">
    </header>

    </header>

    <nav class="nav_medfacil navbar navbar-expand-lg navbar-light  mt-3">
        <ul class="container-fluid medfacil_link_all">
            <li class="nav-item"><a href="https://saude.fortaleza.ce.gov.br/" class="medfacil_link nav-link">Início</a>
            </li>
            <li class="nav-item"><a href="https://saude.fortaleza.ce.gov.br/postos-de-saude"
                    class="medfacil_link nav-link">Posto de Saúde e Regionais</a></li>
            <li class="nav-item"><a href="https://saude.fortaleza.ce.gov.br/hospitais"
                    class="medfacil_link nav-link">Hospitais</a></li>
            <li class="nav-item"><a href="https://saude.fortaleza.ce.gov.br/policlinicas"
                    class="medfacil_link nav-link">Policlínica</a></li>
            <li class="nav-item"><a href="https://saude.fortaleza.ce.gov.br/upa-s"
                    class="medfacil_link nav-link">UPAs</a></li>
            <li class="nav-item"><a href="https://saude.fortaleza.ce.gov.br/samu"
                    class="medfacil_link nav-link">Samu</a></li>
        </ul>
    </nav>

    <body class="container-fluid pt-5">
        <div class=" container-fluid d-flex align-items-center justify-content-center flex-grow-1"
            style="background-image: url(../imagens/background_med.jpg); background-size: cover; min-height: 100%;">

            

            <div class="content-wrapper text-center p-5"
                style="background-color: white; border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px;">

                <!--Formulário Cadastro de Consulta-->

                <h2 class="title text-primary mb-3">Cadastro de Consulta</h2>
                <p class="title text-muted mb-4"> Confirme sua consulta aqui!</p>


                <form id="form_consulta" method="post" action="processa_agendamento.php">
                    <div class="form-group mb-3 mt-3 row">

                        <!--Nome do paciente-->
                        <div class="row align-items-center g-2">
                            <div class="col-md-3 col-sm-12">
                                <label for="nome" class="form-label text-secondary">Nome:</label>
                            </div>
                            <div class="col-md-9 col-sm-12">
                                <input type="text" id="nome" class="form-control" name="nome" required>
                            </div>
                        </div>


                        <!--CPF do cliente-->
                        <div class="row align-items-center mb-3 g-2">
                            <div class="col-auto">
                                <label for="cpf" class="form-label text-secondary mb-0">CPF:</label>
                            </div>
                            <div class="col">
                                <input type="text" id="cpf" class="form-control" name="cpf" placeholder="000.000.000-00"
                                    pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF no formato 000.000.000-00"
                                    required>
                            </div>
                        </div>



                        <!--Data da Consulta-->
                        <div class="row align-items-center g-2">
                            <div class="col-md-4 col-sm-12">
                                <label for="data" class="form-label text-secondary">Data:</label>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <input type="date" id="data" class="form-control color:#2990a0;" name="data" required>
                            </div>
                        </div>


                        <!--Nome do Médico-->
                        <div class="row align-items-center mb-3 g-2">
                            <div class="col-md-4 col-sm-12">
                                <label for="tipo" class="form-label text-secondary">Doutor(a):</label>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <select id="Doutor(a)" class="form-control text-center" name="Doutor(a)" required>
                                    <option value="">-Selecione-</option>
                                    <option value="dr_silva">Dr. Silva</option>
                                    <option value="dra_ferreira">Dra. Ferreira</option>
                                    <option value="dr_almeida">Dr. Almeida</option>
                                    <option value="dra_oliveira">Dra. Oliveira</option>
                                    <option value="dr_pereira">Dr. Pereira</option>
                                    <option value="dra_rodrigues">Dra. Rodrigues</option>
                                    <option value="dr_costa">Dr. Costa</option>
                                    <option value="dra_souza">Dra. Souza</option>
                                    <option value="dr_santos">Dr. Santos</option>
                                    <option value="dra_lima">Dra. Lima</option>
                                    <option value="dr_moreira">Dr. Moreira</option>
                                    <option value="dra_campos">Dra. Campos</option>
                                    <option value="dr_martins">Dr. Martins</option>
                                    <option value="dra_carvalho">Dra. Carvalho</option>
                                    <option value="dr_alves">Dr. Alves</option>
                                    <option value="dra_gomes">Dra. Gomes</option>
                                    <option value="dr_monteiro">Dr. Monteiro</option>
                                </select>
                            </div>
                        </div>

                        <!--Nome da Especialidade-->
                        <div class="row align-items-center mb-3 g-2">
                            <div class="col-md-4 col-sm-12">
                                <label for="tipo" class="form-label text-secondary">Ramo:</label>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <select id="Ramo" class="form-control text-center" name="Ramo" required>
                                    <option value="">-Selecione-</option>
                                    <option value="Clínica Médica">Clínica Médica</option>
                                    <option value="Cirurgia Geral">Cirurgia Geral</option>
                                    <option value="Cardiologia">Cardiologia</option>
                                    <option value="Neurologia">Neurologia</option>
                                    <option value="Pediatria">Pediatria</option>
                                    <option value="Ortopedia">Ortopedia</option>
                                    <option value="Dermatologia">Dermatologia</option>
                                    <option value="Oftalmologista">Oftalmologista</option>
                                    <option value="Otorrinolaringologia">Otorrinolaringologia</option>
                                    <option value="Urologia">Urologia</option>
                                    <option value="Pneumologia">Pneumologia</option>
                                    <option value="Gastroenterologia">Gastroenterologia</option>
                                    <option value="Endocrinologia">Endocrinologia</option>
                                    <option value="Reumatologia">Reumatologia</option>
                                    <option value="Oncologia">Oncologia</option>
                                    <option value="Psiquiatria">Psiquiatria</option>
                                </select>
                            </div>
                        </div>

                        <!--Tipo de Consulta-->

                        <div class="row align-items-center mb-3 g-2">
                            <div class="col-md-4 col-sm-12">
                                <label for="tipo" class="form-label text-secondary">Consulta:</label>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <select id="tipo" class="form-control text-center" name="tipo">
                                    <option value="">-Selecione-</option>
                                    <option value="nova">Nova</option>
                                    <option value="retorno">Retorno</option>
                                    <option value="internação">Internação</option>
                                    <option value="rotina">Rotina</option>
                                </select>
                            </div>
                        </div>


                    </div>
                    <!--Botão Agendar Consulta-->

                    <input type="submit" class="btn_agendar_consulta" value="Agendar Consulta">

                </form>
            </div>
        </div>
       
    </body>
    <footer class="footer mt-5 text-center py-3">
            <p class="text-muted_2">Desenvolvido por <a class="meu_link_insta"
                    href="https://github.com/michelbarbosadeveloper/">Michel Barbosa</a></p>
        </footer>

</div>