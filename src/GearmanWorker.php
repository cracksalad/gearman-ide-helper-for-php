<?php

/**
 * @author Andreas Wahlen
 */
class GearmanWorker {

  public function __construct() {}
  
  public function __destruct() {}
  
  public function returnCode(): ?int {}
  
  public function error(): string|false {}
  
  public function getErrno(): int|false {}
  
  public function options(): ?int {}
  
  public function setOptions(int $option): ?bool {}
  
  public function addOptions(int $option): ?bool {}
  
  public function removeOptions(int $option): ?bool {}
  
  public function timeout(): ?int {}
  
  public function setTimeout(int $timeout): bool {}
  
  public function setId(string $id): bool {}
  
  public function addServer(string $host = null, int $port = 0): bool {}
  
  public function addServers(string $servers = null): bool {}
  
  public function wait(): bool {}
  
  public function register(string $function_name, int $timeout = 0): bool {}
  
  public function unregister(string $function_name): bool {}
  
  public function unregisterAll(): bool {}
  
  public function grabJob(): GearmanWorker|false {}
  
  /**
   * @psalm-param callable(GearmanJob,&mixed):string $function
   */
  public function addFunction(string $function_name, callable $function, ?mixed $context = null, int $timeout = 0): bool {}
  
  public function work(): bool {}
  
  public function ping(string $data): bool {}
}
