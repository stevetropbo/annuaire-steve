
 <table class="table">


 <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
 </tr>
 </thead>
 <tbody>
    <?php foreach ($les_membres as $k =>$valeurs):?>
    <tr>
  <td>
    <?php echo($valeurs['id'])?>
  </td>
    <td>
    <?php echo($valeurs['nom'])?>
  </td>
    <td>
    <?php echo($valeurs['prenom'])?>
  </td>
  </tr>
  <?php endforeach;?>
 </tbody>



  </table>