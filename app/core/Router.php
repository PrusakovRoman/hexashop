<?

namespace app\core;

class Router
{
  private $routes = [];
  private $params = [];

  public function __construct()
  {
    $routes_arr = require_once CONFIG . '/routes.php';
    foreach ($routes_arr as $route => $params) {
      $this->add_pattern_route($route, $params);
    }
  }

  public function run()
  {
    if ($this->match_url()) {
      $controller_class = '\app\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
      if (class_exists($controller_class)) {
        $controller = new $controller_class($this->params);
        $action_name = $this->params['action'] . '_action';
        if (method_exists($controller, $action_name)) {
          $controller->$action_name();
        } else {
          if (PROD) {
            include 'app/views/404/index.php';
          } else {
            var_dump('Метод ' . $action_name . ' не существует');
          }
        }
      } else {
        if (PROD) {
          include 'app/views/404/index.php';
        } else {
          var_dump('Класс ' . $controller_class . ' не существует');
        }
      }
    } else {
      if (PROD) {
        include 'app/views/404/index.php';
      } else {
        var_dump('URL не существует');
      }
    }
  }

  private function add_pattern_route($route, $params)
  {
    $template_route = '#^' . trim($route, '/') . '^#';
    $this->routes[$template_route] = $params;
  }

  private function match_url()
  {
    $url_with_query = trim($_SERVER['REQUEST_URI'], '/');
    $url = $this->remove_query_string($url_with_query);

    foreach ($this->routes as $route => $params) {
      if (preg_match($route, $url, $matches)) {
        $this->params = $params;
        return true;
      }
      return false;
    }
  }

  private function remove_query_string($url_with_query)
  {
    $url_parts = explode('?', $url_with_query);
    $url_without_query = trim($url_parts[0], '/');
    return $url_without_query;
  }
}
