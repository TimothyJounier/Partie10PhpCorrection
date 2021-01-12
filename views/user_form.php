<form method="POST">
    <!-- nom -->
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" name="name" pattern="[A-Za-z-éèêëàâäôöûüç' ]+" title="Lettres majuscule et minuscule uniquement" required value="<?= $name ?? ''?>">
        <div id="name_error" class="form-text"><?= $errorsArray['name_error'] ?? ''?></div>
    </div>
  
    <!-- prénom -->
    <div class="mb-3">
        <label for="firstname" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="firstname" name="firstname" pattern="[A-Za-z-éèêëàâäôöûüç' ]+" title="Lettres majuscules et minuscules uniquement" required value="<?= $firstname ?? ''?>">
        <div id="firstname_error" class="form-text"><?= $errorsArray['firstname_error'] ?? ''?></div>
    </div>

    <!-- Mail -->
    <div class="mb-3">
        <label for="mail" class="form-label">Mail</label>
        <input type="email" class="form-control" id="mail" name="mail" title="Votre adresse mail n'est pas valide" required value="<?= $mail ?? ''?>">
        <div id="mail_error" class="form-text"><?= $errorsArray['mail_error'] ?? ''?></div>
    </div>

    <!-- date de naissance -->
    <div class="mb-3">
        <label for="birthDate" class="form-label">Date de naissance</label>
        <input type="date" class="form-control" id="birthDate" name="birthDate" required value="<?= $birthDate ?? ''?>">
        <div id="birthDate_error" class="form-text"><?= $errorsArray['birthDate_error'] ?? ''?></div>
    </div>

    <!-- pays de naissance -->
    <div class="mb-3">
        <label for="birthCountry" class="form-label">Pays de naissance</label>
        <select class="form-select" id="birthCountry" name="birthCountry" required >
            <option>Choisissez votre pays de naissance</option>
            <option value="France" <?= ($birthCountry == 'France') ? 'selected' : '' ?> >France</option>
            <option value="Italie" <?= ($birthCountry == 'Italie') ? 'selected' : '' ?> >Italie</option>
            <option value="Grande Bretagne" <?= ($birthCountry == 'Grande Bretagne') ? 'selected' : '' ?> >Grande Bretagne</option>
            <option value="Mars">Mars</option>
        </select>     
        <div id="birthCountry_error" class="form-text"><?= $errorsArray['birthCountry_error'] ?? ''?></div>
    </div>

    <!-- Téléphone -->
    <div class="mb-3">
        <label for="phone" class="form-label">Téléphone</label>
        <input type="tel" class="form-control" id="phone" name="phone" pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" title="Votre numéro de téléphone n'est pas valide format requis : 0000000000" value="<?= $phone ?? ''?>">
        <div id="phone_error" class="form-text"><?= $errorsArray['phone_error'] ?? ''?></div>
    </div>


    <!-- URL -->
    <div class="mb-3">
        <label for="link" class="form-label">Lien Codecademy</label>
        <input type="text" class="form-control" id="link" name="link" pattern="/^(?:http(s)?://)?[\w.-]+(?:.[\w.-]+)+[\w-._~:/?#[]@!$&'()*+,;=.]+$/" title="Votre URL n'est pas valide" value="<?= $link ?? ''?>">
        <div id="link_error" class="form-text"><?= $errorsArray['link_error'] ?? ''?></div>
    </div>

    <!-- Numéro Pole Emploi -->
    <div class="mb-3">
        <label for="job_number" class="form-label">Numéro pole emploi</label>
        <input type="text" class="form-control" id="job_number" name="job_number" pattern="[0-9]{7}[A-Z]{1}" title="Votre numéro pôle emploi n'est pas valide" value="<?= $job_number ?? ''?>">
        <div id="job_number_error" class="form-text"><?= $errorsArray['job_number_error'] ?? ''?></div>
    </div>

    <!-- Badge Number -->
    <div class="mb-3">
        <label for="badge_number" class="form-label">Nombre de badge</label>
        <input type="number" class="form-control" id="badge_number" name="badge_number" pattern="[0-9]{7}[A-Z]{1}" title="Votre numéro de badge n'est pas valide" value="<?= $badge_number ?? ''?>" min="0" max="200">
        <div id="badge_number_error" class="form-text"><?= $errorsArray['badge_number_error'] ?? ''?></div>
    </div>

<!-- diplome -->
    <div class="form-check">
        <input class="form-check-input" type="radio" name="diploma" value="sans" id="sansdiplome"  <?= (isset($diploma) && $diploma == 'sans') ? 'checked' : ''?>>
        <label class="form-check-label" for="sansdiplome">
            Sans diplome
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="diploma" value="Bac" id="bac" <?= (isset($diploma) && $diploma == 'Bac') ? 'checked' : ''?>>
        <label class="form-check-label" for="bac">
            Bac
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="diploma" value="Bac+2" id="bac2"  <?= (isset($diploma) && $diploma == 'Bac+2') ? 'checked' : ''?>>
        <label class="form-check-label" for="bac2">
          Bac+2
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="diploma" value="bac+3 ou Supérieur" id="bac3" <?= (isset($diploma) && $diploma == 'bac+3 ou Supérieur') ? 'checked' : ''?>>
        <label class="form-check-label" for="bac3">
         Bac+3 ou supérieur
        </label>
    </div>

    <!-- Question 1 -->
    <div class="mb-3">
        <label for="superhero">Quel superhero seriez-vous?</label>
        <textarea class="form-control" placeholder="Quel superhero seriez-vous?" id="superhero" name="superhero" style="height: 100px"><?= $superhero ?? ''?></textarea>
    </div>

    <!-- Question 2 -->
    <div class="mb-3">
        <label for="hack">Racontez nous un de vos hack</label>
        <textarea class="form-control" placeholder="Racontez nous un de vos hack" id="hack" name="hack" style="height: 100px"><?= $hack ?? ''?></textarea>
    </div>

    <!-- Adresse -->
    <div class="mb-3">
        <label for="adress">Adresse</label>
        <textarea class="form-control" placeholder="Indiquez votre adresse" id="adress" name="adress" style="height: 100px"><?= $adress ?? ''?></textarea>
    </div>



  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>