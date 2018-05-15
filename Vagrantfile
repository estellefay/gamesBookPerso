# -*- mode: ruby -*-
# vi: set ft=ruby :
Vagrant.configure("2") do |config|
	  config.vm.box = "debian/stretch64"
  	  config.vm.network "private_network", ip: '192.168.122.126'

  	  config.vm.synced_folder '.', '/vagrant', type:"virtualbox" 
  config.vm.provision "shell", path:"install-php7.2.sh"
  config.vm.provision "shell", path:"install-apache2.sh"

  end
