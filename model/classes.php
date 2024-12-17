<?php
class Utilisateur{
    protected $name;
    protected $surname;
    protected $mail;
    protected $pseudo;
    protected $picture;
    protected $role;

    public function __construct($strname, $strsurname, $strmail, $strpseudo, $strpicture, $numrole){
        $this->name=$strname;
        $this->surname=$strsurname;
        $this->mail=$strmail;
        $this->pseudo=$strpseudo;
        $this->picture=$strpicture;
        $this->role=$numrole;
    }

    //getters
    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    public function getPicture(){
        return $this->picture;
    }
    public function getRole(){
        return $this->role;
    }

    //setters
    public function setName($strname){
        $this->name=$strname;
    }
    public function setSurname($strsurname){
        $this->surname=$strsurname;
    }
    public function setMail($strmail){
        $this->mail=$strmail;
    }
    public function setPseudo($strpseudo){
        $this->pseudo=$strpseudo;
    }
    public function setPicture($strpicture){
        $this->picture=$strpicture;
    } 
}

class Media{
    protected $id;
    protected $title;
    protected $poster;
    protected $description;
    protected $link;
    
}
?>
