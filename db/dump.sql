CREATE TABLE IF NOT EXISTS banner_view (
    id int unsigned auto_increment not null,
    ip_address varchar(15) not null,
    user_agent varchar(255) not null,
    page_url varchar(255) not null,
    view_date timestamp not null default CURRENT_TIMESTAMP,
    views_count int unsigned not null default 1,
    PRIMARY KEY(id),
    UNIQUE (ip_address, user_agent, page_url)
);