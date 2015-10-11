.PHONY: all config

all: config web/smarty

config: web/config.php hotel/config.h hotelgw/config.h

%/config.php: config.ini
	python confgen.py php $@

%/config.h: config.ini
	python confgen.py c $@

web/smarty:
	make -C web smarty
