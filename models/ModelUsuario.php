<?php 

include_once("ModelConexao.php");

class User{
    protected $login;
    protected $senha;
    protected $link;
    protected $id;
    protected $Money_Total;
    protected $Meta_peso;
    protected $Calorias_Total;
    protected $Resto_Peso;
    protected $Nota;

    public function __construct($user = ""){
        $con = new Conexao();
        $link = $con->getLink();
        $this->link = $link;

        $sql = "SELECT * from clients where login LIKE '$user'";
        $result = mysqli_query($link,$sql) or die ("Conexão falhou");
        $rows = mysqli_fetch_object($result);

        if(mysqli_num_rows($result)){
            $this->id = $rows->id;
            $this->login = $rows->login;
            $this->senha = $rows->senha;
            $this->Money_Total = $rows->valor_disponivel;
            $this->Meta_peso = $rows->meta_peso;
            $this->Calorias_Total = $rows->calorias_total;
            $this->Resto_Peso = $rows->Resto_Peso;
            $this->Nota  = $rows->Nota;
        }
        else{
            $this->login = "";
        }
    }

        //FUNÇÕES GET E SET

    public function getLogin(){
        return $this->login;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getID(){
        return $this->id;
    }
    public function getMoney(){
        return $this->Money_Total;
    }
    public function getPeso(){
        return $this->Meta_peso;
    }
    public function getCalorias(){
        return $this->Calorias_Total;
    }
    public function getResto_Peso(){
        return $this->Resto_Peso;
    }
    public function getNota(){
        return $this->Nota;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function setID($id){
        $this->id = $id;
    }
    public function setMoney($money){
        $this->Money_Total = $money;
    }
    public function setPeso($peso){
        $this->Meta_peso = $peso;
    }
    public function setCalorias($calorias){
        $this->Calorias_Total = $calorias;
    }
    public function setResto_Peso($Resto_Peso){
        $this->Resto_Peso = $Resto_Peso;
    }
    public function setNota($nota){
        $this->Nota = $nota;
    }

        // FUNÇÕES CRUD

    public function Inserir(){
        $sql = "INSERT INTO clients (login,senha) 
        VALUES (
            '$this->login',
            '$this->senha'

        );";

        mysqli_query($this->link,$sql) or die("Cadastramento não funcionou");
    }

    public function Update(){
        $sql = "UPDATE clients set
        login = '$this->login',
        senha = '$this->senha'
        where id like '$this->id';
        
        ";

        mysqli_query($this->link,$sql) or die("Atualização falhou");
    }
    public function Delete(){
        $sql = "DELETE from clients where login like '$this->login' limit 1";
        mysqli_query($this->link,$sql)or die ("Não deu certo deletar");
    }

    // CRUD SEM SER DO SISTEMA DE (USUÁRIOS) LOGIN E CADASTRO

    public function Update_Money(){
        $sql = "UPDATE clients set
        valor_disponivel = $this->Money_Total
        where login like '$this->login';";

        mysqli_query($this->link,$sql) or die("Ocorreu um erro na atualização do valor");
    }

    public function Update_Meta(){
        $sql = "UPDATE clients set
        meta_peso = $this->Meta_peso,
        calorias_total = $this->Calorias_Total,
        Resto_Peso = $this->Resto_Peso
        where login like '$this->login';";

        mysqli_query($this->link,$sql) or die ("Ocorreu um erro na inserção dos dados");
    }

    public function Inserir_Nota(){
        $sql = "UPDATE clients set
        Nota = '$this->Nota'
        where login like '$this->login';";
        
        mysqli_query($this->link,$sql) or die ("Ocorreu um erro na inserção de nota");
    }
}

?>