<?php
include('config.php');
include ('fungsi.php');
header('HTTP/1.1 200 OK');
$url = $_SERVER['REQUEST_URI'];
$urlnya = $_SERVER['REQUEST_URI'];
$domains = $_SERVER['HTTP_HOST'];
$url = str_replace('aan/', '', $url);
$asin = ambil_asin($url);
$asin = strtoupper($asin);
$permalinkx	=	$_SERVER['REQUEST_URI'];
$permalinky	=	explode('?',$permalink);
$permalinky	=	$permalinky[0];
$permalink	=       explode('/',$permalinkx);
$permalinkz     =	$permalink[2];
$permalink	=	$permalink[2];
$permalink	=	explode('?',$permalink);
$permalink	=	$permalink[0];
$titlenya    	= 	str_replace(array('/','-','+','-'),' ',$permalink);
$titlenya = preg_replace("/^(\w+\s)/", "", $titlenya);
$titlenya      =       ucwords(str_replace('-', ' ', $titlenya));
$judul		=	$titlenya;
$txt = text_lang();
$gambar = $domains.'/'.$asin.'_500.jpg';
?><!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INSTANT FILE PDF EPUB MOBI - <?php echo strtoupper( $domains ); ?></title>
        <meta name="description" content="<?php echo proses_konten($txt['smdesc'], $item); ?>">
        <meta property="og:title" content="<?php echo $judul.' - '.$site_name; ?>">
        <meta property="og:description" content="<?php echo proses_konten($txt['smdesc'], $item); ?>">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="/ebook.ico">
        <style>.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5{position:relative;min-height:1px;padding-right:10px;padding-left:10px}.col-xs-5{width:20%;float:left}@media (min-width: 768px){.col-sm-5{width:20%;float:left}}@media (min-width: 992px){.col-md-5{width:20%;float:left}}@media (min-width: 1200px){.col-lg-5{width:20%;float:left}}.thumbnail{text-align:center;padding:10px}.thumbnail img{max-width: 100%;height:auto}.header{border-bottom:1px solid #ddd;margin-bottom:15px;padding-bottom:15px}.download{overflow:hidden;text-align:center}.download h3{display:inline-block;padding:0 15px;position:relative}.download h3:after,.download h3:before{background:#ddd;content:"";display:block;height:1px;position:absolute;top:50%;width:400%}.download h3:before{right:100%}.download h3:after{left:100%}.btn-group{margin-bottom: 15px}.footer{background:#f8f8f8;border-top:1px solid #e7e7e7;margin-top:15px;padding:15px;}
.form-wrapper-01 {
    background-color: #f3f3f3;
    width: 100%;
    max-width: 450px;
    position: relative;
    display: block;
    text-align: right;
    padding: 10px;
}

#search {
    background-color: #ff0000;
    position: absolute;
    left: 10px;
    right: 100px;
}

#search input {
    width: 100%;
}

#submit {
    width: 80px;
}
.modal-header, h4, .close {
      background-color: dodgerblue;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  
</style>
<link href="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/css/comment.css" rel="stylesheet">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>
    <body>
        <?php include('header.php'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel-heading" style="padding: 5px;">
                        <ol class="breadcrumb">
                          <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/"><span itemprop="title">Home page</span></a></li>
                          <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/<?php echo $single."/".$asin."-".sanitize_title2($judul).""; ?>"><span itemprop="title"><?php echo $judul; ?></span></a></li>
                        </ol>
                    </div>
                    <div class="content">
                        <div class="header">
<h1>TÉLÉCHARGEMENT GRATUIT FICHIER PDF EPUB MOBI</h1>
<span style=color:#666;font-size:small><div itemscope itemtype=http://data-vocabulary.org/Review-aggregate><span itemprop=itemreviewed><?php echo $domains; ?></span> <img itemprop=photo src="/favicon.ico"> <span itemprop=rating itemscope itemtype=http://data-vocabulary.org/Rating><span itemprop=average>9</span> out of <span itemprop=best>10</span></span> based on <span itemprop=votes><?php echo number_format(rand( 100, 1000)); ?></span> ratings. <span itemprop=count><?php echo number_format(rand( 1000, 5000)); ?></span> user reviews.</div></span>                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div class="thumbnail"><img src="http://<?php echo $gambar; ?>"onerror="this.src='/<?php echo spinText("{epub|pdf|mobi}");?>.png'"width="235" height="304"/><div class="caption"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><a rel="nofollow" href="/read.php?id=<?php echo $asin;?>&file=<?php echo $judul; ?>"> <?php echo $judul; ?></a>

</div></div>

</div>

                            </div>
                            <div class="col-md-8">
                                <b>Descriptions de livres:</b>
                <p><?php echo $judul; ?> C'est un bon choix pour vous qui recherchez une expérience de lecture agréable. Nous espérons que vous apprécierez de visiter notre website.</p>
                              <center><ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-2512705912299368"
     data-ad-slot="9484070917"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> </center>
<div class="download">
                                    <h3>Téléchargement instantané <small> Votre fichier est prêt, téléchargez maintenant</small></h3>
                                  <!--  <div class="btn-group btn-group-justified" role="group">
                                        <a class="btn btn-lg btn-danger" id="PDF"><i class="glyphicon glyphicon-download" aria-hidden="true"></i> PDF</a>
                                        <a class="btn btn-lg btn-success" id="EPUB"><i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i> EPUB</a>
                                        <a class="btn btn-lg btn-warning" id="MOBI"><i class="glyphicon glyphicon-cloud-download" aria-hidden="true"></i> MOBI</a>
                                    </div> -->
                                    <div class="btn-group btn-group-justified" role="group">
                                        <a class="btn btn-lg btn-primary" rel="nofollow" href="/read.php?id=<?php echo $asin;?>&file=<?php echo $judul; ?>"target="_blank"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Télécharger maintenant
 &#10148;</a>
                                    </div>
                                </div>
<center><b><font color="blue"><i class="fa fa-check"></i></font> Prise en charge multilingue</b><br>Sélectionnez une langue</center>
<center><a href="/dl.php?id=<?php echo $asin;?>&file=<?php echo $judul; ?>"rel="nofollow"/><img class="img-responsive" src="https://3.bp.blogspot.com/-UcJClX0EHM0/WquVXC9aAII/AAAAAAAAAYk/CvM5ZEZFsAY2o4xiDUwr0xaTJUum1a_1QCLcBGAs/s1600/country.png"></a>
</center>
<br>
				<center><ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-2512705912299368"
     data-ad-slot="1002945665"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<center><b><font color="blue"><i class="fa fa-check"></i></font> Multi-format disponible</b></center>
                              <center><img class="img-responsive" src="/multi.png"></center>	
                                <ul>
				    <li><a rel="nofollow" href="/dl.php?file=<?php echo sanitize_title2($judul); ?>.pdf"><?php echo $judul; ?> PDF</a></li>
                                    <li><a rel="nofollow" href="/dl.php?file=<?php echo sanitize_title2($judul); ?>.epub"><?php echo $judul; ?> EPUB</a></li>
                                    <li><a rel="nofollow" href="/dl.php?file=<?php echo sanitize_title2($judul); ?>.mobi"><?php echo $judul; ?> MOBI</a></li>
                                </ul>
<h3>Bienvenue à la meilleure bibliothèque de livres:</h3><br>
<font color="green"><i class="fa fa-check"></i></font> Tous vos livres et auteurs préférés en un seul endroit!<br> 
<font color="green"><i class="fa fa-check"></i></font> Plus de 10 millions de titres couvrant tous les genres dans notre répertoire de livres.<br>
<font color="green"><i class="fa fa-check"></i></font> De nouveaux titres sont ajoutés tous les jours! Nous aimons garder les choses fraîches.<br>
<font color="green"><i class="fa fa-check"></i></font> Inscription gratuite pour accéder aux fichiers PDF, E-Books, ePubs, eMagazines et plus encore.<br><br>
<center><img class="img-responsive" src="/award.png"></center>	
<b>How it work?:</b>
								<ul>
									<li>1. Choisissez le lien de téléchargement déjà fourni.</li>
									<li>2. Créer un compte gratuit.</li>
									<li>3. Téléchargez autant de livres que vous le souhaitez.</li>
									<li>4. Bonne lecture.</li>
								</ul>   
<center><ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-2512705912299368"
     data-ad-slot="3353776835"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<!-- <strong>Totalement 100% Free Joint aujourd'hui!</strong>, Créez un compte gratuit et accédez à votre bibliothèque GRATUITEMENT! Ici vous pouvez lire et télécharger des livres illimités format de fichier Pdf Epub Mobi Kindle Doc Txt. vous pouvez lire et télécharger n'importe quand n'importe où. Obtenez les meilleurs livres, Magazines et bandes dessinées dans tous les genres, Action, Aventure, Manga, Classiques, Comédie, référence, Manuels, Drame, Étranger, Horreur, Musique, Romance, Science Fiction, Fantasy, Sports et plus encore.
								
                <br>

<center><h3>OBTENEZ UN COMPTE GRATUIT MAINTENANT!</h3><br><a href="/signup.php"rel="nofollow"/><img class="img-responsive" src="https://3.bp.blogspot.com/-bpB2xOk_Hl0/WrPAjoiICkI/AAAAAAAAAco/UxbgboFnb5wlW9Y2_i_pjg3bMNAhg8_mACLcBGAs/s1600/Inscription-GRATUITE.png"></a></center>
                <br> -->
<!-- start comment -->
        <div id="fbFeedbackContent">
          <div class="top"> <strong>17 Comments</strong> <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Add a comment</a> </div>
          <ul>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/korryn-mcminn.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Korryn McMinn</a><span></span>
                <p>Finally I can download and read this ebook. Thank you!</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Like</a> · <a class="like"><i></i> 1</a> · <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Reply</a> · 1 hr</div>
              </div>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/tara-leigh.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Tara Leigh</a> <span></span>
                <p>¡Estoy muy emocionado de haber encontrado esta biblioteca! muchas gracias</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Like</a> · <a class="like"><i></i> 12</a> · <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Reply</a> · 1 hr</div>
              </div>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/kate-desjardins.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Kate Desjardins</a>
                <p>I don't think it will worked, but my best friend showed me this site and it does! I received my most wanted books</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Like</a> · <a class="like"><i></i> 2</a> · <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Reply</a> · 1 hr</div>
              </div>
              <ul>
                <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/lauren-armstrong.jpg" alt=""></a>
                  <div class="postContainer"> <a href="/login.php">Lauren Armstrong</a>
                    <p>My friends are so angry because they don't know how I have all this high quality ebooks. And I still keep silent haha...</p>
                    <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Like</a> · <a class="like"><i></i> 2</a> · <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Reply</a> · 48 min</div>
                  </div>
                </li>
              </ul>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/kirsty-watson.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Kirsty Watson</a> <span></span>
                <p>It's very easy to get high quality ebooks here, thanks! ;)</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Like</a> · <a class="like"><i></i> 2</a> · <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Reply</a> · 3 hrs</div>
              </div>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/nancy-edwards-jenkins.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Nancy Edwards Jenkins</a> <span></span>
                <p>I just wanna say one word... WONDERFUL!! thanks you!</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Like</a> · <a class="like"><i></i> 2</a> · <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Reply</a> · 3 hrs</div>
              </div>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/natascha-durham-bivens.jpg" alt=""> </a>
              <div class="postContainer"> <a href="/login.php">Natascha Durham Bivens</a> <span></span>
                <p>das ist mein Lieblingsort, um Romane herunterzuladen</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Like</a> · <a class="like"><i></i> 2</a> · <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Reply</a> · 5 hrs</div>
              </div>
            </li>
            <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/lynda-dearing.jpg" alt=""></a>
              <div class="postContainer"> <a href="/login.php">Lynda Dearing</a> <span></span>
                <p>Je ne comprends pas!</p>
                <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Like</a> · <a class="like"><i></i> 1</a> · <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Reply</a> · 8 hrs</div>
              </div>
              <ul>
                <li> <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/brian-laffitte.jpg" alt=""></a>
                  <div class="postContainer"> <a href="/login.php">Brian Laffitte</a>
                    <p>Cliquez sur le lien Inscription gratuite et créez un compte gratuit :)</p>
                    <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Like</a> · <a class="like"><i></i> 17</a> · <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Reply</a> · 8 hrs</div>
                  </div>
                  <br />
                  <a class="image"><img class="img" src="http://pdfzon.com/wp-content/themes/asingenerator/lp/dlibs/erin-victoria-zimmerman.jpg" alt=""></a>
                  <div class="postContainer"> <a href="/login.php">Erin Victoria Zimmerman</a>
                    <p>lol il ne m'a même pas fallu 5 minutes pour m'inscrire! XD</p>
                    <div class="bottom"> <a href="/login.php"onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Like</a> · <a class="like"><i></i> 13</a> · <a href="/login.php" onClick="JavaScript:alert('Vous devez vous connecter avant de commenter')">Reply</a> · 8 hrs</div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
    <!-- end comment --> 

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-3">
<form class="form-wrapper-01" method="get" action="/search"target="_blank" role="search">
    <div id="search">
       <input class="search-input" type="search" name="file" placeholder="Chercher Livre ici..">    </div>
    <input id="submit" type="submit" value="Search" />
</form>
                    <ul class="list-group">

                        <li class="list-group-item list-group-item-success">Livre connexe</li>
                            <?php poplist();?>
                    </ul>
                </div>
            </div>
        </div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:1px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Identifiant</h4>
      
</div>
        <div class="modal-body" style="padding:40px 50px;">
<center><img class="img-responsive" src="https://3.bp.blogspot.com/-yvwO53J8dr0/WrGxHTAGFaI/AAAAAAAAAbU/tMiDiv47zdYcMfYdRI-aZSE11TqxHX7vgCPcBGAYYCw/s400/ebooklibrary.png" width="500" />
 <div class="alert alert-info"> <p>"Rejoignez le réseau des membres satisfaits et essayez ce service pour <b>Gratuit</b>. Remplissez le formulaire d'inscription et <b>commencez à lire le livre instantanément</b>"</p></div>
   <h3>Veuillez vous connecter à la zone membre<br>ou créez un compte gratuit pour continuer! </h3>
</center>

 
                       <a href="/login.php"><button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> S'identifier</button></a>
 <p>Pas un membre? <a href="/signup.php">Inscription gratuite</a></p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
         
          <p>Oublié <a href="/forgot.php">Mot de passe?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#PDF").click(function(){
        $("#myModal").modal();
    });
});
$(document).ready(function(){
    $("#EPUB").click(function(){
        $("#myModal").modal();
    });
});

$(document).ready(function(){
    $("#MOBI").click(function(){
        $("#myModal").modal();
    });
});

</script>
<?php include('footer.php'); ?>
<?php include('histats.php'); ?>
    </body>
</html>