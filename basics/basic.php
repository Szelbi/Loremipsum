<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Lorem Ipsum</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">
    <script src="/loremipsum/js/customScripts.js"></script>
    <script src="/loremipsum/js/jquery-3.5.1.min.js"></script>
    <script src="/loremipsum/js/bootstrap.min.js"></script>

    <style>
        .sidebar-center {
            display: flex;
            justify-content: center;
        }

        .sidebar {
            background: rgba(50, 190, 150, 0.1);
            display: inline-block;
            position: fixed;
            border: 1px solid black;
            /*max-width: 300px;*/
            font-size: 14px;
        }

        .color-row {
            margin: 10px 0;
        }
    </style>
</head>


<header>
    <div id="nav-placeholder">
    </div>
</header>


<body>

<main role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div>
                    <h1 id="1">Lorem Ipsum123</h1>
                    <div class="row" id="Tekst">
                        <button class="right btn btn-primary" onclick="hideDiv('tekst-content')">Chowanie</button>
                        <h4 id="2">Tekst</h4>
                        <div id="tekst-content" class="hidd">
                            <p><img src="../img/300x200.jpg" max-height="120" align="right" style="margin: 10px"/>Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <b>facilisis</b>, nisi et
                                accumsan placerat, ligula mi interdum felis, <s>vitae <b>cursus</b> est</s> purus id
                                purus. <em>Praesent feugiat</em>, nulla eget maximus ultricies, justo odio finibus
                                ipsum, consectetur egestas lectus orci in ex. <strong>Etiam magna urna</strong>,
                                facilisis non porttitor vel, viverra non ante. </br>Praesent ullamcorper tristique
                                pulvinar:
                            <blockquote>Donec suscipit volutpat dui et viverra. Pellentesque ac elit nec massa tempus
                                elementum. Aliquam semper suscipit nibh sed euismod.
                            </blockquote>
                            Donec lacus ligula, tempor at congue nec, euismod eget dolor. varius natoque penatibus et
                            magnis dis parturient montes, nascetur ridiculus mus. Duis elementum magna a venenatis
                            bibendum. Vestibulum vel auctor leo. <q>Nunc sagittis laoreet lorem eu scelerisque</q>.
                            Phasellus sed eros sed risus gravida lacinia.</p>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="bootstrap_test.html">Bootstrap simple template</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="row" id="Listy">
                        <button class="right btn btn-primary" onclick="hideDiv('listy-content')">Chowanie</button>
                        <h4 id="3">Listy</h4>
                        <div id="listy-content" class="hidd">
                            <ul>
                                <li>Pozycja1</li>
                                <li>Pozycja2</li>
                                <ol>
                                    <li>ddddd</li>
                                    <li><a href="mailto:dawidgos25@gmail.com">dawidgos25@gmail.com</a></li>
                                    <li>dddd</li>
                                </ol>
                                <li><a href="http://google.pl">Pozycja3</a></li>
                                <li>Pozycja4</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="Obrazy">
                        <button class="right btn btn-primary" onclick="hideDiv('obrazy-content')">Chowanie</button>
                        <h4 id="5">Obrazy (ze stylu css)</h4>
                        <div id="obrazy-content" class="hidd">
                            <img src="https://picsum.photos/1000/1000/?random" title="Obrazeczek" class="fotki"/>
                            <img src="https://picsum.photos/250/600/?random" class="fotki"/>
                            <img src="https://picsum.photos/600/300/?random" class="fotki"/>
                        </div>
                    </div>
                    <div class="row" id="Tabele">
                        <button class="right btn btn-primary" onclick="hideDiv('tabele-content')">Chowanie</button>
                        <h4>Tabele</h4>
                        <div id="tabele-content" class="hidd">
                            <table align="center" class="table" style="width:70%">
                                <tr>
                                    <th></th>
                                    <td>8:00</td>
                                    <td>9:30</td>
                                    <td>11:00</td>
                                    <td>12:30</td>
                                </tr>
                                <tr>
                                    <th>Poniedziałek</th>
                                    <td>j.polski</td>
                                    <td colspan="2">fizyka</td>
                                    <td>fizyka</td>
                                </tr>
                                <tr>
                                    <th>Wtorek</th>
                                    <td colspan="3">fizyka</td>
                                    <td rowspan="2">matematyka</td>
                                </tr>
                                <tr>
                                    <th>Środa</th>
                                    <td>fizyka</td>
                                    <td>matematyka</td>
                                    <td>fizyka</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row" id="Formularze">
                        <button class="right btn btn-primary" onclick="hideDiv('formularze-content')">Chowanie</button>
                        <h4 id="7">Formularze</h4>
                        <div id="formularze-content" class="hidd">
                            <div class="ib" id="login">
                                <form action="basic.php" method="GET">
                                    <p>Login: <input type="text" name="Login"></p>
                                    <p>Hasło: <input type="password" name="Hasło"></p>
                                    <input type="submit"/>
                                </form>
                            </div>
                            <div class="ib" id="multiselect">
                                <form action="https://google.pl" method="post">
                                    <p>Jakiego smartphone używasz?</p>
                                    <select name="device" size="3" multiple="option">
                                        <option value="iphone">iPhone</option>
                                        <option value="huawei">Huawei</option>
                                        <option value="samsung">Samsung</option>
                                    </select>
                                </form>
                            </div>
                            <div class="ib" id="file">
                                <form action="https://google.pl" method="post">
                                    <p>Przeslij plik tekstowy (formaty .jpg .png .gif)</p>
                                    <input type="text" name="plik"/>
                                    <input type="file" name="user-photo"/>
                                    <input type="submit" value="Przeslij"/>
                                </form>
                            </div>
                            <div class="ib" id="validation">
                                <form action="https://google.pl" method="post">
                                    <table>
                                        <tr>
                                            <td><label for="username">Nazwa użytkownika</label></td>
                                            <td><input type="text" name="username" required="required"/><br></td>
                                        </tr>
                                        <tr>
                                            <td><label for="password">Hasło</label></td>
                                            <td>
                                                <label>
                                                    <input type="password" name="pasword" required="required"/>
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="submit" value="Zaluguj się" align="right"/>
                                    <p>Logownaie z walidacją required</p>
                                </form>
                            </div>
                            <div class="ib" id="date">
                                <form action="https://google.pl" method="post">
                                    <p>Przeslij plik tekstowy (formaty .jpg .png .gif)</p>
                                    <label for="date">Data wylotu:</label>
                                    <input type="date" name="depart"/>
                                    <input type="submit" value="Przeslij"/>
                                </form>
                            </div>
                            <div class="ib" id="date2">
                                <form action="https://google.pl" method="post">
                                    <div class="form-group">
                                        <label for="url">URL:</label>
                                        <label>
                                            <input type="url" name="url" placeholder="https://google.pl"/>
                                        </label>
                                        <input type="submit" value="Przeslij"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="Dodatkowe">
                        <button class="right btn btn-primary" onclick="hideDiv('elementy-content')">
                            Chowanie
                        </button>
                        <h4>Dodatkowe elementy HTML</h4>
                        <div id="elementy-content" class="hidd">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis impedit, dicta
                                commodi
                                sunt earum eos.
                                Debitis earum officia, perspiciatis error.</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.5096192533256!2d18.972279350837542!3d50.114185079329495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716b7e17fbf287f%3A0x93e77379968ea592!2sHierowskiego+29%2C+43-110+Tychy!5e0!3m2!1sen!2spl!4v1559672324057!5m2!1sen!2spl"
                                    width="100%" height="400px"></iframe>
                        </div>
                    </div>
                    <div class="row" id="Youtube">
                        <button class="right btn btn-primary" onclick="hideDiv('youtube-content')">
                            Chowanie
                        </button>
                        <h4>Flash, wideo i audio</h4>
                        <div id="youtube-content" class="hidd">
                            <iframe width="760" height="400" src="https://www.youtube.com/embed/L5uV3gmOH9g">
                            </iframe>
                        </div>
                    </div>
                    <div class="row" id="Kolor">
                        <button class="right btn btn-primary" onclick="hideDiv('kolor-content')">
                            Chowanie
                        </button>
                        <h4>Flash, wideo i audio</h4>
                        <div id="kolor-content" class="hidd">
							<?php
							echo '
                                <div class="color-row"></div>
                                <div class="color-row"></div>
                                <div class="color-row"></div>';
							?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-center col-md-4">
                <div class="sidebar ">
                    <h2 style="text-align: center"><a href="../about.html">O nas</a></h2>
                    <ol>
                        <li><a href="#1">Struktura</a></li>
                        <li><a href="#Tekst">Tekst</a></li>
                        <li><a href="#Listy">Listy</a></li>
                        <li><a href="#Listy">Łącza</a></li>
                        <li><a href="#Obrazy">Obrazy</a></li>
                        <li><a href="#Tabele">Tabele</a></li>
                        <li><a href="#Formularze">Formularze</a></li>
                        <li><a href="#Dodatkowe">Dodatkowe elementy HTML</a></li>
                        <li><a href="#Youtube">Flash, wideo i audio</a></li>
                        <li><a>Prezentacja CSS</a></li>
                        <li><a href="#Kolor">Kolor</a></li>
                        <li><a href="#12">Tekst</a></li>
                        <li><a href="#13">Pudełka elementów</a></li>
                        <li><a href="#14">Listy, tabele i formularze</a></li>
                        <li><a href="#15">Układ</a></li>
                        <li><a href="#16">Obrazy</a></li>
                        <li><a href="#17">Układ w HTML5</a></li>
                        <li><a href="#18">Proces i projekt</a></li>
                        <li><a href="#top">Infromacje praktycze</a></li>
                        <li><a href="to_test.html">TESTY</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- <footer class="footer">
    <div class="container"">
        <a style="color:#ddd; " href="to_test.html"><strong>testy.html</strong></a>
    </div>
</footer> -->

<footer class="footer">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>

<script>
    $(function () {
        $("#nav-placeholder").load("/loremipsum/navbar.html");
    });
</script>

</body>


</html>