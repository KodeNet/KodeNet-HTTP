---
title: FAQ
heading: FAQ
background_image: ''
---

<br>
# XMPP
**What is the default encryption policy?**
XMPP/Jabber clients are required to use TLS encrypted connections while servers require both TLS encryption and certificate authentication. This means XMPP/Jabber servers you communicate with must use encryption **and** present valid trusted certificates. As an added measure only ciphers that enable forward secrecy are allowed. This means encrypted communications and sessions recorded in the past cannot be retrieved and decrypted should long-term secret keys or passwords be compromised in the future, even if the adversary actively interfered.

**What is the privacy policy?**
No more information is collected and stored than what is absolutely necessary. This includes rosters, vCards and offline messages which OMEMO can store encrypted. OTR does not support encrypting offline messages. The server logs are minimal and do not keep an IP history of any users. The logs are there for debugging connection issues and showing basic server info like which XMPP/Jabber servers KodeNet is talking to, the encryption strength or if a server's certificate is invalid, expired, or not trusted.

**How are user credentials protected?**
User account credentials are [hashed](https://en.wikipedia.org/wiki/Cryptographic_hash_function) and [salted](https://en.wikipedia.org/wiki/Salt_(cryptography)).

**What is the minimum amount of characters a password or passphrase must be?**
 8 characters.

**How can I reset my forgotten password or passphrase?**
It is strongly recommended to use a password manager like KeePass to help avoid losing access to your account. Do note however that during web registration users can optionally enter an email address that will be used in the account vCard. You can always add or edit the email address found in the account vCard even if this was not specified during registration. Those requesting a password reset will be required to prove account ownership, so contacting staff from the email address found in the user's vCard can _possibly_ help with a temporary password reset that can then be updated with most XMPP/Jabber clients. It would also be a good idea to use the PGP key for the respective email address to help with validity.

**How long are inactive accounts kept?**
Inactive user accounts are removed after 6 months.

**Why does my new account already show someone in my buddy list?**
New Jabber accounts will see a Support Contact in the roster list, but it is not required to have. This is not a bot and can be removed or re-added at any time.
 
**What address can I use for File Transfers?**
`proxy.im.koderoot.net` or `proxy.kode.im`

**Which XMPP/Jabber communication server is being used?**
[Prosody](https://prosody.im)

**How can I do audio and video conferencing?**
Check out the [Jitsi](https://jitsi.org/downloads/) desktop and mobile apps - featuring the world's best video conferences. 

**What can I do about spam or abuse?**
KodeNet supports a blocking feature that is available to users. Spam and abuse including advertisements of any kind will not be tolerated on this network. For spam or abuse please email `abuse@kode.email` with the full details. If Staff is online you can also send an Instant Message.

<br>
# IRC
See [the docs](https://docs.koderoot.net/irc/info) on connecting to the network, registering usernames, channels and vhosts.

<br>
# Support
**How can I report issues?**
New issues can be submitted on the project's GitHub System Status Page.
<div class="github-card" data-github="kodenet" data-width="400" data-height="317" data-theme="medium" data-target="blank" data-repo="statuspage"></div>
<script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
