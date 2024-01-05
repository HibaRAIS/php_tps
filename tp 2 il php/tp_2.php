<?php

class Personne {
//     public $nom;
//     public $prenom;

//    public function __construct($nom, $prenom) {
//    $this->nom = $nom;
//    $this->prenom = $prenom; 
//     }

//     public function se_presenter(){
//         return "je m'appelle {$this->nom} {$this->prenom}";
//     }

//     $personne1=new Personne("RAIS","Hiba");
//     $personne2=new Personne("ERROUSSAFI","Zineb");
//     echo $personne1->se_presenter();
//     echo $personne2->se_presenter();

    private $nom;
    private $prenom;
    private $dateNaissance;

   function __construct($nom, $prenom,$dateNaissance) {
   $this->nom = $nom;
   $this->prenom = $prenom;
   $this->dateNaissance= $dateNaissance; 
    }

    function get_nom() {
        return $this->nom;
        }
    function get_prenom() {
        return $this->prenom;
        }

    function get_DATENAISSANCE() {
            return $this->dateNaissance;
            }

    function age(){
        $date_actuelle = new DateTime();
        $dateNaissance = new DateTime($this->dateNaissance);
        $difference = $date_actuelle->diff($dateNaissance);
        return $difference->y; 
    }

    function decrire_personne(){
          echo "votre nom {$this->nom} et votre prenom est {$this->prenom} et votre age {$this->age()}";
    }
       
    private function set_nom($n) { 
            $this->nom= $n; }

    private function set_prenom($n) { 
                $this->prenom= $n; }

    public function se_presenter(){
        echo "je m'appelle {$this->nom} {$this->prenom} <br><br>";
    }
}

class PersonneAvecLieu extends Personne{
    private $lieu_naissance;
    function __construct($nom, $prenom,$dateNaissance,$lieu_naissance) {
         parent::__construct($nom, $prenom,$dateNaissance);
         $this->lieu_naissance=$lieu_naissance;
    }
   
    function decrire_personne(){
        parent::decrire_personne();
        echo "votre lieu de naissance {$this->lieu_naissance}";
    }
    
}

class Etudiant extends Personne{
    private $id;
    function __construct($nom, $prenom,$dateNaissance,$id) {
         parent::__construct($nom, $prenom,$dateNaissance);
         $this->id=$id;
    }

    function get_id() {
        return $this->id;
        }
    
    private function set_id($n) { 
            $this->id= $n; }


   public function boursier(){
    if($this->age()<23 && $this->age()>18){
        echo "<p>Boursier</p>";
    }
    else {
        echo "<p>Non Boursier</p>";
    }
   }
    
}


    // $personne1=new Personne("RAIS","Hiba");
    $personne3=new PersonneAvecLieu("ERROUSSAFI","Zineb","2004-12-12","Asfi");
    $personne3->decrire_personne();

    $personne4=new Etudiant("ERROUSSAFI","Zineb","1999-12-12","3");
    $personne4->boursier();

    // $personne2=new Personne("ERROUSSAFI","Zineb","2004-12-12");
    // // $personne1->se_presenter();
    // $personne2->se_presenter();
    // echo $personne2->age(); echo "<br><br>";
    // $personne2->decrire_personne();







   

?>