<?php
 include "upload.php";?>
<title>PHP Image Upload Example</title>
<link rel="icon"  type="image/x-icon" href="Logo.jpg">
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload" id="chooseFile">
    <button type="submit" name="submit">Upload File</button>
</form>
<!-- Display response messages -->
<?php if(!empty($resMessage)) {
    echo $resMessage['message'];
}
?>

