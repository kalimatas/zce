<?php

namespace foo\my {
	function name() { echo __NAMESPACE__ . PHP_EOL; };
}

namespace blah\blah\my {
	function name() { echo __NAMESPACE__ . PHP_EOL; };
}

namespace foo {
	use blah\blah as foo;

	my\name(); // foo\my
	foo\my\name(); // blah\blah\my
}
