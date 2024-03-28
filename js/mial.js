Email.send({
    Host : "smtp.elasticemail.com",
    Username : "username",
    Password : "password",
    To : 'n.moise.ob@gmail.com',
    From : "you@isp.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);