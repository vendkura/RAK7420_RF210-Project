# RAF3172 DOCUMENTATION

```
Ce tutoriel est dedie a montrer pas a pas comment nous avons configurer et adapter RAF3172 a notre projet.
Le tutoriel consistera a :
- Installer les outils necessaires
- Configurer le RAF3172 pour l'utiliser sur ARDUINO IDE 2.2.1 
```
## DETAIL DU MODULE RF3210
```
Ce module a été créé à des fins éducatives pour soutenir des cours portant sur les logiciels embarqués, l'électronique numérique et analogique, les télécommunications, le traitement des signaux et l'Internet des objets (IoT).
Il est basé sur un ESP32-C3 en tant que microcontrôleur principal pour le code utilisateur.
L'ESP32-C3 utilisee peut contrôler un module RAK3172, qui intègre un transcepteur LoRaWAN qui est connecté à un module GNSS ainsi qu'à divers capteurs. Les différentes fonctionnalités peuvent être exploitées en utilisant la COMMANDE-AT.
```
Presentation du Module 
- Images avec Carton

- Image exterieur de la boite contenant le module

- Image Interne de la boite : Le module en lui meme
    -- Image du dessus  
![top](https://github.com/vendkura/RAK7420_RF210-Project/assets/51537350/5a1726a6-5a07-43d4-9939-83c45a2f9727)

    -- Vue de l'ensemble
![bot](https://github.com/vendkura/RAK7420_RF210-Project/assets/51537350/006058ea-5989-4b9c-b93f-03d21f437e98)

    -- Vue de la connexion USB
![usb](https://github.com/vendkura/RAK7420_RF210-Project/assets/51537350/a75778fd-561c-4d5a-a28c-8d982e68024f)


## SPECIFICITES DU MODULE RF3210

RF3210 firmware ATC version 0.1.2

Capteurs supporter:

Digital humidity and temperature sensor - SHTC3
Tri-Axis Accelerometer - KX023-1025
Ambient Light Sensor - LTR-303ALS-01
GNSS LC76F

## LOGICIELS ANNEXES

- Arduino IDE (version v1.8.13 or above is recommended)
- RUI3 lastest firmware for RAK3172: RAK3172-E_latest_final.hex
- (STM32CubeProgammer)[https://www.st.com/en/development-tools/stm32cubeprog.html]

## LIENS UTILES
- https://github.com/XuanMinh201/RF210
- https://github.com/FabienFerrero/SUCA
- https://github.com/RFThings/rfthings-stm32l4

