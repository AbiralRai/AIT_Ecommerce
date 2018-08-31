

<nav class="navbar navbar-expand-lg navbar-light bg-white h-100 align-items-start">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
        <ul class="nav nav-bar flex-column lighten-4 py-4 ">
            <li class=" nav-brand">
                <h4 class="nav-item cat">Categories</h4>
            </li>

            <?php

            get_categories();

            ?>
            </ul>
            </div>
        </nav>