<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Member List'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1RenderTarget.php">RenderTarget</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">sf::RenderTarget Member List</div>  </div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a6bb6f0ba348f2b1e2f46114aeaf60f26">clear</a>(const Color &amp;color=Color(0, 0, 0, 255))</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39">draw</a>(const Drawable &amp;drawable, const RenderStates &amp;states=RenderStates::Default)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a976bc94057799eb9f8a18ac5fdfd9b73">draw</a>(const Vertex *vertices, std::size_t vertexCount, PrimitiveType type, const RenderStates &amp;states=RenderStates::Default)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a3dc4d06f081d36ca1e8f1a1298d49abc">draw</a>(const VertexBuffer &amp;vertexBuffer, const RenderStates &amp;states=RenderStates::Default)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a07cb25d4557a30146b24b25b242310ea">draw</a>(const VertexBuffer &amp;vertexBuffer, std::size_t firstVertex, std::size_t vertexCount, const RenderStates &amp;states=RenderStates::Default)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#ad3b533c3f899d7044d981ed607aef9be">getDefaultView</a>() const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a2e5ade2457d9fb4c4907ae5b3d9e94a5">getSize</a>() const =0</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">pure virtual</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a2c179503b4dcdf5282ef6426d317602c">getView</a>() const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a865d462915dc2a1fae2ebfb3300382ac">getViewport</a>(const View &amp;view) const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#af530274b34159d644e509b4b4dc43eb7">initialize</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#ad92a9f0283aa5f3f67e473c1105b68cf">mapCoordsToPixel</a>(const Vector2f &amp;point) const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a848eee44b72ac3f16fa9182df26e83bc">mapCoordsToPixel</a>(const Vector2f &amp;point, const View &amp;view) const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a0103ebebafa43a97e6e6414f8560d5e3">mapPixelToCoords</a>(const Vector2i &amp;point) const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a2d3e9d7c4a1f5ea7e52b06f53e3011f9">mapPixelToCoords</a>(const Vector2i &amp;point, const View &amp;view) const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1NonCopyable.php#a2110add170580fdb946f887719da6860">NonCopyable</a>()</td><td class="entry"><a class="el" href="classsf_1_1NonCopyable.php">sf::NonCopyable</a></td><td class="entry"><span class="mlabel">inline</span><span class="mlabel">private</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#ad5a98401113df931ddcd54c080f7aa8e">popGLStates</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a8d1998464ccc54e789aaf990242b47f7">pushGLStates</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a2997c96cbd93cb8ce0aba2ddae35b86f">RenderTarget</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#aac7504990d27dada4bfe3c7866920765">resetGLStates</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#adc225ead22a70843ffa9b7eebefa0ce1">setActive</a>(bool active=true)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a063db6dd0a14913504af30e50cb6d946">setView</a>(const View &amp;view)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1NonCopyable.php#a8274ffbf46014f5f7f364befb52c7728">~NonCopyable</a>()</td><td class="entry"><a class="el" href="classsf_1_1NonCopyable.php">sf::NonCopyable</a></td><td class="entry"><span class="mlabel">inline</span><span class="mlabel">private</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a9abd1654a99fba46f6887b9c625b9b06">~RenderTarget</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
</table></div><!-- contents -->
<?php
    require("../footer.php");
?>