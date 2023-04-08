<?php
interface TariffInterface
{
    public function getName(): string;
    public function getServices(): array;
    public function countPrice(): int;
    public function addService(ServiceInterface $service): self;
    public function getMinutes(): int;
    public function getDistance(): int;
}
