# khabar_junction
KHABAR JUNCTION is a news aggregation project that utilizes newsapi.org and finnhub.io APIs to fetch and display news articles.

## Prerequisites
Before running this project on your local system, ensure you have the following installed:

* XAMPP: Local web server solution stack (includes Apache, MySQL, PHP).
* PHP: Version 7.0 or higher.
* NewsAPI.org API Key: Obtain your API key from NewsAPI.org to fetch news articles.
* Finnhub.io API Key: Obtain your API token from Finnhub.io for Stocks market data.

# Setup Instructions
Follow these steps to set up and run KHABAR JUNCTION on your local system:

## 1. Clone the Repository
Clone the KHABAR JUNCTION repository from GitHub to your local machine:

```sh
git clone https://github.com/your-username/khabar_junction.git
cd khabar_junction
```

## 2. Configure API Keys
### NewsAPI.org API Key
* Obtain your API key from NewsAPI.org.
* Copy your API key.
### Finnhub.io API Token
Obtain your API token from Finnhub.io if required for financial market data.
Copy your API token.

## 3. Start XAMPP Server
Start your XAMPP control panel.
Ensure Apache and MySQL services are running.

## 4. Setup API Keys
* The API key from the "NewsAPI.org" is named as 'API_KEY'
* The API key from the "Finnhub.io" is named as 'TOKEN'
* visit both the websites and your own API Key from there br creating your account to their websites.
* Now copy your API keys and paste them below as constants into the file "Constants.php
File location: Applicatoon/Config/Constant.php

Syntax:
```php
define('API_KEY','Your_API_Key_from_NEWSAPI.ORG');
define('TOKEN','Your_API_Key_from_FINNHUB.IO');
```

If your project requires specific Apache configurations (e.g., virtual hosts), configure them in your XAMPP installation.



## 5. Database Setup (if applicable)
There is no need for setting up the database because this project uses API key from the News websites, and get the data from there.

## 6. Run the Application
Open your web browser and navigate to: http://localhost/khabar_junction
The project should now be running locally on your XAMPP server.

## 7. Usage
Explore KHABAR JUNCTION to view news articles from different categories, powered by NewsAPI.org and Finnhub.io.

## Troubleshooting
If you encounter issues with API keys, ensure they are correctly configured in your Constant.php File
* File location: Applicatoon/Config/Constants.php
* 
Check PHP version compatibility and required extensions.
Contributions
Contributions are welcome! If you have any suggestions or improvements, please fork the repository and submit a pull request.

License
This project is licensed under the MIT License - see the LICENSE file for details.

