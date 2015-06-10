<?php get_header(); ?>

<?php get_header(); ?>

<section class="content">
    <div class="container bg-success left-content">

        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Nous offrons aussi des Services Professionels</h2>
                <hr>
            </div>

            <div class="col-sm-7">

                <?php the_content(); ?>

            </div>

                <div class="col-sm-5">

                    <form method="post" id="jqueryForm">
                      <div class="form-group">
                        <label for="name">Votre Nom ou celui de votre entreprise</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Nom complet ou celui de votre entreprise">
                            <span class="text-danger error">S'il vous plaît entrez votre nom ou celui de votre entreprise</span>
                      </div>
                      <div class="form-group">
                        <label for="email">Votre E-mail ou celui de votre entreprise</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Votre email ou celui de votre entreprise" >
                            <span class="text-danger error">S'il vous plaît entrez votre e-mail ou celui de votre entreprise</span>
                      </div>
                      <div class="form-group">
                        <label for="subject">Type de Services</label>
                            <select name="subject" class="form-control" id="subject">
                                <option value="">Choisissez un service...</option>
                                <option value="Création de site web">Création de site web</option>
                                <option value="Communication Visuelle">Communication Visuelle</option>
                                <option value="Création Appli Mobile">Création d'application Mobile</option>
                                <option value="Promotion">Promotion pour votre entreprise</option>
                            </select>
                            <span class="text-danger error">S'il vous plaît choisissez un type de services</span>
                      </div>
                      <div class="form-group">
                        <label for="message">Informations additionnelles</label>
                            <textarea name="message" id="message" class="form-control"  placeholder="Ecrivez vos informations additionnelles ici"></textarea>
                            <span class="text-danger error">S'il vous plaît rentrez vos informations additionnelles</span>
                      </div>
                      <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-yellow"><span class="glyphicon glyphicon-send"></span> Envoyer</button>
                      </div>
                    </form>

                    <div id="results"></div>
                    
                    <hr>

                    <address>
                        Port-au-Prince, Haiti<br>
                        <abbr>Tel:</abbr> <a href="tel:+50936478199">(+509) 3647 8199</a><br/>
                        </address>
                        <address>
                        <strong>Jean Gérard Bousiquot (CEO)</strong><br>
                        <a href="mailto:contact@annuairehaiti.com">contact@AnnuaireHaiti.com</a>
                    </address>
                </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>