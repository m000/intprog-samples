SMARTY_DIST_URL=https://github.com/smarty-php/smarty/archive/v3.1.27.tar.gz

.PHONY: 

smarty: smarty.tar.gz
	[ -d smarty ] || (tar -zxvf $< && mv smarty-*/libs smarty && rm -rf smarty-*)

smarty.tar.gz:
	wget $(SMARTY_DIST_URL) -O smarty.tar.gz

