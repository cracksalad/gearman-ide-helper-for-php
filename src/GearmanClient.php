<?php

/**
 * @author Andreas Wahlen
 */
class GearmanClient {

  public function __construct() {}
  
  public function __destruct() {}
  
  public function returnCode(): int {}
  
  public function error(): string|false {}
  
  public function getErrno(): int {}
  
  public function options(): int {}
  
  public function setOptions(int $option): bool {}
  
  public function addOptions(int $option): bool {}
  
  public function removeOptions(int $option): bool {}
  
  public function timeout(): int {}
  
  public function setTimeout(int $timeout): bool {}
  
  public function addServer(string $host = null, int $port = 0, bool $setupExceptionHandler = true): bool {}
  
  public function addServers(string $servers = null, bool $setupExceptionHandler = true): bool {}
  
  public function wait(): bool {}
  
  public function doNormal(string $function, string $workload, ?string $unique = null): string {}
  
  public function doHigh(string $function, string $workload, ?string $unique = null): string {}
  
  public function dolow(string $function, string $workload, ?string $unique = null): string {}
  
  public function doBackground(string $function, string $workload, ?string $unique = null): string {}
  
  public function doHighBackground(string $function, string $workload, ?string $unique = null): string {}
  
  public function doLowBackground(string $function, string $workload, ?string $unique = null): string {}
  
  public function doJobHandle(): string {}
  
  /**
   * @return int[]
   * @psalm-return array{0:int,1:int}
   */
  public function doStatus(): array {}
  
  /**
   * @psalm-return array{0:bool,1:bool,2:int,3:int}
   */
  public function jobStatus(string $job_handle): array {}
  
  /**
   * @psalm-return array{0:bool,1:bool,2:int,3:int}
   */
  public function jobStatusByUniqueKey(string $unique_key): array {}
  
  public function ping(string $workload): bool {}
  
  public function addTask(string $function_name, string|int|float $workload, mixed $context = null, ?string $unique_key = null): GearmanTask|false {}
  
  public function addTaskHigh(string $function_name, string|int|float $workload, mixed $context = null, ?string $unique_key = null): GearmanTask|false {}
  
  public function addTaskLow(string $function_name, string|int|float $workload, mixed $context = null, ?string $unique_key = null): GearmanTask|false {}
  
  public function addTaskBackground(string $function_name, string|int|float $workload, mixed $context = null, ?string $unique_key = null): GearmanTask|false {}
  
  public function addTaskHighBackground(string $function_name, string|int|float $workload, mixed $context = null, ?string $unique_key = null): GearmanTask|false {}
  
  public function addTaskLowBackground(string $function_name, string|int|float $workload, mixed $context = null, ?string $unique_key = null): GearmanTask|false {}
  
  public function runTasks(): bool {}
  
  public function addTaskStatus(string $job_handle, mixed $context = null): GearmanTask {}
  
  /**
   * @psalm-param callable(GearmanTask):void $function
   */
  public function setWorkloadCallback(callable $function): bool {}
  
  /**
   * @psalm-param callable(GearmanTask):void $function
   */
  public function setCreatedCallback(callable $function): bool {}
  
  /**
   * @psalm-param callable(GearmanTask):void $function
   */
  public function setDataCallback(callable $function): bool {}
  
  /**
   * @psalm-param callable(GearmanTask):void $function
   */
  public function setWarningCallback(callable $function): bool {}
  
  /**
   * @psalm-param callable(GearmanTask):void $function
   */
  public function setStatusCallback(callable $function): bool {}
  
  /**
   * @psalm-param callable(GearmanTask):void $function
   */
  public function setCompleteCallback(callable $function): bool {}
  
  /**
   * @psalm-param callable(GearmanTask):void $function
   */
  public function setExceptionCallback(callable $function): bool {}
  
  /**
   * @psalm-param callable(GearmanTask):void $function
   */
  public function setFailCallback(callable $function): bool {}
  
  public function clearCallbacks(): bool {}
  
  public function context(): string {}
  
  public function setContext(string $data): bool {}
  
  public function enableExceptionHandler(): bool {}
}
