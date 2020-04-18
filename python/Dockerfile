FROM ubuntu:latest

MAINTAINER Your Name "zackfeldstein@gmail.com"

RUN apt-get update
RUN apt-get install -y python3 python3-dev python3-pip nginx
RUN pip3 install uwsgi

COPY ./app ./app

WORKDIR ./app

RUN pip3 install -r requirements.txt

CMD ["python3", "views.py"]
