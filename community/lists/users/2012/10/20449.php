<?
$subject_val = "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 09:23:37 2012" -->
<!-- isoreceived="20121010132337" -->
<!-- sent="Wed, 10 Oct 2012 16:23:32 +0300" -->
<!-- isosent="20121010132332" -->
<!-- name="Thomas Evangelidis" -->
<!-- email="tevang3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined reference to `__intel_sse2_strlen'" -->
<!-- id="CAACvdx1wBNmGhxq6TiwGd=TXYSnnj4Vv4VzdDJWf_E0fNBgwJQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1540369.WZH8xVTkKG_at_rico" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined reference to `__intel_sse2_strlen'<br>
<strong>From:</strong> Thomas Evangelidis (<em>tevang3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 09:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20450.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20448.php">Christoph Niethammer: "[OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>In reply to:</strong> <a href="20445.php">Matthias Jurenz: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies, I haven't searched in the FAQs before posting, just in the
<br>
mailing list. Indeed I needed to specify the CXX compiler. These are the
<br>
steps I followed to compile it:
<br>
<p>source /home/thomas/Programs/Intel_Compilers/bin/compilervars.sh intel64
<br>
./configure CC=icc CXX=icpc F77=ifort FC=ifort
<br>
make -j8
<br>
## since &quot;make install&quot; must be run with sudo, you must add the Intel
<br>
directories into the superuser environment variables
<br>
sudo bash
<br>
source /home/thomas/Programs/Intel_Compilers/bin/compilervars.sh intel64
<br>
make install
<br>
<p>Thomas
<br>
<p>On 10 October 2012 11:51, Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello Thomas,
</span><br>
<span class="quotelev1">&gt; this error typically occurs when different compiler suites used for
</span><br>
<span class="quotelev1">&gt; compiling
</span><br>
<span class="quotelev1">&gt; C/C++ mixed source code.
</span><br>
<span class="quotelev1">&gt; Please add CXX=icpc to your configure command in order to use a single
</span><br>
<span class="quotelev1">&gt; compiler
</span><br>
<span class="quotelev1">&gt; suite (=Intel) for compiling Open MPI. Otherwise, CXX is set to the default
</span><br>
<span class="quotelev1">&gt; compiler (=g++) which isn't suitable for linking objects generated by the
</span><br>
<span class="quotelev1">&gt; Intel compiler.
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 9, 2012, at 5:25 PM, Thomas Evangelidis wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to compile openmpi 1.6.2 on Fedora 17 64-bit using the intel
</span><br>
<span class="quotelev1">&gt; compilers (icc and ifort version 13.0.0) but I am getting an error which I
</span><br>
<span class="quotelev1">&gt; cannot trace back. These are the steps I followed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure CC=icc F77=ifort
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; ........
</span><br>
<span class="quotelev1">&gt; ........
</span><br>
<span class="quotelev1">&gt; util.o: In function `guess_strlen':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:45:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:61:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; util.o:/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; more undefined references to `__intel_sse2_strlen' follow
</span><br>
<span class="quotelev1">&gt; util.o: In function `vt_vsnprintf':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:255:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strcpy'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:257:
</span><br>
<span class="quotelev1">&gt; undefined reference to `_intel_fast_memcpy'
</span><br>
<span class="quotelev1">&gt; util.o: In function `guess_strlen':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:61:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; util.o:/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; more undefined references to `__intel_sse2_strlen' follow
</span><br>
<span class="quotelev1">&gt; util.o: In function `vt_vsnprintf':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:255:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strcpy'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:257:
</span><br>
<span class="quotelev1">&gt; undefined reference to `_intel_fast_memcpy'
</span><br>
<span class="quotelev1">&gt; util.o: In function `guess_strlen':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:61:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; util.o:/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
</span><br>
<span class="quotelev1">&gt; more undefined references to `__intel_sse2_strlen' follow
</span><br>
<span class="quotelev1">&gt; util.o: In function `vt_strdup':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:278:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strcpy'
</span><br>
<span class="quotelev1">&gt; util.o: In function `vt_strtrim':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:286:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__intel_sse2_strlen'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:293:
</span><br>
<span class="quotelev1">&gt; undefined reference to `_intel_fast_memcpy'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[7]: *** [opari] Error 1
</span><br>
<span class="quotelev1">&gt; make[7]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev1">&gt; make[6]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/thomas/Programs/openmpi-1.6.2/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone please help me fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
======================================================================
Thomas Evangelidis
PhD student
University of Athens
Faculty of Pharmacy
Department of Pharmaceutical Chemistry
Panepistimioupoli-Zografou
157 71 Athens
GREECE
email: tevang_at_[hidden]
          tevang3_at_[hidden]
website: <a href="https://sites.google.com/site/thomasevangelidishomepage/">https://sites.google.com/site/thomasevangelidishomepage/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20449/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20450.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20448.php">Christoph Niethammer: "[OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>In reply to:</strong> <a href="20445.php">Matthias Jurenz: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
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
