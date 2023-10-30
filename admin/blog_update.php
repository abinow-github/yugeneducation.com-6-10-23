
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    <title>Document</title>
</head>
<body>
   <?php
   include("root/db.php");
   $id=$_GET ['sa'];
   $sql="SELECT * FROM blog WHERE id= '$id'";
   $result=$mysqli->query($sql);
   if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
        ?>
        <table width="80%"  align="center" cellpading="0" cellspacing="0">
            <tr>
                <td><form action="blog_update_back.php" method="post" enctype="multipart/form-data" id="formID" class="formular">
                <table width="100%" border="1" cellspacing="0" cellpading="0">
                    <tr>
                        <td width="175">id</td>
                        <td width="419"><input type="text" name="id" value="<?php echo $rows['id'];?>"/></td>
                    </tr>
                    
                    <tr>
                        <td>image</td>
                        <td><input type="file" name="img1" class="" /></td>
                    </tr>
                    <tr>
                        <td>title</td>
                        <td style="width: 90%;"><input style="width: 99%;" type="text" name="title" value="<?php echo $rows['title'];?>"/></td>
                    </tr>
                    <tr>
                        <td>description</td>
                        <td><input style="width: 99%;" type="text" name="description" value="<?php echo $rows['description'];?>"/></td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td><input style="width: 99%;" type="text" name="name" value="<?php echo $rows['author'];?>"/></td>
                    </tr>
                    <tr>
                        <td>date</td>
                        <td><input type="date" name="date" value="<?php echo $rows['date'];?>"/></td>
                    </tr>
                   
                    <tr>
                        <td>content</td>
                        <td><textarea name="content" id="editor" cols="30" rows="10"><?php echo $rows['content'];?></textarea></td>
                    </tr>
                    <tr style="margin-top: 5px;">
                        
                        <td>Meta Data</td>
                    </tr>
                    <tr>
                       <td>page title</td>
                       <td><input style="width: 99%;" type="text" name="pg_tlt" value="<?php echo $rows['pg_tlt'];?>"/></td>
                    </tr>
                    <tr>
                       <td>keyword</td>
                       <td><input style="width: 99%;" type="text" name="keyword" value="<?php echo $rows['keyword'];?>"/></td>
                    </tr>
                    <tr>
                       <td>meta description</td>
                       <td><input style="width: 99%;" type="text" name="meta_dcr" value="<?php echo $rows['meta_dcr'];?>"/></td>
                    </tr>

                  
                    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="hidden" name="id" id="id" value="<?php echo $rows['id'];?>">
                            <input type="submit" name="button" id="button" value="submit"/>
                        </td>
                    </tr>

                </table>
                <?php
    }
}
                ?>
            </form>
        </td>
            </tr>
        </table>
</body>
</html>
<?php 
}else{
     header("Location: login/index.php");
     exit();
}
 ?>