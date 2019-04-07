<?php
interface StrategieInterface
{
    public function reagir(PersonneInterface $personne): string;
}