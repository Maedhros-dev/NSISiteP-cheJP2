import requests #utilisé pour la requete du mot aleatoire
from unidecode import unidecode #utilisé pour avoir le mot sans accent
from os import system #utilisé pour "clear" le terminal

def deml(): #Pas d'entrée, demande une lettre puis vérifie que l'input est bien valide
    le = input("Veuillez entrer une lettre. ").lower()
    while len(le) != 1 or le in c or le not in "abcdefghijklmnopqrstuvwxyz" : #vérifie 3 condition puis affiche un message d'erreur différent en fonction de l'erreur (si il y en a une)
        if len(le) > 1 : #vérifie qu'il n'y a bien qu'un caractère
            le = input("\nVeuillez entrer UNE lettre. ").lower()
        elif le in c: #vérifie que la lettre n'a pas déjà été entrée
            le = input("\nDéjà dit. Veuillez entrer une lettre. ").lower()
        elif le not in "abcdefghijklmnopqrstuvwxyz" : #vérifier que l'input est bien une lettre
            le = input("\nUne lettre pas autre chose. Veuillez entrer une lettre. ").lower()
        elif len(le) == 0: # vérifie qu'il  y a bien un input
            le = input("\nVeuillez entrer une lettre. ").lower()
    return le

def sep(list): #retourne un str avec chaque element separe par ", "
    return " ; ".join(list)

"""Pour demander le mot (obsolète remplacé par mot aléatoire)
cond = False 
while True:
    Rep = input("Quel mot devra être trouvé ? ").lower()
    for i in Rep : 
        if i not in "abcdefghijklmnopqrstuvwxyz" :
            print("\nQue des lettres pas autre chose (et pas d'accent).")
            cond = False
            break
        cond = True
    if cond is True :
        break
              
for _ in range(100):
    print(" ")
"""

Get = requests.get("https://trouve-mot.fr/api/random").json() #requete du mot aleatoire
Rep = Get[0]["name"].lower() #mot aleatoire depuis le json
sRep = unidecode(Get[0]["name"].lower()) #pour comparer la réponse sans accent avec la lettre entrée
lives = 9 #nombre de vies
c = [] #La liste des lettres déjà entrées
RepX = ""

for _ in Rep: #RepX est ce qui est affiché à chaque tour (le mot masqué)
    RepX += '_'

pendu = ["", #les différents dessins de pendu pour chaque nombre de vie
         "       \n       \n       \n        \n         \n  \n---"
         ,"       \n |     \n |     \n |      \n |       \n |\n---"
         ,"  _____\n |     \n |     \n |      \n |       \n |\n---"
         ,"  _____\n |/    \n |     \n |      \n |       \n |\n---"
         ,"  _____\n |/   |\n |     \n |      \n |       \n |\n---"
         ,"  _____\n |/   |\n |    O\n |      \n |       \n |\n---"
         ,"  _____\n |/   |\n |    O\n |    | \n |       \n |\n---"
         ,"  _____\n |/   |\n |    O\n |    | \n |   / \ \n |\n---"
         ,"  _____\n |/   |\n |    O\n |   -|-\n |   / \ \n |\n---"]
pendu.reverse() #pour mettre la liste dans le bon sens d'utilisation

while RepX != Rep and lives != 0: #Programme principal
    print(f'{pendu[lives]} \n\n Lettres déjà essayés : {sep(c)} \n\n{RepX}\n' if len(c) !=0 else f'{pendu[lives]} \n\n {RepX}\n')
    a = deml() #la lettre entrée à chaque tour
    b = list(sRep) #une liste contenant chaque lettre du mot
    if a in sRep and a not in c: #lettre entrée dans la réponse et pas déjà entrée
        for i, j in enumerate(b): #afin de remettre les lettres au bon emplacement dans le mot masqué
            if j == a: #si la lettre entrée est dans le mot
                RepX = list(RepX) #on la transforme en liste
                RepX[i] = Rep[i] #on remplace les lettres trouvés
                RepX = ''.join(RepX) #puis on le retranforme en str
    else :
        lives -= 1 
    c.append(a) #lettres déjà entrées
    system('clear') #"clear" que pour Unix (Replit utilise Unix), pour windows: "cls"
if lives == 0 : #défaite
    print(f"\n \nVous avez perdu, le mot était {Rep}")
elif RepX == Rep : #victoire
    print(f"\n \nBravo, vous avez gagné ! Le mot était bien {Rep}.")