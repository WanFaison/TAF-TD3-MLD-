<?php
    function find_inscription(array $inscriptions):array{
        $inscripts=[];
        foreach ($inscriptions as $key => $value) {
            $etudiant=find_etudiant_by_id($value["etudiant_id"]);
            $classe=find_classe_by_id($value["classe_id"]);
            $inscripts[]=[
                            "matricule"=>$etudiant["matricule"],
                            "etudiant"=>$etudiant["nom"]." ".$etudiant["prenom"],
                            "classe"=>$classe["libelle"],
                            "annee"=>$value["annee"]
            ];
        }
        return $inscripts;
    }

    function find_etudiant_by_id(int $id ):array | null{
        foreach ($etudiants as $key => $value) {
           if($value["id"]==$id){
                return $value;
           }
        }
        return null;
    }
    function find_classe_by_id(int $id ):array | null{
        foreach ($classes as $key => $value) {
           if($value["id"]==$id){
                return $value;
           }
        }
        return null;
    }

    
?>