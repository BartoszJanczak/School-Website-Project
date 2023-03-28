<?php
class TablicaOperacje {
    private $tablica = array();

    public function dodaj($element, $indeks, $wartosc) {
        $this->tablica[] = array("element" => $element, "indeks" => $indeks, "wartosc" => $wartosc);
    }

    public function usun($indeks) {
        unset($this->tablica[$indeks]);
    }

    public function sortuj() {
        usort($this->tablica, function($a, $b) {
            return strcmp($a["element"], $b["element"]);
        });
    }

    public function edytuj($indeks, $wartosc) {
        $this->tablica[$indeks] = $wartosc;
    }

    public function pobierz() {
        return $this->tablica;
    }
}
?>