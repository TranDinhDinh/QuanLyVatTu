<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
class DB {
   static protected $connection;
    const DB_TYPE = "mysql";
    const DB_HOST = "localhost";
    const DB_NAME = "quanlyvattu";
    CONST USER_NAME = "root";
    CONST USER_PASSWORD = "root";
   

   static public function getconnection(){
        if (static::$connection == null) {
            try {
                self::$connection = new PDO( "mysql:host=localhost;port=8889;dbname=" . self::DB_NAME,self::USER_NAME,self::USER_PASSWORD);

            } catch (Exception $exception) {
                throw new Exception("Kết nối thất bại: ") ;
            }
        }
        return static::$connection;
   }
   
   static public function execute($sql,$data = []){
        $statement = DB::getconnection()->prepare($sql);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute($data);
        $result = [];
        while($item = $statement->fetch()) {
           $result[] = $item;
            }
        return $result;
   }
}
 