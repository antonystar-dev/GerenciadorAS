</main>
<footer id="rodape">
<?php
if (!empty($_SESSION["perfilcol"])) {
          ?>


 
<hr>
<div class="copyrightDiv">
    <div class="copyrightDiv-Divisoes">
        <h6>&copy; Antonystar-DEV</h6>
    </div>
    <div class="copyrightDiv-Divisoes">
        <h6>criado por <a href="https://www.antonystar.com/"><img src="./view/img/logo.ico" height="30px">Antonio Araujo</a></h6>
    </div>
</div>





          <?php
       }else{
        //echo "não logado";
       }
       ?>
</footer>

</body>

</html>