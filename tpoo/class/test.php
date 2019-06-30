<?php




require 'EtudiantService.php';
require 'nonboursier.php';

$ob= new EtudiantService();


$nb=new nonboursier('pjio','diop','ous','02/04/1995','773861858','diop@gmail.com','sl8');

var_dump($nb);




/* if(get_class($etudiant)=='nonboursier'){
                $adresse=$etudiant ->getAdresse();

                try{
                    $rep = $this->pdo->prepare("SELECT MAX(id_etudiant) FROM etudiant"  ) ;
                if ($lastinsert = $rep->fetch()) {
                    $id=$lastinsert["MAX(id_etudiant)"];
                
                }
                    $ajouter=$this->pdo->prepare("INSERT INTO non_boursier(id_etudiant, adresse)
                    VALUES(:id_etudiant, :adresse)");
                    $ajouter ->bindParam(':id_etudiant',$id);
                    $ajouter ->bindParam(':adresse', $adresse);
                    $ajouter->execute();

                }
                catch(PDOExeption $e)
            {
            echo 'echec :' .$e->getMessage();
            }
                  
            } 
            
          elseif(get_class($etudiant)=='boursier'){
                $type=$etudiant->getType();
                $ajouter=$this->pdo->prepare("INSERT INTO boursier(id_pension, id_etudiant)
                VALUES(:id_pension, :id_etudiant)");
                $ajouter ->bindParam(':id_pension', $id);
                $ajouter ->binParam(':id_etudiant',$id);
            }
            elseif (get_class($etudiant)==loger) {
                $type=$etudiant->getLoger();
                $ajouter=$this->pdo->prepare("INSERT INTO loge(numero_chambre, id_boursier)
                VALUES(:numero_chambre, :id_boursier)");
                $ajouter
            } */










?>