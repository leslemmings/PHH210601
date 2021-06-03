<nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?">Title</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="?page=edit&idp=1">Edit produit 1</a></li>
                <li><a href="?page=new">Nouveau Produit</a></li>
                <li><a href="?page=produit&idp=1">Produit 1</a></li>
            </ul>
            <form action="" method="GET" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="hidden" name="page" id="input" class="form-control" value="listproduits">
                    <input name="recherche" type="text" class="form-control" placeholder="Search" 
                        value="<?= isset($_GET["recherche"])?$_GET["recherche"]:"";?>">
                </div>
                <div id="completion-container" 
                    style="border:1px solid black;background-color:skyblue; position:fixed;left:44.3%;height:auto;min-height:50px;width:205px;"></div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">MENU <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=panier">Panier</a></li>
                        <li><a href="?page=listproduits">List produits</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>