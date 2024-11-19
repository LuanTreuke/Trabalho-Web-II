<section class="section-contato">
    <div class="contato-container">
        <div class="center">
            <form method="post" action="">
                <input type="text" name="nome" id="" placeholder="Nome:">
                <input type="text" name="email" id="" placeholder="Email:">
                <input type="text" name="telefone" id="" placeholder="Telefone:">
                <textarea name="mensagem" id="" placeholder="Digite a sua mensagem:"></textarea>
                <input type="submit" name="btnEnviar" value="Enviar">
            </form>

            <div class="map">
            <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/search?q=Pokémon+Company+Japão,+〒106-6108+Tokyo,+Minato+City,+Roppongi,+6+Chome−10−1,+Roppongi+Hills+Mori+Tower,+8F&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"><a href="https://www.gps.ie/">gps tracker sport</a></iframe></div>
            </div>
        </div>

        <?php 
            if(isset($_POST['btnEnviar'])){
                new Email();
            }
        ?>
    </div>
</section>

