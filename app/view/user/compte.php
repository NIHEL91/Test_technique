<link href="../css/formulaire.css" rel="stylesheet" type="text/css" />
<div class="container m-9">
    <form name="compte" method="POST" action="index.php?entite=users&action=createUser">
        <fieldset>
            <div class="form_group">
                <input class="form-control mt-2" type="hidden" name="role" value="client">
            </div>
            <div class="form_group">
                <label for="contenu" class="form-label form-label-sm">E-mail *</label>
                <input class="form-control form-control-sm" type="text" name="email" required>
            </div>
            <div class="form_group">
                <label for="contenu" class="form-label form-label-sm">Mot de passe *</label>
                <input id="pass" class="form-control form-control-sm" type="password" name="password" required>
            </div>

            <div class="form_group">
                <label for="titre" class="form-label form-label-sm ">Prénom *</label>

                <input class="form-control form-control-sm" type="text" name="firstname" pattern="^[a-zA-Z\s]+$" title="Le prénom ne doit contenir que des lettres." data-error="Le prénom ne doit contenir que des lettres." required>
            </div>
            <div class="form_group">
                <label for="contenu" class="form-label form-label-sm">Nom *</label>
                <input class="form-control form-control-sm" type="text" name="lastname" pattern="^[a-zA-Z\s]+$" title="Le nom ne doit contenir que des lettres." data-error="Le nom ne doit contenir que des lettres." required>
            </div>

            <div class="form_group">
                <label for="contenu" class="form-label form-label-sm">Téléphone *</label>
                <input class="form-control form-control-sm" type="text" name="phone" title="Le numéro de téléphone doit être au format valide." data-error="Le nom ne doit contenir que des lettres." required>
            </div>

            <div class="form_group">
                <label for="contenu" class="form-label form-label-sm">adresse</label>
                <input class="form-control form-control-sm" type="text" name="adress">
            </div>
            <div class="form_group">
                <input class="form-control mt-2" type="hidden" name="abonne" value="0">
            </div>
            <button class=" btn btn-dark  mt-5  mb-3" type="submit">ENREGISTRER</button>

            <p> Vous avez déjà un compte ? <a href="index.php?entite=users&action=connect">Connectez-vous à la place!</a>
        </fieldset>
    </form>
</div>