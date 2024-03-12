<?php 

class Event {
    private ?int $id = 0;
    private string $name = "";
    private string $location = "";
    private int $seat;
    private int $price;
    private int $registered;
    private \DateTimeImmutable $occurredAt;

    public function __construct(?int $id ,string $name, string $location, int $seat, int $price, int $registered, \DateTimeImmutable $occurredAt) {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->seat = $seat;
        $this->price = $price;
        $this->registered = $registered;
        $this->occurredAt = $occurredAt;
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getLocation(): string {
        return $this->location;
    }

    public function getSeat(): int {
        return $this->seat;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getRegistered(): int {
        return $this->registered;
    }

    public function getDate(): string {
        return $this->occurredAt->format("Y-m-d");
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setLocation(string $location): void {
        $this->location = $location;
    }

    public function setSeat(int $seat): void {
        $this->seat = $seat;
    }

    public function setPrice(int $price): void {
        $this->price = $price;
    }

    public function setRegistered(int $registered): void {
        $this->registered = $registered;
    }

    public function setDate(\DateTimeImmutable $occurredAt): void {
        $this->occurredAt = $occurredAt;
    }

}
