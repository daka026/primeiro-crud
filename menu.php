<nav class="navbar navbar-expand-lg navbar-light bg-white  shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="pag_inicial.php">
                Home
            </a>
            <a class="navbar-brand" href="lista_personagens.php">
                Listar Personagens
            </a>
            <a class="navbar-brand" href="cadastra_personagem.php">
                Cadastrar Personagens
            </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <?php
                    if(isset($_SESSION['usuario'])){
                    ?>
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        <?php echo "$_SESSION[usuario]"; ?>                                
                        </a>  
                        <div class="dropdown-menu">          
                            <a class="dropdown-item" href="logout.php">Realizar Logout</a>
                        </div>
                    <?php
                    }else{
                    ?>
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        Opções Disponíveis
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="login.php">Realizar login</a>
                            <a class="dropdown-item" href="cadastro.php">Realizar cadastro</a>
                        </div>
                    <?php }
                    ?>
                </li>
            </ul>
        </div>
    </nav>