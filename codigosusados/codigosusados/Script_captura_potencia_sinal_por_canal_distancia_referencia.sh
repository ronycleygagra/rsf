#!/bin/bash
for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
  python analisaDados.py 1 $i < dados1m.txt > distanciareferencia/potencia/dados1mcanal$i.txt
done

