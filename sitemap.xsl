<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:site="http://www.sitemaps.org/schemas/sitemap/0.9">
	<xsl:template match="/">
		<html>
			<body style="background-image:url(slike/11.jpg);background-repeat:y; font: verdana, arial, helvetica, sans-serif;opacity:1; color:#BBBBBB">
				<table border="1"  style="margin:20px auto;text-align:center;margin-top:200px;">
					<thead>
						<tr><th>URL</th>
						<th>Last modified</th>
						<th>Change frequency</th>
						<th>Priority</th>
				
						</tr>
					</thead>
					<tbody>
						<xsl:for-each select="site:urlset/site:url">
							<tr>
								<td><xsl:value-of select="site:loc"/></td>
								<td><xsl:value-of select="site:lastmod"/></td>
								<td><xsl:value-of select="site:changefreq"/></td>
								<td><xsl:value-of select="site:priority"/></td>
								
								
							</tr>
						
						
						</xsl:for-each>
					</tbody>
				</table>
			</body>
		</html>
		
	</xsl:template>
	</xsl:stylesheet>