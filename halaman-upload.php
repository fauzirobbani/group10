<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<link rel="icon" href="foto/home.ico" type="image/x-icon">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous">

</script>
<script src="dist/semantic.min.js"></script>
  <!-- Standard Meta -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Site Properties -->
<title>GROUP 10</title>

<link rel="stylesheet" type="text/css" href="dist/components/reset.css">
<link rel="stylesheet" type="text/css" href="dist/components/site.css">

<link rel="stylesheet" type="text/css" href="dist/components/container.css">
<link rel="stylesheet" type="text/css" href="dist/components/grid.css">
<link rel="stylesheet" type="text/css" href="dist/components/header.css">
<link rel="stylesheet" type="text/css" href="dist/components/image.css">
<link rel="stylesheet" type="text/css" href="dist/components/menu.css">

<link rel="stylesheet" type="text/css" href="dist/components/divider.css">
<link rel="stylesheet" type="text/css" href="dist/components/list.css">
<link rel="stylesheet" type="text/css" href="dist/components/segment.css">
<link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
<link rel="stylesheet" type="text/css" href="dist/components/icon.css">

<!-- CSS Custom -->
  <link rel="stylesheet" type="text/css" href="custom.css">
<!-- CSS Custom -->

<script type="dist/semantic.min.js">$('.autumn.leaf').transition('fade');
</script>
</head>
<body style="background-color: #00FFFF;font-family: 'Roboto';height: 100px">
 <style type="text/css">
 	.kotak{
  padding: 10px 30px;
  border-radius: 0px;
  width: 400px;
  height: 200px;
  background: #808080;
}
.title{
	margin-top: 150px;
	padding: 10px 30px;
  border-radius: 0px;
  width: 400px;
  height: 65px;
  background: #000000;
 </style>

  

  <center>
    <form name="myForm" id="myForm" onSubmit="return validateForm()" action="proses-upload.php" method="post" enctype="multipart/form-data">
  <div class="title">
  		<center><h3><p style="color: white;font-family: 'Roboto'">Upload Directory</p></h3></center>
      <center><h4><p style="color: white;font-family: 'Roboto'">= 15650004 = 15650015 = 15650052 =</p></h4></center>
  	</div>
  <div class="kotak">


    <div class="ui inverted black button" style="margin-top: 30px">
      <input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="" style="color: white"></input>
    </div>

  	<input type="submit" name="submit" class="ui black button" value="OK" style="margin-top: 30px; width: 100px">

  </div>
    

    <!-- Jika ingin menambahkan fungsi untuk menghapus data terlebih dahulu sebelum mengimpor
    <br>
    
    <div class="ui checkbox">
      <input type="checkbox" name="drop" value="1" >
        <label style="color: white">
          Kosongkan tabel terlebih dahulu
        </label>
    </div>
    -->

    <br><br>
     
    </div>
    </center>
  </div>
</form>

<script type="text/javascript">
  //  validasi form (hanya file .xls yang diijinkan)
  function validateForm()
  {
    function hasExtension(inputID, exts) {
        var fileName = document.getElementById(inputID).value;
        return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
    }

    if(!hasExtension('inputdata', ['.xls'])){
        alert("Hanya file XLS (Excel 2003) yang diijinkan.");
        return false;
    }
  }
</script>
</body>
</html>