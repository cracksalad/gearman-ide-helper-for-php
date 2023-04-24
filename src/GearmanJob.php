<?php

/**
 * @author Andreas Wahlen
 */
class GearmanJob {

  public function __destruct() {}
  
  public function returnCode(): ?int {}
  
  public function setReturn(int $gearman_return_t): ?bool {}
  
  public function sendData(string $data): ?bool {}
  
  public function sendWarning(string $warning): bool {}
  
  public function sendStatus(int $numerator, int $denominator): bool {}
  
  public function sendComplete(string $result): bool {}
  
  public function sendException(string $exception): bool {}
  
  public function sendFail(): bool {}
  
  public function handle(): false|string {}
  
  public function functionName(): false|string {}
  
  public function unique(): false|string {}
  
  public function workload(): string {}
  
  public function workloadSize(): ?int {}
}
