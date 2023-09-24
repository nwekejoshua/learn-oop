<?php

require_once "database.php";

class SignupConfig
{
    private $id;
    private $firstName;
    private $lastName;
    private $address;
    protected $dbCnx;
    public function __construct($id=0, $firstName="", $lastName="", $address="")
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;

        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS,[ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]);

    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }

    public function insertData(){
        try{
            $stm = $this->dbCnx->prepare("INSERT INTO users(firstName, lastName, address) VALUES (?, ?, ?)");
            $stm->execute([$this->firstName, $this->lastName, $this->address]);
            echo "<script>alert('Data Saved Succesfully');document.location='data.php'</script>";
        }
        catch(Exeption $err){
            return $err->getMessage();
        }

    }

    public function fetchAll(){
        try{
            $stm = $this->dbCnx->prepare("SELECT * FROM users");
            $stm->execute();
            return $stm->fetchAll();
        }
        catch(Exception $err){
            return $err->getMessage();
        }
    }

    public function fetchOne(){

        try{
            $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE id = ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        }
        catch(Exception $err){
            return $err->getMessage();
        }

    }

    public function update(){
        try{
            $stm = $this->dbCnx->prepare("UPDATE users SET firstName = ?, lastName = ?, address = ? WHERE id = ?");
            $stm->execute([$this->firstName, $this->lastName, $this->address, $this->id]);
            echo "<script>alert('Data Updated Succesfully');document.location='data.php'</script>";
        }
        catch(Exception $err){
            return $err->getMessage();
        } 
    }

    public function delete(){
        try{
            $stm = $this->dbCnx->prepare("DELETE FROM users WHERE id = ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
            echo "<script>alert('Data Deleted Succesfully');document.location='data.php'</script>";
        }
        catch(Exception $err){
            return $err->getMessage();
        }
    }

}


?>