## Chat with Laravel
Example of a chat application built on Laravel.

### Running the app (For mac and linux)
Install the following software on your local machine:
- [VirtualBox 5.1](https://www.virtualbox.org/wiki/Downloads)
- [Vagrant](https://www.vagrantup.com/downloads.html)
- add the laravel/homestead box to your Vagrant installation using the following command in your terminal:
```vagrant box add laravel/homestead```
- In the project root folder, run the following command: 
```php vendor/bin/homestead make```
- edit your machine's hosts file located in ```/etc/hosts``` and add the following line to it:
```192.168.10.10   chat_with_laravel.app```
- in the project's root directory, launch the Virtual Machine by running this command on the terminal:
```vagrant up```
- access the project at ```http://chat_with_laravel.app``` in your browser

## License
This is only a sample application, it is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
