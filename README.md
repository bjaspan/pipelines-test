This tutorial aims to help you decrypt a a message using an encrypted password on an encrypted secret.enc file using the Pipelines service.

Use the provided .acquia.yaml , composer.json, composer.lock, and lmssecret.txt, secret.enc files to add them to your Acquia Cloud repo.  Then encrypt and add your private key to the .acquia.yaml file. Use the syntax from the pipeline help encrypt command to add your encrypted key.

You private key will allow the container to checkout the private pipelinestutorial repo and get the necessary files.

Then look in your build artifact to see the secret written to your lmssecret.txt file.
