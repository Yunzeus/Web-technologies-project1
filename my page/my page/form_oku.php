<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

      <section id="abilities3" class="bg-dark text-white mx-5 border border-secondary rounded mb-5 shadow-lg">
        <div class="container">
          <div class="row my-3 ">
            <div class="col-lg-12 my-4">
              <h1 class="display-3 text-white" align="center" ><?php 
                          
                  $myemail="CC@hotmail.com";
                  $mysifre="123";
                  $email = $_POST['email'];
                  $sifre = $_POST['sifre'];
                  $namen=explode("@",$email);
                  if($email==$myemail && $mysifre==$sifre)
                  {
                    echo $namen[0]."  Hoşgeldin" ;
                  }else {
                    echo "Kullanıcı epostası yada şifre hatalı";
                    header("Location:contact.html");
                  }?>
              </h1>
            </div>
          </div>
        </div>
      </section>

    </table>
   
    </body>
<html>
