<?php

/**
 * Defines Sprint's static resources.
 */
final class CeleritySprintResources extends CelerityResourcesOnDisk {

  public function getName() {
    return 'sprint';
  }

  public function getPathToResources() {
    return $this->getSprintPath('rsrc');
  }

  public function getPathToMap() {
    return $this->getSprintPath('src/celerity/map.php');
  }

  private function getPhabricatorPath($to_file) {
    return (SprintConstants::PHABRICATOR_ROOT_DIR).'/'.$to_file;
  }

  private function getSprintPath($to_file) {
    return (phutil_get_library_root('sprint')).'/'.$to_file;
  }

}