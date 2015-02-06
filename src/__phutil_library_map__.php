<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 *
 * @generated
 * @phutil-library-version 2
 */
phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' => array(
    'AutoLoader' => 'tests/Autoloader.php',
    'BoardDataPieView' => 'view/burndown/BoardDataPieView.php',
    'BoardDataProvider' => 'storage/BoardDataProvider.php',
    'BoardDataView' => 'view/burndown/BoardDataView.php',
    'BurndownActionMenuEventListener' => 'events/BurndownActionMenuEventListener.php',
    'BurndownDataDate' => 'util/BurndownDataDate.php',
    'BurndownDataDateTest' => 'tests/BurndownDataDateTest.php',
    'BurndownException' => 'exception/BurndownException.php',
    'C3ChartView' => 'view/burndown/C3ChartView.php',
    'C3PieView' => 'view/burndown/C3PieView.php',
    'CeleritySprintResources' => 'celerity/CeleritySprintResources.php',
    'ChartDataProvider' => 'storage/ChartDataProvider.php',
    'DateIterator' => 'tests/DateIterator.php',
    'EventTableView' => 'view/burndown/EventTableView.php',
    'HistoryTableView' => 'view/burndown/HistoryTableView.php',
    'OpenTasksView' => 'view/reports/OpenTasksView.php',
    'PhabricatorFactSprintEngine' => 'fact/PhabricatorFactSprintEngine.php',
    'ProjectOpenTasksView' => 'view/reports/ProjectOpenTasksView.php',
    'ProjectsTableView' => 'view/ProjectsTableView.php',
    'SprintApplication' => 'application/SprintApplication.php',
    'SprintApplicationTest' => 'tests/SprintApplicationTest.php',
    'SprintBeginDateField' => 'customfield/SprintBeginDateField.php',
    'SprintBoardColumnDetailController' => 'controller/board/SprintBoardColumnDetailController.php',
    'SprintBoardColumnEditController' => 'controller/board/SprintBoardColumnEditController.php',
    'SprintBoardColumnHideController' => 'controller/board/SprintBoardColumnHideController.php',
    'SprintBoardController' => 'controller/board/SprintBoardController.php',
    'SprintBoardImportController' => 'controller/board/SprintBoardImportController.php',
    'SprintBoardMoveController' => 'controller/board/SprintBoardMoveController.php',
    'SprintBoardReorderController' => 'controller/board/SprintBoardReorderController.php',
    'SprintBoardTaskCard' => 'view/SprintBoardTaskCard.php',
    'SprintBoardTaskEditController' => 'controller/board/SprintBoardTaskEditController.php',
    'SprintBoardViewController' => 'controller/board/SprintBoardViewController.php',
    'SprintBuildStats' => 'storage/SprintBuildStats.php',
    'SprintBuildStatsTest' => 'tests/SprintBuildStatsTest.php',
    'SprintColumnTransaction' => 'storage/SprintColumnTransaction.php',
    'SprintConstants' => 'constants/SprintConstants.php',
    'SprintController' => 'controller/SprintController.php',
    'SprintControllerTest' => 'tests/SprintControllerTest.php',
    'SprintCustomFieldTest' => 'tests/SprintCustomFieldTest.php',
    'SprintDAO' => 'storage/SprintDAO.php',
    'SprintDataView' => 'view/burndown/SprintDataView.php',
    'SprintDataViewController' => 'controller/SprintDataViewController.php',
    'SprintDefaultViewCapability' => 'capability/SprintDefaultViewCapability.php',
    'SprintEndDateField' => 'customfield/SprintEndDateField.php',
    'SprintFactDaemon' => 'fact/SprintFactDaemon.php',
    'SprintFactUpdateIterator' => 'fact/SprintFactUpdateIterator.php',
    'SprintIsSprintField' => 'customfield/SprintIsSprintField.php',
    'SprintListController' => 'controller/SprintListController.php',
    'SprintPoints' => 'util/SprintPoints.php',
    'SprintProjectCustomField' => 'customfield/SprintProjectCustomField.php',
    'SprintProjectProfileController' => 'controller/SprintProjectProfileController.php',
    'SprintProjectViewController' => 'controller/SprintProjectViewController.php',
    'SprintQuery' => 'query/SprintQuery.php',
    'SprintQueryTest' => 'tests/SprintQueryTest.php',
    'SprintReportBurndownView' => 'view/reports/SprintReportBurndownView.php',
    'SprintReportController' => 'controller/SprintReportController.php',
    'SprintReportOpenTasksView' => 'view/reports/SprintReportOpenTasksView.php',
    'SprintTableView' => 'view/burndown/SprintTableView.php',
    'SprintTaskStoryPointsField' => 'customfield/SprintTaskStoryPointsField.php',
    'SprintTestCase' => 'tests/SprintTestCase.php',
    'SprintTransaction' => 'storage/SprintTransaction.php',
    'SprintValidator' => 'util/SprintValidator.php',
    'SprintView' => 'view/SprintView.php',
    'TasksTableView' => 'view/burndown/TasksTableView.php',
    'UserOpenTasksView' => 'view/reports/UserOpenTasksView.php',
  ),
  'function' => array(),
  'xmap' => array(
    'BurndownActionMenuEventListener' => 'PhabricatorEventListener',
    'BurndownDataDateTest' => 'SprintTestCase',
    'BurndownException' => 'AphrontUsageException',
    'CeleritySprintResources' => 'CelerityResourcesOnDisk',
    'DateIterator' => 'Iterator',
    'PhabricatorFactSprintEngine' => 'PhabricatorFactEngine',
    'ProjectOpenTasksView' => 'OpenTasksView',
    'SprintApplication' => 'PhabricatorApplication',
    'SprintApplicationTest' => 'SprintTestCase',
    'SprintBeginDateField' => 'SprintProjectCustomField',
    'SprintBoardColumnDetailController' => 'SprintBoardController',
    'SprintBoardColumnEditController' => 'SprintBoardController',
    'SprintBoardColumnHideController' => 'SprintBoardController',
    'SprintBoardController' => 'SprintController',
    'SprintBoardImportController' => 'SprintBoardController',
    'SprintBoardMoveController' => 'PhabricatorProjectController',
    'SprintBoardReorderController' => 'SprintBoardController',
    'SprintBoardTaskEditController' => 'ManiphestController',
    'SprintBoardViewController' => 'SprintBoardController',
    'SprintBuildStatsTest' => 'SprintTestCase',
    'SprintController' => 'PhabricatorController',
    'SprintControllerTest' => 'SprintTestCase',
    'SprintCustomFieldTest' => 'SprintTestCase',
    'SprintDAO' => 'PhabricatorLiskDAO',
    'SprintDataView' => 'SprintView',
    'SprintDataViewController' => 'SprintController',
    'SprintDefaultViewCapability' => 'PhabricatorPolicyCapability',
    'SprintEndDateField' => 'SprintProjectCustomField',
    'SprintFactDaemon' => 'PhabricatorDaemon',
    'SprintFactUpdateIterator' => 'PhutilBufferedIterator',
    'SprintIsSprintField' => 'SprintProjectCustomField',
    'SprintListController' => 'SprintController',
    'SprintProjectCustomField' => array(
      'PhabricatorProjectCustomField',
      'PhabricatorStandardCustomFieldInterface',
    ),
    'SprintProjectProfileController' => 'SprintController',
    'SprintProjectViewController' => 'SprintController',
    'SprintQuery' => 'SprintDAO',
    'SprintQueryTest' => 'SprintTestCase',
    'SprintReportBurndownView' => 'SprintView',
    'SprintReportController' => 'SprintController',
    'SprintReportOpenTasksView' => 'SprintView',
    'SprintTaskStoryPointsField' => array(
      'ManiphestCustomField',
      'PhabricatorStandardCustomFieldInterface',
    ),
    'SprintTestCase' => 'PHPUnit_Framework_TestCase',
    'SprintView' => 'AphrontView',
    'UserOpenTasksView' => 'OpenTasksView',
  ),
));
