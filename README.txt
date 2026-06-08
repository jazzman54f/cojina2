El Cojina — PHP restaurant site

Local run:
  php -S localhost:8000
  Open http://localhost:8000

Admin:
  Password hash is in api/admin/config.php
  Default password: cojina2025 (change the hash after deploy)

Render deploy (with PostgreSQL):
  1. Create a PostgreSQL database on Render
  2. Create a Web Service from this repo (Docker)
  3. In the Web Service, open Environment and either:
     - Link the database (Render adds DATABASE_URL automatically), or
     - Add: DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASSWORD
  4. Also set: APP_ENV=production, APP_DEBUG=false
  5. Redeploy after saving environment variables

Data (menu, plat du jour, orders, reservations, etc.) is saved in PostgreSQL.
Language and theme stay in the browser only.

First visit after deploy seeds the default menu into the database automatically.
