http://localhost/admin/auth/login

php artisan schedule:work

---

Email 要設定 smtp, 類似如下設定

設定 gmail 兩步驟認證 (Password要去gmail設定"應用程式密碼", 下面的密碼是假的範例)

切換到『應用程式密碼頁面/App-specific passwords』，點選『管理應用程式密碼/manage application-specific passwords』。

MAIL_MAILER=smtp

MAIL_HOST=smtp.gmail.com

MAIL_PORT=465 (用哪個 port 要查)

MAIL_USERNAME=b97b01067@gmail.com

MAIL_PASSWORD="abcdefg"

MAIL_ENCRYPTION=SSL

MAIL_FROM_ADDRESS=b97b01067@gmail.com

MAIL_FROM_NAME="${APP_NAME}"
