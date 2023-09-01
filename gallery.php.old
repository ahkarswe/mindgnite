<?php 
include_once 'header.php';

?>

<!DOCTYPE html>
<html lang="en">

        <title>Gallery</title>

<body class="background" style="background-color:#1e1e1e;">
<h1 class="text-center" style="color:white;">Picture Gallary</h1>
<hr>

    
<div class=" container-fluid overflow-auto" style="width: 100%;height: 430px;">
<div class="container  cust-container-1">
<div class="row justify-content-sm-start">
<?php 
$images = array("img/DSC_0056-2.JPG","img/DSC_0056.jpg","img\DSC_0058-2.JPG","img\DSC_0063.jpg","img\DSC_0109.jpg","img\DSC_0312-2.jpg","img\DSC_0601.jpg","img\DSC_0773-3.jpg","img\DSC_1566.jpg","img\DSC_0321-2.jpg","img\land.jpg");

// for($i=1;$i<=20;$i++){
//     echo'<div class="col-md-3 mb-4 col-sm-12 main-image"><a  href='.$image.'><img src='.$image.' alt="mypic"></a></div>';
   
//     }
// for each Loop
foreach($images as $image ){
    echo'<div class="col-md-3 mb-4 col-sm-12 main-image"><a  href='.$image.'><img src='.$image.' alt="mypic"></a></div>';
}

?>
    </div>
  </div>
</div>


<div style="width:100%;height:20px;">

</div>
<div class="container">
<div >
    <form>
        <h6 class=" text-center text-white">Upload new image</h6>
        <div class="row justify-content-sm-center">
        <div class=" col-md-3 col-sm-12 mb-3">
        <input type="file" class="form-control">
        </div>
        </div>
        <div class="row justify-content-sm-center">
            <div class="col-sm-3 mb-3 mx-6 ">
        <button type="submit" name="submit" class="btn btn-secondary">upload</button>
        </div>
</div>

    </form>
    
</div>
</div>


</body>
</html>