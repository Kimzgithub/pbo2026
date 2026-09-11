<?php
class Publish {
    public string $nama;
    public string $alamat;
    private string $hp;

    public function SettingHP(int $hp): void {
        $this->hp = (string) $hp;
    }
    public function getphone(): int {
        return (int) $this->hp;
    }
}