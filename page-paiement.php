<?php get_header(); ?>

<?php get_header(); ?>

<section class="content">

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 left-content bg-warning">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center">Utilisez une méthode de paiement</h2>
                        <hr>
                        <h3>Vous pouvez payer un abonnement (mensuel/annuel) par <a href="#cheque-cash">chèque, cash, compte bancaire</a> ou <a href="#paiement-paypal">en ligne (PayPal)</a></h3>
                        <hr>
                    </div>

                    <div class="col-sm-6" id="cheque-cash">

                        <h4>Payez avec chèque/cash/compte bancaire</h4>

                    </div>

                    <div class="col-sm-6" id="paiement-paypal">

                        <hr class="visible-xs">

                        <h4>Payez en ligne (PayPal)</h4>
                        <p>
                            Vous avez le choix entre un abonnement mensuel ou annuel. L'abonnement mensuel ou de 30 jours est à 10 dollars. Vous aurez à payer ce montant chaque mois pour que votre entreprise soit toujours listée sur notre site.
                        </p>
                        <p>
                            L'abonnement annuel ou de 12 mois est à 100 dollars. Donc vous bénéficiez d'une réduction de 16.67%. Vous aurez à payer ce montant chaque année pour que votre entreprise soit toujours listée sur notre site.
                        </p>
                        <p>
                            Nous vous contacterons par e-mail <?php echo isset( $_GET['email'] ) ? '(' . $_GET['email'] . ')' : ''; ?> ou téléphone <?php echo isset( $_GET['tel'] ) ? '(' . $_GET['tel'] . ')' : ''; ?> une fois que le paiement sera effectué.
                        </p>
                        <hr>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="LSLH7NW7WHBEQ">
                            <table>
                            <tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
                                <option value="1 mois">1 mois : $10.00 USD - monthly</option>
                                <option value="1 an">1 an : $100.00 USD - yearly</option>
                            </select> </td></tr>
                            </table>
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>

                    </div>

                    <div class="col-sm-12 text-center">
                        <div class="row">
                            <hr>
                            <address>
                                Port-au-Prince, Haiti<br>
                                <abbr>Tel:</abbr> <a href="tel:+50936478199">(+509) 3647 8199</a><br/><br>
                                <strong>L'équipe AH</strong><br>
                                <a href="mailto:contact@annuairehaiti.com">contact@AnnuaireHaiti.com</a>
                            </address>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>