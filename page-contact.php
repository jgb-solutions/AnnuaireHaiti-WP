<?php get_header(); ?>

<?php get_header(); ?>

<section class="content">
    <div class="container bg-info left-content">

        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Contactez-nous par e-mail ou téléphone</h2>
                <hr>
            </div>

        	<div class="col-sm-5 col-sm-push-7">

                <p>
                    Si la forme ne fonctionne pas ou si vous voulez nous contacter directement, appelez-nous.

                    <address>
                        Port-au-Prince, Haiti<br>
                        <abbr>Tel:</abbr> <a href="tel:+50936478199">(+509) 3647 8199</a><br/><br>
                        <strong>L'équipe AH</strong><br>
                        <a href="mailto:contact@annuairehaiti.com">contact@AnnuaireHaiti.com</a>
                    </address>
                </p>
            </div>

            <div class="col-sm-7 col-sm-pull-5">

                <hr class="visible-xs">
                <form method="post" id="jqueryForm" class="form-horizontal">
                  <div class="form-group">
                    <label for="name" class="col-sm-2">Nom</label>
                    <div class="col-sm-10">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Rentrez votre nom complet" >
                        <span class="text-danger error">S'il vous plaît entrez votre nom</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2">E-mail</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Rentrez votre email" >
                        <span class="text-danger error">S'il vous plaît entrez votre e-mail</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="subject" class="col-sm-2">Sujet</label>
                    <div class="col-sm-10">
                        <select name="subject" class="form-control" id="subject">
                            <option value="">Choisissez un sujet...</option>
                            <option value="Travail">Je veux travailler avec vous</option>
                            <option value="Aide">J'ai besoin d'aide</option>
                            <option value="Salution">J'aimerais seulement vous dire bonjour</option>
                        </select>
                        <span class="text-danger error">S'il vous plaît choisissez un sujet</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message" class="col-sm-2">Message</label>
                    <div class="col-sm-10">
                        <textarea name="message" id="message" class="form-control"  placeholder="Tapez votre message ici"></textarea>
                        <span class="text-danger error">S'il vous plaît entrez votre message</span>
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                            <button name="submit" type="submit" class="btn btn-yellow"><span class="glyphicon glyphicon-send"></span> Envoyer</button>
                      </div>
                  </div>
                </form>

                <div id="results"></div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>