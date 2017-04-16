<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    // define public methods as commands
    public function commit($msg = '')
    {
        if (empty($msg)) {
            $msg = $this->ask("Commit message:");
        }

        $this->taskGitStack()
            ->stopOnFail()
            ->add('-A')
            ->commit($msg)
            ->push('origin','master')
            ->run();

    }
}