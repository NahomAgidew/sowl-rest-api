# sowl-rest-api [![Build Status](https://travis-ci.org/dwyl/esta.svg?branch=master)](https://travis-ci.org/dwyl/esta)
REST API demo for scholarshipowl.com

## Setup
<code>composer update && composer install</code>

## Dependencies
* PHP 7
* composer
* slim
* Toast
* MySQL
* chadicus/slim-oauth2

## Testing
<code>vendor/bin/toast</code>

## Usage
<code>/api/scholarships</code> returns all scholarships within the MySQL database in JSON format. <br>
<code>/api/scholarships/{id}</code> returns scholarship with {id} in JSON format.

## Project Structure
* <code>public/index.php</code> entry point of the API.
* <code>public/auth.php</code> OAuth 2.0 endpoint.
* <code>test/</code> unit tests.
* <code>src/config.php</code> application settings. <strong>Check this file before running.</strong>
* <code>src/config_auth.php</code> special config for OAuth 2.0. Can be same as src/config.php <strong>Check this file before running.</strong>
* <code>src/db.php</code> database connection.
* <code>routes/</code> OOP representation of end-points.
* <code>misc/sample_data.php</code> sample data generator.
* <code>misc/oauth2.sql</code> OAuth table generator.
* <code>models/Scholarship.php</code> OOP representation of a Scholarship.
