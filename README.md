# SMTP Header Injection Attack
SMTP Header Injection Attack Demonstration for SIT716

### Dependencies:
- [Ubuntu (LTS)](https://ubuntu.com/download/desktop)
- PHP (8.1)
- Sendmail

### Steps:
- Setup Ubuntu Machine
- Install PHP
```
sudo apt install php-cli
```
- Install Sendmail
```
sudo apt install sendmail
```
- Configure the SMTP Server for Sendmail Service [1]
- Stream the sendmail logs [2]
```
sudo tail -f /var/log/mail.log
```
- Clone the script
```
git clone https://github.com/akshatsoni64/SIT716-2.3D.git
```
- Run the script
```
php8.1 mail.php # normal function script
```
```
php8.1 mail-injection.php # injection attack script
```
- Check the sendmail logs
```
sudo tail -f /var/log/mail.log
```

References:
1. [Sendmail Setup](https://www.cloudbooklet.com/how-to-install-and-setup-sendmail-on-ubuntu/)
2. [Sendmail Logs](https://serverfault.com/a/154213)
3. [PHP mail()](https://www.php.net/manual/en/function.mail.php)
