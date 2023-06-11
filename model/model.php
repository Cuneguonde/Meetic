    <?php
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
    // Functions for suscribing
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
        $tata = new DB();
        $tata->registering();
        //require('../view/index.php');
    }
        public function registering(){

            $sql = 'SELECT id, nom, prenom, dateDeNaissance, genre, ville, email, loisir  FROM registered_users
            where email = :email and mdp = :mdp';
            $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':email', $_GET['email'], PDO::PARAM_STR);
                $stmt->bindValue(':mdp', $_GET['mdp'], PDO::PARAM_STR);
                $stmt->execute();
                $registered_users = $stmt->fetchAll();

                if (count($registered_users) != 1)
        echo "wrong login";
        else {
                session_start();
                $_SESSION['id'] = $registered_users[0][0];
                $_SESSION['nom'] = $registered_users[0][1];
                $_SESSION['prenom'] = $registered_users[0][2];
                $_SESSION['dateDeNaissance'] = $registered_users[0][3];
                $_SESSION['genre'] = $registered_users[0][4];
                $_SESSION['ville'] = $registered_users[0][5];
                $_SESSION['email'] = $registered_users[0][6];
                require('../view/logged.php');
                }
        }
    }