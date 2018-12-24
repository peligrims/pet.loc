<!-- START CONTENT1 -->	


        <hr>

        <div class="customer view-port">


            <div class="customer__profile">
                <h1>Профиль</h1>

                    <div class="avatar">
                        <div class="imageOwner">
                            <img id="photo" src="{{ asset(env('THEME')) }}/owner/img/dog.png" alt="Нет фото пользователя">
                        </div>
                        <div class="owner__options">
                            <div title="Редактировать" id="avatar-crop">
                                <i class="fas fa-edit"></i>
                            </div>
                            <div title="Удалить" id="avatar-delete">
                                <i class="fas fa-trash-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        Статус: <span>Новичок</span>
                    </div>
                    <div class="info">
                        Дата регистрации:<br><span>20 Декабря 2018</span>
                    </div>
                    <div class="info">
                    Количество сообщений: <br>
                    <span><a target="_blank" href="/forum_/search.php?search_id=egosearch">0</a></span>
                    </div>

            </div>

            <div class="customer__date">
                <h1>Персональные данные</h1>

                <div class="date__profilemenu">
                    <div  id="line_block" class="profilemenu__personal "><a href="#">Персональные данные</a></div>
                    <div  id="line_block" class="profilemenu__animals "><a href="#">Прикрепленные животные</a></div>
                    <div  id="line_block" class="profilemenu__settings "><a href="#">Настройки</a></div>
                    <hr>
                    <table class="table-personal" border="0" cellspacing="0">
                        <tbody><tr>

                            <td><strong>Ник на сайте:</strong></td>
                            <td><strong> Berzov </strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="name">Имя:</label></td>
                            <td>
                                <input name="name" id="name" type="text" value="Вячеслав">
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><label for="group1">Группа:</label></td>
                            <td>
                                <select id="group1" name="group1">
                                    <option></option>
                                    <option selected="selected">Владелец</option><option>Заводчик</option><option>Специалист</option>                            </select>
                            </td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td><label for="education">Образование:</label></td>
                            <td>
                                <select id="education" name="education">
                                    <option></option>
                                    <option>Начальное</option><option>Среднее</option><option>Высшее</option>
                                </select>
                            </td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="education_v" id="education_v" type="checkbox" value="1"><label for="education_v">Скрыть</label>
		</span></td>
                        </tr>
                        <tr>
                            <td><label for="birthday">Дата рождения:</label></td>
                            <td>
                                <div class="ui-widget">
                                    <input type="text" name="date_from" id="DateFrom" />
                                </div>
                            </td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="birthday_v" id="birthday_v" type="checkbox" value="1"><label for="birthday_v">Скрыть</label>
		</span></td>
                        </tr>
                        <tr>
                            <td><label for="sex">Пол:</label></td>
                            <td>
                                <select id="sex" name="sex">
                                    <option></option>
                                    <option selected="selected" value="0">Мужской</option>
                                    <option value="1">Женский</option>
                                </select>
                            </td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="sex_v" id="sex_v" type="checkbox" value="1"><label for="sex_v">Скрыть</label>
		</span></td>
                        </tr>
                        <tr>
                            <td><label for="occupation">Род занятий:</label></td>
                            <td>
                                <input name="occupation" id="occupation" value="" type="text">
                            </td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="occupation_v" id="occupation_v" type="checkbox" value="1"><label for="occupation_v">Скрыть</label>
		</span></td>
                        </tr>
                        <tr>
                            <td><label for="hobbies">Увлечения:</label></td>
                            <td>
                                <input name="hobbies" id="hobbies" type="text" value="">
                            </td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="hobbies_v" id="hobbies_v" type="checkbox" value="1"><label for="hobbies_v">Скрыть</label>
		</span></td>
                        </tr>
                        <tr>
                            <td><label for="sign">Подпись:</label></td>
                            <td>
                                <input name="sign" id="sign" type="text" value="">
                            </td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="sign_v" id="sign_v" type="checkbox" value="1"><label for="sign_v">Скрыть</label>
		</span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><div class="title">Контактная информация</div></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for="country">Страна:</label></td>
                            <td>
                                <select id="country" name="country">
                                    <option></option>
                                    <option selected="selected">Россия</option><option>Белоруссия</option><option>Украина</option>
                                </select>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><label for="city">Город:</label></td>
                            <td><input name="city" id="city" type="text" value="Москва"></td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="city_v" id="city_v" type="checkbox" value="1"><label for="city_v">Скрыть</label>
		</span></td>
                        </tr>
                        <tr>
                            <td><label for="city">E-mail:</label></td>
                            <td><input name="email" id="email" type="text" value="berzov.slava@bk.ru"></td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="email_v" id="email_v" type="checkbox" value="1"><label for="email_v">Скрыть</label>
		</span></td>
                        </tr>
                        <tr>
                            <td><label for="city">E-mail (доп.):</label></td>
                            <td><input name="email2" id="email2" type="text" value=""></td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="email2_v" id="email2_v" type="checkbox" value="1"><label for="email2_v">Скрыть</label>
		</span></td>
                        </tr>
                        <tr>
                            <td><label for="phone1">Телефон:</label></td>
                            <td><input name="phone1" id="phone1" type="text" value=""></td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="phone1_v" id="phone1_v" type="checkbox" value="1"><label for="phone1_v">Скрыть</label>
		</span></td>
                        </tr>
                        <tr>
                            <td><label for="phone2">Телефон (моб.):</label></td>
                            <td><input name="phone2" id="phone2" type="text" value=""></td>
                            <td><span class="hide">
			<input title="Если чексбокс выделен, то поле скрыто" name="phone2_v" id="phone2_v" type="checkbox" value="1"><label for="phone2_v">Скрыть</label>
		</span></td>
                        </tr>
                       </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td class ="UpdateDate">
                                <div class="widget">
                                    <button class="ui-button ui-widget ui-corner-all ui-button-icon-only" title="Button with icon only">
                                         Обновить данные
                                    </button>
                                </div>
                            </td>
                            <td>&nbsp;</td>
                        </tr>

                        </tbody></table>
                </div>
            </div>
            <div class="customer__news">
                    <h1>Новости</h1>

                <div class="customer__news__wrap">

                        <div class="news-img">
                            <a href="/news/page-1/191/"><img alt="" src="/data/news/191/9006-icon-big.jpg"></a>
                            <div>16.08.2016</div>
                        </div>
                        <div class="news-data" >
                            <span>Эффективность чипирования</span>
                            <p>Действительно ли эффективно чипирование при поисках пропавшего питомца?</p>
                            <a href="/news/page-1/191/">Подробнее</a>
                        </div>
                        <div class="news-img" >
                            <a href="/news/page-1/191/"><img alt="" src="/data/news/191/9006-icon-big.jpg"></a>
                            <div>16.08.2016</div>
                        </div>
                        <div class="newsdata" >
                            <span>Эффективность чипирования</span>
                            <p>Действительно ли эффективно чипирование при поисках пропавшего питомца?</p>
                            <a href="/news/page-1/191/">Подробнее</a>
                        </div>
                        <div class="news-img">
                            <a href="/news/page-1/191/"><img alt="" src="/data/news/191/9006-icon-big.jpg"></a>
                            <div>16.08.2016</div>
                        </div>
                        <div class="news-data">
                            <span>Эффективность чипирования</span>
                            <p>Действительно ли эффективно чипирование при поисках пропавшего питомца?</p>
                            <a href="/news/page-1/191/">Подробнее</a>
                        </div>
                    <div class="news-data">
                        <span>Эффективность чипирования</span>
                        <p>Действительно ли эффективно чипирование при поисках пропавшего питомца?</p>
                        <a href="/news/page-1/191/">Подробнее</a>
                    </div>
                    <div class="news-data">
                        <span>Эффективность чипирования</span>
                        <p>Действительно ли эффективно чипирование при поисках пропавшего питомца?</p>
                        <a href="/news/page-1/191/">Подробнее</a>
                    </div>
                </div>
            </div>

            </div>
 
<!-- Конец CONTENT -->