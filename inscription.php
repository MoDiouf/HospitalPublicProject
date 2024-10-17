<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire d'Inscription</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    h2{
        margin: 35px 0;
        font-size: 25px;
    }
    form {
        max-width: 500px;
        margin: 60px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }
    
    .form-group {
        position: relative;
        margin-bottom: 20px; /* Ajout de marge basse */
    }
    
    label {
        position: absolute;
        top: 10px;
        left: 10px;
        color: #999;
        transition: top 0.3s, font-size 0.3s;
        pointer-events: none;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        outline: none;
    }

    input:focus + label,
    input:valid + label,
    select:focus + label,
    select:valid + label {
        top: -17px;
        font-size: 14px;
    }
    
    button {
        background-color: #80C432;
        color: white;
        padding: 15px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    button:hover {
        background-color: #45a049;
    }
    
        
    
</style>
</head>
<body>
<?php require './Static/header.php'?>

<main>
    <form action="#" method="post">
    <h2>Créer un compte</h2>
    
    <div class="form-group">
        <input type="text" id="firstName" name="firstName" required>
        <label for="firstName">Prénom</label>
    </div>
    
    <div class="form-group">
        <input type="text" id="lastName" name="lastName" required>
        <label for="lastName">Nom</label>
    </div>
    
    <div class="form-group">
        <input type="tel" id="phone" name="phone" required>
        <label for="phone">Numéro de téléphone</label>
    </div>
    
    <div class="form-group">
        <select id="gender" name="gender" required>
            <option value="">Sexe</option>
            <option value="male">Homme</option>
            <option value="female">Femme</option>
        </select>
        
    </div>
    
    <div class="form-group">
        <input type="email" id="email" name="email" required>
        <label for="email">Adresse Email</label>
    </div>
    
    <div class="form-group">
        <input type="password" id="password" name="password" required>
        <label for="password">Mot de Passe</label>
    </div>
    
    <button type="submit">S'Inscrire</button>
</form>

</main>
<script>
    const inputs = document.querySelectorAll('input, select');

    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            const label = this.nextElementSibling;
            label.style.top = '-17px';
            label.style.fontSize = '15px';
        });

        input.addEventListener('blur', function() {
            if (this.value === '') {
                const label = this.nextElementSibling;
                label.style.top = '10px';
                label.style.fontSize = '';
            }
        });

        if (input.value !== '') {
            const label = input.nextElementSibling;
            label.style.top = '-17px';
            label.style.fontSize = '15px';
        }
    });
</script>

</body>
</html>
