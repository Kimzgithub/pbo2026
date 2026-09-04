<?php

class author {
    public string $nama;
    public string $deskripsi;

    public function show($type): array {
        return[];
    }
}

class Buku {
    public int $ISBN;
    public string $title;
    public string $deskripsi;
    public string $category;
    public string $language;
    public int $numberOFpage;
    public string $author;
    public string $publish;

    public function showall(): array{
        return [];
    }
    public function detail($ISBN): array {
        return [];
    }
}

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