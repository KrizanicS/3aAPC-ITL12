# 3aAPC-ITL12

## Aufgabe 1

### 1. Aufgabenstellung

- **Kommunikationsablauf**: Webserver und Client/Browser
- **Installation der Entwicklungsumgebung**:
  - Webserver + PHP + MySQL/MariaDB (oder Alternativen)
  - Editor mit PHP-Support
- **Sicherheitsrisiken von Webanwendungen**:
  - Phishing
  - Datendiebstahl
  - SQL Injections
  - Cross-Site-Scripting (XSS)
  - Session-Hijacking
  - Denial of Service (DoS)
- **Maßnahmen zum Schutz von Webanwendungen**:
  - Verschlüsselung
  - Multifaktor-Authentifizierung
  - Sanitizing/Prepared Statements

---

### 2. Lösung

#### Kommunikationsablauf – Webserver und Client/Browser

1. Client sendet HTTP-Anfrage.
2. Webserver verarbeitet die Anfrage.
3. Webserver sendet HTTP-Antwort.
4. Client rendert den Inhalt.

---

#### Installation der Entwicklungsumgebung

1. Webserver (Apache/Nginx) installieren.
2. PHP installieren.
3. MySQL/MariaDB installieren.
4. Editor mit PHP-Support (z. B. VS Code) installieren.

---

#### Sicherheitsrisiken von Webanwendungen

- **Phishing**: Täuschung von Benutzern, um sensible Daten zu stehlen.
- **Datendiebstahl**: Unbefugter Zugriff auf Daten.
- **SQL Injections**: Manipulation von Datenbankabfragen.
- **Cross-Site-Scripting (XSS)**: Einfügen von schädlichem Code auf Webseiten.
- **Session-Hijacking**: Übernahme einer Benutzersitzung.
- **Denial of Service (DoS)**: Überlastung des Servers, um Dienste unzugänglich zu machen.

---

#### Maßnahmen zum Schutz von Webanwendungen

1. **Verschlüsselung**: Verwendung von HTTPS, um Daten sicher zu übertragen.
2. **Multifaktor-Authentifizierung**: Erhöht die Sicherheit durch zusätzliche Verifizierungsschritte.
3. **Sanitizing/Prepared Statements**: Schützt vor SQL Injections und XSS, indem Eingaben sicher verarbeitet werden.
