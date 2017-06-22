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

## TODO
* OAuth 2.0

