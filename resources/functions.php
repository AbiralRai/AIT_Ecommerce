<?php 

$upload_directory = "uploads";

/*************** helper functions **********************/


function last_id()
{

    global $connection;

    return mysqli_insert_id($connection);


}


function set_message($msg)
{

    if (!empty($msg)) {

        $_SESSION['message'] = $msg;

    } else {

        $msg = "";


    }


}


function display_message()
{

    if (isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }



}


function redirect($location)
{

    return header("Location: $location ");


}




function query($sql)
{

    global $conn;

    return mysqli_query($conn, $sql);


}


function confirm($result)
{

    global $conn;

    if (!$result) {

        die("QUERY FAILED " . mysqli_error($connection));


    }


}


function escape_string($string)
{

    global $conn;

    return mysqli_real_escape_string($conn, $string);


}



function fetch_array($result)
{

    return mysqli_fetch_array($result);


}


/****************************FRONT END FUNCTIONS************************/


// get products 


function get_products()
{

    $query = query(" SELECT * FROM products");
    confirm($query);

    while ($row = fetch_array($query)) {

        $product_image = display_image($row['product_image']);
        $product = <<<DELIMETER


        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                <a href="product-page.php?id={$row['product_id']}">
                    <img style="height:120px" src="../public/img/{$row['product_image']}" class="card-img-top" alt="">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center">
                    <!--Category & Title-->
                    <a href="#" class="grey-text">
                        <h5>{$row['brand']}</h5>
                    </a>
                    <h5>
                        <strong>
                            <a href="product-page.php?id={$row['product_id']}" class="dark-grey-text">{$row['product_name']}
                                <span class="badge badge-pill danger-color d-none">NEW</span>
                            </a>
                        </strong>
                    </h5>

                    <h4 class="font-weight-bold blue-text">
                        <strong>&#36;{$row['price']}</strong>
                    </h4>

                    <a href="../public/product-page.php?=id={$row['product_id']}">
                    <button type="button" class="btn myBlueBG cart">Add To Cart </button>
                    
                    </a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->

DELIMETER;

        echo $product;


    }


}

function get_categories() {

    $query = query(" SELECT * FROM categories");
    confirm($query);

    while ($row = fetch_array($query)) {

$category_links = <<<DELIMETER

        <li class=nav-item'>

                <a class='nav_link font-weight-bold blue-text ' href='category.php?id={$row['cat_id']}'> {$row['cat_name']} </a> 

                </li>

DELIMETER;

echo $category_links;

    }


}




/*****************************Back End Function*************************/


function display_image($picture)
{

    global $upload_directory;

    return $upload_directory . DS . $picture;

}


?>