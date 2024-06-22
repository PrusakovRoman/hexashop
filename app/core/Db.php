<?

namespace app\core;

class Db
{
  protected $db;
  public function __construct()
  {
    $db_config_file = CONFIG . '/db_config.php';
    if (file_exists($db_config_file)) {
      $db_config = require_once $db_config_file;
      $this->connect_db($db_config);
    } else {
      echo 'Не существует файла для подключения к бд';
    }
  }

  private function connect_db($db_config)
  {
    try {
      $this->db = new \PDO("mysql: host={$db_config['host']}; dbname={$db_config['db_name']}", $db_config['login'], $db_config['password']);
    } catch (\PDOException $err) {
      if (PROD) {
        echo 'Не удалось подключиться к БД';
      } else {
        echo 'Не удалось подключиться к БД: ' . $err->getMessage();
      }
    }
  }

  public function fetch_all($table)
  {
    $stmt = $this->db->prepare("SELECT * FROM {$table}");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }

  public function fetch_one($table, $id)
  {
    $stmt = $this->db->prepare("SELECT * FROM {$table} WHERE id={$id}");
    $stmt->execute();
    return $stmt->fetch(\PDO::FETCH_OBJ);
  }

  public function custom_query($query)
  {
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }
}
