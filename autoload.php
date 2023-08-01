{
GET https://www.googleapis.com/calendar/v3/calendars/566646854565-a222r8m5lbi7i394pvjfu33drgh5ct78.apps.googleusercontent.com
$calendar = $service->calendars->get('primary');
echo $calendar->getSummary();
 }

