# 简介

用[简单网页](https://blog.csdn.net/weixin_43031092/article/details/106316064)实现数据库的数据查询和插入，后面计划加入修改密码选项。

验证码不是必选项目，这里只是为了好玩。

# 文件说明

index.php	首页，主要是用来跳转到登录页面、注册页面

sign.php 	登录页面

register.php 	注册页面

C.css	登录页面、注册页面的样式文件

check.php  连接数据库验证账号密码，正确则跳转到logok.html，不正确返回登录页面

checkregister.php   连接数据库进行插入数据，若已存在账号，则提示使用其它用户名

logok.html 登录成功页面，显示“登陆成功”

剩下的css、favicons、images、js都是冗余文件。。没必要弄

# 效果预览
登录和注册页面可以相互跳转，登录成功后成功后显示“登陆成功”，失败则重新输入
![在这里插入图片描述](https://img-blog.csdnimg.cn/20200524154957367.jpg?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3dlaXhpbl80MzAzMTA5Mg==,size_16,color_FFFFFF,t_70)
![在这里插入图片描述](https://img-blog.csdnimg.cn/20200524154957319.jpg?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3dlaXhpbl80MzAzMTA5Mg==,size_16,color_FFFFFF,t_70)

# 问题说明

1.  SQL注入、密码加密暂不考虑

2.  这里用的是pdo操作数据库，其它方式如mysqli也是可以的

    