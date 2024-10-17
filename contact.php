<?php require './Static/header.php' ?>
<script src="./Static/script.js"></script>
<main>
        <section class="image-contact">

        </section>
        <section class="form-contact">
            
            <form action="" method="get">
                <center><h1 class="title-form">Nous contacter</h1></center>
                <div class="block-contact">
                    <div>
                        <label for="fname">Prénom:</label><br>
                        <input type="text" id="fname" placeholder="Entre ton prenom" name="fname"><br>
                    </div>
                    <div>
                        <label for="lname">Nom:</label><br>
                    <input type="text" id="lname" name="lname" placeholder="Entre ton nom"><br>
                    </div>
                </div>
                <div class="block-contact">
                    <div>
                        <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="Entre ton mail"><br>
                    </div>
                    <div>
                         <label for="phone">Numéro de téléphone:</label><br>
                        <input type="tel" id="phone" name="phone" placeholder="Entre ton numero de téléphone"><br>
                    </div>
                </div>
                   <div class="message-contact">
                        <label for="message">Message:</label><br>
                        <textarea id="message" name="message" placeholder="Ecris ton message"></textarea><br>
                   </div>
                    
                    <input class="envoyer" type="submit" value="Submit">



            </form>
        </section>
        

</main>
<?php require './Static/footer.php' ?>