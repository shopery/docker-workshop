# VARIABLE DEFINITIONS
MODE ?= build

# HELPERS
COMPOSE = \
	docker-compose -f docker-compose.$(MODE).yml

# MAIN COMMANDS

# Start command
start:
	docker build -f Dockerfile -t exercise5_2-php:latest ./
	$(COMPOSE) up -d
	make reset-quotations
	echo "Visit site on http://localhost"

# Stop command
stop:
	$(COMPOSE) stop

# Reset quotations command
reset-quotations:
	$(COMPOSE) exec php mysql -h mysql -u root --password=root -e "truncate \`test-table\`" test-db

# Bash on PHP container command
php-bash:
	$(COMPOSE) exec php /bin/bash
