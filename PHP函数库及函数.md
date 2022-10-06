1.Adabas D 数据库链接函数库

~~~html
   
~~~



2.apache服务器专用函数库

~~~html
apache_child_terminate ————— 在本次请求结束后终止 apache 子进程
apache_get_modules ————————— 获得已加载的Apache模块列表
apache_get_version ————————— 获得Apache版本信息
apache_getenv —————————————— 获取 Apache subprocess_env 变量
apache_lookup_uri —————————— 对指定的 URI 执行部分请求并返回所有有关信息
apache_note ———————————————— 取得或设置 apache 请求记录
apache_request_headers ————— 获取全部 HTTP 请求头信息
apache_response_headers ———— 获得全部 HTTP 响应头信息
apache_setenv —————————————— 设置 Apache 子进程环境变量
getallheaders —————————————— 获取全部 HTTP 请求头信息
virtual ———————————————————— 执行 Apache 子请求
~~~

3.数组处理函数库

~~~html
array_change_key_case———将数组中的所有键名修改为全大写或小写
array_chunk ————————————将一个数组分割成多个
array_column ———————————返回输入数组中指定列的值
array_combine ——————————创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
array_count_values —————统计数组中所有的值
array_diff_assoc ——————— 带索引检查计算数组的差集
array_diff_key ————————— 使用键名比较计算数组的差集
array_diff_uassoc ——————— 用用户提供的回调函数做索引检查来计算数组的差集
array_diff_ukey ————————— 用回调函数对键名比较计算数组的差集
array_diff ————————————— 计算数组的差集
array_fill_keys ———————— 使用指定的键和值填充数组
array_fill ————————————— 用给定的值填充数组
array_filter ——————————— 使用回调函数过滤数组的元素
array_flip ————————————— 交换数组中的键和值
array_intersect_assoc —— 带索引检查计算数组的交集
array_intersect_key ———— 使用键名比较计算数组的交集
array_intersect_uassoc — 带索引检查计算数组的交集，用回调函数比较索引
array_intersect_ukey ——— 在键名上使用回调函数来比较计算数组的交集
array_intersect ———————— 计算数组的交集
array_is_list —————————— 判断给定的 array 是否为 list
array_key_exists ——————— 检查数组里是否有指定的键名或索引
array_key_first ———————— 获取指定数组的第一个键
array_key_last ———————— 获取一个数组的最后一个键值
array_keys ———————————— 返回数组中部分的或所有的键名
array_map ————————————— 为数组的每个元素应用回调函数
array_merge_recursive — 递归地合并一个或多个数组
array_merge ——————————— 合并一个或多个数组
array_multisort———————— 对多个数组或多维数组进行排序
array_pad ————————————— 以指定长度将一个值填充进数组
array_pop ————————————— 弹出数组最后一个单元（出栈）
array_product ————————— 计算数组中所有值的乘积
array_push ———————————— 将一个或多个单元压入数组的末尾（入栈）
array_rand ———————————— 从数组中随机取出一个或多个随机键
array_reduce —————————— 用回调函数迭代地将数组简化为单一的值
array_replace_recursive — 使用传递的数组递归替换第一个数组的元素
array_replace ———————— 使用传递的数组替换第一个数组的元素
array_reverse ———————— 返回单元顺序相反的数组
array_search ————————— 在数组中搜索给定的值，如果成功则返回首个相应的键名
array_shift —————————— 将数组开头的单元移出数组
array_slice —————————— 从数组中取出一段
array_splice ————————— 去掉数组中的某一部分并用其它值取代
array_sum ———————————— 对数组中所有值求和
array_udiff_assoc ———— 带索引检查计算数组的差集，用回调函数比较数据
array_udiff_uassoc ——— 带索引检查计算数组的差集，用回调函数比较数据和索引
array_udiff — 用回调函数比较数据来计算数组的差集
array_uintersect_assoc — 带索引检查计算数组的交集，用回调函数比较数据
array_uintersect_uassoc — 带索引检查计算数组的交集，用单独的回调函数比较数据和索引
array_uintersect — 计算数组的交集，用回调函数比较数据
array_unique — 移除数组中重复的值
array_unshift — 在数组开头插入一个或多个单元
array_values — 返回数组中所有的值
array_walk_recursive — 对数组中的每个成员递归地应用用户函数
array_walk — 使用用户自定义函数对数组中的每个元素做回调处理
array — 新建一个数组
arsort — 对数组进行降向排序并保持索引关系
asort — 对数组进行升序排序并保持索引关系
compact — 建立一个数组，包括变量名和它们的值
count — 统计数组、Countable 对象中所有元素的数量
current — 返回数组中的当前值
each — 返回数组中当前的键／值对并将数组指针向前移动一步
end — 将数组的内部指针指向最后一个单元
extract — 从数组中将变量导入到当前的符号表
in_array — 检查数组中是否存在某个值
key_exists — 别名 array_key_exists
key — 从关联数组中取得键名
krsort — 对数组按照键名逆向排序
ksort — 对数组根据键名升序排序
list — 把数组中的值赋给一组变量
natcasesort — 用“自然排序”算法对数组进行不区分大小写字母的排序
natsort — 用“自然排序”算法对数组排序
next — 将数组中的内部指针向前移动一位
pos — current 的别名
prev — 将数组的内部指针倒回一位
range — 根据范围创建数组，包含指定的元素
reset — 将数组的内部指针指向第一个单元
rsort — 对数组降序排序
shuffle — 打乱数组
sizeof — count 的别名
sort — 对数组升序排序
uasort — 使用用户自定义的比较函数，保持索引和值的对应关系，原地排序 array。
uksort — 使用用户自定义的比较函数对数组中的键名进行排序
usort — 使用用户自定义的比较函数对数组中的值进行排序
~~~

4.拼写检查函数库

~~~html
4.1	pspell_add_to_personal — 												Add the word to a personal wordlist
4.2	pspell_add_to_session — Add the word to the wordlist in the current session
4.3	pspell_check — Check a word
4.4	pspell_clear_session — Clear the current session
4.5	pspell_config_create — Create a config used to open a dictionary
4.6	pspell_config_data_dir — Location of language data files
4.7	pspell_config_dict_dir — Location of the main word list
4.8	pspell_config_ignore — Ignore words less than N characters long
4.9	pspell_config_mode — Change the mode number of suggestions returned
4.10 pspell_config_personal — Set a file that contains personal wordlist
4.11	pspell_config_repl — Set a file that contains replacement pairs
4.12	pspell_config_runtogether — Consider run-together words as valid compounds
4.13	pspell_config_save_repl — Determine whether to save a replacement pairs list along with the wordlist
4.14	pspell_new_config — Load a new dictionary with settings based on a given config
4.15	pspell_new_personal — Load a new dictionary with personal wordlist
4.16	pspell_new — Load a new dictionary
4.17	pspell_save_wordlist — Save the personal wordlist to a file
4.18	pspell_store_replacement — Store a replacement pair for a word
4.19	pspell_suggest — Suggest spellings of a word
~~~



5.BC 高精确度函数库
6.历法函数库

7.ClibPDF 函数库

8.日期与时间函数库

​	8.1.1	DateTime — DateTime 类

~~~html
	DateTime::add ——————————————————— 修改 DateTime 对象，增加天、月、年、小时、分钟以及秒的数量。
    DateTime::__construct ——————————— 返回新的 DateTime 对象
    DateTime::createFromFormat —————— 根据指定格式解析时间字符串
    DateTime::createFromImmutable ——— Returns new DateTime object encapsulating the given DateTimeImmutable object
    DateTime::createFromInterface ——— Returns new DateTime object encapsulating the given DateTimeInterface object
    DateTime::getLastErrors ————————— 返回警告和错误信息
    DateTime::modify ———————————————— 修改日期时间对象的值
    DateTime::__set_state ——————————— __set_state 处理程序
    DateTime::setDate ——————————————— 设置日期
    DateTime::setISODate ———————————— 设置 ISO 日期
    DateTime::setTime ——————————————— 设置时间
    DateTime::setTimestamp —————————— 以 Unix 时间戳的方式设置日期和时间
    DateTime::setTimezone ——————————— 设置 DateTime 对象的时区
    DateTime::sub ——————————————————— 对 DateTime 对象减去一定量的 日、月、年、小时、分钟和秒。
~~~

​	8.12	DateTimeImmutable — The DateTimeImmutable class

~~~html
    DateTimeImmutable::add —————————————————— Returns a new object, with added amount of days, months, years, hours, minutes and seconds
    DateTimeImmutable::__construct — Returns new DateTimeImmutable object
    DateTimeImmutable::createFromFormat ————— Parses a time string according to a specified format
    DateTimeImmutable::createFromInterface —— Returns new DateTimeImmutable object encapsulating the given DateTimeInterface object
    DateTimeImmutable::createFromMutable ———— Returns new DateTimeImmutable object encapsulating the given DateTime object
    DateTimeImmutable::getLastErrors ———————— Returns the warnings and errors
    DateTimeImmutable::modify ——————————————— Creates a new object with modified timestamp
    DateTimeImmutable::__set_state —————————— The __set_state handler
    DateTimeImmutable::setDate —————————————— Sets the date
    DateTimeImmutable::setISODate ——————————— Sets the ISO date
    DateTimeImmutable::setTime —————————————— Sets the time
    DateTimeImmutable::setTimestamp ————————— Sets the date and time based on a Unix timestamp
    DateTimeImmutable::setTimezone —————————— Sets the time zone
    DateTimeImmutable::sub —————————————————— Subtracts an amount of days, months, years, hours, minutes and seconds
~~~

​	8.1.3	DateTimeInterface — The DateTimeInterface interface

~~~html
DateTimeInterface::diff ——————————— Returns the difference between two DateTime objects
DateTimeInterface::format ————————— 按照指定格式返回格式化后的日期
DateTimeInterface::getOffset —————— Returns the timezone offset
DateTimeInterface::getTimestamp ——— Gets the Unix timestamp
DateTimeInterface::getTimezone ———— Return time zone relative to given DateTime
DateTime::__wakeup ———————————————— The __wakeup handler
~~~

​	8.14	继续

​	8.1.1	calendar

```html
cal_days_in_month ————— 返回某个历法中某年中某月的天数
cal_from_jd ——————————— 转换Julian Day计数到一个支持的历法。
cal_info —————————————— 返回选定历法的信息
cal_to_jd ————————————— 从一个支持的历法转变为Julian Day计数。
easter_date ——————————— 得到指定年份的复活节午夜时的Unix时间戳。
easter_days ——————————— 得到指定年份的3月21日到复活节之间的天数
FrenchToJD ———————————— 从一个French Republican历法的日期得到Julian Day计数。
GregorianToJD ————————— 转变一个Gregorian历法日期到Julian Day计数
JDDayOfWeek ——————————— 返回星期的日期
JDMonthName ——————————— 返回月份的名称
JDToFrench ———————————— 转变一个Julian Day计数到French Republican历法的日期
JDToGregorian ————————— 转变一个Julian Day计数为Gregorian历法日期
jdtojewish ———————————— 转换一个julian天数为Jewish历法的日期
JDToJulian ———————————— 转变一个Julian Day计数到Julian历法的日期
jdtounix —————————————— 转变Julian Day计数为一个Unix时间戳
JewishToJD ———————————— 转变一个Jewish历法的日期为一个Julian Day计数
JulianToJD ———————————— 转变一个Julian历法的日期为Julian Day计数
unixtojd —————————————— 转变Unix时间戳为Julian Day计数
```

9.DBA 函数库

~~~html
dba_close — Close a DBA database
dba_delete — Delete DBA entry specified by key
dba_exists — Check whether key exists
dba_fetch — Fetch data specified by key
dba_firstkey — Fetch first key
dba_handlers — List all the handlers available
dba_insert — Insert entry
dba_key_split — Splits a key in string representation into array representation
dba_list — List all open database files
dba_nextkey — Fetch next key
dba_open — Open database
dba_optimize — Optimize database
dba_popen — Open database persistently
dba_replace — Replace or insert entry
dba_sync — Synchronize database
~~~

10.dBase 格式资料表函数库
11.dbm 类数据库函数库
12.目录管理函数库
13.动态链接函数库
14.程序执行功能函数库
15.FDF 函数库
16.filePro 数据库函数库
17.文件系统函数库
18.HTTP 相关函数库
19.Hyperwave 服务器函数库
20.图形处理函数库
21.IMAP 电子邮件系统函数库
22.PHP 选项及相关信息函数库
23.Informix 数据库函数库
24.InterBase 数据库函数库
25.LDAP 目录协议函数库
26.电子邮件函数库
27.数学运算函数库
28.mcrypt 编码函数库
29.mhash 哈稀函数库
30.杂项函数库
31.mSQL 数据库函数库
32.SQL Server 数据库函数库
33.MySQL 数据库函数库
34.Sybase 数据库函数库
35.网络函数库
36.NIS 函数库
37.ODBC 数据库链接函数库
39.Oracle 数据库函数库
40.Perl 相容语法函数库
41.PDF 格式文件函数库
42.PostgreSQL 数据库函数库
43.正则表达式函数库
44.信号与共享内存函数库
45.Solid 数据库链接函数库
46.SNMP 网管函数库
47.字符串处理函数库

​	47.1	字符串

​		addcslashes — 以 C 语言风格使用反斜线转义字符串中的字符

​		addslashes — 使用反斜线引用字符串

​		bin2hex — 函数把包含数据的二进制字符串转换为十六进制值

​		chop — rtrim 的别名

​		chr — 从数字生成单字节字符串

​		chunk_split — 将字符串分割成小块

​		convert_cyr_string — 将字符由一种 Cyrillic 字符转换成另一种

​		convert_uudecode — 解码一个 uuencode 编码的字符串

​		convert_uuencode — 使用 uuencode 编码一个字符串

​		count_chars — 返回字符串所用字符的信息

​		crc32 — 计算一个字符串的 crc32 多项式

​		crypt — 单向字符串散列

​		echo — 输出一个或多个字符串

​		explode — 使用一个字符串分割另一个字符串

​		fprintf — 将格式化后的字符串写入到流

​		get_html_translation_table — 返回使用 htmlspecialchars 和 htmlentities 后的转换表

​		hebrev — 将逻辑顺序希伯来文（logical-Hebrew）转换为视觉顺序希伯来文（visual-Hebrew）

​		hebrevc — 将逻辑顺序希伯来文（logical-Hebrew）转换为视觉顺序希伯来文（visual-Hebrew），并且转换换行符

​		hex2bin — 转换十六进制字符串为二进制字符串

​		html_entity_decode — Convert HTML entities to their corresponding characters

​		htmlentities — 将字符转换为 HTML 转义字符

​		htmlspecialchars_decode — 将特殊的 HTML 实体转换回普通字符

​		htmlspecialchars — 将特殊字符转换为 HTML 实体

​		implode — 用字符串连接数组元素

​		join — 别名 implode

​		lcfirst — 使一个字符串的第一个字符小写

​		levenshtein — 计算两个字符串之间的编辑距离

​		localeconv — Get numeric formatting information

​		ltrim — 删除字符串开头的空白字符（或其他字符）

​		md5_file — 计算指定文件的 MD5 散列值

​		md5 — 计算字符串的 MD5 散列值

​		metaphone — Calculate the metaphone key of a string

​		money_format — 将数字格式化成货币字符串

​		nl_langinfo — Query language and locale information

​		nl2br — 在字符串所有新行之前插入 HTML 换行标记

​		number_format — 以千位分隔符方式格式化一个数字

​		ord — 转换字符串第一个字节为 0-255 之间的值

​		parse_str — 将字符串解析成多个变量

​		print — 输出字符串

​		printf — 输出格式化字符串

​		quoted_printable_decode — 将 quoted-printable 字符串转换为 8-bit 字符串

​		quoted_printable_encode — 将 8-bit 字符串转换成 quoted-printable 字符串

​		quotemeta — 转义元字符集

​		rtrim — 删除字符串末端的空白字符（或者其他字符）

​		setlocale — 设置地区信息

​		sha1_file — 计算文件的 sha1 散列值

​		sha1 — 计算字符串的 sha1 散列值

​		similar_text — 计算两个字符串的相似度

​		soundex — Calculate the soundex key of a string

​		sprintf — 返回格式化字符串

​		sscanf — 根据指定格式解析输入的字符

​		str_contains — Determine if a string contains a given substring
​		str_ends_with — Checks if a string ends with a given substring
​		str_getcsv — 解析 CSV 字符串为一个数组
​		str_ireplace — str_replace 的忽略大小写版本
​		str_pad — 使用另一个字符串填充字符串为指定长度
​		str_repeat — 重复一个字符串
​		str_replace — 子字符串替换
​		str_rot13 — 对字符串执行 ROT13 转换
​		str_shuffle — 随机打乱一个字符串
​		str_split — 将字符串转换为数组
​		str_starts_with — Checks if a string starts with a given substring
​		str_word_count — 返回字符串中单词的使用情况
​		strcasecmp — 二进制安全比较字符串（不区分大小写）
​		strchr — 别名 strstr
​		strcmp — 二进制安全字符串比较
​		strcoll — 基于区域设置的字符串比较
​		strcspn — 获取不匹配遮罩的起始子字符串的长度
​		strip_tags — 从字符串中去除 HTML 和 PHP 标记
​		stripcslashes — 反引用一个使用 addcslashes 转义的字符串
​		stripos — 查找字符串首次出现的位置（不区分大小写）
​		stripslashes — 反引用一个引用字符串
​		stristr — strstr 函数的忽略大小写版本
​		strlen — 获取字符串长度
​		strnatcasecmp — 使用“自然顺序”算法比较字符串（不区分大小写）
​		strnatcmp — 使用自然排序算法比较字符串
​		strncasecmp — 二进制安全比较字符串开头的若干个字符（不区分大小写）
​		strncmp — 二进制安全比较字符串开头的若干个字符
​		strpbrk — 在字符串中查找一组字符的任何一个字符
​		strpos — 查找字符串首次出现的位置
​		strrchr — 查找指定字符在字符串中的最后一次出现
​		strrev — 反转字符串
​		strripos — 计算指定字符串在目标字符串中最后一次出现的位置（不区分大小写）
​		strrpos — 计算指定字符串在目标字符串中最后一次出现的位置
​		strspn — 计算字符串中全部字符都存在于指定字符集合中的第一段子串的长度。
​		strstr — 查找字符串的首次出现
​		strtok — 标记分割字符串
​		strtolower — 将字符串转化为小写
​		strtoupper — 将字符串转化为大写
​		strtr — 转换指定字符
​		substr_compare — 二进制安全比较字符串（从偏移位置比较指定长度）
​		substr_count — 计算字串出现的次数
​		substr_replace — 替换字符串的子串
​		substr — 返回字符串的子串
​		trim — 去除字符串首尾处的空白字符（或者其他字符）
​		ucfirst — 将字符串的首字母转换为大写
​		ucwords — 将字符串中每个单词的首字母转换为大写
​		utf8_decode — Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable characters
​		utf8_encode — Converts a string from ISO-8859-1 to UTF-8
​		vfprintf — 将格式化字符串写入流
​		vprintf — 输出格式化字符串
​		vsprintf — 返回格式化字符串
​		wordwrap — 打断字符串为指定数量的字串

48.URL 处理函数库

~~~html
base64_decode ————— 对使用 MIME base64 编码的数据进行解码
base64_encode ————— 使用 MIME base64 对数据进行编码
get_headers ——————— 取得服务器响应一个 HTTP 请求所发送的所有标头
get_meta_tags ————— 从一个文件中提取所有的 meta 标签 content 属性，返回一个数组
http_build_query —— 生成 URL-encode 之后的请求字符串
parse_url ————————— 解析 URL，返回其组成部分
rawurldecode —————— 对已编码的 URL 字符串进行解码
rawurlencode —————— 按照 RFC 3986 对 URL 进行编码
urldecode ————————— 解码已编码的 URL 字符串
urlencode ————————— 编码 URL
~~~

49.变量处理函数库
50.Vmailmgr 邮件处理函数库
51.WDDX 函数库
52.压缩文件函数库

​	52.1	Zip

~~~html
ZipArchive::addEmptyDir — Add a new directory
ZipArchive::addFile — Adds a file to a ZIP archive from the given path
ZipArchive::addFromString — Add a file to a ZIP archive using its contents
ZipArchive::addGlob — Add files from a directory by glob pattern
ZipArchive::addPattern — Add files from a directory by PCRE pattern
ZipArchive::clearError — Clear the status error message, system and/or zip messages
ZipArchive::close — Close the active archive (opened or newly created)
ZipArchive::count — Counts the number of files in the archive
ZipArchive::deleteIndex — Delete an entry in the archive using its index
ZipArchive::deleteName — Delete an entry in the archive using its name
ZipArchive::extractTo — 解压缩文件
ZipArchive::getArchiveComment — Returns the Zip archive comment
ZipArchive::getCommentIndex — Returns the comment of an entry using the entry index
ZipArchive::getCommentName — Returns the comment of an entry using the entry name
ZipArchive::getExternalAttributesIndex — Retrieve the external attributes of an entry defined by its index
ZipArchive::getExternalAttributesName — Retrieve the external attributes of an entry defined by its name
ZipArchive::getFromIndex — Returns the entry contents using its index
ZipArchive::getFromName — Returns the entry contents using its name
ZipArchive::getNameIndex — Returns the name of an entry using its index
ZipArchive::getStatusString — Returns the status error message, system and/or zip messages
ZipArchive::getStream — Get a file handler to the entry defined by its name (read only)
ZipArchive::getStreamIndex — Get a file handler to the entry defined by its index (read only)
ZipArchive::getStreamName — Get a file handler to the entry defined by its name (read only)
ZipArchive::isCompressionMethodSupported — Check if a compression method is supported by libzip
ZipArchive::isEncryptionMethodSupported — Check if a encryption method is supported by libzip
ZipArchive::locateName — Returns the index of the entry in the archive
ZipArchive::open — Open a ZIP file archive
ZipArchive::registerCancelCallback — Register a callback to allow cancellation during archive close.
ZipArchive::registerProgressCallback — Register a callback to provide updates during archive close.
ZipArchive::renameIndex — Renames an entry defined by its index
ZipArchive::renameName — Renames an entry defined by its name
ZipArchive::replaceFile — Replace file in ZIP archive with a given path
ZipArchive::setArchiveComment — Set the comment of a ZIP archive
ZipArchive::setCommentIndex — Set the comment of an entry defined by its index
ZipArchive::setCommentName — Set the comment of an entry defined by its name
ZipArchive::setCompressionIndex — Set the compression method of an entry defined by its index
ZipArchive::setCompressionName — Set the compression method of an entry defined by its name
ZipArchive::setEncryptionIndex — Set the encryption method of an entry defined by its index
ZipArchive::setEncryptionName — Set the encryption method of an entry defined by its name
ZipArchive::setExternalAttributesIndex — Set the external attributes of an entry defined by its index
ZipArchive::setExternalAttributesName — Set the external attributes of an entry defined by its name
ZipArchive::setMtimeIndex — Set the modification time of an entry defined by its index
ZipArchive::setMtimeName — Set the modification time of an entry defined by its name
ZipArchive::setPassword — Set the password for the active archive
ZipArchive::statIndex — Get the details of an entry defined by its index
ZipArchive::statName — Get the details of an entry defined by its name
ZipArchive::unchangeAll — Undo all changes done in the archive
ZipArchive::unchangeArchive — Revert all global changes done in the archive
ZipArchive::unchangeIndex — Revert all changes done to an entry at the given index
ZipArchive::unchangeName — Revert all changes done to an entry with the given name

zip_close — 关闭一个ZIP档案文件
zip_entry_close — 关闭目录项
zip_entry_compressedsize — 检索目录项压缩过后的大小
zip_entry_compressionmethod — 检索目录实体的压缩方法
zip_entry_filesize — 检索目录实体的实际大小
zip_entry_name — 检索目录项的名称
zip_entry_open — 打开用于读取的目录实体
zip_entry_read — 读取一个打开了的压缩目录实体
zip_open — 打开ZIP存档文件
zip_read — 读取ZIP存档文件中下一项
~~~

53.XML 解析函数库
54.Session 函数库
55.GNU 记录函数库
56.FTP 文件传输函数库
57.MCAL 模块日历存取函数库 