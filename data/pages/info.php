<style>
.sitemap_link{
	border-radius: 3px;
	display: block;
	position: relative;
}

.sitemap_link:hover {
	border-color: #777 !important;
}

.sitemap_preview{
	border-top-left-radius: 3px;
	border-bottom-left-radius: 3px;
	top: 0px;
    bottom: 0px;
	position: absolute;
	width: 54px;
	background-position: center, center;
	background-size: cover, cover;
}
</style>

<div>
	<div id='link_list'></div>
</div>

<div style='padding-top: 10px;'>
    <div class='small_text fore6'>* В соответствии с постановлением Правительства РФ от 10.07.2013 №582 "Об утверждении Правил размещения на официальном сайте образовательной 
    организации в информационно-телекоммуникационной сети "Интернет" и обновления информации об образовательной организации" и Приказом №785 от 29.05.2014 Федеральной службы 
    по надзору в сфере образования и науки "Об утверждении требований к структуре официального сайта образовательной организации в информационно-телекоммуникационный 
    сети "Интернет" и формату представления на нем информации"</div>
</div>

<script>
var links = [
	//"Основные сведения", ["Информация о колледже", "/about", "Контакты", "/contacts"],
	"Основные сведения", "/about",
	"История колледжа", "/history",
	"Контакты", "/contacts",
	"Структура и органы управления", "/structure",
	"Специальности", "/specs",
	//"Документы", "/docs",
	//"Образование", "/education",
	"Образовательные стандарты", "/edu_standards",
	"Руководство и педагогический состав", "/collective",
	"Материально-техническое обеспечение", "/equipment",
	//"Стипендия и материальная поддержка", "/mat_support",
	//"Платные образовательные услуги", "/edu_services",
	//"Финансово-хозяйственная деятельность", "/finance",
	//"Вакантные места для приёма", "/vacancies",
];

var markup = "";

for(var c = 0; c < links.length; c += 2)
{
	var link_title = links[c];
	var link_addr = links[c + 1];

	var link_nav = "href='" + link_addr + "' onclick='CloseWindow();' async";
	if(typeof link_addr != "string")
	{
		link_nav = "onclick='SlideToggle(\"sublinks_" + c + "\");'";
	}
	
	markup += "<a class='border6 sitemap_link' ' class='back3' " + link_nav + ">" + 
	    "<div class='padding' style='display: inline-block; vertical-align: middle;'>" +
		"<span class='text'>" + link_title + "</span>" + 
		"<br/>" +
		"<span class='text fore6'>" + link_addr + "</span>" + 
		"</div>" + 
		"</a>";
		
	markup += "<div class='space'></div>";
}

Write("link_list", markup);

</script>
<!--

<div style='width: 500px; margin: auto;'>
    <div style='height: 50px;'>
        <div class='n_back4 ui_coin' style='float: left; background-image: url(/files/Adress.png);'></div>
        <div class='text fore4 ui_font' style='float: right; width: 350px;'>г. Ржев, ул. Торопецкий тракт, д. 1</div>
    </div>

    <div style='height: 50px;'>
        <div class='n_back5 ui_coin' style='float: left; background-image: url(/files/Email.png);'></div>
        <div class='text fore4 ui_font' style='float: right; width: 350px;'>rzhcollege@yandex.ru</div>
    </div>

    <div style='height: 50px;'>
        <div class='n_back4 ui_coin' style='float: left; background-image: url(/files/Phone.png);'></div>
        <div class='text fore4 ui_font' style='float: right; width: 350px;'>8(48232) 2-32-65</div>
    </div>

    <div style='height: 50px;'>
        <div class='n_back4 ui_coin' style='float: left; background-image: url(/files/Web.png);'></div>
        <div class='text fore4 ui_font' style='float: right; width: 350px;'>ПН-ПТ с 08:00 до 16:00</div>
    </div>

</div>


<div style='height: 50px;'/'></div>
<div style='width: 500px; margin: auto;'>
	<div class='menu_button'>Основные сведения</div>
	<div class='menu_button'>Структура и органы управления</div>
	<div class='menu_button'>Документы</div>
	<div class='menu_button'>Образование</div>
	<div class='menu_button'>Образовательные стандарты</div>
	<div class='menu_button'>Руководство и педагогический состав</div>
	<div class='menu_button'>Материально-техническое обеспечение</div>
	<div class='menu_button'>Стипендия и материальная поддержка</div>
	<div class='menu_button'>Платные образовательные услуги</div>
	<div class='menu_button'>Финансово-хозяйственная деятельность</div>
	<div class='menu_button'>Вакантные места для приёма</div>
</div>
<div style='height: 50px;'/'></div>
-->