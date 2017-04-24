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
    function upload()
    {
        $valid_formats = array("png", "jpg", "gif", "zip", "bmp");
        $path = "assets/upload/"; // Upload directory

        foreach ($_FILES['files']['name'] as $f => $name) {
            $extension = pathinfo($name, PATHINFO_EXTENSION);

            if( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
                $message[] = $name . "is not a valid format";
                continue; // Skip invalid file formats
            }elseif (move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path . 'img_'. $name))
            {
                $db = new DB();
                $prep = $db->pdo->prepare("INSERT INTO media(link,linkType,idcontent) VALUE (:link, :linktype, :idcontent)");

                $prep->bindValue(":link",'img_'.$name);
                $prep->bindValue(":linktype", 'image');         //condition if img,video,audio
                $prep->bindValue(":idcontent", $db->pdo->lastInsertId());
                $prep->execute();
            }
        }
    }
}