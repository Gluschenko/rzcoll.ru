<noscript id='specs_window'>
    %specs%
</noscript>
<div class='big_space'></div>

<div class='inner_center'>
	<a href='/about' onclick='return NavAsync(this.href, true);' class="small_button back3 fore0 border0" style="border-radius: 40px; display: inline-block; width: 200px; margin: 5px;">Основные сведения</a>
	<a onclick='ShowBox("Специальности", Find("specs_window").innerText, 1000);' class="small_button back3 fore0 border0" style="border-radius: 40px; display: inline-block; width: 200px; margin: 5px;">Специальности</a>
	<a onclick='Find("feedback_button").onclick();' class="small_button back3 fore0 border0" style="border-radius: 40px; display: inline-block; width: 200px; margin: 5px;">Оставить отзыв</a>

	<div style='display: none;'>$feedback_widget$</div>
</div>

<div class='big_space'></div>
<a class='text header_underline pointer back3' href="/news" onclick="return NavAsync(this.href, true);">Новости</a>
<div class='divider'></div>
<div class='space'></div>

$news_widget$

<a href='/news' onclick="return NavAsync(this.href, true);"><div class='wide_link text back3'>Все новости</div></a>

<a class='text header_underline pointer back3' href="/events" onclick="return NavAsync(this.href, true);">Анонсы</a>
<div class='divider'></div>
<div class='space'></div>

$events_widget$

<a href='/events' onclick="return NavAsync(this.href, true);"><div class='wide_link text back3'>Все события</div></a>

<a class='text header_underline pointer back3' href="/gallery" onclick="return NavAsync(this.href, true);">Галерея</a>
<div class='divider'></div>
<div class='space'></div>

$gallery_widget$

<a href='/gallery' onclick="return NavAsync(this.href, true);"><div class='wide_link text back3'>Все фотографии</div></a>

<a class='text header_underline pointer'>Ролик</a>
<div class='divider'></div>
<div class='space'></div>

<script>
function ShowVideo()
{
	/*if(Exists("video"))
	{
		Write("video_block", Find("video").innerText);
	}*/
	
	ShowBox("Ролик", Find("video").innerText, 800);
}
</script>

<style>
#video_block{
    background-image: url(/files/Video_Preview.png);
    border-radius: 10px;
    background-size: cover, cover;
    background-position: center, center;
    margin: auto;
    display: block;
    max-width: 540px;
    height: 360px;
}
</style>

<div id='video_block' class='pointer' onclick='ShowVideo();'>
	<noscript id='video'>
		<iframe style="margin: auto; display: block; width: 100%; height: 480px; border: 0;" src="https://www.youtube.com/embed/4P1Vvfj90ec?rel=0&showinfo=0&autoplay=1" allowfullscreen></iframe>
	</noscript>
</div>

<div class='big_space'></div>

<!-- [iframe]//www.youtube.com/embed/gW8w8gu7xCQ[/iframe] -->

<style>
.wide_link
{
    margin: auto;
    text-align: center;
    line-height: 40px;
    width: 95%;
    border-radius: 4px;
}
</style>

<!--
<meta name="sputnik-verification" content="y82rjciOnbzTaizY"/>
-->