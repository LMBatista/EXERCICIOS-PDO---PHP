<?php
//Constantes para armazenamento das variáveis de conexão.
define('HOST', '192.168.52.128');
define('PORT', '5432');
define('DBNAME', 'minimundo');
define('USER', 'postgres');
define('PASSWORD', '159753');
try {
$dsn = new PDO("pgsql:host=". HOST .
";port=".PORT.";dbname=" . DBNAME . ";user=" . USER .
";password=" . PASSWORD);
} catch (PDOException $e) {
echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' . $e->getMessage();
}

//----------------REALIZANDO INSERÇÃO DE DADOS NO BD---------------------
$nome_cliente    = "joão";
$cpf_cliente     = "42399415834";
$email_cliente   = "email@dominio.com";
$data_nascimento = "1988-10-01";

$stmt = $dsn->prepare(INSERT INTO
							clientes(nome_cliente,cpf_cliente,email_cliente,data_nascimento)
							VALORES(?,?,?,?)
							);
$resultSet = $stmt->execute (nome_cliente,cpf_cliente,email_cliente,data_nascimento);
if($resultSet){
	echo "os dados foram inseridos com sucesso. /n/n/";
} else{
	echo "ocorreu um erro e não foi possivel inserir os dados.";
	exit;
}

die
/**/

/**/
$intrutionSQL = 'select id_cliente,nome_cliente,cpf_cliente,email_cliente,data_nascimento from clientes';

$resultSet = $sdn->query($intrutionSQL);

While ($row = $resultSet->fetch()) {
	echo $row['id_cliente']  ."\t";
	echo $row['nome_cliente']  ."\t";
	echo $row['cpf_cliente']  ."\t";
	echo $row['email_cliente']  ."\t";
	echo $row['data_nascimento']  ."\t";
}
//-----------REALIZANDO A ATUALIZAÇÃO DO BD----------------------------
die

/**/

/**/
$nome_cliente    = "joão";
$cpf_cliente     = "42399415834";
$email_cliente   = "email@dominio.com";
$data_nascimento = "1988-10-01";
$id_cliente		 = 6;

$stmt = $dsn->prepare(UPDATE
							clientes
							SET nome_cliente = ?,
							cpf_cliente = ?,
							email_cliente= ?,
							data_nascimento= ?
							WHERE
							id_cliente= ?
							);
$resultSet = $stmt->execute ([nome_cliente,cpf_cliente,email_cliente,data_nascimento,id_cliente]);
if($resultSet){
	echo "os dados foram inseridos com sucesso. /n/n/";
} else{
	echo "ocorreu um erro e não foi possivel inserir os dados.";
	exit;
}

die
/**/

/**/
$intrutionSQL = 'select id_cliente,nome_cliente,cpf_cliente,email_cliente,data_nascimento from clientes';

$resultSet = $sdn->query($intrutionSQL);

print_r($resultSet->fetchAll(PDO::FETCH_ASSOC));
//------------------REALIZANDO A EXCLUSÃO DE DADOS NO BD-------------------------
die
/**/

/**/
$id_cliente = 1;
$stmt = $dsn->prepare("DELET FROM  clientes WHERE id_cliente=?");
$resultSet = $stmt->execute ([id_cliente]);
if($resultSet){
	echo "os dados foram removido com sucesso. /n/n/";
} else{
	echo "ocorreu um erro e não foi possivel remover os dados.";
	exit;
}
$intrutionSQL = 'select id_cliente,nome_cliente,cpf_cliente,email_cliente,data_nascimento from clientes';

$resultSet = $sdn->query($intrutionSQL);

print_r($resultSet->fetchAll(PDO::FETCH_ASSOC));