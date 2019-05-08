<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class FonctionModel extends CI_Model
{
    
 public function creationProjet($nom, $contact, $localisation, $idUM, $dateD, $dateF, $Capital)
    {
        $query = $this->db->query("insert into configuration values(null,'$nom',$contact,'$localisation',$idUM,'$dateD','$dateF',$Capital)");
      
    } 
   
    /*apesaina amle idiritra projet ao am index*/
    public function Categorie()
    {
        $query = $this->db->query("SELECT * from Categorie");
        $valiny = array();
        $i=0;

        foreach($query->result_array() as $row)
        {
            $valiny[$i]['NomCategorie']=$row['NomCategorie'];
            $i=$i+1;
        }
        return $valiny;
    }
     
}