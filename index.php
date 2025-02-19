<?php
/*
Template Name: Home
*/ ?>

<?php get_header(); ?>


<body>
    <div class="in9-wrapper">
        <main class="in9-page">
            <div class="in9-page__decor">
                <div class="in9-page__bg">
                    <div class="in9-border"></div>
                    <div class="in9-page__title">
                        Максим и Дарья
                        <span>08/08/2024</span>
                    </div>
                </div>

                <div class='in9-page__container _in9-container'>

                    <!-- Опрос -->
                    <div class="in9-survey">
                        <div class="in9-survey__block">
                            <div class="in9-survey__subtitle in9-title">Дорогие наши родные и друзья!</div>
                            <div class="in9-survey__text">
                                Один день в этом году будет для нас особенным, и мы хотим провести его в кругу близких и друзей. Этот день станет красивым началом долгой и счастливой жизни. С большим удовольствием приглашаем Вас на знаменательный праздник - нашу свадьбу!
                            </div>
                        </div>
                        <div class="in9-survey__title">Пожалуйста, подтвердите свое присутствие.</div>
                        <div class="in9-survey__box">
                            <div href="in9-form" onclick="showPopup('agree')"
                                class="in9-survey__btn in9-btn _popup-link">Я приду</div>
                            <div href="in9-form" onclick="showSurveyBox('notagree')"
                                class="in9-survey__btn in9-btn _popup-link">К
                                сожалению, я не приду</div>
                        </div>
                    </div>

                    <!-- Программа -->
                    <div class="in9-program">
                        <div class="in9-program__title in9-title">Программа мероприятия</div>
                        <div class="in9-program__block">
                            <p></p>
                            <div class="in9-program__item">
                                <div class="in9-program__time">10:30</div>
                                <div class="in9-program__box">
                                    <div class="in9-program__subtitle">Автобус до загса</div>
                                    <div class="in9-program__text">Адрес: Чехов, Восковская улица, 94/2</div>
                                </div>
                            </div>
                            <div class="in9-program__item">
                                <div class="in9-program__time">12:00</div>
                                <div class="in9-program__box">
                                    <div class="in9-program__subtitle">Роспись в ЗАГСе</div>
                                    <div class="in9-program__text">Серпуховский городской отдел ЗАГС <br>
                                        Адрес: г. Серпухов, ул. Луначарского, д. 74</div>
                                </div>
                            </div>
                            <!-- <div class="in9-program__item">
                                <div class="in9-program__time">14:40</div>
                                <div class="in9-program__box">
                                    <div class="in9-program__subtitle">Трансфер до банкета</div>
                                    <div class="in9-program__text">Адрес: г. Чехов, ул.Мира, д.9
                                    </div>
                                </div>
                            </div> -->
                            <div class="in9-program__item">
                                <div class="in9-program__time">15:30 </div>
                                <div class="in9-program__box">
                                    <div class="in9-program__subtitle">Фуршет</div>
                                    <div class="in9-program__text">Загородный комплекс “ПЕТРУХИНО-КЛУБ” Зал “Атмосфера” <br>
                                        Адрес: городской округ Серпухов, д.Всходы, 90 (ДПК Большие Всходы-2)</div>
                                </div>
                            </div>
                            <div class="in9-program__item">
                                <div class="in9-program__time">16:00 </div>
                                <div class="in9-program__box">
                                    <div class="in9-program__subtitle">Начало праздничного ужина</div>
                                    <div class="in9-program__text">Загородный комплекс “ПЕТРУХИНО-КЛУБ” Зал “Атмосфера” <br>
                                        Адрес: городской округ Серпухов, д.Всходы, 90 (ДПК Большие Всходы-2)
                                    </div>
                                </div>
                            </div>
                            <div class="in9-program__item">
                                <div class="in9-program__time">23:00</div>
                                <div class="in9-program__box">
                                    <div class="in9-program__subtitle">Окончание торжества <br>
                                        Трансфер до г. Чехов</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Место торжества -->
                    <div class="in9-place">
                        <div class="in9-place__titel in9-title">Место торжества</div>
                        <div class="in9-place__row">
                            <div class="in9-place__column">
                                <div class="in9-place__item">
                                    <div class="in9-place__image"><img src="<?php bloginfo('template_url'); ?>/assets/img/place01.jpg" alt="" />
                                    </div>
                                    <div class="in9-place__block">
                                        <div class="in9-place__subtitle">Серпуховский городской отдел ЗАГС</div>
                                        <a target="_blank" href="https://yandex.ru/maps/org/otdel_1_upravleniya_zags_po_gorodskomu_okrugu_serpukhov_glavnogo_upravleniya_zags_moskovkoy_oblasti/1122970033/?ll=37.429885%2C54.909930&z=16.06"
                                            class="in9-place__btn in9-btn_w">Посмотреть на карте</a>
                                    </div>
                                </div>
                            </div>
                            <div class="in9-place__column">
                                <div class="in9-place__item">
                                    <div class="in9-place__image"><img src="<?php bloginfo('template_url'); ?>/assets/img/place02.jpg" alt="" />
                                    </div>
                                    <div class="in9-place__block">
                                        <div class="in9-place__subtitle">Загородный комплекс “ПЕТРУХИНО-КЛУБ” </div>
                                        <a target="_blank" href="https://yandex.ru/maps/?ll=37.535663%2C54.978198&mode=poi&poi%5Bpoint%5D=37.534648%2C54.978217&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D175486614725&z=17"
                                            class="in9-place__btn in9-btn_w">Посмотреть на карте</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Отвечаем на Ваши вопросы -->
                    <div class="in9-questions">
                        <div class="in9-questions__block">
                                <div class="in9-questions__title in9-title">Отвечаем на Ваши вопросы</div>
                                <div class="in9-questions__decor">
                                    <div class="in9-questions__item">
                                        <div class="in9-questions__subtitle">Будет ли дресс-код?</div>
                                        <div class="in9-questions__text_1">Будем очень признательны, если Вы поддержите палитру нашего торжества при выборе своего наряда.</div>
                                    </div>
                                    <div class="in9-questions__item">
                                        <div class="in9-questions__cover">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/color1.svg" alt="" />
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/color2.svg" alt="" />
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/color3.svg" alt="" />
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/color4.svg" alt="" />
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/color5.svg" alt="" />
                                        </div>
                                    </div>
                                    <div class="in9-questions__item">
                                        <div class="in9-questions__subtitle">Возможно ли приехать на своем автомобиле?</div>
                                        <div class="in9-questions__text_1">Да, на территории имеется парковка. Однако для Вашего удобства будет организован автобус.</div>
                                    </div>
                                    <div class="in9-questions__item">
                                        <div class="in9-questions__subtitle">Какие подарки предпочтительны?</div>
                                        <div class="in9-questions__text_2">Не затрудняйте себя выбором подарка! Приносите себя, хорошее настроение, счастье в глазах и подарки в конвертах.</div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <!-- Контакты -->
                    <div class="in9-contacts">
                        <div class="in9-contacts__block">
                            <div class="in9-contacts__text">Если вдруг Вы не сможете прийти, а уже подтвердили свое присутствие, сообщите нам об этом лично. Для нас это очень важно.</div>
                            <div class="in9-contacts__row">
                                <div class="in9-contacts__column">
                                    <div class="in9-contacts__item">
                                        <div class="in9-contacts__name">
                                            Максим
                                            <span>8(926) 785-42-01</span>
                                        </div>
                                        <a href="tel:+79267854201" class="in9-contacts__btn in9-btn_w">Позвонить жениху</a>
                                    </div>
                                </div>
                                <div class="in9-contacts__column">
                                    <div class="in9-contacts__item">
                                        <div class="in9-contacts__name">
                                            Дарья
                                            <span>8(925) 564-06-79</span>
                                        </div>
                                        <a href="tel:+79255640679" class="in9-contacts__btn in9-btn_w">Позвонить невесте</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="in9-footer">
                        <div class="in9-footer__items">
                            <div class="in9-footer__item">
                                <div class="in9-footer__text">
                                    Мы Вас ждем! Максим и Дарья
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="popup popup_in9-form">
    <div class="popup__content">
        <div class="popup__body">
            <div class="popup__close"></div>
            <div class="in9-form__content">
                <div class="in9-form__decor">
                    <div class="in9-form__title in9-title">Опрос</div>
                    <div class="in9-form__regret">Мы сожалеем, что вы не сможете присутствовать.</div>
                    <form enctype="multipart/form-data" method="POST"
                            action="/wp-content/themes/maximdaria/survey_mail.php" class="in9-form__form">
                            <input type="hidden" id="attendanceStatus" name="form-visit" value="">
                        <div class="in9-form__block">
                            <div class="in9-form__box-no">
                                <input type="text" name="form-name" placeholder="Ваше имя и фамилия." data-value=""
                                    class="in9-form-input _req">
                            </div>
                            
                            <div class="in9-form__subtitle">Будете присутствовать на росписи?</div>
                            <div class="in9-form__item">
                                <input id="radio-yes" type="radio" name="rospis" data-value="" value="yes"
                                    class="in9-form-input-radio" />
                                <label for="radio-yes" class="in9-form-radio">Да</label>

                                <input id="radio-no" type="radio" name="rospis" data-value="" value="no"
                                    class="in9-form-input-radio">
                                <label for="radio-no" class="in9-form-radio">Нет</label>
                            </div>

                            <div class="in9-form__subtitle">Что Вы предпочитаете из напитков?</div>
                            <div class="in9-form__item">
                                <input id="radio-white" type="radio" name="form-drink" data-value="" value="white-wine"
                                    class="in9-form-input-radio">
                                <label for="radio-white" class="in9-form-radio">Вино белое </label>

                                <input id="radio-no-red" type="radio" name="form-drink" data-value=""
                                    value="red-wine" class="in9-form-input-radio">
                                <label for="radio-no-red" class="in9-form-radio">Вино красное</label>

                                <input id="radio-vodka" type="radio" name="form-drink" data-value=""
                                    value="vodka" class="in9-form-input-radio">
                                <label for="radio-vodka" class="in9-form-radio">Водка</label>

                                <input id="radio-champagne" type="radio" name="form-drink" data-value=""
                                    value="champagne" class="in9-form-input-radio">
                                <label for="radio-champagne" class="in9-form-radio">Шампанское</label>
                            </div>
                            <div class="in9-form__subtitle">Как собираетесь добираться до банкета?</div>
                            <div class="in9-form__item">
                                <input id="radio-self" type="radio" name="form-self" data-value="" value="self"
                                    class="in9-form-input-radio" />
                                <label for="radio-self" class="in9-form-radio">Своим ходом</label>

                                <input id="radio-rent" type="radio" name="form-self" data-value="" value="rent"
                                    class="in9-form-input-radio">
                                <label for="radio-rent" class="in9-form-radio">На арендованном автобусе</label>
                            </div>
                            <div class="in9-form__subtitle">Как поедете домой?</div>
                            <div class="in9-form__item">
                                <input id="radio-self2" type="radio" name="form-self2" data-value="" value="self2"
                                    class="in9-form-input-radio" />
                                <label for="radio-self2" class="in9-form-radio">Своим ходом</label>

                                <input id="radio-rent2" type="radio" name="form-self2" data-value="" value="rent2"
                                    class="in9-form-input-radio">
                                <label for="radio-rent2" class="in9-form-radio">На арендованном автобусе</label>
                            </div>
                        </div>

                        <div class="in9-form__box-no">
                            <input type="text" name="form-name-no" placeholder="Ваше имя и фамилия."  data-value=""
                                class="in9-form-input-no _req">
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                            <button type="submit" class="in9-form__btn in9-btn">Отправить</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup popup_thanks">
    <div class="popup__content">
        <div class="popup__body">
            <div class="popup__close"></div>
            <div class="thanks__title">Спасибо!</div>
            <div class="thanks__text">Анкета отправлена!<br>
            </div>
        </div>
    </div>
</div>
    <!-- <script src="js/vendors.min.js"></script>
<script src="js/app.min.js"></script> -->
</body>
<?php
get_footer(); ?>

</html>