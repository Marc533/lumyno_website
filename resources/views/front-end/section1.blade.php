<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <div class="header-carousel-item bg-primary">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="text-white fw-bold mb-4">Transformez Votre Entreprise avec des
                                Solutions Digitales Innovantes avec Lumyno</h4>
                            <h1 class="display-1 text-white mb-4"></h1>
                            <p class="mb-5 fs-7">Chez Lumyno, nous propulsons les entreprises vers le futur grâce à des
                                technologies digitales de pointe et des formations professionnelles adaptées à vos
                                besoins. Que vous cherchiez à optimiser vos processus ou à renforcer les compétences de
                                votre équipe, notre expertise est là pour vous accompagner à chaque étape de votre
                                transformation digitale.
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"
                                    data-bs-toggle="modal" data-bs-target="#videoModal"
                                    onclick="setVideo('{{ asset('assets/Voicilaversioncom.mp4') }}')">
                                    <i class="fas fa-play-circle me-2"></i> Voir la présentation
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight">
                        <div class="calrousel-img" style="object-fit: cover;">
                            <img src="{{ asset('assets/img/carousel-2.png') }}" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item bg-primary">
        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                    <div class="col-lg-5 animated fadeInLeft">
                        <div class="calrousel-img">
                            <img src="{{ asset('assets/img/carousel-2.png') }}" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 animated fadeInRight">
                        <div class="text-sm-center text-md-end">
                            <h4 class="text-white mb-4">Découvrez Nos Solutions ou Explorez Nos Formations</h4>
                            <h1 class="display-1 text-white mb-4">
                            </h1>
                            <p class="mb-5 fs-7">Lumyno – Alliez Performance et Savoir-faire avec Nos Solutions
                                Digitales Sur-Mesure et Formations Professionnelles.
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"
                                    data-bs-toggle="modal" data-bs-target="#videoModal"
                                    onclick="setVideo('https://www.youtube.com/embed/URL_DE_VOTRE_VIDEO')">
                                    <i class="fas fa-play-circle me-2"></i> Voir la présentation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
<!-- Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Vidéo de Présentation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe id="videoFrame" src="" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
<script>
    function setVideo(videoUrl) {
        document.getElementById('videoFrame').src = videoUrl;
    }

    // Réinitialiser la source vidéo quand la modal est fermée
    document.getElementById('videoModal').addEventListener('hidden.bs.modal', function() {
        document.getElementById('videoFrame').src = "";
    });
</script>
