# DESCRIPTION DU PROJET

## French

L'objectif de ce rapport est le développement d'un système de suivi intelligent de campus utilisant des dispositifs de l'Internet des Objets (IoT), un projet à la pointe de l'innovation technologique combinée au suivi environnemental. L'objectif principal est de collecter en temps réel des données environnementales — spécifiquement la température, l'humidité et la pureté de l'air — et de représenter ces variables de manière visuelle et dynamique sur une carte du campus. Ce système vise non seulement à améliorer la compréhension des conditions environnementales dans différents endroits du campus, mais aussi à offrir des informations exploitables pour améliorer la qualité de vie sur le campus.

Dans une ère où la sensibilisation à l'environnement est de plus en plus cruciale, le déploiement de dispositifs IoT à des fins de surveillance représente un pas important en avant. Ces dispositifs seront stratégiquement placés à travers divers emplacements du campus pour recueillir des données environnementales précises et opportunes. L'intégration de ces données dans une interface cartographique globale fournira une vue intuitive et informative de la santé environnementale du campus. Cette approche s'aligne sur l'accent croissant mis sur les solutions de campus intelligents, où la technologie est exploitée pour créer des environnements éducatifs plus durables, efficaces et confortables.

Le projet comportera plusieurs phases clés : la sélection et l'installation de capteurs IoT appropriés, le développement d'un système de collecte et de traitement de données en temps réel, et la création d'une interface de carte numérique conviviale pour afficher les données. Cette interface ne montrera pas seulement les conditions environnementales actuelles, mais permettra également de suivre les changements au fil du temps, offrant des informations précieuses sur les tendances et les modèles environnementaux du campus.

En mettant en œuvre ce système de suivi intelligent de campus, le projet vise à contribuer de manière significative au bien-être de la communauté du campus, offrant un modèle qui peut être reproduit et adapté dans d'autres institutions éducatives cherchant à exploiter la puissance de l'IoT pour la surveillance environnementale et les initiatives de campus intelligents.

Sure, I will translate the provided text from English to French. 

---

# Spécifications Matérielles :
  ## RAK7240 
  ![image](https://github.com/vendkura/RAK7420_RF210-Project/assets/51537350/1c37815c-2adf-4bd7-8187-b8d47baa2f07)

Le RAK7240 est une passerelle LoRaWAN, idéale pour le déploiement IoT à grande échelle. C'est un appareil robuste et facile à installer, capable de gérer une large gamme de capteurs environnementaux. Les caractéristiques clés incluent :

    Capacités de communication longue portée avec le protocole LoRaWAN.
    Prise en charge de multiples bandes de fréquence.
    Haute capacité, supportant des milliers de nœuds.
    Connectivité Ethernet intégrée et connectivité cellulaire en option.
    Boîtier résistant aux intempéries pour installation en extérieur.
 
  ## RAF210
![top](https://github.com/vendkura/RAK7420_RF210-Project/assets/51537350/5a1726a6-5a07-43d4-9939-83c45a2f9727)

Le RAF210 est un module capteur environnemental de haute précision conçu pour les applications IoT. Les fonctionnalités comprennent :

    Capacité à mesurer la température, l'humidité et la qualité de l'air.
    Conception compacte et économe en énergie.
    Intégration facile avec des appareils IoT comme le RAK7240.

---

# Logiciel et Configuration :
  ## Explorer MQTT
  ![image](https://github.com/vendkura/RAK7420_RF210-Project/assets/51537350/3cec8ae6-07bf-4c62-b81d-9ddc0f24a172)

Explorer MQTT est un outil utilisé pour interagir avec les courtiers MQTT. Il est essentiel pour tester et déboguer votre réseau IoT. Les fonctionnalités clés incluent :

    Abonnement à des sujets pour recevoir des données des capteurs.
    Publication de messages sur des sujets pour le contrôle des appareils.
    Interface pour surveiller le flux de données en temps réel.
    Prise en charge de multiples connexions MQTT.

  ## Arduino
  ![image](https://github.com/vendkura/RAK7420_RF210-Project/assets/51537350/e02e9966-0f7e-45fc-bb61-21d90e9768f6)

Arduino est utilisé pour programmer vos appareils IoT. Pour le RAK7240 et le RAF210, Arduino peut être utilisé pour :

    Injecter un code personnalisé dans les appareils pour une fonctionnalité spécifique.
    Mettre en place des protocoles de communication avec les capteurs.
    Gérer les intervalles de collecte de données et l'étalonnage des capteurs.
    Haute précision et temps de réponse rapide.

  ## Panneau MQTT IoT
![image](https://github.com/vendkura/RAK7420_RF210-Project/assets/51537350/7ed85319-ec05-45e1-9e1f-e472c951b8ab)

Il s'agit d'une application tableau de bord pour visualiser et manipuler les données IoT. Il s'intègre à votre courtier MQTT pour :

    Afficher les données environnementales en temps réel de vos capteurs.
    Fournir une interface conviviale pour l'analyse des données.
    Permettre le contrôle à distance des appareils IoT via des commandes publiées.


---
# Architecture de la solution

![mqtt1](https://github.com/vendkura/RAK7420_RF210-Project/assets/51537350/00a7eae4-3245-4be3-a6af-e671ab82b48e)


---

# Guide d'Installation

L'installation de RAK7240 et RAF210 impliquera :

Étapes d'Installation

    Identification des emplacements optimaux pour une couverture maximale et une précision des données.
    Montage du RAK7240 en extérieur, en assurant une alimentation stable et une connectivité réseau.
    Placement des capteurs RAF210 dans des zones clés pour surveiller les conditions environnementales.
    Assurer que tous les appareils sont solidement connectés et communiquent.

Injection de Code ARDUINO

    Écrire un code pour activer l'appareil RAF.
    Injecter le code dans l'appareil.
    Lancer l'appareil.
    Tester l'appareil et récupérer les données de l'appareil.
CONFIGURER EXPLORER MQTT

    Écrire du code pour activer l'appareil RAF.
    Injecter le code dans l'appareil.
    Lancer l'appareil.
    Tester l'appareil et récupérer les données de l'appareil.

---

# Instructions Utilisateur

Naviguer dans le Panneau MQTT IoT :

    Connexion et Utilisation du Tableau de Bord : Accéder et comprendre la disposition et les fonctionnalités.
    Interprétation des Données : Lire et comprendre les données des capteurs affichées.

Gestion et Analyse des Données :

    Personnalisation : Configurer des vues spécifiques pour différents paramètres environnementaux.
    Analyse des Tendances : Comprendre les modèles de données au fil du temps.
    Exportation des Données : Étapes pour exporter les données pour une utilisation externe.

Contrôle des Appareils via le Panneau MQTT :

    Envoi de Commandes : Contrôler les capteurs RAK7240 ou RAF210.
    Réglages d'Alerte : Configurer des alertes pour les seuils environnementaux.

Arduino pour la Personnalisation de l'Appareil :

    Modification de Code : Accéder, modifier et télécharger le code.
    Mesures de Sécurité : Assurer des changements de code sûrs et efficaces.

