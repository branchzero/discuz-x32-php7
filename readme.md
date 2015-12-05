#Discuz X3.2 UTF-8 20150609 For PHP7

This is a a PHP7 Port of Discuz! X3.2, based on Discuz X3.2 UTF-8 20150609.
*Please Do Not Use For Production*

###Changes

  - Remove MySQL and Switch to MySQLi
  - Modify *preg_replace e modifier* to *preg_replace_callback*

###Notice

There are still some bugs remaining to fix.

###Known Bugs

  - Template Engine's Eval tags seem to work abnormally. (seems like preg_replace with e modifier has addslashes but preg_replace_callback one doesn't to do)

###Other

Copyright: Comsenz Inc.
Modifier: BranchZero Sun
