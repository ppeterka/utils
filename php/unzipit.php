<?php 
  /*
   * Explanation: this script extracts "g.zip" to the local folder.
   *
   * Useful for quick installation of CMS frameworks - don't have to wait
   * ages to upload all files one by one. 
   *
   * Possible side effect: user permissions can be problematic 
   * if the FTP user and the web user are different!!!
   */
  $zip = new ZipArchive;
  $res = $zip->open('g.zip');
  if ($res === TRUE) {
    $zip->extractTo('.');
    $zip->close();
    echo 'woot!';
  } else {
    echo 'doh!';
  }
  echo "<br/>donez!";
?>
