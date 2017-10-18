ROOT_DIR="/var/www/html/The_Full_Stack_Web_Develoment/"

NODE_ROOT_DIR="08_Node.js/"
NODE_DIRS=(
"8.2_Express_Setup_and_Routing/"
"8.1_Simple_Server/"
"8.3_Template_Engines_-_Pug/"
"8.5_Passport_App/"
)
for i in "${NODE_DIRS[@]}"; do
  DIR="${ROOT_DIR}${NODE_ROOT_DIR}$i"
  screen -dmS portfolio-server bash -c "npm start --prefix $DIR"
done


METEOR_ROOT_DIR="09_Meteor.js/"
METEOR_DIRS=(
"9.1_Quick_todos/"
)
for i in "${METEOR_DIRS[@]}"; do
  DIR="${ROOT_DIR}${METEOR_ROOT_DIR}$i"
  PORT=$(cat ${DIR}port)
  screen -dmS portfolio-server bash -c "cd $DIR && meteor --port $PORT"
done

ANGULAR_ROOT_DIR="10_Angular/"
ANGULAR_DIRS=(
"10.1_quickstart/"
"10.2_quickstart_customized/"
"10.3_components_and_properties/"
"10.4_events_and_binding/"
"10.5_services/"
"10.6_http_and_observables/"
"10.7_routing/"
)
for i in "${ANGULAR_DIRS[@]}"; do
  DIR="${ROOT_DIR}${ANGULAR_ROOT_DIR}$i"
  PORT=$(cat ${DIR}port)
  screen -dmS portfolio-server bash -c "cd ${ROOT_DIR}${ANGULAR_ROOT_DIR}/$i && ng serve --port $PORT"
done

RAILS_ROOT_DIR="12_Ruby_On_Rails/"
RAILS_DIRS=(
"12.1_quickstart/"
"12.2_RailsApp_Part1/"
"12.3_RailsApp_Part2/"
)
for i in "${RAILS_DIRS[@]}"; do
  DIR="${ROOT_DIR}${RAILS_ROOT_DIR}$i"
  PORT=$(cat ${DIR}port)
  screen -dmS portfolio-server bash -c "cd ${ROOT_DIR}${RAILS_ROOT_DIR}/$i && rails s -p $PORT"
done
