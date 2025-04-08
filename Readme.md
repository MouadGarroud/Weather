# Advanced Weather App

This is a simple **Weather App** that allows users to check the current weather in any city. It uses the **OpenWeatherMap API** to fetch real-time weather data based on the city input.

## Features
- Enter a city name to get the weather information.
- Displays the temperature in **Celsius**.
- Shows the weather description (e.g., clear sky, rain, clouds).
- Built using **PHP** for backend processing and **HTML/CSS** for frontend design.

## Technologies Used
- **HTML5** for the structure of the web page.
- **CSS** for styling and layout.
- **PHP** for handling backend logic and fetching weather data.
- **OpenWeatherMap API** for weather data.
- **Font Awesome** for icons.

## Setup Instructions

To run this project locally, follow the steps below:

### Prerequisites
- A web server like **XAMPP**, **WAMP**, or any server that supports PHP.
- An internet connection to fetch weather data from the **OpenWeatherMap API**.

### Steps to Run

1. Clone or download this repository to your local machine.
2. Place the project files in the **htdocs** directory (for XAMPP) or the web root folder of your preferred server.
3. Open the project in your browser by navigating to `http://localhost/your_project_folder_name`.
4. Enter the name of the city you want to check the weather for.
5. The weather information will be displayed below the form.

### API Key
To use the OpenWeatherMap API, you'll need to sign up and get an API key from [OpenWeatherMap](https://openweathermap.org/api).

1. Go to [OpenWeatherMap](https://openweathermap.org/api).
2. Create an account and generate your **API key**.
3. Replace the placeholder value of `fa371e07cfa5da9cec7e047065e9db7d` with your own API key in the PHP script.

```php
$apiKey = "your_api_key_here";
