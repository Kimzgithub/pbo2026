<?php
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