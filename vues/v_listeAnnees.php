<h2>Statistiques annuelles</h2>
<div class="row">
    <div class="col-md-4">
        <h3>Sélectionner une année : </h3>
    </div>
    <div class="col-md-4">
            <div class="form-group">
                <label for="lstAnnees" accesskey="n">Années : </label>
                <select id="lstAnnees" name="lstAnnees" class="form-control">
                    <?php
                    foreach ($lesAnnees as $uneAnnee) {
                        $annee = $uneAnnee['annee'];
                        if ($annee == $anneesASelectionners) {
                            ?>
                            <option selected value="<?php echo $annee ?>"><?php echo $annee ?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $annee ?>"><?php echo $annee ?> </option>
                            <?php
                        }
                    }
                    ?>    

                </select>
            </div>
            <input id="ok" value="Valider" class="btn btn-success" role="button" onclick="afficherStatAnnee();"/>
            <input id="annuler" type="reset" value="Effacer" class="btn btn-danger" role="button" />
    </div>
    
    
    <div id="zoneStat">
    </div
</div>