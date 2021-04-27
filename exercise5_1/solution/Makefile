# VARIABLES
MAKE_FILE_TEST ?= hello

# HELPERS
FUNBOX = \
	docker run --rm -it wernight/funbox

# MAIN COMMANDS
hello-world:
	echo "Hello world"

locomotive:
	docker run --rm -it m120/sl

nyancat:
	$(FUNBOX) nyancat

aquarium:
	$(FUNBOX) asciiquarium

matrix:
	$(FUNBOX) cmatrix

fire:
	$(FUNBOX) aafire

text:
	make -f $(MAKE_FILE_TEST).Makefile text
