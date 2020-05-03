
<section id="abilities3" class="bg-dark text-white mx-5 border border-secondary rounded mb-5 shadow-lg">
        <div class="container">
          <div class="row my-3 ">
            <div class="col-lg-12 my-4">
              <h1 class="display-3 text-white" align="center" >İletisim Bilgileri</h1>
            </div>
          </div>
          <div class="row my-1 ">
            <div class="col-lg-12 my-1">
            <table   class="table table-striped table-dark my-table" align="center">
            	<tr>
            	   <td >Ad</td>
            	   <td ><?php echo $_POST["ad"]?></td>
            	</tr>
              <tr>
                <td>Mail</td>
                <td ><?php echo $_POST["email"]?></td>
            	</tr>
              <tr>
                <td>Sifre</td>
                <td ><?php echo $_POST["sifre"]?></td>
              </tr>
              <tr>
                <td>Hobiler</td>
                <td >
                  <?php if(isset($_POST['sports']))
                  {
                    $check=implode("-",$_POST['sports']);
                    echo($check);
                  }
                  ?>
              </td>
              </tr>
              <tr>
                <td>En Sevilen Programlama Dili</td>
                <td ><?php echo $_POST["language"]?></td>
              </tr>
              <tr>
                <td>Adres</td>
                <td ><?php echo $_POST["addres"]?></td>
              </tr>
              <tr>
                <td>Yaşadığınız Şehir</td>
                <td ><?php echo $_POST["sehirler"]?></td>
              </tr>
                </table>
              </div>
            </div>
        </div>
      </section>
