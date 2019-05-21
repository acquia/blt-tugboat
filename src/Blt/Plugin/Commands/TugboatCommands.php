<?php

namespace Acquia\BltTugboat\Blt\Plugin\Commands;

use Acquia\Blt\Robo\BltTasks;
use Acquia\Blt\Robo\Exceptions\BltException;
use Robo\Contract\VerbosityThresholdInterface;

/**
 * Defines commands related to Tugboat.
 */
class TugboatCommands extends BltTasks {

  /**
   * Initializes default Tugboat configuration for this project.
   *
   * @command recipes:ci:tugboat:init
   * @throws \Acquia\Blt\Robo\Exceptions\BltException
   */
  public function tugboatInit() {
    $result = $this->taskFilesystemStack()
      ->copy($this->getConfigValue('repo.root') . '/vendor/acquia/blt-tugboat/scripts/Makefile', $this->getConfigValue('repo.root') . '/Makefile', TRUE)
      ->copy($this->getConfigValue('repo.root') . '/vendor/acquia/blt-tugboat/scripts/tugboat.drushrc.aliases.php', $this->getConfigValue('repo.root') . '/drush/sites/tugboat.drushrc.aliases.php')
      ->stopOnFail()
      ->setVerbosityThreshold(VerbosityThresholdInterface::VERBOSITY_VERBOSE)
      ->run();

    if (!$result->wasSuccessful()) {
      throw new BltException("Could not initialize Tugboat configuration.");
    }

    $this->say("<info>A pre-configured Tugboat Makefile was copied to your repository root.</info>");
  }

}
