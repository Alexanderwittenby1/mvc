<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Title',
                'attr' => ['placeholder' => 'Enter the title']
            ])
            ->add('isbn', TextType::class, [
                'label' => 'ISBN',
                'attr' => ['placeholder' => 'Enter the ISBN']
            ])
            ->add('author', TextType::class, [
                'label' => 'Author',
                'attr' => ['placeholder' => 'Enter the author name']
            ])
            ->add('imageUrl', UrlType::class, [
                'label' => 'Image URL',
                'required' => false,
                'attr' => ['placeholder' => 'Optional URL for the book image']
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Save Book'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
