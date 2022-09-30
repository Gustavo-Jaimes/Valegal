<!DOCTYPE html>
<?=$headGNRL?>

<link rel="icon" href="./img/design/favicon.png">
<body>

<?=$header?>


  <!-- Seccion de servicios productos -->
<section  class="servicios">
    <h1 class="uk-flex uk-flex-center uk-margin-remove">ARTICULOS RECIENTES</h1>
    <p class="uk-flex uk-flex-center uk-margin-remove uk-text-justify texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt veritatis aut perspiciatis veniam, unde vero excepturi temporibus rerum, dicta ea corrupti ipsa voluptas cum dolorum, magni quia ipsum blanditiis voluptatibus!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis alias cumque recusandae, corporis, odio quisquam aut similique nihil, debitis quod sapiente distinctio quae nostrum!</p>
    <div class="uk-text-center" uk-grid>
        <div class="uk-width-auto@m uk-margin-remove@s uk-padding-remove@s uk-flex uk-flex-middle uk-flex-center categorias uk-padding"></div>
        <div class="uk-width-expand@m contenido">

                <div uk-filter="target: .js-filter">
                    <ul class="uk-subnav uk-subnav-pill" id="filterBar">
                        
                        <li data-id="0" uk-filter-control><a style="color: black; font-family: PoppinsRegular; font-size: 1.3em;" href="#">TODOS</a></li>

                        <!-- show categories -->
                        <?php
                             $filter = 0;
                        $categories_list = $CONEXION -> query("SELECT * FROM `productoscat` WHERE parent != 0 ORDER BY id DESC");
                        while($categorie = $categories_list -> fetch_assoc()):
                        ?>
                        <li <?php echo $filter ==  $categorie['id'] ? 'class="uk-active"' : ''?> uk-filter-control="[data-color='<?php echo $categorie['id']?>']" data-id="<?php  echo $categorie['id'] ?>"><a style="color: black; font-family: PoppinsRegular; font-size: 1.3em;" href="#"><?php echo $categorie['txt']?></a></li>
                        <?php endwhile; ?>
                    </ul>




                    <div class="uk-text-center" uk-grid>
                        <?php
                            $CONSULTA13 = $CONEXION -> query("SELECT * FROM productos");
                            while ($row_CONSULTA13 = $CONSULTA13 -> fetch_assoc()):
                        ?>

                        <div class="uk-width-1-4@m uk-padding-remove container" style="margin-top: 1em">
                            <?=item_inicio8($row_CONSULTA13['id'])?>
                        </div>
                        
                        <?php endwhile; ?> 
                    </div>
                </div>
        </div>
        <div class="uk-width-auto@m uk-padding"></div>
    </div>
    
</section>





<?=$footer?>
<script>
            window.addEventListener('load', () => {
                const hashFilter = function (params) {
                    const urlPath = location.pathname;
                    const urlSplit = urlPath.split('/');
                    const urlSearch = urlSplit.find(el => el.search('_servicios') >= 0);
                    const urlFilter = urlSearch.split('_')[1];
                    return urlFilter;
                }
                // elegir filtro
                const filterActive = document.querySelector(`li[uk-filter-control="[data-color='${hashFilter()}']"`);
                filterActive.click();
            });

            // obtener y ponerlo en el href
            const showHref = element => {
                const paginationChild = pagination.children;
                for (let i = 0; i < paginationChild.length; i++) {
        
                    if (paginationChild[i].dataset.pageId != undefined) {
                        const page = paginationChild[i].dataset.pageId;
                        paginationChild[i].href = `${page}_${element.dataset.id}_servicios`; 
                    }
                }
            }
            filterBar.addEventListener('click', (e) => {
                if (e.target && e.target.tagName == 'A') {
                    showHref(e.target.parentNode);
                }else if (e.target && e.target.tagName == 'LI') {
                    showHref(e.target);
                }
            });
    </script>

</html>