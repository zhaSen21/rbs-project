<!DOCTYPE html>
<html>

<head>
    <title>RBS - Invoice</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/css/app.css">

    <!--==================== FONTS ====================-->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

    <style type="text/css" media="print">
        @page {
            size: landscape;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="invoices">

            <div class="card__header">
                <div>
                    <h2 class="invoice__title">RBS - Rumah Belajar Spirit</h2>
                </div>
                <div>

                </div>
            </div>
            <div>
                <div class="card__header--title">
                    <h1 class="mr-2">#0001
                    </h1>
                    <p>Juni 05, 2024 at 11:00 am </p>
                </div>

            </div>

            <div class="table invoice">
                <div class="logo">
                    <img src="assets/images/logo.png" alt="" style="width: 200px">
                </div>
                <div class="invoice__header--title">
                    <p></p>
                    <p class="invoice__header--title-1">Invoice</p>
                    <p></p>
                </div>


                <div class="invoice__header--item">
                    <div>
                        <h2>Invoice To:</h2>
                        <p>Azhar</p>
                    </div>
                    <div>
                        <div class="invoice__header--item1">
                            <p>Invoice</p>
                            <span>#0001</span>
                        </div>
                        <div class="invoice__header--item2">
                            <p>Date</p>
                            <span>05/06/2024</span>
                        </div>

                    </div>
                </div>

                <div class="table py1">

                    <div class="table--heading3">
                        <p>#</p>
                        <p>Detail Program</p>
                        <p>Harga</p>
                        <p>Jumlah</p>
                        <p>Total</p>
                    </div>

                    <!-- item 1 -->
                    <div class="table--items3">
                        <p>1</p>
                        <p>Program Reguler Paket</p>
                        <p>Rp2.500.000</p>
                        <p>1</p>
                        <p>Rp2.500.000</p>
                    </div>



                </div>

                <div class="invoice__subtotal">
                    <div>
                        <h2>Thank you for your business</h2>
                    </div>
                    <div>
                        <div class="invoice__subtotal--item1">
                            <p>Sub Total</p>
                            <span>Rp2.500.000</span>
                        </div>
                        <div class="invoice__subtotal--item2">
                            <p>Discount</p>
                            <span>Rp300.000</span>
                        </div>

                    </div>
                </div>

                <div class="invoice__total">
                    <div>
                        <h2>Terms and Conditions</h2>
                        <p>Dengan melanjutkan pembelian paket pembelajaran Rumah Belajar Spirit, pelanggan dianggap
                            telah membaca, memahami, dan menyetujui semua Syarat dan Ketentuan yang tercantum</p>
                    </div>
                    <div>
                        <div class="grand__total">
                            <div class="grand__total--items">
                                <p>Total</p>
                                <span>Rp2.200.000</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card__footer">
            </div>

        </div>
    </div>

    <!--==================== APP JS ====================-->
    <script src="assets/js/app.js"></script>

</body>

</html>
