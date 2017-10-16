ROOT_DIR="/var/www/html/The_Full_Stack_Web_Develoment"

NPM_DIRS=(
"08_Node.js/8.2_Express_Setup_and_Routing/"
"08_Node.js/8.1_Simple_Server/"
"08_Node.js/8.3_Template_Engines_-_Pug/"
"08_Node.js/8.5_Passport_App/"
)

for i in "${NPM_DIRS[@]}"; do
   screen -dmS portfolio-server bash -c "npm start --prefix ${ROOT_DIR}/$i"
done


METEOR_DIRS=(
"09_Meteor.js/9.1_Simple_App/"
)

for i in "${METEOR_DIRS[@]}"; do
  DIR="${ROOT_DIR}/$i"
  PORT=$(cat ${DIR}port)
  screen -dmS portfolio-server bash -c "cd $DIR && meteor --port $PORT"
done
