# PROJECT DESCRIPTION
## English
The focus of this report is the development of a smart campus tracking system utilizing Internet of Things (IoT) devices, a project at the forefront of combining technological innovation with environmental monitoring. The core objective is to collect real-time environmental data — specifically, temperature, humidity, and air purity — and to represent these variables visually and dynamically on a campus map. This system not only aims to enhance the understanding of environmental conditions across different campus locations but also seeks to offer actionable insights for improving the quality of campus life.

In an era where environmental awareness is increasingly critical, the deployment of IoT devices for monitoring purposes represents a significant step forward. These devices will be strategically placed across various campus locations to gather accurate and timely environmental data. The integration of this data into a comprehensive mapping interface will provide an intuitive and informative view of the campus's environmental health. This approach aligns with the growing emphasis on smart campus solutions, where technology is leveraged to create more sustainable, efficient, and comfortable educational environments.

The project will involve several key phases: selection and installation of appropriate IoT sensors, development of a real-time data collection and processing system, and creation of a user-friendly digital map interface to display the data. This interface will not only show current environmental conditions but also allow for the tracking of changes over time, providing valuable insights into environmental trends and patterns on campus.

By implementing this smart campus tracking system, the project aims to contribute significantly to the campus community's well-being, offering a model that can be replicated and adapted in other educational institutions seeking to harness the power of IoT for environmental monitoring and smart campus initiatives.

## French

L'objectif de ce rapport est le développement d'un système de suivi intelligent de campus utilisant des dispositifs de l'Internet des Objets (IoT), un projet à la pointe de l'innovation technologique combinée au suivi environnemental. L'objectif principal est de collecter en temps réel des données environnementales — spécifiquement la température, l'humidité et la pureté de l'air — et de représenter ces variables de manière visuelle et dynamique sur une carte du campus. Ce système vise non seulement à améliorer la compréhension des conditions environnementales dans différents endroits du campus, mais aussi à offrir des informations exploitables pour améliorer la qualité de vie sur le campus.

Dans une ère où la sensibilisation à l'environnement est de plus en plus cruciale, le déploiement de dispositifs IoT à des fins de surveillance représente un pas important en avant. Ces dispositifs seront stratégiquement placés à travers divers emplacements du campus pour recueillir des données environnementales précises et opportunes. L'intégration de ces données dans une interface cartographique globale fournira une vue intuitive et informative de la santé environnementale du campus. Cette approche s'aligne sur l'accent croissant mis sur les solutions de campus intelligents, où la technologie est exploitée pour créer des environnements éducatifs plus durables, efficaces et confortables.

Le projet comportera plusieurs phases clés : la sélection et l'installation de capteurs IoT appropriés, le développement d'un système de collecte et de traitement de données en temps réel, et la création d'une interface de carte numérique conviviale pour afficher les données. Cette interface ne montrera pas seulement les conditions environnementales actuelles, mais permettra également de suivre les changements au fil du temps, offrant des informations précieuses sur les tendances et les modèles environnementaux du campus.

En mettant en œuvre ce système de suivi intelligent de campus, le projet vise à contribuer de manière significative au bien-être de la communauté du campus, offrant un modèle qui peut être reproduit et adapté dans d'autres institutions éducatives cherchant à exploiter la puissance de l'IoT pour la surveillance environnementale et les initiatives de campus intelligents.

# Hardware Specifications: 
  ## RAK7240

The RAK7240 is a LoRaWAN gateway, ideal for large-scale IoT deployment. It's a robust, easy to install device, capable of handling a wide range of environmental sensors. Key features include:

    Long-range communication abilities with LoRaWAN protocol.
    Support for multiple frequency bands.
    High-capacity, supporting thousands of nodes.
    Built-in Ethernet and optional cellular connectivity.
    Weatherproof casing for outdoor installation.

# Hardware Specifications: R
  ## AF210

The RAF210 is a high-precision environmental sensor module designed for IoT applications. Features include:

    Capabilities to measure temperature, humidity, and air quality.
    Compact and energy-efficient design.
    Easy integration with IoT devices like the RAK7240.
    
# Software and Configuration: 
  ## Explorer MQTT

Explorer MQTT is a tool used for interacting with MQTT brokers. It's essential for testing and debugging your IoT network. Key functionalities include:

    Subscribing to topics to receive data from sensors.
    Publishing messages to topics for device control.
    Interface for monitoring real-time data flow.
    Support for multiple MQTT connections.

  ## Arduino

Arduino is used to program your IoT devices. For the RAK7240 and RAF210, Arduino can be used to:

    Inject custom code into the devices for specific functionality.
    Set up communication protocols with the sensors.
    Manage data collection intervals and sensor calibration.
    High accuracy and fast response times.

  ## IoT MQTT Panel

This is a dashboard application for visualizing and manipulating IoT data. It integrates with your MQTT broker to:

    Display real-time environmental data from your sensors.
    Provide a user-friendly interface for data analysis.
    Allow remote control of IoT devices through published commands.
    
# Installation Guide

Considering your smart campus project, the installation of RAK7240 and RAF210 will involve:

    Identifying optimal locations for maximum coverage and data accuracy.
    Mounting the RAK7240 outdoors, ensuring a stable power supply and network connectivity.
    Placing RAF210 sensors in key areas to monitor environmental conditions.
    Ensuring all devices are securely connected and communicating.
