<?php

use PHPUnit\Framework\TestCase;
use App\Entity\Book;


class BookTest extends TestCase {


    public function testCreateBook() {
        $book = new Book("1234567890", "Title", "Author");
        $this->assertInstanceOf(Book::class, $book);
    }

    public function testGetId() {
        $book = new Book("1234567890", "Title", "Author");
        $this->assertNull($book->getId());
    }


    public function testGetTitle() {
        $book = new Book(); // Skapa ett nytt Book-objekt
        $book->setTitle("hej"); // Använd setTitle för att sätta titeln
        $this->assertEquals("hej", $book->getTitle()); // Kontrollera att getTitle returnerar rätt värde
    }

    public function testSetIsbn() {
        $book = new Book(); // Skapa ett nytt Book-objekt
        $book->setIsbn("1234567890"); // Använd setIsbn för att sätta ISBN
        $this->assertEquals("1234567890", $book->getIsbn()); // Kontrollera att getIsbn returnerar rätt värde
    }

    public function testSetAuthor() {
        $book = new Book(); // Skapa ett nytt Book-objekt
        $book->setAuthor("Author"); // Använd setAuthor för att sätta författaren
        $this->assertEquals("Author", $book->getAuthor()); // Kontrollera att getAuthor returnerar rätt värde
    }

    public function testSetImageUrl() {
        $book = new Book(); // Skapa ett nytt Book-objekt
        $book->setImageUrl("https://example.com/image.jpg"); // Använd setImageUrl för att sätta bild-URL:en
        $this->assertEquals("https://example.com/image.jpg", $book->getImageUrl()); // Kontrollera att getImageUrl returnerar rätt värde
    }


}