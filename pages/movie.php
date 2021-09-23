<link rel="stylesheet" href="./css/pages/pages.film.css" />
<link rel="stylesheet" href="./css/components/components.buttons.css" />
<style>
    /* main {
            --primary-color: "./img/darkestHour";
            --secondary-color: "./img/darkestHour";
        } */
</style>

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

<section class="film-section">
    <div class="section-title">
        <h4>Trailer</h4>
    </div>
</section>

<section class="trailer-section">
    <div class="trailer-wrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/watch?v=LtJ60u7SUSw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
</section>

<section id="recommended">
    <div class="section-title">
        <h4>Relacionados</h4>
    </div>
    <div class="film-row">
        <!-- card -->
        <mq-card mq-variant="medium">
            <a class="card-link" href="/page=1917">
                <img src="./img/1917__thumbnail.webp" />
                <div>
                    <span class="card card-label">"1917"</span>
                </div>
            </a>
        </mq-card>
    </div>
    </a>
    </mq-card>
    <mq-card mq-variant="medium">
        <a class="card-link" href="?page=_interstellar">
            <img src="./img/interstellar__thumbnail.webp" />
            <div>
                <span class="card card-label">Interestelar</span>
            </div>
        </a>
    </mq-card>
    <mq-card mq-variant="medium">
        <a class="card-link" href="?page=martian">
            <img src="./img/martian__thumbnail.webp" />
            <div>
                <span class="card card-label">Perdido em Marte</span>
            </div>
        </a>
    </mq-card>
    <mq-card mq-variant="medium">
        <a class="card-link" href="?page=onceUponATime">
            <img src="./img/onceUponATime__thumbnail.webp" />
            <div>
                <span class="card card-label">Era uma vez no Oeste</span>
            </div>
        </a>
    </mq-card>
    </div>
</section>
