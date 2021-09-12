<?php

use App\ApiController;

$router->get('/', function(){
    require '../views/mapa.php';
    die;
});

<<<<<<< HEAD

$router->get('/api/consulta', function(){
    require '../scripts/jquery.php';
    require '../scripts/bootstrap.php';
    require '../views/api/consulta.php';
    die;
});

=======
>>>>>>> parent of 1b4b586 (Front 1)
//Endpoints Bolsa Familia
$router->get('/api/consulta/bolsa/municipio', function(){
    $codigoIbge = $_REQUEST['codigoIbge'];
    $mesAno = $_REQUEST['mesAno'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarBolsaMunicipio($codigoIbge, $mesAno, $pagina);
    echo json_encode($result);
    die;
});

$router->get('/api/consulta/bolsa/cpf-nis', function(){
    $anoMesCompetencia = $_REQUEST['anoMesCompetencia'];
    $anoMesReferencia = $_REQUEST['anoMesReferencia'];
    $codigo = $_REQUEST['codigo'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarBolsaCpfNis($anoMesCompetencia, $anoMesReferencia, $codigo, $pagina);
    echo json_encode($result);
    die;
});

$router->get('/api/consulta/bolsa/parcela-nis', function(){
    $anoMesCompetencia = $_REQUEST['anoMesCompetencia'];
    $anoMesReferencia = $_REQUEST['anoMesReferencia'];
    $nis = $_REQUEST['nis'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarBolsaSaqueNis($anoMesCompetencia, $anoMesReferencia, $nis, $pagina);
    echo json_encode($result);
    die;
});

//Endpoinst Auxilio Emergencial
$router->get('/api/consulta/auxilio/benifeciario-municipio', function(){
    $codigoIbge = $_REQUEST['codigoIbge'];
    $mesAno = $_REQUEST['mesAno'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarAuxiliobenifeciarioMunicipio($codigoIbge, $mesAno, $pagina);
    echo json_encode($result);
    die;
});

<<<<<<< HEAD

$router->get('/api/consulta/auxilio/nis', function(){
=======
$router->get('/consulta/auxilio/nis', function(){
>>>>>>> parent of 1b4b586 (Front 1)
    $codigoBenifeciario = $_REQUEST['codigoBenifeciario'];
    $codigoResponsavelFamiliar = $_REQUEST['codigoResponsavelFamiliar'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarAuxilioNis($codigoBenifeciario, $codigoResponsavelFamiliar, $pagina);
    echo json_encode($result);
    die;
});

$router->get('/api/consulta/auxilio/municipio', function(){
    $codigoIbge = $_REQUEST['codigoIbge'];
    $mesAno = $_REQUEST['mesAno'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarAuxilioMunicipio($codigoIbge, $mesAno, $pagina);
    echo json_encode($result);
    die;
<<<<<<< HEAD
});

$router->get('/api/consulta', function(){
   
=======
>>>>>>> parent of 1b4b586 (Front 1)
});