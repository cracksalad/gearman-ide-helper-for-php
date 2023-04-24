<?php

/**
 * @author Andreas Wahlen
 */
class GearmanTask {

  public function __construct() {}
  
  public function returnCode(): int {}
  
  public function functionName(): false|string {}
  
  public function unique(): false|string {}
  
  public function jobHandle(): false|string {}
  
  public function isKnown(): bool {}
  
  public function isRunning(): bool {}
  
  /**
   * @psalm-return false|int<0,100>
   */
  public function taskNumerator(): false|int {}
  
  /**
   * @psalm-return false|int<0,100>
   */
  public function taskDenominator(): false|int {}
  
  public function data(): false|string {}
  
  public function dataSize(): int|false {}
  
  public function sendWorkload(string $data): int|false {}
  
  /**
   * @psalm-return false|array{0:int,1:string}
   */
  public function recvData(int $data_len): false|array {}
}
