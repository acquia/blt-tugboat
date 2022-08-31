<?php

namespace Acquia\BltTugboat\Blt\Plugin\EnvironmentDetector;

use Acquia\Blt\Robo\Common\EnvironmentDetector;

class TugboatDetector extends EnvironmentDetector {
  public static function getCiEnv() {
    return isset($_ENV['TUGBOAT_URL']) ? 'tugboat' : null;
  }

  public static function getCiSettingsFile(): string {
    return sprintf('%s/vendor/acquia/blt-tugboat/settings/tugboat.settings.php', dirname(DRUPAL_ROOT));
  }
}
