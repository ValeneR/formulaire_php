<?php
class Car{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __contruct (string $color, int $nbSeats, string $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(){

    }
    public function brake() {

    }
    public function start() {

    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }
    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }
    public function getColor(): string {
        return $this->color;
    }
    public function getNbSeats(): int {
        return $this->nbSeats;
    }
    public function getEnergy(): string {
        return $this->energy;
    }
    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }
}