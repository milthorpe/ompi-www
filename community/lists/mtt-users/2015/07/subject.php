<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    include("../../include/index-header.inc");
} else {
    include("include/index-header.inc");
}
?>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2014/11/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2015/12/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">2 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2006-02-11 10:54:01</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:36</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[MTT users] Apply for an ompi-tests username/password</strong>
<ul><li><a href="0830.php">Ralph Castain</a> <a name="830"><em>(2015-07-14 12:34:14)</em></a></li></ul>
<ul><li><a href="0829.php">Zhi Ming BJ Wang</a> <a name="829"><em>(2015-07-14 02:57:33)</em></a></li></ul>
</ul>
<hr>
<div class="center">
<table>
<tr><th><a name="end">Last message date: </a></th><td><em>2016-07-27 12:01:36</em></td>
<th>Archived on: </th><td><em>2016-07-27 12:01:41 EDT</em></td>
</table>
</div>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="author.php">Author view</a></th>
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2014/11/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2015/12/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/index.php">List of Folders</a></th></tr>
</table>
</div>
<!-- trailer="footer" -->
<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER{'REQUEST_URI'})) {
    include("../../include/index-footer.inc");
} else {
    include("include/index-footer.inc");
}
?>
