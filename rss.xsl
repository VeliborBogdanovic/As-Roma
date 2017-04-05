<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<body style="background-image:url(slike/11.jpg);background-repeat:y; font: verdana, arial, helvetica, sans-serif;opacity:1; color:#BBBBBB">
				<table border="1"  style="margin:20px auto;text-align:center;margin-top:200px;">
					<thead>
						<tr><th>Naziv</th>
						<th>Opis</th>
						<th>Autor</th>
						<th>Datum</th>
						</tr>
					</thead>
					<tbody>
						<xsl:for-each select="rss/channel/item">
							<tr>
								<td><xsl:value-of select="title"/></td>
								<td><xsl:value-of select="description"/></td>
								<td><xsl:value-of select="author"/></td>
								<td><xsl:value-of select="date"/></td>
								
							</tr>
						
						
						</xsl:for-each>
					</tbody>
				</table>
			</body>
		</html>
	
	
	</xsl:template>
	</xsl:stylesheet>