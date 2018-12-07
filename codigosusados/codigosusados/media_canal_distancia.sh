#!/bin/bash
for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
	for j in 5 10 15 20 25 30 35 40 ;do
  		python Calculamedia.py < arquivos/dados$j'mcanal'$i.txt >> mediacanal/potencia_sinal_m_canal$i.txt
	done
done
