<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/') ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/') ?>my.css">
    <title>Peduli Lansia</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

</head>

<body>

    <!-- Navbar -->
    <section class="navbar">
        <div class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pl-5 pr-5">
                <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
                <a class="navbar-brand" href="<?= base_url() ?>">
                    <img src="https://img2.pngdownload.id/20180413/hsq/kisspng-jakarta-logo-cdr-indonesia-5ad15d79b78c80.0462443715236703937518.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    PANTI WERDHA JAKARTA
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active mr-5">
                            <a class="nav-link" href="<?= base_url() ?>">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="<?= base_url("Home/profile") ?>">Profil Panti</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link" href="<?= base_url("Home/lokasi") ?>">LOKASI</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="<?= base_url("Home/hubungi") ?>">Hubungi</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </section>



    <!-- Page Map -->
    <section class="lokasi ml-3 mr-3 pt-5 mb-5" id="lokasi">
        <div class="container pt-5">
            <h1 class="text-center">Lokasi Panti Sosial Werdha Jakarta</h1>
            <div class="row">
                <div class="col-md-12">
                    <div id="mapid"></div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="footer" style="position: fixed; bottom: 0;">
        <div class="container-fluid">
            <div class="footer">
                FOOTER
            </div>
        </div>
    </footer>

    <!-- Offline -->
    <script src="<?= base_url('bootstrap') ?>/js/jquery.min.js"></script>
    <script src="<?= base_url('bootstrap/js/') ?>bootstrap.min.js"></script>
    <script src="<?= base_url('bootstrap') ?>/js/my.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <script>
        var map = L.map("mapid").setView([-6.2662643,106.8138157], 11);

        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        <?php foreach ($lokasi as $data) : ?>
            L.marker([<?= $data['koordinat']; ?>])
                .addTo(map)
                .bindPopup(
                    "<center><b><?php echo $data['nama_lokasi']; ?></b><br><?php echo $data['alamat']; ?></center>"
                );
        <?php endforeach; ?>
    </script>
</body>

</html>