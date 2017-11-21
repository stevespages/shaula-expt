<?php
/*
 * /views/admin/admin-navigation.php
 */
 
$admin_navigation = "
	<nav id='admin-navigation'>
	 <a href='index.php'>Shaula home</a>
    <a href='admin.php?page=home'>Admin home</a>
    <a href='admin.php?page=upload-log'>Upload log</a>
    <a href='admin.php?page=upload-document'>Upload document</a>
    <a href='admin.php?page=upload-manual'>Upload manual</a>
    <a href='admin.php?page=edit-logs'>View and edit logs</a>
    <a href='admin.php?page=edit-documents'>View and edit documents</a>
    <a href='admin.php?page=edit-manuals'>View and edit manuals</a>
	</nav>
";

return $admin_navigation;