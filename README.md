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

## Testing
<code>vendor/bin/toast</code>

## Usage
<code>/api/scholarships</code> returns all scholarships within the MySQL database in JSON format. <br>
<code>/api/scholarships/{id}</code> returns scholarship with {id} in JSON format.

## Project Structure
* <code>public/index.php</code> entry point of the API.
* <code>test/</code> unit tests.
* <code>src/config.php</code> project settings. <strong>Check this file before running.</strong>
* <code>src/db.php</code> database connection.
* <code>routes/</code> OOP representation of end-points.
* <code>misc/sample_data.php</code> sample data generator.
* <code>models/Scholarship.php</code> OOP representation of a Scholarship.
## TODO
* OAuth 2.0

