<?
$subject_val = "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 10:14:44 2008" -->
<!-- isoreceived="20080513141444" -->
<!-- sent="Tue, 13 May 2008 10:14:32 -0400" -->
<!-- isosent="20080513141432" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple" -->
<!-- id="27D7ADD6-EA42-4A41-8C76-3B7AD8A8DB1E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080513135930.GW51303_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 10:14:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Rafael Folco: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0548.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0547.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0550.php">Rafael Folco: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0550.php">Rafael Folco: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan -- are you referring to the sample INI file on the core-testers  
<br>
branch?
<br>
<p><p>On May 13, 2008, at 9:59 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Are you running on the ompi-core-testers branch? I think I
</span><br>
<span class="quotelev1">&gt; see a typo in the INI file. &quot;specify_module&quot; is defined
</span><br>
<span class="quotelev1">&gt; twice. Could you try deleting one of the &quot;specify_module&quot;
</span><br>
<span class="quotelev1">&gt; lines, and commit the change if it solves your problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  specify_module = Simple
</span><br>
<span class="quotelev1">&gt;  simple_pass:tests = &amp;cat(&quot;run_list&quot;)
</span><br>
<span class="quotelev1">&gt;  specify_module = Simple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May/13/2008 02:58:21PM, Wen Hao Wang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Hi Ethan, Thanks for your answer!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I run client/mtt with debug model, and found mtt script exited in
</span><br>
<span class="quotelev2">&gt;&gt;   following code section of lib/MTT/Module.pm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   32 my $str = &quot;require $module&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;   33 Debug(&quot;Evaluating: $str\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;   34 my $check = eval $str;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   When require error occured, $str was set to  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MTT::Test::Specify::Simple
</span><br>
<span class="quotelev2">&gt;&gt;   Simple&quot;. This is not a valid Perl module, so mtt failed. I had no  
</span><br>
<span class="quotelev2">&gt;&gt; time to
</span><br>
<span class="quotelev2">&gt;&gt;   probe why/where such value was got. I just modified Module.pm to  
</span><br>
<span class="quotelev2">&gt;&gt; work
</span><br>
<span class="quotelev2">&gt;&gt;   around the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   [root_at_host MTT]# !diff
</span><br>
<span class="quotelev2">&gt;&gt;   diff primary/Module.pm ./lib/MTT/Module.pm
</span><br>
<span class="quotelev2">&gt;&gt;   31a32,38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if ($module =~ m/Simple/)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (length($module) &gt; 26)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ($module) = $module =~ m/(.*::Simple)/;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   With this workaround, $str was changed back to
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;MTT::Test::Specify::Simple&quot;, and mtt script could continue. Ater  
</span><br>
<span class="quotelev2">&gt;&gt; all the
</span><br>
<span class="quotelev2">&gt;&gt;   tests finished, I found some MTT cases failed. For those failed  
</span><br>
<span class="quotelev2">&gt;&gt; cases, who
</span><br>
<span class="quotelev2">&gt;&gt;   will probe it? Or how can I probe them? Here list one section that
</span><br>
<span class="quotelev2">&gt;&gt;   returned error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   | command | mpirun -np 2 --mca btl tcp,self --prefix
</span><br>
<span class="quotelev2">&gt;&gt;   /LTC/MTT/installs/Urs4/install |
</span><br>
<span class="quotelev2">&gt;&gt;   | | t_win |
</span><br>
<span class="quotelev2">&gt;&gt;   | duration | 0 seconds |
</span><br>
<span class="quotelev2">&gt;&gt;   | exit_value | 1 |
</span><br>
<span class="quotelev2">&gt;&gt;   | result_message | Failed; exit status: 1 |
</span><br>
<span class="quotelev2">&gt;&gt;   | result_stdout | WIN_BASIC: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | WIN_OVERLAP: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | WIN_OVERLAP2: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | WIN_OVERLAP3: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | LOCK_EPOCH: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | FENCE_EPOCH: failed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | MISC: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | POST_EPOCH: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | WIN_BASIC: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | WIN_OVERLAP: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | WIN_OVERLAP2: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | WIN_OVERLAP3: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | LOCK_EPOCH: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | FENCE_EPOCH: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | MISC: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | POST_EPOCH: passed |
</span><br>
<span class="quotelev2">&gt;&gt;   | | t_win: FAILED 1 |
</span><br>
<span class="quotelev2">&gt;&gt;   | start_timestamp | Tue May 13 04:54:59 2008 |
</span><br>
<span class="quotelev2">&gt;&gt;   | test_name | t_win |
</span><br>
<span class="quotelev2">&gt;&gt;   | variant | 2 |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Wen Hao Wang (******)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt;   IBM China Software Development Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;   Email: wangwhao_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   Tel: 86-10-82451055
</span><br>
<span class="quotelev2">&gt;&gt;   Fax: 86-10-82782244 ext. 2312
</span><br>
<span class="quotelev2">&gt;&gt;   Address: 5/F, Deshi Building, No.9 East Road Shangdi, Haidian  
</span><br>
<span class="quotelev2">&gt;&gt; District,
</span><br>
<span class="quotelev2">&gt;&gt;   Beijing, 100085, P.R.China
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Inactive hide details for Ethan Mallove  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ethan.mallove_at_[hidden]&gt;Ethan
</span><br>
<span class="quotelev2">&gt;&gt;   Mallove &lt;ethan.mallove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Ethan Mallove                       To General user  
</span><br>
<span class="quotelev2">&gt;&gt; list for the
</span><br>
<span class="quotelev2">&gt;&gt;              &lt;ethan.mallove_at_[hidden]&gt;                MPI Testing Tool
</span><br>
<span class="quotelev2">&gt;&gt;              Sent by:                               &lt;mtt-users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;              mtt-users-bounces_at_[hidden]      cc Brad Benton
</span><br>
<span class="quotelev2">&gt;&gt;                                                     &lt;brad.benton_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;              2008-05-12 22:33               Subject Re: [MTT users]  
</span><br>
<span class="quotelev2">&gt;&gt; MTT fail
</span><br>
<span class="quotelev2">&gt;&gt;                                                     to require
</span><br>
<span class="quotelev2">&gt;&gt;              +----------------------------+          
</span><br>
<span class="quotelev2">&gt;&gt; MTT::Test::Specify::Simple
</span><br>
<span class="quotelev2">&gt;&gt;              |     Please respond to      |
</span><br>
<span class="quotelev2">&gt;&gt;              | General user list for the  |
</span><br>
<span class="quotelev2">&gt;&gt;              |      MPI Testing Tool      |
</span><br>
<span class="quotelev2">&gt;&gt;              |  &lt;mtt-users_at_[hidden]&gt;  |
</span><br>
<span class="quotelev2">&gt;&gt;              +----------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   It is odd that a &quot;require&quot; failed like this in the Test Run
</span><br>
<span class="quotelev2">&gt;&gt;   phase. I would have expected an earlier &quot;require&quot; to fail
</span><br>
<span class="quotelev2">&gt;&gt;   (e.g., in the MPI Install phase). I've never run MTT as root
</span><br>
<span class="quotelev2">&gt;&gt;   before. Does root have read-access to Specify/Simple.pm? If
</span><br>
<span class="quotelev2">&gt;&gt;   not, can you do the below command in the top-level MTT
</span><br>
<span class="quotelev2">&gt;&gt;   directory?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    $ chmod -R a+r ./lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   FWIW, I was able to get a simple &quot;require&quot; to fail by
</span><br>
<span class="quotelev2">&gt;&gt;   tweaking read permissions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    $ echo &quot;package Foo; 1;&quot; &gt; Foo.pm
</span><br>
<span class="quotelev2">&gt;&gt;    $ perl -e 'require Foo;'
</span><br>
<span class="quotelev2">&gt;&gt;    $ ls -l Foo.pm
</span><br>
<span class="quotelev2">&gt;&gt;    -rw-r--r--    1 em162155 staff 16 May 12 10:29 Foo.pm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Remove read permissions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    $ chmod a-r Foo.pm
</span><br>
<span class="quotelev2">&gt;&gt;    Can't locate Foo.pm in @INC (@INC contains:
</span><br>
<span class="quotelev2">&gt;&gt;   /ws/ompi-tools/lib/perl5/5.8.8 /usr/perl5/5.8.4/lib/sun4- 
</span><br>
<span class="quotelev2">&gt;&gt; solaris-64int
</span><br>
<span class="quotelev2">&gt;&gt;   /usr/perl5/5.8.4/lib /usr/perl5/site_perl/5.8.4/sun4-solaris-64int
</span><br>
<span class="quotelev2">&gt;&gt;   /usr/perl5/site_perl/5.8.4 /usr/perl5/site_perl
</span><br>
<span class="quotelev2">&gt;&gt;   /usr/perl5/vendor_perl/5.8.4/sun4-solaris-64int
</span><br>
<span class="quotelev2">&gt;&gt;   /usr/perl5/vendor_perl/5.8.4 /usr/perl5/vendor_perl .) at -e line  
</span><br>
<span class="quotelev2">&gt;&gt; 1.
</span><br>
<span class="quotelev2">&gt;&gt;    BEGIN failed--compilation aborted at -e line 1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   On Sun, May/11/2008 02:57:15PM, Wen Hao Wang wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Hi all:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I run MTT on RHEL5.2 Server of x86_32 arch. Only four lines were
</span><br>
<span class="quotelev2">&gt;&gt;   changed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   in the samples/ompi-core-template.ini:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        #mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mttdatabase_username = &lt;my_user&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mttdatabase_password = &lt;my_password&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mttdatabase_platform = &lt;my_platform&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   The script run for about one hour and aborted, saying error to
</span><br>
<span class="quotelev2">&gt;&gt;   require
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MTT::Test::Specify::Simple. Does anyone have comments? Thanks in
</span><br>
<span class="quotelev2">&gt;&gt;   advance!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Moreover, does MTT has log for its execution?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [root_at_valiant MTT]# client/mtt --trial -d --force -f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   samples/ompi-core-template.ini
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Running with [ompi-nightly-v1.2] / [1.2.7a0r18267] / [gcc
</span><br>
<span class="quotelev2">&gt;&gt;   warnings]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Found MPI details: [mpi details: open mpi]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Using [mpi details: open mpi] with [MPI Install: gcc warnings]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Evaluating: # We can exit if the test passed or was skipped (i.e.,
</span><br>
<span class="quotelev2">&gt;&gt;   there's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   no need
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   # to cleanup).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;$MTT_TEST_RUN_RESULT&quot; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;skipped&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   exit 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Got final exec: mpirun &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;&amp;hostfile()&quot;)&quot;, &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;&amp;hostlist()&quot;)&quot;, &quot;&quot;)&quot;) -np &amp;test_np() &amp;enumerate( &quot;--mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   sm,tcp,self&amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;), &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --mca btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;, &quot;--mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   tcp,self&amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;), &quot; --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;) --prefix &amp;test_prefix()
</span><br>
<span class="quotelev2">&gt;&gt;   &amp;test_executable()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &amp;test_argv()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   chdir /LTC/MTT/installs/AYrM/tests/onesided/onesided
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Evaluating: require MTT::Test::Specify::Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *** ERROR: Module aborted during require:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTT::Test::Specify::Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Simple: syntax error at (eval 45608) line 4, near &quot;require
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MTT::Test::Specify::Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [root_at_valiant MTT]# echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   25
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [root_at_valiant MTT]# find . -name Simple.pm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ./lib/MTT/Test/Specify/Simple.pm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Wen Hao Wang
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Email: wangwhao_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; References
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Visible links
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   . <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;   mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;   mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; References
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Visible links
</span><br>
<span class="quotelev2">&gt;&gt;   . <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt;   . <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt;   . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;   . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Rafael Folco: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0548.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0547.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0550.php">Rafael Folco: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0550.php">Rafael Folco: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
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
