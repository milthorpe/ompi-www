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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2014/03/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2014/05/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/index.php">List of Folders</a></th></tr>
</table>
</div>
<div class="center">
<table>
<tr>
<th colspan="4">4 Messages</th>
</tr>
<tr>
  <th>Starting:</th><td><em>2006-02-11 10:54:01</em></td>
  <th>Ending:</th><td><em>2016-07-27 12:01:36</em></td>
</tr>
</table>
</div>
<hr>
<ul>
<li><strong>[MTT users] Account request</strong>
<ul><li><a href="0796.php">Jeff Squyres (jsquyres)</a> <a name="796"><em>(2014-04-15 08:47:07)</em></a></li></ul>
<ul><li><a href="0795.php">Gilles Gouaillardet</a> <a name="795"><em>(2014-04-15 02:03:01)</em></a></li></ul>
<li><strong>[MTT users] mpirun problem</strong>
<ul><li><a href="0794.php">Jeff Squyres (jsquyres)</a> <a name="794"><em>(2014-04-08 09:03:41)</em></a></li></ul>
<ul><li><a href="0793.php">tesfaye mamuye</a> <a name="793"><em>(2014-04-07 13:14:00)</em></a></li></ul>
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
</tr><tr><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2014/03/subject.php">Previous Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/2014/05/subject.php">Next Folder, Subject view</a></th><th><a href="http://www.open-mpi.org/community/lists/mtt-users/index.php">List of Folders</a></th></tr>
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
