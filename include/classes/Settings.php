<?php

class Settings {

  private $db;

  public function __construct()
  {
    $this->db = new Database();
    $this->db = $this->db->dbConnect();
  }

  public function getMaintenance()
    {
      $statement = $this->db['BullzNET_Website']->prepare("SELECT maintenance FROM Settings WHERE ID = 1");
      $statement->execute();

        return $statement->fetch()['maintenance'];
    }
}
