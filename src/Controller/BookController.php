<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/books', name: 'book_list')]
    public function list(EntityManagerInterface $emi): Response
    {
        $books = $emi->getRepository(Book::class)->findAll();
        return $this->render('book/list.html.twig', ['books' => $books]);
    }

    #[Route('/book/{id}', name: 'book_show')]
    public function show(Book $book): Response
    {
        return $this->render('book/show.html.twig', ['book' => $book]);
    }


    #[Route('/books/new', name: 'book_new')]
    public function new(Request $request, EntityManagerInterface $emi): Response
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $emi->persist($book);
            $emi->flush();

            return $this->redirectToRoute('book_list');
        }

        return $this->render('book/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/book/{id}/edit', name: 'book_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Book $book, EntityManagerInterface $emi): Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $emi->flush();
            return $this->redirectToRoute('book_list');
        }

        return $this->render('book/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/book/{id}/delete', name: 'book_delete', methods: ['POST'])]
    public function delete(Book $book, EntityManagerInterface $emi): Response
    {
        $emi->remove($book);
        $emi->flush();


        return $this->redirectToRoute('book_list');
    }
}
