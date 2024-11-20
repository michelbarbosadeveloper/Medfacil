<?php include('header.php'); 
session_start();

// Carrega o arquivo XML existente
$xmlFile = 'consultas.xml';
$doc = new DOMDocument();
$doc->load($xmlFile);

// Obtém o elemento raiz 'consultas'
$root = $doc->getElementsByTagName('consultas')->item(0);

if ($root) {
    // Itera sobre os elementos 'consulta' de forma inversa
    for ($i = $root->childNodes->length - 1; $i >= 0; $i--) {
        $consulta = $root->childNodes->item($i);

        // Obtém os valores dos elementos filhos
        $nome = $consulta->getElementsByTagName('nome')->item(0)->nodeValue;
        $data = $consulta->getElementsByTagName('data')->item(0)->nodeValue;
  

        // Interrompe o loop após a primeira consulta
        break;
    }
} else {
    echo "<p>Não foram encontradas consultas.</p>";
}

?>

<div class="container-fluid vh-100 d-flex flex-column">
    <header class="container-fluid pt-5 bg-light d-flex justify-content-between align-items-center">
        <h1 class="title text-primary mb-3 ">Canal Saúde Integrada</h1>
        <div>
            <img src="../imagens/logo_hori_med.svg" alt="Logo da Medfacil" class="logo_medfacil img-fluid">
        </div>
        <img src="../imagens/Emergency.gif" alt="Uma ambulância" class="Medicine_Car img-fluid">
    </header>

    </header>

    <nav class="nav_medfacil navbar navbar-expand-lg navbar-light bg-color:#64A9A4 mt-3">
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

<body>

<!--Exibe as informações da última consulta-->
<div class="mensagem-confirmacao">
  <img class="doctor_duo" src="../imagens/medicine_doctor.svg" alt="Logo doutores">

  <p class="title text-primary mb-3">Sua consulta foi agendada com sucesso!</p>
  <p class="title text-muted mb-4">Data da consulta: <?php echo $data; ?></p>

  <form action="index.php" method="post">
  <input type="submit" class="btn_agendar_consulta" value="Voltar para a página inicial">
</form>

</div>



<footer class="footer mt-5">
        <p class="text-muted_2">Desenvolvido por <a class="meu_link_insta" href="https://github.com/michelbarbosadeveloper">Michel Barbosa</a></p>
    </footer>

</body>

<link rel="stylesheet" href="confirmacao.css">
