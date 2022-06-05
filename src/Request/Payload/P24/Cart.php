<?php

declare(strict_types=1);

namespace App\Request\Payload\P24;

class Cart
{
    private string $sellerId;
    private string $sellerCategory;
    private string $name;
    private string $description;
    private int $quantity;
    private int $price;
    private string $number;

    public function getSellerId(): string
    {
        return $this->sellerId;
    }

    public function setSellerId(string $sellerId): void
    {
        $this->sellerId = $sellerId;
    }

    public function getSellerCategory(): string
    {
        return $this->sellerCategory;
    }

    public function setSellerCategory(string $sellerCategory): void
    {
        $this->sellerCategory = $sellerCategory;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }
}
