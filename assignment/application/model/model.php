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
            subTitle TEXT, moduleDescription TEXT)");
            return "Model_3D file successfully created inside pageData.db file";
		} catch (PDOEXception $e) {
            print new Exception($e->getMessage());  
		}
        $this->dbhandle = NULL;
	}

    public function dbInsertData() {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (1, 'Coca Cola Great Britain', 'Founded in 1886, Dr John S Pemberton', 'The Coca Cola Company is the worlds leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (2, 'Coca Cola', 'New York Harbour, 1886', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (3, 'Sprite', 'West Germany, 1959', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (4, 'Dr Pepper', 'Texas, 1885', 'Dr Peppers unique, sparkling blend of 23 fruit flavours has been around for well over a century and its still the same, with the distinctive flavour you just cant quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885.');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (5, 'X3D Models', 'These models have been made with blender and exported in the X3D format to be viewable online.', '');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (6, '3D Images', 'These 3D images of the Coke can, Sprite Bottle and Dr Pepper cup have been created in Blender and rendered using the cycles engine, blenders high quality, realistic rendering engine.', '');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (7, 'Camera Views', 'These buttons select a range of X3D model viewpoints', '');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (8, 'Animation Options', 'These buttons select a range of animation options', '');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (9, 'Rendering Options', 'These buttons select a range of rendering options', '');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (10, 'History of Coca Cola', 'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried a few doors down to Jacobs Pharacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs Pharmacy put it on sale for five cents (about 3p) a glass.', 'testdata');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (11, 'Sprite - Fanta Klare Zitrone', 'Crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Colas no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.', 'testdata');" .
                "INSERT INTO Model_3D (Id, title, subTitle, moduleDescription)
                VALUES (12, 'Dr Pepper - Liquid Sunshine', 'Dr Peppers unique, sparkling blend of 23 fruit flavours has been around for well over a century and its still the same, with that distinctive flavour you just cant quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.', 'testdata');");
		return "Data successfully inserted into pageData.db";
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
                $result[$i]['moduleDescription'] = $data['moduleDescription'];
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