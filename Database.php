<?php
class Database{

    public $connection;

    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]); 
    }
    public function query($query = "", $params = []){

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function get(){
        return $this->statement->fetchAll();
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail(){
        $result = $this->find();

        if(!$result){
            abort();
        }

        return $result;
    }
}

/* classes in php
class Person {
    public $name;
    public $age;

    public function breathe(){
        echo $this->name ." is breathing";
    }
}

$person = new Person();

$person -> name = 'John';

$person -> age = 25;

$person->breathe();


$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = ?";

$posts = $db->query($query, [$id])->fetch();

dd($posts);

foreach($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}
   

//pdo == php data objects

//connect to database and execute a query

//?id = 1 or 2

*/