


<div>
    <?php foreach ($viewVars['allCharacters'] as $personnages) : ?>
      <table>
      <tr>
      <td><h3><?= $personnages->getName()?></h3> </td>
      <td><img src="<?= $absoluteURL ?>/images/<?= $personnages->getPicture() ?>"/> </td>
      <td> <p><?= $personnages->getDescription() ?></p> </td>
      <td><p class="infos">
        De type <?= $personnages->getType_name() ?>
      </p></td>
    </tr>
      <table>
     
    <?php endforeach; ?>
</div>




<!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-between">
    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
    <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
  </ul>
</nav>