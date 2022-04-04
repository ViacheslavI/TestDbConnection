<?php


class Db implements DbConnection
{
    use TSingletone;

    protected $pdo;
    protected $db;


    public function create($request)
    {
        $data = validated($request);

    }

    public function show()
    {
        // TODO: Implement show() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    function connectMySqlite()
    {
        try {
            $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function connectSQLite()
    {
        try {
            $this->db = new PDO('sqlite:db/database.sqlite');
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}