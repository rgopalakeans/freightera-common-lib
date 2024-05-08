## How to import this private repository inside other projects

You must have a pair key (private and public SSH keys).

1. Go to https://bitbucket.org/account/settings/ssh-keys and add the public key.
2. Inside the container, add the private key to `/root/.ssh/id_rsa`.
3. Run the command `composer require "freightera/freightera-common-lib" "dev-main"`.

PS: In case you need to make test before have your branch merged into main, you should change the version, e.g:

`composer require "freightera/freightera-common-lib" "dev-develop"`

or 

`composer require "freightera/freightera-common-lib" "dev-your-branch-name"`