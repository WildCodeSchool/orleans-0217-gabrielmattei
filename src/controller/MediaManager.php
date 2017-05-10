<?php
/**
 * Created by PhpStorm.
 * User: necro
 * Date: 20/04/17
 * Time: 14:56
 */

namespace wcs\controller;

use wcs\DB;

class MediaManager
{

    const UPLOAD_DIR = "assets/upload/";

    public function __construct()
    {
        $this->db = new DB();
    }

    public function findOneByContent($idContent, $linkType)
    {
        $prep = $this->db->pdo->prepare("SELECT * FROM media WHERE idcontent = :idcontent AND linktype=:linktype ");

        $prep->bindValue(":linktype", $linkType);
        $prep->bindValue(":idcontent", $idContent);
        $prep->execute();

        $content = $prep->fetchAll(\PDO::FETCH_CLASS, 'wcs\model\Media');

        return $content[0];
    }

    public function uploadLink($idContent, $name, $linkType, $insert = '')
    {
        $media = null;
        if (!$insert) {
            $media = $this->findOneByContent($idContent, $linkType);
        }

        if ($media) {
            $prep = $this->db->pdo->prepare("UPDATE media SET link=:link WHERE  idcontent = :idcontent AND linktype=:linktype ");
            $oldFile = self::UPLOAD_DIR . $media->getLink();
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        } else {
            $prep = $this->db->pdo->prepare("INSERT INTO media(link,linkType,idcontent) VALUE (:link, :linktype, :idcontent)");
        }


        $prep->bindValue(":link", $name);
        $prep->bindValue(":linktype", $linkType);
        $prep->bindValue(":idcontent", $idContent);
        $prep->execute();

    }

    public function upload($idContent)
    {

        $valid_formats = array("png", "jpeg", "jpg", "gif", "zip", "bmp", "mp3", "wav", "pdf");

        $valid_formats_img = array("png", "jpg", "gif", "jpeg", "pdf");
        $valid_formats_audio = array("mp3", "wav");

        if ($_POST['video']) {
            $this->uploadLink($idContent, $_POST['video'], 'video');
        }

        foreach ($_FILES['files']['name'] as $f => $name) {

            $extension = pathinfo($name, PATHINFO_EXTENSION);

            if (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
                $message[] = $name . "is not a valid format";
                continue; // Skip invalid file formats
            } else {
                if (in_array($extension, $valid_formats_img)) {
                    $name = 'img_' . uniqid() . '.' . $extension;
                    move_uploaded_file($_FILES["files"]["tmp_name"][$f], self::UPLOAD_DIR . $name);

                    $this->uploadLink($idContent, $name, 'image', 'insert');

                } elseif (in_array($extension, $valid_formats_audio)) {
                    $name = 'audio_' . uniqid() . '.' . $extension;
                    move_uploaded_file($_FILES["files"]["tmp_name"][$f], self::UPLOAD_DIR . $name);

                    $this->uploadLink($idContent, $name, 'audio');

//                    $prep = $this->db->pdo->prepare("UPDATE media SET link=:link WHERE  idcontent = :idcontent AND linktype=:linktype ");
//                    $prep->bindValue(":link", 'audio_' . $name);
//                    $prep->bindValue(":linktype", 'audio');

                }
            }
        }
    }
}