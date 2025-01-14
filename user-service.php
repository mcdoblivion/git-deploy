<?php
define("TOKEN", "secret-token");                                                    // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
define("REMOTE_REPOSITORY", "https://gitlab.com/accommerce/user-service.git");      // The SSH URL to your repository
define("DIR", "/home/ubuntu/accommerce/user-service");                             // The path to your repostiroy; this must begin with a forward slash (/)
define("BRANCH", "refs/heads/master");                                              // The branch route
define("LOGFILE", "deploy.log");                                                    // The name of the file you want to log to.
define("GIT", "/usr/bin/git");                                                      // The path to the git executable
define("MAX_EXECUTION_TIME", 180);                                                  // Override for PHP's max_execution_time (may need set in php.ini)
define("BEFORE_PULL", "/usr/bin/git reset --hard @{u}");
define("AFTER_PULL", "/usr/bin/pm2 restart user-service & /usr/bin/yarn");         // A command to execute after successfully pulling

require_once("deployer.php");
