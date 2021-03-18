nomes="""
Daniela Ferreira Gama
Maria Eduarda Sabino
Mel Clemente Bulhões
Juliana Alves dos Santos
Rute do Nascimento Silva
Maria Eduarda da Silva Santos

"""

l=sorted(nomes.split("\n"), key= lambda s: s.lower())

for nome in l:
    if nome.lower().strip() != '':
        print("<li>"+nome+"</li>")
