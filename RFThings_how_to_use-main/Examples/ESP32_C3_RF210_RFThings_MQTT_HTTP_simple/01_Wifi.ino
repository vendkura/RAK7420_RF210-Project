#include <WiFi.h>  // ESP32
const char* ssid = "P507A";
const char* pass = "123456789";

// initWifi ///////////////////////////////////////////////////////////////////////////////////////
void initWifi() {
  dbPrintln("WIFI -> Wait for connection to Wifi");

  WiFi.mode(WIFI_STA);  // WIFI_STA, WIFI_AP, WIFI_AP_STA
  WiFi.begin(ssid, pass);
  while (WiFi.status() != WL_CONNECTED) {
    ledstatus.ledFlasher();
    delay(500);
    dbPrint(".");
  }
  dbPrintln("");

  dbPrint("\n");
  dbPrintln("WIFI -> Connected successfully");
  dbPrint("IP address: ");
  dbPrintln(WiFi.localIP());
}

// WIFI FUNCTION //////////////////////////////////////////////////////////////////////////////////
bool isWifiConnected() {
  return (WiFi.status() == WL_CONNECTED);
}
long wifiStrength() {
  return WiFi.RSSI();
}
void FifiReConnect() {
  WiFi.disconnect();
  WiFi.reconnect();
}