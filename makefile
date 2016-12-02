css: less/freelancer.less
	lessc --clean-css less/freelancer.less css/freelancer.min.css

publish:
	cp index2.php index.php
