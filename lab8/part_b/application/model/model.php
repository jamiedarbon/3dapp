<?php
class Model {
    public $dbhandle;
    
    public function __construct() {
        $dsn = 'sqlite:./db/pageData.db';

        try {
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
			));  
		} catch (PDOEXception $e) {
                echo "Unable to connect to database.";
                print new Exception($e->getMessage());
		}
	}

    public function dbCreateTable() {
        try {
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, title TEXT,
            subTitle TEXT, description TEXT)");
            return "Model_3D file successfully created inside pageData.db file";
		} catch (PDOEXception $e) {
            print new Exception($e->getMessage());  
		}
        $this->dbhandle = NULL;
	}

    public function dbInsertData() {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Model_3D (Id, title, subTitle, description)
                VALUES (1, 'Coca Cola Great Britain', 'Founded in 1886, Dr John S Pemberton', 'The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.', 'string_4', 'string_5');");
                return "X3D model data successfully inserted into pageData.db";
		} catch(PDOEXception $e) {
            print new Exception($e->getMessage());  
		}
        $this->dbhandle = NULL;
	}

    public function dbGetData() {
        try {
            $sql = 'SELECT * FROM Model_3D';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i=-0;
            while ($data = $stmt->fetch()) {
                $result[$i]['title'] = $data['title'];
                $result[$i]['subTitle'] = $data['subTitle'];
                $result[$i]['description'] = $data['description'];
                $i++;
			}
		}
        catch (PDOEXception $e) {
            print new Exception($e->getMessage());  
		}
        $this->dbhandle = NULL;
        return $result;
	}

    public function dbGetBrand() {
     return array("~", "Coke", "Coke Light", "Coke Zero", "Sprite", "Dr Pepper", "Fanta");
	}
}
?>