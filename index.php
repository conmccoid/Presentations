<!DOCTYPE=html>
<html lang="en">
<head>
  <link rel="stylesheet" href="custom.css">
  <link href="icons/css/all.css" rel="stylesheet">
  <link href="icons/Academicons/css/academicons.css" rel="stylesheet">
<style>
:root{
  --colour-page: var(--colour-maintheme);
}

body {
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
}

.sidebar {
  background-image: url(img/TIKZ_provably_TriangleGraphs_20201005.svg);
  background-position: center 20px;
}

.sidebar-background {
  background-image: none;
}  

dt {
    font-weight: bold;
    padding: 5px;
}

dd {
    text-align: justify;
}
</style>
</head>

<body>

<?php require_once "sidebar.php";?>

<div class="main">

<?php require_once "header.php";?>

<div class="main-content">
    <h1>Presentations</h1>
	<h3>Talks</h3>
    <dl>
        <!--latest intersection talk-->
        <dt><a href="CM2023.html">Visualization of ...</dt>

        <!--extrap/krylov from Paris-->

        <!--visualization-->

        <!--dd26 cycles-->
        <dt><a href="presentations/TALK_DD26_2020_cycles.pdf">Cycles in Newton-Raphson-accelerated Alternating Schwarz</a>,
    		 with Martin J. Gander, DD26, 2020</dt>
    	<dd>In this talk I examine cycling behaviour in 1D Schwarz methods that have been accelerated by Newton's method.</dd>

        <!--spectral differentiation and integration, two versions-->
        <dt><a href="presentations/TALK_gradseminar_2019_introduction.pdf">Introduction to Spectral Collocation</a>, 
            Universit&eacute; de Gen&egrave;ve, 2019</dt>
        <dd>This talk is intended as an accessible introduction to spectral collocation,
        	with a focus on Chebyshev-Gauss-Lobatto quadrature.
        	Briefly, my current work on inverting constant coefficient linear operators is discussed.</dd>
        <dt><a href="presentations/TALK_numanalseminar_2018_spectral.pdf">Spectral Differentiation: Integration and Inversion</a>,
      		with Manfred Trummer, Universit&eacute; de Gen&egrave;ve, 2018</dt>
      	<dd>This talk covers the majority of my masters thesis.
      		The starting point is my article on pseudospectral integration matrices (see <a href="publications.php">Publications</a>)
      		and extends these ideas to inverse matrices of general linear operators.</dd>
    </dl>
    
  <h3>Posters</h3>
    <dl>
      <dt><a href="presentations/POST_villars_2020_robust.pdf">Robust algorithm for intersections of triangles</a>,
        	with Martin J. Gander, CUSO 2020 winter school on low rank models</dt>
        <dd>The CUSO winter school takes place every two years in the town of Villars-sur-Ollon.
          This poster was presented at a poster session there.
          It derives from my article "A provably robust algorithm for triangle-triangle intersections in floating point arithmetic" (see Publications).</dd>
      <dt><a href="presentations/POST_snd_2019_period.pdf">Period doubling when accelerating alternating Schwarz with Newton-Raphson</a>,
        	with Martin J. Gander, Swiss Numerics Day 2019</dt>
        <dd>The SNSF, national science fund of Switzerland, hosts a one-day conference each year.
        	In 2019, the SND was hosted in Lugano, at the Universit&agrave; della Svizzera italiana.
        	The poster examines a particularly bad example of the alternating Schwarz method accelerated with Newton-Raphson.</dd>
    </dl>
    
</div>

<?php require_once "footer.php";?>

</div>

</body>
</html>
