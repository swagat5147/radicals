<?php
    //include auth_session.php file on all user panel pages
    include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <title>Radical: About Us</title>
</head>

<body>

    <header class="jumbotron">
        <div class="float-right text-center align-medium">
            <a href="logout.php" target="_blank" id="no-hyper">
                <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i>
                <p class="d-none d-sm-block">Logout</p>
            </a>

        </div>
        <div class="container-fluid">
            <div class="row row-header">
                <div class="float-left">
                    <img src="assets/images/radical.svg">
                </div>
                <div class="float-left">
                    <h3>Hello, <?php echo $_SESSION['username']; ?> !</h3>
                </div>
            </div>
        </div>
    </header>
    <p>
    </p>
    <div class="container-fluid">
        <div class="row row-property">
            <div class = "col-12">
                <h3 class="text-uppercase">Your Dashboard</h3>
            </div>
        </div>
        <div class="row row-property">
            <div class="col-12 cen">
                <button class="btn btn-primary  text-uppercase float-left" type="submit">
                    Add New
                </button>
                <button class="btn btn-danger  text-uppercase float-right" type="submit">   
                    Delete
                </button>
            </div>
        </div>
        <div class="table-responsive-sm">
            <table class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Select</th>
                        <th scope="col">No.</th>
                        <th scope="col">Website</th>
                        <th scope="col">Product</th>
                        <th scope="col">URL</th>
                        <th scope="col">Current Product Price</th>
                        <th scope="col">Your Threshold Price</th>
                        <th scope="col">Product Added On</th>
                        <th scope="col">Price Last Changed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                        </td>
                        <th scope="row">1</th>
                        <td>Amazon</td>
                        <td>
                            <p data-text="Logitech G102 Prodigy Optical Gaming mouse with 16.8m LED colors, Built-in Storage Capability for PC/Mac"
                                class="ellipsis">
                                Logitech G102 Prodigy Optical Gaming mouse with 16.8m LED colors, Built-in Storage Capability for
                                PC/Mac
                            </p>
                        </td>
                        <td>
                            <div>
                                <a href="https://www.amazon.in/Logitech-G102-Optical-Gaming-Mouse/dp/B01MYPU20Z/ref=sr_1_3?dchild=1&pf_rd_i=1375248031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=ff2ce997-4383-4998-8316-95411788ec46&pf_rd_r=QYH25YQWH8766AMKQ7YW&pf_rd_s=merchandised-search-3&pf_rd_t=101&qid=1590133214&refinements=p_72%3A1318477031%2Cp_85%3A10440599031&rps=1&s=computers&sr=1-3"
                                    target="_blank">
                                    <i class="fa fa-external-link diff" aria-hidden="true"></i>Visit
                                </a>
                            </div>
            
                        </td>
                        <td>&#x20B9; 1595.0</td>
                        <td>&#x20B9; 1200.0</td>
                        <td>12-05-2020 20:34:15</td>
                        <td>15-05-2020 23:13:57</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2"></label>
                            </div>
                        </td>
                        <th scope="row">2</th>
                        <td>Amazon</td>
                        <td>
                            <p data-text="Woodland Men's Sneakers"
                                class="ellipsis">
                                Woodland Men's Sneakers
                            </p>
                        </td>
                        <td>
                            <div>
                                <a href="https://www.amazon.in/Woodland-Camel-Sneakers-9-India-40777CMA/dp/B07DPZGC88/ref=lp_1983560031_1_2?s=shoes&ie=UTF8&qid=1590152874&sr=1-2"
                                    target="_blank">
                                    <i class="fa fa-external-link diff" aria-hidden="true"></i>Visit
                                </a>
                            </div>
            
                        </td>
                        <td>&#x20B9; 3505.0</td>
                        <td>&#x20B9; 3000.0</td>
                        <td>14-05-2020 10:25:51</td>
                        <td>17-05-2020 21:43:45</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3"></label>
                            </div>
                        </td>
                        <th scope="row">3</th>
                        <td>Flipkart</td>
                        <td>
                            <p data-text="boAt Airdopes 200 True Wireless Bluetooth Headset  (Active Black, True Wireless)"
                                class="ellipsis">
                                boAt Airdopes 200 True Wireless Bluetooth Headset (Active Black, True Wireless)
                            </p>
                        </td>
                        <td>
                            <div>
                                <a href="https://www.flipkart.com/boat-airdopes-200-true-wireless-bluetooth-headset/p/itm3d7b80c8fabce?pid=ACCFJ4F9GWCHG8Z9&lid=LSTACCFJ4F9GWCHG8Z9NNFYSY&marketplace=FLIPKART&srno=b_1_17&otracker=hp_omu_Top%2BDeals%2Bon%2BElectronics_2_26.dealCard.OMU_Top%2BDeals%2Bon%2BElectronics_BMA516G2R8IZ_18&otracker1=hp_omu_WHITELISTED_neo%2Fmerchandising_Top%2BDeals%2Bon%2BElectronics_NA_dealCard_cc_2_NA_view-all_18&fm=neo%2Fmerchandising&iid=5c64bc4f-1ccb-4487-bbe0-dc5cdef4b941.ACCFJ4F9GWCHG8Z9.SEARCH&ppt=browse&ppn=browse&ssid=sw0c0pouq80000001590153490144"
                                    target="_blank">
                                    <i class="fa fa-external-link diff" aria-hidden="true"></i>Visit
                                </a>
                            </div>
            
                        </td>
                        <td>&#x20B9; 1999.0</td>
                        <td>&#x20B9; 1699.0</td>
                        <td>14-05-2020 10:44:23</td>
                        <td>17-05-2020 13:34:26</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            </div>
                        </td>
                        <th scope="row">4</th>
                        <td>Flipkart</td>
                        <td>
                            <p data-text="Abstract Men Hooded Neck Dark Blue T-Shirt"
                                class="ellipsis">
                                Abstract Men Hooded Neck Dark Blue T-Shirt
                            </p>
                        </td>
                        <td>
                            <div>
                                <a href="https://www.flipkart.com/tripr-abstract-men-hooded-neck-dark-blue-t-shirt/p/itmfbh24farrt3qj?pid=TSHFBDGVXMVHVUPY&lid=LSTTSHFBDGVXMVHVUPYCGUS7L&marketplace=FLIPKART&srno=b_1_3&otracker=nmenu_sub_Men_0_T-Shirts&fm=neo%2Fmerchandising&iid=db8b7b7a-a182-4572-9440-f17723ae4c59.TSHFBDGVXMVHVUPY.SEARCH&ppt=browse&ppn=browse&ssid=3tjnvgtl740000001590153769306"
                                    target="_blank">
                                    <i class="fa fa-external-link diff" aria-hidden="true"></i>Visit
                                </a>
                            </div>
                    
                        </td>
                        <td>&#x20B9; 360.0</td>
                        <td>&#x20B9; 240.0</td>
                        <td>14-05-2020 10:44:23</td>
                        <td>17-05-2020 13:34:26</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5"></label>
                            </div>
                        </td>
                        <th scope="row">5</th>
                        <td>Amazon</td>
                        <td>
                            <p data-text="Fossil Men's Gen 4 Explorist HR Heart Rate Stainless Steel Touchscreen Smartwatch, Color: Smoke Grey (Model: FTW4012)" class="ellipsis">
                                Fossil Men's Gen 4 Explorist HR Heart Rate Stainless Steel Touchscreen Smartwatch, Color: Smoke Grey (Model: FTW4012)
                            </p>
                        </td>
                        <td>
                            <div>
                                <a href="https://www.amazon.in/Fossil-Explorist-Digital-Black-Watch-FTW4012/dp/B07GB324YK/ref=lp_11142527031_1_1?s=watches&ie=UTF8&qid=1590154015&sr=1-1"
                                    target="_blank">
                                    <i class="fa fa-external-link diff" aria-hidden="true"></i>Visit
                                </a>
                            </div>
                    
                        </td>
                        <td>&#x20B9; 13195.0</td>
                        <td>&#x20B9; 11500.0</td>
                        <td>15-05-2020 12:24:31</td>
                        <td>19-05-2020 11:39:16</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="assets/js/jquery.js" integrity="" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/cjs/popper.min.js"
        integrity="sha256-OH05DFHUWzr725HmuHo3pnuvUUn+TJuj8/Qz9xytFEw=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/layout.js"></script>

</body>

</html>