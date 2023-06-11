<?php

session_start();

$_SESSION['test'] = 42;
$test = 43;
class DB{ 

    private $db;
    private $dbHost     = "127.0.0.1"; 
    private $dbUsername = "toto"; 
    private $dbPassword = "password"; 
    private $dbName     = "meetic"; 
    public $tata;
     

    public function __construct(){ 
        if(!isset($this->db)){ 
            // Connect to the database 
            try{ 
                $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword); 
                $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                $this->db = $conn; 
            }catch(PDOException $e){ 
                die("Failed to connect with MySQL: " . $e->getMessage()); 
            } 
        } 
    } 

    public function basic_fetch(){
        $sql = 'select * from registered_users';
        $query = $this->db->prepare($sql);
        $query->execute();
        $result= $query->fetchAll();
        print_r($result);
    }
    public function printGet(){
        echo $_GET['nom'];
    }
    public function form_check(){
        if (
        (empty($_GET['nom'])) || 
        (empty($_GET['prenom'])) || 
        (empty($_GET['dateDeNaissance'])) ||
        (empty($_GET['genre'])) || 
        (empty($_GET['ville'])) || 
        (empty($_GET['email'])) || 
        (empty($_GET['mdp'])) || 
        (empty($_GET['loisir']))
        ) 
            echo "Données manquante";
        else {
        $tata = new DB();
        $tata->insertToDb();
        }
        }
        
    public function insertToDb(){
        $sql = 'INSERT INTO registered_users (nom,prenom,dateDeNaissance,genre,ville,email,mdp,loisir) VALUES (:nom, :prenom, :dateDeNaissance, :genre, :ville, :email, :mdp, :loisir)';
        $stmt= $this->db->prepare($sql);
        $stmt->bindValue(':nom', $_GET['nom'], PDO::PARAM_STR);
        $stmt->bindValue(':prenom', $_GET['prenom'], PDO::PARAM_STR);
        $stmt->bindValue(':dateDeNaissance', $_GET['dateDeNaissance'], PDO::PARAM_STR);
        $stmt->bindValue(':genre',$_GET['genre'] , PDO::PARAM_STR);
        $stmt->bindValue(':ville',$_GET['ville'] , PDO::PARAM_STR);
        $stmt->bindValue(':email',$_GET['email'] , PDO::PARAM_STR);
        $stmt->bindValue(':mdp',$_GET['mdp'] , PDO::PARAM_STR);  
        $stmt->bindValue(':loisir',$_GET['loisir'] , PDO::PARAM_STR);
        $stmt->execute();
    }   
}
$tata = new DB();
//$tata->basic_fetch();
//$tata->printGet();
//$tata->insertToDb();
$tata->form_check();
