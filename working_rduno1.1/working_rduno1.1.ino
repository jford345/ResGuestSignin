#include <MFRC522.h>  //this is the library needed to run connect to the rfid board
#include <Keyboard.h> //this is the library that is used to connect to our computer keyboard

// Define the RFID reader pins
#define SS_PIN 10 
#define RST_PIN 9
//this is using the keyboard to print out my info from my id


MFRC522 mfrc522(SS_PIN, RST_PIN);  // Create MFRC522 instance

void setup() {
  Serial.begin(9600);  // Initialize serial communication
  while (!Serial) {  // Wait for serial connection
    ; 
  }

  // Initialize RFID reader
  SPI.begin();  // this begins the program
  mfrc522.PCD_Init();  // this activates or starts the rfid(MFRC522) card to be able to use
  
  // this is used to prep the kwyboard to be able to be used to write it. 
  Keyboard.begin();
}

void loop() {
  // Look for new RFID cards
  if (mfrc522.PICC_IsNewCardPresent() && mfrc522.PICC_ReadCardSerial()) {
    // Read the card's UID
    String uid = "";
    for (byte i = 0; i < mfrc522.uid.size; i++) {
      uid += String(mfrc522.uid.uidByte[i], HEX);
    }
    
    // Output the UID to the serial monitor and the keyboard
    Serial.println("RFID tag detected: " + uid);
    Keyboard.print(uid);
    Keyboard.press(KEY_RETURN);9c4313e0
    634431b7
    634431b7
    
    Keyboard.releaseAll();
    
    // Wait for card to be removed before continuing
    mfrc522.PICC_HaltA();
    mfrc522.PCD_StopCrypto1();
  }
}
