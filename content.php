<?php
$sql = "SELECT * FROM menu ORDER BY seen DESC";

$res = mysqli_query($connect,$sql);

while($main = mysqli_fetch_assoc($res)):?>
    <!-- Салаты -->

    <div id="rest-menu-1" class="active">
        <div class="row">
            <div class="col-6">
                <ul>


                    <li>

                        <div class="rm-content">
                            <h4><?=$main["name"]?></h4>
                            <p><?=$main["about"]?></p>
                            <b class="rm-price"><?=$main["price"]?></b>
                            <span class="rm-weight">[<?=$main["weight"]?>]</span>

                        </div>
                    </li>

                    <li>

                        <div class="rm-content">
                            <h4>Зеленый салат</h4>
                            <p>(легкий салат из авокадо, микса салатов, фасоли, огурца и киноа)</p>
                            <b class="rm-price">390 руб</b>
                            <span class="rm-weight">[185 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Салат цезарь с курицей</h4>
                            <p>(куриная грудка, микс салатов, яйцо, пармезан, помидоры черри, соус цезарь, гренки)</p>
                            <b class="rm-price">430 руб</b>
                            <span class="rm-weight">[185 гр]</span>

                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-6">
                <ul>

                    <li>

                        <div class="rm-content">
                            <h4>Стейк-салат</h4>
                            <p>(вырезка молодого бычка, микс салатов, помидоры, маринованные огурцы, горчичная заправка)</p>
                            <b class="rm-price">490 руб</b>
                            <span class="rm-weight">[185 гр]</span>

                        </div>
                    </li>

                    <li>

                        <div class="rm-content">
                            <h4>Салат с индейкой</h4>
                            <p>(филе индейки, микс салатов , авокадо, киноа, медово-горчичная заправка)</p>
                            <b class="rm-price">430 руб</b>
                            <span class="rm-weight">[180 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Салат с тунцом</h4>
                            <p>(филе отборного тунца, микс салатов , картофель бэби, яйцо, авокадо, кунжутная заправка)</p>
                            <b class="rm-price">490 руб</b>
                            <span class="rm-weight">[180 гр]</span>

                        </div>
                    </li>





                </ul>
            </div>
        </div>
    </div>

    <!-- Холодные закуски -->
    <div id="rest-menu-2">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Тар-тар из говядины</h4>
                            <p>(вырезка молодого бычка с фирменным соусом, маринованными огурцами и красным луком)</p>
                            <b class="rm-price">550 руб</b>
                            <span class="rm-weight">[140 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Индейка с соусом из тунца</h4>
                            <p>(запеченная индейка с каперсами и черри, под соусом из тунца)</p>
                            <b class="rm-price">390 руб</b>
                            <span class="rm-weight">[170 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Брускетта с лососем</h4>
                            <p>(тар-тар из лосося на чиабатте с соусом спайси)</p>
                            <b class="rm-price">330 руб</b>
                            <span class="rm-weight">[75 гр]</span>

                        </div>
                    </li>


                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Сельдь с картофелем</h4>
                            <p>(филе бочковой сельди специального посола, картофель бэби, красный лук, зелень)</p>
                            <b class="rm-price">330 руб</b>
                            <span class="rm-weight">[120/60/30 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Севиче из лосося</h4>
                            <p>(кусочки свежего лосося под пюре из манго)</p>
                            <b class="rm-price">450 руб</b>
                            <span class="rm-weight">[175 гр]</span>

                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>

    <!-- Горячие закуски -->
    <div id="rest-menu-3">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Камамбер с ежевичным соусом</h4>
                            <p>(жареный камамбер с ягодами и соусом из свежей ежевики)</p>
                            <b class="rm-price">470 руб</b>
                            <span class="rm-weight">[90/15/30 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Гренки ржаные</h4>
                            <p>(свежий бородинский хлеб, чесночное масло, пармезан,
                                подаются с французским соусом)</p>
                            <b class="rm-price">220 руб</b>
                            <span class="rm-weight">[120/40 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Баклажаны пармеджано</h4>
                            <p>(баклажаны по-итальянски с моцареллой, пармезаном и томатами)</p>
                            <b class="rm-price">350 руб</b>
                            <span class="rm-weight">[140 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Куриные крылья(маленькая порция)</h4>
                            <p>(аппетитные куриные крылышки, маринованные в соусе сладкий чили, подаются с французским соусом)</p>
                            <b class="rm-price">380 руб</b>
                            <span class="rm-weight">[225/40 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Куриные крылья(большая порция)</h4>
                            <p>(аппетитные куриные крылышки, маринованные в соусе сладкий чили, подаются с французским соусом )</p>
                            <b class="rm-price">750 руб</b>
                            <span class="rm-weight">[450/40 гр]</span>

                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-6">
                <ul>

                    <li>

                        <div class="rm-content">
                            <h4>Жареные тигровые креветки</h4>
                            <p>(обжаренные тигровые креветки в воздушном кляре,
                                с острым соусом)</p>
                            <b class="rm-price">430 руб</b>
                            <span class="rm-weight">[70/30 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Креветки к пиву жареные</h4>
                            <p>(отборные атлантические креветки)</p>
                            <b class="rm-price">590 руб</b>
                            <span class="rm-weight">[250/30 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Креветки к пиву отварные</h4>
                            <p>(отборные атлантические креветки)</p>
                            <b class="rm-price">590 руб</b>
                            <span class="rm-weight">[250/30 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Пивное ассорти</h4>
                            <p>(бородинские гренки, куриные крылышки, аппетитный картофель-фри,
                                жареные тигровые креветки и великолепное трио соусов: французский,
                                классический кетчуп и жгучий острый)</p>

                            <b class="rm-price">830 руб</b>
                            <span class="rm-weight">[360/30/30/30 гр]</span>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <!-- Супы -->
    <div id="rest-menu-4">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Щавелевый суп</h4>
                            <p>(курица, щавель, яйцо, картофель,лук,морковь)</p>
                            <b class="rm-price">350 руб</b>
                            <span class="rm-weight">[250 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Гаспачо</h4>
                            <p>(классический Гаспачо из перетертых томатов, огурцов, болгарского перца, чеснока и базилика)</p>
                            <b class="rm-price">270 руб</b>
                            <span class="rm-weight">[250 гр]</span>

                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Суп уха</h4>
                            <p>(выдержанный бульон из лосося и судака с картофелем, зеленью)</p>
                            <b class="rm-price">390 руб</b>
                            <span class="rm-weight">[250 гр]</span>

                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>

    <!-- Хлеб -->
    <div id="rest-menu-5">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Булочка французская</h4>
                            <p>(белая)</p>
                            <b class="rm-price"> 30 РУБ</b>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Булочка пражская</h4>
                            <p>(черная)</p>
                            <b class="rm-price"> 30 РУБ</b>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Паста -->
    <div id="rest-menu-6">
        <div class="row">
            <div class="col-6">
                <ul>

                    <li>

                        <div class="rm-content">
                            <h4>Фарфалле с семгой</h4>
                            <p>(фарфалле, филе семги, икра красная, брокколи, сливки)</p>
                            <b class="rm-price">530 руб</b>
                            <span class="rm-weight">[255 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Спагетти карбонара</h4>
                            <p>(спагетти, бекон, яичный желток, сливки, лук-шалот, пармезан)</p>
                            <b class="rm-price">450 руб</b>
                            <span class="rm-weight">[250 гр]</span>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Спагетти болоньезе</h4>
                            <p>(спагетти, домашний фарш, красное сухое вино, пармезан)</p>
                            <b class="rm-price">430 руб</b>
                            <span class="rm-weight">[240 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Феттуччине с тигровыми креветками</h4>
                            <p>(феттуччине, тигровые креветки, сливки, лук репчатый, пармезан, песто)</p>
                            <b class="rm-price">530 руб</b>
                            <span class="rm-weight">[220 гр]</span>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <!-- Колбаски -->
    <div id="rest-menu-7">
        <div class="row">
            <div class="col-6">
                <ul>

                    <li>

                        <div class="rm-content">
                            <h4>Колбаски баварские</h4>
                            <p>(колбаски из свинины и говядины с тушеной в пиве капустой,
                                маринованными черри, корнишонами, подаются с кетчупом и французским соусом)</p>
                            <b class="rm-price">530 руб</b>
                            <span class="rm-weight">[210/70/30/30 гр]</span>

                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-6">
                <ul>

                    <li>

                        <div class="rm-content">
                            <h4>Колбаски из баранины</h4>
                            <p>(колбаски из баранины, с тушеной в пиве капустой,
                                маринованными черри, корнишонами, подаются с кетчупом и французским соусом)</p>
                            <b class="rm-price">560 руб</b>
                            <span class="rm-weight">[150/70/30/30 гр]</span>

                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>

    <!-- Мясо -->
    <div id="rest-menu-8">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Стейк из свиной шеи</h4>
                            <p>(нежная свиная шея в соусе чимичурри, подается с цукини,
                                перцем болгарским и кукурузой, приготовленными на гриле и мясным соусом)</p>
                            <b class="rm-price">690 руб</b>
                            <span class="rm-weight">[230/120/45 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Митболы из баранины</h4>
                            <p>(сочные митболы из баранины с картофельным муссом и аджикой)</p>
                            <b class="rm-price">580 руб</b>
                            <span class="rm-weight">[280/55 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Беф-бургиньон</h4>
                            <p>(вырезка из премиальной говядины, маринованная в красном вине,
                                приготовленная с шампиньонами и беконом, подается с пюре из молодого картофеля)</p>
                            <b class="rm-price">750 руб</b>
                            <span class="rm-weight">[140/100 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Свиные ребрышки BBQ</h4>
                            <p>(свиные ребра в фирменном соусе с печеным картофелем,
                                сметаной, корнишонами и помидорами черри, соусом барбекю)</p>
                            <b class="rm-price">750 руб</b>
                            <span class="rm-weight">[240/125/20/45 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Цыпленок с кускусом</h4>
                            <p>(фермерский цыпленок, запеченый в травах,
                                подается с рассыпчатым кускусом и ежевичным соусом собственного приготовления)</p>
                            <b class="rm-price">580 руб</b>
                            <span class="rm-weight">[250/100 гр]</span>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Говядина пеппер</h4>
                            <p>(стейк из лучшей говяжьей вырезки с прожаркой по вашему желанию, с перечным соусом)</p>
                            <b class="rm-price">830 руб</b>
                            <span class="rm-weight">[160/50 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Утиная грудка с грушей</h4>
                            <p>(утиная грудка с грушей и ягодным соусом)</p>
                            <b class="rm-price">790 руб</b>
                            <span class="rm-weight">[240/10/10 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Говяжьи щеки</h4>
                            <p>(томленые говяжьи щеки с пюре и шпинатом)</p>
                            <b class="rm-price">790 руб</b>
                            <span class="rm-weight">[170/120/20/10 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Индейка с овощами</h4>
                            <p>(филе индейки, брокколи, цветная и брюссельская капуста)</p>
                            <b class="rm-price">580 руб</b>
                            <span class="rm-weight">[180/50/50 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Свиная грудинка</h4>
                            <p>(свиная грудинка с брокколи и мясным соусом)</p>
                            <b class="rm-price">630 руб</b>
                            <span class="rm-weight">[250/50 гр]</span>

                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>




    <!-- Рыба -->
    <div id="rest-menu-10">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Филе семги на гриле</h4>
                            <p>(стейк семги с Фарерских островов приготовленный на гриле, рис басмати,
                                имбирный соус)</p>
                            <b class="rm-price">770 руб</b>
                            <span class="rm-weight">[130/80/50/20 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Филе семги на пару</h4>
                            <p>(стейк семги с Фарерских островов приготовленный на пару, рис басмати,
                                имбирный соус)</p>
                            <b class="rm-price">770 руб</b>
                            <span class="rm-weight">[130/80/50/20 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Стейк из тунца</h4>
                            <p>(сочное филе тунца,картофель бэби, обжаренные на гриле кусочки цукини,
                                бальзамик, имбирный соус)</p>
                            <b class="rm-price">790 руб</b>
                            <span class="rm-weight">[120/80/35 гр]</span>

                        </div>
                    </li>
                </ul>
            </div>


            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Филе судака с булгуром</h4>
                            <p>(филе каспийского судака, подается с булгуром и соусом из
                                лесных грибов)</p>
                            <b class="rm-price">650 руб</b>
                            <span class="rm-weight">[150/100/50/20 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Треска с мисо</h4>
                            <p>(филе трески с мисо пастой и рисом басмати)</p>
                            <b class="rm-price">590 руб</b>
                            <span class="rm-weight">[150/80/20/20 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Мидии в сливочном соусе</h4>
                            <p>(редиземноморские мидии, томленые в белом сухом вине,
                                подаются с каперсами и тертым пармезаном)</p>
                            <b class="rm-price">550 руб</b>
                            <span class="rm-weight">[210 гр]</span>

                        </div>
                    </li>


                </ul>
            </div>

        </div>
    </div>

    <!-- Гарниры -->
    <div id="rest-menu-11">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Картофель-фри</h4>

                            <b class="rm-price">230 руб</b>
                            <span class="rm-weight">[100/50 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Овощи-гриль</h4>

                            <b class="rm-price">290 руб</b>
                            <span class="rm-weight">[280 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Кус-кус с овощами</h4>

                            <b class="rm-price">230 руб</b>
                            <span class="rm-weight">[140 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Картофельное пюре</h4>

                            <b class="rm-price">180 руб</b>
                            <span class="rm-weight">[150 гр]</span>

                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-6">
                <ul>

                    <li>

                        <div class="rm-content">
                            <h4>Спаржа жареная</h4>

                            <b class="rm-price">250 руб</b>
                            <span class="rm-weight">[100 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Картофель бэби</h4>

                            <b class="rm-price">230 руб</b>
                            <span class="rm-weight">[150 гр]</span>

                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Брюссельская капуста</h4>

                            <b class="rm-price">180 руб</b>
                            <span class="rm-weight">[100 гр]</span>

                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>

    <!-- Соусы -->
    <div id="rest-menu-12">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4> Кетчуп/Сальса/Французский/Кисло-сладкий/Аджика/Ежевичный</h4>
                            <b class="rm-price">70 РУБ</b>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <li>
                        <div class="rm-content">
                            <h4>Барбекю</h4>
                            <b class="rm-price">100 РУБ</b>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>





    <!-- Десерты -->
    <div id="rest-menu-13">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li>

                        <div class="rm-content">
                            <h4>Десерт брусничный</h4>

                            <b class="rm-price">270 руб</b>


                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Десерт брюссель</h4>

                            <b class="rm-price">280 руб</b>


                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Десерт карамельно-яблочный</h4>

                            <b class="rm-price">290 руб</b>


                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Десерт лимонный с меренгой</h4>

                            <b class="rm-price">280 руб</b>


                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-6">
                <ul>

                    <li>

                        <div class="rm-content">
                            <h4>Десерт манго-маракуйя</h4>

                            <b class="rm-price">290 руб</b>


                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Десерт чизкейк нью-йорк</h4>

                            <b class="rm-price">280 руб</b>


                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Десерт шоколадно-апельсиновый</h4>

                            <b class="rm-price">280 руб</b>


                        </div>
                    </li>
                    <li>

                        <div class="rm-content">
                            <h4>Мороженое в ассортименте</h4>

                            <b class="rm-price">120 руб</b>


                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>



    </div>

    </div>

<?php
endwhile;
//mysqli_close($connect);
?>
