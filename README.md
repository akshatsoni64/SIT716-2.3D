# SMTP Header Injection Attack
SMTP Header Injection Attack Demonstration for SIT716

### Dependencies:
- [Ubuntu (LTS)](https://ubuntu.com/download/desktop)
- PHP (8.1)
```
sudo apt install php-cli
```
- Sendmail
```
sudo apt install sendmail
```

### Steps:
- Setup Ubuntu Machine
- Install PHP
- Install Sendmail
- Configure the SMTP Server for Sendmail Service
- Build the sendmail service
- Restart the sendmail service
- Stream the sendmail logs
```
sudo tail -f /var/log/mail.log
```
- Clone the script
```
git clone https://github.com/akshatsoni64/SIT716-2.3D.git
```
- Run the script
```
php8.1 mail.php
```
- Check the sendmail logs

References:
- [Sendmail Setup](https://www.cloudbooklet.com/how-to-install-and-setup-sendmail-on-ubuntu/)
- [Sendmail Logs](https://serverfault.com/a/154213)
