Ionize CMS Demo Module with Medias
==================================

Version : v1.2
Ionize version: 1.0.4
Date: 12.12.2013

### Demo module
This is a Demo module built from the original Demo module by Michel-Ange, and built on ideas from andreaspollak (http://ionizecms.com/forum/viewtopic.php?id=1339)

### Authors
* [Michel-Ange Kuntz](http://www.partikule.net)
* andreaspollak
* [Reményi László](http://www.ventures.hu)

### Tags examples
Use the original bootstrap theme.
In the page_home.php take the following before <!-- Page : Blog | Articles Limit : 3 -->.
<!-- Begin -->
<!-- All authors -->
		<h2>Our Authors</h2>
		<ul>
			<ion:demo:authors>
					<li><ion:author field="name" /> -- <ion:author field="id_module_demo_author" /></li>
			</ion:demo:authors>
		</ul>
		
<!--With media -->	
		<ion:demo:authors>
			<ion:author tag="ul">
				<li>
					<ion:name />
					<ion:medias type="picture" tag="ul">
						<li><img src="<ion:media:src size='60' />" /></li>
					</ion:medias>
				</li>
			</ion:author>
		</ion:demo:authors>

<!-- End -->

In the page_home.php take the following in <!-- Page : Blog | Articles Limit : 3 --> after the ion:content
<!-- Begin -->
<!-- In article -->
<ion:authors>
    <ion:author field="name" tag="p" />
</ion:authors>
<!-- End -->

Good luck!