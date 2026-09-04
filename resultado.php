<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<h2>Resultado</h2>

<?php

//Verificar se dados foram enviados para outra página
if(isset($_POST["nome"]) && isset($_POST["idade"]) && isset($_POST["nota1"]) && isset($_POST["nota2"]) && isset($_POST["nota3"]))
{
    class Aluno{
    public $nome;
    public $idade;
    public $nota1;
    public $nota2;
    public $nota3;
    public $notas;
    public $media;
        // Método
        public function apresentar() {
            echo "Nome: $this->nome <br>Idade: $this->idade <br>Notas: " . implode(", ",$this->notas);
            if ($this->media >= 7){
                echo "Você foi Aprovado, média: $this->media";
            }
            elseif ($this->media >= 5 && $this->media < 7){
                echo "Você está de Recuperação, média: $this->media";
            }
            else {
                echo "Você está de Recuperação, média: $this->media";
            }
        }
    }

    $usuario = new Aluno();
    $usuario->nome = $_POST["nome"];
    $usuario->idade = $_POST["idade"];
    $usuario->nota1 = $_POST["nota1"];
    $usuario->nota2 = $_POST["nota2"];
    $usuario->nota3 = $_POST["nota3"];
    $usuario->notas = [$usuario->nota1, $usuario->nota2, $usuario->nota3];
    $usuario->media = ($usuario->nota1 + $usuario->nota2 + $usuario->nota3) / 3;

    $usuario->apresentar();
}
    
?>
</body>
</html>
