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
    private $counter;
    private $id;
    private $libelle;
    private $predateur;

    public function __construct($libelle, $predateur){
        $this->libelle=$libelle;
        $this->predateur=$predateur;
        $this->counter = $this->counter+1;
        $this->id=$this->counter;
    }
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
    private $counter;
    private $id;
    private $libelle;
    private $capacite;
    private $occupe;

    public function __construct($libelle, $capacite, $occupe){
        $this->libelle=$libelle;
        $this->capacite=$capacite;
        $this->occupe=$occupe;
        $this->counter = $this->counter+1;
        $this->id=$this->counter;
    }
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
$stringTest = "du texte, nom, prenom, libelle, predateur etc...";
$booltest=false;
$user1=new Utilisateur($stringTest,$stringTest);
$user2=new Utilisateur($stringTest,$stringTest);
$user3=new Utilisateur($stringTest,$stringTest);
$salle1=new Salle($stringTest,$stringTest,$booltest);
$salle2=new Salle($stringTest,$stringTest,$booltest);
$salle3=new Salle($stringTest,$stringTest,$booltest);
$animal1=new Animal($stringTest,$stringTest);
$animal2=new Animal($stringTest,$stringTest);
$animal3=new Animal($stringTest,$stringTest);


//Document.php
class Document{
    protected $auteur;
    protected $titre;
    protected $reference;

    public function getAuteur(){
        return $this->auteur;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getRef(){
        return $this->reference;
    }
}

//Cd.php
class Cd extends Document {
    private $duree;
    private $nbPlages;

    public function __construct($auteur, $titre, $reference, $duree, $nbPlages) {
        $this->auteur = $auteur;
        $this->titre = $titre;
        $this->reference = $reference;
        $this->duree = $duree;
        $this->nbPlages = $nbPlages;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function getNbPlages() {
        return $this->nbPlages;
    }
}

//Livre.php
class Livre extends Document {
    private $nbPages;

    public function __construct($auteur, $titre, $reference, $nbPages) {
        $this->auteur = $auteur;
        $this->titre = $titre;
        $this->reference = $reference;
        $this->nbPages = $nbPages;
    }

    public function getNbPages() {
        return $this->nbPages;
    }
}

//Dvd.php
class Dvd extends Document {
    private $duree;
    private $bonus;

    public function __construct($auteur, $titre, $reference, $duree, $bonus) {
        $this->auteur = $auteur;
        $this->titre = $titre;
        $this->reference = $reference;
        $this->duree = $duree;
        $this->bonus = $bonus;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function getBonus() {
        return $this->bonus;
    }
}

$cd1 = new Cd("Auteur CD 1", "Titre CD 1", "RefCD1", 45, nbPlages: 15);
$cd2 = new Cd("Auteur CD 2", "Titre CD 2", "RefCD2", 45, nbPlages: 15);

$livre1 = new Livre("Auteur1", "Titre1", "RefLivre1", 300);
$livre2 = new Livre("Auteur2", "Titre2", "RefLivre2", 150);

$dvd1 = new Dvd("Auteur1", "Titre1", "RefDVD1", 120, "bonus1");
$dvd2 = new Dvd("Auteur2", "Titre2", "RefDVD2", 90, "bonus2");

?>