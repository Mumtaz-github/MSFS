<?php
$file = $_FILES['fichier']['tmp_name'];
$error = $_FILES['fichier']['error'];

if ($error === UPLOAD_ERR_OK) {
    echo "Tout s'est bien passé ...";
    $types = array("image/png" , "image/jpeg");
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $type = finfo_file($finfo, $file);


    if (in_array($type, $types)) {
        echo ' et le type de fichier est autorisé !<br><br>';
        move_uploaded_file($file, 'uploaded/photo.jpg');
        echo '<img src="uploaded/photo.jpg">';
    } else {
        echo ' mais le type de fichier n\'est pas autorisé !';
    }
} else {

echo "Oups ! Une erreur est survenue !<br><br>";
echo "Code erreur : " . $error . "<br><br>";
switch ($error) {
    case UPLOAD_ERR_PARTIAL:
        exit('File only partially uploaded');
        break;
    case UPLOAD_ERR_NO_FILE:
        exit('No file was uploaded');
        break;
    case UPLOAD_ERR_EXTENSION:
        exit('File upload stopped by a PHP extension');
        break;
    case UPLOAD_ERR_FORM_SIZE:
        exit('File exceeds upload_MAX_FILE_SiZE in the HTML form');
        break;
    case UPLOAD_ERR_INI_SIZE:
        exit('File exceeds upload_max_filesize in php.ini');
        break;
    case UPLOAD_ERR_NO_TMP_DIR:
        exit('Temporary folder not found');
        break;
    case UPLOAD_ERR_CANT_WRITE:
        exit('Failed to write file');
        break;
    default:
        exit('<b>Unknown upload error</b>');
        break;
}
}

?>
correct it that it shows photo