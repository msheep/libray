# Dsshop
dsshop是一套轻量级的网上购物系统，通过dsshop可以快速搭建成品商城系统。

# 商城系统介绍

商城系统又叫网上商城系统，英文是Online Mall system，这个单词最先提出的是英国的Lap公司，该公司在中国大陆设有分公司，1998年，当时英国在线购物刚刚起步，Lap在英国系统开发方面已经小有名气，为规范市场称谓，则提出Online Mall system统一名称，同时还提出了Online Shopping System（网上购物系统），Online store system（网上商店系统），后被引入中国，亦是现在的网上购物系统。

# Dswjshop发展历史

2014年4月      Dswjcms商城版发布

2016年1月      Dswjcms B2C2.1商城网店系统dswjshop发布，系统架构已同步PHP版本，不支持之前版本直接升级

2016年5月      插件模板市场正在筹建中，模板市场推出后，将代表着dswjshop又一新的起点

2016年5月19日  Dswjshop更名为dsshop，推出2.2版本，除修复之前版本BUG外，对插件模板市场的支持近一步提升。

2016年6月      Dsshop 2.3对安装界面进行了优化，后台增加了开发环境一键切换，并对使用dswjcms项目的站点免费提供售后技术支持服务。

2017年2月      部分BUG修复，修复1元商业授权开通后无法隐藏头尾版权信息问题


# Dsshop使用要求

1、无任何技术要求，我们的项目全是模块化的，初始安装无任何附加插件，所有插件或模板都可以通过官方提供的插件模板市场进行下载，插件模板的安装也都提供教程，只需几步即可，无需修改源代码，也不需要了解项目目录结构；简单的说只要PHP环境已配置好，会上传文件和解压文件，会浏览器网站，那么你就可以利用我们的项目搭建属于自己的平台。

2、如你想对我们的项目进行二次开发，要求就比较高了：从事PHP研发工作2年以上，至少参与功能的研发与扩展，需熟练掌握ThinkPHP3.1框架的使用。

# Dsshop建站流程

1、下载dsshop源码

2、上传到服务器，运行域名/install.php

3、一路下一步，填写数据库用户名、密码、表名

4、项目搭建完成

5、通过官方插件模板市场选择喜欢的模板点击下载

6、根据模板安装说明，轻松几步完成模板替换

7、通过官方插件模板市场选择所需的功能插件（如支付接口、短信接口）

8、根据插件安装说明，轻松几步完成插件安装

9、填写插件所需相关配置，完成插件的应用

10、项目对外发布，上线运营。

dsshop演示地址：http://dswjshopbasis.tifaweb.com

# Dsshop环境要求

1、php5+mysql5+APACHE2（推荐php版本在3以上）

2、云服务器或以上配置，具备独立安装PHP环境

3、windows、linux系统都支持

# 常见问题解答

Q：你们的系统是免费的嘛？

D：可以理解为免费，因为我们允许你将我们的项目直接用于商业运营或二次开发后用于商业运营，但实际如果你想用于商业运营，但不想保留我们可见的版权信息时，那你就需要购买我们的版权，

Q：商业授权码是什么？

D：当你的平台对外发布时，不想显示DSWJCMS相关版权信息时，需要购买商业授权码，授权为终身，可在官网上进行授权查询：http://www.dswjcms.com/Index/demand.html

Q：安装后只能显示首页，其它页面显示404页？

D：
1、Apache配置文件httpd.conf中查找mod_rewrite.so，将LoadModule rewrite_module modules/mod_rewrite.so前面的#去掉

2、如还不能解决下载兼容版

3、Apache配置文件httpd.conf中查找AllowOverride None 将None改为 All 

Q：Linux安装、上传图片无法实现？

D：Linux需要设置权限为7777

Q：项目样式错乱或进入后台发现布局错乱？

D：我们的项目因进行了伪静态操作，所以请上传到服务器进行操作，并确保项目放在环境根目录下或已做过多站点配置。

Q：你们的项目为什么有的版本功能比较全，有的又很少呢？

D：因为原先开源项目定位不准，所以有几个版本的升级主要放在了功能上面，但发现功能多了问题也多了。后来经过公司决定后，开源项目主要还是定位在“核心、简单、安全、易扩展”上面，结合最新版本的插件模块，让开发者根据自己平台的业务需求选择所需的模块岂不更好。

Q：插件模板市场是用来做什么的？

D：插件模板市场是针对开源项目推出的扩展应用市场，用户可以通过插件模板市场，找到自己想要的功能插件，或喜欢的界面风格，通过下载后，简单的几步，即可应用到自己的平台中去，大大减少建站周期。

Q：插件模板是否需要另收费？

D：插件有收费和非收费版，具体可以通过插件详情中查看是否需要收费。

Q：插件模板市场里的插件模板为什么那么少？

D：插件模板市场是我们近期刚推出的，所有功能、模板都需要一定的研发周期，计划每周推出一个插件或模板。

Dswjcms开源项目唯一官网：http://www.dswjcms.com ，我们的目的，将开源进行到底，分享是一种精神，分享中获得的往往比金钱更重要。