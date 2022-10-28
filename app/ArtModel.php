<?php


class ArtModel{

    protected $db;

    public function __construct()
    {
        $db = new PDO('sqlite:db/example.db');
        $this->db = $db;
    }

    function getAllArt() {
        $results = $this->db->query('SELECT * FROM example');

        return $results;
    }

    function getArtbyid($id){

        $stmt = $this->db->prepare('SELECT * FROM example WHERE id=:id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetch();
        return $results;
    }

}

