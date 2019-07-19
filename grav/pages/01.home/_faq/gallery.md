---
title: FAQ
heading: FAQ
background_image: ''
---

<br>
# XMPP
<details>
<summary>What is the default encryption policy?</summary>
XMPP/Jabber clients are required to use TLS encrypted connections while servers require both TLS encryption and certificate authentication. This means XMPP/Jabber servers you communicate with must use encryption <b>and</b> present valid trusted certificates. As an added measure only ciphers that enable forward secrecy are allowed. This means encrypted communications and sessions recorded in the past cannot be retrieved and decrypted should long-term secret keys or passwords be compromised in the future, even if the adversary actively interfered.
</details>

<details>
<summary>What is the privacy policy?</summary>
No more information is collected and stored than what is absolutely necessary. This includes rosters, vCards and offline messages which OMEMO can store encrypted. OTR does not support encrypting offline messages. <strike>The server logs are minimal and do not keep an IP history of any users. The logs are there for debugging connection issues and showing basic server info like which XMPP/Jabber servers KodeNet is talking to, the encryption strength or if a server's certificate is invalid, expired, or not trusted.</strike>. For security reasons the chat server does not keep any access logs. The error logs will still exist for troubleshooting any potential server-side errors. Rather than us
ing a networked database the server takes advantage of using flat-files.
</details>

<details>
<summary>How are user credentials protected?</summary>
User account credentials are <a href="https://en.wikipedia.org/wiki/Cryptographic_hash_function" target="_blank">hashed</a> and <a href="https://en.wikipedia.org/wiki/Salt_(cryptography)" target="_blank">salted</a>.
</details>

<details>
<summary>What is the minimum amount of characters a password or passphrase must be?</summary>
 8 characters.
</details>

<details>
<summary>How can I reset my forgotten password or passphrase?</summary>
It is strongly recommended to use a password manager like KeePass to help avoid losing access to your account. Do note however that during web registration users can optionally enter an email address that will be used in the account vCard. You can always add or edit the email address found in the account vCard even if this was not specified during registration. Those requesting a password reset will be required to prove account ownership, so contacting staff from the email address found in the user's vCard can <em>possibly</em> help with a temporary password reset that can then be updated with most XMPP/Jabber clients. It would also be a good idea to use the PGP key for the respective email address to help with validity.
</details>

<details>
<summary>How long are inactive accounts kept?</summary>
Inactive user accounts are removed after 6 months.
</details>

<details>
<summary>Why does my new account already show someone in my buddy list?</summary>
New Jabber accounts will see a Support Contact in the roster list, but it is not required to have. This is not a bot and can be removed or re-added at any time.
</details>

<details>
<summary>What address can I use for File Transfers?</summary>
<code>proxy.im.koderoot.net</code> or <code>proxy.kode.im</code>
</details>

<details>
<summary>Which XMPP/Jabber communication server is being used?</summary>
<a href="https://prosody.im" target="_blank">Prosody</a>
</details>

<details>
<summary>How can I do audio and video conferencing?</summary>
Check out the <a href="https://jitsi.org/downloads/" target="_blank">Jitsi</a> desktop and mobile apps - featuring the world's best video conferences.
</details>

<details>
<summary>What can I do about spam or abuse?</summary>
KodeNet supports a blocking feature that is available to users. Spam and abuse including advertisements of any kind will not be tolerated on this network. For spam or abuse please email <code>abuse@kode.email</code> with the full details. If Staff is online you can also send an Instant Message.
</details>

<br>
# IRC
<details>
<summary>Where can I find KodeNet IRC info?</summary>
See <a href="https://docs.koderoot.net/irc/info">the docs</a> for connecting to the network, registering usernames, channels and vhosts.
</details>

<br>
# Support
<details>
<summary>How can I report issues?</summary>
New issues can be submitted on the project's GitHub System Status Page.
</details>
<div class="github-card" data-github="kodenet" data-width="400" data-height="317" data-theme="medium" data-target="blank" data-repo="statuspage"></div>
<script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
