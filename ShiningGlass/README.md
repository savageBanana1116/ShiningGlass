# **Shining Class**
*ReadMe file for the Shining Class Website*<br/>
*This file will guide you through the convention and structure of the repository*

**Section 1:** _Conventions_<br/>
***CakePhp Conventions***

File and Class Name Conventions
  - The Controller class LatestArticlesController would be found in a file named LatestArticlesController.php

  - The Table class OptionValuesTable would be found in a file named OptionValuesTable.php.

  - The Entity class OptionValue would be found in a file named OptionValue.php.

  - The View class SuperSimpleView would be found in a file named SuperSimpleView.php

  - The Helper class BestEverHelper would be found in a file named BestEverHelper.php


- Database Conventions

   - Table names should be plural and underscored.

    - Foreign keys name should be tablename_id.


- Model Conventions
  - Table names are plural, CamelCase and end in **Table**.


- View Conventions
  - View Template files are named after the controller function.

***For more information about Conventions: https://book.cakephp.org/4/en/intro/conventions.html***

**Section 2: File System**</br>
***Important Directories***
- config
  - app_local.php: set up database connection, for instance: setting password and database name for connection.

- src
  - Controller Directory: Contains the all controller that for the website, which controller the functionalities of each page.


- templates
  - templates Directory: Contains all the frontend code for the pages.


- webroot
  - img Directory: Contains all the images uploaded to the website.

***For more information about CakePhp: https://book.cakephp.org/4/en/intro/conventions.html***



