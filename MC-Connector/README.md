# MC-Connector
Установка:
Из папки libs скопируете файлы в engine/libs/

Скопируете содержимое билда в папку engine/modules/

Сделайте sql запрос в базу

```
CREATE TABLE `x_servers` (
  `id` int(10) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'localhost',
  `port` int(128) NOT NULL DEFAULT '25565',
  `desc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```
