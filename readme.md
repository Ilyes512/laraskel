```
    __                   _____ __        __
   / /  ____ __________ / ___// /_____  / /
  / /  / __ `/ ___/ __ `|__ \/ //_/ _ \/ / 
 / /__/ /_/ / /  / /_/ /__/ / ,< /  __/ /  
/_____|__,_/_/   \__,_/____/_/|_|\___/_/   
A Laravel Skeleton for kick starting your Laravel Projects
```
## Installation (local)
This will install the app by using a Vagrant box and installing dependencies like PHP v5.6, Composer, MariaDB and Redis within your Virtual Machine (Vagrant box).

#### On your host machine (WIN / OSX / LINIX)
1. Clone this repository and navigate to the folder within your terminal of choice.
2. Make sure you have the below (free) tools installed on your machine:
	- [Virtualbox](https://www.virtualbox.org/wiki/Downloads)
	- [Vagrant](https://www.vagrantup.com/downloads.html)
	- [Ansible](http://docs.ansible.com/ansible/intro_installation.html) \*
3. Run the fallowing command to create a local VM: `$ vagrant up`.  
   When run for the first time it takes around 15 to 20 minutes depending on your machine.
4. After the install, you can ssh into the box by using: `$ vagrant ssh`.
5. **Optional**: Add the fallowing line to your hosts file: `192.168.50.51 laraskel.dev`.

#### On your guest machine (vagrant)
6. Move your ssh to: `$ cd /vagrant` (This is where you will find your files on the guest machine).
7. Run `$ composer install` and `$ npm install`.
8. Make sure there is a `.env`-file in the root of the application.
   If you don't see one, use `$ cp .env.example .env` to duplicate it from `.env.example`.
9. Run `$ php artisan key:generate` to generate a unique `APP_KEY` inside your `.env`-file.
10. Migrate and seed your database with: `$ php artisan migrate --seed`.  
   You can "refresh" your DB by running: `$ php artisan migrate:refresh --seed`.
11. And finally run: `$ ./node_modules/.bin/gulp` to build static files (css/js).


\* Should be optional, but not yet tested.

## MariaDB
You can connect to the database using the fallowing:

```
Host:     192.168.50.51
Username: laraskel
Password: secret
Database: laraskel
```

## License

(Soon to be added)