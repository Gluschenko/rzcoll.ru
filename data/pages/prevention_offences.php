С целью повышения эффективности реализации информационно-пропагандистских мероприятий, направленных на предупреждение распространения угроз, 
связанных с террористическими экстремистскими взглядами и идеологий банд формирований, призываем активных граждан, владеющих информацией об интернет – ресурсах, 
где предположительно содержится запрещенный к распространению контент, указать ссылки на подобные интернет – ресурсы: в форме для обращения граждан.

<script>

	function SendFeedback()
	{
		var params = {
			name: Find('user_name').value,
			email: Find('email').value,
			subject: Find('subject').value,
			text: Find('text').value,
		};
		
		var Confirmed = Find('152-FL').checked;
		
		if(params.text != '' && params.name != '' && params.email != '')
		{
			if(Confirmed)
			{
				ShowLoader();
				
				ApiMethod('feedback.send', params, function(data){
					if(data.response != null)
					{
						if(data.response == 1)
						{
							SlideHide('feedback_form');
							SlideShow('feedback_result');
							ShowPanel('Отправлено', 0);
						}
						else
						{
							ShowPanel('Некорректное заполнение полей', 1);
						}
					}
					
					HideLoader();
				});
			}
			else
			{
				ShowPanel('Вы не дали согласие на обработку', 1);
			}
		}
		else
		{
			ShowPanel('Заполните обязательные поля *', 1);
		}
	}

	</script>
	<div id='feedback_form' style='padding-left: 40px; padding-right: 40px;'>
		<div class='big_space'></div>
		<input id='user_name' placeholder='Ваше имя (ФИО) *' value='' class='text_input big_input inner_center' style='width: 98%;'/>
		<div class='space'></div>
		<input id='email' placeholder='Контактный e-mail *' value='' class='text_input big_input inner_center' style='width: 98%;'/>
		<div class='space'></div>
		<input id='subject' placeholder='Тема обращения' value='' class='text_input big_input inner_center' style='width: 98%;'/>
		<div class='space'></div>
		<textarea id='text' placeholder='Текст обращения *' value='' class='text_input' style='width: 98%; height: 160px;'></textarea>
		<div class='space'></div>
		<div>
			<input type='checkbox' id='152-FL' value='checkbox_1'>
			<label for='152-FL' class='small_text'>
				Нажимая кнопку «Отправить», я принимаю условия Пользовательского соглашения и даю своё согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных Политикой конфиденциальности
			</label>
		</div>
		<br>
	    <center>Конфидициальность сведений гарантируется!</center>
	<div class='big_space'></div>
		<div class='button back4' style='margin: auto;' onclick='SendFeedback();'>Отправить</div>
		<div class='big_space'></div>
	</div>
	<div id='feedback_result' style='display: none;'>
		<div class='title_text inner_center' style='padding: 150px;'>Спасибо за проявленную активность</div>
	</div>
	