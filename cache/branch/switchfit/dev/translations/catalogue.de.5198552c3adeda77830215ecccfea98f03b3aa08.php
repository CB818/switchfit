<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'This field was not expected.' => 'Dieses Feld wurde nicht erwartet.',
    'This field is missing.' => 'Dieses Feld fehlt.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige IBAN-Kontonummer.',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value does not match the expected {{ charset }} charset.' => 'Dieser Wert entspricht nicht dem erwarteten Zeichensatz {{ charset }}.',
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte das Formular erneut zu senden.',
    'fos_user.username.already_used' => 'Dieser Benutzername wird bereits verwendet',
    'fos_user.username.blank' => 'Bitte geben Sie einen Benutzernamen an',
    'fos_user.username.short' => '[-Inf,Inf]Dieser Benutzername ist zu kurz',
    'fos_user.username.long' => '[-Inf,Inf]Dieser Benutzername ist zu lang',
    'fos_user.email.already_used' => 'Diese E-Mail-Adresse wird bereits verwendet',
    'fos_user.email.blank' => 'Bitte geben Sie eine E-Mail-Adresse an',
    'fos_user.email.short' => '[-Inf,Inf]Diese E-Mail-Adresse ist zu kurz',
    'fos_user.email.long' => '[-Inf,Inf]Diese E-Mail-Adresse ist zu lang',
    'fos_user.email.invalid' => 'Diese E-Mail-Adresse ist ungültig',
    'fos_user.password.blank' => 'Bitte geben Sie ein Passwort an',
    'fos_user.password.short' => '[-Inf,Inf]Das Passwort ist zu kurz',
    'fos_user.password.mismatch' => 'Die Passwörter stimmen nicht überein',
    'fos_user.new_password.blank' => 'Bitte geben Sie ein neues Passwort an',
    'fos_user.new_password.short' => '[-Inf,Inf]Das neue Passwort ist zu kurz',
    'fos_user.current_password.invalid' => 'Das angegebene Passwort ist ungültig',
    'fos_user.group.blank' => 'Bitte geben Sie einen Namen an',
    'fos_user.group.short' => '[-Inf,Inf]Dieser Name ist zu kurz',
    'fos_user.group.long' => '[-Inf,Inf]Dieser Name ist zu lang',
    'nordcode_user.username.already_used' => 'Dieser Benutzername wird bereits verwendet',
    'nordcode_user.username.blank' => 'Bitte Benutzernamen eingeben',
    'nordcode_user.username.short' => '[-Inf,Inf]Dieser Benutzername ist zu kurz (min {{ limit }})',
    'nordcode_user.username.long' => '[-Inf,Inf]Dieser Benutzername ist zu lang (max {{ limit }})',
    'nordcode_user.name.blank' => 'Bitte geben Sie einen Name an',
    'nordcode_user.firstname.already_used' => 'Dieser Vorname wird bereits verwendet',
    'nordcode_user.firstname.blank' => 'Bitte gib deinen Vornamen ein',
    'nordcode_user.firstname.short' => '[-Inf,Inf]Dieser Vorname ist zu kurz',
    'nordcode_user.firstname.long' => '[-Inf,Inf]Dieser Vorname ist zu lang',
    'nordcode_user.lastname.already_used' => 'Dieser Nachname wird bereits verwendet',
    'nordcode_user.lastname.blank' => 'Bitte gib deinen Nachnamen ein',
    'nordcode_user.lastname.short' => '[-Inf,Inf]Dieser Nachname ist zu kurz',
    'nordcode_user.lastname.long' => '[-Inf,Inf]Dieser Nachname ist zu lang',
    'nordcode_user.email.already_used' => 'Diese E-Mail-Adresse wird bereits verwendet',
    'nordcode_user.email.blank' => 'Bitte gib deine E-Mail Adresse ein',
    'nordcode_user.email.short' => '[-Inf,Inf]Diese E-Mail-Adresse ist zu kurz',
    'nordcode_user.email.long' => '[-Inf,Inf]Diese E-Mail-Adresse ist zu lang',
    'nordcode_user.email.invalid' => 'Diese E-Mail-Adresse ist ungültig',
    'nordcode_user.password.repeated' => 'Passwörter stimmen nicht überein',
    'nordcode_user.password.blank' => 'Bitte Passwort eingeben',
    'nordcode_user.password.short' => '[-Inf,Inf]Das Passwort ist zu kurz (min {{ limit }})',
    'nordcode_user.password.mismatch' => 'Die Passwörter stimmen nicht überein',
    'nordcode_user.plainPassword.repeated' => 'Passwörter stimmen nicht überein',
    'nordcode_user.plainPassword.blank' => 'Bitte Passwort eingeben',
    'nordcode_user.plainPassword.short' => '[-Inf,Inf]Das Passwort ist zu kurz (min {{ limit }})',
    'nordcode_user.plainPassword.mismatch' => 'Die Passwörter stimmen nicht überein',
    'nordcode_user.date_of_birth.blank' => 'Bitte Geburtsdatum eingeben',
    'nordcode_user.date_of_birth.not_valid' => 'Nicht gültig Datum',
    'nordcode_user.gender.blank' => 'Bitte eine Geschlecht auswählen',
    'nordcode_user.gender.not_valid' => 'Nicht gültig Geschlecht',
    'nordcode_user.phone.blank' => 'Bitte Telefon eingeben',
    'nordcode_user.city.blank' => 'Bitte eine Stadt auswählen',
    'nordcode_user.country.blank' => 'Bitte eine Land auswählen',
    'nordcode_user.course.blank' => 'Bitte wähle einen Kurstermin aus',
    'nordcode_user.address.blank' => 'Bitte Adresse eingeben',
    'nordcode_user.address.short' => '[-Inf,Inf]Das Adresse ist zu kurz (min {{ limit }})',
    'nordcode_user.body_type.blank' => 'Bitte Körpertyp eingeben',
    'nordcode_user.current_height.blank' => 'Bitte Körpergrösse eingeben',
    'nordcode_user.current_height.short' => '[-Inf,Inf]Dieser Aktuelle Länge ist zu kurz (min {{ limit }})',
    'nordcode_user.current_height.long' => '[-Inf,Inf]Dieser Aktuelle Länge ist zu lang (max {{ limit }})',
    'nordcode_user.current_weight.blank' => 'Bitte Aktuelle Gewicht eingeben',
    'nordcode_user.current_weight.short' => '[-Inf,Inf]Dieser Aktuelle Gewicht ist zu kurz (min {{ limit }})',
    'nordcode_user.current_weight.long' => '[-Inf,Inf]Dieser Aktuelle Gewicht ist zu lang (max {{ limit }})',
    'nordcode_user.want_lose_weight.blank' => 'Bitte Gewicht eingeben',
    'nordcode_user.want_lose_weight.short' => '[-Inf,Inf]Dieser Gewicht ist zu kurz (min {{ limit }})',
    'nordcode_user.want_lose_weight.long' => '[-Inf,Inf]Dieser Gewicht ist zu lang (max {{ limit }})',
    'nordcode_user.first_week_goal.blank' => 'Bitte Gewicht eingeben',
    'nordcode_user.first_week_goal.short' => '[-Inf,Inf]Dieser Gewicht ist zu kurz (min {{ limit }})',
    'nordcode_user.first_week_goal.long' => '[-Inf,Inf]Dieser Gewicht ist zu lang (max {{ limit }})',
    'nordcode_user.new_password.blank' => 'Bitte neues Passwort eingeben',
    'nordcode_user.new_password.short' => '[-Inf,Inf]Das neue Passwort ist zu kurz',
    'nordcode_user.current_password.invalid' => 'Das angegebene Passwort ist ungültig',
    'nordcode_user.what_motivates_you_most.blank' => 'Bitte Text eingeben',
    'nordcode_user.what_do_if_motivation_is_low.blank' => 'Bitte Text eingeben',
    'nordcode_user.who_is_your_best_contact_for_motivation.blank' => 'Bitte Text eingeben',
    'nordcode_user.is_vegetarian.blank' => 'Sie müssen eine der Optionen wählen',
    'nordcode_user.i_agree' => 'Sie müssen mit den Bedingungen einverstanden',
    'nordcode_user.group.blank' => 'Bitte geben Sie einen Namen an',
    'nordcode_user.group.short' => '[-Inf,Inf]Dieser Name ist zu kurz',
    'nordcode_user.group.long' => '[-Inf,Inf]Dieser Name ist zu lang',
    'nordcode_switchfit.diary.text.blank' => 'Bitte geben Sie einen Text an',
    'nordcode_switchfit.diary.emoji.blank' => 'Bitte gib deinen Emoji ein',
    'nordcode_switchfit.diary.emoji.short' => 'Emoji ist nicht korrekt',
    'nordcode_switchfit.diary.emoji.long' => 'Emoji ist nicht korrekt',
    'nordcode_switchfit.course_week.field.type' => 'Der Wert {{ value }} ist kein gültiger {{ type }}',
    'nordcode_switchfit.course_week.field.short' => 'Dieser Feld ist zu kurz (min {{ limit }})',
    'nordcode_switchfit.course_week.field.long' => 'Dieser Feld ist zu lang (max {{ limit }})',
    'nordcode_qa.answer.text.blank' => 'Bitte geben Sie einen Text an',
    'nordcode_qa.question.text.blank' => 'Bitte geben Sie einen Text an',
    'nordcode_qa.question.title.blank' => 'Bitte geben Sie einen Titel an',
    'nordcode_qa.question.category.blank' => 'Bitte geben Sie einen Kategorie an',
    'nordcode_questionnaire.answer.blank' => 'Bitte wähle eine der folgenden Optionen',
    'nordcode_landing.contact.name.blank' => 'Gib deinen Namen ein',
    'nordcode_landing.contact.email.blank' => 'Gib deine E-Mail Adresse ein',
    'nordcode_landing.contact.email.not_valid' => 'E-Mail Adress ist nicht gültig',
    'nordcode_landing.contact.text.blank' => 'Gib deine Frage ein',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Fehlerhafte Zugangsdaten.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'Digest nonce has expired.' => 'Digest nonce ist abgelaufen.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Der Benutzername wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Benutzername oder Passwort ungültig',
    'group.edit.submit' => 'Gruppe aktualisieren',
    'group.show.name' => 'Gruppenname',
    'group.new.submit' => 'Gruppe erstellen',
    'group.flash.updated' => 'Die Gruppe wurde aktualisiert',
    'group.flash.created' => 'Die Gruppe wurde erstellt',
    'group.flash.deleted' => 'Die Gruppe wurde gelöscht',
    'security.login.username' => 'Benutzername:',
    'security.login.password' => 'Passwort:',
    'security.login.remember_me' => 'An mich erinnern',
    'security.login.submit' => 'Anmelden',
    'profile.show.username' => 'Benutzername',
    'profile.show.email' => 'E-Mail',
    'profile.edit.submit' => 'Benutzer aktualisieren',
    'profile.flash.updated' => 'Das Benutzerprofil wurde aktualisiert',
    'change_password.submit' => 'Passwort ändern',
    'change_password.flash.success' => 'Das Passwort wurde geändert',
    'registration.check_email' => 'Eine E-Mail wurde an %email% gesendet. Sie enthält einen Link, den Du anklicken musst, um Dein Benutzerkonto zu bestätigen.',
    'registration.confirmed' => 'Glückwunsch %username%, Dein Benutzerkonto ist jetzt bestätigt.',
    'registration.back' => 'Zurück zur ursprünglichen Seite.',
    'registration.submit' => 'Registrieren',
    'registration.flash.user_created' => 'Der Benutzer wurde erfolgreich erstellt',
    'registration.email.subject' => 'Willkommen %username%!',
    'registration.email.message' => 'Hallo %username%!

Besuche bitte folgende Seite, um Dein Benutzerkonto zu bestätigen: %confirmationUrl%

Mit besten Grüßen,
das Team.
',
    'resetting.password_already_requested' => 'Für diesen Benutzer wurde in den vergangenen 24 Stunden bereits ein neues Passwort beantragt.',
    'resetting.check_email' => 'Eine E-Mail wurde an %email% gesendet. Sie enthält einen Link, den Du anklicken musst, um Dein Passwort zurückzusetzen.',
    'resetting.request.invalid_username' => 'Der Benutzername oder die E-Mail-Adresse "%username%" existiert nicht.',
    'resetting.request.username' => 'Benutzername oder E-Mail-Adresse:',
    'resetting.request.submit' => 'Passwort zurücksetzen',
    'resetting.reset.submit' => 'Passwort ändern',
    'resetting.flash.success' => 'Das Passwort wurde erfolgreich zurückgesetzt',
    'resetting.email.subject' => 'Passwort zurücksetzen',
    'resetting.email.message' => 'Hallo %username%!

Besuche bitte folgende Seite, um Dein Passwort zurückzusetzen: %confirmationUrl%

Mit besten Grüßen,
das Team.
',
    'layout.logout' => 'Abmelden',
    'layout.login' => 'Anmelden',
    'layout.register' => 'Registrieren',
    'layout.logged_in_as' => 'Angemeldet als %username%',
    'form.group_name' => 'Gruppenname:',
    'form.username' => 'Benutzername:',
    'form.email' => 'E-Mail-Adresse:',
    'form.current_password' => 'Derzeitiges Passwort:',
    'form.password' => 'Passwort:',
    'form.password_confirmation' => 'Bestätigung:',
    'form.new_password' => 'Neues Passwort:',
    'form.new_password_confirmation' => 'Bestätigung:',
  ),
  'SonataUserBundle' => 
  array (
    'title_user_registration' => 'title_user_registration',
    'title_user_account' => 'User Profile',
    'title_user_edit_profile' => 'Bearbeiten',
    'title_user_authentication' => 'Authentication',
    'sonata_user_submit' => 'Absenden',
    'breadcrumb.link_user_list' => 'Benutzer',
    'breadcrumb.link_user_create' => 'Anlegen',
    'breadcrumb.link_user_edit' => 'Bearbeiten',
    'breadcrumb.link_group_list' => 'Gruppen',
    'breadcrumb.link_group_create' => 'Anlegen',
    'breadcrumb.link_group_edit' => 'Bearbeiten',
    'breadcrumb.link_user_show' => 'Benutzer anzeigen',
    'users' => 'Benutzer',
    'groups' => 'Gruppen',
    'switch_user_exit' => 'Benutzer imitieren beenden',
    'switch_user' => 'Benutzer imitieren',
    'user_block_logout' => 'abmelden',
    'form.label_username' => 'Benutzername',
    'form.label_email' => 'E-Mail-Adresse',
    'form.label_plain_password' => 'Klartextpasswort',
    'form.label_groups' => 'Gruppen',
    'form.label_roles' => 'Rollen',
    'form.label_locked' => 'Gesperrt',
    'form.label_expired' => 'Abgelaufen',
    'form.label_enabled' => 'Aktiviert',
    'form.label_credentials_expired' => 'Rechte abgelaufen',
    'form.label_country' => 'Land',
    'form.label_website' => 'Webseite',
    'form.label_biography' => 'Biografie',
    'form.label_gender' => 'Geschlecht',
    'form.label_locale' => 'Sprache',
    'form.label_timezone' => 'Zeitzone',
    'form.label_phone' => 'Telefon',
    'form.label_facebook_uid' => 'Facebook Kennung',
    'form.label_facebook_name' => 'Facebook Name',
    'form.label_twitter_uid' => 'Twitter Kennung',
    'form.label_twitter_name' => 'Twitter Name',
    'form.label_gplus_uid' => 'Google+ Kennung',
    'form.label_gplus_name' => 'Google+ Name',
    'form.label_token' => 'Kürzel',
    'form.label_two_step_verification_code' => 'Zwei-Schritte Bestätigung',
    'form.label_name' => 'Name',
    'form.label_date_of_birth' => 'Geburtsdatum',
    'form.label_firstname' => 'Vorname',
    'form.label_lastname' => 'Nachname',
    'field.label_roles_editable' => 'Rollen',
    'filter.label_email' => 'E-Mail-Adresse',
    'filter.label_plain_password' => 'Klartextpasswort',
    'filter.label_groups' => 'Gruppen',
    'filter.label_roles' => 'Rollen',
    'filter.label_locked' => 'Gesperrt',
    'filter.label_expired' => 'Abgelaufen',
    'filter.label_enabled' => 'Aktiviert',
    'filter.label_credentials_expired' => 'Rechte abgelaufen',
    'filter.label_country' => 'Land',
    'filter.label_website' => 'Webseite',
    'filter.label_biography' => 'Biografie',
    'filter.label_gender' => 'Geschlecht',
    'filter.label_locale' => 'Sprache',
    'filter.label_timezone' => 'Zeitzone',
    'filter.label_phone' => 'Telefon',
    'filter.label_facebook_uid' => 'Facebook Kennung',
    'filter.label_facebook_name' => 'Facebook Name',
    'filter.label_twitter_uid' => 'Twitter Kennung',
    'filter.label_twitter_name' => 'Twitter Name',
    'filter.label_gplus_uid' => 'Google+ Kennung',
    'filter.label_gplus_name' => 'Google+ Name',
    'filter.label_token' => 'Kürzel',
    'filter.label_two_step_verification_code' => 'Zwei-Schritte Bestätigung',
    'filter.label_date_of_birth' => 'Geburtsdatum',
    'filter.label_firstname' => 'Vorname',
    'filter.label_lastname' => 'Nachname',
    'list.label_username' => 'Benutzername',
    'list.label_name' => 'Name',
    'list.label_email' => 'E-Mail-Adresse',
    'list.label_groups' => 'Gruppen',
    'list.label_locked' => 'Gesperrt',
    'list.label_enabled' => 'Aktiviert',
    'list.label_created_at' => 'Erstellt am',
    'list.label_impersonating' => 'Benutzer imitieren',
    'list.label_roles' => 'Rollen',
    'label_two_step_code' => 'Zwei-Schritte Code',
    'message_two_step_code_help' => 'Zwei-Schritte Code Hilfe',
    'label_two_step_code_error' => 'Zwei-Schritte Code Fehler',
    'sonata_user' => 'Benutzer',
    'label_gender' => 'Geschlecht',
    'show.label_username' => 'Benutzername',
    'show.label_email' => 'E-Mail Adresse',
    'show.label_groups' => 'Gruppen',
    'show.label_date_of_birth' => 'Gebutsdatum',
    'show.label_firstname' => 'Vorname',
    'show.label_lastname' => 'Nachname',
    'show.label_website' => 'Wenseite',
    'show.label_biography' => 'Biografie',
    'show.label_gender' => 'Geschlecht',
    'show.label_locale' => 'Sprache',
    'show.label_timezone' => 'Zeitzone',
    'show.label_phone' => 'Telefon',
    'show.label_facebook_uid' => 'Facebook Kennung',
    'show.label_facebook_name' => 'Facebook Name',
    'show.label_twitter_uid' => 'Twitter Kennung',
    'show.label_twitter_name' => 'Twitter Name',
    'show.label_gplus_uid' => 'Google+ Benutzerkennnung',
    'show.label_gplus_name' => 'Google+ Name',
    'show.label_token' => 'Kürzel',
    'show.label_two_step_verification_code' => 'Zwei-Schritte Bestätigung',
    'gender_unknown' => 'Unbekannt',
    'gender_female' => 'Weiblich',
    'gender_male' => 'Männlich',
    'form.label_users' => 'Benutzer',
    'form.label_mapped_users' => 'Zugewiesene Benutzer',
    'Groups' => 'Gruppen',
    'General' => 'Allgemein',
    'Profile' => 'Profil',
    'Security' => 'Sicherheit',
    'Gender' => 'Geschlecht',
    'Bad credentials' => 'Benutzername oder Passwort ungültig',
    'sonata_profile_title' => 'sonata_profile_title',
    'link_show_profile' => 'link_show_profile',
    'link_edit_profile' => 'link_edit_profile',
    'title_user_edit_authentication' => 'title_user_edit_authentication',
    'link_edit_authentication' => 'link_edit_authentication',
    'label_profile_gender' => 'label_profile_gender',
    'label_profile_firstname' => 'label_profile_firstname',
    'label_profile_lastname' => 'label_profile_lastname',
    'label_profile_website' => 'label_profile_website',
    'label_profile_dob' => 'label_profile_dob',
    'label_profile_biography' => 'label_profile_biography',
    'label_profile_locale' => 'label_profile_locale',
    'label_profile_timezone' => 'label_profile_timezone',
    'label_profile_phone' => 'label_profile_phone',
    'profile.flash.updated' => 'profile.flash.updated',
    'sonata_change_password_link' => 'sonata_change_password_link',
    'link_register' => 'link_register',
    'link_login' => 'link_login',
    'link_logout' => 'link_logout',
    'registration.flash.user_created' => 'registration.flash.user_created',
    'forgotten_password' => 'Passwort vergessen?',
    'sonata_user_profile_breadcrumb_index' => 'sonata_user_profile_breadcrumb_index',
    'sonata_user_profile_breadcrumb_edit' => 'sonata_user_profile_breadcrumb_edit',
    'sonata_user_already_authenticated' => 'Sie sind schon angemeldet.',
    'security.login.username' => 'Benutzername',
    'security.login.password' => 'Passwort',
    'form.username' => 'form.username',
    'form.email' => 'form.email',
    'form.password' => 'form.password',
    'form.password_confirmation' => 'form.password_erification',
  ),
  'NordcodeUserBundle' => 
  array (
    'Bad credentials' => 'Benutzername oder Passwort ungültig',
    'group.edit.submit' => 'Gruppe aktualisieren',
    'group.show.name' => 'Gruppenname',
    'group.new.submit' => 'Gruppe erstellen',
    'group.flash.updated' => 'Die Gruppe wurde aktualisiert',
    'group.flash.created' => 'Die Gruppe wurde erstellt',
    'group.flash.deleted' => 'Die Gruppe wurde gelöscht',
    'security.login.username' => 'Benutzername:',
    'security.login.password' => 'Passwort:',
    'security.login.remember_me' => 'An mich erinnern',
    'security.login.submit' => 'Anmelden',
    'profile.show.username' => 'Benutzername',
    'profile.show.email' => 'E-Mail',
    'profile.edit.submit' => 'Benutzer aktualisieren',
    'profile.flash.updated' => 'Das Benutzerprofil wurde aktualisiert',
    'change_password.submit' => 'Passwort ändern',
    'change_password.flash.success' => 'Das Passwort wurde geändert',
    'registration.form.enter_your_information' => 'Trage hier deine Informationen ein',
    'registration.form.choose_your_city_team' => 'Suche dein City Team aus',
    'registration.form.register_title' => 'Lass uns loslegen!',
    'registration.form.user_info' => 'Benutzerinformationen',
    'registration.form.security_info' => 'Sicherheitsinformationen',
    'registration.form.course_info' => 'Kursinformationen',
    'registration.form.course_additional_info' => 'Einstellungen',
    'registration.form.course_start' => 'Beginn',
    'registration.form.course_finish' => 'Ende',
    'registration.form.course.begin.course_already_running' => 'Ich mache diese Woche mit, ich kann nicht warten!',
    'registration.form.course.begin.course_starting_today' => 'Ich fange mit dem heute beginnenden Kurs an.',
    'registration.form.course.begin.course_starting_next_monday' => 'Melde mich für nächsten Montag an und schick mir info.',
    'registration.form.course.already_booked' => 'Du hast diesen Kurs bereits gebucht.',
    'registration.form.course.existing_active_course' => 'Du hast bereits einen aktiven Kurs. %link_start%Gehe zur App%link_end%.',
    'registration.form.firstname' => 'Vorname',
    'registration.form.lastname' => 'Nachname',
    'registration.form.username' => 'Benutzername',
    'registration.form.password' => 'Passwort',
    'registration.form.password_second' => 'Passwort wiederholen',
    'registration.form.email' => 'E-Mail',
    'registration.form.dateOfBirth' => 'Geburtsdatum',
    'registration.form.gender' => 'Geschlecht',
    'registration.form.phone' => 'Telefon',
    'registration.form.city' => 'SwitchFit Stadt',
    'registration.form.city_notes' => 'Wählen Sie Ihre nächstgelegene grössere Stadt',
    'registration.form.country' => 'Land',
    'registration.form.promo_code' => 'Promo-Code',
    'registration.form.promo_code_verify' => 'Überprüfen',
    'registration.form.promo_code_verify_title' => 'Stellen Sie sicher, Promo-Code',
    'registration.form.address' => 'Adresse',
    'registration.form.body_type' => 'Körperbau',
    'registration.form.current_height' => 'Körpergrösse',
    'registration.form.current_weight' => 'Gewicht',
    'registration.form.want_lose_weight' => 'Kursziel',
    'registration.form.first_week_goal' => 'Ziel der ersten Woche',
    'registration.form.success' => 'Benutzer erstellt',
    'registration.form.submit' => 'Jetzt eine Woche kostenlos testen',
    'registration.form.submit_pay' => 'Jetzt trainieren',
    'registration.form.track_glucose_levels' => 'Ja, Ich überwache meinen Blutzucker',
    'registration.form.track_smoke_craving' => 'Ja, Ich versuche gerade mit dem Rauchen aufzuhören',
    'registration.form.what_motivates_you_most' => 'Was motiviert dich am meisten?',
    'registration.form.what_do_if_motivation_is_low' => 'Was tust du, wenn deine Motivation gering ist?',
    'registration.form.who_is_your_best_contact_for_motivation' => 'Welche Person gibt dir die meiste Motivation?',
    'registration.form.is_vegetarian' => 'Ja, Ich bin ein Vegetarier',
    'registration.form.dashboard_settings' => 'Dashboard-Einstellungen',
    'registration.form.i_agree' => 'Ich akzeptiere die Allgemeinen <a href="http://www.switchfit.io/allgemeine-geschaftsbedingungen/" target="_blank">Geschäfts- und Lieferbedingungen</a>',
    'registration.step1_complete.title' => 'Erster Schritt geschafft',
    'registration.step1_complete.text' => 'Du hast von uns eine Bestätigung per E-Mail erhalten, bitte kontrolliere dein Postfach!',
    'registration.step2_complete.title' => 'Registration erfolgreich',
    'registration.step2_complete.text' => 'Du kannst dein Training jetzt beginnen!',
    'registration.step2_complete.button' => 'Jetzt trainieren',
    'registration.gender.male' => 'Männlich',
    'registration.gender.female' => 'Weiblich',
    'registration.check_email' => 'Eine E-Mail wurde an %email% gesendet. Sie enthält einen Link, den Du anklicken musst, um Dein Benutzerkonto zu bestätigen.',
    'registration.confirmed' => 'Glückwunsch %username%, Dein Benutzerkonto ist jetzt bestätigt.',
    'registration.back' => 'Zurück zur ursprünglichen Seite.',
    'registration.submit' => 'Zahlen',
    'registration.flash.user_created' => 'Der Benutzer wurde erfolgreich erstellt',
    'registration.confirm_email.subject' => 'Willkommen auf SwitchFit',
    'registration.confirm_email.message' => 'Hallo %username%,

Klicke hier %confirmationUrl% um deine Reise mit SwitchFit zu starten!

Dein SwitchFit Team',
    'registration.invite_email.subject' => 'Einladung zum neuen SwitchFit 8-Wochen-Programm',
    'registration.invite_email.message' => 'Hallo %firstname%!

Vor ein paar Monaten warst du Teil der Betatest-Gruppe die unser 8-wöchiges Fitness-und Ernährungsprogramm SwitchFit ausprobiert hat. Dank den unzähligen Rückmeldungen ist SwitchFit erfolgreich weiter entwickelt worden und kann auch bereits erste Erfolgserlebnisse vermelden. Einer unserer Testkunden hat dank unserem Programm bereits über 18 Kilo abgenommen!

Gerne möchten wir dich zum Dank nun einladen unseren nächsten Kurs kostenlos wieder zu besuchen und so in den Genuss der neu gestalteten Seite inkl. spannenden Blogbeiträgen (http://www.switchfit.io/blog/) und diversen Neuerungen zu kommen. Wir starten alle zusammen am %course_date_from%!

Du kannst deine Anmelde-Informationen hier eingeben: %confirmationUrl%

Wir freuen uns auf dich!
Dein SwitchFit-Team',
    'registration.invite_html_email.subject' => 'Einladung zum neuen SwitchFit 8-Wochen-Programm',
    'registration.invite_html_email.message' => '<strong>Hallo %firstname%!</strong><br><br>

Vor ein paar Monaten warst du Teil der Betatest-Gruppe die unser 8-wöchiges Fitness-und Ernährungsprogramm SwitchFit ausprobiert hat. Dank den unzähligen Rückmeldungen ist SwitchFit erfolgreich weiter entwickelt worden und kann auch bereits erste Erfolgserlebnisse vermelden. Einer unserer Testkunden hat dank unserem Programm bereits über 18 Kilo abgenommen!<br><br>

Gerne möchten wir dich zum Dank nun einladen unseren nächsten Kurs kostenlos wieder zu besuchen und so in den Genuss der neu gestalteten Seite inkl. spannenden <a href="http://www.switchfit.io/blog/">Blogbeiträgen</a> und diversen Neuerungen zu kommen. Wir starten alle zusammen am %course_date_from%!<br><br>

Du kannst deine Informationen hier eingeben: <a href="%confirmationUrl%">%confirmationUrl%</a><br><br>

Wir freuen uns auf dich!<br>
Dein SwitchFit-Team',
    'registration.welcome_email.subject' => 'Willkommen auf SwitchFit',
    'registration.welcome_email.message' => 'Danke für Deine Registrierung und willkommen bei SwitchFit!

Der nächste Kurs startet bald. Fünf Tage vor Kursbeginn bekommst Du Zugang zur SwitchFit Webseite.
Du erhältst eine Erinnerungsmail von uns, die deine Zugangsdaten enthält.

Somit kannst Du schon mal mit den Aufwärm-Übungen beginnen und zum Beispiel Deinen Fitnesslevel ermitteln, Fotos zu Deinem Tagebuch hinzufügen oder Dich mit den Lernmodulen der Akademie beschäftigen.

Während der ersten zwei Wochen erhältst Du von uns einen vorgefertigten Ernährungsplan. Vor Beginn des Kurses kannst Du Dich schon mal damit vertraut machen. Sobald der Kurs begonnen hat, kannst Du dann auch auf den "Fragen & Antworten"-Bereich zugreifen sowie auf SwitchFit Life!.

Falls Du zwischendrin Fragen hast, schreib uns hier eine E-Mail oder an help@swtichfit.io

Dein SwitchFit Team
',
    'resetting.password_already_requested' => 'Für diesen Benutzer wurde in den vergangenen 24 Stunden bereits ein neues Passwort beantragt.',
    'resetting.check_email' => 'Eine E-Mail wurde an <strong>%email%</strong> gesendet. Sie enthält einen Link, den du anklicken musst, um dein Passwort zurückzusetzen.',
    'resetting.request.invalid_username' => 'Der Benutzername oder die E-Mail-Adresse "%username%" existiert nicht.',
    'resetting.request.username' => 'Benutzername oder E-Mail-Adresse:',
    'resetting.request.submit' => 'Passwort zurücksetzen',
    'resetting.reset.submit' => 'Passwort ändern',
    'resetting.reset.user_not_found' => 'Benutzer nicht gefunden',
    'resetting.reset.password_request_non_expired' => 'Passwortabfrage nicht abgelaufen',
    'resetting.reset.success' => 'Das Passwort wurde erfolgreich zurückgesetzt',
    'resetting.flash.success' => 'Das Passwort wurde erfolgreich zurückgesetzt',
    'resetting.email.subject' => 'Passwort zurücksetzen',
    'resetting.email.message' => 'Hallo %username%!

Besuche bitte folgende Seite, um dein Passwort zurückzusetzen: %confirmationUrl%

Mit besten Grüssen,
dein SwitchFit Team.
',
    'layout.logout' => 'Abmelden',
    'layout.login' => 'Anmelden',
    'layout.register' => 'Registrieren',
    'layout.logged_in_as' => 'Angemeldet als %username%',
    'form.group_name' => 'Gruppenname:',
    'form.username' => 'Benutzername:',
    'form.email' => 'E-Mail-Adresse:',
    'form.current_password' => 'Derzeitiges Passwort:',
    'form.password' => 'Passwort:',
    'form.password_confirmation' => 'Bestätigung:',
    'form.new_password' => 'Neues Passwort:',
    'form.new_password_confirmation' => 'Bestätigung:',
  ),
  'NordcodePaymentSkrillBundle' => 
  array (
    'nordcode_payment_skrill.recipient_description' => 'SwitchFit Schulung',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Neu',
    'label_type_yes' => 'ja',
    'label_type_no' => 'nein',
    'sonata_core_template_box_file_found_in' => 'This file can be found in',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administration',
    'action_delete' => 'Löschen',
    'btn_batch' => 'OK',
    'btn_create' => 'Hinzufügen',
    'btn_create_and_edit_again' => 'Hinzufügen',
    'btn_create_and_create_a_new_one' => 'Hinzufügen und neu',
    'btn_create_and_return_to_list' => 'Hinzufügen und zur Übersicht',
    'btn_filter' => 'Filtern',
    'btn_update' => 'Speichern',
    'btn_update_and_edit_again' => 'Speichern',
    'btn_update_and_return_to_list' => 'Speichern und schließen',
    'link_delete' => 'Löschen',
    'link_action_create' => 'Neu',
    'link_action_list' => 'Zurück zur Liste',
    'link_action_show' => 'Anzeigen',
    'link_action_edit' => 'Bearbeiten',
    'link_add' => 'Neu',
    'link_list' => 'Liste',
    'link_reset_filter' => 'Löschen',
    'title_create' => 'Hinzufügen',
    'title_dashboard' => 'Startseite',
    'title_edit' => '"%name%" bearbeiten',
    'title_list' => 'Liste',
    'link_next_pager' => 'Nächste',
    'link_previous_pager' => 'Vorherige',
    'link_first_pager' => 'Erste Seite',
    'link_last_pager' => 'Letzte Seite',
    'Admin' => 'Admin',
    'link_expand' => 'auf-/zuklappen',
    'no_result' => 'Kein Ergebnis',
    'confirm_msg' => 'Sind Sie sicher?',
    'action_edit' => 'Bearbeiten',
    'action_show' => 'Anzeigen',
    'all_elements' => 'Alle Elemente',
    'flash_batch_empty' => 'Aktion abgebrochen. Es waren keine Elemente ausgewählt.',
    'flash_create_success' => 'Das Element "%name%" wurde erfolgreich hinzugefügt.',
    'flash_create_error' => 'Beim Hinzufügen des Elements "%name%" ist ein Fehler aufgetreten.',
    'flash_edit_success' => 'Das Element "%name%" wurde erfolgreich bearbeitet.',
    'flash_edit_error' => 'Beim Bearbeiten des Elements "%name%" ist ein Fehler aufgetreten.',
    'flash_batch_delete_success' => 'Die ausgewählten Elemente wurden erfolgreich gelöscht.',
    'flash_batch_delete_error' => 'Beim Löschen der ausgewählten Elemente ist ein Fehler aufgetreten.',
    'flash_delete_error' => 'Beim Löschen des Elements "%name%" ist ein Fehler aufgetreten.',
    'flash_delete_success' => 'Das Element "%name%" wurde erfolgreich gelöscht.',
    'breadcrumb.link_dashboard' => '⌂',
    'title_delete' => 'Löschen bestätigen',
    'message_delete_confirmation' => 'Sind Sie sicher, dass Sie das ausgewählte Element löschen wollen?',
    'btn_delete' => 'Ja, löschen',
    'title_batch_confirmation' => 'Stapel-Aktion \'%action%\' bestätigen',
    'message_batch_confirmation' => 'Sind Sie sicher, dass Sie diese Aktion bestätigen und für alle ausgewählten Elemente ausführen wollen?|Sind Sie sicher dass Sie diese Aktion bestätigen und für alle ausgewählten Elemente (%count%) ausführen wollen?',
    'message_batch_all_confirmation' => 'Sind Sie sicher, dass Sie diese Aktion bestätigen und für alle ausgewählten Elemente ausführen wollen?',
    'btn_execute_batch_action' => 'Ja, ausführen',
    'label_type_yes' => 'ja',
    'label_type_no' => 'nein',
    'label_type_contains' => 'enthält',
    'label_type_not_contains' => 'enthält nicht',
    'label_type_equals' => 'ist gleich',
    'label_type_not_equals' => 'ist nicht gleich',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'ist leer',
    'label_date_type_not_null' => 'ist nicht leer',
    'label_date_type_between' => 'zwischen',
    'label_date_type_not_between' => 'nicht zwischen',
    'label_filters' => 'Filter',
    'delete_or' => 'oder',
    'link_action_history' => 'Versionen',
    'td_action' => 'Aktion',
    'td_revision' => 'Versionen',
    'td_timestamp' => 'Datum',
    'td_username' => 'Autor',
    'label_view_revision' => 'Version anzeigen',
    'list_results_count' => '{1}1 Ergebnis|]1,Inf] %count% Ergebnisse',
    'label_export_download' => 'Download: ',
    'loading_information' => 'Informationen werden geladen…',
    'btn_preview' => 'Vorschau',
    'btn_preview_approve' => 'Bestätigen',
    'btn_preview_decline' => 'Ablehnen',
    'label_per_page' => 'Einträge pro Seite',
    'list_select' => 'Auswählen',
    'confirm_exit' => 'Es gibt ungespeicherte Änderungen.',
    'link_edit_acl' => 'Bearbeiten',
    'btn_update_acl' => 'Speichern',
    'flash_acl_edit_success' => 'ACL Eintrag wurde erfolgreich gespeichert.',
    'link_action_acl' => 'ACL Manager',
    'short_object_description_placeholder' => '',
    'title_search_results' => 'Suchergebnisse: %query%',
    'search_placeholder' => 'Suchen',
    'no_results_found' => 'Keine Suchergebnisse',
    'add_new_entry' => 'Neuen Eintrag',
  ),
  'NordcodeSwitchfitBundle' => 
  array (
    'page.title.register' => 'Registrieren',
    'page.title.success' => 'Willkommen!',
    'page.success.h1' => 'Gut gemacht',
    'page.success.h3' => 'Dein Kurs startet am:',
    'page.success.h3_br' => 'Bis dann!',
    'page.success.start_course' => 'Triff jetzt deinen Personal Trainer',
    'page.success.text1' => '<p>Der nächste Kurs startet am bald. Fünf Tage vor Kursbeginn bekommst Du Zugang zu der SwitchFit Webseite.<br> Du erhältst eine Erinnerungsmail von uns, die Deine Zugangsdaten enthält.</p>
<p>Somit kannst Du schon mal mit den Aufwärm-Übungen beginnen und zum Beispiel Deinen Fitnesslevel ermitteln, Fotos zu Deinem Tagebuch hinzufügen oder Dich mit den Lernmodulen der Akademie beschäftigen.</p>
<p>Während der ersten zwei Wochen erhältst Du von uns einen vorgefertigten Ernährungsplan. Vor Beginn des Kurses kannst Du Dich schon mal damit vertraut machen. Sobald der Kurs begonnen hat, kannst Du dann auch auf den "Fragen & Antworten"-Bereich zugreifen sowie auf SwitchFit Life!.</p>

<p>Falls Du zwischendrin Fragen hast, schreib uns hier eine E-Mail oder an <a href="mailto:help@swtichfit.io">help@swtichfit.io</a></p>
',
    'page.success.step1.h4' => 'Erhalte Zugang zum Programm 5 Tage vor Kursbeginn',
    'page.success.step1.text' => 'Wir schicken Dir Deine Zugangsinformationen',
    'page.success.step2.h4' => 'Mach Dich mit dem Kurs und dem Programm bekannt',
    'page.success.step2.text' => 'Du wirst limitierten Zugang zu allem bekommen, was Du brauchst, um durchstarten zu können.',
    'page.success.step3.h4' => 'Beginne Deinen Kurs',
    'page.success.step3.text' => 'Dein Kurs startet mit Vollgas am 30. Juni!',
    'menu.home' => 'Home',
    'menu.tour' => 'Tour',
    'menu.who_we_are' => 'Wer wir sind',
    'menu.register' => 'Registrieren',
    'menu.contact' => 'Kontakt',
    'frontend.menu.dashboard' => 'Dashboard',
    'frontend.menu.kitchen' => 'Küche',
    'frontend.menu.gym' => 'Gym',
    'frontend.menu.academy' => 'Akademie',
    'frontend.menu.community' => 'SwitchFit Life!',
    'frontend.menu.diary' => 'Tagebuch',
    'frontend.menu.panic' => 'Panik',
    'frontend.menu.help' => 'Hilfe',
    'frontend.menu.settings' => 'Einstellungen',
    'frontend.menu.about' => 'Über uns',
    'frontend.menu.planner' => 'Planer',
    'frontend.menu.quests' => 'Quests',
    'frontend.menu.cart.hover' => 'Bezahle deinen Kurs jetzt',
    'frontend.dashboard.current_week' => 'Aktuelle Woche',
    'frontend.dashboard.timetable' => 'Zeitplan',
    'frontend.dashboard.main_goal' => 'Haupt Ziel',
    'frontend.dashboard.week_goal' => 'Wochen Ziel',
    'frontend.dashboard.current_weight' => 'Aktuelles Gewicht',
    'frontend.dashboard.fitness_score' => 'fitness score',
    'frontend.dashboard.week_data' => 'Wochen<br />Daten
',
    'frontend.dashboard.inspire_me' => 'Begeistere mich',
    'frontend.dashboard.rearrange' => 'Umordnen',
    'frontend.dashboard.done' => 'Fertig',
    'frontend.dashboard.breakfast' => 'Frühstück',
    'frontend.dashboard.lunch' => 'Mittagessen',
    'frontend.dashboard.dinner' => 'Abendessen',
    'frontend.dashboard.snack' => 'Snack',
    'frontend.dashboard.detox_day' => 'Detox-Tag',
    'frontend.dashboard.party_day' => 'Party-Tag',
    'frontend.dashboard.all_humans' => 'Wir sind alle Menschen, nachdem alle!',
    'frontend.dashboard.party_day_column_text' => 'Über Küche',
    'frontend.dashboard.weight' => 'Gewicht',
    'frontend.dashboard.mood' => 'Stimmung',
    'frontend.dashboard.craving' => 'Heisshunger',
    'frontend.dashboard.hunger' => 'Hunger',
    'frontend.dashboard.water' => 'Wasser',
    'frontend.dashboard.hiits' => 'HIITs',
    'frontend.dashboard.glucose' => 'Glukose',
    'frontend.dashboard.cigarettes' => 'Zigaretten',
    'frontend.dashboard.edit' => 'Editieren',
    'frontend.dashboard.show' => 'Zeigen',
    'frontend.dashboard.very_bad' => '{{ number }} sehr schlecht',
    'frontend.dashboard.bad' => '{{ number }} schlecht',
    'frontend.dashboard.neutral' => '{{ number }} neutral',
    'frontend.dashboard.good' => '{{ number }} gut',
    'frontend.dashboard.very_good' => '{{ number }} sehr gut',
    'frontend.dashboard.glasses' => '{{ number }} gläser',
    'frontend.dashboard.glasses_more' => '{{ number }} gläser und mehr',
    'frontend.dashboard.vegetarian_checkbox.label' => 'Vegetarisch',
    'frontend.warmup.title' => 'Willkommen zu der SwitchFit Vorbereitungswoche!',
    'frontend.warmup.intro' => 'Hi {{ first_name }}, bevor wir loslegen können lass uns noch folgende Aufgaben erledigen',
    'frontend.warmup.subtitle' => 'Meine aufgaben',
    'frontend.warmup.task_manifesto_text' => 'Beginne deine Reise, indem du deinen',
    'frontend.warmup.task_manifesto_link' => 'SwitchFit-Eid unterzeichnest',
    'frontend.warmup.task_settings_text' => 'Personalisiere dein Konto, indem du dein',
    'frontend.warmup.task_settings_link' => 'Foto hochlädst',
    'frontend.warmup.task_diary_link' => 'Erstelle deinen ersten Tagebucheintrag',
    'frontend.warmup.task_diary_text' => 'Beschreibe warum du dich ändern möchtest und ergänze dies mit einem Bild, das dir Kraft gibt.
',
    'frontend.warmup.task_feed_link' => 'Erstelle deinen ersten Eintrag im SwitchFit Life Feed (Dashboard).',
    'frontend.warmup.task_feed_text' => 'Stelle dich der community vor!',
    'frontend.warmup.task_academy_link' => 'Beginne mit dem Lernen in der Akademie',
    'frontend.warmup.task_academy_text' => 'und starte mit dem ersten Modul!',
    'frontend.warmup.task_gym_video_text' => 'Lerne im Video, wie du deinen Fitness-Level bestimmst und dokumentiere deine Ergebnisse zur',
    'frontend.warmup.task_gym_video_link' => 'Fortschrittskontrolle',
    'frontend.warmup.task_kitchen_link' => 'Stöbere in den Rezepten',
    'frontend.warmup.task_gym_link' => 'und den Work-Outs',
    'frontend.warmup.task_gym_kitchen_text' => '- markiere Deine Favouriten!',
    'frontend.days.monday' => 'Montag',
    'frontend.days.tuesday' => 'Dienstag',
    'frontend.days.wednesday' => 'Mittwoch',
    'frontend.days.thursday' => 'Donnerstag',
    'frontend.days.friday' => 'Freitag',
    'frontend.days.saturday' => 'Samstag',
    'frontend.days.sunday' => 'Sonntag',
    'frontend.user_progress.week' => 'Woche {{ number }}',
    'frontend.profile.personal_info' => 'Persönliche Info',
    'frontend.profile.contact_info' => 'Kontakt Info',
    'frontend.profile.email_notification' => 'E-Mail Benachrichtigungen',
    'frontend.profile.firstname' => 'Vorname:',
    'frontend.profile.lastname' => 'Nachnamen:',
    'frontend.profile.username' => 'Benutzernamen:',
    'frontend.profile.password' => 'Passwort:',
    'frontend.profile.birthday' => 'Geburtsdatum:',
    'frontend.profile.locale' => 'Ort',
    'frontend.profile.email' => 'E-mail:',
    'frontend.profile.address' => 'Adresse:',
    'frontend.profile.phone' => 'Telefon:',
    'frontend.profile.save' => 'Speichern',
    'frontend.profile.edit' => 'Editieren',
    'frontend.profile.important_updates' => 'Bekomme wichtige Updates von SwitchFit Team',
    'frontend.profile.daily_summary' => 'Bekomme tägliche Zusammenfassung von Meldungen',
    'frontend.profile.new_password' => 'Neues Passwort',
    'frontend.profile.re_new_password' => 'Neues Passwort noch einmal',
    'frontend.profile.change_avatar' => 'Avatar ändern',
    'frontend.profile.proof_text' => 'Wenn Du ein offizielles Nachweis-Dokument der Programm-Teilnahme für Ihre Krankenkasse brauchst, kontaktiere uns einfach mittels ',
    'frontend.profile.payment_prompt' => 'Bitte denke daran hier in den nächsten {{ days }} Tagen zu bezahlen damit du deinen Kurs fortsetzen kannst!',
    'frontend.feed.entry_form.placeholder' => 'Was möchtest du teilen?',
    'frontend.feed.entry_form.validation.text_or_picture' => 'Bitte schreibe einen Text oder wähle ein Bild aus',
    'frontend.feed.comments.show_previous' => 'Vorherige Kommentare anzeigen',
    'frontend.feed.comments.answer' => 'Antworten',
    'frontend.diary.manifesto.title' => 'Mein SwitchFit Eid',
    'frontend.diary.manifesto.i' => 'Ich',
    'frontend.diary.manifesto.text_1' => 'verspreche hiermit mein Bestes zu geben um die SwitchFit Leitlinien zu befolgen.',
    'frontend.diary.manifesto.text_2' => 'Insbesondere werde ich',
    'frontend.diary.manifesto.promise_1' => 'für die Dauer meines gesamten Programms gewissenhanft trainieren. Manche Tage werden leichter/schwerer sein als andere, aber ich weiss, dass das Training meinen Geist und meinen Körper stärkt.',
    'frontend.diary.manifesto.promise_2' => 'ausreichend schlafen und mich an den trainingsfreien Tagen erholen.',
    'frontend.diary.manifesto.promise_3' => 'zu einem Akademie-Freak werden und so mein Wissen erweitern.',
    'frontend.diary.manifesto.promise_4' => 'mich täglich einloggen, um meine Ergebnisse im Tagebuch dokumentieren.',
    'frontend.diary.manifesto.promise_5' => 'mich mit anderen Teilnehmern austauschen, um Hilfe fragen wann immer ich sie brauche, sowie auch anderen helfen.',
    'frontend.diary.manifesto.promise_6' => 'Alkohol, Süßigkeiten und Fast Food nur in Maßen verzehren (wenn überhaupt).',
    'frontend.diary.manifesto.text_3' => 'Schliesse einen Moment deine Augen und stelle dir das Erfolgsgefühl in 8 Wochen vor.',
    'frontend.diary.manifesto.text_4' => 'Wenn du bereit für den Weg mit uns bist, dann unterschreibe jetzt dein Versprechen.',
    'frontend.diary.manifesto.signed_by' => 'Gezeichnet von (Unterschrift)',
    'frontend.diary.manifesto.clear' => 'Löschen',
    'frontend.diary.manifesto.signature_text' => 'Unterschrift mit der Maus erstellen. Dies dient lediglich als Motivationsstütze, ohne rechtlichen Wert.',
    'frontend.diary.manifesto.commit' => 'Ich gelobe',
    'frontend.diary.modal.add_entry' => 'Tagebucheintrag hinzufügen',
    'frontend.diary.modal.go_to_diary' => 'Zur Tagebuchseite',
    'frontend.diary.modal.hint' => 'Wie fühlst Du dich heute?',
    'frontend.diary.modal.mood' => 'Deine Stimmung auswählen',
    'frontend.diary.modal.char_limit' => 'zeichen',
    'frontend.diary.modal.upload' => 'Bild hochladen',
    'frontend.diary.modal.share' => 'In SwitchFIt Life! teilen',
    'frontend.diary.modal.err_text' => 'Bitte gib einen Text an',
    'frontend.diary.modal.err_mood' => 'Bitte gib Deinen Emoji ein',
    'frontend.diary.modal.submit' => 'Eingeben',
    'frontend.diary.page.current_weight' => 'Dein aktuelles Gewicht',
    'frontend.diary.page.goal_motivation' => 'Mein Ziel und Motivation',
    'frontend.diary.page.people_inspire' => 'Welche Person gibt dir die meiste Motivation?',
    'frontend.diary.page.change_bg' => 'Hintergrund ändern',
    'frontend.diary.page.today' => 'Heute',
    'frontend.diary.page.new_entry' => 'Mache einen Tagebucheintrag für heute',
    'frontend.diary.page.all_photos' => 'All meine fotos',
    'frontend.diary.page.show_more' => 'Mehr anzeigen',
    'frontend.diary.page.show_entries' => '{{ month }} Einträge anzeigen',
    'frontend.kitchen.tabs.recipes' => 'Rezepte',
    'frontend.kitchen.tabs.basic_meals' => 'Grund Mahlzeiten',
    'frontend.kitchen.tabs.healthy_alternatives' => 'Gesunde Alternativen',
    'frontend.kitchen.tabs.detox_days' => 'Detox-Tage',
    'frontend.kitchen.tabs.at_the_restaurant' => 'Im Restaurant',
    'frontend.kitchen.tabs.experts' => 'Küche Experten',
    'frontend.kitchen.tabs.about_kitchen' => 'Über Küche',
    'frontend.kitchen.intro' => '<strong>Die SwitchFit Kueche</strong> ist eine umfassende Ressource für ein gesundes Leben. Sie wurde entwickelt, um Ihre Entscheidungen zu erleichtern. Mit über 100 Rezepten, die sich alle der SwitchFit Philosophie der Stoffwechseloptimierung anpassen. Das Leben wird ein bisschen einfacher! Markiere deine Favoriten und filtere deine Auswahl, um das beste Ergebnis fuer dein Leben zu erziehlen.
',
    'frontend.kitchen.filter.filter_view' => 'Filterausblick:',
    'frontend.kitchen.filter.all_types' => 'Alle Typen',
    'frontend.kitchen.filter.all_categories' => 'Alle Kategorien',
    'frontend.kitchen.filter.show_all' => 'Alles anzeigen',
    'frontend.kitchen.filter.only_favorites' => 'Nur Favoriten',
    'frontend.kitchen.filter.including_products' => 'Inklusive',
    'frontend.kitchen.filter.reset_filters' => 'Filter zurücksetzen',
    'frontend.kitchen.list.showing_meals' => '<strong>{{ showing }}</strong> Mahlzeiten aus <strong>{{ total }}</strong> Total Zeigen',
    'frontend.kitchen.list.view_recipe' => 'Rezept ansehen',
    'frontend.kitchen.list.show_more' => 'Mehr anzeigen',
    'frontend.kitchen.detail.back_to_all_recipies' => 'Zurück zu allen Rezepten',
    'frontend.kitchen.detail.previous_recipe' => 'Vorheriges Rezept',
    'frontend.kitchen.detail.next_recipe' => 'Nächstes Rezept',
    'frontend.kitchen.detail.prep' => 'Vorbereitung:',
    'frontend.kitchen.detail.cook' => 'Kochen:',
    'frontend.kitchen.detail.makes' => 'Anteil:',
    'frontend.kitchen.detail.meal_type' => 'Mahlzeit type:',
    'frontend.kitchen.detail.category' => 'Kategorie:',
    'frontend.kitchen.detail.add_to_favorites' => 'Zu den Favoriten',
    'frontend.kitchen.detail.remove_from_favorites' => 'Aus den Favoriten',
    'frontend.kitchen.detail.print' => 'Drucken',
    'frontend.kitchen.detail.directions' => 'Anweisungen',
    'frontend.kitchen.detail.ingredients' => 'Zutaten',
    'frontend.kitchen.detail.additional_info' => 'Weitere information',
    'frontend.kitchen.detail.nutritional_info' => 'Nutritional info per serve',
    'frontend.kitchen.modal.read_more' => 'Lesen Sie mehr über <strong>SwitchFit Küche</strong>',
    'frontend.kitchen.modal.suit_me' => 'Keine von diesen passen mir',
    'frontend.kitchen.modal.select' => 'Wählen',
    'frontend.kitchen.modal.reset_filters' => 'Zurücksetzen',
    'frontend.gym.tabs.workouts' => 'Work-outs',
    'frontend.gym.tabs.hiit_low_burn' => 'HIITs / LOWs / BURNs',
    'frontend.gym.tabs.weekly_challenges' => 'Wöchentliche Challenges',
    'frontend.gym.tabs.fitness_mark' => 'Fitness Test',
    'frontend.gym.tabs.workout_tools' => 'Fitness Zubehör',
    'frontend.gym.tabs.experts' => 'Fitness Experten',
    'frontend.gym.intro' => '<strong>Willkommen bei dem SwitchFit Gym.</strong> Conny, deine persoenliche Trainerin stellt  dir hier motivierende, zeitsparende aber auch geistig anregende Workouts vor. Plane deine Workout Woche in dem du deine ausgesuchten Workouts auf das Dashboard importierst.
',
    'frontend.gym.filter.filter_view' => 'Filterausblick:',
    'frontend.gym.filter.all_types' => 'Alle Typen',
    'frontend.gym.filter.all_categories' => 'Alle Kategorien',
    'frontend.gym.filter.all_locations' => 'Alle Standorte',
    'frontend.gym.filter.show_all' => 'Alles anzeigen',
    'frontend.gym.filter.only_favorites' => 'Nur Favoriten',
    'frontend.gym.filter.reset_filters' => 'Filter zurücksetzen',
    'frontend.gym.list.showing_workouts' => '<strong>{{ showing }}</strong> Work-outs aus <strong>{{ total }}</strong> Total Zeigen',
    'frontend.gym.list.view_workout' => 'Details anzeigen',
    'frontend.gym.list.show_more' => 'Mehr anzeigen',
    'frontend.gym.detail.back_to_all_workouts' => 'Zurück zu allen Work-outs',
    'frontend.gym.detail.previous_workout' => 'Vorheriger Work-out',
    'frontend.gym.detail.next_workout' => 'Nächster Work-out',
    'frontend.gym.detail.workout_time' => 'Work-out Zeit:',
    'frontend.gym.detail.rest' => 'Erholung:',
    'frontend.gym.detail.workout_type' => 'Work-out Typ:',
    'frontend.gym.detail.category' => 'Kategorie:',
    'frontend.gym.detail.location' => 'Standort:',
    'frontend.gym.detail.add_to_favorites' => 'Zu den Favoriten',
    'frontend.gym.detail.remove_from_favorites' => 'Aus den Favoriten',
    'frontend.gym.detail.print' => 'Drucken`',
    'frontend.gym.detail.instructions' => 'Anweisungen',
    'frontend.gym.detail.tips' => 'Tipps',
    'frontend.gym.detail.additional_info' => 'Weitere information',
    'frontend.gym.modal.read_more' => 'Lesen Sie mehr über <strong>SwitchFit Gym</strong>',
    'frontend.gym.modal.suit_me' => 'Keine von diesen passen mir',
    'frontend.gym.modal.select' => 'Wählen',
    'frontend.gym.modal.reset_filters' => 'Zurücksetzen',
    'frontend.community.intro' => '<strong>Die Community-Hub von SwitchFit</strong>, wo Sie die City to City Ergebnisse, Foto-Uploads von anderen Mitgliedern, das "Foto der Woche" von einem Gewinnermitglied und den neuesten Blog-Beitrag sehen koennen. Seien Sie dabei, "upload" ein Photo noch heute!
',
    'frontend.community.main.your_area' => 'SwitchFit in deiner nähe',
    'frontend.community.main.view_all' => 'Alles anzeigen',
    'frontend.community.main.coming_soon' => 'Kommt bald',
    'frontend.community.main.team_stats' => 'Deine Stadt Team Statistiken',
    'frontend.community.main.city' => 'Deine Stadt',
    'frontend.community.main.members' => 'Aktive Mitglieder',
    'frontend.community.main.weight_loss' => 'Durchschn. Gewichtsverlust so weit',
    'frontend.community.main.news' => 'Blog',
    'frontend.community.life_feed.title' => 'SwitchFit Life! feed',
    'frontend.community.life_feed.text' => 'Live-Feed der neuesten Tagebucheinträge von SwitchFit Benutzer',
    'frontend.community.life_feed.update' => 'Dein Bild hochladen',
    'frontend.community.life_feed.back' => 'Zurück zur Community',
    'frontend.community.q_a.title' => 'Q und A',
    'frontend.community.q_a.vote' => 'Stimme',
    'frontend.community.q_a.votes' => 'Stimmen',
    'frontend.community.q_a.view' => 'Ansicht',
    'frontend.community.q_a.views' => 'Ansichten',
    'frontend.community.q_a.no_answers' => 'Keine Antworten',
    'frontend.community.q_a.latest_answer' => 'Letzte Antwort',
    'frontend.community.q_a.days_ago' => 'Tage her',
    'frontend.community.q_a.today' => 'heute',
    'frontend.community.q_a.category' => 'Kategorie',
    'frontend.community.q_a.all_questions' => 'Alle Fragen',
    'frontend.community.q_a.asked' => 'Gefragt am',
    'frontend.community.q_a.answered' => 'Beantwortet',
    'frontend.community.q_a.by' => 'von',
    'frontend.community.q_a.ask_your_question' => 'Stelle deine frage',
    'frontend.community.q_a.your_question' => 'Deine Frage',
    'frontend.community.q_a.additional_comment' => 'Zusätzlicher Kommentar',
    'frontend.community.q_a.submit' => 'Eingeben',
    'frontend.community.q_a.most_popular' => 'Häufigste fragen',
    'frontend.community.q_a.most_viewed' => 'Top gelesene fragen',
    'frontend.community.q_a.vote_action' => 'Abstimmen',
    'frontend.community.q_a.add_comment' => 'Kommentar hinzufügen',
    'frontend.notices.you_have_no_notification' => 'Du hast keine Meldungen...',
    'frontend.notices.day_timetable' => 'Gib Deine tägliche Zeitplan ein',
    'frontend.notices.day_data' => 'Gib Deine tägliche Messungen ein',
    'frontend.modal.weekly_data.title' => 'Gib deine wöchentliche messungen ein',
    'frontend.modal.weekly_data.desc' => 'Woche {{ weekNumber }} ist fast vorbei. Es ist Zeit dich zu messen.',
    'frontend.modal.weekly_data.current_week' => 'Aktuelle Woche',
    'frontend.modal.weekly_data.waist' => 'Taille (cm):',
    'frontend.modal.weekly_data.bust' => 'Büste (cm):',
    'frontend.modal.weekly_data.hips' => 'Hüften (cm):',
    'frontend.modal.weekly_data.arms' => 'Arme (cm):',
    'frontend.modal.weekly_data.legs' => 'Beine (cm):',
    'frontend.modal.weekly_data.running_time' => '800m laufzeit (min:sek):',
    'frontend.modal.weekly_data.number_of_pushups' => 'Anzahl der Liegestützen erledigt in 45 sek:',
    'frontend.modal.weekly_data.total_body_measurements' => 'Gesamtkörpermasse',
    'frontend.modal.weekly_data.next_week' => 'Nächste Woche',
    'frontend.modal.weekly_data.detox_day' => 'Detox-Tag:',
    'frontend.modal.weekly_data.select_detox_day' => 'Wählen Detox-Tag',
    'frontend.modal.weekly_data.week_goal' => 'Gewicht Ziel für nächste Woche (kg):',
    'frontend.modal.weekly_data.submit' => 'Eingeben',
    'frontend.academy.intro' => '<strong>Die SwitchFit-Akademie</strong> ist eine allumfassende Ressource für ein gesundes Leben. Anhand von acht Modulen, die diverse Themen aus den Bereichen Ernährung und Fitness abdecken, wird die Akademie Sie zum Experten machen!
',
    'frontend.academy.progressbar.level' => 'Stufe',
    'frontend.academy.progressbar.to_next' => 'zur nächsten Stufe',
    'frontend.academy.progressbar.module' => 'Modul {{ number }}',
    'frontend.academy.progressbar.final_test' => 'Abschlusstest',
    'frontend.academy.main.modules_explained' => 'Module der Akademie erklärt',
    'frontend.academy.main.start' => 'Start',
    'frontend.academy.main.continue' => 'Nächstes Modul',
    'frontend.academy.module.completion' => 'Modulabschlusszeit',
    'frontend.academy.module.topics' => 'Modul-Themen',
    'frontend.academy.module.completed' => 'Vollendet',
    'frontend.academy.module.in_progress' => 'Im Gange',
    'frontend.academy.module.incomplete' => 'Unvollständig',
    'frontend.academy.module.test_text' => 'Teste Dein Wissen zu diesem Thema',
    'frontend.academy.module.correct' => 'Richtig! Gut gemacht!',
    'frontend.academy.module.incorrect' => 'Ist nicht korrekt! Nochmal versuchen!',
    'frontend.academy.module.check' => 'Überprüfen',
    'frontend.academy.module.continue' => 'Weiter',
    'frontend.academy.module.select_answer' => 'Bitte wählen Sie eine Antwort',
    'frontend.academy.module.well_done' => 'Gut gemacht {{ name }}! Weitermachen mit dem nächsten Thema unten.',
    'frontend.academy.module.next_module' => 'Nächstes Modul',
    'frontend.academy.module.to_overview' => 'Akademie abschließen',
    'frontend.academy.final.intro' => 'Deiner letzten Academy Test',
    'frontend.academy.final.good_luck' => 'Viel Glück!',
    'frontend.academy.final.congratulations' => 'Gratulation',
    'frontend.academy.final.well_done' => 'Gut gemacht',
    'frontend.academy.final.message' => 'Du hast den letzten Academy Test abgeschlossen und sind nun offiziell SwitchFit Meister!',
    'frontend.academy.final.share' => 'Teilen mit Freunden',
    'frontend.academy.final.print' => 'Diplom ausdrucken',
    'frontend.academy.final.back' => 'Zurück zum Dashboard',
    'frontend.academy.has_to_pay' => 'Bitte bezahle deinen Kurs damit du die weiteren Module bearbeiten kannst!',
    'frontend.stat.legend.weight' => 'GEWICHT<br>(kg)',
    'frontend.stat.legend.water' => 'WASSER<br>(gläser)',
    'frontend.stat.legend.fitness_score' => 'FITNESS<br>TEST',
    'frontend.stat.legend.glucose' => 'GLUKOSE<br>(mg)',
    'frontend.stat.legend.cigarettes' => 'ZIGARETTEN<br>(ps)',
    'frontend.stat.legend.hunger' => 'HUNGER',
    'frontend.stat.legend.cravings' => 'HEISSHUNGER',
    'frontend.stat.legend.mood' => 'STIMMUNG',
    'frontend.widgets.qod.title' => 'Quest des Tages',
    'frontend.widgets.qod.no_more_quests' => 'Morgen gibt es wieder einen neuen Quest!',
    'frontend.widgets.workout_of_day.title' => 'Workout des Tages',
    'frontend.widgets.academy_current_module.title' => 'Akademie',
    'quest.detail_view.introduction.headline' => 'Was?',
    'quest.detail_view.explanation.headline' => 'Warum?',
    'quest.detail_view.button.start' => 'Wird gemacht!',
    'quest.detail_view.button.complete' => 'Erledigt!',
    'quest.detail_view.button.quest_overview' => 'Zur Quest Übersicht',
    'quest.detail_view.popup.button.abort' => 'Abbrechen',
    'quest.detail_view.popup.button.yes' => 'Ja',
    'quest.detail_view.popup.confirm_completion.text' => 'Hast du den Quest erledigt?',
    'quest.list.header.title' => 'Quests',
    'quest.list.header.text' => 'sind kleine praktische Aufgaben, die zusammengenommen die ganze Lernerfahrung darstellen, im Ansatz „Lernen durch Handeln“. Wörter mögen verblassen, doch Gefühle und Erfahrungen halten ewig. Du kannst Quests ein oder zwei Tage verpassen und schnell wieder aufholen, jedoch kannst du nicht vorarbeiten. Stelle dich der Herausforderung und schließe alle 56 Quests ab – du wirst achtsamer, selbstbewusster und widerstandskräftiger sein, sowie auch ein kleines bisschen schlauer.',
    'diary.weight_entry.text' => 'Heutiges Gewicht:',
    'diary.measurements_entry.text' => 'Heutige Messungen:',
    'point.point' => 'Punkt',
    'point.points' => 'Punkte',
    'point.city.explanation1' => 'Jedes Mitglied startet individuell mit 0 Punkten. Du kannst deine eigenen Punkte auf dem blauen Stern-Icon unten rechts sehen.',
    'point.city.explanation2' => 'Die jeweilige Punktzahl für jede Stadt ist der Durchschnitt von allen Mitgliedern. Neue Mitglieder betreten eine Stadt mit dem gegenwärtigen Durchschnitt, damit die Gesamtpunktzahl nicht nur Aufgrund eines neuen Beitrittes negativ beeinflusst wird.',
    'point.city.link_explanation' => 'Klicke hier um zu sehen wie du Punkte sammelst',
    'point.explanation.headline' => 'In der folgenden Tabelle kannst du sehen welche Aktion dir wie viele Punkte gibt:',
    'point.explanation.table.header1' => 'Aktion',
    'point.explanation.table.header2' => 'Punkte',
    'point.explanation.table.ACTIVITY_FEED_CREATE_ENTRY.text' => 'Eintrag im Feed erstellen',
    'point.explanation.table.ACTIVITY_FEED_CREATE_ENTRY.points' => '5',
    'point.explanation.table.ACTIVITY_FEED_CREATE_ENTRY_WITH_PHOTO.text' => 'Eintrag im Feed mit Photo erstellen',
    'point.explanation.table.ACTIVITY_FEED_CREATE_ENTRY_WITH_PHOTO.points' => '7',
    'point.explanation.table.ACTIVITY_FEED_CREATE_COMMENT.text' => 'Kommentar schreiben',
    'point.explanation.table.ACTIVITY_FEED_CREATE_COMMENT.points' => '3',
    'point.explanation.table.ACTIVITY_QUEST_COMPLETE.text' => 'Quest erfolgreich beenden',
    'point.explanation.table.ACTIVITY_QUEST_COMPLETE.points' => '10',
    'point.explanation.table.ACTIVITY_MEASUREMENT_INPUT_WEIGHT.text' => 'Gewicht-Eingabe im Tagebuch',
    'point.explanation.table.ACTIVITY_MEASUREMENT_INPUT_WEIGHT.points' => '1 (pro Tag)',
    'point.explanation.table.ACTIVITY_MEASUREMENT_INPUT_BMI.text' => 'Messungs-Eingabe im Tagebuch',
    'point.explanation.table.ACTIVITY_MEASUREMENT_INPUT_BMI.points' => '1 (pro Tag)',
    'point.explanation.table.ACTIVITY_DIARY_CREATE_ENTRY.text' => 'Tagebucheintrag erstellen',
    'point.explanation.table.ACTIVITY_DIARY_CREATE_ENTRY.points' => '1',
    'point.explanation.table.ACTIVITY_DIARY_CREATE_ENTRY_WITH_PHOTO.text' => 'Tagebucheintrag mit Photo erstellen',
    'point.explanation.table.ACTIVITY_DIARY_CREATE_ENTRY_WITH_PHOTO.points' => '3',
    'point.explanation.table.ACTIVITY_DIARY_INPUT_EMOTION.text' => 'Angabe des Gefühlsstatus im Tagebucheintrag',
    'point.explanation.table.ACTIVITY_DIARY_INPUT_EMOTION.points' => '1',
    'point.explanation.table.ACTIVITY_ACADEMY_QUIZ_SOLVE.text' => 'Einen Bereich in der Akademie lesen',
    'point.explanation.table.ACTIVITY_ACADEMY_QUIZ_SOLVE.points' => '1',
    'point.explanation.table.ACTIVITY_ACADEMY_MODULE_SOLVE.text' => 'Ein Modul in der Akademie lesen',
    'point.explanation.table.ACTIVITY_ACADEMY_MODULE_SOLVE.points' => '5',
  ),
  'NordcodeNotificationBundle' => 
  array (
    'notices.new_comments.notice' => 'Du hast neue Kommentare erhalten',
    'notices.new_comments.subject' => 'Hallo %firstname%! Du hast neue Kommentare erhalten',
    'notices.new_comments.salutation1' => 'Hallo',
    'notices.new_comments.text1' => 'du hast für deine folgenden Beiträge neue Kommentare erhalten:',
    'notices.week_data.notice' => 'Gib deine wöchentliche Messungen ein',
    'notices.week_data.subject' => 'Herzlichen Glückwunsch %firstname%! Du hast die erste Woche bei SwitchFit geschafft!',
    'notices.week_data.message' => 'Hallo %firstname%,

herzlichen Glückwunsch zum Abschluss deiner ersten Woche bei SwitchFit! Wir sind stolz auf dich und du solltest es auch sein!

Logg ein, gib deine wöchentliche Messungen ein und stelle dein Gewicht Ziel für die nächste Woche ein.

In der zweiten Wochen wirst du beginnen, dich mit dem Programm wohler zu fühlen. Wenn du am Wochenende normalerweise alkoholische Getränke genießt, ist es jetzt wichtig, dir das für das nächste Wochenende aufzuheben - denn wir wollen deinen Stoffwechsel so schnell wie möglich auf Fettverbrennung umschalten!

%link%

Bitte kontaktiere uns jederzeit mit Fragen oder Anregungen, wir sind gerne für dich da!

Peter und Channette
SwitchFit
team@goswitchfit.com
',
    'notices.week_data.message_html' => '<strong>Hallo %firstname%</strong>,<br><br>

herzlichen Glückwunsch zum Abschluss deiner ersten Woche bei SwitchFit! Wir sind stolz auf dich und du solltest es auch sein!<br><br>

Logg ein, gib deine wöchentliche Messungen ein und stelle dein Gewicht Ziel für die nächste Woche ein.<br><br>

In der zweiten Wochen wirst du beginnen, dich mit dem Programm wohler zu fühlen. Wenn du am Wochenende normalerweise alkoholische Getränke genießt, ist es jetzt wichtig, dir das für das nächste Wochenende aufzuheben - denn wir wollen deinen Stoffwechsel so schnell wie möglich auf Fettverbrennung umschalten!<br><br>

%link%<br><br>

Bitte kontaktiere uns jederzeit mit Fragen oder Anregungen, wir sind gerne für dich da!<br><br>

Peter und Channette<br>
SwitchFit<br>
team@goswitchfit.com',
    'notices.day_timetable.notice' => 'Gib Deine tägliche Messungen ein',
    'notices.day_timetable.subject' => 'Gib Deine tägliche Messungen ein',
    'notices.day_timetable.message' => 'Hallo %firstname% %lastname%!

Gib Deine tägliche Messungen ein

Mit freundlichen Grüßen, SwitchFit-Team
',
    'notices.day_timetable.message_html' => 'Hallo %firstname% %lastname%!

Gib Deine tägliche Messungen ein

Mit freundlichen Grüßen, SwitchFit-Team',
    'notices.day_data.notice' => 'Geben Sie Ihren täglichen Messungen',
    'notices.day_data.subject' => 'Geben Sie Ihren täglichen Messungen',
    'notices.day_data.message' => 'Hello
',
    'notices.day_data.message_html' => 'Hello',
    'notices.7_days_before.notice' => 'Nur noch 7 Tage bis zum Kursbeginn! Der Zugang ist jetzt freigeschaltet!',
    'notices.7_days_before.subject' => 'Nur noch 7 Tage bis zum Kursbeginn! Der Zugang ist jetzt freigeschaltet!',
    'notices.7_days_before.message' => 'Hallo %firstname%

Nochmals vielen Dank für Ihre Teilnahme an SwitchFit. Lassen Sie uns jetzt durchstarten!

Sieben Tage vor Beginn des Kurses sind eine gute Zeit, um sich einloggen und sich mit dem Programm und den Anwendungen vertraut zu machen.
Auch, wenn Sie noch nicht den vollen Zugang zu allen Anwendungen haben, können Sie schon mal einige der Funktionen kennenlernen und Ihren Fitness-Level bestimmen, um zu sehen, wie Ihr Fortschritt sich während des Kurses verbessert! Sie können auch in der Akademie mit den Lerneinheiten beginnen, denn, je früher Sie damit beginnen, desto besser werden Sie am Ende abschneiden.
Der einzige Grund, warum Sie noch keinen vollen Zugriff auf alle Anwendungen haben, ist, dass wir alle zusammen beginnen und auch den Kurs beenden wollen.

Sie können sich hier einloggen: http://app.goswitchfit.com/app-login

Gerne können Sie uns jederzeit kontaktieren, wir freuen uns auf Ihre Fragen und Anregungen!

Das Team von SwitchFit
team@goswitchfit.com
',
    'notices.7_days_before.message_html' => '<strong>Hallo %firstname%</strong><br><br>

Nochmals vielen Dank für Ihre Teilnahme an SwitchFit. Lassen Sie uns jetzt durchstarten!<br><br>

Sieben Tage vor Beginn des Kurses sind eine gute Zeit, um sich einloggen und sich mit dem Programm und den Anwendungen vertraut zu machen.
Auch, wenn Sie noch nicht den vollen Zugang zu allen Anwendungen haben, können Sie schon mal einige der Funktionen kennenlernen und Ihren Fitness-Level bestimmen, um zu sehen, wie Ihr Fortschritt sich während des Kurses verbessert! Sie können auch in der Akademie mit den Lerneinheiten beginnen, denn, je früher Sie damit beginnen, desto besser werden Sie am Ende abschneiden.
Der einzige Grund, warum Sie noch keinen vollen Zugriff auf alle Anwendungen haben, ist, dass wir alle zusammen beginnen und auch den Kurs beenden wollen.<br><br>

Sie können sich hier einloggen: http://app.goswitchfit.com/app-login<br><br>

Gerne können Sie uns jederzeit kontaktieren, wir freuen uns auf Ihre Fragen und Anregungen!<br><br>

Das Team von SwitchFit<br>
team@goswitchfit.com',
    'notices.3_days_before.notice' => 'Ihr SwitchFit-Programm beginnt in 3 Tagen - haben Sie die Vorbereitungsaufgaben beendet?',
    'notices.3_days_before.subject' => 'Ihr SwitchFit-Programm beginnt in 3 Tagen - haben Sie die Vorbereitungsaufgaben beendet?',
    'notices.3_days_before.message' => 'Hallo %firstname%,

hoffentlich hatten Sie bisher die Gelegenheit, Ihren Fitness-Level zu messen.
Im Bereich Fitnesscenter finden Sie hier Fitnesstest - wie du dein Level bestimmst (http://app.goswitchfit.com/gym/43) dazu eine Anleitung. Wie haben Sie sich geschlagen? Es wird ein tolles Gefühl sein, später zurückzublicken und zu sehen, wieviel fitter Sie geworden sind!

Der Kurs startet in drei Tagen. Dann ist Ihr Dashboard freigeschaltet und Sie können die Ergebnisse des Tages dokumentieren und auch Ihren Speiseplan und die Workouts planen.

Gerne können Sie uns jederzeit kontaktieren, wir freuen uns auf Ihre Fragen und Anregungen!

Sie können sich hier einloggen: http://app.goswitchfit.com/app-login

Peter,
SwitchFit
peter@goswitchfit.com

P.S.: Wir alle freuen uns, unseren ersten Kurs anbieten zu können. Als kleinen Bonus haben Sie daher jetzt die Chance, eine Person Ihrer Wahl kostenlos mitanzumelden. Mit dem Code BETA 123 erhält diese Person freien Zugang zum Kurs und allen Anwendungen.
Das Angebot ist auf eine Person pro Mitglied limitiert und gilt nur für diesen Kurs.
Nutzen Sie diese einmalige Gelegenheit - Menschen mit einem Trainingspartner trainieren öfter und erzielen oft bessere Erfolge!
',
    'notices.3_days_before.message_html' => '<strong>Hallo %firstname%</strong>,<br><br>

hoffentlich hatten Sie bisher die Gelegenheit, Ihren Fitness-Level zu messen.<br>
Im Bereich Fitnesscenter finden Sie hier <a href=”http://app.goswitchfit.com/gym/43”>Fitnesstest - wie du dein Level bestimmst</a> dazu eine Anleitung. Wie haben Sie sich geschlagen? Es wird ein tolles Gefühl sein, später zurückzublicken und zu sehen, wieviel fitter Sie geworden sind!<br><br>

Der Kurs startet in drei Tagen. Dann ist Ihr Dashboard freigeschaltet und Sie können die Ergebnisse des Tages dokumentieren und auch Ihren Speiseplan und die Workouts planen.<br><br>

Gerne können Sie uns jederzeit kontaktieren, wir freuen uns auf Ihre Fragen und Anregungen!<br><br>

Sie können sich hier einloggen: http://app.goswitchfit.com/app-login<br><br>

Peter,<br>
SwitchFit<br>
peter@goswitchfit.com<br><br>

P.S.: Wir alle freuen uns, unseren ersten Kurs anbieten zu können. Als kleinen Bonus haben Sie daher jetzt die Chance, eine Person Ihrer Wahl kostenlos mitanzumelden. Mit dem Code BETA 123 erhält diese Person freien Zugang zum Kurs und allen Anwendungen.<br>
Das Angebot ist auf eine Person pro Mitglied limitiert und gilt nur für diesen Kurs.<br>
Nutzen Sie diese einmalige Gelegenheit - Menschen mit einem Trainingspartner trainieren öfter und erzielen oft bessere Erfolge!
',
    'notices.start_day.notice' => '%firstname%! Ihr SwitchFit-Kurs beginnt HEUTE',
    'notices.start_day.subject' => '%firstname%! Ihr SwitchFit-Kurs beginnt HEUTE',
    'notices.start_day.message' => 'Hallo %firstname%,

Willkommen bei SwitchFit, Ich möchte mich gerne vorstellen: mein Name ist Conny und ich bin deine SwitchFit-Trainerin. Let\'s Go!

Dein 8 wöchiger Gesundheits Kurs bei SwitchFit beginnt heute und du wirst ab sofort ziemlich beschäftigt sein. Du wirst gleich als erstes deine Vorbereitungsaufgaben durch arbeiten. Arbeite die Aufgaben systematisch durch und kreuze sie nacheinander ab.

Zuallererst ist es wichtig deinen Speiseplan auszufüllen. Jede Woche wirst du deine Speisen systematisch auswählen. Die Speisen sind alle entwickelt worden um deinen Stoffwechsel wieder auszugleichen.Lese zuerst die Einführung in der Küchen Abteilung, hier wird es genau erklärt wie du Mahlzeiten aussuchen solltest.

Dann geht es zur Akademie. In der Akademie wirst du die Leitideen der Switchfit Philosophie kennen-, verstehen-, und anwenden lernen.

Danach wirst du dein Trainingsprogramm mit mir beginnen. Schnuppere im Fitnesscenter. Am besten beginnst du mit den "Conny erklärt"-Videos. In der heutigen digitalen Welt mangelt es nicht an Fitness-Videos. Das Ziel ist es aber dein Training zu optimieren und interessant zu gestalten um dich schneller an dein Ziel zu bringen. HIIT Trainings auf einer Treppe oder einem Hügel sind sehr viel stimulierender für unser Gehirn als endlose Trainings auf Geräten im Fitnessstudio! Setze dir das Ziel 10 Minuten lange Trainings durchzuhalten. Nach und nach kannst du diese Zeit verdoppeln, dann hasst du schon 4 HIITs erreicht! Das Training kannst du auch auf dem Tag verteilen, zum Beispiel 10 Minuten am Morgen und 10 Minuten am Abend. Es geht nicht um Quantität, sondern um die Qualität des Trainings.

Einloggen zu SwitchFit: http://app.goswitchfit.com/app-login

SwitchFit team@goswitchfit.com
',
    'notices.start_day.message_html' => '<strong>Hallo %firstname%</strong>,<br><br>

<img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFQzBCNTRGOTBEODMxMUU0QjEyRERENTNGQjg0RkE5RSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFQzBCNTRGQTBEODMxMUU0QjEyRERENTNGQjg0RkE5RSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkVDMEI1NEY3MEQ4MzExRTRCMTJEREQ1M0ZCODRGQTlFIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkVDMEI1NEY4MEQ4MzExRTRCMTJEREQ1M0ZCODRGQTlFIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+SB80SgAAK+RJREFUeNrc3XmwZVWVJ+Dz8iWzKQKCA6CCooiiOCGjQjIkJTNCSkULOJRDRbdGE0m0FWAjZUVYpZYR/mEYhrao2CIIxVSCJU6toOKAgiCTggqCoiQCIogy9PpOnd+L7an3Mu9jysQTsePee84+e1jzWnvtfaee9axndZNc9913X7fxxht3j3vc47qrr766u+eee7q11lqr22677bqXv/zl/fcFCxZ0999/fzc1NdXdfvvt3Q033NDtuuuu3XOf+9zuy1/+cvepT32qO/DAA7vXve513R133NEtX768W3PNNft37rzzzv491wMPPKCtTerrDvV92/q8q57tWp+Lfc+Y1GuvvN88X7vu3VrllPp5W7V5f32eU+WWms9t3jcvnynG88c//rH72c9+1l1zzTXdn//85/6euS1cuLC79957Z+r6/ac//amvCyZ33XVXt8Yaa/TPfH/Sk57UPfWpT+3uvvvu/r3x+Ga7Fnar+MogCynrTE9P/w0kVHlp3X92fW46yyvrBxErm6DnVTaoclxT93gIqXJelV9XObXKtd1qci1cVUgYqOxxhYjt63Pv4rBDi9qeiRKVMfXPt31tpJ8Rp68/IPVtw7N3VvlSlc9X+XqVayah5L8ahBQXdOuss87GBYxlv//97w8p1t6K2MD+A0X3QGzF1xhAgN2KrLw3/t6KovwmHvM53FunygHV5gE1tj/UOC4pMfVP9f2Lf7UIASBAL+BvUkj4+0svvfTvSh9tRifRPfQJnQPQdIm6rrXXXrt/N3J7LnEXjhgjIe80wO9aveEdBKIM99ercexcY/iP4tYvVrv/VK99868KIcNkN160aNHRZQAc+bvf/W7Tj3/84/0zBsXznve8vjz96U/v61KSf/jDH7qbb765K+TNAA0HtUbDbGItAFcnSIhB0nJbkJBnFDBCuPXWW7vbbrut77cU+5JqY0kpaQiBmC8+phEyUNxUTfb4AvDfFdA3e9GLXtRbHMqvfvWrHug//OEPu6uuuqrzbJNNNukBD1FbbLFF94tf/KL7zW9+0wONtYNTWDwRa0FKENCKpnBBKwK1DRHqag/iIQAicCik6CNiUf2qu3O9/x8DQv6hyiWPOYSYcFHWkprQv/zoRz/azsSZgBtssEG37rrrdltuuWW300479dyAGqtO9/3vf79//oIXvKC7+OKLu80337x7znOe0yPnt7/9bVec1Ys2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" /><br><br>

Willkommen bei SwitchFit, Ich möchte mich gerne vorstellen: mein Name ist Conny und ich bin deine SwitchFit-Trainerin. Let\'s Go!<br><br>

Dein 8 wöchiger Gesundheits Kurs bei SwitchFit beginnt heute und du wirst ab sofort ziemlich beschäftigt sein. Du wirst gleich als erstes deine Vorbereitungsaufgaben durch arbeiten. Arbeite die Aufgaben systematisch durch und kreuze sie nacheinander ab.<br><br>

Zuallererst ist es wichtig deinen Speiseplan auszufüllen. Jede Woche wirst du deine Speisen systematisch auswählen. Die Speisen sind alle entwickelt worden um deinen Stoffwechsel wieder auszugleichen.Lese zuerst die Einführung in der Küchen Abteilung, hier wird es genau erklärt wie du Mahlzeiten aussuchen solltest.<br><br>

Dann geht es zur Akademie. In der Akademie wirst du die Leitideen der Switchfit Philosophie kennen-, verstehen-, und anwenden lernen.<br><br>

Danach wirst du dein Trainingsprogramm mit mir beginnen. Schnuppere im Fitnesscenter. Am besten beginnst du mit den "Conny erklärt"-Videos. In der heutigen digitalen Welt mangelt es nicht an Fitness-Videos. Das Ziel ist es aber dein Training zu optimieren und interessant zu gestalten um dich schneller an dein Ziel zu bringen. HIIT Trainings auf einer Treppe oder einem Hügel sind sehr viel stimulierender für unser Gehirn als endlose Trainings auf Geräten im Fitnessstudio! Setze dir das Ziel 10 Minuten lange Trainings durchzuhalten. Nach und nach kannst du diese Zeit verdoppeln, dann hasst du schon 4 HIITs erreicht! Das Training kannst du auch auf dem Tag verteilen, zum Beispiel 10 Minuten am Morgen und 10 Minuten am Abend. Es geht nicht um Quantität, sondern um die Qualität des Trainings.<br><br>

Einloggen zu SwitchFit: http://app.goswitchfit.com/app-login<br><br>

SwitchFit team@goswitchfit.com',
    'notices.day_3.notice' => '%firstname%, wie geht es Ihnen mit SwitchFit?',
    'notices.day_3.subject' => '%firstname%, wie geht es Ihnen mit SwitchFit?',
    'notices.day_3.message' => 'Hallo %firstname%,

Tag 3! Wir hoffen, Sie genießen den Kurs und haben sich gut eingewöhnt!

Wir hoffen, dass Sie

1. gewissenhaft die Kennzahlen für Ihre Statistiken eingeben.
2. die großartigen Rezepte in unserer Küche genießen.
3. sich mit der Akademie vertraut machen.
4. Tagebucheinträge machen, um Ihren Fortschritt zu verfolgen.
5. sogar vielleicht ein Foto in SwitchFit Life! hochgeladen haben
6. einem unserer Experten eine Frage im Q und A - Bereich gestellt haben.
7. Ihre Vorbereitungsaufgaben erledigt haben und Ihr Fitness-Level bestimmt haben.
8. Ihr erstes Workout aus dem Fitnesscenter erfolgreich absolviert haben.

Lassen Sie uns loslegen! Es ist wichtig, sich jeden Tag einzuloggen (außer auf Party-Tagen), also bleiben Sie am Ball und die Ergebnisse werden folgen!

Alles Gute,

Ihr SwitchFit Team

Einloggen zu SwitchFit: http://app.goswitchfit.com/app-login

Bitte kontaktieren Sie uns jederzeit mit Fragen oder Anregungen, wir sind gerne für Sie da!

SwitchFit
help@swtichfit.io
',
    'notices.day_3.message_html' => '<strong>Hallo %firstname%</strong>,<br><br>

Tag 3! Wir hoffen, Sie genießen den Kurs und haben sich gut eingewöhnt!<br><br>

Wir hoffen, dass Sie<br><br>

1. gewissenhaft die Kennzahlen für Ihre Statistiken eingeben.<br>
2. die großartigen Rezepte in unserer Küche genießen.<br>
3. sich mit der Akademie vertraut machen.<br>
4. Tagebucheinträge machen, um Ihren Fortschritt zu verfolgen.<br>
5. sogar vielleicht ein Foto in SwitchFit Life! hochgeladen haben<br>
6. einem unserer Experten eine Frage im Q und A - Bereich gestellt haben.<br>
7. Ihre Vorbereitungsaufgaben erledigt haben und Ihr Fitness-Level bestimmt haben.<br>
8. Ihr erstes Workout aus dem Fitnesscenter erfolgreich absolviert haben.<br><br>

Lassen Sie uns loslegen! Es ist wichtig, sich jeden Tag einzuloggen (außer auf Party-Tagen), also bleiben Sie am Ball und die Ergebnisse werden folgen!<br><br>

Alles Gute,<br><br>

Ihr SwitchFit Team<br><br>

Einloggen zu SwitchFit: http://app.goswitchfit.com/app-login<br><br>

Bitte kontaktieren Sie uns jederzeit mit Fragen oder Anregungen, wir sind gerne für Sie da!<br><br>

SwitchFit<br>
help@swtichfit.io',
    'notices.day_6.notice' => 'Plan your first test of weight, fitness mobility test (800m run) and pushup test. Please have your results in before next week course start.',
    'notices.day_6.subject' => 'Plan your first test',
    'notices.day_6.message' => 'Plan your first test of weight, fitness mobility test (800m run) and pushup test.
Please have your results in before next week course start.

%link%
',
    'notices.day_6.message_html' => 'Plan your first test of weight, fitness mobility test (800m run) and pushup test.<br>
Please have your results in before next week course start.<br><br>

%link%',
    'notices.every_monday.notice' => 'Die %week_number_current% SwitchFit Woche beginnt heute!',
    'notices.every_monday.subject' => 'Die %week_number_current% SwitchFit Woche beginnt heute!',
    'notices.every_monday.message' => 'Hallo %firstname%,

heute beginnt die %week_number_current% Woche deines SwitchFit Programms.
Plane nun deinen Speiseplan und die Workouts für diese Woche.

Hast du schon das letzte Modul in der Akademie beendet? Wenn nicht, dann erledige diese Aufgabe besser gleich!

Sie können sich hier einloggen: http://app.goswitchfit.com/app-login

Du kannst uns jederzeit kontaktieren, wir sind gerne für dich da!

Peter und Channette
SwitchFit
team@goswitchfit.com
',
    'notices.every_monday.message_html' => '<strong>Hallo %firstname%</strong>,<br><br>

heute beginnt die %week_number_current% Woche deines SwitchFit Programms.<br>
Plane nun deinen Speiseplan und die Workouts für diese Woche.<br><br>

Hast du schon das letzte Modul in der Akademie beendet? Wenn nicht, dann erledige diese Aufgabe besser gleich!<br><br>

Sie können sich hier einloggen: http://app.goswitchfit.com/app-login<br><br>

Du kannst uns jederzeit kontaktieren, wir sind gerne für dich da!<br><br>

Peter und Channette<br>
SwitchFit<br>
team@goswitchfit.com',
    'notices.every_saturday.notice' => 'Es ist Zeit dein woechentliches Fitnesstest zu wiederholen',
    'notices.every_saturday.subject' => 'Es ist Zeit dein woechentliches Fitnesstest zu wiederholen',
    'notices.every_saturday.message' => 'Hallo %firstname%,

gut gemacht, du hast dein SwitchFit-Programm für die erste Woche fast hinter dir!

Jeden Freitag oder Samstag, musst du dein Fitness-Level neu bestimmen. Bitte gib deine Zahlen bis Sonntag ein, um zu sehen, wie sich die Stadt-Teams, und du selbst natürlich, schlagen!

Du kannst dir ein neues wöchentliches Ziel setzen und dafür arbeiten!

Der wöchentliche Fitness-Level Test ist der Sprint über 800m + die Anzahl der Liegestütze in 45 Sekunden.

Denk daran, es ist völlig in Ordnung, die Liegestütze auf den Knien auszuführen. Diese Liegestütze werden mit einem halben Punkt, volle Liegestütze mit einem ganzen Punkt angerechnet. Versuche einfach dein Bestes! Vielleicht kannst du dein Ergebnisse auch in deinem Tagebuch aufzeichnen. Es ist eine tolle Möglichkeit, die Ergebnisse über einen längeren Zeitraum zu verfolgen!

Beachte, dass du die wöchentlichen Zahlen auch später eingeben kannst, aber es ist wichtig, diese noch vor dem Ende der laufenden SwitchFit-Woche einzugeben.

Mehr über wöchentlichen Fitness Mark fitness score to http://app.goswitchfit.com/gym/fitness-mark

Bitte kontaktiere uns jederzeit mit Fragen oder Anregungen, wir sind gerne für Sie da!

Peter und Channette
SwitchFit
team@goswitchfit.com
',
    'notices.every_saturday.message_html' => '<strong>Hallo %firstname%</strong>,<br><br>

gut gemacht, du hast dein SwitchFit-Programm für die erste Woche fast hinter dir!<br><br>

Jeden Freitag oder Samstag, musst du dein Fitness-Level neu bestimmen. Bitte gib deine Zahlen bis Sonntag ein, um zu sehen, wie sich die Stadt-Teams, und du selbst natürlich, schlagen!<br><br>

Du kannst dir ein neues wöchentliches Ziel setzen und dafür arbeiten!<br><br>

Der wöchentliche Fitness-Level Test ist der Sprint über 800m + die Anzahl der Liegestütze in 45 Sekunden.<br><br>

Denk daran, es ist völlig in Ordnung, die Liegestütze auf den Knien auszuführen. Diese Liegestütze werden mit einem halben Punkt, volle Liegestütze mit einem ganzen Punkt angerechnet. Versuche einfach dein Bestes! Vielleicht kannst du dein Ergebnisse auch in deinem Tagebuch aufzeichnen. Es ist eine tolle Möglichkeit, die Ergebnisse über einen längeren Zeitraum zu verfolgen!<br><br>

Beachte, dass du die wöchentlichen Zahlen auch später eingeben kannst, aber es ist wichtig, diese noch vor dem Ende der laufenden SwitchFit-Woche einzugeben.<br><br>

Mehr über wöchentlichen Fitness Mark fitness score to http://app.goswitchfit.com/gym/fitness-mark<br><br>

Bitte kontaktiere uns jederzeit mit Fragen oder Anregungen, wir sind gerne für Sie da!<br><br>

Peter und Channette<br>
SwitchFit<br>
team@goswitchfit.com',
  ),
  'NordcodeSignupBundle' => 
  array (
    'page.title.home' => 'Mit SwitchFit gesund abnehmen und besser leben!',
    'page.title.tour' => 'SwitchFit | App: Ernährungsplan & Training',
    'page.title.who_we_are' => 'SwitchFit | Lerne die Gründer kennen',
    'page.title.register' => 'SwitchFit | Jetzt für den nächsten Kurs registrieren',
    'page.title.contact' => 'SwitchFit | Kontakt',
    'page.title.privacy' => 'SwitchFit | Datenschutzerklärung',
    'page.title.terms' => 'SwitchFit | Allgemeine Geschäftsbedingungen',
    'page.title.imprint' => 'SwitchFit | Impressum',
    'page.title.register_confirmation' => 'SwitchFit | Registrierung abgeschlossen',
    'page.title.beta_giveaway' => 'SwitchFit | SwitchFit Beta-Account',
    'page.meta.description.home' => 'Abnehmen mit SwitchFit heisst, deinen Stoffwechsel auf Fettverbrennung umzustellen. Fühl dich leichter, hab mehr Energie und verbrenne Fett im Schlaf.',
    'page.meta.description.tour' => 'Lecker essen mit dem SwitchFit Ernährungsplan: Tolle Rezepte ohne Kohlenhydrate. Effektiv trainieren mit dem SwitchFit Fitnessplan. Probiere es aus!',
    'page.meta.description.who_we_are' => 'Peter und Channette, beides erfahrene Ernährungsexperten, haben SwitchFit gemeinsam entwickelt und gegründet. Erfahre mehr!',
    'page.meta.description.register' => 'Dein neues Leben wartet auf dich! Registriere dich jetzt für den nächsten Kurs und erhalte für immer freien Zugang zu SwitchFit. Probiere es aus!',
    'page.meta.description.contact' => 'Hast du Fragen? Dann schreibe uns und einer unserer Experten wird sich in den nächsten 24 - 48 Stunden bei dir melden.',
    'page.meta.description.privacy' => 'Datenschutzerklärung',
    'page.meta.description.terms' => 'Allgemeine Geschäftsbedingungen',
    'page.meta.description.imprint' => 'Impressum',
    'page.meta.description.beta_giveaway' => 'SwitchFit Beta-Account',
    'alt_desc.home.0' => 'Conny Stehli',
    'alt_desc.home.1' => 'Nicole Fortescue, lachende und zufriedene SwitchFit Nutzerin, mit SwitchFit abnehmen',
    'alt_desc.home.2' => 'Essgewohnheiten, Zuckerbasierte Ernährung, Langsamer Stoffwechsel, Fetteinlagerung, wenig Energie',
    'alt_desc.home.3' => 'In 8 Wochen abnehmen durch SwitchFit, Ernährungsplan, Fitnessprogramm, Gesund leben, Gesund ernähren',
    'alt_desc.home.4' => 'Sportliches Paar, Training mit SwitchFit, Abnehmen mit SwitchFit, besser leben mit SwitchFit',
    'alt_desc.home.5' => 'Gesund essen mit SwitchFit, Proteinreich ernähren, Low Carb, Gerichte ohne Kohlenhydrate',
    'alt_desc.home.6' => 'Gesunde Gerichte, SwitchFit Rezepte, vegetarische Rezepte, glutenfrei, Rezepte zum Abnehmen',
    'alt_desc.home.7' => 'Gesund ernähren, Lecker und gesund essen, Diätrezepte, Ernährung umstellen, Essen ohne Kohlenhydrate',
    'alt_desc.home.8' => 'Frau im Park, Joggen, Trainieren mit SwitchFit, Effektives Training, Intensives Training',
    'alt_desc.home.9' => 'Übungen für zu Hause, zu Hause Trainieren mit SwitchFit, Übungen zum Abnehmen, Übungen zum Nachmachen',
    'alt_desc.home.10' => 'Draussen Trainieren, Yoga Übungen, HIIT Training, das beste Fitnessprogramm, SwitchFit',
    'alt_desc.home.11' => 'Einfach trainieren mit SwitchFit, mit weniger Aufwand mehr erreichen, gesunde Essgewohnheiten',
    'alt_desc.home.12' => 'Wöchentlicher Essensplan, Rezepte für eine Woche, gesunder Essensplan, vegetarisch, glutenfrei',
    'alt_desc.home.13' => 'SwitchFit Statistik, Werde zum Fettverbrenner mit SwitchFit, Erreiche dein Traumgewicht',
    'alt_desc.home.14' => 'Hilfe beim Abnehmen durch SwitchFit, nicht alleine Abnehmen',
    'alt_desc.home.15' => 'Fröhliches Paar, im Alter gesund ernähren, mehr Fett verbrennen, Stoffwechsel umstellen',
    'alt_desc.home.16' => 'SwitchFit Akademie, wie isst man richtig, richtige Ernährung, mehr Wissen über gesundes Essen',
    'alt_desc.home.17' => 'SwitchFit Akademie, Ernährung verstehen, besser ernähren, lernen ernähren, Stoffwechsel verstehen',
    'alt_desc.home.18' => 'SwitchFit Akademie, Wie funktioniert gesunde Ernährung, Diätlügen, Diät lügen',
    'alt_desc.home.19' => 'Leben verändern mit SwitchFit Online-Programm, Online abnehmen, Community abnehmen, Ernährungsexperten',
    'alt_desc.home.20' => 'Bianca Smart, kein Heisshunger mehr Dank SwitchFit, ständig über Essen nachdenken',
    'alt_desc.home.21' => 'Nickolas Blattner, keine Heisshungerattacken mehr dank SwitchFit, neues Lebensgefühl',
    'alt_desc.tour.0' => 'Glückliche Frau im Fitnesstudio, SwitchFit Dashboard, Online Diätprogramm, Ernährungsplan',
    'alt_desc.tour.1' => 'Gesunde Rezepte bei SwitchFit finden, Wöchentliches Ernährungsprogramm, Ernährungsplan, Vegetarische Rezepte, Low Carb',
    'alt_desc.tour.2' => 'Essensplan erstellen mit SwitchFit, gesund kochen, einfach und gesund abnehmen mit SwitchFit',
    'alt_desc.tour.3' => 'Keine Zeit für eine Diät? SwitchFit erstellt dir deinen Ernährungsplan',
    'alt_desc.tour.4' => 'SwitchFit Party Tag, iss was du möchtest und lass es dir gut gehen',
    'alt_desc.tour.5' => 'Fortschritt kontrollieren mit SwitchFit, Abnehmen ohne Kalorienzählen, Wunschgewicht erreichen',
    'alt_desc.tour.6' => 'SwitchFit Statistiken: Wieviele Kilos pro Woche abnehmen',
    'alt_desc.tour.7' => 'SwitchFit Infos: Wir helfen dir beim Abnehmen, einfacher abnehmen, Diät durchhalten',
    'alt_desc.tour.8' => 'SwitchFit Belohnungen: Erfolgreich abnehmen ohne Jojo Effekt, Abnehmen Community',
    'alt_desc.tour.9' => 'Zwei fröhliche Pärchen beim gesunden Essen, SwitchFit Küche, kulinarischer Himmel, lecker und gesund',
    'alt_desc.tour.10' => 'Gesunde Rezepte für jeden Anlass, leckere Rezepte SwitchFit, gesund kochen für die ganze Familie',
    'alt_desc.tour.11' => 'Gerichte mehr Energie, Rezepte Fett verbennen, Fettverbrennung ankurbeln mit SwitchFit',
    'alt_desc.tour.12' => 'Vegetarische Gerichte, Glutenfreie Rezepte, Laktosefrei, Rezepte für Diabetiker, SwitchFit Ernährung',
    'alt_desc.tour.13' => 'Entschlackung mit SwitchFit, Spezielle Rezepte entschlacken, Entschlackungskur, Detox Rezepte',
    'alt_desc.tour.14' => 'Einfach lecker kochen, Simple Gerichte zum Nachkochen, Einfach und gesund kochen, SwitchFit Rezepte',
    'alt_desc.tour.15' => 'Einfache Rezepte zum Nachkochen, SwitchFit Ernährungsplan',
    'alt_desc.tour.16' => 'Individueller Ernährungsplan, Wochenplan Rezepte, SwitchFit Wochenplan, Lieblingsrezepte SwitchFit',
    'alt_desc.tour.17' => 'Verstehe Ernährung mit SwitchFit, Vorteile und Nachteile von Nahrungsmitteln, Wissen über Essen',
    'alt_desc.tour.18' => 'Glückliche Frau beim Training, SwitchFit Gym, intensiv und effektiv trainieren, Training Spass macht',
    'alt_desc.tour.19' => 'SwitchFit Gym: Fitness für jeden. Hunderte effektiver Übungen. Trainingsplan zusammenstellen',
    'alt_desc.tour.20' => 'SwitchFit Gym: Intensives Training, Cardio Training, HIIT, maximal Fett verbrennen',
    'alt_desc.tour.21' => 'Individueller Trainingsplan erstellen im SwitchFit Gym, effektiv trainieren',
    'alt_desc.tour.22' => 'SwitchFit Gym: Sport im Alter, Übungen ohne Equipment, Sport zum Abnehmen, Sportübungen für unfit',
    'alt_desc.tour.23' => 'SwitchFit Gym: Effektives Training, keine Zeit zum Trainieren, HIIT, Hochintensiv Training',
    'alt_desc.tour.24' => 'SwitchFit Gym: Detaillierte Trainingsanleitungen, Übungen für zu Hause',
    'alt_desc.tour.25' => 'SwitchFit Gym: Erstelle deinen individuellen Trainingsplan, Wöchentlicher Trainingsplan',
    'alt_desc.tour.26' => 'SwitchFit Gym: Detaillierte Erklärungen zu Fitnessübungen, Verstehe Fitness',
    'alt_desc.tour.27' => 'Mutter kocht mit Sohn. Mit der SwitchFit Akademie Ernährung verstehen und gesünder leben',
    'alt_desc.tour.28' => 'SwitchFit Akademie: Im Ernährungskurs über gesunde Ernährung lernen. Langfristig abnehmen',
    'alt_desc.tour.29' => 'SwitchFit Akademie: Lerne über Ernährung. Richtig ernähren. Gesund leben.',
    'alt_desc.tour.30' => 'SwitchFit Akademie: Online Test über Ernährung. Richtig essen.',
    'alt_desc.tour.31' => 'SwitchFit Akademie: Ernährungszertifikat. Wissen über Ernährung. Gesund kochen.',
    'alt_desc.who_we_are.0' => 'Channette Kulzer und Peter Cosgrove, Ernährungsexperten und Gründer von SwitchFit',
    'alt_desc.register.0' => 'SwitchFit: Sicher bezahlen mit Visa, MasterCard, American Express, Diners Club International, JCB',
    'alt_desc.register.1' => 'Nicole Fortescue, lachende und zufriedene SwitchFit Nutzerin, mit SwitchFit abnehmen',
    'hellobar.text1' => 'Die Anmeldung für den nächsten Kurs ist offen!',
    'hellobar.text2' => 'Einführungsangebot _tag_50 % RABATT_endtag_',
    'hellobar.btn1' => 'Jetzt mitmachen',
    'menu.home' => 'Home',
    'menu.tour' => 'Tour',
    'menu.who_we_are' => 'Wer wir sind',
    'menu.register' => 'Registrieren',
    'menu.contact' => 'Kontakt',
    'menu.pay' => 'Zahlen',
    'menu.blog' => 'Blog',
    'menu.login' => 'Anmelden',
    'menu.nav.why' => 'Warum',
    'menu.nav.benefits' => 'Vorteile',
    'menu.nav.reviews' => 'Erfolgsgeschichten',
    'menu.nav.pricing' => 'Preis',
    'images.fat' => 'Fett',
    'images.energy_efficiency' => 'Energieeffizienz',
    'home.more' => 'Mehr Videos ansehen',
    'home.more2' => 'Mehr Details lesen',
    'home.banner.title' => 'Triff dein neues<br>und gesundes,<br>_tag_wunderbares Ich_endtag_',
    'home.banner.subtitle' => 'Das 8-wöchige Online-Programm, das deinen Stoffwechsel auf Fettverbrennung umstellt.',
    'home.banner.watch' => 'Video ansehen',
    'home.conny.title' => 'Triff deinen Personal Trainer',
    'home.testimonial.title' => 'SwitchFit hat mein Leben verändert',
    'home.testimonial.text1' => 'Anfangs war ich skeptisch, da ich schon viele Diäten ausprobiert habe. Aber durch SwitchFit haben sich nicht nur meine Essgewohnheiten, sondern auch mein Leben verändert.<br><br>Neben einer schlankeren Linie, einem stabileren Energielevel und mehr Selbstbewusstsein, weiss ich jetzt wie ich mich gesund und lecker ernähre, ganz ohne schlechtes Gewissen. Für mich hat sich eine ganz neue Welt voller Genuss eröffnet, die ich gerne noch weiter entdecke.',
    'home.testimonial.more' => 'Mehr Kundenreferenzen',
    'home.pitch1.title' => 'Kein Wunder, dass du Probleme hast _tag_abzunehmen_endtag_',
    'home.pitch1.subtitle' => 'Deine Essgewohnheiten erlauben es dir nicht genug Fett<br>zu verbrennen, sondern es nur zu speichern.',
    'home.tabs.title1' => 'Unsere Essgewohnheiten',
    'home.tabs.text1' => 'Die meisten Diäten verwandeln Essen in Fett',
    'home.tabs.title2' => 'Unsere Trainingsgewohnheiten',
    'home.tabs.text2' => 'Die meisten Übungen verbrennen nicht genug Fett',
    'home.how_we_eat.left.title' => 'Eine _tag_zuckerbasierte_endtag_ Ernährung verhindert Gewichtsabnahme, erhöht Fettein-lagerungen & macht schneller müde',
    'home.how_we_eat.left.text1' => 'Zucker versorgt dich kurzzeitig mit Energie und lässt dich dann mit Heisshunger alleine. Schlimmer noch ist, dass durch viel Zucker die Fettproduktion angeregt wird, anstatt Fett zu verbrennen.',
    'home.how_we_eat.left.text2' => 'Nimmt unser Körper Nahrung mit viel Zucker zu sich, wird nur der Zucker, nicht aber unser Fett in Energie umgewandelt. Zuckerüberschuss führt dazu, dass mehr Insulin, "das Fetthormon". Die Fettproduktion wird angeregt und das Abnehmen erschwert. Gleichzeitig erhöht sich dein Diabetes- und Osteoporose-Risiko.',
    'home.how_we_eat.left.text3' => 'Gewichtszunahme, Müdigkeit, Diabetes, Osteoporose',
    'home.how_we_eat.right.title' => 'Eine auf guten _tag_Fetten basierende_endtag_ Ernährung ist die Lösung. Schneller abnehmen und doppelt so viel Energie',
    'home.how_we_eat.right.text1' => 'Entgegen aller Mythen wurde wissenschaftlich nachgewiesen, dass Fett doppelt so viel Energie verbrennt wie Zucker. Darüber hinaus setzt Fett einen Prozess in Gang, der dich dabei unterstützt schneller abzunehmen.',
    'home.how_we_eat.right.text2' => 'Durch die Reduzierung des Blutzuckerlevels zwingen wir unseren Körper dazu, Fett in Energie umzuwandeln. So wird dann alles Fett, dass wir zu uns nehmen oder das sich schon in unserem Bauch oder in den Oberschenkeln befindet, in lang anhaltende Energie umgewandelt und wir nehmen ab.',
    'home.how_we_eat.right.text3' => 'Gewichtsabnahme, viel Energie,<br>bessere Laune',
    'home.how_we_exercise.diagram.first.title' => '_tag_Traditionelles_endtag_ Workout',
    'home.how_we_exercise.diagram.first.y_axis.first' => 'Workout',
    'home.how_we_exercise.diagram.first.y_axis.second' => 'Fettverbrennung',
    'home.how_we_exercise.diagram.first.y_axis.third' => 'Muskelabbau',
    'home.how_we_exercise.diagram.first.x_axis.first' => 'Zeit',
    'home.how_we_exercise.diagram.first.graph.first' => '1 Stunde',
    'home.how_we_exercise.diagram.second.title' => '_tag_Hochleistungs-_endtag_ Workout',
    'home.how_we_exercise.diagram.second.y_axis.first' => 'Workout',
    'home.how_we_exercise.diagram.second.y_axis.second' => 'Fettverbrennung',
    'home.how_we_exercise.diagram.second.y_axis.third' => 'Muskelabbau',
    'home.how_we_exercise.diagram.second.x_axis.first' => 'Zeit',
    'home.how_we_exercise.diagram.second.graph.first' => '30 Minuten',
    'home.how_we_exercise.diagram.second.graph.second' => '1-2 Tage',
    'home.how_we_exercise.diagram.second.graph.third' => 'Verbrennt Fett weiter ohne Training',
    'home.how_we_exercise.left.title' => 'Traditionelle Workouts sind nicht effektiv. Sie verbrennen nur wenig Fett und gleichzeitig baust du Muskelmasse ab',
    'home.how_we_exercise.left.text1' => 'Wir haben unzählige Stunden im Fitnesstudio verbracht und wie üblich abwechselnd Kraft und Kondition trainiert. Die Resultate sind normalerweise enttäuschend für uns.',
    'home.how_we_exercise.left.text2' => 'Das Problem liegt darin, wie wir trainieren. Traditionelle Übungen trainieren lediglich unsere langsam-kontrahierenden Muskelfasern. Das ist super für Langstreckenläufer, aber nicht so effektiv, wenn wir Fett verbrennen wollen, da diese Muskelfasern sehr effizient Sauerstoff konsumieren. Zu effizient, wenn wir Gewicht verlieren wollen.',
    'home.how_we_exercise.left.text3' => 'Gewichtszunahme, Müdigkeit, Diabetes, Osteoporose',
    'home.how_we_exercise.right.title' => 'Hochleistungs-Workout ist die Lösung. Nach dem Training wirst du noch 24 - 48 Stunden weiter Fett verbrennen',
    'home.how_we_exercise.right.text1' => 'Um das meiste Fett zu verbrennen, müssen wir 2 Trainingsarten kombinieren: Ausdauertraining und hochintensives Training. Das Result ist explosiv.',
    'home.how_we_exercise.right.text2' => 'Indem wir auch unsere schnell-kontrahierenden Muskelfasern trainiern, wird ein einzigartiges Hormon von unserer Hyphophyse ausgeschüttet. Das menschliche Wachstumshormon HGH ist das Elixir das Lebens, das Veränderungen in unserem Körper beschleunigt. Unser Körper wird noch 24 - 48 Stunden nach unserem Training Fett verbrennen. Das ist perfekt zum Abnehmen.',
    'home.how_we_exercise.right.text3' => 'Gewichtsabnahme, viel Energie, bessere Laune',
    'home.pitch2.title' => 'Bringe deinen Stoffwechsel ins Gleichgewicht<br>und beginne ein besseres Leben',
    'home.pitch2.subtitle' => 'Mit SwitchFit wirst du clever abnehmen, gesund leben und fit werden.',
    'home.pitch3.title' => 'Fühle dich toll, sieh umwerfend aus',
    'home.pitch3.subtitle' => 'Ein effektives Fitness- und Ernährungsprogramm.',
    'home.pitch3.text1' => 'Würdest du manchmal am liebsten den ganzen Tag zu Hause im Bett bleiben? Fehlt dir manchmal die notwendige Energie, um dein Leben voll auszuschöpfen? Dann ist es jetzt an an der Zeit, dein Leben wieder in vollen Zügen zu geniessen.',
    'home.pitch3.text2' => 'Durch das SwitchFit Programm wirst du lernen so zu essen und zu trainieren, dass dein Körper dir wieder die Energie gibt, die du brauchst. Motiviert durch unser tiefgehendes Verständnis wie der Körper funktioniert, haben wir ein 8-wöchiges Programm entwickelt, dass Fettverbrennung um ein Vielfaches effektiver macht, bei gleichzeitig weniger Aufwand.',
    'home.eating.title' => 'SwitchFit _tag_Ernährung_endtag_',
    'home.eating.item1' => 'Wähle aus hunderten von Rezepten',
    'home.eating.item2' => 'Einfach, spannend und lecker',
    'home.eating.item3' => 'Geeignet für Vegetarier und Allergiker',
    'home.pitch4.title' => 'Es ist einfacher als du denkst',
    'home.pitch4.subtitle' => 'SwitchFit hilft dir mit weniger Aufwand mehr zu erreichen.',
    'home.pitch4.text1' => 'Du willst abnehmen, aber denkst, dass es zu schwierig ist? Du willst nicht auf Genuss verzichten und deine heutigen Essgewohnheiten gegen eine langweilige, strenge Diät eintauschen? Wir auch nicht! Und mit SwitchFit musst du das auch nicht.',
    'home.pitch4.text2' => 'Durch SwitchFit erlernst du gesunde Essgewohnheiten, die dein Leben einfacher, nicht schwerer machen. Das Programm lässt sich leicht in den Alltag integrieren und es gibt nicht so viele Einschränkungen wie bei anderen Diäten. Wir statten dich mit den richtigen Mitteln aus, um motiviert zu bleiben, Spass zu haben und garantiert erfolgreich zu sein. Los geht\'s!',
    'home.fitness.title' => 'SwitchFit _tag_Fitness_endtag_',
    'home.fitness.item1' => 'Hunderte Übungen für jeden',
    'home.fitness.item2' => 'Einfach nachzumachen',
    'home.fitness.item3' => 'Kein Trainingsequipment benötigt',
    'home.tool.title' => 'SwitchFit _tag_App_endtag_',
    'home.tool.item1' => 'Erstelle wöchentliche Essenspläne und drucke sie aus',
    'home.tool.item2' => 'Kontrolliere dich und bleib am Ball',
    'home.tool.item3' => 'Werde zum Fettverbrenner',
    'home.pitch5.title' => 'Eine langfristige Lösung',
    'home.pitch5.subtitle' => 'Entdecke eine neue, gesunde Lebensweise für dich und deine Familie.',
    'home.pitch5.text1' => 'Du bist auf der Suche nach einer Veränderung, aber befürchtest, dass sie nicht lange anhält? Bist du es Leid, schnell wieder zuzunehmen und enttäuscht von Ernährungsprogrammen? SwitchFit ist hier, um das zu verändern!',
    'home.pitch5.text2' => 'Das SwitchFit Programm wird dir in kurzer Zeit helfen, Fett zu verbrennen. Aber der eigentliche Vorteile besteht darin, dass du einen gesunden Lebensstil erlernen wirst, den du langfristig beibehalten kannst, für dich und deine Familie. Du lernst neue Methoden kennen, wie du dein Idealgewicht erreichen und vor allem halten kannst.',
    'home.academy.title' => 'Die Akademie',
    'home.academy.item1' => '8 Module mit verständlichem Inhalt',
    'home.academy.item2' => 'Videos und Texte machen das Lernen einfach',
    'home.academy.item3' => 'Fragebogen, mit denen du dein Wissen testen kannst',
    'home.academy.more' => 'Erfahre mehr über die Akademie',
    'home.pitch6.title' => 'Wir stehen hinter dir',
    'home.pitch6.subtitle' => 'Erhalte Unterstützung von unseren Experten und der Community.',
    'home.pitch6.text1' => 'Du willst dein Leben verändern und deinen Körper in Form bringen, aber du bist es leid dabei ganz alleine zu sein? Du wünschst dir Unterstützung, wenn es mal schwierig wird? Das geht uns allen so. Und deswegen sind wir hier.',
    'home.pitch6.text2' => 'Wir bei SwitchFit unterstützen dich, helfen dir über harte Zeiten hinweg und führen dich zum Erfolg. Unsere Personal Trainers werden all deine Fragen beantworten und dich motivieren am Ball zu bleiben. Mit hunderten Leuten in unserer Community, die alle das gleiche Ziel verfolgen, wirst du dich nie wieder alleine fühlen.',
    'home.personal_trainer.title' => 'Triff Conny Stehli, deinen neuen _tag_Personal Trainer_endtag_',
    'home.personal_trainer.text1' => 'Hallo, ich bin Conny, dein Personal Trainer während unseres 8wöchigen Programms. Gemeinsam werden wir deinen Körper in Form bringen und deine Gesundheit verbessern. Lass uns loslegen!',
    'home.personal_trainer.text2' => 'Conny hat mit Zertifizierung durch den &ldquo;Schweizer Personal Trainer Verband&ldquo; SPTV).<br><br>Steht mit viel Leidenschaft und Freude für Bewegung, Fitness und einen gesunden Lebensstil. Spezialisiert auf Funktionelles Training in allen Formen wie z.B. TRX, Kettlebell und vieles mehr.',
    'home.testimonials.title' => '_tag_Erfolgsgeschichten_endtag_',
    'home.testimonials.text1' => 'Seit ich 12 bin, habe ich über mein Gewicht nachgedacht. Ich konnte keine Diät einhalten, weil ich immer wieder Heisshungerattacken hatte. Das hat mich sehr gestresst, ständig dachte ich über Essen nach. Dank SwitchFit fühlt es sich wie ein neuer Lebensstil an, da ich nicht ständig über Essen nachdenken muss und keinen Heisshunger mehr habe. Ich fühle mich wie eine ganz neue Person, die sich auf wirklich wichtige Dinge konzentrieren kann.',
    'home.testimonials.text2' => 'Seitdem ich mit SwitchFit angefangen habe, stehe ich Nachts nicht mehr auf, um meinen Heisshunger zu stillen. Früher plünderte ich regelmässig um 2 Uhr Nachts den Kühlschrank. Schon während der ersten Wochen bei SwitchFit merkte ich, dass mich das überhaupt nicht mehr interessierte. Mein Heisshunger war wie weggeblasen und meine Mitternachtssnacks gehören der Geschichte an.',
    'home.conclusion.title' => 'Bist du bereit für ein gesünderes, energiegeladenes Ich?',
    'home.conclusion.left.title' => 'Mache jetzt mit, erhalte vollen Zugriff',
    'home.conclusion.left.item1' => '8-wöchiges Programm',
    'home.conclusion.left.item2' => 'Unterstützung und Anleitung von Personal Trainers',
    'home.conclusion.left.item3' => 'Hunderte von Rezepten in der SwitchFit Küche',
    'home.conclusion.left.item4' => 'Hunderte von Fitnessübungen im SwitchFit Gym',
    'home.conclusion.left.item5' => '8 Wissensmodule in der Akademie',
    'home.conclusion.left.item6' => 'Erstelle Essens- und Fitnesspläne in deinem Dashboard',
    'home.conclusion.right.title' => 'Preis',
    'home.conclusion.right.text1' => '50 % Rabatt',
    'home.conclusion.or' => 'oder',
    'home.conclusion.btn1' => 'Lerne die App kennen',
    'home.conclusion.btn2' => 'Jetzt mitmachen!',
    'home.take_tour' => 'Lerne die App kennen',
    'tour.nav.title' => 'Lerne die _tag_SwitchFit App_endtag_ kennen',
    'tour.nav.dashboard' => 'Dashboard',
    'tour.nav.kitchen' => 'Küche',
    'tour.nav.gym' => 'Gym',
    'tour.nav.academy' => 'Akademie',
    'tour.dashboard.title' => 'Das _tag_Dashboard_endtag_',
    'tour.dashboard.subtitle' => 'Es ist einfach Erfolg zu planen.',
    'tour.kitchen.title' => 'Die _tag_Küche_endtag_',
    'tour.kitchen.subtitle' => 'Dein kulinarischer Himmel.',
    'tour.gym.title' => 'Das _tag_Gym_endtag_',
    'tour.gym.subtitle' => 'Intensiv, effektiv & macht Spass.',
    'tour.academy.title' => 'Die _tag_Akademie_endtag_',
    'tour.academy.subtitle' => 'Die Quelle für ein gesundes Leben.',
    'tour.pitch1.title' => 'Deine ganze Woche geplant',
    'tour.pitch1.subtitle' => 'Wöchentliches Ernährungs- und Fitnessprogramm.',
    'tour.pitch1.text1' => 'Das Leben kann ganz schön hektisch sein. SwitchFit macht es dir besonders leicht ein Ernährungs- und Fitnessprogramm in deinen Alltag zu integrieren.',
    'tour.pitch1.text2' => 'Im Dashboard kannst du deine Reise zu einem gesünderen Ich schnell organisieren und überblicken. In den ersten 2 Wochen hilft dir ein vordefinierter Plan mit Mahlzeiten und Trainingsübungen, deinen Stoffwechsel auf Fettverbrennung umzustellen. Danach kannst du dir entweder einen eigenen Plan zusammenstellen oder mit unserem Plan weitermachen.',
    'tour.pitch1.feature1.title' => 'Planen, ausdrucken',
    'tour.pitch1.feature1.text' => 'Erstelle ganz einfach deinen Essens- und Fitnessplan und hab ihn überall dabei.',
    'tour.pitch1.feature2.title' => 'Oder lasse uns planen',
    'tour.pitch1.feature2.text' => 'Keine Zeit? Wir erstellen deinen Plan mit tollen Gerichten und Übungen.',
    'tour.pitch1.feature3.title' => 'Der Party Tag',
    'tour.pitch1.feature3.text' => 'Einmal pro Woche kannst du dich entspannen und essen, was du möchtest.',
    'tour.pitch2.title' => 'Bleibe am Ball',
    'tour.pitch2.subtitle' => 'Kontrolliere deinen Fortschritt.',
    'tour.pitch2.text1' => 'Jetzt wird es ganz einfach deinen Fortschritt zu beobachten und am Ball zu bleiben. Vergiss lästiges Kalorienzählen, mit uns geht es leichter!',
    'tour.pitch2.text2' => 'Jede Woche setzt du dir ein Gewichtsziel. Damit du das auch erreichst, dokumentierst du Heisshungerattacken, Hungergefühle und wie viel Wasser du trinkst. So erhältst du ein besseres Körpergefühl und kannst Heisshungerattacken leichter kontrollieren. Und wenn du mal vom Plan abweichst, machen wir dich darauf aufmerksam, damit du schnell wieder auf die richtige Bahn gerätst.',
    'tour.pitch2.feature1.title' => 'Verstehe deinen Fortschritt',
    'tour.pitch2.feature1.text' => 'Verfolge wöchentlich deine Entwicklung mit Hilfe von detaillierten Graphen.',
    'tour.pitch2.feature2.title' => 'Wir helfen dir dran zu bleiben',
    'tour.pitch2.feature2.text' => 'Wir benachrichtigen dich automatisch, wenn du etwas verbessern kannst.',
    'tour.pitch2.feature3.title' => 'Deine Erfolge werden belohnt',
    'tour.pitch2.feature3.text' => 'Schalte Belohnungen frei, indem du bestimmte Programmziele erreichst.',
    'tour.pitch3.title' => 'Rezepte für jeden Anlass',
    'tour.pitch3.subtitle' => 'Hunderte einfache und spannende Rezepte',
    'tour.pitch3.text1' => 'Eine gesunde Ernährung beizubehalten, die lecker schmeckt und dich mit Energie versorgt, ist viel leichter als du denkst. Besonders einfach wird es mit der SwitchFit Küche.',
    'tour.pitch3.text2' => 'Dein 8-wöchiges Ernährungsprogramm besteht aus vielen leckeren Rezepten, die deinen Stoffwechsel dabei unterstützen mehr Fett zu verbrennen und dich mit Energie versorgen. Das Beste daran, die ganze Familie wird es lieben. Es gibt auch viele tolle vegetarische und glutenfreie Rezepte.',
    'tour.pitch3.text3' => 'Bei uns gibt es auch tolle vegetarische und glutenfreie Rezepte.',
    'tour.pitch3.feature1.title' => 'Verbrenne Fett',
    'tour.pitch3.feature1.text' => 'Hunderte Gerichte werden deine Energie ankurbeln und Heisshunger reduzieren.',
    'tour.pitch3.feature2.title' => 'Essen für jedermann',
    'tour.pitch3.feature2.text' => 'Deine ganze Familie wird die Gerichte lieben. Auch Vegetarier und Allergiker.',
    'tour.pitch3.feature3.title' => 'Detox Tag',
    'tour.pitch3.feature3.text' => 'Entschlacke deinen Körper mit speziellen Rezepten. Er wird dir dafür danken.',
    'tour.pitch4.title' => 'Keine Sorge, es geht ganz einfach',
    'tour.pitch4.subtitle' => 'Der einfache Weg lecker zu kochen.',
    'tour.pitch4.text1' => 'Die Rezepte des Programms sind sehr gesund. Aber sind sie auch einfach, interessant und lecker? Darauf kannst du dich verlassen.',
    'tour.pitch4.text2' => 'Wir haben unser Ernährungsprogram so aufgebaut, dass es für jeden geeignet ist und man es einfach in den Alltag einbauen kann. Egal, ob du zu Hause, im Restaurant oder auf der Arbeit bist. Jeden Tag kannst du Gerichte aus 3 verschiedenen Kategorien (A, B, C) flexibel auswählen und austauschen. So wird dafür gesorgt, dass dein Körper bekommt, was er braucht.',
    'tour.pitch4.feature1.title' => 'Einfach umzusetzen',
    'tour.pitch4.feature1.text' => 'Detaillierte Rezeptvorgaben, um leckere Gerichte zuzubereiten.',
    'tour.pitch4.feature2.title' => 'Dein individueller Plan',
    'tour.pitch4.feature2.text' => 'Stöbere durch alle Rezepte und füge deine Favoriten zu deinem Dashboard hinzu.',
    'tour.pitch4.feature3.title' => 'Verstehe Ernährung',
    'tour.pitch4.feature3.text' => 'Erhalte Erklärungen über die Vorteile verschiedener Nahrungsmittel.',
    'tour.pitch5.title' => 'Fitness für jeden',
    'tour.pitch5.subtitle' => 'Hunderte effektiver Übungen.',
    'tour.pitch5.text1' => 'So effektiv hast du noch nie trainiert, um Gewicht zu verlieren und deinen Körper in Form zu bringen. Mit SwitchFit sind all deine Bemühungen zielgerichtet.',
    'tour.pitch5.text2' => 'Das Fitnessprogramm ist eine Kombi verschiedener Übungen, die die Fettverbrennung deines Stoffwechsels ankurbeln, sogar noch 24 - 48 Stunden nach dem Training. Dein Programm umfasst ein Mix aus traditionellen Ausdauerübungen wie Laufen, hochintensives Training wie BURN und Dehnungsübungen wie z.B. Yoga.',
    'tour.pitch5.text3' => 'Es gibt Übungen für jeden: Egal, ob jung oder alt, gesund oder angeschlagen oder ob du schon Trainingsausstattung hast oder nicht.',
    'tour.pitch5.feature1.title' => 'Übungen jeder Art',
    'tour.pitch5.feature1.text' => 'Kombiniere verschiedene Übungen, um maximal Fett zu verbrennen.',
    'tour.pitch5.feature2.title' => 'Filtern und auswählen',
    'tour.pitch5.feature2.text' => 'Finde ganz einfach die richtigen Übungen und erstelle dir deinen Plan.',
    'tour.pitch5.feature3.title' => 'Übungen für jeden!',
    'tour.pitch5.feature3.text' => 'Egal ob jung oder alt, fit oder nicht, mit Equipment oder ohne.',
    'tour.pitch6.title' => 'Weniger Zeit, mehr Resultate',
    'tour.pitch6.subtitle' => 'Ein praktisches und effektives Fitnessprogramm.',
    'tour.pitch6.text1' => 'Deinen Plan zu verfolgen und motiviert zu bleiben, ist die Garantie für gute Resultate. Mit SwitchFit lernst du clever zu trainieren, damit all deine Bemühungen zählen.',
    'tour.pitch6.text2' => 'Finde Übungen, die einfach nachzumachen sind, egal wo du am liebsten trainierst: Ob zu Hause, draussen im Park oder im Fitnesstudio. Kombiniere normale Übungen mit HIIT und BURN und trainiere auf einem ganz neuen Level. Wir zeigen dir, wie du durch gezieltes Training das einzigartige Hormon HGH (Human Growth Hormon) freisetzt, wodurch dein Körper schneller für Veränderungen bereit ist.',
    'tour.pitch6.feature1.title' => 'Einfach nachzumachen',
    'tour.pitch6.feature1.text' => 'Detaillierte Trainings- anleitungen erleichtern dir den Start.',
    'tour.pitch6.feature2.title' => 'Dein individueller Plan',
    'tour.pitch6.feature2.text' => 'Stöbere durch alle Übungen und füge deine Favoriten zu deinem Dashboard hinzu.',
    'tour.pitch6.feature3.title' => 'Verstehe Fitness',
    'tour.pitch6.feature3.text' => 'Erhalte detaillierte Erklärungen zu den verschiedenen Übungen.',
    'tour.pitch7.title' => 'Lerne und verstehe',
    'tour.pitch7.subtitle' => 'Ein Kurs mit 8 Modulen.',
    'tour.pitch7.text1' => 'Mit SwitchFit ist es möglich eine gesunde Ernährungsweise beizubehalten und langfristig abzunehmen. In unserer Akademie lernst du alles, was du dafür wissen musst.',
    'tour.pitch7.text2' => 'Das Programm besteht aus 8 Modulen, auf die du zugreifen kannst, um die “Warum’s” und “Wie’s” des Essens- und Ernährungs-Einmaleins zu lernen. Modul für Modul lernst du Basis und Fortgeschrittenen Wissen durch Videos, Fotos und Texte. Du kannst dich selbst testen und Zertifikate erwerben.',
    'tour.pitch7.feature1.title' => 'Einfach zu verdauen',
    'tour.pitch7.feature1.text' => 'Lerne neues über Ernährung und hab gleichzeitig Spass dabei.',
    'tour.pitch7.feature2.title' => 'Teste dich',
    'tour.pitch7.feature2.text' => 'Für jedes Modul kannst du einen Fragenkatalog absolvieren.',
    'tour.pitch7.feature3.title' => 'Lass dich zertifizieren',
    'tour.pitch7.feature3.text' => 'Schliess den ganzen Kurs ab und erhalte dafür ein Zertifikat.',
    'about.title' => 'Lerne die Gründer kennen',
    'about.subtitle' => 'Directors Channette Kulzer and Peter Cosgrove',
    'about.text1' => '_tag_Channette_endtag_ wurde als Tochter von Schweizer-Deutschen Eltern im Schweizer Ski-Paradies Davos geboren.<br>Da sie den grössten Teil ihres Lebens in den USA und Australien verbracht hat, hat sie eine international geprägte Herangehensweise an Gesundheitsfragen.',
    'about.text2' => '_tag_Channette_endtag_ ist promovierter Doktor in Veterinärmedizin, hat eine abgeschlossene Ausbildung zur Homöopathin und erforscht mit Begeisterung neue Gebiete der Ernährungswissenschaft und Gesundheit. _tag_Channette_endtag_ ist für den Bereich der Ernährung und Biochemie auf SwitchFit verantwortlich und hat mit Bravour den akademischen Bereich der Webseite mit neuesten Erkenntnissen auf diesem Gebiet bereichert.',
    'about.text3' => '_tag_Peter Cosgrove_endtag_ wurde in Australien geboren, wo er auch den grössten Teil seines Lebens verbracht hat und einige der grössten und erfolgreichsten Fitnesszentren Australiens besessen hat. Die von ihm geführten Clubs sind Gewinner zahlreicher Preise und Awards, unter anderem wurde eines dieser Fitnesszenter zum „Best Health“ –Club der Stadt Victoria (Australien) vor drei Jahren gekürt.<br>_tag_Peter_endtag_ war Sportlehrer bevor er sich der Fitnessindustrie zuwandte und Tausenden von Menschen den erfolgreichen Einstieg in die Fitness ermöglichte.',
    'about.text4' => '_tag_Peter_endtag_ und _tag_Channette_endtag_ leben seit einiger Zeit in Zürich und haben die Herausfoderung angenommen, eine deutschsprachigeWebseite, die begeistert, zu erschaffen.',
    'privacy.title' => 'Datenschutzerklärung',
    'terms.title' => 'Allgemeine Geschäftsbedingungen',
    'imprint.title' => 'Impressum',
    'register.title' => 'Jede grosse Reise beginnt mit<br>einem ersten, kleinen Schritt!',
    'register.sidebar.title' => 'Der intelligente Weg schlank, stark und gesund zu werden, ein leben lang',
    'register.sidebar.link' => 'Kontaktiere uns.',
    'register.subtitle' => 'Wir fangen jeden Montag an!',
    'register.choose_a_course' => 'Wählen Sie einen Kurs',
    'register.to_pay' => 'Kosten',
    'register.secure_payment' => 'Sichere Kreditkartenzahlung mit 256 Bit SSL-Verschlüsselung',
    'register.form.loading' => 'Bearbeitung...',
    'payment.success.title' => 'Vielen Dank für deine Anmeldung.',
    'payment.success.share' => 'Teile es mit der Welt',
    'payment.success.text' => '<h2 class=\'register-subtitle\'>Du hast von uns bereits eine Bestätigung per E-Mail erhalten.</h2><br>
(Bitte prüfe deinen SPAM-Ordner, falls du diese E-Mail nicht finden kannst)',
    'payment.success_paid.title' => 'Danke, deine Bezahlung war Erfolgreich!',
    'payment.success_paid.link_to_app' => 'Gehe jetzt zu Switchfit',
    'payment.cancel.title' => 'Zahlung war nicht erfolgreich!',
    'payment.cancel.text' => 'Zahlungsstatus',
    'payment.cancel.status' => 'Stornieren',
    'payment.not_valid.title' => 'Es gab ein Problem mit der Zahlung',
    'payment.not_valid.text' => 'Bitte gehen Sie zurück und Ihre Daten vor einem erneuten Versuch zu überprüfen.',
    'payment.summary.title' => 'Bezahle jetzt deinen Kurs',
    'payment.summary.course_price' => 'Kurspreis',
    'payment.summary.share_text' => 'Teile auf Facebook und erhalte %discount% %currency% Rabatt',
    'payment.summary.submit' => 'Jetzt bezahlen',
    'payment.summary.submit_shared' => 'Jetzt bezahlen mit %discount% %currency% Rabatt',
    'contact.title' => 'Kontakt',
    'contact.text1' => 'Hast du Fragen? Dann fülle einfach das Formular aus und einer unserer Experten wird sich in den nächsten 24 - 48 Stunden bei dir melden.',
    'contact.text2' => 'Einer unserer Experten wird dir schnellstmöglich antworten.',
    'contact.success' => 'Danke für deine Anfrage. Wir melden uns schnellstmöglich bei dir.',
    'contact.form.name' => 'Name',
    'contact.form.email' => 'E-Mail',
    'contact.form.text' => 'Frage',
    'contact.form.submit' => 'Jeztz senden',
    'contact.form.loading' => 'Bearbeitung...',
    'contact.form.message_sent' => 'Danke für deine Anfrage. Wir melden uns schnellstmöglich bei dir.',
    'contact.form.placeholder.text' => 'Wann ist der nächste Kurs?',
    'footer.blog' => 'Blog',
    'footer.privacy' => 'Datenschutzerklärung',
    'footer.terms' => 'Allgemeine Geschäftsbedingungen',
    'footer.imprint' => 'Impressum',
    'footer.goodies.text1' => 'Kostenloser 3-Stufen-Plan',
    'footer.goodies.text2' => '_tag_Mit unserem KOSTENLOSEN 3 Stufen Plan_endtag_ kurbelst du deinen Stoffwechsel an!',
  ),
  'HWIOAuthBundle' => 
  array (
    'header.connecting' => 'Verbinden',
    'header.success' => '\'%name%\' erfolgreich mit Benutzeraccount verbunden!',
    'header.register' => 'Neuen Benutzeraccount mit dem Namen \'%name%\' erstellen',
    'header.registration_success' => 'Benutzeraccount \'%username%\' erfolgreich angelegt und verknüpft!',
    'connect.confirm.cancel' => 'Abbrechen',
    'connect.confirm.submit' => 'Benutzeraccount verbinden',
    'connect.confirm.text' => 'Sicher, dass Sie Ihren %service% Account \'%name%\' mit Ihrem aktuellen Benutzeraccount verknüpfen möchten?',
    'connect.registration.cancel' => 'Abbrechen',
    'connect.registration.submit' => 'Benutzeraccount registrieren',
  ),
));


return $catalogue;
