<?php
class Maison{
    protected $name;
    protected $length;
    protected $width;
    protected $nbfloor;

    public function __construct($strname, $numlength, $numwidth, $numfloor){
        $this->name=$strname;
        $this->length=$numlength;
        $this->width=$numwidth;
        $this->nbfloor=$numfloor;
    }

    public function getName(){
        return $this->name;
    }
    public function getLength(){
        return $this->length;
    }
    public function getWidth(){
        return $this->width;
    }
    public function getFloor(){
        return $this->nbfloor;
    }
    public function setMaison($strName, $numLength, $numWidth, $numFloor){
        $this->name=$strName;
        $this->length=$numLength;
        $this->width=$numWidth;
        $this->nbfloor=$numFloor;
    }
    public function superficie(){
        return $this->length*$this->width*$this->nbfloor;
    }
    public function displayArea(){
        $result=$this->superficie();
        echo ("<p>La surface de nomMaison est égale à: $result m²</p>");
    }
}
class Utilisateur{
    private static $counter;
    private $id;
    private $nom;
    private $prenom;
    public function __construct($strname, $strsurname){
        $this->nom=$strname;
        $this->prenom=$strsurname;
        $this->counter = $this->counter+1;
        $this->id=$this->counter;
    }
    public function getName(){
        return $this->nom;
    }
    public function getLength(){
        return $this->prenom;
    }
    public function getId(){
        return $this->id;
    }
    public function setName($strname){
        $this->nom=$strname;
    }
    public function setLength($strsurname){
        $this->prenom=$strsurname;
    }
    public function setId($numid){
        $this->id=$numid;
    }


}
class Animal{
    private $id;
    private $libelle;
    private $predateur;
    public function getLibelle(){
        return $this->libelle;
    }
    public function getPredateur(){
        return $this->predateur;
    }
    public function getId(){
        return $this->id;
    }
}
class Salle{
    private $id;
    private $libelle;
    private $capacite;
    private $occupe;
    public function getLibelle(){
        return $this->libelle;
    }
    public function getCapacite(){
        return $this->capacite;
    }
    public function getOccupe(){
        return $this->occupe;
    }
    public function getId(){
        return $this->id;
    }
}

?>