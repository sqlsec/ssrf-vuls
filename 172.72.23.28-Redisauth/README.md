# redis5-centos-docker
Redis5 + Centos7 + cron 定时任务的 Docker 环境，镜像体积一共只有 273MB 大小。

# 使用方法

## 手动 build

```bash
# 构建镜像
docker build -t <IMAGE NAME> .

# 创建容器
docker run -d -p 6379:6379 <IMAGE NAME>
```

## 从 DockerHub 拉取

```bash
# 拉取镜像
docker pull sqlsec/redis5-centos7-cron:latest

# 创建容器
docker run -d -p 6379:6379 <IMAGE NAME>
```



