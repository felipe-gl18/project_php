<?php 

class Conexao{
    protected $link;

    public function __construct(){
        $host = 'localhost:3306';
        $senha = '';
        $db = 'cadastro';
        $user = 'root';

        $link = mysqli_connect($host,$user,$senha,$db);
        $this->link = $link;
    }

    public function getLink(){
        return $this->link;
    }

}

?>