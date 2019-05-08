<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class FanakaModele extends CI_Model
{
    public function Tous()
    {
        $query = $this->db->query('SELECT * from Fanaka');
        $valiny = array();
        $i=0;

        foreach($query->result_array() as $row)
        {
            $valiny[$i]['idFanaka']=$row['idFanaka'];
            $valiny[$i]['nomFanaka']=$row['nomFanaka'];
       
              $i=$i+1;
        }
        return $valiny;
    }   

    public function LMarque($wawa)
    {
        $query = $this->db->query('SELECT * from voitures  where IdMarque='.$wawa.'');
        $valiny = array();
        $i=0;

        foreach($query->result_array() as $row)
        {
            $valiny[$i]['Id']=$row['Id'];
             $valiny[$i]['Modele']=$row['Modele'];
             
              $i=$i+1;
        }
        return $valiny;
    }
  
    public function Rechercher($wawa)
    {
        $query = $this->db->query('SELECT * FROM voitures join marque on marque.id=voitures.idMarque  WHERE voitures.Modele LIKE "%'.$wawa.'%" OR  marque.Nom LIKE "%'.$wawa.'%" ');
        $valiny = array();
        $i=0;

        foreach($query->result_array() as $row)
        {
            $valiny[$i]['Id']=$row['Id'];
            $valiny[$i]['Modele']=$row['Modele'];
            $valiny[$i]['Nom']=$row['Nom'];
            $valiny[$i]['Description']=$row['Description'];
            $i=$i+1;
        }
        return $valiny;
    }
    
        public function VoitureP($wawa)
    {
       
         $query = $this->db->query('SELECT * FROM voitures join marque on marque.id=voitures.idMarque WHERE voitures.id = '.$wawa.'');
     //   'select * from voitures where id = '.$wawa.''
        $valiny = array(); 
        $i=0;

        foreach($query->result_array() as $row)
        {
            $valiny[$i]['Id']=$row['Id'];
            $valiny[$i]['IdMarque']=$row['IdMarque'];
            $valiny[$i]['Modele']=$row['Modele'];
            $valiny[$i]['Description']=$row['Description'];
            $valiny[$i]['Nom']=$row['Nom'];
            $valiny[$i]['Prix']=$row['Prix'];
            $valiny[$i]['Kilometrage']=$row['Kilometrage'];
            $valiny[$i]['Annee']=$row['Annee'];
            $valiny[$i]['Boite']=$row['Boite'];
            $valiny[$i]['Energie']=$row['Energie'];
            $valiny[$i]['Portes']=$row['Portes'];
            $valiny[$i]['Couleur']=$row['Couleur'];
            $valiny[$i]['Moteur']=$row['Moteur'];
            $valiny[$i]['Puissance']=$row['Puissance'];
              $i=$i+1;
        }
        return $valiny;
    }
}