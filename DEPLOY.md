# Deploy e sincronizzazione

## Flusso che usi

- **Ogni salvataggio** → i file vengono caricati su Aruba (tramite estensione in Cursor).
- **Quando le modifiche sono definitive** → fai un push su Git a mano per salvare la versione nel repository.

---

## 1. Upload su Aruba a ogni salvataggio (Cursor)

Serve l’estensione **SFTP** (di Natizyskunk) in Cursor, che supporta FTP e “upload on save”.

### Passi

1. **Installa l’estensione SFTP**  
   In Cursor: Extensions (Ctrl+Shift+X) → cerca “SFTP” → installa **SFTP** di **Natizyskunk**.

2. **Crea la config dal modello**  
   - Crea la cartella `.vscode` nella root del progetto se non c’è.  
   - Copia `sftp.json.example` in `.vscode/sftp.json` (l’estensione legge solo da qui).

3. **Compila i dati Aruba in `.vscode/sftp.json`**  
   Apri `sftp.json` e sostituisci:
   - `host`: host FTP Aruba (es. `ftp.centrosaluteroma.it` o quello indicato nel pannello)
   - `username`: utente FTP
   - `password`: password FTP
   - `remotePath`: cartella remota del sito **con slash finale** (es. `public_html/` o `centrosaluteroma.it/`)

   Se Aruba usa **FTPS**, aggiungi nella config:
   ```json
   "secure": true,
   "port": 990
   ```
   (e imposta la porta che indica Aruba, spesso 990).

4. **Riapri la cartella del progetto (o riavvia Cursor)**  
   Chiudi e riapri la root del progetto in Cursor (o riavvia Cursor) così l’estensione carica `sftp.json`.

Da questo momento, **ogni volta che salvi un file** (Ctrl+S), quel file viene caricato su Aruba.  
`sftp.json` è in `.gitignore`, quindi la password non finisce su GitHub.

---

## 2. Push su Git solo quando è tutto definitivo

Quando hai finito le modifiche e vuoi registrarle nel repository:

```bash
git add .
git commit -m "Descrizione delle modifiche"
git push origin main
```

Il push aggiorna solo GitHub. L’upload su Aruba avviene già con il salvataggio in Cursor (punto 1).  
Se hai lasciato attivo anche il workflow GitHub Actions, a ogni push verrà comunque fatto un deploy su Aruba (puoi tenerlo come backup o disattivarlo se preferisci solo l’upload on save).

---

## Riepilogo

| Azione              | Effetto                          |
|---------------------|----------------------------------|
| Salvi un file       | Upload immediato su Aruba        |
| Push su Git         | Aggiorni il repository (e opzionalmente il deploy via Actions) |
