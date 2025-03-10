<?php
require_once ("dbvezerlo.php");
class Oscar{
    private $oscars=[];
    public function __construct(){
        $query = "SELECT m_ID, title, m_desc, pic FROM movie";
        $dbvez = new DBContorller();
        $this->oscars = $dbvez ->executeSelectQuery($query);
        $dbvez->clsoeDB();
    }

    public function getAllOscars(){
        return $this->oscars;
    }

    public function getOscarsById(){
        $query = "SELECT m_ID, title, m_desc, pic FROM movie WHERE , m_ID = ".$OscarId;
        $dbvez = new DBController();
        $this->oscars = $dbvez->executeSelectQuery($query);
        $dbvez->closeDB();
        return $this->oscars;
    }
    public function getOscarsByType($Mt_name){
        $query = "SELECT , m_ID, title m_desc, pic, movie_type.Mt_description
        FROM movie
        inner join movie_typeon movie_type.mt_ID=movie.m_type
        where movie_type.Mt_name= '"$Mt_name."'";
        $dbvez = new DBController();
        $this->oscars=$dbvez->executeSelectQuery($query);
        $dbvez->closeDB();
        return $this->oscars;
    }
}