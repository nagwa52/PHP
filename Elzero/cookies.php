<?php
//-----------------------------------------------------------------------------------
// setcookie(name,value,expired,path,domain,secure,httponly)
//-----------------------------------------------------------------------------------
  
setcookie("website","test", time() + 3600,"/");
if(count($_COOKIE)>0){
    echo "yes cookie is enabled";
}
else{
    echo "yes cookie is not enabled";  
}
?>