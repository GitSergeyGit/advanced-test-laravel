<?php

// abc xxxxxx abc
// abc adwdqqawd ???
//echo md5('qwerty');
//echo sha1('qwerty');
echo password_hash('qwerty', PASSWORD_ARGON2I);
// d8578edf8458ce06fbc5bb76a58c5ca4