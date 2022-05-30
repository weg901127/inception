DOCKER=docker
IMAGES=nginx:v1 mariadb:v1 wordpress:v1 alpine:3.13
CONTAINERS=`docker ps -aq`
DOCKER_COMPOSE=docker-compose
ENV= --env-file ./srcs/.env
DOCKER_COMPOSE_FILE=./srcs/docker-compose.yaml

up:
	@$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) up -d
	@$(DOCKER) ps
	@$(DOCKER) exec -it nginx ps
	@$(DOCKER) exec -it mariadb ps
	@$(DOCKER) exec -it wordpress ps
volume:
	@$(DOCKER) volume $(args)

start:
	@$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) up -d $(c)

stop:
	@$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) stop $(c)

status:
	@$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) ps

restart:
	@$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) stop
	@$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) up -d

logs:
	@$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) logs --tail=100 -f

clean:
	@$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) down
	@$(DOCKER) rmi -f $(IMAGES)
