<?php 
    class PegarValor{
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        public function getEndereco(){
            return $this->endereco;
        }

        public function setBairro($bairro){
            $this->bairro = $bairro;
        }
        public function getBairro(){
            return $this->bairro;
        }

        public function setCep($cep){
            $this->cep = $cep;
        }
        public function getCep(){
            return $this->cep;
        }
    }

    $pegarvalor = new PegarValor();
    $pegarvalor->setName($_GET['txtNome']);
    $pegarvalor->setEndereco($_GET['txtEndereco']);
    $pegarvalor->setBairro($_GET['txtBairro']);
    $pegarvalor->setCep($_GET['txtCep']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=op, initial-scale=1.0">
    <title>Controller</title>
</head>
<body>
<H1><FONT face="arial" COLOR="#32cdc6">Dados Digitados</FONT></H1><BR>
 <table>
 <tr>
             <td style="border: 1px solid #32cdc6;"><?php echo $pegarvalor->getName();?></td>
         </tr>
         <tr>
             <td style="border: 1px solid #32cdc6;"><?php echo $pegarvalor->getEndereco();?></td>
         </tr>
         <tr>
             <td style="border: 1px solid #32cdc6;"><?php echo $pegarvalor->getBairro();?></td>
         </tr>
         <tr>
             <td style="border: 1px solid #32cdc6;"><?php echo $pegarvalor->getCep();?></td>
         </tr>
    </table>
</body>
</html>