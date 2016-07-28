<?
$subject_val = "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 11:57:11 2008" -->
<!-- isoreceived="20081031155711" -->
<!-- sent="Fri, 31 Oct 2008 11:57:06 -0400" -->
<!-- isosent="20081031155706" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)" -->
<!-- id="ea86ce220810310857j655e4b02t249abc245c6d9b31_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="66F4B14C-5D3E-43E3-BE78-08A664AC9935_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 11:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0641.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Previous message:</strong> <a href="0639.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>In reply to:</strong> <a href="0639.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0641.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Reply:</strong> <a href="0641.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about that, I missed that Ethan had supplied a workaround patch.  Oops.
<br>
Ethan's patch works for me on sles9.
<br>
<p>On Fri, Oct 31, 2008 at 11:42 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Ok.  Does Ethan's patch work for you, or should we just revert to our prior
</span><br>
<span class="quotelev1">&gt; version until upstream is fixed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2008, at 11:39 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The new version of whatami is what broke sles9.  That new version assumes
</span><br>
<span class="quotelev2">&gt;&gt; that if an /etc/lsb-release file exists that it has info about what
</span><br>
<span class="quotelev2">&gt;&gt; distribution it is.
</span><br>
<span class="quotelev2">&gt;&gt; SLES seems to only put in what LSB it conforms to (the LSB_VERSION
</span><br>
<span class="quotelev2">&gt;&gt; environment variable).
</span><br>
<span class="quotelev2">&gt;&gt; Whatami should check if it got all the info it needs from the lsb-release
</span><br>
<span class="quotelev2">&gt;&gt; file,
</span><br>
<span class="quotelev2">&gt;&gt; and if not, fall back to something else that worked before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just reverted the whatami I am using on BigRed to MTT's r1236 and it
</span><br>
<span class="quotelev2">&gt;&gt; works
</span><br>
<span class="quotelev2">&gt;&gt; again.  No rush to fix this for me, but it is bad that whatami seems to
</span><br>
<span class="quotelev2">&gt;&gt; now
</span><br>
<span class="quotelev2">&gt;&gt; be broken for two major SLES releases (9 &amp; 10).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Oct 31, 2008 at 11:29 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which patch broke BigRed -- Ethan's patch, or Brian's original new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of whatami?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 31, 2008, at 11:20 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This change also broke whatami for sles9 (which happens to be what our
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BigRed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PPC cluster is running).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2008/10/30 Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm using your &quot;whatami&quot; in the MPI Testing Tool (MTT), but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think a recent change to it broke for our sles10 system.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We have an lsb-release file that is different from what
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;whatami&quot; expects:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ cat /etc/lsb-release
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LSB_VERSION=&quot;core-2.0-noarch:core-3.0-noarch:core-2.0-x86_64:core-3.0-x86_64&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Linux burl-ct-v20z-6 2.6.16.46-0.12-smp #1 SMP Thu May 17 14:00:09 UTC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I attached a patch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0641.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Previous message:</strong> <a href="0639.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>In reply to:</strong> <a href="0639.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0641.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Reply:</strong> <a href="0641.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
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
