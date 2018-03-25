## It's a repo to store my PHP class's homework

### [Class one] build the enviroment on LNMP
caz I reload my laptop,I missed all my code TAT,and I have to build the enviroment again.

### [Class two] The usage of Array and function in PHP
I got something new today at the class.
- sort()
- rsort()
- ksort()
- array_shift()
- etc

The static varity means that the varity will be declared **once** !

Also,I find when I use foreach to traverse an array,it may throw a notice said undefined offset,though the truth isn't like the notice.
I use > error_reporting('Notice'); to cover it.

### [Class Three] String and Preg
- the usage of "@"
    @$page=$_GET['page']?intval($_GET['page']):1;
    这句是从URL中获取page关键字的值，比如"index.php?page=5"，则$page就会取到5。

    但是如果有error，比如"index.php"后没有page关键字了，如果去取$_GET['page']不存在就会报错，这时有@就可以忽视这个小错误了。

- 正则表达式
    - >如/0\d{2}-\d{8}/
        - \d匹配数字
        - {2}匹配两个
    - 原子
    >a-z 0-9 \d\w\s等转义字符
    - oNN
    - xNN
    - 元字符修饰原子
