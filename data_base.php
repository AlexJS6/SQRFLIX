<?php
/*server version */

/*try {
    $DB = new PDO('mysql:host=sql301.epizy.com;dbname=sepiz_26653823_SQRFLIX;charset=utf8', 'epiz_26653823', 'N6ZTCmkO4B9', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
  }
  catch (Exception $e)
  {
    die ('Erreur ' . $e->getMessage());
  }*/

/* local host version */

  try {
    $DB = new PDO('mysql:host=localhost;dbname=sqrflix;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
  }
  catch (Exception $e)
  {
    die('Erreur ' . $e->getMessage());
  }

?>