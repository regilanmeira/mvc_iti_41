<?php

class Disciplina
{
/* ********* INICIO DOS ATRIBUTOS PRIVADOS DA CLASSE ************ */
private $nome;
private $cargaHoraria;
private $ementa;
private $periodo;
private $curso;
/* ******************************** FIM DOS ATRIBUTOS ****************************************** */

/* ****************************** CONSTRUTOR DA CLASSE ****************************************** */

function __construct($nome = null,$cargaHoraria = null,$ementa = null,$periodo = null,$curso = null)
{
  $this->nome = $nome;
  $this->cargaHoraria = $cargaHoraria;
  $this->ementa = $ementa;
  $this->periodo = $periodo;
  $this->curso = $curso;
}

/* ***************************** FIM DO CONSTRUTOR DA CLASSE ************************************ */



/* ************************** INICIO DOS GETS E SETS DOS ATRIBUTOS PUBLICOS ********************** */

/**
 * Get the value of none
 */ 
public function getNone()
{
return $this->none;
}

/**
 * Set the value of none
 *
 * @return  self
 */ 
public function setNone($none)
{
$this->none = $none;

return $this;
}





/**
 * Get the value of cargaHoraria
 */ 
public function getCargaHoraria()
{
return $this->cargaHoraria;
}

/**
 * Set the value of cargaHoraria
 *
 * @return  self
 */ 
public function setCargaHoraria($cargaHoraria)
{
$this->cargaHoraria = $cargaHoraria;

return $this;
}

/**
 * Get the value of ementa
 */ 
public function getEmenta()
{
return $this->ementa;
}

/**
 * Set the value of ementa
 *
 * @return  self
 */ 
public function setEmenta($ementa)
{
$this->ementa = $ementa;

return $this;
}

/**
 * Get the value of periodo
 */ 
public function getPeriodo()
{
return $this->periodo;
}

/**
 * Set the value of periodo
 *
 * @return  self
 */ 
public function setPeriodo($periodo)
{
$this->periodo = $periodo;

return $this;
}

/**
 * Get the value of curso
 */ 
public function getCurso()
{
return $this->curso;
}

/**
 * Set the value of curso
 *
 * @return  self
 */ 
public function setCurso($curso)
{
$this->curso = $curso;

return $this;
}




/* *************************** FIM DOS GETS E SETS DOS ATRIBUTOS *********************** */


/* ********************************** INICIO DOS MÉTODOS ****************************** */
function exibirDetalhes()
{
echo "<h1>Resumo da disciplina</h1>";
echo $this->nome . "<br />" . $this->curso . "<br />" . $this->periodo . "<br />" . $this->cargaHoraria . "<br />" . $this->ementa;
}



/* ********************************** FIM DOS MÉTODOS ******************************** */

}