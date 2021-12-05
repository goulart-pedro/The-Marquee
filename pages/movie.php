<head>
    <link rel="stylesheet" href="./css/pages/pages.film.css" />
    <link rel="stylesheet" href="./css/components/components.buttons.css" />
</head>
<html>
    <body>
        <section id="hero">
            <div class="grid__container">
                <img src=<?=$images['hero__frente']?> class="hero__imagem__frente" />
                <img src=<?=$images['hero__fundo']?> class="hero__imagem__fundo" />
            </div>
        </section>
        <section class="film-section">
            <div class="section-title">
                <h4><?=$currMovie['Title']?></h4>
            </div>
        </section>
        <section id="sinopse">
            <div class="flex-container">
                <div class="description">
                    <p><?=$currMovie['Description']?></p>
                </div>

                <div class="sinopse-images">
                    <span class="tagline"><?=$currMovie['Tagline']?></span>
                    <img src=<?=$images['sinopse__frente']?>  class="sinopse__frente" />
                    <img src=<?=$images['sinopse__fundo']?>  class="sinopse__fundo" />
                </div>
            </div>
        </section>

        <section id="comments">
            <div class="section-title">
                <h4>Comentarios</h4>
            </div>
            <div class="write-comment">
                <form action="">
                <input type="hidden" value="Author">
                <input type="hidden" value=<?=$currMovie['Id']?>>
                <textarea name="Text" id="new-comment-area" cols="30" rows="2" placeholder="escreva seu comentario aqui"></textarea>
                <button>Pronto</button>
                </form>
                
            </div>
            <div class="comment-list">
                <div class="comment-wrapper">
                    <p id="author">Autor</p>
                    <p id="comment">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, enim, reiciendis deserunt ad obcaecati minus quae nisi odit iusto esse adipisci! Ratione assumenda nemo illo odio impedit quaerat iste recusandae temporibus eum quasi deserunt accusamus quibusdam, excepturi vitae corporis deleniti.</p>
                </div> 
                <div class="comment-wrapper">
                    <p id="author">Autor</p>
                    <p id="comment">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, enim, reiciendis deserunt ad obcaecati minus quae nisi odit iusto esse adipisci! Ratione assumenda nemo illo odio impedit quaerat iste recusandae temporibus eum quasi deserunt accusamus quibusdam, excepturi vitae corporis deleniti.</p>
                </div> 
            </div>
        </section>

        <section class="film-section">
            <div class="section-title">
                <h4>Trailer</h4>
            </div>
        </section>

        <section class="trailer-section">
            <div class="trailer-wrapper">
            <iframe 
                width="560" 
                height="315" 
                src="https://www.youtube.com/embed/<?=$currMovie['Trailer']?>" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"    
                allowfullscreen
                >
            </iframe> 
            </div>
        </section>
                
        <section id="recommended">
            <div class="section-title">
                <h4>Relacionados</h4>
            </div>
            <div class="film-row">
               <?php foreach ($related as $item): ?>
                <mq-card mq-variant="medium">
                    <a class="card-link" href="page=movie&id=<?=$item['Id']?>">
                        <img src=<?php echo "./img/".$item['Id']."/thumbnail.webp"?> />
                        <div>
                            <span class="card card-label"><?=$item['Title']?></span>
                        </div>
                    </a>
                </mq-card>
                <?php endforeach ?>
            </div>
        </section>
       
    </body>
</html>