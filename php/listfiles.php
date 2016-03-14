<?php
  /*
   * Explanation: this script lists all files in the directory, and its subfolders.
   *
   * Output: <full path filename>\t<file size>\t<last modification epoch time>\n
   *
   */
function listInDir($dirName) {

	$dir = new DirectoryIterator($dirName);

	foreach ($dir as $fileinfo) {
		if (!$fileinfo->isDot()) {
			if($fileinfo->isDir()) {
				listInDir($fileinfo->getPathname());
			}
			else {
				echoFileData($fileinfo);
			}
		}
	}
}

function echoFileData($fileInfo) {
	echo $fileInfo->getPathname()."\t".$fileInfo->getSize()."\t".$fileInfo->getMTime()."\n";
}

listInDir(dirname(__FILE__));
?>