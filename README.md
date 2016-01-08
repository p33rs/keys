draft of tables:

GROUPS
id
name
description

MEMBERSHIPS
groupid (groups.id)
userid (users.id)

USERS
id
email UNIQUE
pw
salt
name
description

USERNAMES
userid (users.id)
username UNIQUE

KEYS
userid (users.id)
key
description
