<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 12/04/17
 * Time: 14:20
 */

namespace wcs\model;
use wcs\DB;

class ContentManager
{

    private $db;

    public function __construct()
    {
        $this->db = new DB();

    }

    public function addContent()
    {
        $query ="INSERT INTO content(title, subtitle, year, description, category, new, best, credits) VALUES(:title, :subtitle, :year, :description, :category, :new, :best, :credits)";
        $prep = $this->db->pdo->prepare($query);
        $prep->bindValue(':title', $_POST['title']);
        $prep->bindValue(':subtitle', $_POST['subtitle']);
        $prep->bindValue(':year', $_POST['year']);
        $prep->bindValue(':description', $_POST['description']);
        $prep->bindValue(':category', $_POST['category']);
        $prep->bindValue(':new', $_POST['new'] ?? 0 );
        $prep->bindValue(':best', $_POST['best'] ?? 0);
        $prep->bindValue(':credits', $_POST['credits']);
        $prep->execute();

        $id = $this->db->pdo->lastInsertId();
        return $id;
    }

    public function update()
    {
        $query = ("UPDATE content SET title = :title, subtitle =:subtitle, year = :year, description= :description, category = :category, new= :new, best = :best, credits = :credits WHERE id= :id ");
        $prep= $this->db->pdo->prepare($query);
        $prep->bindValue(':id', $_POST['id']);
        $prep->bindValue(':title', $_POST['title']);
        $prep->bindValue(':subtitle', $_POST['subtitle']);
        $prep->bindValue(':year', $_POST['year']);
        $prep->bindValue(':description', $_POST['description']);
        $prep->bindValue(':category', $_POST['category']);
        $prep->bindValue(':new', $_POST['new'] ?? 0 );
        $prep->bindValue(':best', $_POST['best'] ?? 0);
        $prep->bindValue(':credits', $_POST['credits']);

        $prep ->execute();

    }

    public function deleteAction($id)
    {
        $query = 'DELETE FROM content WHERE id= :id';
        $prep = $this->db->pdo->prepare($query);
        $prep->bindValue(':id', $id, \PDO::PARAM_INT);
        $res = $prep->execute();
        return $res;

    }
    public function findAll()
    {
        $query = "SELECT * FROM content  ORDER BY year DESC ";
        $res = $this->db->pdo->query($query);
        $contents = $res->fetchAll(\PDO::FETCH_CLASS, 'wcs\model\Content');

        return $contents;

    }

    public function findAllFromContent($idContent)
    {
        $query = "SELECT * FROM media WHERE idcontent=:id";
        $prep = $this->db->pdo->prepare($query);
        $prep->bindValue(':id', $idContent, \PDO::PARAM_INT);
        $prep->execute();
        $medias = $prep->fetchAll(\PDO::FETCH_CLASS, 'wcs\model\Media');

        return $medias;

    }

    public function findOne($id)
    {
        $query = "SELECT * FROM content WHERE id= $id";
        $res = $this->db->pdo->query($query);
        $content = $res->fetchAll(\PDO::FETCH_CLASS, 'wcs\model\Content');

        return $content[0];
    }
    public function loginAction($login, $password)
    {
        $reqLogin = "SELECT login FROM users WHERE login = :login AND password = :pwd";
        $stmt = $this->db->pdo->prepare($reqLogin);
        $stmt->bindValue(':login', $login);
        $stmt->bindValue(':pwd', sha1($password));
        $stmt->execute();
        $res = $stmt->fetch();

        if (!empty($res)) {
            $_SESSION['isAuthenticated'] = true;
        } else {
            $_SESSION['isAuthenticated'] = false;
        }

        return $_SESSION['isAuthenticated'];
    }
    public function updateProfil()
    {

        $query = ("UPDATE about SET bio = :bio , subbio= :subbio , contact1= :contact1 , contact2= :contact2 , image= :image , cvanglais= :cvanglais,
        cvfrancais= :cvfrancais , cvchinois= :cvchinois , mail1= :mail1 , mail2= :mail2 , tel1= :tel1 , tel2= :tel2 WHERE id= 1 ");
        $prepa= $this->db->pdo->prepare($query);
        $prepa-> bindValue(':bio' , $_POST['bio']);
        $prepa-> bindValue(':subbio' , $_POST['subbio']);
        $prepa-> bindValue(':contact1', $_POST['contact1']);
        $prepa-> bindValue(':contact2' , $_POST['contact2']);
        $prepa-> bindValue(':image' , $_POST['image']);
        $prepa-> bindValue(':cvanglais' , $_POST['cvanglais']);
        $prepa-> bindValue(':cvfrancais' , $_POST['cvfrancais']);
        $prepa-> bindValue(':cvchinois' , $_POST['cvchinois']);
        $prepa-> bindValue(':mail1' , $_POST['mail1']);
        $prepa-> bindValue(':mail2' , $_POST['mail2']);
        $prepa-> bindValue(':tel1' , $_POST['tel1']);
        $prepa-> bindValue(':tel2' , $_POST['tel2']);

        $prepa ->execute();
//        $this->db->pdo->exec($query);

    }
    public function findProfil()
    {
        $query = "SELECT * FROM about";
        $res = $this->db->pdo->query($query);
        $contents = $res->fetchAll();
        return $contents[0];
    }
}