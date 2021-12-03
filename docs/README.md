# Hyper-V versione client
[![GitHub license](https://img.shields.io/badge/license-GNU-green?style=flat)](https://github.com/CastellaniDavide/cpp-webservice/blob/master/LICENSE) ![Author](https://img.shields.io/badge/author-Bellamoli%20Riccardo-green?style=flat)  ![Author](https://img.shields.io/badge/author-Castellani%20Davide-green?style=flat) 

## Table of Contents
- [ ] [Hyper-V versione client](#hyper-v-versione-client)
  - [ ] [Table of Contents](#table-of-contents)
  - [ ] [Attivazione Hyper-V](#attivazione-hyper-v)
  - [ ] [Creazione della scheda rete](#creazione-della-scheda-rete)
  - [ ] [Creazione macchina virtuale (livello base)](#creazione-macchina-virtuale-livello-base)
  - [ ] [Creazione macchina virtuale (livello avanzato)](#creazione-macchina-virtuale-livello-avanzato)
  - [ ] [Installazione XAMPP](#installazione-xampp)
  - [ ] [Gestione DB (mediante PhpMyAdmin)](#gestione-db-mediante-phpmyadmin)
  - [ ] [Creazione di una pagina PHP e collegarla col DB](#creazione-di-una-pagina-php-e-collegarla-col-db)
  - [ ] [Separazione dei servizi](#separazione-dei-servizi)
  - [ ] [Impostazione URL](#impostazione-url)

## Attivazione Hyper-V
- [ ] Andare sulla barra delle applicazioni ed aprire `App e funzionalità`
- [ ] Nel menu a destra cliccare `Programmi e funzionalità`
- [ ] Nel menu a sinistra `Attivazione o disattivazione delle funzionalità Windows`
- [ ] Spuntare Hyper-V, e premere il pulsante `OK`
- [ ] Ti si aprirà un box, e dovrete riavviare il PC

## Creazione della scheda rete
- [ ] Nel menu a destra cliccare su `Gestione commutatori virtuali…`
- [ ] Andare su `Nuovo commutatore di rete virtuale`
- [ ] Selezionare `Esterna`
- [ ] Poi cliccare `Crea commutatore virtuale`
- [ ] Come nome mettere `MARCONI\_5ci`
- [ ] Premere `Applica` e poi `Sì`

## Creazione macchina virtuale (livello base)
- [ ] Aprire la console di Hyper-V
- [ ] Selezionare a sinistra la propria macchina 
- [ ] A destra cliccare `Creazione rapida…`
- [ ] Selezionare la macchina desiderata (consigliamo una macchina Ubuntu LTS) e cliccare `Crea macchina virtuale`
- [ ] Attendere che il download finisca
- [ ] Alla fine del download cliccare su `Connetti`
- [ ] Vi si aprirà la finestra della macchina virtuale, quindi premere `Avvia`
- [ ] Selezionare da menu `Ubuntu`, e premere invio
- [ ] Configurare l’OS

## Creazione macchina virtuale (livello avanzato)
- [ ] Cliccare su `Nuovo` e `Macchina virtuale…`
- [ ] Premere `Avanti`
- [ ] (Dare un nome alla VM)
- [ ] Premere `Avanti` per due volte
- [ ] (Cambiare la quantità di RAM, fino a metà del vostro Computer)
- [ ] Premere `Avanti`
- [ ] Connessione → `Default Switch`
- [ ] Premere `Avanti` per tre volte
- [ ] Premere `Fine`
- [ ] Andare nelle impostazioni della VM
- [ ] Andare in `Unità DVD`
- [ ] Cliccare su `File immagine:`
- [ ] Selezionare il percorso della ISO
- [ ] Avviare la macchina

## Installazione XAMPP
- [ ] Aggiornare il sistema (per Ubuntu `sudo apt full-upgrade`)
- [ ] Scaricare l’installer dal sito (<https://www.apachefriends.org>)
- [ ] (Per sistemi Linux cambiare i diritti `sudo chmod 755 ./<nome\_pacchetto>`)
- [ ] Eseguire il runner
- [ ] Premere `Next >` continuamente, fino a fine installazione
- [ ] Finito l’installazione si può aprire l’applicazione XAMPP
- [ ] (Per Ubuntu/ Debian eseguire nano ~/.bashrc ed infine al file aggiungere: alias xampp=`sudo /opt/lampp/xampp` e nella riga seguente: alias xampp-gui=`sudo /opt/lampp/manager-linux-x64.run`. Infine chiudere e riaprire il terminale)

## Gestione DB (mediante PhpMyAdmin)
- [ ] Aprire il browser e scrivere `localhost/phpmyadmin/`
- [ ] Andare su `User accounts`
- [ ] Nella voce `New` cliccare `Add user account`
- [ ] Compilare il form per la creazione dell’account ed infine premere `Go`
- [ ] Nel menù a sinistra premere `New`, dare un nome al DB e premere `Create`
- [ ] Vi si aprirà una schermata per la creazione di una tabella, dare un nome ed il numero di campi
- [ ] In seguito compilare il form per la creazione dei campi della tabella e finalizzare col pulsante `Save`
- [ ] Per inserire i dati si può andare su `Insert`, per la modalità grafica, oppure su `SQL`

## Creazione di una pagina PHP e collegarla col DB
- [ ] Da terminale modificare il file `index.php` scrivendo `sudo nano /opt/lampp/htdocs/index.php` se si utilizza Ubuntu/ Debian
- [ ] Creare il proprio progetto

## Separazione dei servizi
- [ ] Clonare la macchina virtuale
- [ ] Su una delle due macchine attivare solo Apache e nell'altra solo MySQL
- [ ] Nella macchina con Apache cambiare il file di cofigurazione "conn.php" nel parametro "servername" impostare l'indirizzo IP dell'altro computer (su Linux per prendere l'attuale indirizzo IP, su terminale, digitare: `ip a`)
- [ ] Controllare il corretto funzionamento 

## Impostazione URL
Windows:
- [ ] Aprire esplora risorse
- [ ] Modificare come amministratore il file con path: `C:\Windows\System32\Drivers\etc\hosts`
- [ ] Aggiungere una riga in fondo al file nel seguente formato `{IP} {alias}`, sostituendo `{IP}` con l'indirizzo IP (il localhost è 127.0.0.1) e come `{alias}` un nome a scelta (per esempio)
- [ ] Salvare il file

Linux:
- [ ] Aprire il terminale
- [ ] Modificare il file hosts `sudo nano \etc\hosts`
- [ ] Aggiungere una riga in fondo al file nel seguente formato `{IP} {alias}`, sostituendo `{IP}` con l'indirizzo IP (il localhost è 127.0.0.1) e come `{alias}` un nome a scelta (per esempio)
- [ ] Salvare il file premendo `CRTL + X`, poi inserendo `y` ed infine premere invio
