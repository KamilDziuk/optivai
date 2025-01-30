#  Optivai – Blog System  
![presentation](blog/image/presentation.gif)
Optivai is a simple blog system built using the following technologies:  
- **JavaScript** – for dynamic interface functionality,  
- **PHP** – for server-side logic and database interactions,  
- **CSS** – for user interface styling,  
- **MySQL** – for storing blog data (titles, content, dates, and images).  

## Features  
- **Adding posts** – allows the creation of new blog entries.  
- **Editing posts** – enables modification of existing blog entries.  
- **Deleting posts** – allows the removal of selected blog content.  
- **Automatic file generation**:  
  - **Internal file**: Fetches data from the database (title, content, date, image) based on the ID and prepares it for display.  
  - **Frontend file**: Displays the processed data to the end user.  

## Technical Details  
- Blog post data (title, content, date, image) is stored in a MySQL database.  
- Post IDs are automatically generated in the database to uniquely identify each entry.  
- The `configuration_post.php` file handles the configuration for adding, editing, and deleting posts.  
- The homepage (`index.php`) displays a list of thumbnails for all posts. Clicking the "View More" button redirects the user to a detailed page of the selected post, where its content is shown in full width.  
- A "Back" button allows users to return to the list of posts.  

## Demo  
The blog is available online at: [https://optivai.pl/blog/](https://optivai.pl/blog/), [https://optivai.pl/blog-configuration](https://optivai.pl/blog-configuration).  

## Author  
The project was created by **Kamil Dziuk**.  

Optivai is a perfect choice for those looking for a simple, intuitive blog. 
