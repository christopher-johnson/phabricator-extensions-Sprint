phabricator-extensions-Sprint
==================

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/christopher-johnson/phabricator-extensions-Sprint/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/christopher-johnson/phabricator-extensions-Sprint/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/christopher-johnson/phabricator-extensions-Sprint/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/christopher-johnson/phabricator-extensions-Sprint/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/christopher-johnson/phabricator-extensions-Sprint/badges/build.png?b=master)](https://scrutinizer-ci.com/g/christopher-johnson/phabricator-extensions-Sprint/build-status/master)

Manage your tasks with Points in Phabricator

Sprint provides a statistical overview of task activity, using the workboard as its primary source.
It includes a burndown chart that is always current with activity on the workboard.
It also adds pie chart visualization of the relationships between points, tasks, task status and workboard columns.

To enable a project as a Sprint, simply select the "Is Sprint" checkbox in the Project Edit Details page.
After a project is enabled as a Sprint, you must then enter a start and end date to define the period scope.
Then add some tasks to that project, and edit them to set some story points.

You can also view a list of all Sprint enabled projects by going to the Sprint application main interface at
/project/sprint.

####Tasks in Sprints have "Story Points"
Only tasks in Sprints have "Story Points".

![Alt text](rsrc/images/Screenshot-1.png?raw=true "Sprint Extension Burndown View")

=======
**INSTALLATION**

Requirements: PHP: You need PHP 5.4 or newer.

To install the Sprint extension:

1. update your phabricator and libphutil to HEAD
2. run git clone https://github.com/wikimedia/phabricator-extensions-Sprint.git /srv/phab/libext/sprint
3. from the /srv/phab/phabricator/bin directory run:

        ./config set load-libraries '{"sprint":"/srv/phab/libext/sprint/src"}'

4. create a symlink to link static files from the Sprint extension in the phabricator /webroot/rsrc directory:

        ln -s /srv/phab/libext/sprint/rsrc/webroot-static /srv/phab/phabricator/webroot/rsrc/sprint

**BUGS**

Report issues by creating a task here:

-  https://phabricator.wikimedia.org/maniphest/task/create/
-  and then add the phabricator-sprint-extension project.
