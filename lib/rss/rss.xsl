<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:rss="rss">

<xsl:output method="html"
            encoding="UTF-8"
            doctype-public="-//W3C//DTD XHTML 1.0 Transitional//EN"
            doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
            indent="yes" />


<xsl:template match="/">
            <xsl:apply-templates select="*" />
</xsl:template>

<xsl:template match="rss">
    <h1>Lecture du flux rss:</h1>

    <h2><xsl:value-of select="channel/title"/></h2>
    <p>link : <xsl:value-of select="channel/link"/></p>
    <p>description : <xsl:value-of select="channel/description"/></p>

    <xsl:for-each select="channel/item">
        <ul>
            <li>Title: <xsl:value-of select="title"/></li>
            <li>description: <xsl:value-of select="description"/></li>
        </ul>
    </xsl:for-each>



</xsl:template>


<xsl:template name="listeCaract">
    <td>
        <xsl:for-each select="criteres/caracteristiques">
            <xsl:value-of select="."/>
        </xsl:for-each>
    </td>
</xsl:template>

</xsl:stylesheet>