<h1> Sprint 2 Question 1-3 </h1>
Before moving on to the question 1-3, theres two step required which is:
1. run php artisan migrate on the terminal to add one more column to the user
2. and then run php artisan db:seed on the terminal to add two user to the user table
<h2> Question 1 </h2>
In the question 1, the source code are available on the app/http/controller/SearchController while the route can be found in routes/web.php. To view the result, got to the browser and go to url: http://127.0.0.1:8000/search?category=province&src=api&id=12 (example) the category defines what did the user want to search (city/province), the src defines the source that the user want to fetch the data from, and the id is the specific city/province id number. 
<h2> Question 2 </h2>
In the question 2, the route is available on the routes/web.php and the authorization code would be available on the providers/authserviceprovider.php and the source code is available at app/Http/Controller/SearchController. To test the authorized user direct to  http://127.0.0.1:8000/login?email=admin@gmail.com&password=password after the user login, direct to url  http://127.0.0.1:8000/search_auth?category=city&src=db&id=1. for the unauthorized user, direct to http://127.0.0.1:8000/login?email=admin1@gmail.com&password=password after the user login, direct to url  http://127.0.0.1:8000/search_auth?category=city&src=db&id=1.
<h2> Question 3 </h2>
In the question 3, the source code is available on tests/unit/UnitTest.php. and to run the test, type .\vendor\bin\phpunit on the terminal
