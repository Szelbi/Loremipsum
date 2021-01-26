<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Lorem Ipsum</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/loremipsum/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loremipsum/css/customStyle.css">
    <link rel="stylesheet" href="/loremipsum/basics/basic.css">
</head>


<header>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/navbar/navbar.php') ?>
</header>


<body>

<main class="main">
    <div class="container" style="background: white">
        <div class="row border-orange">
            <div class="col-md-8">
                <div class="row-content" id="Tekst">
                    <div class="header">
                        <button class="hidd-button btn header-btn" onclick="hideDiv('tekst-content', this)">►
                        </button>
                        <h4>Tekst</h4>
                    </div>
                    <div id="tekst-content" class="drop-content">
                        <p><img alt="Photo" src="../img/300x200.jpg" max-height="120" align="right"
                                style="margin: 10px"/>Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <b>facilisis</b>, nisi et
                            accumsan placerat, ligula mi interdum felis, <s>vitae <b>cursus</b> est</s> purus id
                            purus. <em>Praesent feugiat</em>, nulla eget maximus ultricies, justo odio finibus
                            ipsum, consectetur egestas lectus orci in ex. <strong>Etiam magna urna</strong>,
                            facilisis non porttitor vel, viverra non ante. </p>Praesent ullamcorper tristique
                        pulvinar:
                        <blockquote>Donec suscipit volutpat dui et viverra. Pellentesque ac elit nec massa tempus
                            elementum. Aliquam semper suscipit nibh sed euismod.
                        </blockquote>
                        Donec lacus ligula, tempor at congue nec, euismod eget dolor. varius natoque penatibus et
                        magnis dis parturient montes, nascetur ridiculus mus. Duis elementum magna a venenatis
                        bibendum. Vestibulum vel auctor leo. <q>Nunc sagittis laoreet lorem eu scelerisque</q>.
                        Phasellus sed eros sed risus gravida lacinia.</p>
                    </div>
                </div>
                <div class="row-content" id="Listy">
                    <div class="header">
                        <button class="btn header-btn" onclick="hideDiv('listy-content', this)">►</button>
                        <h4>Listy</h4>
                    </div>
                    <div id="listy-content" class="drop-content">
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
                <div class="row-content" id="Obrazy">
                    <div class="header">
                        <button class="btn header-btn" onclick="hideDiv('obrazy-content', this)">►</button>
                        <h4>Obrazy</h4>
                    </div>
                    <div id="obrazy-content" class="drop-content">
                        <img alt="" src="https://picsum.photos/1000/1000/?random" title="Obrazeczek" class="photos"/>
                        <img alt="" src="https://picsum.photos/250/600/?random" class="photos"/>
                        <img alt="" src="https://picsum.photos/600/300/?random" class="photos"/>
                    </div>
                </div>
                <div class="row-content" id="Tabele">
                    <button class="btn header-btn" onclick="hideDiv('tabele-content', this)">►</button>
                    <h4>Tabele</h4>
                    <div id="tabele-content" class="drop-content">
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
                <div class="row-content" id="Formularze">
                    <div class="header">
                        <button class="btn header-btn" onclick="hideDiv('formularze-content', this)">►</button>
                        <h4>Formularze</h4>
                    </div>
                    <div id="formularze-content" class="drop-content">
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
                <div class="row-content" id="Dodatkowe">
                    <div class="header">
                        <button class="btn header-btn" onclick="hideDiv('elementy-content', this)">
                            ►
                        </button>
                        <h4>Dodatkowe elementy HTML</h4>
                    </div>
                    <div id="elementy-content" class="drop-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis impedit, dicta
                            commodi
                            sunt earum eos.
                            Debitis earum officia, perspiciatis error.</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.5096192533256!2d18.972279350837542!3d50.114185079329495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716b7e17fbf287f%3A0x93e77379968ea592!2sHierowskiego+29%2C+43-110+Tychy!5e0!3m2!1sen!2spl!4v1559672324057!5m2!1sen!2spl"
                                width="100%" height="400px"></iframe>
                    </div>
                </div>
                <div class="row-content" id="Youtube">
                    <div class="header">
                        <button class="btn header-btn" onclick="hideDiv('youtube-content', this)">
                            ►
                        </button>
                        <h4>Audio & video</h4>
                    </div>
                    <div id="youtube-content" class="drop-content">
                        <iframe src="https://www.youtube.com/embed/L5uV3gmOH9g">
                        </iframe>
                    </div>
                </div>
                <div class="row-content" id="Kolor">
                    <div class="header">
                        <button class="btn header-btn" onclick="hideDiv('kolor-content', this)">
                            ►
                        </button>
                        <h4>Kolorki</h4>
                    </div>

                    <div id="kolor-content" class="drop-content">
						<?php
						for ($i = 1; $i < 10; $i++)
							echo '<div class="color-row" style="background-color: hsl(' . rand(0, 360) . ',100%,' . rand(20, 80) . '%)"></div>';
						//						?>
                    </div>
                </div>


                <div class="row-content" id="Tekst2">
                    <div class="header">
                        <button class="btn header-btn" onclick="hideDiv('tekst2-content', this)">►</button>
                        <h4>Tekst</h4>
                    </div>
                    <div id="tekst2-content" class="drop-content">
                        <p>asdadad sad asdad asd a</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos necessitatibus placeat
                            porro rerum, tempore veniam voluptatibus. Accusamus atque explicabo quisquam!</p>
                    </div>
                </div>

            </div>
            <div class="sidebar-center col-md-4">
                <div class="sidebar">
                    <h2 class="center"><a href="../about.php">O nas</a></h2>
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
                        <li><a href="#Tekst2" title="Rozszerzenie pkt 2.">Tekst</a></li>
                        <li><a href="../boxes.php">Pudełka elementów</a></li>
                        <li><a href="#14">Listy, tabele i formularze</a></li>
                        <li><a href="#15">Układ</a></li>
                        <li><a href="#16">Obrazy</a></li>
                        <li><a href="#17">Układ w HTML5</a></li>
                        <li><a href="#18">Proces i projekt</a></li>
                        <li><a href="#top">Infromacje praktycze</a></li>
                        <li><a href="../to_test.html">TESTY</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</main>
</body>

<footer>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/loremipsum/footer.html') ?>
</footer>


</html>

<script src="basic.js"></script>
