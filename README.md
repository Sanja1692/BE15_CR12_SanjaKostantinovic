Code Review 12

Project Description:
"Mount Everest'' is the name of a travel agency from Vienna. They want a nice looking responsive web page where they can advertise their travel offers. "Mount Everest" travel agency also wants that each offer could be shown independently when the user clicks on it or on a button "Details". Whenever that happens, a google maps map should show a pinpoint indicating the location of the current offer.

You can see below an example of a traveller website. Use it as inspiration to create your own design, or create something completely different:



Project Naming:

Create a GitHub Repository named: BE15_CR12_YourName. Push the files into it and send the link through the learning management system (LMS). Please make your repository private and collaborate with codefactorygit. See an example of a GitHub link below:

https://github.com/JohnDoe/repositoryname.git.

Please remember to include the DataBase as well with the option create a database and dumps included, NOT SEPARATED.

DB essential columns: locationName, price, description, longitude, latitude.

DBname: BE15_CR12_mount_everest_your_name 

 

For this CodeReview, the following criteria will be graded:

(30) make a CRUD (create/read/update/delete) for the touristic agency offers.

(20) create a details file: when you click on any offer it will lead you to a new page that will show more information about the offer that was clicked on.

(25) On the details page, you need to use google maps API to show the location of the offer (remember that your database should have the columns longitude and latitude).

Hint:

<?php $lat= 48.20849;  $lng= 16.37208;  ?>

<script>

       var map;

       function initMap() {

           var vienna = {

               lat: <?php echo $lat?>,

               lng: <?php echo $lng?>

           };...(to be continued)

 

(25) From the database that was built, create a display API. This API is supposed to return a JSON object with all information from all offers from the agency. A single PHP file displayAll.php is necessary for this task. There should be a link in the home page that would lead to the API. Please note that the data from the database must be converted to a JSON type which is raw data, therefore no formatting is required. 



Bonus points:

(20) after you create your own API (displayAll.php), create a new file called showAll.php, and that file will have a button, when you click on the button, you will show all data that you got from the API using AJAX.


  Feedback: 110/120 Points
  Serri
  Hey Sanja, really good results on CR12, you manage to cover all the main points with small part of the bonus points, you managed you make the crud project and it was working good, you managed to add an API from your database that you worked on, really well done.
some notes that it is important to say, we asked you to use the API that you create and bring the data from the API, but you bring the data from a xml file.
you still have 24 hours to work on it if you still want to achieve the 120 points

feel free to contact me if you have any questions :)
  
  
