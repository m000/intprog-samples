#!/usr/bin/env python

import ConfigParser, os

CONF='config.ini'
CONF_C='hotel/config.h'
CONF_PHP='web/config.php'

def dump_conf_php(config):
	lines = []
	for section in config.sections():
		for option in config.options(section):
			varname = ('$%s_%s' % (section, option)).upper()
			varvalue = config.get(section, option)
			try:
				lines.append('%s=%d;' % (varname, int(varvalue)))
			except ValueError:
				lines.append('%s="%s";' % (varname, varvalue))
	lines.insert(0, '<?php')
	lines.append('?>')
	lines.append('')
	return '\n'.join(lines)

def dump_conf_c(config):
	lines = []
	for section in config.sections():
		for option in config.options(section):
			varname = ('%s_%s' % (section, option)).upper()
			varvalue = config.get(section, option)
			try:
				lines.append('#define %s %d' % (varname, int(varvalue)))
			except ValueError:
				lines.append('#define %s "%s"' % (varname, varvalue))
	lines.insert(0, '#ifndef __ASSIGNMENT4__')
	lines.insert(1, '#define __ASSIGNMENT4__')
	lines.append('#endif')
	lines.append('')
	return '\n'.join(lines)

if __name__ == '__main__':
	config = ConfigParser.ConfigParser()
	config.read(CONF)
	with open(CONF_C, 'w') as f:
		f.write(dump_conf_c(config))
	with open(CONF_PHP, 'w') as f:
		f.write(dump_conf_php(config))
