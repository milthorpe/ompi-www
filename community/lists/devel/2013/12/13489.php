<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 12:01:15 2013" -->
<!-- isoreceived="20131219170115" -->
<!-- sent="Thu, 19 Dec 2013 17:01:13 +0000" -->
<!-- isosent="20131219170113" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter" -->
<!-- id="3B7F28EF-80FF-43CB-8132-A1763DD625C2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CED85231.1671A%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 12:01:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13490.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>In reply to:</strong> <a href="13484.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13492.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>Reply:</strong> <a href="13492.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think there's no problem with removing them from the dll code -- that stuff doesn't affect MPI application ABI.
<br>
<p><p>On Dec 19, 2013, at 9:42 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Someone who understands the mpi debugging handles code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The opal_progress_recursion_depth_counter and opal_progress_thread_counter
</span><br>
<span class="quotelev1">&gt; are both only used internally in opal_progress (for book keeping, but
</span><br>
<span class="quotelev1">&gt; never any decisions) and are declared in ompi_mpihandles_dll.c, but then
</span><br>
<span class="quotelev1">&gt; don't appear to be used.  Is there a disadvantage to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) removing them from mpihandles_dll.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or, if that breaks ABI,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) Leaving them, but not doing the bookkeeping?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's fairly heavyweight bookkeeping, so I agree with Nathan, I'd like to
</span><br>
<span class="quotelev1">&gt; remove it.  But I'd like to remove it pre-1.7.4.  Which means today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/18/13 4:40 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Opps, yeah. Meant 1.7.5. If people agree with this change I could
</span><br>
<span class="quotelev2">&gt;&gt; possibly slip it in before Friday but that is unlikely.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 18, 2013 at 03:32:36PM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ummmm....1.7.4 is leaving the station on Fri, Nathan, so next Tues =&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will have to go into 1.7.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 18, 2013, at 3:23 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What: Remove the opal_progress_recursion_depth_counter from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_progress.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why: This counter adds two atomic adds to the critical path when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL_HAVE_THREADS is set (which is the case for most builds). I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grepped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; through ompi, orte, and opal to find where this value was being used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did not find anything either inside or outside opal_progress.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When: I want this change to go into 1.7.4 (if possible) so setting a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; quick timeout for next Tuesday.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me know if there is a good reason to keep this counter and it will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be spared.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPC-5, LANL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13490.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>In reply to:</strong> <a href="13484.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13492.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>Reply:</strong> <a href="13492.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
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
