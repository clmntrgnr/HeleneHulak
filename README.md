# HeleneHulak

# Install docker:
sudo apt install docker.io
sudo apt install docker-compose

# Start project container

docker-compose -up -d
Then, local project should be available on 0.0.0.0:8000

# Stop project container

docker-compose stop

# Restore
cat backup.sql | docker exec -i helenehulak_db_1 /usr/bin/mysql -u wordpress --password=wordpress wordpress

# Backup
docker exec helenehulak_db_1 /usr/bin/mysqldump -u wordpress --password=wordpress wordpress > backup.sql

