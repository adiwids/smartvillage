#!/bin/sh

cd $(dirname "${0}") > /dev/null
PROJECT_ROOT="$(dirname $(pwd -L))"
cd .. > /dev/null
command=$1
shift

HOST=localhost
PORT=8000
ROOT=$(pwd)
LOG=$PROJECT_ROOT/app/logs/access.log
PID=$PROJECT_ROOT/app/tmp/pids/server.pid
NPMLOG=$PROJECT_ROOT/app/logs/npm.log

for arg in "$@"
do
  case $arg in
    --port=*)
      PORT="${arg#*=}"
      shift
    ;;
    --host=*)
      HOST="${arg#*=}"
      shift
    ;;
    --domain=*)
      DOMAIN="${arg#*=}"
      shift
    ;;
    --root=*)
      ROOT=$PROJECT_ROOT/"${arg#*=}"
      shift
    ;;
    --log=*)
      LOG=$PROJECT_ROOT/"${arg#*=}"
      shift
    ;;
    --pid=*)
      PID=$PROJECT_ROOT/"${arg#*=}"
      shift
    ;;
    --npmlog=*)
      NPMLOG="${arg#*=}"
      shift
    ;;
    *)
      #noop
    ;;
  esac
done
DOMAIN=$HOST:$PORT

if [ ! -d $(dirname $LOG) ]
then
  mkdir -p $(dirname $LOG)
fi

if [ ! -d $(dirname $NPMLOG) ]
then
  mkdir -p $(dirname $NPMLOG)
fi

if [ ! -d $(dirname $PID) ]
then
  mkdir -p $(dirname $PID)
fi

case $command in
  start)
    if [ ! -d $PROJECT_ROOT/app/cache/views ]; then
      mkdir -p $PROJECT_ROOT/app/cache/views
    fi
    nohup php -t $ROOT -S $DOMAIN > $LOG 2>&1 &
    echo $! > $PID
    if [ -e $PROJECT_ROOT/.nvmrc ]
    then
      nvm use
    fi
    npm run build
    npm run $NODE_ENV
    ;;
  stop)
    if [ -e $PID ]
    then
      kill -9 $(cat $PID)
      rm $PID
    fi
    ;;
  *)
    #noop
    ;;
esac
