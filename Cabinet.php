<?php
include_once 'Cola.php';

    class Cabinet {

      private $shelf1 = [];
      private $shelf2 = [];
      private $shelf3 = [];
      private $door = false;

      function addRaf1($cola) {
        if((!is_a($cola, 'Cola')) && !($cola->get_size() == "33")){
            return "please add cola 33cl!";
        }
        if(!$this->door){
            return "The door is closed! please first open the door.";
        }
        if(sizeof($this->shelf1) < 21){
            return array_push($this->shelf1, $cola);
        }
        return "shelf1 is full";
      }

      function addRaf2($cola) {
        if((!is_a($cola, 'Cola')) && !($cola->get_size() == "33")){
            return "please add cola 33cl!";
        }
        if(!$this->door){
            return "The door is closed! please first open the door.";
        }
          if(sizeof($this->shelf2) < 21){
             return array_push($this->shelf2, $cola);
          }

          return "shelf2 is full";
      }

      function addRaf3($cola) {
        if((!is_a($cola, 'Cola')) && !($cola->get_size() == "33")){
            return "please add cola 33cl!";
        }
        if(!$this->door){
            return "The door is closed! please first open the door.";
        }
          if(sizeof($this->shelf3) < 21){
             return array_push($this->shelf3, $cola);
          }

          return "shelf3 is full";
      }

      function getRaf1() {
        if(!$this->door){
            return "The door is closed! please first open the door.";
        }
        if(sizeof($this->shelf1) > 0){
             return array_pop($this->shelf1);
          }

          return "shelf1 is empty";
      }

      function getRaf2() {
        if(!$this->door){
            return "The door is closed! please first open the door.";
        }
        if(sizeof($this->shelf2) > 0){
             return array_pop($this->shelf2);
          }

          return "shelf2 is empty";
      }

      function getRaf3() {
        if(!$this->door){
            return "The door is closed! please first open the door.";
        }
        if(sizeof($this->shelf3) > 0){
             return array_pop($this->shelf3);
          }

          return "shelf3 is empty";
      }

      function isFull(){
          if( (sizeof($this->shelf1) == 20) && (sizeof($this->shelf2) == 20) && (sizeof($this->shelf2) == 20)) {
             return "cabinet is full";
          }
          if( (sizeof($this->shelf1) > 0) || (sizeof($this->shelf2) > 0) || (sizeof($this->shelf3) > 0) ){
            return "there are places to put the cola 33cl";
          }
            return "cabinet is empty";
      }

      function isOpen(){
          return $this->door;
      }

      function openTheDoor(){
          return $this->door = true;
      }

      function closeTheDoor(){
          return $this->door = false;
      }
    }
?>