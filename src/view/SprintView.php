<?php


abstract class SprintView extends AphrontView {

  /**
   * @param boolean $has_window
   * @param PhabricatorUser $user
   */
  public function renderReportFilters(array $tokens, $has_window, $user) {

    $form = id(new AphrontFormView())
        ->setUser($user)
        ->appendChild(
            id(new AphrontFormTokenizerControl())
                ->setDatasource(new PhabricatorProjectDatasource())
                ->setLabel(pht('Project'))
                ->setLimit(1)
                ->setName('set_project')
                ->setValue($tokens));

    if ($has_window) {
      list($window_str, , $window_error) = $this->getWindow();
      $form
          ->appendChild(
              id(new AphrontFormTextControl())
                  ->setLabel(pht('Recently Means'))
                  ->setName('set_window')
                  ->setCaption(
                      pht('Configure the cutoff for the "Recently Closed" column.'))
                  ->setValue($window_str)
                  ->setError($window_error));
    }

    $form
        ->appendChild(
            id(new AphrontFormSubmitControl())
                ->setValue(pht('Filter By Project')));

    $filter = new AphrontListFilterView();
    $filter->appendChild($form);

    return $filter;
  }
}
