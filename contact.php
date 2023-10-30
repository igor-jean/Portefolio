<?php require_once "insertionHtmlHeader.php" ?>
    <main>
        <form action="traitement.php">
            <div class="form2">
                <div class="form1">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div class="form1">
                    <label for="prenom">Prenom :</label>
                    <input type="text" name="prenom" id="prenom">
                </div>
            </div>
            <div class="form2">
                <div class="form1">
                    <label for="mail">Email :</label>
                    <input type="text" name="mail" id="mail">
                </div>
                <div class="form1">
                    <label for="sujet">Sujet :</label>
                    <input type="text" name="sujet" id="sujet">
                </div>
            </div>
            <div class="form2">
                <div class="form1">
                    <label for="message">Message :</label>
                    <textarea name="message" id="message" style="resize:none" cols="50" rows="5"></textarea>
                </div>
                <div class="form1">
                    <input type="checkbox" name="cgu" id="cgu">
                    <label for="cgu">En validant ce formulaire, vous acceptez d'être contacté.</label>
                </div>
            </div>
                <div class="form1">
                    <input type="submit" value="Envoyer">
                </div>
            

            

            

            

            
            
            

            
            
        </form>
    </main>
<?php require_once "insertionHtmlHeader.php" ?>