<?php
$regex_name = '/^[A-Za-z éèêëàâäôöûüç \'-]{2,20}$/';
$regex_date = '/^(\d{4}(\/|\-)(((0)[0-9])|((1)[0-2]))(\/|\-)([0-2][0-9]|(3)[0-1]))$/';
$regex_country = '/^[A-Za-z éèêëàâäôöûüç \'-]{1,58}$/';
$regex_nation = '/^[A-Za-z éèêëàâäôöûüç \'-]{1,58}$/';
$regex_number = '/^[\d]{1,4}$/';
$regex_road = '/^[A-Za-z éèêëàâäôöûüç \'-]+$/';
$regex_postal_code = '/^(\d{2,3}|\d{5})$/';
$regex_city = '/^[A-Za-z éèêëàâäôöûüç \'-]{1,58}$/';
$regex_mail = '/^[\w\.-]+@[\w-]+\.\w{2,10}$/';
$regex_phone = '/([0-9]{2}[-|\/|\.|\s]){4}[0-9]{2}/';
$regex_diplome = '/^(0|\+1|\+2|\+3)$/';
$regex_job_number = '/^(\d{7}[A-Z](\d{2})?)$/';
$regex_badge_number = '/^([0-9]{0,2}|[1]?[0-9]{2}|200)$/';
$regex_codecademy_link = '/^(https:\/\/www\.codecademy\.com\/profiles\/[\w]+)$/';
$regex_textarea = '/^[\w\-\']*$/';
?>
