<?php namespace vjee\Collection;

class Collection
{

  /**
   * Collection constructor.
   * @param array|null $params
   */
  public function __construct(array $params = null)
  {
    if ($params !== null) {
      foreach ($params as $key => $value) {
        $this->$key = $value;
      }
    }
  }

  /**
   * Check if the Params has a key.
   * @param string $key
   * @return boolean
   */
  public function has(string $key): bool
  {
    return property_exists($this, $key);
  }

  /**
   * Add a key and value.
   * @param string $key
   * @param mixed $value
   * @return void
   */
  public function set(string $key, $value): void
  {
    $this->$key = $value;
  }

  /**
   * Add multiple key value pairs.
   * @param array $data
   * @return void
   */
  public function setMultiple($data): void
  {
    foreach($data as $key => $value) {
      $this->set($key, $value);
    }
  }

  /**
   * Get the value of a property.
   * @param string $key
   * @return mixed
   */
  public function get(string $key)
  {
    return $this->$key;
  }

  /**
   * Remove the value of a property.
   * @param string $key
   * @return void
   */
  public function unset(string $key): void
  {
    unset($this->$key);
  }

}
