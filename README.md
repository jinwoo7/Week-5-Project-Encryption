# Project 5 - Encryption

Time spent: **6** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [x]  Required: Decrypt the government message
  I heard about your current situation. Do you know who hacked APEX? -- The Chairman
  * [x]  Required: Encrypt a response and include in this README
  yB7Qpjc7XSdwCLTxdrp8us1JdQ98CTN2ua1fPVuZ3nQ2O0anY/p7KIiJneznm6FTil5k2r8YmTBXhgUD5Uofzg==

3\. Generate Public-Private Keys
  * [x]  Required: Repair the key generator code
  * [x]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [x]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [x]  Required: Repair the create and verify signature code
  
6\. Encrypted Message 2
  * [x]  Required: Decrypt the message
  Cannot access APEX from this location. Send new agent codename and public key so I can contact. Encrypt response to protect codename. Include signature to verify identity and message integrity. -- sydneybristow
  * [x]  Required: Verify the message
  * [x]  Required: Include a response message in this README
  My message: 
P1JOOiJM5p0NmlQvEWAR+agKBPl8bTXAHI51TUG2c9lxKlQpvUKC4VAiKKmhxD9d+rT7GA/rDAAOb/AbNDpHUZPV+M6yYizbEPvYDmET29El62NXd77/9xcQWWPCvUIYzOheFpHeikrRIjWFzTuFOWUvKwpqB+fCQ0hlAheVg85RsYO75DH8VC6tsPLfXjbUznk6RWPoi3u2y26dkwx5ftx5TIEz0ipyRaginrbjnw6NeB24/ite/6EUebXqt0ApjmOYfJvQHR9vD5ixxPFczgl6hoLfxgZD22Zfrg1YwGjg/V5LSBJQ4EsYG2NFHg1yfSh2DW4uA34Xd4FzTQKx6g==

-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyKNvqGv5ROD2h3HQLJTE
U/MDNGrBMSEfIzftA4hUtsSGgngN1cpYuaQbt93rkzNbxvV11oN0laHrXMpB35Gw
IZyd5pSLYJovWGeW6PAX4T2z313prdTktbiixr39exqMDuKnnBIq4qHmbHozgL6P
kBHCY8DcnfR44v3cjb/G76SstVuoEsEoBDrMXgXzR/5y7iPJ+Lbia8UgT6sccGB3
FrPeXgJtaXd0lW2CQFYMOFdZeNfF5Wz/vpig5OMshFQjhydXjJmYUqFrOiK2ZUYT
sz0HV3pYEuDU8u0hjS/qaguenh6L7RjVQAKWXg2/suZ3JZf1cdxayDUz5fl+Bdjt
xwIDAQAB
-----END PUBLIC KEY-----

Message signature:
IRzgpd7Tjz4bmVPag+J6h4O6ZfF2c02UoDvncj+6lsEpLyVLDhPOxQzPuYmJ6AH3OHUxqWvdbxYXY1XTf6o2XTmLr0qmaFzHDcu/Jd4CpZTady5EcXh6S5CG/LNIv/sCQolRE+SYNpAYNEBq5IeCiicmeuH5JGEa8uZ2OmYI6/G15UgyT+QNB8xJ6Eh0fM7SxCs77M1NqFu1R/b9eJIR+PwVkp86MyPYPJRwbina+cu4nGf840mhDtpOIKXHCk1tZviyM/rcLAAliRnAbHk5IPCsDM839tTXOj7jpgLqCEcL7u3OyWuftAK/CbUQ29kK8PC0xg+VcWDO/6eqx2kynA==

7\. Agent Messages
  * [x]  Required: Repair the dropbox code
  * [x]  Required: Repair the messages area
  * [x]  Required: Display encrypted messages for all agents
  * [x]  Required: Messages indicate whether the message signature is valid
  * [x]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [x]  Required: Decrypt as many email messages as possible
  * [x]  Required: Identify the double agent: ____Austin_____

The following objectives are **optional**:

* Bonus Objective 1\.
  * [ ]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [ ]  Write a report of your discoveries (longer than 300 characters).
  * [ ]  Compose a secure email for sending over an insecure network.
  * [ ]  Include the email with your encrypted report in this README.

* Bonus Objective 3\.
  * [ ]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [ ]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/rDw1xuO.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />
http://i.imgur.com/rDw1xuO.gif -> if the video isn't avilable

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

I had issues with using openssl library. To fix the issue, I went on to Control Panel -> System -> Advanced system settings -> Environment Variables, and added a following System Variable:
Variable: OPENSSL_CONF
VALUE : C:\wamp64\bin\apache\apache2.4.23\conf\openssl.cnf

## License

    Copyright [2017] [Jinwoo Yom]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
198.58.125.217