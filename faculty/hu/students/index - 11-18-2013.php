<?php 
include "../template/header.php"; 
include "../../../includes/db.php"; 
if (!isset($_GET['i'])) {
	$_GET['i'] = 'members';
}

?>
<h5 class="currentBar">Home &raquo; Current &amp; Past Students</h5>


<script type="text/javascript"
	src="../../../js/trip_slide.js"></script>
    
<script type="text/javascript">    
<!--
  var viewer = new PhotoViewer();
  viewer.add('../images/group/current/group-2011.jpg');
  viewer.add('../images/group/current/christina.jpg');
  viewer.add('../images/group/current/erika.jpg');
  viewer.add('../images/group/current/bbq.jpg');
  viewer.add('../images/group/current/cheng.jpg');
  viewer.add('../images/group/current/jia.jpg');
  viewer.add('../images/group/current/philip.jpg');
  viewer.add('../images/group/current/rob.jpg');
  viewer.add('../images/group/current/sheng.jpg');
  viewer.add('../images/group/current/shoi.jpg');
  viewer.add('../images/group/current/steven.jpg');
  viewer.add('../images/group/current/toru.jpg');
  viewer.add('../images/group/current/zhi.jpg');
  viewer.add('../images/group/current/Gao conducts batch sorption tests.jpg');
  viewer.add('../images/group/current/Gordon guest-lectures Hydrogeology course.jpg');
  viewer.add('../images/group/current/Group members in Oct 2009.jpg');
  viewer.add('../images/group/current/Ian & Rob work with imbibition.jpg');
  viewer.add('../images/group/current/Liu is exams the imbibition of shale.jpg');
  viewer.add('../images/group/current/Pukar conducts imbibition test.jpg');
  viewer.add('../images/group/current/Ray prepares samples for ICP-MS analyses.jpg');
  viewer.add('../images/group/current/Sun Guoxin uses LC-ICP-MS for arsenic studies.jpg');
//--></script>
<section style="width:960px">

   
  <h2 style="margin:0" class="grayB">Students</h2><br />


    
    <a href="?i=members"><h3 style="margin-left:0px;" class="button white">Members</h3></a>
    <a href="?i=photos"><h3 class="button white">Photos</h3></a>
    
  <br>
<br>




    <?php if (isset($_GET['i']) && $_GET['i']=='members') { ?>
  <h3 class="news">Current Research Group Members</h3>
<ul id="ri">
<style>
	#people td {
		padding:5px;
		text-align:left;
	}
</style>
<?php
	$m
?>
	<table id="people" width="100%" style="text-align:justify">
    	<tr>
        	<td width="100px"><img src="http://placehold.it/100x100" /></td>
            <td><strong>Gordon Bennett</strong><br /><span style="font-size:14px;">Hydrogeologist, retiree of USGS and S.S. Papadopulos and Associates</span></td>
            <td width="100px"><img src="http://placehold.it/100x100" /></td>
            <td><strong>Gordon Bennett</strong><br /><span style="font-size:14px;">Hydrogeologist, retiree of USGS and S.S. Papadopulos and Associates</span></td>

        </tr>
    </table>
  <li><p><strong>Gordon Bennett</strong> - Hydrogeologist,       retiree of USGS and S.S. Papadopulos and Associates</p></li>
  <li><p><strong>Manoj       Ghimire</strong>- Ph.D. Graduate Student       (Environmental and Earth Sciences)</p> </li>
  <li><p><strong>Zhi-ye       Gao</strong>- Ph.D. Graduate Student       (Environmental and Earth Sciences) </p></li>
  <li><p><strong>Beau</strong><strong> Berend</strong> - M.S. Graduate Student (Geology, Petroleum  Geoscience Professional Option)</p></li>
  <li><p><strong>Rafael Villegas</strong> - M.S. Graduate Student (Geology, Petroleum  Geoscience Professional Option)</p></li>
  <li><p><strong>Daniel Baah </strong>-  M.S. Graduate Student (Geology, Petroleum Geoscience Professional Option)</p></li>
  <li><p><strong>Fidelis Edgobu </strong>-  M.S. Graduate Student (Geology, Petroleum Geoscience Professional Option)</p></li>
  <li><p><strong>Melanie Ybarra</strong> - M.S. Graduate Student (Geology, Petroleum  Geoscience Professional Option)</p></li>
  <li><p><strong>Joseph Anyanwa</strong> - M.S. Graduate Student (Geology, Petroleum  Geoscience Professional Option)</p></li>
  <li><p><strong>Ellie Brown</strong>  - Undergraduate student (Geology)</p></li>
  <li><p><strong>Mikael Hiestand </strong>- Undergraduate student (Geology)</p></li>
  <li><p><strong>Eric van Vleet</strong> - Undergraduate student (Geology) </p></li>
  <li><p><strong>Tony Sortore</strong> - Undergraduate student (Geology)</p></li>
  <li><p><strong>Troy Barber </strong>- Undergraduate student (Geology and  Civil Engineering)</p></li>
  <li><p><strong>Josh Hodge </strong>- Undergraduate student (Geology)</p></li>
</ul>
        


  <h3 class="news">Past Graduate Students       	    </h3>
  <ul id="ri2">
    <li>
      <p><strong>Jarrod Reynolds</strong> (Ph.D. in Environmental and Earth Sciences; 8/2012 – 12/2013; paused his       study due to work and family obligations) </p>
    </li>
    <li>
      <p><strong>Simon Obame</strong> - M.S. in       Geology (completed in 12/2011) </p>
    </li>
    <li>
      <p><strong>Ugo Ononogbu</strong> - M.S. in       Geology (completed in 5/2013) </p>
    </li>
    <li>
      <p><strong>Ian Hamilton</strong> - M.S. in       Geology (completed in 12/2011; now       with Lhoist North America) </p>
    </li>
    <li>
      <p><strong>Nathan       Glondys</strong>- M.S. in Geology (completed in 12/2011; now with Killam Oil       Company) </p>
    </li>
  </ul>
  
  <h3 class="news">Past Post-Doctoral Researchers</h3>
  		<ul id="ri">
  		  <li><p><strong>Toru  Nakajiwa</strong><strong>-&nbsp;</strong>Tokyo  University of Agriculture and Technology, Japan (Jan. - Oct., 2011; now with  Ohio State University)</p></li>
  		  <li><p><strong>Xu-bo       Gao</strong>- China       University of Geosciences, Wuhan, China (9/2009 – 11/2010) </p></li>
  		  <li><p><strong>Guo-xin       Sun</strong><strong>-&nbsp;</strong>Research Center for Eco-environmental Sciences,       Chinese Academy of Sciences, Beijing, China (4/2009 – 8/2009) </p></li>
  </ul>
  
  <h3 class="news">Past Visiting Researchers</h3>
    	<ul id="ri">
    	  <li><p><strong>Yi Li</strong> – M.S. student, Beijing  Normal University (10/2013 – 11/2013)</p></li>
          <li><p><strong>He-cheng Liang </strong>– Visiting Assistant Professor, China University of Geosciences, Wuhan (1/2011 –  1/2012)</p></li>
          <li><p><strong>Jian-guo Bao</strong>- Visiting Professor, China University of  Geosciences, Wuhan (10/2010 – 10/2011)</p></li>
          <li><p><strong>Jiang-kun Du</strong>- Visiting Student Scholar,  China University of  Geosciences, Wuhan (10/2010 – 8/2011)</p></li>
          
    	  <li><p><strong>Xian-guo       Liu</strong>- Visiting Professor, China University of Geosciences, Wuhan, China       (7/2009 – 7/ 2010) </p></li>
    	  <li><p><strong>(Philip) Zhi-yue  Wang</strong> – Visiting Student, Nanyang Technology University, Singapore (5/2010 –  8/2010)</p></li>
    	  <li><p><strong>RuiZuo</strong> - Visiting Scholar,       Beijing Normal University, Beijing,       China (8/2009 – 11/2009) </p></li>
   	  </ul>
        
  <h3 class="news">Past Undergraduate Students </h3>
        	<ul id="ri">
            	<li><p>
            	  <strong>Christina Munoz</strong> – B.S. Geology (Fall/Spring/Fall 2009-2011) </p>
            	</li>
            	<li><p>
            	  <strong>Steven Emenhiser</strong> – B.S. Geology (Summer 2010 to Spring 2011) </p>
            	</li>
            	<li><p>
            	  <strong>Ian  Hamilton</strong> - B.S., Geology (Spring 2009) </p>
            	</li>
            	<li><p>
            	  <strong>Pukar  Mainali</strong> - B.S., Geology (Spring/Summer 2009) </p>
            	</li>
            	<li><p>
            	  <strong>Brian Mariam</strong> - B.S. Geology (Fall 2009)</p>
            	</li>
            	<li><p>
            	  <strong>Robert Nikirk</strong> - B.S. Geology (Fall 2008 to Fall 2010)</p>
            	</li>
            </ul>
        
        <h3 class="news">Past High-School Students  </h3>
        
        	<ul id="ri">
            	<li>
            	  <strong>Chandi Maharaj</strong> - Juan Seguin High  School, Arlington (10/2009 –  3/2010) 
            	</li>
            </ul>
    
    <?php }  elseif (isset($_GET['i']) && $_GET['i']=='photos') { ?>
    
    
    <table align="center" id="students" width="100%" border="0" style="border-collapse:collapse; text-transform:capitalize" cellpadding="5">
  <tr>
    <td><a href="javascript:void(viewer.show(0))"><div><img src="../images/thumbs/group/current/group-2011.jpg" width="220"/>
        	<figcaption class="whiteB">Group Members in Jan 2011</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(1))"><div><img src="../images/thumbs/group/current/christina.jpg" width="220"/>
        	<figcaption class="whiteB">Christina helps with sample preparation</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(2))"><div><img src="../images/thumbs/group/current/erika.jpg" width="220"/>
        	<figcaption class="whiteB">Erika works on As transport</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(3))"><div><img src="../images/thumbs/group/current/bbq.jpg" width="220"/>
        	<figcaption class="whiteB">Group get-together at a Texas BBQ place, Jan 2010</figcaption>
        </div></a></td>
  </tr>
   <tr>
    <td><a href="javascript:void(viewer.show(4))"><div><img src="../images/thumbs/group/current/cheng.jpg" width="220"/>
        	<figcaption class="whiteB">He-cheng Liang conducting column studies</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(5))"><div><img src="../images/thumbs/group/current/jia.jpg" width="220"/>
        	<figcaption class="whiteB">Jia-kun Du and laser ablation work</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(6))"><div><img src="../images/thumbs/group/current/philip.jpg" width="220"/>
        	<figcaption class="whiteB">Philip works on Cr removal</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(7))"><div><img src="../images/thumbs/group/current/rob.jpg" width="220"/>
        	<figcaption class="whiteB">Rob fixes fraction collector</figcaption>
        </div></a></td>
  </tr>
  <tr>
    <td><a href="javascript:void(viewer.show(8))"><div><img src="../images/thumbs/group/current/sheng.jpg" width="220"/>
        	<figcaption class="whiteB">Sheng Peng and gas diffusion test</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(9))"><div><img src="../images/thumbs/group/current/shoi.jpg" width="220"/>
        	<figcaption class="whiteB">Shoichiro sets up gas diffusion apparatus</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(10))"><div><img src="../images/thumbs/group/current/steven.jpg" width="220"/>
        	<figcaption class="whiteB">Steven helps with sample preparation</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(11))"><div><img src="../images/thumbs/group/current/toru.jpg" width="220"/>
        	<figcaption class="whiteB">Toru Nakajiwa working on unsaturated transport</figcaption>
        </div></a></td>
  </tr>
   <tr>
    <td><a href="javascript:void(viewer.show(12))"><div><img src="../images/thumbs/group/current/zhi.jpg" width="220"/>
        	<figcaption class="whiteB">Zhi-ye Gao and imbibition test</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(13))"><div><img src="../images/thumbs/group/current/Gao conducts batch sorption tests.jpg" width="220"/>
        	<figcaption class="whiteB">Gao conducts batch sorption tests</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(14))"><div><img src="../images/thumbs/group/current/Gordon guest-lectures Hydrogeology course.jpg" width="220"/>
        	<figcaption class="whiteB">Gordon guest-lectures Hydrogeology course</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(15))"><div><img src="../images/thumbs/group/current/Group members in Oct 2009.jpg" width="220"/>
        	<figcaption class="whiteB">Group members in Oct 2009</figcaption>
        </div></a></td>
  </tr>
  <tr>
    <td><a href="javascript:void(viewer.show(16))"><div><img src="../images/thumbs/group/current/Ian & Rob work with imbibition.jpg" width="220"/>
        	<figcaption class="whiteB">Ian & Rob work with imbibition</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(17))"><div><img src="../images/thumbs/group/current/Liu is exams the imbibition of shale.jpg" width="220"/>
        	<figcaption class="whiteB">Liu is exams the imbibition of shale</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(18))"><div><img src="../images/thumbs/group/current/Pukar conducts imbibition test.jpg" width="220"/>
        	<figcaption class="whiteB">Pukar conducts imbibition test</figcaption>
        </div></a></td>
    <td><a href="javascript:void(viewer.show(19))"><div><img src="../images/thumbs/group/current/Ray prepares samples for ICP-MS analyses.jpg" width="220"/>
        	<figcaption class="whiteB">Ray prepares samples for ICP-MS analyses</figcaption>
        </div></a></td>
  </tr>
  <tr>
  	<td>
    	<a href="javascript:void(viewer.show(20))"><div><img src="../images/thumbs/group/current/Sun Guoxin uses LC-ICP-MS for arsenic studies.jpg" width="220"/>
        	<figcaption class="whiteB">Sun Guoxin uses LC-ICP-MS for arsenic studies</figcaption>
        </div></a>
    </td>
    <td>
    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
</table><br />
<?php } ?>
    
</section>

<?php include "../template/footer.php"; ?>