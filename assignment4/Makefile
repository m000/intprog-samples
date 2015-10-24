.PHONY: all config zip

all: config web/smarty ccgi/libccgi.a

zip:
	./mkexcludes.sh > excludes.lst
	zip -r ../assignment4.zip * --exclude @excludes.lst

config: web/config.php paper/config.h

%/config.php: config.ini
	python confgen.py php $@

%/config.h: config.ini
	python confgen.py c $@

web/smarty:
	make -C web smarty

ccgi/libccgi.a:
	make -C ccgi
