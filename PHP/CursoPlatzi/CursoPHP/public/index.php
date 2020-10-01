<?php 

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();


use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

$baseRoute = '/PHP/CursoPHP/';
$map->get('index', $baseRoute . '/', [
    'controller' => 'App\Controllers\IndexController',
    'action' => 'indexAction'
]);

$map->get('addJob', $baseRoute . 'add/jobs',[
    'controller' => 'App\Controllers\JobsController',
    'action' => 'getAddJobAction'
]);

$map->post('savedJobs', $baseRoute . 'jobs/add',[
    'controller' => 'App\Controllers\JobsController',
    'action' => 'getAddJobAction'
]);

$map->get('addUsers', $baseRoute . '/users/add',[
    'controller' => 'App\Controllers\UsersController',
    'action' => 'getAddUsersAction'
]);

$map->post('saveUsers', $baseRoute . '/users/add',[
    'controller' => 'App\Controllers\UsersController',
    'action' => 'getAddUsersAction'
]);

$map->get('loginForm', $baseRoute . '/login',[
    'controller' => 'App\Controllers\AuthController',
    'action' => 'getLogin'
]);

$map->get('logout', $baseRoute . '/logout',[
    'controller' => 'App\Controllers\AuthController',
    'action' => 'getLogout'
]);


$map->post('auth', $baseRoute . '/auth',[
    'controller' => 'App\Controllers\AuthController',
    'action' => 'postLogin'
]);

$map->get('admin', $baseRoute . '/admin',[
    'controller' => 'App\Controllers\AdminController',
    'action' => 'getIndex',
    'auth' => true
]);



$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);


function printElement($job){
    // if ($trabajos->visible == false) {
    //   return;
  // }
  
    echo '<li class="work-position">';
    echo '<h5>'. $job->title . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . $job->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
    }
  


if (!$route) {
    
    echo 'No route';
} else {
    $handlerData = $route->handler;
    $controllerName =$handlerData['controller'];
    $actionName = $handlerData['action'];
    $needsAuth = $handlerData['auth'] ?? false;

    $sessionsUserId = $_SESSION['userId'] ?? null;
    if ($needsAuth and !$sessionUserId) {
        echo 'Protected route';
        die;
    }

    $controller = new $controllerName;
    $response = $controller->$actionName($request);

    foreach($response->getHeaders() as $name => $value){
        foreach($values as $value){
            header(sprintf('%s %s', $name, $value), false);
        }
    }
    http_response_code($response->getStatusCode());
    echo $response->getBody();
}
