<?php

    class Model {
        
        private $pdo;
        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }

        public function Login($Email, $Password){
            $sql = "SELECT * FROM Users WHERE Email = '$Email' AND `Password` = '$Password'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function ELogin($Email, $Password){
            $sql = "SELECT * FROM CUsers WHERE Email = '$Email' AND `Password` = '$Password'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function CLogin($Email, $Password){
            $sql = "SELECT * FROM cUsers WHERE Email = '$Email' AND `Password` = '$Password'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function CMenu($Email, $Password){
            $sql = "SELECT * FROM cMenu WHERE Email = '$Email' AND `Password` = '$Password'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function CMenu2($ID){
            $sql = "SELECT * FROM cMenu WHERE `CMenuID` = '$ID'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function Menu($ID){
            $sql = "SELECT * FROM cMenu WHERE `CMenuID` = '$ID'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function Users(){
            $sql = "SELECT * FROM Users";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function Chefs(){
            $sql = "SELECT * FROM CUsers";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function Chefs2($E,$P){
            $sql = "SELECT * FROM CUsers WHERE Email = '$E' AND `Password` = '$P'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function delete($ID){
            $sql = "DELETE FROM cMenu WHERE `CMenuID` = '$ID'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function delete2($ID){
            $sql = "DELETE FROM cUsers WHERE `CUsersID` = '$ID'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function update($ID,$ProPic){
            $sql = "UPDATE CUsers SET ProPic ='$ProPic' WHERE CUsersID = '$ID'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function Book($NewCGuests,$CID){
            $sql = "UPDATE CEvent SET GroupSize ='$NewCGuests' WHERE CEventID = '$CID'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function Booked($FirstName2,$LastName2,$Email2,$Phone2,$CID,$Price,$Total,$CGuests,$CSR,$Child,$UserID){
            $sql = "INSERT INTO Booked (FirstName,LastName,Email,Phone,EventID,Price,Total,Guests,SpecialRequirements,Child,UserID) VALUES ('$FirstName2','$LastName2','$Email2','$Phone2','$CID','$Price','$Total','$CGuests','$CSR','$Child','$UserID')";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function Review($FirstName,$LastName,$Comment,$Ratings){
            $sql = "INSERT INTO Rating (FirstName,LastName,Comment,Rating) VALUES ('$FirstName','$LastName','$Comment','$Ratings')";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function Review2(){
            $sql = "SELECT * FROM Rating";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function Register($FirstName,$LastName,$Email,$Phone,$Password){
            $sql = "INSERT INTO Users (FirstName,LastName,Email,Phone,Password) VALUES ('$FirstName','$LastName','$Email','$Phone','$Password')";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function CRegister($FirstName,$LastName,$Email,$Phone,$Password,$City){
            $sql = "INSERT INTO CUsers (FirstName,LastName,Email,Phone,Password,City) VALUES ('$FirstName','$LastName','$Email','$Phone','$Password','$City')";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function CUpdate($FirstName,$LastName,$Email,$Phone,$Password,$City,$Bio){
            $sql = "UPDATE CUsers SET FirstName ='$FirstName',LastName ='$LastName',Email ='$Email',Phone ='$Phone',Password ='$Password',City ='$City',Bio ='$Bio' WHERE Email = '$Email' AND `Password` = '$Password'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function CUpdate2($Price,$MenuName,$Type1,$Dish1,$Type2,$Dish2,$Type3,$Dish3,$Type4,$Dish4,$Type5,$Dish5,$ID){
            $sql = "UPDATE CMenu SET Price ='$Price',MenuName ='$MenuName',Type1 ='$Type1',Dish1 ='$Dish1',Type2 ='$Type2',Dish2 ='$Dish2',Type3 ='$Type3',Dish3 ='$Dish3',Type4 ='$Type4',Dish4 ='$Dish4',Type5 ='$Type5',Dish5 ='$Dish5' WHERE `CMenuID` = '$ID'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function CAdd($Price,$MenuName,$Type1,$Dish1,$Type2,$Dish2,$Type3,$Dish3,$Type4,$Dish4,$Type5,$Dish5,$UserName1,$Password){
            $sql = "INSERT INTO CMenu (Price,MenuName,Type1,Dish1,Type2,Dish2,Type3,Dish3,Type4,Dish4,Type5,Dish5,Email,Password) VALUES ('$Price','$MenuName','$Type1','$Dish1','$Type2','$Dish2','$Type3','$Dish3','$Type4','$Dish4','$Type5','$Dish5','$UserName1','$Password')";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function CEvent($FirstName,$LastName,$City,$EventType,$Date,$Cuisine,$DietaryRestrictions,$Venue,$GroupSize,$Bio,$Menu,$UserName1,$Password){
            $sql = "INSERT INTO CEvent (FirstName,LastName,City,EventType,Date,Cuisine,DietaryRestrictions,Venue,GroupSize,Bio,CMenuID,Email,Password) VALUES ('$FirstName','$LastName','$City','$EventType','$Date','$Cuisine','$DietaryRestrictions','$Venue','$GroupSize','$Bio','$Menu','$UserName1','$Password')";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
        public function CEvent2($Email, $Password){
            $sql = "SELECT * FROM cEvent WHERE Email = '$Email' AND `Password` = '$Password' AND GroupSize != '0' AND Date >= CURDATE();";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function CEvent3($Email, $Password){
            $sql = "SELECT * FROM cEvent WHERE (Email = '$Email' AND `Password` = '$Password' AND GroupSize = '0')
             OR (Email = '$Email' AND `Password` = '$Password' AND Date <= CURDATE() AND Date >= CURDATE() - INTERVAL 1 MONTH)";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function Event(){
            $sql = "SELECT * FROM cEvent WHERE Date >= CURDATE(); AND GroupSize != '0'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        public function Email($BID){
            $sql = "SELECT * FROM Booked WHERE EventID = '$BID'";
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
    }
?>