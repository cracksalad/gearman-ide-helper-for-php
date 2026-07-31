<?php

/**
 * @author Andreas Wahlen
 */
class GearmanWorker {

  public function __construct() {}
  
  public function __destruct() {}
  
  public function returnCode(): int {}
  
  public function error(): string|false {}
  
  public function getErrno(): int {}
  
  public function options(): int {}
  
  public function setOptions(int $option): true {}
  
  public function addOptions(int $option): true {}
  
  public function removeOptions(int $option): true {}
  
  public function timeout(): int {}
  
  public function setTimeout(int $timeout): true {}
  
  public function setId(string $id): bool {}
  
  /**
   * NOTE: setSSL is conditionally compiled (#ifdef HAVE_GEARMAN_CLIENT_SET_SSL).
   */
  public function setSSL(bool $ssl = true, ?string $ca_file = null, ?string $certificate = null, ?string $key_file = null): bool {}
  
  public function addServer(?string $host = null, int $port = 0, bool $setupExceptionHandler = true): bool {}
  
  public function addServers(?string $servers = null, bool $setupExceptionHandler = true): bool {}
  
  public function wait(): bool {}
  
  public function register(string $function_name, int $timeout = 0): bool {}
  
  public function unregister(string $function_name): bool {}
  
  public function unregisterAll(): bool {}
  
  public function grabJob(): GearmanWorker|false {}
  
  /**
   * @psalm-param callable(GearmanJob, &mixed):string $function
   */
  public function addFunction(string $function_name, callable $function, mixed $context = null, int $timeout = 0): bool {}
  
  public function work(): bool {}
  
  public function ping(string $data): bool {}
  
  public function enableExceptionHandler(): bool {}
}
