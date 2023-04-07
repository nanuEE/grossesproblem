<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/login/languages/de.yaml',
    'modified' => 1679506277,
    'size' => 13073,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => 'Benutzername',
            'EMAIL' => 'E-Mail',
            'USERNAME_EMAIL' => 'Benutzername/E-Mail',
            'PASSWORD' => 'Passwort',
            'ACCESS_DENIED' => 'Zugang verweigert…',
            'LOGIN_FAILED' => 'Login fehlgeschlagen…',
            'LOGIN_SUCCESSFUL' => 'Sie wurden erfolgreich angemeldet.',
            'BTN_LOGIN' => 'Anmelden',
            'BTN_LOGOUT' => 'Abmelden',
            'BTN_FORGOT' => 'Vergessen',
            'BTN_REGISTER' => 'Registrieren',
            'BTN_RESET_PASSWORD' => 'Passwort zurücksetzen',
            'BTN_RESET' => 'Reset',
            'BTN_SUBMIT' => 'Submit',
            'BTN_SUBMIT_PROFILE' => 'Submit',
            'BTN_SEND_INSTRUCTIONS' => 'Sende Anweisungen zum Zurücksetzen',
            'RESET_LINK_EXPIRED' => 'Der Link zum Zurücksetzen ist abgelaufen. Bitte erneut versuchen.',
            'RESET_PASSWORD_RESET' => 'Das Passwort wurde zurückgesetzt',
            'RESET_INVALID_LINK' => 'Es wurde ein ungültiger Link zum Zurücksetzen verwendet. Bitte erneut versuchen.',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Die Anweisungen zum Zurücksetzen Ihres Passworts wurden per E-Mail gesendet.',
            'FORGOT_FAILED_TO_EMAIL' => 'Das Versenden der Anweisung per E-Mail ist fehlgeschlagen. Bitte später erneut versuchen.',
            'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Das Passwort für %s kann nicht zurückgesetzt werden. Es ist keine E-Mail-Adresse hinterlegt.',
            'FORGOT_CANNOT_RESET_EMAIL_NO_PASSWORD' => 'Das Passwort für %s kann nicht zurückgesetzt werden. Diese E-Mail ist mit einem Remote-Account verknüpft.',
            'FORGOT_USERNAME_DOES_NOT_EXIST' => 'Der Benutzer mit dem Benutzername <b>%s</b> existiert nicht.',
            'FORGOT_EMAIL_NOT_CONFIGURED' => 'Das Passwort kann nicht zurückgesetzt werden, da die Website ist nicht zum Versenden von E-Mails konfiguriert.',
            'FORGOT_EMAIL_SUBJECT' => 'Passwort zurückzusetzen für %s',
            'FORGOT_EMAIL_BODY' => '<h1>Passwort Zurücksetzen</h1><p>Hallo %1$s,</p><p>Es wurde ein Anfrage auf <b>%4$s</b> gestellt, um Ihr Passwort zu ändern.</p><p><br /><a href="%2$s" class="btn-primary">Klicken Sie hier, um Ihr Passwort zurückzusetzen</a><br /><br /></p><p>Alternativ kopieren Sie die folgende URL in die Adresszeile Ihres Browsers:</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Mit freundlichen Grüßen,<br /><br />%3$s</p>',
            'REMEMBER_ME' => 'Angemeldet bleiben',
            'REMEMBER_ME_HELP' => 'Speichert einen Cookie im Browser, welcher eine fortwährende Anmeldung sicherstellt.',
            'REMEMBER_ME_STOLEN_COOKIE' => 'Jemand anderes hat Ihre Zugangsdaten verwendet, um auf diese Seite zuzugreifen! Alle Sitzungen wurden ausgeloggt. Bitte melden Sie sich mit Ihren Zugangsdaten an und überprüfen Sie Ihre Daten.',
            'BUILTIN_CSS' => 'Nutze das integrierte Plugin CSS',
            'BUILTIN_CSS_HELP' => 'Nutze das CSS, welches vom Admin Plugin bereitgestellt werden',
            'ROUTE' => 'Anmeldepfad',
            'ROUTE_HELP' => 'Route zu einer benutzerdefinierten Anmeldeseite, die von Ihrem Theme bereitgestellt wird.',
            'ROUTE_REGISTER' => 'Registrierungspfad',
            'ROUTE_REGISTER_HELP' => 'Pfad zur Registrierungsseite. Stellen Sie dies ein, wenn Sie die eingebaute Registrierungsseite verwenden möchten. Lassen Sie das Feld leer, wenn Sie ein eigenes Anmeldeformular haben.',
            'USERNAME_NOT_VALID' => 'Der Benutzername sollte zwischen 3 und 16 Zeichen enthalten, einschließlich Kleinbuchstaben, Zahlen, Unterstrichen und Bindestrichen. Großbuchstaben, Leerzeichen und Sonderzeichen sind nicht zulässig',
            'USERNAME_NOT_AVAILABLE' => 'Der Benutzername %s existiert bereits. Bitte wählen Sie einen anderen Benutzernamen.',
            'EMAIL_NOT_AVAILABLE' => 'Die E-Mail-Adresse %s ist bereits vorhanden. Bitte wählen Sie eine andere E-Mail-Adresse aus.',
            'PASSWORD_NOT_VALID' => 'Das Passwort muss mindestens eine Zahl und einen Groß- und Kleinbuchstaben sowie mindestens 8 oder mehr Zeichen enthalten.',
            'PASSWORDS_DO_NOT_MATCH' => 'Die Passwörter stimmen nicht überein. Überprüfen Sie, ob Sie das gleiche Passwort zweimal eingegeben haben.',
            'USER_NEEDS_EMAIL_FIELD' => 'Der Benutzer benötigt ein E-Mail Feld.',
            'EMAIL_SENDING_FAILURE' => 'Beim Senden der E-Mail ist ein Fehler aufgetreten.',
            'ACTIVATION_EMAIL_SUBJECT' => 'Aktivieren Sie Ihren Account bei %s',
            'ACTIVATION_EMAIL_BODY' => '<h1>Account Aktivierung</h1><p>Hallo %1$s, </p><p>Ihr Konto bei <b>%3$s</b> wurde erfolgreich erstellt, aber Sie können sich erst anmelden, wenn es aktiviert ist.</p><p><br/><a href="%2$s" class="btn-primary">Account jetzt aktivieren</a><br/><br/></p><p>Alternativ kopieren Sie die folgende URL in die Adresszeile Ihres Browsers:</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>Mit freundlichen Grüßen,<br/><br/>%4$s</p>',
            'ACTIVATION_NOTICE_MSG' => 'Hallo %s, Ihr Konto wurde erstellt. Bitte überprüfen Sie Ihre E-Mail, um es vollständig zu aktivieren',
            'WELCOME_EMAIL_SUBJECT' => 'Willkommen bei %s',
            'WELCOME_EMAIL_BODY' => '<h1>Account erstellt</h1><p>Hallo %1$s, </p><p>Ihr Konto bei <b>%3$s</b> wurde erfolgreich erstellt.</p><p><br/><a href="%2$s" class="btn-primary">Jetzt anmelden</a><br/><br/></p><p>Alternativ kopieren Sie die folgende URL in die Adresszeile Ihres Browsers:</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>Mit freundlichen Grüßen,<br/><br/>%4$s</p>',
            'WELCOME_NOTICE_MSG' => 'Hallo %s, Ihr Account wurde erfolgreich erstellt',
            'NOTIFICATION_EMAIL_SUBJECT' => 'Neuer Benutzer bei %s',
            'NOTIFICATION_EMAIL_BODY' => '<h1>Neuer Benutzer</h1><p>Hallo, ein neuer Benutzer hat sich bei %1$s registriert.</p><p><ul><li>Benutzername: <b>%2$s</b></li><li>E-Mail: <b>%3$s</b></ul><p><p><br/><a href="%4$s" class="btn-primary">%1$s aufrufen</a><br/><br/></p>',
            'EMAIL_FOOTER' => 'GetGrav.org',
            'ACTIVATION_LINK_EXPIRED' => 'Der Aktivierungslink ist abgelaufen.',
            'USER_ACTIVATED_SUCCESSFULLY' => 'Benutzer wurde erfolgreich aktiviert.',
            'INVALID_REQUEST' => 'Ungültige Anfrage.',
            'USER_REGISTRATION' => 'Benutzerregistrierung.',
            'USER_REGISTRATION_ENABLED_HELP' => 'Benutzerregistrierung aktivieren.',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Doppelt eingegebenes Passwort bestätigen.',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validieren und vergleichen Sie zwei verschiedene Felder für die Passwörter mit den Namen `password1` und` password2`. Aktivieren Sie diese Option, wenn Sie im Anmeldeformular zwei Passwortfelder haben.',
            'SET_USER_DISABLED' => 'Benutzer als deaktiviert festlegen',
            'SET_USER_DISABLED_HELP' => 'Am besten zusammen mit der E-Mail \'Aktivierungs-E-Mail senden\' verwenden. Fügt den Benutzer zu Grav hinzu, setzt ihn jedoch als deaktiviert',
            'LOGIN_AFTER_REGISTRATION' => 'Benutzer nach Registrierung anmelden.',
            'LOGIN_AFTER_REGISTRATION_HELP' => 'Meldet den Benutzer direkt nach der Registrierung an. Wenn eine E-Mail-Aktivierung erforderlich ist, wird der Benutzer sofort nach der Aktivierung des Kontos angemeldet.',
            'SEND_ACTIVATION_EMAIL' => 'Aktivierungs-E-Mail senden',
            'SEND_ACTIVATION_EMAIL_HELP' => 'Sendet eine E-Mail an den Benutzer, um seinen Account zu aktivieren. Aktivieren Sie die Option \'Benutzer als deaktiviert festlegen\', wenn Sie diese Funktion verwenden, sodass der Benutzer als deaktiviert festgelegt wird und eine E-Mail gesendet wird, um das Konto zu aktivieren',
            'SEND_NOTIFICATION_EMAIL' => 'Benachrichtigungs-E-Mail senden',
            'SEND_NOTIFICATION_EMAIL_HELP' => 'Benachrichtigt den Seiten-Administrator, dass sich ein neuer Benutzer registriert hat. Die E-Mail wird in der E-Mail-Plugin-Konfiguration an das Feld \'to\' gesendet',
            'SEND_WELCOME_EMAIL' => 'Sende Willkommens-E-Mail',
            'SEND_WELCOME_EMAIL_HELP' => 'Sendet eine E-Mail an den neu registrierten Benutzer',
            'DEFAULT_VALUES' => 'Standardwerte',
            'DEFAULT_VALUES_HELP' => 'Liste der Feldnamen und der zugehörigen Werte, die standardmäßig dem Benutzerprofil (Yaml-Datei) hinzugefügt werden, ohne vom Benutzer konfiguriert zu werden. Trennen Sie mehrere Werte durch ein Komma ohne Leerzeichen zwischen den Werten.',
            'ADDITIONAL_PARAM_KEY' => 'Parameter',
            'ADDITIONAL_PARAM_VALUE' => 'Wert',
            'REGISTRATION_FIELDS' => 'Registrierungsfelder',
            'REGISTRATION_FIELDS_HELP' => 'Fügen Sie die Felder hinzu, die der Yaml-Datei des Benutzers hinzugefügt werden. Felder, die hier nicht aufgeführt sind, werden nicht hinzugefügt, auch wenn sie im Anmeldeformular vorhanden sind.',
            'REGISTRATION_FIELD_KEY' => 'Feldname',
            'REDIRECT_AFTER_LOGIN' => 'Weiterleitung nach Login.',
            'REDIRECT_AFTER_LOGIN_HELP' => 'Benutzerdefinierte Seite zu der, nach erfolgreichem Login, weitergeleitet wird.',
            'REDIRECT_AFTER_LOGOUT' => 'Weiterleitung nach Abmelden.',
            'REDIRECT_AFTER_LOGOUT_HELP' => 'Benutzerdefinierte Seite zu der, nach dem Abmelden des Benutzers, weitergeleitet wird.',
            'REDIRECT_AFTER_REGISTRATION' => 'Weiterleitung nach Registrierung.',
            'REDIRECT_AFTER_REGISTRATION_HELP' => 'Benutzerdefinierte Seite zu der, nach Abschluss der Registrierung, weitergeleitet wird.',
            'OPTIONS' => 'Optionen',
            'EMAIL_VALIDATION_MESSAGE' => 'Muss eine gültige E-Mail-Adresse sein.',
            'PASSWORD_VALIDATION_MESSAGE' => 'Das Passwort muss mindestens eine Zahl und einen Groß- und Kleinbuchstaben sowie mindestens 8 oder mehr Zeichen enthalten.',
            'TIMEOUT_HELP' => 'Legt das Sitzungszeitlimit in Sekunden fest, wenn \'Angemeldet bleiben\' vom Benutzer aktiviert und überprüft wird. Das Minimum ist 604800, was einer Woche entspricht.',
            'GROUPS_HELP' => 'Liste der Gruppen, denen neu registrierte Benutzer zugewiesen werden, falls vorhanden.',
            'SITE_ACCESS_HELP' => 'Liste der Seiten, auf die neu registrierte Benutzer Zugriff haben. Beispiel: `login` -> `true`',
            'WELCOME' => 'Willkommen',
            'REDIRECT_AFTER_ACTIVATION' => 'Weiterleitung nach Benutzeraktivierung',
            'REDIRECT_AFTER_ACTIVATION_HELP' => 'Wird verwendet, wenn der Benutzer das Konto per E-Mail aktivieren muss. Einmal aktiviert, wird diese Seite angezeigt',
            'REGISTRATION_DISABLED' => 'Registrierung deaktiviert',
            'USE_PARENT_ACL_LABEL' => 'Übergeordnete Zugriffsregeln verwenden',
            'USE_PARENT_ACL_HELP' => 'Verwende übergeordneten Zugriffsregeln, wenn keine Regeln definiert sind.',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Schütze auch die Medien, von Login-geschützten Seiten."',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Wenn diese Option aktiviert ist, ist das Medium einer, durch einen Login geschützten, Seite ebenfalls Login-geschützt und kann nur angezeigt werden, wenn Sie angemeldet sind.',
            'SECURITY_TAB' => 'Sicherheit',
            'MAX_RESETS_COUNT' => 'Max. Anzahl an Versuchen, um das Passwort zurücksetzen.',
            'MAX_RESETS_COUNT_HELP' => '\'Flood protection\' Einstellung, um das Passwort zurücksetzen (0 - nicht begrenzt)',
            'MAX_RESETS_INTERVAL' => 'Max. Intervall an Versuchen, um das Passwort zurücksetzen.',
            'MAX_RESETS_INTERVAL_HELP' => 'Zeitintervall für die max. Anzahl an Versuchen das Passwort zurückzusetzen.',
            'FORGOT_CANNOT_RESET_IT_IS_BLOCKED' => 'Kann das Passwort für %s nicht zurücksetzen, die Funktion zum Zurücksetzen des Passworts wurde vorübergehend blockiert. Bitte versuchen Sie es später erneut (maximal %s Minuten)',
            'MAX_LOGINS_COUNT' => 'Max. Anzahl an Anmeldeversuche',
            'MAX_LOGINS_COUNT_HELP' => '\'Flood protection\' Einstellung (0 - nicht begrenzt)',
            'MAX_LOGINS_INTERVAL' => 'Max. Login Intervall',
            'MAX_LOGINS_INTERVAL_HELP' => 'Das max. Zeitintervall für Anmeldeversuche.',
            'TOO_MANY_LOGIN_ATTEMPTS' => 'Zu viele fehlgeschlagene Anmeldeversuche in der konfigurierten Zeit (%s Minuten)',
            'SECONDS' => 'Sekunden',
            'RESETS' => 'Resets',
            'ATTEMPTS' => 'Versuche',
            'ROUTES' => 'Pfade',
            'ROUTE_FORGOT' => 'Pfad für \'Passwort vergessen\'',
            'ROUTE_RESET' => 'Pfad für \'Passwort zurücksetzen\'',
            'ROUTE_PROFILE' => 'Benutzerprofil Pfad',
            'ROUTE_ACTIVATE' => 'Benutzeraktivierung Pfad',
            'LOGGED_OUT' => 'Sie wurden erfolgreich abgemeldet…',
            'PAGE_RESTRICTED' => 'Der Zugang ist eingeschränkt, bitte melden Sie sich an…',
            'DYNAMIC_VISIBILITY' => 'Dynamische Seitensichtbarkeit',
            'DYNAMIC_VISIBILITY_HELP' => 'Ermöglicht die dynamische Verarbeitung der Seitensichtbarkeit basierend auf Zugriffsregeln, wenn \'login.visibility_requires_access\' auf einer Seite auf \'true\' gesetzt ist.',
            'USER_IS_REMOTE_ONLY' => 'Dieser Benutzer wurde mit einem Remotedienst authentifiziert, sodass sein Profil nicht gespeichert werden kann.',
            '2FA_TITLE' => '2-Faktor-Authentifizierung',
            '2FA_INSTRUCTIONS' => '##### 2-Faktor-Authentifizierung
 Sie haben **2FA** für dieses Konto aktiviert. Bitte verwenden Sie Ihre **2FA** App, um den aktuellen **6-stelligen Code ** einzugeben, damit der Anmeldevorgang abgeschlossen werden kann.',
            '2FA_REGEN_HINT' => 'Wenn Sie das Secret neu generieren, müssen Sie Ihre Authentifikator-App aktualisieren.',
            '2FA_FAILED' => 'Ungültiger 2-Faktor-Authentifizierungscode, bitte versuchen Sie es erneut…',
            '2FA_ENABLED' => '2FA aktiviert',
            '2FA_CODE_INPUT' => '000000',
            '2FA_SECRET' => '2FA Secret',
            '2FA_SECRET_HELP' => 'Scannen Sie diesen QR-Code in Ihre [Authenticator App](https://learn.getgrav.org/admin-panel/2fa#apps). Es ist sinnvoll, das Secret an einem sicheren Ort zu sichern, falls Sie Ihre App neu installieren müssen. In der [Grav Doku](https://learn.getgrav.org/admin-panel/2fa) finden Sie weitere Informationen.',
            '2FA_REGENERATE' => 'Neu generieren',
            'BTN_CANCEL' => 'Abbrechen',
            'PROFILE_UPDATED' => 'Your profile has been updated',
            'ENTER_EMAIL' => 'Enter your email',
            'ENTER_NEW_PASSWORD' => 'Enter new password',
            'ENTER_PASSWORD' => 'Enter a password',
            'ENTER_PASSWORD_AGAIN' => 'Enter the password again',
            'REGISTRATION_THANK_YOU' => 'Thank you for registering.',
            'USER_ACCOUNT_DISABLED' => 'Your user account is disabled or it has not yet been activated.'
        ]
    ]
];
