.PHONY: all config

all: config web/smarty

config: web/config.php hotel/config.h

web/smarty:
	make -C web smarty

web/config.php: config.ini
	python confgen.py php $@

hotel/config.h: config.ini
	python confgen.py c $@
