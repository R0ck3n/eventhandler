<?php 

require_once 'AbstractRequest.php';

class EventRequest extends AbstractRequest {
    protected string $table = "evenement";
    public \PDO $db;

    public function __construct(){
        $this->db = Db::getInstance()->getConnection();
    }

    public function add(Event $event):void{

      $request = $this->db->prepare("INSERT INTO {$this->table} (nom, lieu, places, inscrits, prix, date) VALUES (:name, :location, :tickets, :restTickets, :price, :date)");

      $request->execute([
          'name' => $event->getName(),
          'location' => $event->getLocation(),
          'tickets' => $event->getSeat(),
          'restTickets' => $event->getRegistered(),
          'price' => $event->getPrice(),
          'date' => $event->getDate()
      ]);

      header('Location: ../includes/all_events.php', true, 302);

    }

    
    public function deleteEvent(int $id) :void{
      $request = $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id");
      try {
          $request->execute(['id' =>$id]);
      } catch (PDOException $e) {
          echo "Erreur : " . $e->getMessage();
      }

    }




}