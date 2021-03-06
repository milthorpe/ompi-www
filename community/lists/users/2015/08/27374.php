<?
$subject_val = "Re: [OMPI users] having an issue with paralleling jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 07:43:53 2015" -->
<!-- isoreceived="20150802114353" -->
<!-- sent="Sun, 2 Aug 2015 11:43:49 +0000" -->
<!-- isosent="20150802114349" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] having an issue with paralleling jobs" -->
<!-- id="54AAFB33-9B6E-49B3-A5C8-7AC09A554274_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+DemH_zECmYJhVWg5WKMCnOoz7G_VwGEejmEumybk=OnAZU6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] having an issue with paralleling jobs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-02 07:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27375.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27373.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27372.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Abhisek --
<br>
<p>You are having two problems:
<br>
<p>1. In the first &quot;orted not found&quot; problem, Open MPI was not finding its &quot;orted&quot; helper executable on the remote nodes in your cluster.  When you &quot;module load ...&quot; something, it just loads the relevant PATH / LD_LIBRARY_PATH / etc. on the local node; it doesn't do anything for the remote nodes on which you execute.
<br>
<p>Gilles suggested a good workaround: use the full path name to Open MPI's mpirun.  This tells Open MPI &quot;hey, please be sure to load up the PATH / LD_LIBRARY_PATH with the Right Stuff to find Open MPI's executables on the remote nodes.&quot;
<br>
<p>2. The second problem is that Open MPI is not finding the nwchem executable on at least the specified node in your cluster (i.e., cx934).  Perhaps something is wrong with the network filesystem on cx934...?  You might want to login to that node interactively and check.
<br>
<p><p><p><span class="quotelev1">&gt; On Aug 2, 2015, at 7:32 AM, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt; I have tried using full paths for both of them. But stuck in the same issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 2, 2015 at 4:39 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Is ompi installed on the other node and at the same location ?
</span><br>
<span class="quotelev1">&gt; did you configure ompi with --enable-mpirun-prefix-by-default ?
</span><br>
<span class="quotelev1">&gt; (note that should not be necessary if you invoke mpirun with full path )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you can also try
</span><br>
<span class="quotelev1">&gt; /.../bin/mpirun --mca plm_base_verbose 100 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and see if there is something wrong
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; last but not least, can you try to use full path for both mpirun and nwchem ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sunday, August 2, 2015, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yes, I have tried this and got following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not find an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: nwchem
</span><br>
<span class="quotelev1">&gt; Node: cx934
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 16.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that: I have to run my code with &quot;nwchem filename.nw&quot; command. 
</span><br>
<span class="quotelev1">&gt; While I run the same thing on 1 node with 16 processor, it works fine (mpirun -np 16 nwchem filename.nw). 
</span><br>
<span class="quotelev1">&gt; Can't understand why am I having problem while trying to go for multinode operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 2, 2015 at 3:41 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Can you try running invoking mpirun with its full path instead ?
</span><br>
<span class="quotelev1">&gt; e.g. /usr/local/bin/mpirun instead of mpirun 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sunday, August 2, 2015, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Here is the other details,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a. The Openmpi version is 1.6.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b. The error as being generated is :
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'cx0937,10.1.4.1' (RSA) to the list of known hosts.
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'cx0934,10.1.3.255' (RSA) to the list of known hosts.
</span><br>
<span class="quotelev1">&gt; orted: Command not found.
</span><br>
<span class="quotelev1">&gt; orted: Command not found.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 53580) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not being able to understand why &quot;command not found&quot; error is being raised.
</span><br>
<span class="quotelev1">&gt; Thank you. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 2, 2015 at 1:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Would you please tell us:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) what version of OMPI you are using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) what error message you are getting when the job terminates
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 1, 2015, at 12:22 PM, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm working on an openmpi enabled cluster. I'm trying to run a job with 2 different nodes and 16 processors per nodes.
</span><br>
<span class="quotelev2">&gt;&gt; Using this command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 32 --hostfile myhostfile -loadbalance exe
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The contents of myhostfile:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cx0937 slots=16    
</span><br>
<span class="quotelev2">&gt;&gt; cx0934 slots=16
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But the job is getting terminated each time before job allocation happens as per desired way.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, it'll very nice if I get some suggestions regarding the facts I'm missing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Abhisek Mondal
</span><br>
<span class="quotelev2">&gt;&gt; Research Fellow
</span><br>
<span class="quotelev2">&gt;&gt; Structural Biology and Bioinformatics
</span><br>
<span class="quotelev2">&gt;&gt; Indian Institute of Chemical Biology
</span><br>
<span class="quotelev2">&gt;&gt; Kolkata 700032
</span><br>
<span class="quotelev2">&gt;&gt; INDIA
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27367.php">http://www.open-mpi.org/community/lists/users/2015/08/27367.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27367.php">http://www.open-mpi.org/community/lists/users/2015/08/27367.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Abhisek Mondal
</span><br>
<span class="quotelev1">&gt; Research Fellow
</span><br>
<span class="quotelev1">&gt; Structural Biology and Bioinformatics
</span><br>
<span class="quotelev1">&gt; Indian Institute of Chemical Biology
</span><br>
<span class="quotelev1">&gt; Kolkata 700032
</span><br>
<span class="quotelev1">&gt; INDIA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27369.php">http://www.open-mpi.org/community/lists/users/2015/08/27369.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Abhisek Mondal
</span><br>
<span class="quotelev1">&gt; Research Fellow
</span><br>
<span class="quotelev1">&gt; Structural Biology and Bioinformatics
</span><br>
<span class="quotelev1">&gt; Indian Institute of Chemical Biology
</span><br>
<span class="quotelev1">&gt; Kolkata 700032
</span><br>
<span class="quotelev1">&gt; INDIA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27371.php">http://www.open-mpi.org/community/lists/users/2015/08/27371.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Abhisek Mondal
</span><br>
<span class="quotelev1">&gt; Research Fellow
</span><br>
<span class="quotelev1">&gt; Structural Biology and Bioinformatics
</span><br>
<span class="quotelev1">&gt; Indian Institute of Chemical Biology
</span><br>
<span class="quotelev1">&gt; Kolkata 700032
</span><br>
<span class="quotelev1">&gt; INDIA
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27372.php">http://www.open-mpi.org/community/lists/users/2015/08/27372.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27375.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27373.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27372.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
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
