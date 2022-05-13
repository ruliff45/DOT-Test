<h1> Sprint1 Question 1-3 </h1>
The steps that are needed to perform before executing the code for the question are such as:
1. Have the Xampp ready and start Apache and MySQL module
2. Create new database named as dot_db in the phpmyadmin
3. To test the solution, run php artisan serve in the terminal/console
4. Then proceed to the browser and go to localhost:8000
5. To initiate the database tables, run php artisan migrate in the terminal
<h2> Question 1 </h2>
In the question 1, the code is pretty straighfoward, it just fetch the data from the given api url with the key and display it. To test it use the url localhost:8000/get_city for the city and localhost:8000/get_province for the province. The source code is available on the app/Http/Controller/GetFromAPIController.php and the routing is on the routes/web.php

<h2>Question 2 </h2>
In the question 2, the source code is available on app/console/command/fetchCity for the City and fetchProvince for the Province. To run the command, run php artisan fetch:city for the city table and php artisan fetch:province for the province table

<h2> Question 3 </h2>
In the question 3, the routing is available on the routes/web.php and the source code is available on app/Http/Controller/GetFromAPIController.php. To view the result, go to url and input localhost:8000/search/city?id=(1-501). To search province, go to url and input localhost:8000/search/province?id=(1-34). the id is the parameter that the user required to input. so that the code could fetch the city/province based on the id.
