xxxxxxxxxxxxxxxxxxxxxxxxxxx NODEMCU ESP-8266 + Capacitive Soil Moisture Sensor xxxxxxxxxxxxxxxxxxxxxxxxxxx

const int analogInPin = A0;   
int sensorValue = 0;        // ตัวแปรค่า Analog 
int outputValue = 0;        // ตัวแปรสำหรับ Map เพื่อคิด % 
 
void setup() { 
  Serial.begin(9600); 
} 

void loop() { 
  sensorValue = analogRead(analogInPin);    
  outputValue = map(sensorValue, 0, 1023, 100, 0); 

  Serial.print("Soil Moisture = "); 
  Serial.print(outputValue); 
  Serial.println(" %"); 
  delay(1000); 
} 

xxxxxxxxxxxxxxxxxxxxxxxxxxx NODEMCU ESP-8266 + Capacitive Soil Moisture Sensor xxxxxxxxxxxxxxxxxxxxxxxxxxx



xxxxxxxxxxxxxxxxxxxxxxxxxxx NODEMCU ESP-8266 + Relay 5V xxxxxxxxxxxxxxxxxxxxxxxxxxx

void setup() {
  Serial.begin(9600);
  pinMode(D5, OUTPUT);  //D5 คือพินที่เชื่อมกับรีเลย์เพื่อเปิด/ปิดปั้มน้ำ
}

void loop() {
  digitalWrite(D5, HIGH);
  Serial.println("Relay is ON");
  delay(1000);
  digitalWrite(D5, LOW);
  Serial.println("Relay is OFF");
  delay(1000);
}

xxxxxxxxxxxxxxxxxxxxxxxxxxx NODEMCU ESP-8266 + Relay 5V xxxxxxxxxxxxxxxxxxxxxxxxxxx



xxxxxxxxxxxxxxxxxxxxxxxxxxx NODEMCU ESP-8266 + Capacitive Soil Moisture Sensor + Relay 5V xxxxxxxxxxxxxxxxxxxxxxxxxxx

const int analogInPin = A0;   
int sensorValue = 0;        // ตัวแปรค่า Analog 
int outputValue = 0;        // ตัวแปรสำหรับ Map เพื่อคิด % 
 
void setup() { 
  Serial.begin(9600); 
  pinMode(D5, OUTPUT);    //D5 คือพินที่เชื่อมกับรีเลย์เพื่อเปิด/ปิดปั้มน้ำ 
} 
 
void loop() { 
  sensorValue = analogRead(analogInPin);    
  outputValue = map(sensorValue, 0, 1023, 100, 0); 

  Serial.print("Soil Moisture = "); 
  Serial.print(outputValue); 
  Serial.println(" %"); 

  if (outputValue <= 40) {  //ตั้งค่า % ที่ต้องการจะรดน้ำต้นไม้ 
    digitalWrite(D5, HIGH); 
    Serial.println("Relay is ON");
    delay(500); 
  } 

  if (outputValue >= 40) { 
    digitalWrite(D5, LOW); 
    Serial.println("Relay is OFF");
    delay(500); 
  } 
  delay(1000); 
} 

xxxxxxxxxxxxxxxxxxxxxxxxxxx NODEMCU ESP-8266 + Capacitive Soil Moisture Sensor + Relay 5V xxxxxxxxxxxxxxxxxxxxxxxxxxx


xxxxxxxxxxxxxxxxxxxxxxxxxxx Blynk xxxxxxxxxxxxxxxxxxxxxxxxxxx

#define BLYNK_PRINT Serial

#define BLYNK_TEMPLATE_ID "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
#define BLYNK_DEVICE_NAME "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
#define BLYNK_AUTH_TOKEN "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"

#include <ESP8266WiFi.h>
#include <BlynkSimpleEsp8266.h>

char auth[] = BLYNK_AUTH_TOKEN;
char ssid[] = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
char pass[] = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";


const int analogInPin = A0;
int sensorValue = 0;  // ตัวแปรค่า Analog
int outputValue = 0;  // ตัวแปรสำหรับ Map เพื่อคิด %
bool mode = false;
String statusm = "Please Select Mode";

//Manaul
BLYNK_WRITE(V0) {
  int pinValue = param.asInt();
  if (pinValue == 1) {
    digitalWrite(D5, HIGH);
    Blynk.setProperty(V2, "isDisabled", true);
    statusm = "ON";
  } else {
    digitalWrite(D5, LOW);
    Blynk.setProperty(V2, "isDisabled", false);
    statusm = "OFF";
    statusm = "Please Select Mode";
  }
}

//Auto
BLYNK_WRITE(V2) {
  int pinValue2 = param.asInt();
  if (pinValue2 == 1) {
    mode = true;
    Blynk.setProperty(V0, "isDisabled", true);
  } else {
    mode = false;
    digitalWrite(D5, LOW);
    Blynk.setProperty(V0, "isDisabled", false);
    statusm = "Please Select Mode";
  }
}


void setup() {
  Serial.begin(9600);
  pinMode(D5, OUTPUT);

  WiFi.begin(ssid, pass);
  Serial.printf("WiFi connecting to %s\n", ssid);
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(400);
  }
  Serial.printf("\nWiFi connected\nIP : ");
  Serial.println(WiFi.localIP());

  Blynk.begin(auth, ssid, pass);
  Blynk.setProperty(V2, "isDisabled", false);
  Blynk.setProperty(V0, "isDisabled", false);
  Blynk.virtualWrite(V0, LOW);
  Blynk.virtualWrite(V2, LOW);
}

void loop() {
  sensorValue = analogRead(analogInPin);
  outputValue = map(sensorValue, 0, 1023, 100, 0);

  Blynk.run();

  Serial.print("Soil Moisture = ");
  Serial.print(outputValue);
  Serial.println(" %");
  Serial.println(statusm);

  Blynk.virtualWrite(V1, outputValue);

  if (mode && outputValue <= 40) {  //ตั้งค่า % ที่ต้องการจะรดน้ำต้นไม้
    digitalWrite(D5, HIGH);
    statusm = "ON";
  }

  if (mode && outputValue >= 40) {
    digitalWrite(D5, LOW);
    statusm = "OFF";
  }
  delay(1000);
}

xxxxxxxxxxxxxxxxxxxxxxxxxxx Blynk xxxxxxxxxxxxxxxxxxxxxxxxxxx



xxxxxxxxxxxxxxxxxxxxxxxxxxx Blynk + Line Notify xxxxxxxxxxxxxxxxxxxxxxxxxxx

#define BLYNK_PRINT Serial

#define BLYNK_TEMPLATE_ID "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
#define BLYNK_DEVICE_NAME "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
#define BLYNK_AUTH_TOKEN "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"

#define LINE_TOKEN "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"

#include <ESP8266WiFi.h>
#include <BlynkSimpleEsp8266.h>
#include <TridentTD_LineNotify.h>

char auth[] = BLYNK_AUTH_TOKEN;
char ssid[] = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
char pass[] = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";


const int analogInPin = A0;
int sensorValue = 0;  // ตัวแปรค่า Analog
int outputValue = 0;  // ตัวแปรสำหรับ Map เพื่อคิด %
bool mode = false;
String statusm = "Please Select Mode";

String flaq = "true";
String alertHumid1 = "แจ้งเตือน : ความชื้นมีค่าน้อยกว่า 59% ระบบกำลังทำการลดน้ำต้นไม้";
String alertHumid2 = "แจ้งเตือน : ความชื้นมีค่ามากกว่า 59% ระบบหยุดลดน้ำต้นไม้";
String alertAuto1 = "แจ้งเตือน : ระบบรดน้ำ อัตโนมัติ กำลังทำงาน";
String alertAuto2 = "แจ้งเตือน : ระบบรดน้ำ อัตโนมัติ ปิดการทำงาน";
String alertManual1 = "แจ้งเตือน : คุณกำลัง รดน้ำด้วยตัวเอง อย่าลืมมาปิดนะ";
String alertManual2 = "แจ้งเตือน : คุณได้ ปิดน้ำแล้ว น้ำไม่ไหลแล้ว อยากใช้ระบบรดน้ำอัตโนมัติไหม??";

//Manaul
BLYNK_WRITE(V0) {
  int pinValue = param.asInt();
  if (pinValue == 1) {
    LINE.notify(alertManual1);
    digitalWrite(D5, HIGH);
    Blynk.setProperty(V2, "isDisabled", true);
    statusm = "ON";
  } else {
    LINE.notify(alertManual2);
    digitalWrite(D5, LOW);
    Blynk.setProperty(V2, "isDisabled", false);
    statusm = "OFF";
    statusm = "Please Select Mode";
  }
}

//Auto
BLYNK_WRITE(V2) {
  int pinValue2 = param.asInt();
  if (pinValue2 == 1) {
    LINE.notify(alertAuto1);
    mode = true;
    Blynk.setProperty(V0, "isDisabled", true);
  } else {
    LINE.notify(alertAuto2);
    mode = false;
    digitalWrite(D5, LOW);
    flaq = "true";
    Blynk.setProperty(V0, "isDisabled", false);
    statusm = "Please Select Mode";
  }
}


void setup() {
  Serial.begin(9600);
  pinMode(D5, OUTPUT);

  Serial.println(LINE.getVersion());

  WiFi.begin(ssid, pass);
  Serial.printf("WiFi connecting to %s\n", ssid);
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(400);
  }
  Serial.printf("\nWiFi connected\nIP : ");
  Serial.println(WiFi.localIP());

  Blynk.begin(auth, ssid, pass);
  Blynk.setProperty(V2, "isDisabled", false);
  Blynk.setProperty(V0, "isDisabled", false);
  Blynk.virtualWrite(V0, LOW);
  Blynk.virtualWrite(V2, LOW);

  // กำหนด Line Token
  LINE.setToken(LINE_TOKEN);
  LINE.notify("ระบบ Smart Farm พร้อมใช้งาน");
}

void loop() {
  sensorValue = analogRead(analogInPin);
  outputValue = map(sensorValue, 0, 1023, 100, 0);

  Blynk.run();

  Serial.print("Soil Moisture = ");
  Serial.print(outputValue);
  Serial.println(" %");
  Serial.println(statusm);

  Blynk.virtualWrite(V1, outputValue);

  if (mode && outputValue <= 40 && flaq == "true") {  //ตั้งค่า % ที่ต้องการจะรดน้ำต้นไม้
    digitalWrite(D5, HIGH);
    LINE.notify(alertHumid1);
    flaq = "false";
    statusm = "ON";
  }

  if (mode && outputValue >= 40 && flaq == "false") {
    digitalWrite(D5, LOW);
    LINE.notify(alertHumid2);
    flaq = "true";
    statusm = "OFF";
  }
  delay(1000);
}

xxxxxxxxxxxxxxxxxxxxxxxxxxx Blynk + Line Notify xxxxxxxxxxxxxxxxxxxxxxxxxxx









