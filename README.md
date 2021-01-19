# todo


## SQL commands
```sql
CREATE DATABASE todo;
use todo
GRANT SELECT ON todo.* TO tdbot@localhost IDENTIFIED BY '1IOcS6UWR6';

GRANT SELECT,INSERT ON todo.* TO tdibot@localhost IDENTIFIED BY 'LOecQwXVZB8w3K8tH3PqBAg8MRPWQKiZ';

GRANT SELECT,INSERT, UPDATE ON todo.* TO tdubot@localhost IDENTIFIED BY 'Th8wfw5F5rgwVuSC0NVjwGZLhGN11yOj';

CREATE TABLE list (id int AUTO_INCREMENT, created datetime DEFAULT CURRENT_TIMESTAMP,  last_edit datetime DEFAULT CURRENT_TIMESTAMP,pwd VARCHAR(256) DEFAULT NULL, last_view datetime DEFAULT CURRENT_TIMESTAMP, has_pwd boolean not null default false, PRIMARY KEY(id));

CREATE TABLE ent (id int AUTO_INCREMENT, list_id int NOT NULL, created datetime DEFAULT CURRENT_TIMESTAMP,text text DEFAULT NULL,author varchar(100) DEFAULT "anonymus user", is_done boolean NOT NULL DEFAULT false, PRIMARY KEY(id));
```