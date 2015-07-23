# wordpress

##Instruções

- dentro do arquivo wp-config.php na raiz do projeto as chamadas de bancp são via variavel de ambiente getenv("VARIAVEL")
- através da url http://{URL_DO_PROJETO}/getcifra.php?phrase=fui%20na%20padaria%20comprar%20pao&key=w127h21shsjsds_$%#
  - onde phrase = palavra a ser cifrada
  - key = hash auxiliar para cifra, NÃO PODE SER MAIOR QUE 16 CARCTERES
- foi utilizado o seguinte algoritomo de cifra https://pt.wikipedia.org/wiki/Twofish
