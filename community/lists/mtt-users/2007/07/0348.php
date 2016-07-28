<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 10:22:23 2007" -->
<!-- isoreceived="20070709142223" -->
<!-- sent="Mon, 9 Jul 2007 10:21:29 -0400" -->
<!-- isosent="20070709142129" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Database insert errors" -->
<!-- id="20070709142128.GA30255_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46923308.4050609_at_cs.indiana.edu" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 10:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0349.php">Tim Prins: "[MTT users] Textfile Reporter"</a>
<li><strong>Previous message:</strong> <a href="0347.php">Tim Prins: "Re: [MTT users] Database insert errors"</a>
<li><strong>In reply to:</strong> <a href="0347.php">Tim Prins: "Re: [MTT users] Database insert errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think so, because I see the same errors from sites
<br>
using the latest MTT version. 
<br>
<p>-Ethan
<br>
<p><p>On Mon, Jul/09/2007 09:07:20AM, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Could these errors have to do with the fact that we are running MTT 
</span><br>
<span class="quotelev1">&gt; v2.0.1, and not the latest version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Tim,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I see some of these FOREIGN KEY constraint errors every
</span><br>
<span class="quotelev2">&gt; &gt; night. There's a system of speedy and archive tables to keep
</span><br>
<span class="quotelev2">&gt; &gt; short-term queries fast, but it has bugs. There are rows in
</span><br>
<span class="quotelev2">&gt; &gt; the archive tables that should be mirrored in the speedy
</span><br>
<span class="quotelev2">&gt; &gt; tables, but this is not always the case. We (well, mostly
</span><br>
<span class="quotelev2">&gt; &gt; Josh) are working on an improved system of &quot;partitioning&quot;
</span><br>
<span class="quotelev2">&gt; &gt; the huge Postgres tables to keep queries fast which will
</span><br>
<span class="quotelev2">&gt; &gt; hopefully also resolve these referential integrity problems.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sun, Jul/01/2007 09:37:17PM, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Folks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For a while now we have been getting errors when MTT tries to submit its test 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; results to the database. The weird thing is that it only happens on our 1.2 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; runs, not our trunk runs. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is the first few lines of the error output:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** WARNING: MTTDatabase server notice: fields is not in mtt3 database.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MTTDatabase server notice: test_build_section_name is not in mtt3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     database.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MTTDatabase server notice: mpi_install_section_name is not in mtt3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     database.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MTTDatabase server notice: mtt_version_minor is not in mtt3 database.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MTTDatabase server notice: stop_timestamp is not in mtt3 database.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MTTDatabase server notice: mtt_version_major is not in mtt3 database.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MTTDatabase server notice: number_of_results is not in mtt3 database.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MTTDatabase server notice: test_run_section_name is not in mtt3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     database.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MTT submission for test run
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MTTDatabase server error:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     SQL QUERY:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              INSERT INTO speedy_test_run
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              (np,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             variant,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             test_build_id,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             command,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             test_name,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             test_run_id)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              VALUES
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              ('8',
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             '1',
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             '20809',
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             'mpirun  -mca pml ob1 -mca btl_tcp_if_include eth0 -mca btl
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     tcp,sm,self -np 8 --prefix
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     /san/homedirs/mpiteam/mtt-runs/thor/20070630-Nightly/pb_0/installs/k1mL
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     /install collective/allgather ',
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             'allgather',
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             '14517807')
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     SQL ERROR: ERROR:  insert or update on table &quot;speedy_test_run&quot; violates
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     foreign key constraint &quot;$1&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     DETAIL:  Key (test_build_id)=(20809) is not present in table
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     &quot;speedy_test_build&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Another strange thing is that the output says that the build information and 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; some test results have been submitted, but I do not see them in the reporter. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any ideas?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0349.php">Tim Prins: "[MTT users] Textfile Reporter"</a>
<li><strong>Previous message:</strong> <a href="0347.php">Tim Prins: "Re: [MTT users] Database insert errors"</a>
<li><strong>In reply to:</strong> <a href="0347.php">Tim Prins: "Re: [MTT users] Database insert errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
