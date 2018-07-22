# LAUTH
### PL5-Lauth-CSFR

LAUTH, é um packager que tenho criado para aceleração de desenvolvimento de credenciais de acesso à aplicação frontend, em LARAVEL ^5.*. O packager cria o usuário de acesso com validação de email e envia email para refatoração de senha. Permite a customização de layout para os e-mails enviados e callbacks.

<a href="https://packagist.org/packages/lameck/lauth">Assinatura</a>
<b>composer require lameck/lauth</b>

KERNEL: app/Http/kernel.php
<pre>
lauth' => 'Lameck\Lauth\Http\Middleware\Authenticate',
'lweb' => 'Lameck\Lauth\Http\Middleware\AuthRedirect',
</pre>

PROVIDER: config/app.php
<pre>
Lameck\Lauth\LauthServiceProvider::class, 
</pre>

<b>composer dumpautoload</b>

EXPORT:
<B>php artisan vendor:publish --provider="Lameck\Lauth\LauthServiceProvider" --force</B>

<HR/>
CONFIGURAÇÃO
========
Configuração de email: https://mailtrap.io.<br>
Migration Users: database/migrations/*users.php
<pre>
***
$table->increments('id');
$table->integer('confirm');
$table->string('name');
$table->string('email')->unique();
$table->string('password');
$table->rememberToken();
$table->timestamps();
***
</pre>

MODEL USER: app/User.php<br>
<pre>protected $fillable = ['confirm','name', 'email', 'password','remember_token'];</pre>

<HR/>
EXEMPLO DEFAULT
===============
<br>
<B>php artisan migrate<br>php artisan serve</B>br>
http://localhost:8000/login/account/signin
<br>
<b>php artisan rout:list</b>
<br><br>
<a href="http://localhost:8000/login/account/signin">Blog para exemplos</a><br>
<a href="https://www.gnu.org/licenses/gpl.html">GNU General Public License v3.0</a>










