# Stampt
Stampt is a virtual loyalty card wallet designed as a final year project by
Ross Currie (B00752174). It is developed using a frontend framework of Vue.js
and a backend framework of Laravel. In this `README.md` file, I will note all
the interesting points that I have learnt and encountered during the development
of this project, and I will also into brief overviews on complicated section of
code.

### A Fallback Route
In my application, I will have two levels of routing in laravel and vue. Laravel
receives the route first and from there it will decide what to do with it. If I run
`php artisan route:list` it gives me back a table of routes and the URL they have, it
looks like this:

```
+----------+---------------------+---------------+
| Method   | URI                 | Middleware    |
+----------+---------------------+---------------+
| GET|HEAD | /                   | web           |
| GET|HEAD | api/user            | api,auth:api  |
+----------+---------------------+---------------+
```

The fallback route allows me to direct any URLs that begin with `/api/` to the laravel router
and anything else will be passed to the Vue router. This is done by passing an optional
variable (`{any?}`) that is used to read what data comes after the `/`. A `->where` is then
added along with a regular expression to see if `api` comes after `/`. The whole route can be
found at:

```
web.php | Line 6 to Line 8
```

