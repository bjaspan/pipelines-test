The purpose of the 501 tutorial is to demonstrate the Pipelines web env and show how you can run behat as an example use of the web environment. One of the behat tests will publish the email variable you encypt to a private pipelines validation hipchat room.

Copy the files and directories from this directory into your Acquia Cloud repository. The container will check these files out from your repo.

echo "<<kieran@acquia.com>>" | pipelines encrypt - --add variables.global.EMAIL

Run pipeline start

Run pipeline logs to see the results of the behat tests
