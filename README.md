# 3aAPC-ITL12

## Aufgabe 2

### PHP-Konfigurationseinstellungen

#### PHP-Fehler ausgeben
- **display_errors = On**  
  Aktiviert die Anzeige von PHP-Fehlern direkt im Browser.  
  **Hinweis:** Nützlich für die Entwicklung, sollte in Produktionsumgebungen deaktiviert werden.

- **error_reporting = E_ALL**  
  Stellt sicher, dass alle Fehler, Warnungen und Hinweise ausgegeben werden.

- **log_errors = On**  
  Aktiviert das Protokollieren von Fehlern in einer Log-Datei, anstatt sie im Browser anzuzeigen.  
  **Hinweis:** Besonders nützlich in Produktionsumgebungen, da die Fehler für Entwickler zugänglich bleiben, ohne Benutzern sensible Informationen preiszugeben.

  **Beispiel für Logging:**  
  `error_log = /var/log/php_errors.log`

---

#### Speichernutzung und Laufzeit limitieren
- **memory_limit = 128M**  
  Begrenzung der maximalen Speichermenge, die ein PHP-Skript verwenden darf.  
  **Vorteil:** Schont Serverressourcen und verhindert, dass ein einzelnes Skript zu viel Speicher verbraucht.

- **max_execution_time = 30**  
  Legt die maximale Ausführungszeit eines PHP-Skripts in Sekunden fest.  
  **Vorteil:** Verhindert, dass Skripte zu lange laufen und Serverressourcen blockieren.

---

#### Sicherheitseinstellungen
- **allow_url_fopen = Off**  
  Deaktiviert die Möglichkeit, Dateien über URL-Wrapper wie `http` oder `ftp` zu öffnen.  
  **Vorteil:** Reduziert Sicherheitsrisiken durch das Einbinden externer Dateien.

---

#### Sitzungsverwaltung
- **session.auto_start = Off**  
  Verhindert, dass PHP automatisch eine Session startet, wenn ein Skript ausgeführt wird.  
  **Vorteil:** Gibt dem Entwickler mehr Kontrolle darüber, wann und ob eine Session gestartet werden soll.


## Benzinkosten Berechnung

Die Datei [calcRequest.php](calcRequest.php) enthält ein PHP-Skript zur Berechnung der Benzinkosten basierend auf zwei Tankfüllungen und dem Preis pro Liter. 

### Funktionsweise

1. **HTML-Formular**: 
   - Das Formular ermöglicht die Eingabe von zwei Tankfüllungen (in Litern) und dem Preis pro Liter.
   - Nach dem Absenden des Formulars werden die Daten per POST-Methode an das Skript gesendet.

2. **PHP-Skript**:
   - Die Funktion `calculateFullCapacityPrice` berechnet die Gesamtkosten basierend auf den eingegebenen Werten.
   - Wenn das Formular abgesendet wird, werden die eingegebenen Werte ausgelesen und in die Funktion `calculateFullCapacityPrice` übergeben.
   - Das Ergebnis wird als HTML-Ausgabe auf der Seite angezeigt.

### Beispiel
```php
function calculateFullCapacityPrice($literPrice, $tankCapacity1, $tankCapacity2)
{
    $fullTankCapacity = $tankCapacity1 + $tankCapacity2;
    $result = $fullTankCapacity * $literPrice;
    return "Die Benzinkosten betragen für " . $fullTankCapacity . " Liter " . $result . "€";
}