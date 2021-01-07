<?php
$password="da47aa24f9d25de9c8dd9b0ec4c29fad"; //use md5t.php to generate password .
$disallowed_access_list=array("PHP","php","asp","ASP","pdf","PDF",); //for edit,upload,hidden,copy from web,rename
$show_all_files=true;  //prevent showing files as above array on false
$can_go_back=true;  //prevent going back from home using "duble dot" on false
$can_upload_all=true; //prevent upload as above array on false
$can_edit_all=true;  //prevent editng files as above array on false
$can_copynet_all=true; //prevent "copy from web" as above array on false
$can_rename_all=true; //prevent rename as above array on false
date_default_timezone_set('Asia/Dhaka');
function can_access($filen)
{
global $disallowed_access_list;
$fina=explode(".",$filen);$fin=$fina[count($fina)-1];
if(in_array($fin,$disallowed_access_list)){return false;}else{return true;}
}
if(!isset($_POST["act"])||(isset($_POST["act"])&&$_POST["act"]!="down")){echo "بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ  &nbsp; In the name of ALLAH, the Most Gracious, the Most Merciful.<br>";}
session_start();

$o=$_SERVER['PHP_SELF'];
$ooa=explode("/",$o);$foo=$ooa[count($ooa)-1];
if(isset($_POST["out"])){
unset($_SESSION["t33pk5rafiz"]);
header("location:$foo?dir=.");

}
if(isset($_POST["pass"])){
if(md5(md5(md5($_POST["pass"])))==$password){$_SESSION["t33pk5rafiz"]=$password;$_SESSION["ftheme"]=$_POST["theme"];header("location:$foo?dir=.");}
else {echo "Wrong info!<pre>".print_r($_SESSION)."</pre>";}
}

if(!isset($_SESSION["t33pk5rafiz"])||$_SESSION["t33pk5rafiz"]!=$password){

  die(
'
<form method="post"><select name="theme"><option value="dark">Dark</option><option value="light">Light</option></select><input type="password" value="" name="pass">
  <button>Login</button>
  </form>








'


);}





class Zipper extends ZipArchive{

public function zd($main,$parent) {
    $this->addEmptyDir($parent);
    foreach(scandir($main) as $child){

      if(!is_dir("$main/$child")){$this->addFile("$main/$child","$parent/$child");}
      if(is_dir("$main/$child")&&$child!="."&&$child!=".."){$this->zd("$main/$child","$parent/$child");}

    }

}

}



///////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST["c"])){

  $ch=$_POST["c"];
  if($_POST["act"]=="down"){
  if((count($ch)<2)&&is_file($ch[0])){
    $nnamea=explode("/",$ch[0]);$nname=$nnamea[count($nnamea)-1];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');

    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($ch[0]));

  header('Content-Disposition: attachment; filename="'.$nname.'"');


  die(readfile($ch[0]));





  }
    else{



          $zip = new Zipper;
          $ztemp="SUBHANALLAHI-WALHAMDULILLAHI-WALA_ILAHA_ILLAHU-WALLAHUAKBER.zip";
          if ($zip->open($ztemp, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {


        $zip->setArchiveComment("ALLAH is our creator.\nSo let us obey to our creator.");
        foreach($ch as $zipd){
          $fina=explode("/",$zipd);$fin=$fina[count($fina)-1];
        if(!is_dir($zipd)){$zip->addFile($zipd, $fin);}
        if(is_dir($zipd)&&$zipd!="."&&$zipd!=".."){$zip->zd($zipd,$fin);}}
        $zip->close();



        header('Content-Disposition: attachment; filename="RANDA_FM.zip"');

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');

        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($ztemp));
        echo file_get_contents($ztemp);

 unlink($ztemp);

         exit();

        } else {
        echo 'FAILURE ON ZIP CREATING!';
        }

  }
  }
if($_POST["act"]=="zip"){


  $zip = new Zipper;
  if ($zip->open($_POST["dd"]."/".$_POST["d"], ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {


$zip->setArchiveComment("ALLAH is our creator.\nSo let us obey to our creator.");
foreach($ch as $zipd){
  $fina=explode("/",$zipd);$fin=$fina[count($fina)-1];
if(!is_dir($zipd)){$zip->addFile($zipd, $fin);}
if(is_dir($zipd)&&$zipd!="."&&$zipd!=".."){$zip->zd($zipd,$fin);}}
$zip->close();
echo 'ZIP CREATED';
} else {
echo 'FAILURE ON ZIP CREATING!';
}


}




function delt($dir){
  $files=array_diff(scandir($dir),array('.','..'));
  foreach ($files as $file) {
    (is_dir("$dir/$file"))?delt("$dir/$file"):unlink("$dir/$file");

  }
  return rmdir($dir);
}

if($_POST["act"]=="del"){
foreach ($ch as $del ) {
  if(is_file($del)){if(unlink($del)){echo "done del: $del...\n";}}
  else{
delt($del);

  }
}


}

if($_POST["act"]=="unzip"){

  $zip = new ZipArchive;
if ($zip->open($ch[0]) === TRUE) {
    $zip->extractTo($_POST["d"]."/".$_POST["dd"]."/");
    $zip->close();
    echo 'UNZIPPED';
} else {
    echo 'failed';
}
}






if($_POST["act"]=="copy"){ ///////////////////////////////////////////////////////////web
  $_SESSION["c"]=$_POST["c"];
}
if($_POST["act"]=="move"){
  $_SESSION["move"]=$_POST["c"];
}
if($_POST["act"]=="rename"){
  foreach($ch as $key => $name){
    if(!$can_rename_all&&!can_access($_POST["d"])){}else{
  $nnamea=explode("/",$name);$nname=$nnamea[count($nnamea)-1];
    if($key==0){rename($name,$_POST["dd"]."/".$_POST["d"]);}
      else{rename($name,$_POST["dd"]."/".$key."-".$_POST["d"]);}
  }}
}
















}

if(isset($_POST["act"])&&$_POST["act"]=="copyp"){ //////////////////////////////////////////////////////////////////////////////
echo "paste \n";
////copy_from_paste


  $inputn=$_POST["d"];
foreach ($_SESSION["c"] as $inputo ) {
if(!is_dir($inputo)){
$fina=explode("/",$inputo);$fin=$fina[count($fina)-1];
$dotta=explode(".",$fin);if(!isset($dotta[1])){$fin.=".html";}
copy($inputo,"$inputn/$fin");

}
if(is_dir($inputo)&&$inputo!="."&&$inputo!=".."){
dc($inputo,$inputn);

}
}
unset($_SESSION["c"]);}
function dc($io,$in){                                                                         ///////////
$fona=explode("/",$io);$fon=$fona[count($fona)-1];
mkdir("$in/$fon");
foreach(scandir($io) as $child){
  if(!is_dir("$io/$child")){copy("$io/$child","$in/$fon/$child");}
  if(is_dir("$io/$child")&&$child!="."&&$child!=".."){dc("$io/$child","$in/$fon");}
}

}                                                                                         /////////////
                                                                                        ///////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST["act"])&&$_POST["act"]=="copym"){
                                                                                      //move

$newm=$_POST["d"];
foreach($_SESSION["move"] as $oldm){
  $fa=explode("/",$oldm);$fn=$fa[count($fa)-1];
  rename($oldm,$_POST["d"]."/".$fn);
  unset($_SESSION["move"]);

}
}


if(isset($_POST["act"])&&$_POST["act"]=="md"){


mkdir($_POST["dd"]."/".$_POST["d"]);


}


if(isset($_POST["act"])&&$_POST["act"]=="mf"){


fopen($_POST["dd"]."/".$_POST["d"],"w");


}
if(isset($_POST["act"])&&$_POST["act"]=="upload"){

    $uploaddir = $_POST["dd"]."/";


    $repeat = 0; $succeed = 0; $failed = 0; $total = 0;

    $files = Array();
    $tmp = Array('name' => "",'type' => "",'size' => "",'error' => "",'tmp_name' => "");
    $files[] = $tmp;

    foreach($_FILES['_file']['name'] as $tmpname){
      $files[$total]['name'] = $tmpname;
      $files[$total]['type'] = $_FILES['_file']['type'][$total];
      $files[$total]['size'] = $_FILES['_file']['size'][$total];
      $files[$total]['error'] = $_FILES['_file']['error'][$total];
      $files[$total]['tmp_name'] = $_FILES['_file']['tmp_name'][$total];
      $total++;
    }

    for($i = 0; $i < $total; $i++){
      $filename=$files[$i]['name'];
      $filetype=$files[$i]["type"];
      $filesize=$files[$i]["size"];
      $blocked=false;

if(!$can_upload_all){if(!can_access($filename)){$blocked=true;}}
      $md5_filename = $filename;


if(!$blocked){
      if (file_exists($uploaddir.$md5_filename)){
        if(!is_dir("backup")){mkdir("backup");}
        if(!is_dir("backup/upload")){mkdir("backup/upload");}
      if(copy($uploaddir.$md5_filename,"backup/upload/".$md5_filename)){$repeat++;}


      }
        $upstatus = move_uploaded_file(
          $files[$i]["tmp_name"],
          $uploaddir.$md5_filename
        );
        if ($upstatus != false){
          $succeed++;

        }else{
          $failed++;

        }}else{echo $filename." this type of file not allowed!<br>";$failed++;}
      }

    echo "total:".$total.",succeed:".$succeed.",failed:".$failed."";
    if($repeat>0){echo "<br>Repeated file backed up to the 'backup/upload' folder!<br>";}
}


if(isset($_POST["act"])&&$_POST["act"]=="net"){
  if(!$can_copynet_all&&!can_access($_POST["d"])){}else{
  copy($_POST["url"],$_POST["dd"]."/".$_POST["d"]);
}}
function data($value)
{
  if($value<pow(1024,1))return $value."B";
elseif($value<pow(1024,2))return round($value/pow(1024,1),2)."KB";
  elseif($value<pow(1024,3)) return round($value/pow(1024,2),2)."MB";
  else return round($value/pow(1024,3),2)."GB";
}

function gds($dir){
  $a=0;
 foreach (scandir($dir) as $file) {
   if(!is_dir("$dir/$file")){ $a+=filesize("$dir/$file"); }
   if(is_dir("$dir/$file")&&$file!="."&&$file!=".."){ $a+=gds("$dir/$file");}
 }
 return $a;}

if(isset($_POST["gds"])){

echo "<script>alert('(All data showing as aprx)\\nThis directory: ".data(gds($_POST["gds"]))." (".gds($_POST["gds"])."bytes)\\nDisk total space: ".data(disk_total_space("/"))."\\nDisk free space: ".data(disk_free_space("/"))."\\nDisk used space: ".data((disk_total_space("/")-disk_free_space("/")))."');</script>";
}

?>






<html>
<head><title>RANDA FM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#00ffff">

<style>
<?php  if($_SESSION["ftheme"]=="dark"){echo '
hr{border:0px solid black;}
table{
  border: 1px solid white;
}
  body{
    background: #000000;
    color:#00ffff;
  }
a{
  text-decoration: underline;
  color:#00ffff;
}
#bottom{
  position: fixed;
 bottom: 0;
 left: 0;
 right:0;


background:black;
color:green;
 border: 3px solid cyan;
 text-align:center;

}
button,input,.border,option,select{
  background:green;
  color:white;
  border-radius:10px;
  border:2px solid green;
  text-align:center;
}
tr:nth-child(odd) {background-color: #004444;}
tr:hover{
  background:green;
}
  ';}

  if($_SESSION["ftheme"]=="light"){echo '
  hr{border:0px solid white;}
  table{
    border: 1px solid black;
  }
    body{
      background: white;
      color:#000000;
    }
  a{
    text-decoration: underline;
    color:#000000;
  }
  #bottom{
    position: fixed;
    bottom: 0;
    left: 0;
    right:0;

  background:#ffffff;
  color:black;
   border: 3px solid cyan;
text-align:center;
  }
  button,input,.border,option,select{
    background:green;
    color:white;
    border-radius:10px;
    border:2px solid green;
    text-align:center;
  }
  tr:nth-child(odd) {background-color: #bbbbbb;}
  tr:hover{
    background:green;
  }
    ';
}



  ?>
  td{padding: 7px;}
  body{font-family: arial;}
.folimg{height: 10px;
    width: 10px;
  background: #ffff00;
}
.desc{
  text-decoration: underline;
  cursor: alias;

}
</style>


</head>




  <body>


<?php
if(isset($_SESSION["c"])){
  echo "You have selected to copy:<pre>";print_r($_SESSION["c"]);echo "</pre>Go Action for paste.";
}
if(isset($_SESSION["move"])){
  echo "You have selected to move:<pre>";print_r($_SESSION["move"]);echo "</pre>Go Action for paste.";
}

if(isset($_POST['path'])){
 if(!$can_edit_all&&!can_access($_POST["path"])){}else{
$txt = $_POST['upp'];
if($txt!=""){

if(!is_dir("backup")){mkdir("backup");}

$aaa=str_replace("/", "-", $_POST["path"]);
if(copy($_POST["path"],"backup/".date("g-i-s-a-Y-m-d")."(-)".$aaa."")){
$myfile = fopen($_POST["path"], "w");
fwrite($myfile, $txt);fclose($myfile);print( "updated: ".$_POST["path"]."<br>backed up:".date("g-i-s-a-Y-m-d")."(-)".$aaa."");}
}}}
if(isset($_GET["file"])){
   if(!$can_edit_all&&!can_access($_GET["file"])){}else{
  if(is_file($_GET["file"])){
  $rafiz = fopen($_GET["file"], "r");
  $t="";
  while(!feof($rafiz)) {
    $t.= fgets($rafiz);
  }
  echo "<form method='post'><textarea style='width:100%;height:80%;' name='upp' id='t'>".htmlspecialchars($t)."
  </textarea><br><input type='text' value='".$_GET["file"]."' name='path' id='p'><br><input type='submit' name='up' value='Update' onclick='up();'></form>
  <div id='s'></div>";



}else echo "File not found!";
}
}
echo "<form method='post' enctype='multipart/form-data'>";
$o=$_SERVER['PHP_SELF'];
      $parent=$_GET["dir"];
      $btest=explode("/",$parent);if(!$can_go_back){if(array_search("..",$btest)!=false){die("Sorry!");}}
      $sss="<a href='".$o."?dir=.'>HOME</a>/";
if($parent!="."){$dir_b=explode("/",$parent);$sss2=".";
  for($x=1;$x<count($dir_b);$x++){
  $sss2.="/".$dir_b[$x];
  $sss.="<a href='".$o."?dir=".$sss2."'>".$dir_b[$x]."</a>/";
  }}

      echo "$sss<br><div style='overflow-x:auto'><table  style='width:100%;'><tr><th><span onclick='select_all();' style='border:2px solid blue;cursor:cell;'>All</span><br><br><span onclick='invert_all();' style='border:2px solid blue;cursor:cell;'>Invert</span></th><th>Item</th><th>Open<br>/<br>Description</th></tr>";
      $a=0;
         foreach(scandir($parent) as $l){
             if( $l != '.' && $l!=".." ){

               $child=$parent."/".$l;

                if(!is_dir($child)){$exta=explode(".",$l);$ext=$exta[count($exta)-1];
 if(!$show_all_files&&!can_access($l)){}else{
                  $fil[$a]= '<tr><td><input type="checkbox" rafiz="fi" name="c[]"  value="'.$child.'"></td><td><a href="'.$o.'?file='.$child.'&dir='.$parent.'">'.$l.'</a><br><span style="font-size:10;">'.data(filesize($child)).'</span></td><td><a href="'.$child.'">Link</a><br><span class="desc" onclick="dclick(\''.$child.'\',\''.date ("F d Y H:i:s", filemtime($child)).'\',\''.data(filesize($child)).'\',\''.mime_content_type($child).'\')">Description</span></td></tr>';}
}
                if(is_dir($child)) {$fol[$a]= '<tr><td><input type="checkbox" rafiz="fo" name="c[]" mutiple value="'.$child.'"> </td><td><img class="folimg"></img> <a href="'.$o.'?dir='.$child.'">'.$l.'</a></td><td><a href="'.$child.'">Link</a><br><span class="desc" onclick="dclick(\''.$child.'\',\''.date ("F d Y H:i:s", filemtime($child)).'\')">Description</span></td></tr>' ;}
               $a+=1;

          }
      }


if(isset($fol)){foreach($fol as $f){
  echo $f;
}}else echo "<tr></td><td><td>No Folder!</td></tr>";
if(isset($fil)){foreach($fil as $f){
  echo $f;
}}else echo "<tr></td><td><td>No File!</td></tr>";

      echo "</table></div>";


?><div id="bottom"><span id="counter"></span>

  <select name="act" oninput="oonclick(this.value)" style=" width: 100%;">
<option value="---" >Action</option>
<?php if(isset($_SESSION["c"])){echo '  <option    value="copyp"   >Copy-Paste Here</option>';}?>
<?php if(isset($_SESSION["move"])){echo '  <option    value="copym"   >Move-Paste Here</option>';}?>

<option value="upload" >Upload</option>
<option value="del" >Delete</option>
<option value="md" >Make folder</option>
<option value="mf" >Make file</option>
<option value="copy" >Copy</option>

<option value="rename" >Rename</option>

<option value="move" >Move</option>
<option value="zip" >ZIP</option>
<option value="unzip" >UnZIP</option>
<option value="down" >Download</option>
<option value="net">Copy from web</option>
</select>
<div id="ex"></div>
<script>
function copyp(){
  document.getElementById("ex").innerHTML='To paste here:<input type="hidden" name="d" value="<?php echo $_GET["dir"]; ?>" /><input type="submit" >';
}
function copym(){
  document.getElementById("ex").innerHTML='To paste here:<input type="hidden" name="d" value="<?php echo $_GET["dir"]; ?>" /><input type="submit" >';
}
function up(){
document.getElementById("ex").innerHTML='<input type="hidden" name="dd" value="<?php echo $_GET["dir"]; ?>" />Select file(s):<input type="file" name="_file[]" id="files" multiple="" /><input type="submit" >';

}

function del(){
  if(confirm("Are you sure to go DELETE section?")){
document.getElementById("ex").innerHTML='Delete selected item:<input type="submit" value="Delete">';
}
}


function copy(){
document.getElementById("ex").innerHTML='Copy selected item:<input type="Submit" value="Copy">';

}
function net(){
document.getElementById("ex").innerHTML='Enter URL to make copy:<input type="text" name="url" value="http://example.org"/><input type="hidden" name="dd" value="<?php echo $_GET["dir"]; ?>" /><br>Save as: <?php echo $_GET["dir"]; ?>/<input type="text" name="d" value="example.html"/><input type="Submit" value="Copy">';

}
function move(){
document.getElementById("ex").innerHTML='Move selected item<input type="Submit" value="Move">';

}
function rename(){
document.getElementById("ex").innerHTML='New name:<input type="text" name="d" value="example.txt"/><input type="hidden" name="dd" value="<?php echo $_GET["dir"]; ?>" /><input type="Submit" value="Rename">';

}

function zip(){
document.getElementById("ex").innerHTML='<input type="hidden" name="dd" value="<?php echo $_GET["dir"]; ?>" />New zip file name:<input type="text" name="d" value="example.zip"/><input type="Submit" value="ZIP">';

}

function unzip(){
document.getElementById("ex").innerHTML='<input type="hidden" name="d" value="<?php echo $_GET["dir"]; ?>" />Create a new directory where the zip will extract:<input type="text" name="dd"  /><input type="Submit" value="Unzip">';

}
function down(){
document.getElementById("ex").innerHTML='Download as file(for single file selection) or <br>Download as zip(for many item or single folder selection):<br><input type="Submit" value="Download">';

}

function md(){
document.getElementById("ex").innerHTML='New Name:<input type="text" name="d" /><input type="hidden" name="dd" value="<?php echo $_GET["dir"]; ?>" /><input type="Submit" value="Create">';

}

function oonclick(vll) {
  if(vll=="upload"){up();}
  if(vll=="del"){del();}
  if(vll=="md"){md();}
    if(vll=="mf"){md();}
  if(vll=="copy"){copy();}
  if(vll=="rename"){rename();}
  if(vll=="move"){move();}
  if(vll=="zip"){zip();}
  if(vll=="unzip"){unzip();}
  if(vll=="down"){down();}
  if(vll=="net"){net();}
if(vll=="---"){document.getElementById("ex").innerHTML="";}
if(vll=="copyp"){copyp();}
if(vll=="copym"){copym();}
}
function dclick(loc,dat,size=null,mim=null) {
  if(size!=null&&size!=null){
  alert("Location from home: "+loc+"\nDate modified: "+dat+"\nSize: "+size+"\nMIME type: "+mim);}else{
    alert("Location from home: "+loc+"\nDate modified: "+dat);
  }

}

</script>

</div><form method="post">
  <input type="submit" name="out" value="LogOut">

</form><form method="post"><input type="hidden" name="gds" value="<?php echo $_GET["dir"]; ?>" /><input type="submit" value="Get disk size info"></form><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
</form><?php for ($i=0; $i <50 ; $i++) {
  echo "<br>";
} ?>

  <script >
  const counter = document.querySelector('#counter');
  const ii=document.querySelectorAll('input[type="checkbox"]');
const foii=document.querySelectorAll('input[rafiz="fo"]');
const fiii=document.querySelectorAll('input[rafiz="fi"]');
  function change_checkboxes(l,v){
    for(var i=l.length-1;i>=0;i--){
      l[i].checked=(typeof v==='boolean')?v:!l[i].checked;
    }
    }
  function get_checkboxes(){
    var i=document.querySelectorAll('input[type="checkbox"]'),a=[];
    for(var j=i.length-1;j>=0;j--){
    if(i[j].type='checkbox'){a.push(i[j]);}  }
      return a;
    }
    function c_c(){
  var qcfo=0,qcfi=0;
  for(var q=0; q<foii.length; q++){
  if(foii[q].checked)qcfo++;
  }
  for(var q=0; q<fiii.length; q++){
  if(fiii[q].checked)qcfi++;
  }
var qctol=(qcfo+qcfi);

  counter.innerHTML = "Item selected="+qctol+";\rFolder="+qcfo+";\rFile="+qcfi+"<br>";}
  var diss=true;
  function select_all(){var l=get_checkboxes();change_checkboxes(l,diss);(diss==false)?diss=true:diss=false;c_c();}

  function invert_all(){var l=get_checkboxes();change_checkboxes(l); c_c();}
  for(var q=0; q<ii.length; q++){
  ii[q].addEventListener('click', c_c);
  }
  </script>
</body></html>
