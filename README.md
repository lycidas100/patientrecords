1. Using Laravel Framework Version 10.13.5
2. Using sqlite database: Name:patientrecords
3. When a patient is created an sms message is stored in storage/logs/PatientSms.log via POST route. 
4. Url is not hardcoded and is based on env APP_URL. Be sure you change this to match your enviornment!
5. Run php artisan:test to see test results for status 200 & 422
6. Observer results are stored in storage/logs/Patient.log & storage/logs/Record.log
7. DB_DATABASE in env file is set to C:/xampp/htdocs/patientrecords/database/patientrecords You may need to change it to suit your enviornment
8. If you clone this repository then run composer update to get the vendor folder
