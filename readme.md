## WordPress WooCommerce Store
a feature-rich e-commerce platform built on WooCommerce with PayPal and Stripe payment gateways.

## screenshots

the user can browse the shop which has any product type (physical/digital) products :

![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/c8201e8c-2d1a-4a84-adde-0079b50b1432)
![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/32d2d531-5a6a-4ebc-8789-4a5efcaa77d2)

the user can sort, search products or add products to the cart :

![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/363270d8-c18e-4f6d-8961-f4a8697a6756)

the user can view the cart and full payment receipt and can apply a coupon :

![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/c4d69ee9-f44e-4335-8a1e-ae984a171ce6)

the user can pay directly with PayPal or fill in his payment information manually and pay with and card type powered with stripe :

![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/7890123c-2014-4b59-bc22-9aaf7176492a)
![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/5e0a9f6f-6827-4acd-91cf-54c052e53c51)
![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/a321f05a-d80e-4537-be42-ee1ea69d2f69)

the user can edit his profile, view successful orders, and add payment methods :

![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/d47cfb98-5387-4c0f-909a-c3ec470b046e)
![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/085b85d7-e933-414a-9e1b-9db71b99329a)

the admin throws WordPress dashboard can:

<ul>
<li>Configure store settings</li>
<li>Add, edit, and delete products</li>
<li>Manage inventory and stock</li>
<li>Set up payment gateways and shipping methods</li>
<li>View and manage orders and customer information</li>
<li>Generate reports and analytics for sales and performance.</li>
<li>Do marketing campaigns.</li>
</ul>

![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/b05396d9-328c-45fb-9df3-9a87a0f84153)
![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/936511b0-cb6f-4cef-a494-42da15f02e7e)
![image](https://github.com/AHMED-GAMAL-AG/WooCommerce_Store/assets/76778937/c3b0b62c-ed0c-486c-9ed0-98ea44ed3f5e)


# Installation Guide
follow these instructions to install this repo

## Prerequisites

Before you begin, make sure you have the following:

- A web server with PHP (version 7.2 or higher) and MySQL (version 5.6 or higher) installed
- A domain or subdomain configured to point to your web server
- Access to your web server via FTP or SSH
- Basic knowledge of using a command-line interface (if using SSH)

## Step 1: Download the WordPress Files

1. Clone or download the repository to your local machine.

## Step 2: Set Up the Database

1. Log in to your MySQL database management tool (such as phpMyAdmin) or use the command-line interface.
2. Create a new database for your WordPress installation.
3. Create a new database user and assign it to the newly created database, noting down the username and password for later use.

## Step 3: Configure WordPress

1. Rename the `wp-config-sample.php` file in the root directory of the WordPress installation to `wp-config.php`.
2. Open the `wp-config.php` file and update the following constants:
   - `DB_NAME`: Replace with the name of the database you created earlier.
   - `DB_USER`: Replace with the username of the database user you created earlier.
   - `DB_PASSWORD`: Replace with the password of the database user you created earlier.
   - Save and close the file.

## Step 4: Upload WordPress Files 
you can skip this step if you are using the website locally

1. Using FTP or SSH, upload all the WordPress files and directories to your web server.
2. If you're using FTP, make sure to upload the files to the correct directory, typically the root directory of your domain or subdomain.

## Step 5: Install WordPress

1. Open your web browser and navigate to your domain or subdomain.
2. Follow the WordPress installation wizard:
   - Select your preferred language.
   - Enter the site title, username, password, and email for the admin account.
   - Click "Install WordPress" to complete the installation.

## Step 6: Install and Configure WooCommerce

1. Log in to your WordPress admin dashboard using the credentials you specified during the installation.
2. Go to "Plugins" > "Add New" and search for "WooCommerce".
3. Click "Install Now" and then "Activate" to enable the WooCommerce plugin.
4. Follow the WooCommerce setup wizard to configure your store:
   - Provide the necessary details, such as store location, currency, payment options, etc.
   - Customize your store's appearance and settings as desired.
   - Set up your shipping and tax options.
   - Add your products and set up any additional extensions or integrations you need.

## Step 7: Launch Your WooCommerce Store

Congratulations! You have successfully installed and set up your WordPress WooCommerce website. You can now start adding products, configuring settings, and customizing your store to fit your business needs.


