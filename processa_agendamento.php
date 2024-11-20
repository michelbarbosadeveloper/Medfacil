<?php
session_start(); // Inicia a sessão

// Carrega o arquivo XML existente (cria um novo se não existir)
$xmlFile = 'consultas.xml';
$doc = new DOMDocument();
$doc->load($xmlFile);

// Obtém ou cria o elemento raiz 'consultas'
$root = $doc->getElementsByTagName('consultas')->item(0);
if (!$root) {
    $root = $doc->createElement('consultas');
    $doc->appendChild($root);
}

// Cria um novo elemento 'consulta'
$consulta = $doc->createElement('consulta');

// Adiciona os elementos filho à nova consulta
$nomeElement = $doc->createElement('nome', htmlspecialchars($_POST['nome']));
$consulta->appendChild($nomeElement);
$cpfElement = $doc->createElement('cpf', htmlspecialchars($_POST['cpf']));
$consulta->appendChild($cpfElement);
$dataElement = $doc->createElement('data', htmlspecialchars($_POST['data']));
$consulta->appendChild($dataElement);
$medicoElement = $doc->createElement('medico', htmlspecialchars($_POST['medico']));
$consulta->appendChild($medicoElement);
$especialidadeElement = $doc->createElement('especialidade', htmlspecialchars($_POST['especialidade']));
$consulta->appendChild($especialidadeElement);
$tipoElement = $doc->createElement('tipo', htmlspecialchars($_POST['tipo']));
$consulta->appendChild($tipoElement);

// Adiciona a nova consulta ao elemento raiz
$root->appendChild($consulta);

// Recebe os dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data = $_POST['data'];
$medico = $_POST['medico'];
$especialidade = $_POST['especialidade'];
$tipo = $_POST['tipo'];

// Armazena os dados na sessão
$_SESSION['nome'] = htmlspecialchars($nome);
$_SESSION['cpf'] = htmlspecialchars($cpf);
$_SESSION['data'] = htmlspecialchars($data);
$_SESSION['medico'] = htmlspecialchars($medico);
$_SESSION['especialidade'] = htmlspecialchars($especialidade);
$_SESSION['tipo'] = htmlspecialchars($tipo);

// Validação dos dados (opcional)
if (empty($nome) || empty($data)) {
    echo "Por favor, preencha os campos de nome e data.";
    exit;
}

// Salva as alterações no arquivo XML
$doc->save($xmlFile);

// Redireciona para uma página de confirmação
header('Location: confirmacao.php');

// Limpar a sessão (opcional)
session_unset();
session_destroy();

exit;
?>
