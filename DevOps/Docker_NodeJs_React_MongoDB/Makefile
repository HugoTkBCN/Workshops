up:
	sudo docker-compose up -d

down:
	sudo docker-compose down -v

restart:
	sudo docker-compose down -v
	sudo docker-compose up -d

build:
	sudo docker-compose build

re-build-server:
	sudo docker-compose down -v
	sudo docker rmi template/server:latest
	sudo docker-compose build

re-build-client_web:
	sudo docker-compose down -v
	sudo docker rmi template/client_web:latest
	sudo docker-compose build

clean-db:
	sudo rm -rf data-node

logs-server:
	sudo docker logs server

logs-client_web:
	sudo docker logs client_web