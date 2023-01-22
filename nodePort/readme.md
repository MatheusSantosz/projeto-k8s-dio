para executar o deployment da nossa imagem criada privada do apache
kubectl.exe apply -f .\app-deployment.yml

para olhar os status das pods se já estao em execucao
kubectl.exe get pods

para olhar quantas pods estão disponiveis
kubectl.exe get deployment

expor o deployment a rota externa criando um loadbalancer

kubectl.exe expose deployment html-deployment --type=LoadBalancer --name=app-html --port=80

para conferir o servico do loadbalancer em qual ip e porta está disponivel
kubectl.exe get service

para buildar a imagem nova
docker build . -t matheusbarbosaa/app-html:1.1

para mandar para o docker rub
docker push matheusbarbosaa/app-html:1.1

para executar o deployment da nossa imagem criada privada do apache com a tag 1.1
kubectl.exe apply -f .\app-deployment.yml

excluindo o servico app-html
kubectl.exe delete service app-html

criando a versao do yml corretamente

Pod        | v1
Deployment | apps/v1
Service    | v1

executando o LoadBalancer
kubectl.exe apply -f .\app--html-lb.yml

diferença entre loadbalancer e nodeport

https://medium.com/google-cloud/kubernetes-nodeport-vs-loadbalancer-vs-ingress-when-should-i-use-what-922f010849e0

pegar o ips dos clusters
kubectl.exe get nodes -o wide

para ver a descricao do pod/app
kubectl.exe describe service myapp-php-service

para desligar o firewall do gcloud
gcloud compute firewall-rules create my-app-php --allow tcp:32081

para o minikube gerar uma url do servico
minikube service myapp-php-service --url

como acessar o container e atualizar ele e acessar o WorkerDir
kubectl.exe exec --stdin --ty myapp-php -- /bin/bash


encaminhar a porta do mysql.yml pod
kubectl.exe port-forward pod/mysql-pod 3306:3306

Qual comando é utilizado para executar aplicações em um Pod?
kubectl exec