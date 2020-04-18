<h1> 라라벨 파일매니저</h1>
<p>AMUZ CMS 를 위한 전용파일매니저로, READ ME를 별도로 제공하지 않습니다.</p>

<h4>install note</h4>
`composer require xisodev/laravel-filemanager`
 `php artisan vendor:publish --tag=lfm_config`
 `php artisan vendor:publish --tag=lfm_public`
 `php artisan storage:link`
 
<h4>모든 설정을 커스텀하려는 경우</h4>
<p>아래 명령을 실행하여 App/Handlers/LfmConfigHandler.php 를 복제한 후 편집</p>
`php artisan vendor:publish --tag=lfm_handler`
