<?
$subject_val = "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 11:39:58 2008" -->
<!-- isoreceived="20081031153958" -->
<!-- sent="Fri, 31 Oct 2008 11:39:54 -0400" -->
<!-- isosent="20081031153954" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)" -->
<!-- id="ea86ce220810310839n41c0b441s4c055a293d745df9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="28C1F0F3-204A-4333-9928-D27F8CFA6238_at_cisco.com" -->
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
<strong>Date:</strong> 2008-10-31 11:39:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0639.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Previous message:</strong> <a href="0637.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>In reply to:</strong> <a href="0637.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0639.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Reply:</strong> <a href="0639.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The new version of whatami is what broke sles9.  That new version assumes
<br>
that if an /etc/lsb-release file exists that it has info about what
<br>
distribution it is.
<br>
SLES seems to only put in what LSB it conforms to (the LSB_VERSION
<br>
environment variable).
<br>
Whatami should check if it got all the info it needs from the lsb-release file,
<br>
and if not, fall back to something else that worked before.
<br>
<p>I just reverted the whatami I am using on BigRed to MTT's r1236 and it works
<br>
again.  No rush to fix this for me, but it is bad that whatami seems to now
<br>
be broken for two major SLES releases (9 &amp; 10).
<br>
<p>On Fri, Oct 31, 2008 at 11:29 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Which patch broke BigRed -- Ethan's patch, or Brian's original new version
</span><br>
<span class="quotelev1">&gt; of whatami?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2008, at 11:20 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This change also broke whatami for sles9 (which happens to be what our
</span><br>
<span class="quotelev2">&gt;&gt; BigRed
</span><br>
<span class="quotelev2">&gt;&gt; PPC cluster is running).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2008/10/30 Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using your &quot;whatami&quot; in the MPI Testing Tool (MTT), but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think a recent change to it broke for our sles10 system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have an lsb-release file that is different from what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;whatami&quot; expects:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat /etc/lsb-release
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LSB_VERSION=&quot;core-2.0-noarch:core-3.0-noarch:core-2.0-x86_64:core-3.0-x86_64&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux burl-ct-v20z-6 2.6.16.46-0.12-smp #1 SMP Thu May 17 14:00:09 UTC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attached a patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethan
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
<li><strong>Next message:</strong> <a href="0639.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Previous message:</strong> <a href="0637.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>In reply to:</strong> <a href="0637.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0639.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Reply:</strong> <a href="0639.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
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
