<!DOCTYPE html>
<html>
<head>
    <title>Vue JS</title>
    <link rel="shortcut icon" type="image/png" href="/images/logo-ex-7.png"/>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

<div id="container">

    <div id="main">

        <div v-bind:style="{'background':'rgb(247, 145, 44)','padding':'15px'}">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">


                    </div>
                    <div class="col-md-6 text-right">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                    <div v-bind:class="active" v-on:click.prevent>
                                        <a href="#" class="login" v-on:click="makeActive('login')">Login</a>
                                        <span></span>
                                        <a href="#" class="register" v-on:click="makeActive('register')">Register</a>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav v-bind:class="active" v-on:click.prevent>

            <a href="#" class="home" v-on:click="makeActive('home')">Home</a>
            <a href="#" class="projects" v-on:click="makeActive('projects')">Projects</a>
            <a href="#" class="services" v-on:click="makeActive('services')">Services</a>
            <a href="#" class="contact" v-on:click="makeActive('contact')">Contact</a>

        </nav>

        <!--
                Include all files witch are connected with page
            --->

        <?php require_once 'parts/home.php'; ?>

        <?php require_once 'parts/projects.php'; ?>

        <?php require_once 'parts/services.php'; ?>

        <?php require_once 'parts/contact.php'; ?>

        <?php require_once 'parts/login.php'; ?>

        <?php require_once 'parts/register.php'; ?>

    </div>

</div>


<script src="node_modules/vue/dist/vue.js"></script>
<script src="assets/script/index.js"></script>
</body>
</html>