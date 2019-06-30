<?php
class EtudiantService
{  
    private $serv;
    protected $pdo;
    private $login;
    private $pass;
    private $dbname;
    public function __construct($serv = "localhost",$login ="root",$pass = "020492", $dbname="universite"){
$this->isconnect= true;
$this->serv=$serv;
$this->login=$login;
$this->pass=$pass;
$this->dbname=$dbname;
try
{
    $this->pdo = new PDO("mysql:host={$this->serv};dbname={$this->dbname}", $this->login,
     $this->pass);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOExeption $e)
{
echo 'echec :' .$e->getMessage();
}
    }
    
    
    
    public function add(etudiant $etudiant)
    {
        $matricule=$etudiant->getMatricule();
        $nom=$etudiant->getNom();
        $prenom=$etudiant->getPrenom();
        $date_de_naissance=$etudiant->getDate_de_naissance();
        $telephone=$etudiant->getTelephone();
        $mail=$etudiant->getMail();
        try{
        $ajouter =  $this->pdo -> prepare("INSERT INTO etudiant (matricule,nom,prenom,date_de_naissance,telephone,mail)
        VALUES (:matricule,:nom,:prenom,:date_de_naissance,:telephone,:mail)");
        $ajouter ->bindParam(":matricule", $matricule);
        $ajouter ->bindParam(":nom", $nom);
        $ajouter ->bindParam(":prenom", $prenom);
        $ajouter ->bindParam(":date_de_naissance", $date_de_naissance);
        $ajouter ->bindParam(":telephone", $telephone);
        $ajouter ->bindParam(":mail", $mail);
        $ajouter->execute();
        }
                catch(PDOExeption $e)
            {
            echo 'echec :' .$e->getMessage();
            }
    } 
    public function add_non_boursier(non_boursier $non_boursier){
        $matricule=$etudiant->getMatricule();
        $adresse =$etudiant->getAdresse();
        try{
            $ajouter = $this->pdo->prepare("INSERT INTO non_boursier(matricule,adresse)
            VALUES (:matricule,:adresse)");
                    $ajouter ->bindParam(":matricule", $matricule);
                    $ajouter ->bindParam(":adresse", $adresse);
                    $ajouter->execute();        
        }
        catch(PDOExeption $e)
            {
            echo 'echec :' .$e->getMessage();
            }
    }
    public function add_boursier(etudiant $non_boursier){
        $matricule=$etudiant->getMatricule();
        $adresse =$etudiant->getAdresse();
        try{
            $ajouter = $this->pdo->prepare("INSERT INTO boursier(matricule,adresse)
            VALUES (:matricule,:adresse)");
                    $ajouter ->bindParam(":matricule", $matricule);
                    $ajouter ->bindParam(":adresse", $adresse);

        }
        catch(PDOExeption $e)
            {
            echo 'echec :' .$e->getMessage();
            }
    }
}
