<?php

abstract class AbstractRequest {

    protected string $table;
    public \PDO $db;

    public function __construct(){
        $this->db = Db::getInstance()->getConnection();
    }


    /**
     * Récupère un nombre limité d'évènement 
     * 
     * @param int $limit nombre max d'event a recup
     * 
     */
    public function getLastEvents(int $limit) {
        $request = $this->db->prepare("SELECT * FROM {$this->table} ORDER BY date DESC LIMIT :limit");
        $request->bindValue(':limit', $limit, PDO::PARAM_INT);
        try {
            $request->execute();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

        return $request->fetchAll();
    }

    /**
     * Recupere un tableau avec un event / index
     * 
     * @return array
     */
    public function getAllEvents():array {
        $request = $this->db->prepare("SELECT * FROM {$this->table} ORDER BY date DESC");
        try {
            $request->execute();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

        return $request->fetchAll();
    }

    /**
     * Recupere un element depuis son id
     * 
     * @param int $id id de l'element
     * 
     * @return array
     */
    public function getById(int $id):array {
        $request = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        try {
            $request->execute(['id' =>$id]);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

        return $request->fetchAll();
    }

    abstract function add(Event $event):void;

}