FROM postgres:latest

ENV POSTGRES_DB test_db
ENV POSTGRES_USER postgres
ENV POSTGRES_PASSWORD postgres

# Run SQL script to create the database
COPY ./init.sql /docker-entrypoint-initdb.d/

# Expose PostgreSQL port
EXPOSE 5432

#COPY ./install-extensions.sql /docker-entrypoint-initdb.d
