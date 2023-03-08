# Mindful Wishlist

This is a project I did as a final project for the CodeAcademy FullStack course.

The intention of this application is to help users reduce unnecessary consumption. By asking certain questions and giving the user an option to 'pause' a wish for some time and remind of it later, it can help the user to make thoughtful purchases later.

## The website

### Guest Pages

On the welcome page, the user can see a short introduction to the idea of the application (generated using chatGPT).

![image](https://user-images.githubusercontent.com/106098961/223704270-eec720a5-e160-4f0f-99f1-0b92aa98b603.png)

Also, the user can register/login to the site.

![image](https://user-images.githubusercontent.com/106098961/223704531-2e79e5b8-e250-4b44-9bbd-f69143e10637.png)
![image](https://user-images.githubusercontent.com/106098961/223704572-2ecbf040-be4f-4049-9aca-bd175efadbe4.png)

After registering/logging in, the user is redirected to a dashboard.

### Dashboard

On the dashboard page, the user can add a new wish, see how much they saved and spent in a year, and see the items in a pause list.

![image](https://user-images.githubusercontent.com/106098961/223705094-c5772e16-a675-4b4a-83ed-816f64d324e6.png)

### Add New Wish Item Form

The user can input whatever information they want to save about the item. If they choose not to add a reminder, the item will be immediately added to the wishlist.

![image](https://user-images.githubusercontent.com/106098961/223706147-801c4c8d-d928-4eda-bfe1-9d67f5138d14.png)
![image](https://user-images.githubusercontent.com/106098961/223706890-2dbcdca4-22d2-41ca-a2cb-acf5cc91e9c6.png)

If the user adds the reminder, the item is saved to a database with a reminder date, which is calculated by adding the given reminder to a now date. When the reminder date < now date, the item is shown in a pause list.

![image](https://user-images.githubusercontent.com/106098961/223707775-2ff586e3-fda2-412f-a76c-c135dbcc8c12.png)
![image](https://user-images.githubusercontent.com/106098961/223708187-2217e1ad-4338-49c0-9300-ab506aebf6a2.png)

### Pause List functionality

- 'Yes' button adds the item to the wishlist.
- 'No' button adds the price of the item to a saved amount.
- 'Already bought it' button adds the price of the item to a spent amount.

### Wishlist Page

On this page, the user can see their wishlist.

![image](https://user-images.githubusercontent.com/106098961/223708853-509bbc23-6a53-433e-a78d-cb32ba544027.png)

- 'More Info' button sends the user to the item's page.
- 'Bought it' button adds the price of the item to the spent amount.
- 'Don't want it anymore' button adds the price of the item to the saved amount.

### Wish Item's Page

On this page, the user can see more detailed info about the item, like created and updated dates and reflections. They can also access the edit form of the item.

![image](https://user-images.githubusercontent.com/106098961/223709377-1d985015-4ea0-4d66-8d1d-9be0ab9f13fa.png)

Edit form:

![image](https://user-images.githubusercontent.com/106098961/223709455-ad57d48a-2c05-4747-9e38-54076f8b3166.png)

## Details About Project's Functionality

The main focus of this project was backend functionality. The requirements were to use the Laravel framework, and implement authentication and CRUD functionality. 

I'm happy with the current state of the project. Although, were is always room for improvement and these are the points, I would like to bring up:

- I would like to give the user more guidance in the application. For instance, giving a simple question 'Do you still want to add these items to a wishlist?' before the pause list, would explain to the user what 'Yes' and 'No' buttons mean.
- It would be useful for the user to be able to see more info about the pause list items.
- I want to add the 'Cancel' buttons on create and edit forms.
- Sort and filter functionality on the Wishlist page.
- At this moment, the user can't edit the tags of the item.
- CSS in this project is still messy. I tried to reuse the code as much as possible but due to the limited time, the CSS is still disorganised to my liking.

## Built with

- PHP
- Laravel
- MySQL
- Laravel Breeze authentication
- Blade for frontend part
- HTML
- CSS
- JavaScript

