#!/bin/bash
for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
  python analisaDados.py 1 $i < experimento_1hora_5m_10m.txt > arquivos/dados5mcanal$i.txt
done
for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
  python analisaDados.py 2 $i < experimento_1hora_5m_10m.txt > arquivos/dados10mcanal$i.txt
done


for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
  python analisaDados.py 1 $i < experimento_1hora_15m_20m.txt > arquivos/dados15mcanal$i.txt
done
for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
  python analisaDados.py 2 $i < experimento_1hora_15m_20m.txt > arquivos/dados20mcanal$i.txt
done


for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
  python analisaDados.py 1 $i < experimento_1hora_25m_30m.txt > arquivos/dados25mcanal$i.txt
done
for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
  python analisaDados.py 2 $i < experimento_1hora_25m_30m.txt > arquivos/dados30mcanal$i.txt
done

for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
  python analisaDados.py 1 $i < experimento_1hora_35m_40m.txt > arquivos/dados35mcanal$i.txt
done
for i in 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26; do
  python analisaDados.py 2 $i < experimento_1hora_35m_40m.txt > arquivos/dados40mcanal$i.txt
done
