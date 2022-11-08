<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Becloud");
?>

    <div class="interview_wrapper">
        <div class="interview_ttl">
            <h2>Оцените наш сайт</h2>
            <span>по 5-бальной шкале</span>
        </div>
        <div class="form_wrapper">
            <form>
                <div class="field_wrap">
                    <p class="field_caption">Насколько доступна предоставленная информация?</p>
                    <div class="radio_group">
                        <div class="radio_field">
                            <input type="radio" id="fir1" name="first_q" value="1"/>
                            <label for="fir1">1</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="fir2" name="first_q" value="2"/>
                            <label for="fir2">2</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="fir3" name="first_q" value="3"/>
                            <label for="fir3">3</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="fir4" name="first_q" value="4"/>
                            <label for="fir4">4</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="fir5" name="first_q" value="5"/>
                            <label for="fir5">5</label>
                        </div>
                    </div>
                </div>
                <div class="field_wrap">
                    <p class="field_caption">Насколько сложно ориентироваться на сайте?</p>
                    <div class="radio_group">
                        <div class="radio_field">
                            <input type="radio" id="s1" name="sec_q" value="1"/>
                            <label for="s1">1</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="s2" name="sec_q" value="2"/>
                            <label for="s2">2</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="s3" name="sec_q" value="3"/>
                            <label for="s3">3</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="s4" name="sec_q" value="4"/>
                            <label for="s4">4</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="s5" name="sec_q" value="5"/>
                            <label for="s5">5</label>
                        </div>
                    </div>
                </div>
                <div class="field_wrap">
                    <p class="field_caption">Насколько просто найти нужную информацию на сайте?</p>
                    <div class="radio_group">
                        <div class="radio_field">
                            <input type="radio" id="t1" name="third_q" value="1"/>
                            <label for="t1">1</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="t2" name="third_q" value="2"/>
                            <label for="t2">2</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="t3" name="third_q" value="3"/>
                            <label for="t3">3</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="t4" name="third_q" value="4"/>
                            <label for="t4">4</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="t5" name="third_q" value="5"/>
                            <label for="t5">5</label>
                        </div>
                    </div>
                </div>
                <div class="field_wrap">
                    <p class="field_caption">Полнота представленной информации?</p>
                    <div class="radio_group">
                        <div class="radio_field">
                            <input type="radio" id="f1" name="four_q" value="1"/>
                            <label for="f1">1</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="f2" name="four_q" value="2"/>
                            <label for="f2">2</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="f3" name="four_q" value="3"/>
                            <label for="f3">3</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="f4" name="four_q" value="4"/>
                            <label for="f4">4</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="f5" name="four_q" value="5"/>
                            <label for="f5">5</label>
                        </div>
                    </div>
                </div>
                <div class="field_wrap">
                    <p class="field_caption">Регулярность обновления информации в разделе новости, информирование клиентов?</p>
                    <div class="radio_group">
                        <div class="radio_field">
                            <input type="radio" id="fi1" name="five_q" value="1"/>
                            <label for="fi1">1</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="fi2" name="five_q" value="2"/>
                            <label for="fi2">2</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="fi3" name="five_q" value="3"/>
                            <label for="fi3">3</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="fi4" name="five_q" value="4"/>
                            <label for="fi4">4</label>
                        </div>
                        <div class="radio_field">
                            <input type="radio" id="fi5" name="five_q" value="5"/>
                            <label for="fi5">5</label>
                        </div>
                    </div>
                </div>
                <div class="field_wrap text">
                    <p class="field_caption">Что бы вы хотели улучшить в работе сайта?</p>
                    <textarea name="txt" id="" cols="30" rows="10"></textarea>
                </div>

                <button class="btn-submit" type="submit" name="" id="">Отправить</button>
            </form>
        </div>
    </div>
    <div class="interview_popup">
        <div class="figure_v">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                <path fill="#43A047" d="M40.6 12.1L17 35.7 7.4 26.1 4.6 29 17 41.3 43.4 14.9z"/>
            </svg>
        </div>
        <p>Спасибо, за участие в опросе!</p>
        <p>Ваше мнение очень важно для нас!</p>
        <a href="javascript:void(0)">Ok</a>
    </div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>