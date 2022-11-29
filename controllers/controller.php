<?php 

    require '../models/connection.php';
    require "../models/model.php";

    Class Controller {
        private $db;
        public function __construct(Model $db) {
            $this->db = $db;
        }

        public function Login($Email, $Password){
            return $this->db->Login($Email, $Password);
        }
        public function ELogin($Email, $Password){
            return $this->db->ELogin($Email, $Password);
        }
        public function CLogin($Email, $Password){
            return $this->db->CLogin($Email, $Password);
        }
        public function CMenu($Email, $Password){
            return $this->db->CMenu($Email, $Password);
        }
        public function CMenu2($ID){
            return $this->db->CMenu2($ID);
        }
        public function Menu($ID){
            return $this->db->Menu($ID);
        }
         public function Users(){
            return $this->db->Users();
        }
        public function Chefs(){
            return $this->db->Chefs();
        }
        public function Chefs2($E,$P){
            return $this->db->Chefs2($E,$P);
        }
        public function delete($ID){
            return $this->db->delete($ID);
        }
        public function delete2($ID){
            return $this->db->delete2($ID);
        }
        public function update($ID,$ProPic){
            return $this->db-> update($ID,$ProPic);
        }
        public function Book($NewCGuests,$CID){
            return $this->db->Book($NewCGuests,$CID);
        }
        public function Booked($FirstName2,$LastName2,$Email2,$Phone2,$CID,$Price,$Total,$CGuests,$CSR,$Child,$UserID){
            return $this->db->Booked($FirstName2,$LastName2,$Email2,$Phone2,$CID,$Price,$Total,$CGuests,$CSR,$Child,$UserID);
        }
        public function Review($FirstName,$LastName,$Comment,$Ratings){
            return $this->db->Review($FirstName,$LastName,$Comment,$Ratings);
        }
        public function Review2(){
            return $this->db->Review2();
        }
         public function Register($FirstName,$LastName,$Email,$Phone,$Password){
            return $this->db->Register($FirstName,$LastName,$Email,$Phone,$Password);
        }
        public function CRegister($FirstName,$LastName,$Email,$Phone,$Password,$City){
            return $this->db->CRegister($FirstName,$LastName,$Email,$Phone,$Password,$City);
        }
        public function CUpdate($FirstName,$LastName,$Email,$Phone,$Password,$City,$Bio){
            return $this->db->CUpdate($FirstName,$LastName,$Email,$Phone,$Password,$City,$Bio);
        }
        public function CUpdate2($Price,$MenuName,$Type1,$Dish1,$Type2,$Dish2,$Type3,$Dish3,$Type4,$Dish4,$Type5,$Dish5,$ID){
            return $this->db->CUpdate2($Price,$MenuName,$Type1,$Dish1,$Type2,$Dish2,$Type3,$Dish3,$Type4,$Dish4,$Type5,$Dish5,$ID);
        }
        public function CAdd($Price,$MenuName,$Type1,$Dish1,$Type2,$Dish2,$Type3,$Dish3,$Type4,$Dish4,$Type5,$Dish5,$UserName1,$Password){
            return $this->db->CAdd($Price,$MenuName,$Type1,$Dish1,$Type2,$Dish2,$Type3,$Dish3,$Type4,$Dish4,$Type5,$Dish5,$UserName1,$Password);
        }
        public function CEvent($FirstName,$LastName,$City,$EventType,$Date,$Cuisine,$DietaryRestrictions,$Venue,$GroupSize,$Bio,$Menu,$UserName1,$Password){
            return $this->db->CEvent($FirstName,$LastName,$City,$EventType,$Date,$Cuisine,$DietaryRestrictions,$Venue,$GroupSize,$Bio,$Menu,$UserName1,$Password);
        }
        public function CEvent2($Email, $Password){
            return $this->db->CEvent2($Email, $Password);
        }
        public function CEvent3($Email, $Password){
            return $this->db->CEvent3($Email, $Password);
        }
        public function Event(){
            return $this->db->Event();
        }
        public function Email($BID){
            return $this->db->Email($BID);
        }
    }
  
    $model = new Model($db);
    $controller = new Controller($model);
?>