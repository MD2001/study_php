<?php
class DataBase
{
    public $pdo;


    public $statment;

    public function __construct($config , $username='root',$password ='')
    {
       
        $dsn= "mysql:". http_build_query($config,'',';');
        $this->pdo= new PDO($dsn, $username,$password,[PDO::ATTR_ERRMODE]);
    }

    public function query($query,$prames=[])
    {
        $this->statment =$this->pdo->prepare($query);
        
        $this->statment->execute($prames);
        
        return $this;
        
    }

    public function findall()
    {
       return $this->statment->fetchAll();
    }
    public function find()
    {
       return $this->statment->fetch();
    }

    public function findallOrFail()
    {
       $result= $this->statment->fetchAll();

       if(!$result)
       {
        abort(Response::NOT_FOUND);
       }
       else{
        return $result;
       }
    }
    public function findOrFail()
    {
        $result= $this->statment->fetch();
       if(!$result)
       {
        abort(Response::NOT_FOUND);
       }
       else{
        return $result;
       }
    }

}

