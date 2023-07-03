1. Using Laravel Framework Version 10.13.5
2. Using sqlite database: Name:patientrecords
3. When a patient is created an sms message is stored in storage/logs/PatientSms.log via POST route. 
4. Url is not hardcoded and is based on env APP_URL. Be sure you change this to match your enviornment!
5. Run php artisan:test to see test results for status 200 & 422
