<?php

declare(strict_types=1);

namespace app\Dto;

class WeatherDetailDto
{
    private int $id;
    private string $description;
    private string $code;

    /**
     * @param int $id
     * @param string $description
     * @param string $code
     */
    public function __construct(
        int $id,
        string $description,
        string $code
    ) {
        $this->id = $id;
        $this->description = $description;
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }
}
