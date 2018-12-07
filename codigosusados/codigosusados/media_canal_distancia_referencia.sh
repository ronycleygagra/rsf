#!/bin/bash
for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
	python Calculamedia.py < distanciareferencia/potencia/dados1mcanal$i.txt >> distanciareferencia/media/potencia_sinal_m_referencia_canal$i.txt
done
