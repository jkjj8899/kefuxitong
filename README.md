## 免责声明

本项目/文章/文档仅供参考目的，不构成任何投资、法律或其他建议。作者不对本项目/文章/文档中的任何信息的准确性、完整性或及时性做出任何保证。对于任何因使用本项目/文章/文档中的信息所造成的损失，作者概不负责。使用者应该自行承担风险，并在必要时寻求专业意见。
## 服务器配置及环境要求
[telegram联系](https://t.me/seven56678)  



服务器	CPU 2核心 ↑
运存 4G ↑
宽带 5M ↑
服务器操作系统	Linux Centos7 ↑

运行环境	Nginx 1.18 ↑
PHP 7.0~7.3 
MYSQL 5.6 ↑
## PHP设置

一、安装PHP插件：fileinfo、redis  
二、删除PHP对应版本中的 pcntl_signal 、pcntl_signal_dispatch、 pcntl_fork、pcntl_wait、pcntl_alarm 禁用函数  
![image](https://github.com/jkjj8899/kefuxitong/assets/152266072/4c843239-772c-47dd-b430-27421a301949)
## 站点配置

一、上传源码包到站点目录并解压  
二、设置网站运行目录pu  
![image](https://github.com/jkjj8899/kefuxitong/assets/152266072/0d644d4f-6982-4e08-950d-d8e329a217ef)  

三、设置伪静态，选择thinkphp  
##  程序安装

一、输入http://站点域名/install.php，执行一键安装  
二、等待程序安装，安装完成后建议删除public目录下的install.php文件  

