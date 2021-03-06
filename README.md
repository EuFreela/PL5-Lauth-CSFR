# LAUTH
### PL5-Lauth-CSFR

LAUTH, é um packager que tenho criado para aceleração de desenvolvimento de credenciais de acesso à aplicação frontend, em LARAVEL ^5.*. O packager cria o usuário de acesso com validação de email e envia email para refatoração de senha. Permite a customização de layout para os e-mails enviados e callbacks.

<a href="https://packagist.org/packages/lameck/lauth">Assinatura</a>
<b>composer require lameck/lauth</b>
<br>

### KERNEL: app/Http/kernel.php<br>
### =============================== 
<br>
<pre>
lauth' => 'Lameck\Lauth\Http\Middleware\Authenticate',
'lweb' => 'Lameck\Lauth\Http\Middleware\AuthRedirect',
</pre>
<br>
### PROVIDER: config/app.php<br>
### =============================
<br>
<pre>
Lameck\Lauth\LauthServiceProvider::class, 
</pre>
<br>
<b>composer dumpautoload</b>
<br>

EXPORT:
<B>php artisan vendor:publish --provider="Lameck\Lauth\LauthServiceProvider" --force</B>

<HR/>
### CONFIGURAÇÃO
### ============== 
<br>
Configuração de email: https://mailtrap.io.<br>
Migration Users: database/migrations/*users.php<br>
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
<br>
### MODEL USER: app/User.php<br>
### ===========================
<br>
<pre>protected $fillable = ['confirm','name', 'email', 'password','remember_token'];</pre>

<HR/>
### EXEMPLO DEFAULT <br>
### ===============
<br>
<B>php artisan migrate<br>php artisan serve</B><br>
http://localhost:8000/login/account/signin
<br>
<b>php artisan rout:list</b>
<br>
### ATRIBUTOS<br>
### =========<br>
<b>Página de Login:</b><br>
<pre>
name="email" - para o input email
name="pwd" - para o input senha
post: user.postsignin
</pre><br>
<b>Página de regitro:</b><br>
<pre>
name="nome" - input nome
name="email" - input email
name="senha" - input password
name="repita_senha" - input repassword
post: user.postsignup
</pre><br>
<b>Página de lembrar senha:</b><br>
<pre>
name="email" - input email
pot: user.postforgot
</pre><br>
<b>Página de nova senha:</b><br>
<pre>
name="senha" - input password
name="repita_senha" - input repassword
post: user.postnewkey
</pre><br>

<br>
<a href="https://novos-cientistas.blogspot.com/2018/07/packager-laravel-lauth-11-modo-de-uso.html">Blog para exemplos</a><br>
<a href="https://www.gnu.org/licenses/gpl.html">GNU General Public License v3.0</a>

