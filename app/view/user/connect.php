
<link href="../css/formulaire.css" rel="stylesheet" type="text/css" />
<div class="container mt-5">

  <form method="post" action="index.php?entite=users&action=verif">
    <?php if ($error) : ?><!-- si erreur : test d'une variable d'erreur -->
      <div class="alert alert-danger"><?= $error ?></div>
    <?php endif ?><!-- fin de si -->
    <fieldset>
      <legend>Connectez-vous</legend>

      <div class="form-group">
        <label for="email" class="form-label form-label-sm" id="email">Email *</label>
        <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="pierre.giraud@edhec.com">
      </div>

      <div class="form-group">
        <label for="password" class="form-label form-label-sm" id="password">Mot de passe *</label>
        <input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="PierreGIRAUD">
      </div>
      <button type="submit" class="btn btn-dark">Connecter</button>
    </fieldset>
  </form>
</div>