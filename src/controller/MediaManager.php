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
    function upload($idContent)
    {
        $valid_formats = array("png", "jpg", "gif", "zip", "bmp", "mp3");
        $valid_formats_img = array("png", "jpg", "gif", "jpeg", "pdf");
        $valid_formats_audio = array("mp3", "wav");

        $path = "assets/upload/"; // Upload directory

        $db = new DB();
        $prep = $db->pdo->prepare("INSERT INTO media(link,linkType,idcontent) VALUE (:link, :linktype, :idcontent)");

        if(isset($_POST['video']))
        {
            $prep->bindValue(":link",$_POST['video']);
            $prep->bindValue(":linktype", 'video');
            $prep->bindValue(":idcontent", $idContent);
            $prep->execute();
        }
        foreach ($_FILES['files']['name'] as $f => $name) {

            $extension = pathinfo($name, PATHINFO_EXTENSION);

            if( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
                $message[] = $name . "is not a valid format";
                continue; // Skip invalid file formats
            }else
            {
                if(in_array($extension, $valid_formats_img))
                {
                    move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path . 'img_'. $name);

                    $prep->bindValue(":link",'img_'.$name);
                    $prep->bindValue(":linktype", 'image');

                }elseif (in_array($extension, $valid_formats_audio)) {
                    move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path . 'audio_' . $name);

                    $prep->bindValue(":link", 'audio_' . $name);
                    $prep->bindValue(":linktype", 'audio');

                }
                $prep->bindValue(":idcontent", $idContent);
                $prep->execute();
            }
        }
    }
}