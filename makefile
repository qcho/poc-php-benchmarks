.PHONY: install
install: composer.phar
	php composer.phar install

composer.phar:
	util/install_composer.sh

.PHONY: bench
bench:
	vendor/bin/phpbench run benchmarks/ --report='generator: "table", break: ["revs"], cols: ["subject", "mean", "sum", "mem_peak"]' --revs=1000 --iterations=10

