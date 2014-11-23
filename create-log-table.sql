create table log (id        int auto_increment key, 
                  moment    datetime not null,	  
       	     	  event     varchar(255) not null default "", 
                  amount    decimal(6,2) not null default 0, 
                  notes     text not null default "") ;

