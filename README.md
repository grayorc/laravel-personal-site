## my Personal Site : >

visit : [alireza10up.ir](https://alireza10up.ir), [resume.grayorc.ir](https://resume.grayorc.ir)

## Database Design (dbdiagarm)
```
Table users {
  id int [pk, increment]
  name varchar
  email varchar [unique]
  password varchar
  created_at timestamp
  updated_at timestamp
}

Table experiences {
  id int [pk, increment]
  user_id int [ref: > users.id]
  name string
  icon string
  experiences json // name , start time , end time , description
  created_at timestamp
  updated_at timestamp
}


Table skills {
  id int [pk, increment]
  user_id int [ref: > users.id]
  name varchar
  skills json // name , percentage_of_expertise
  created_at timestamp
  updated_at timestamp
}

Table feedbacks {
  id int [pk, increment]
  user_id int [ref: > users.id]
  profile varchar
  name varchar
  description text
  status feedbacks_status
  created_at timestamp
  updated_at timestamp
}

Enum feedbacks_status{
  pending
  approved
  rejected
}

Table customers {
  id int [pk, increment]
  user_id int [ref: > users.id]
  name varchar
  link varchar
  logo varchar
  created_at timestamp
  updated_at timestamp
}

Table projects {
  id int [pk, increment]
  user_id int [ref: > users.id]
  title varchar
  description text
  link varchar
  created_at timestamp
  updated_at timestamp
}

Table blog_posts {
  id int [pk, increment]
  user_id int [ref: > users.id]
  title varchar
  content text
  thumbnail varchar
  created_at timestamp
  updated_at timestamp
}

Table contacts {
  id int [pk, increment]
  name varchar
  email varchar
  subject varchar
  message text
  created_at timestamp
  updated_at timestamp
}

Table site_settings {
  id int [pk , increment]
  user_id int [ref: > users.id]
  profile string // save profile image in sidebar
  name string
  aboute_me text
  social_media json // name , link , icon_class
  address string
  email string
  telegram string
  what_i_do json // name , icon , description
  feedbacks_enabled bool // for home page manage feedback section
}
```
