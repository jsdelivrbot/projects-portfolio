pids=$(screen -ls | grep portfolio-server | cut -d '.' -f 1)

array=$(echo $pids)

for V in $array; do
  screen -S $V -X quit
done
